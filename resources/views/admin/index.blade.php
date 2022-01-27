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
                                    <th scope="col">Email</th>
                                    <th scope="col" width="280px">Acties</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->firstname }} {{ $user->lastname }}</td>
                                    <td class="text-center">
                                    @if(!empty($user->getRoleNames()))
                                        @foreach($user->getRoleNames() as $v)
                                            <span class="badge rounded-pill bg-primary">{{ $user->roles->first()->name }}</span>
                                        @endforeach
                                    @endif
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                                        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                        <a class="btn btn-success" href="{{ route('users.destroy',$user->id) }}"> Delete</a>
                                    </td>
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
