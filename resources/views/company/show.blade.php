@extends('layouts.app')
@section('title', "$company->name")

@section('content')


    <div class="main py-4">
        <div class="row">
            <div class="col-8 mb-4">
                <div class="card">
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5><b>{{ $company->name }}</b></h5>
                        <hr>
                        <p>
                            <b>Email:</b> <a href="mailto:{{ $company->email }}">{{ $company->email }}</a><br>
                            <b>Telefoon:</b> <a href="tel:{{ $company->phone }}">{{ $company->phone }}</a><br>
                            <b>Website:</b> <a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a>
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
                            <b>Aantal vacatures online:</b> {{ $company->vacancie->count() }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                        <div class="row">
                            <div class="col-6">
                                <h5>Vacatures:</h5>
                            </div>
                            <div class="col-6 text-end">
                                <a href="{{ route('company.create.vacancy') }}"><i class="fas fa-plus"></i> voeg toe</a>
                            </div>
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
                                                                    <a href="{{ route('company.vacancy.show', $vacancy->id) }}">Bekijk Vacature</a>
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

                </div>

            </div>
        </div>
    </div>

@endsection
