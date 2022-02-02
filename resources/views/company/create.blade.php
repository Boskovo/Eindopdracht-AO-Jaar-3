@extends('layouts.app')
@section('title', 'Bedrijf aanmaken')

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
                        {!! Form::open(array('route' => 'bedrijven.store','method'=>'POST', 'enctype' => 'multipart/form-data')) !!}
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
                                </div>
                                @error('website')
                                <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="user_id">{{ 'Welke gebruiker' }}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-users"></i>
                                    </span>
                                    <select id="user_id" name="user_id" class="form-control">
                                        <option value="">--- Selecteer een gebruiker ---</option>
                                        @foreach($users as $user)
                                            <option value='{{ $user->id }}'>{{ $user->firstname }} {{ $user->lastname }}
                                                , {{ $user->email }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('user_id')
                                <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="logo">{{ 'Logo:' }}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-images"></i>
                                    </span>
                                    <input id="logo" class="form-control" type="file" name="image"
                                           placeholder="{{ __('Logo') }}"
                                           required>
                                </div>
                                @error('logo')
                                <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>
                            <hr>
                            <div class="col-md-6 mb-3">
                                <label for="address_street">{{ 'Straat:' }}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-location-arrow"></i>
                                    </span>
                                    <input id="address_street" class="form-control" type="text" name="address_street"
                                           placeholder="{{ __('Straat') }}">
                                </div>
                                @error('address_street')
                                <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="address_street_number">{{ 'Nummer:' }}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-sort-numeric-up-alt"></i>
                                    </span>
                                    <input id="address_street_number" class="form-control" type="text" name="address_street_number"
                                           placeholder="{{ __('Nummer') }}">
                                </div>
                                @error('address_street_number')
                                <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="address_zipcode">{{ 'Postcode:' }}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-globe-europe"></i>
                                    </span>
                                    <input id="address_zipcode" class="form-control" type="text" name="address_zipcode"
                                           placeholder="{{ __('Postcode') }}">
                                </div>
                                @error('address_zipcode')
                                <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="address_city">{{ 'Plaats:' }}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-city"></i>
                                    </span>
                                    <input id="address_city" class="form-control" type="text" name="address_city"
                                           placeholder="{{ __('Plaats') }}">
                                </div>
                                @error('address_city')
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
