@extends('layouts.app')
@section('title', 'Admin Dashboard')

@section('content')


    <div class="main py-4">

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h5>Bedrijf aanmaken:</h5>
                    </div>
                    <hr>
                    <div class="col-12">
                        {!! Form::open(array('route' => 'bedrijven.store','method'=>'POST')) !!}
                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="name">{{ 'Bedrijfsnaam:' }}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-user-alt fa-fw"></i>
                                    </span>
                                    {!! Form::text('name', null, array('placeholder' => 'Bedrijfsnaam','class' => 'form-control', 'required')) !!}
                                </div>
                                @error('name')
                                <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="email">{{ 'Email:' }}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    {!! Form::email('email', null, array('placeholder' => 'Email','class' => 'form-control', 'required')) !!}
                                </div>
                                @error('email')
                                <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="phone">{{ 'Telefoon:' }}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-phone"></i>
                                    </span>
                                    {!! Form::text('phone', null, array('placeholder' => 'Telefoon','class' => 'form-control', 'required')) !!}
                                </div>
                                @error('phone')
                                <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="vat_number">{{ 'BTW-Nummer:' }}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-percent"></i>
                                    </span>
                                    {!! Form::text('vat_number', null, array('placeholder' => 'BTW-Nummer','class' => 'form-control', 'required')) !!}
                                </div>
                                @error('vat_number')
                                <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="website">{{ 'Website:' }}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-globe-europe"></i>
                                    </span>
                                    {!! Form::url('website', null, array('placeholder' => 'Website','class' => 'form-control', 'required')) !!}
                                </div>
                                @error('website')
                                <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="user_id">{{ 'Welke link' }}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-users"></i>
                                    </span>
                                    {!! Form::select('user_id[]', $users,[], array('class' => 'form-control')) !!}
                                </div>
                                @error('title')
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

@endsection
