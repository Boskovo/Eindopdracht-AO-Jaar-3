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
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($roles as $role)
                                        <tr>
                                            <th scope="row">{{ $role->id }}</th>
                                            <td>{{ $role->name }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5>Bedrijven:</h5>
                            </div>
                            <div class="col-6 text-end">
                                <a href="{{ route('bedrijven.index') }}">toon meer</a>
                            </div>
                            <div class="col-md-12">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Naam</th>
                                        <th scope="col">Email</th>
                                        <th scope="col" width="280px">Acties</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($companies as $company)
                                        <tr>
                                            <th scope="row">{{ $company->id }}</th>
                                            <td>{{ $company->name }} </td>
                                            <td>{{ $company->email }} </td>
                                            <td>
                                                <a class="text-primary font-medium"
                                                   href="{{ route('bedrijven.edit',$company->id) }}"><i class="fas fa-eye"></i></a>
                                                <form method="POST" action="{{ route('bedrijven.destroy', $company->id) }}">
                                                    <button style="background: none; border: none;" class="text-danger font-medium" type="submit">
                                                        @csrf
                                                        @method('DELETE')
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
{{--                                                <a class="text-danger font-medium"--}}
{{--                                                   href="{{ route('bedrijven.destroy',$company->id) }}"><i--}}
{{--                                                        class="fas fa-trash"></i></a>--}}
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
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5>Klassen:</h5>
                            </div>
                            <div class="col-6 text-end">
                                <a href="{{ route('student.grades.index') }}">toon meer</a>
                            </div>
                            <div class="col-12">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Naam</th>
                                            <th scope="col" width="280px">Acties</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($grades as $grade)
                                            <tr>
                                                <th scope="row">{{ $grade->id }}</th>
                                                <td>{{ $grade->name }} </td>
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

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5>Bestanden:</h5>
                            </div>
                            <div class="col-6 text-end">
                                <a href="">toon meer</a>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($workstates as $workstate)
                                            <tr>
                                                <th scope="row">{{ $workstate->id }}</th>
                                                <td>{{ $workstate->title }}</td>
                                                <td>{{ $workstate->created_at }}</td>
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
    </div>

@endsection
