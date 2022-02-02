@extends('layouts.app')
@section('title', 'Bedrijven')

@section('content')

    <div class="main py-4">
        <div class="row">
            <div class="col-12 text-end">
                <a href="{{ route('bedrijven.create') }}"><i class="fas fa-plus"></i> voeg een bedrijf toe</a>
            </div>
            @foreach($companies as $company)
                <div class="col-md-4">
                    <a href="{{ route('bedrijven.show', $company->id) }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <h5>{{ $company->name }}</h5>
                                        <hr>
                                        <p>
                                            <b>Telefoon:</b> <a
                                                href="tel:{{ $company->phone }}">{{ $company->phone }}</a><br>
                                            <b>Email:</b> <a href="mailto:{{ $company->email }}">{{ $company->email }}</a>
                                        </p>
                                    </div>
                                    <div class="col-4">
                                        <img src="{{ asset('images/companies/praes/praes.png') }}" alt="" class="w-100">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>

            @endforeach
        </div>
    </div>

@endsection
