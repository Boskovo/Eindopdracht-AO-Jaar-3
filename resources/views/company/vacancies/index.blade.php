@extends('layouts.app')
@section('title', 'Vacatures')

@section('content')
<div class="container">
  <div class="row pt-3">
    <div class="col-md-8 ps-2 mb-2">
        <div class="card mb-2">
            <div class="card-body">
                <div class="">
                    <h1>{{ $vacancie->title }}</h1>
                </div>
                <div class="card">
                    <div class="card-body">
                        <p>{{ $vacancie->body }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl">
                        <h6>Locatie:</h6>
                        <h6 class="text-muted">{Locatie}</h6>
                    </div>
                    <div class="col-xl">
                        <h6>Periode:</h6>
                        <h6 class="text-muted">{{ $vacancie->start_date }} tot {{ $vacancie->end_date }} </h6>
                    </div>
                    <div class="col-xl">
                       <h6>Gewijzigd:</h6>
                       <h6 class="text-muted">op {{ $vacancie->timestamps }}</h6>
                    </div>
                    <div class="col-xl">
                        <h6>Beschikbaar:</h6>
                        @if($vacancie->is_active == 1)
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
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                                et dolore magna aliqua. Elementum sagittis vitae et leo duis ut diam quam. 
                                </p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h4>Naar wie zijn we op zoek?</h4>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                                et dolore magna aliqua. Elementum sagittis vitae et leo duis ut diam quam. 
                                </p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h4>Wat biedt het bedrijf?</h4>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                                et dolore magna aliqua. Elementum sagittis vitae et leo duis ut diam quam. 
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
                  <h2>{{ $vacancie->company->name }}</h2>
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
                          <b>Adres:</b> {{ $vacancie->company->address_street }} {{ $vacancie->company->address_street_number }}<br>
                          <b>Postcode:</b> {{ $vacancie->company->address_zip }}<br>
                          <b>Plaats:</b> {{ $vacancie->company->address_city }}<br>
                      </p>
                      <div class="mt-2">
                          <h4>Contactgegevens:</h4>
                      </div>
                      <p>
                          <b>Contactpersoon:</b> Joao Litjens<br>
                          <b>Email:</b> {{ $vacancie->company->email }}<br>
                          <b>Telefoon:</b> {{ $vacancie->company->phone }} <br>
                      </p>
                      <div class="mt-2">
                          <h4>Leerbedrijf ID:</h4>
                          <p class="text-muted">{{ $vacancie->company_id }}</p>
                      </div>
                  </div>
              </div>
              <div class="row mt-2">
                  <div class="col-4">
                        <div class="btnwrap">
                            <div class="contactbutton text-center">
                                <div class="vacbtntext">
                                    <a href="">Contact</a>
                                </div>
                            </div>
                        </div>
                  </div>
                  <div class="col-8">
                        <div class="btnwrap ms-4">
                            <div class="vacsitebutton text-center">
                                <div class="vacbtntext">
                                    <a href="">Bekijk Op Website</a>
                                </div>
                            </div>
                        </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
@endsection