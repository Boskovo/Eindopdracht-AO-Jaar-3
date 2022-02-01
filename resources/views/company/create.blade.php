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
                        @csrf
                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="name">{{ 'Bedrijfsnaam:' }}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-user-alt fa-fw"></i>
                                    </span>
                                    <input id="name" class="form-control" type="text" name="name"
                                           placeholder="{{ __('Naam') }}"
                                           required>
                                    {{--                                    {!! Form::text('name', null, array('placeholder' => 'Bedrijfsnaam','class' => 'form-control', 'required')) !!}--}}
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
                                    <input id="name" class="form-control" type="email" name="email"
                                           placeholder="{{ __('Email') }}"
                                           required>
                                    {{--                                    {!! Form::email('email', null, array('placeholder' => 'Email','class' => 'form-control', 'required')) !!}--}}
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
                                    <input id="phone" class="form-control" type="text" name="phone"
                                           placeholder="{{ __('Telefoon') }}"
                                           required>
                                    {{--                                    {!! Form::text('phone', null, array('placeholder' => 'Telefoon','class' => 'form-control', 'required')) !!}--}}
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
                                    <input id="vat_number" class="form-control" type="text" name="vat_number"
                                           placeholder="{{ __('BTW-Nummer') }}">
                                    {{--                                    {!! Form::text('vat_number', null, array('placeholder' => 'BTW-Nummer','class' => 'form-control', 'required')) !!}--}}
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
                                    <input id="website" class="form-control" type="url" name="website"
                                           placeholder="{{ __('Website') }}"
                                           required>
                                    {{--                                    {!! Form::url('website', null, array('placeholder' => 'Website','class' => 'form-control', 'required')) !!}--}}
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
                                    <select id="link-title" name="title" class="form-control">
                                        <option value="">--- Selecteer een gebruiker ---</option>
                                        @foreach($users as $user)
                                        <option value='{{ $user->id }}'>{{ $user->firstname }} {{ $user->lastname }}, {{ $user->email }}</option>
                                        @endforeach
                                    </select>
                                    {{--                                    {!! Form::select('user_id', $users,[], array('class' => 'form-control', 'value' => $users->id)) !!}--}}
                                </div>
                                @error('user_id')
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
