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
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('system.categories.update', $category) }}" method="POST" class="m-2">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">{{ __('Name') }}</label>
            <input type="text"class="form-control" name="name" id="name" aria-describedby="helpId"
                placeholder="Name" value="{{ old('name', $category->name) }}" required />


            <a class="btn btn-warning btn-sm mt-2" href="{{ route('system.categories.index') }}">{{ __('Back') }}</a>
            <button class="btn btn-success btn-sm mt-2" type="submit">{{ __('Save') }}</button>
        </div>

    </form>
@endsection

@section('scripts')
    {{-- <script></script> --}}
@endsection
