@extends('layouts.base')

@section('title')
    {{ config('app.name') }}
@endsection

@section('styles')
    {{-- <style></style> --}}
    <style>
        .role-card {
            margin-bottom: 20px;
        }
    </style>
@endsection

@section('h3')
    {{ config('app.name') }}
@endsection

@section('content')
<div class="container">
    <h1>Roles</h1>
    <div class="row">
        @foreach($roles as $role)
            <div class="col-md-4">
                <div class="card role-card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $role->name }}</h5>
                        <p class="card-text">{{ $role->description }}</p>
                        <ul class="list-group">
                            <li class="list-group-item">Users:</li>
                            @foreach($role->users as $user)
                                <li class="list-group-item">{{ $user->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@section('scripts')
    {{-- <script></script> --}}
@endsection
