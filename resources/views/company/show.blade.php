@extends('layouts.app')
@section('title', "$company->name")

@section('content')


    <div class="main py-4">
        <div class="row">
            @if (auth()->user()->hasAnyRole('Admin', 'admin'))
            {
            <div class="col-8 mb-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('company.update', $company->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">

                                <div class="col-md-6 mb-3">
                                    <label for="name">{{ 'Bedrijfsnaam:' }}</label>
                                    <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-user-alt fa-fw"></i>
                                    </span>
                                        <input id="name" class="form-control" type="text" name="name"
                                               placeholder="{{ __('Naam') }}"
                                               value="{{ old('name', $company->name) }}">
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
                                               value="{{ old('email', $company->email) }}">
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
                                               value="{{ old('phone', $company->phone) }}">
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
                                               placeholder="{{ __('BTW-Nummer') }}"
                                               value="{{ old('vat_number', $company->vat_number) }}">
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
                                               value="{{ old('website', $company->website) }}">
                                    </div>
                                    @error('website')
                                    <div class="invalid-feedback"> {{ $message }} </div> @enderror
                                </div>

                                <hr>
                                <div class="col-md-6 mb-3">
                                    <label for="address_street">{{ 'Straat:' }}</label>
                                    <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-location-arrow"></i>
                                    </span>
                                        <input id="address_street" class="form-control" type="text"
                                               name="address_street"
                                               placeholder="{{ __('Straat') }}"
                                               value="{{ old('address_street', $company->address_street) }}">
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
                                        <input id="address_street_number" class="form-control" type="text"
                                               name="address_street_number"
                                               placeholder="{{ __('Nummer') }}"
                                               value="{{ old('address_street_number', $company->address_street_number) }}">
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
                                        <input id="address_zipcode" class="form-control" type="text"
                                               name="address_zipcode"
                                               placeholder="{{ __('Postcode') }}"
                                               value="{{ old('address_zipcode', $company->address_zipcode) }}">
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
                                               placeholder="{{ __('Plaats') }}"
                                               value="{{ old('address_city', $company->address_city) }}">
                                    </div>
                                    @error('address_city')
                                    <div class="invalid-feedback"> {{ $message }} </div> @enderror
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 text-start">
                                    <button type="submit" class="btn btn-primary">Verstuur</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endif
            <div class="col-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset("images/companies/$company->logo") }}" alt=""
                                 class="w-25">
                        </div>
                        <hr>
                        <h5><b>{{ $company->name }}</b></h5>
                        <hr>
                        <p>
                            <b>Email:</b> <a href="mailto:{{ $company->email }}">{{ $company->email }}</a><br>
                            <b>Telefoon:</b> <a href="tel:{{ $company->phone }}">{{ $company->phone }}</a><br>
                            <b>Website:</b> <a href="{{ $company->website }}"
                                               target="_blank">{{ $company->website }}</a>
                        </p>
                        <hr>
                        <p>
                            <b>Adres:</b> {{ $company->address_street }} {{ $company->address_street_number }}<br>
                            <b>Plaats:</b> {{ $company->address_city }}<br>
                            <b>Postcode:</b> {{ $company->address_zipcode }}
                        </p>
                        <hr>
                        <p>
                            <b>BTW-Nummer:</b> {{ $company->vat_number }}<br>
                            <b>Aantal vacatures online:</b> {{ $company->vacancie->count() }}<br>
                        </p>
                        @if(auth()->user()->hasAnyRole('admin', 'Admin'))
                            <hr>
                            <a href="{{ route('bedrijven.destroy', $company->id) }}" class="card-link text-danger"><i
                                    class="fas fa-trash-alt"></i></a>
                        @endif

                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <h5>Vacatures:</h5>
                    </div>
                    @if(auth()->user()->hasAnyRole('admin', 'Admin'))
                    <div class="col-6 text-end">
                        <a href="{{ route('company.create.vacancy') }}"><i class="fas fa-plus"></i> voeg toe</a>
                    </div>
                    @endif
                    @if($company->vacancie->count() == 0)
                        <div class="text-center">
                            <h5>Dit bedrijf heeft geen vacatures!</h5>
                        </div>

                    @else
                        @foreach($company->vacancie as $vacancy)
                            <div class="col-4">
                                <div class="card m-1">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg">
                                                <div class="pb-2 px-3">
                                                    <h4>
                                                        {{ $vacancy->title }}
                                                    </h4>
                                                </div>
                                                <div class="col">
                                                    <ul>
                                                        <li>
                                                            <b>Bedrijf: </b>{{ $vacancy->company->name }}
                                                        </li>
                                                        <li>
                                                            <b>Opleiding:</b>{{ $vacancy->course }}
                                                        </li>
                                                        <li>
                                                            <b>BOL/BBL: </b>{{ $vacancy->variant }}
                                                        </li>
                                                        <li>
                                                            <b>Niveau: </b>{{ $vacancy->level }}
                                                        </li>
                                                    </ul>
                                                    <div class="btnwrap text-center">
                                                        <div class="vacaturebutton text-center mb-2 mx-2">
                                                            <div class="vacbtntext">
                                                                    <a href="{{ route('company.vacancy.show', $vacancy->id) }}">Bekijk
                                                                        Vacature</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>

            </div>
        </div>
    </div>

@endsection
