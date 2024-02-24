@extends('layouts.base')

@section('title')
    {{ config('app.name') }}
@endsection

@section('styles')
    {{-- <style></style> --}}
@endsection

@section('h3')
    My Profiles
@endsection

@section('content')

{{$ads}}
@endsection

@section('scripts')
    {{-- <script></script> --}}
@endsection
