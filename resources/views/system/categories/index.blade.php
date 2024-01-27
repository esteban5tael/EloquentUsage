@extends('layouts.base')

@section('title')
    {{ config('app.name') }}
@endsection

@section('styles')
    {{-- <style></style> --}}
@endsection

@section('h3')
    {{ config('app.name') }}
@endsection

@section('content')

    {{-- Session message  --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- Session Message --}}

    {{-- Create Form --}}
    @include('system.categories.create')
    {{-- Create Form --}}

    <hr>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Actions</th>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr class="">
                        <td scope="row">
                            <form action="{{ route('system.categories.destroy', $category->id) }}" method="POST">
                                <a class="btn btn-sm btn-primary "
                                    href="{{ route('system.categories.edit', $category->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?')">
                                    Destroy</button>
                            </form>
                        </td>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->status ? 'Active' : 'Down' }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        {{ $categories->links() }}
    </div>
@endsection

@section('scripts')
    {{-- <script></script> --}}
@endsection
