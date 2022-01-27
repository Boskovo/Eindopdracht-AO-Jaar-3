@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-12">
            <a href="{{ URL::previous() }}"><i class="fas fa-long-arrow-alt-left"></i></a>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h5>Gebruiker bewerken:</h5>
                    <hr>
                    {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstname">{{ 'Voornaam:' }}</label>
                            <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-user-alt fa-fw"></i>
                                    </span>
                                {!! Form::text('firstname', null, array('placeholder' => 'Voornaam','class' => 'form-control')) !!}
                            </div>
                            @error('firstname')
                            <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="lastname">{{ 'Achternaam:' }}</label>
                            <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-user-alt fa-fw"></i>
                                    </span>
                                {!! Form::text('lastname', null, array('placeholder' => 'Achternaam','class' => 'form-control', 'required')) !!}
                            </div>
                            @error('lastname')
                            <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email">{{ 'Email:' }}</label>
                            <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control', 'required')) !!}
                            </div>
                            @error('email')
                            <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="role">{{ 'Soort gebruiker:' }}</label>
                            <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-user-tag"></i>
                                    </span>
                                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control')) !!}
                            </div>
                            @error('role')
                            <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="password">{{ 'Wachtwoord:' }}</label>
                            <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                {!! Form::password('password', array('placeholder' => 'Wachtwoord','class' => 'form-control', 'required')) !!}
                            </div>
                            @error('password')
                            <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="repeat_password">{{ 'Wachtwoord herhalen:' }}</label>
                            <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                {!! Form::password('confirm-password', array('placeholder' => 'Wachtwoord bevestigen','class' => 'form-control', 'required')) !!}
                            </div>
                            @error('repeat_password')
                            <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 text-start">
                            <button type="submit" class="btn btn-primary">Verstuur</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <h5>{{ $user->firstname }} {{ $user->lastname }}</h5>
                <hr>
                <p><b>Email:</b> {{ $user->email }}</p>
                @if($user->phone )
                <p><b>Telefoon:</b> {{ $user->phone }}</p>
                @endif
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                        <p><b>Soort account:</b> <span class="badge rounded-pill bg-primary">{{ $v }}</span></p>
                    @endforeach
                @endif
            </div>
        </div>
    </div>




@endsection
