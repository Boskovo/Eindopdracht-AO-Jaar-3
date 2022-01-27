@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="pull-right">
                <a href="{{ URL::previous() }}"><i class="fas fa-long-arrow-alt-left"></i></a>
            </div>
        </div>

        <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h5>Gebruiker aanmaken:</h5>
                    </div>
                    <hr>
                    <div class="col-12">
                        {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="firstname">{{ 'Voornaam:' }}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-user-alt fa-fw"></i>
                                    </span>
                                    {!! Form::text('firstname', null, array('placeholder' => 'Voornaam','class' => 'form-control', 'required')) !!}
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
        </div>
        </div>

    </div>




@endsection
