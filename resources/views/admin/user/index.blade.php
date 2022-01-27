@extends('layouts.app')


@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-10">
                    <h5>Gebruikers:</h5>
                </div>
                <div class="col-md-2 text-end">
                    <p><a href="{{ route('users.create') }}">gebruiker toevoegen</a></p>
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
                        @foreach ($data as $key => $user)
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
{{--                                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>--}}
                                    <a class="text-primary font-medium" href="{{ route('users.edit',$user->id) }}"><i class="fas fa-eye"></i></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a class="text-danger font-medium" href="{{ route('users.destroy',$user->id) }}"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
