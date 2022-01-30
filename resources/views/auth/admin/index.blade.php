@extends('layouts.app')
@section('title', 'Admin Dashboard')

@section('content')


    <div class="main py-4">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5>Gebruikers:</h5>
                            </div>
                            <div class="col-6 text-end">
                                <p><a href="{{ route('users.index') }}">toon meer</a></p>
                            </div>
                            <div class="col-md-12">
                                <table class="table table-hover">
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
                                    @foreach ($users as $user)
                                        <tr>
                                            <th scope="row">{{ $user->id }}</th>
                                            <td>{{ $user->firstname }} {{ $user->lastname }}</td>
                                            <td>
                                                @if(!empty($user->getRoleNames()))
                                                    @foreach($user->getRoleNames() as $v)
                                                        <span class="badge rounded-pill bg-primary">{{ $v }}</span>
                                                        {{--                                <label class="badge badge-success"></label>--}}
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <a class="text-primary font-medium"
                                                   href="{{ route('users.edit',$user->id) }}"><i class="fas fa-eye"></i></a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a class="text-danger font-medium"
                                                   href="{{ route('users.destroy',$user->id) }}"><i
                                                        class="fas fa-trash"></i></a>
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
            <div class="col-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5>Rollen:</h5>
                            </div>
                            <div class="col-6 text-end">
                                <p><a href="{{ route('roles.index') }}">toon meer</a></p>
                            </div>
                            <div class="col-12">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Naam</th>
                                        <th scope="col">Acties</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($roles as $role)
                                        <tr>
                                            <th scope="row">{{ $role->id }}</th>
                                            <td>{{ $role->name }}</td>
                                            <td>
                                                <a class="text-primary font-medium"
                                                   href="{{ route('users.edit',$user->id) }}"><i class="fas fa-eye"></i></a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a class="text-danger font-medium"
                                                   href="{{ route('users.destroy',$user->id) }}"><i
                                                        class="fas fa-trash"></i></a>
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
    </div>

    <div class="col-4">

    </div>
    </div>

@endsection
