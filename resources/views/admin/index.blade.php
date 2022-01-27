@extends('layouts.app')
@section('title', 'Admin Dashboard')

@section('content')


    <div class="main py-4">
        <div class="row">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Gebruikers:</h5>
                        </div>
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Naam</th>
                                    <th scope="col">Soort Account</th>
                                    <th scope="col">Handle</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->firstname }} {{ $user->lastname }}</td>
{{--                                    <td>{{ $user->roles->first()->name  }}</td>--}}
                                    <td>{{ $user->firstname }} {{ $user->lastname }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="col-4">

        </div>
    </div>

@endsection
