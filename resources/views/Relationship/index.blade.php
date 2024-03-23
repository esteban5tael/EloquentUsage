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
        <h1>Users</h1>
        <div class="row">
            @foreach ($users as $user)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title text-center">
                                <h3>{{ $user->name }}</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-text text-center">
                                @foreach ($user->roles as $role)
                                    <p>{{ $role->name }} | <strong>Status: </strong><b>{{$role->pivot->status?'Active':'Inactive'}}</b></p>
                                @endforeach
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="card-text text-center">
{{$user->created_at}}
                            </div>
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
