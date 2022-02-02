@extends('layouts.app')
@section('title', 'Vacature')

@section('content')
<div class="container">
  <div class="row pt-3">
    <div class="col-md-8 ps-2 mb-2">
        <div class="card mb-2">
            <div class="card-body">
                <div class="">
                    <h1>{{ $vacancy->title }}</h1>
                </div>
                <div class="card">
                    <div class="card-body">
                        <p>{{ $vacancy->body }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl">
                        <h6>Locatie:</h6>
                        <h6 class="text-muted">{{ $vacancy->location }}</h6>
                    </div>
                    <div class="col-xl">
                        <h6>Periode:</h6>
                        <h6 class="text-muted">{{ $vacancy->start_date }} tot {{ $vacancy->end_date }} </h6>
                    </div>
                    <div class="col-xl">
                       <h6>Gewijzigd:</h6>
                       <h6 class="text-muted">op {{ $vacancy->updated_at }}</h6>
                    </div>
                    <div class="col-xl">
                        <h6>Beschikbaar:</h6>
                        @if($vacancy->is_active == 1)
                            <i class="fas fa-check text-success"></i>
                        @else
                            <i class="fas fa-times text-danger"></i>
                        @endif
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="mt-2">
                            <h4>Wat ga je leren?</h4>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <p>
                                {{  $vacancy->learn }}
                                </p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h4>Naar wie zijn we op zoek?</h4>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <p>
                                {{ $vacancy->demands }}
                                </p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h4>Wat biedt het bedrijf?</h4>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <p>
                                {{ $vacancy->offer }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 px-2">
      <div class="card">
          <div class="card-body">
              <div class="">
                  <h2>{{ $vacancy->company->name }}</h2>
              </div>
              <div class="card">
                  <div class="card-body">
                    <img src="https://www.qlic.nl/assets/img/logo.svg" class="img-fluid" alt="logo">
                  </div>
              </div>
              <div class="row">
                  <div class="col">
                      <div class="mt-5">
                          <h4>Adresgegevens:</h4>
                      </div>
                      <p>
                          <b>Adres:</b> {{ $vacancy->company->address_street }} {{ $vacancy->company->address_street_number }}<br>
                          <b>Postcode:</b> {{ $vacancy->company->address_zip }}<br>
                          <b>Plaats:</b> {{ $vacancy->company->address_city }}<br>
                      </p>
                      <div class="mt-2">
                          <h4>Contactgegevens:</h4>
                      </div>
                      <p>
                          <b>Contactpersoon:</b> {{ $vacancy->company->user->firstname }} {{ $vacancy->company->user->lastname }}<br>
                          <b>Email:</b> {{ $vacancy->company->email }}<br>
                          <b>Telefoon:</b> {{ $vacancy->company->phone }} <br>
                      </p>
                      <div class="mt-2">
                          <h4>Leerbedrijf ID:</h4>
                          <p class="text-muted">{{ $vacancy->company_id }}</p>
                      </div>
                  </div>
              </div>
              <div class="row mt-2">
                  <div class="col-4">
                        <div class="btnwrap">
                            <div class="contactbutton text-center">
                                <div class="vacbtntext">
                                    <a href="mailto:{{ $vacancy->company->email }}">Contact</a>
                                </div>
                            </div>
                        </div>
                  </div>
                  <div class="col-8">
                        <div class="btnwrap ms-4">
                            <div class="vacsitebutton text-center">
                                <div class="vacbtntext">
                                    <a href="{{ $vacancy->company->website }} " target="_blank">Bekijk Op Website</a>
                                </div>
                            </div>
                        </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
@endsection
