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
    <div class="container m-1 p-1 text-center">
        <div class="row">
            <div class="col">

                <div class="table-responsive">
                    <table class="table table-secondary">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th>Name</th>
                                <th>Lastname</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($profiles as $key => $profile)
                                <tr class="">
                                    <td scope="row">{{ $key + 1 }}</td>

                                    <td scope="col">{{ $profile->name }} </td>
                                    <td scope="col">{{ $profile->lastname }} </td>
                                    <td scope="col">{{ $profile->address }} </td>
                                    <td scope="col">{{ $profile->phone }} </td>
                                    <td scope="col">{{ $profile->email }} </td>
                                    <td scope="col">{{ $profile->status == 1 ? 'Active' : 'Inactive' }} </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col">
                        {{ $profiles->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    {{-- <script></script> --}}
@endsection
