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
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    {{-- <th>Description</th> --}}
                    <th>Status</th>
                    <th>Visits</th>
                    {{-- <th>Actions</th> --}}
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ads as $ad)
                    <tr>
                        <td>{{ $ad->title }}</td>
                        {{-- <td>{{ $ad->description }}</td> --}}
                        <td>{{ $ad->status ? 'Active' : 'Inactive' }}</td>
                        <td>{{ $ad->visit }}</td>
                        <td>{{ $ad->created_at }}</td>
                        <td>{{ $ad->updated_at }}</td>
                        {{-- <td> --}}
                        {{-- Aquí puedes agregar enlaces para editar o eliminar el anuncio --}}
                        {{-- Por ejemplo: --}}
                        {{-- <a href="{{ route('ads.edit', $ad->id) }}" class="btn btn-primary">Edit</a> --}}
                        {{-- <a href="{{ route('ads.destroy', $ad->id) }}" class="btn btn-danger">Delete</a> --}}
                        {{-- </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- Agregar enlaces de paginación --}}
    {{ $ads->links() }}
@endsection

@section('scripts')
    {{-- <script></script> --}}
@endsection
