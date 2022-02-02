@extends('layouts.app')
@section('title', 'Bedrijven')

@section('content')

    <div class="main py-4">
        <div class="row">
            @if(auth()->user()->hasAnyRole('Admin', 'admin'))
                <div class="col-12 text-end mb-4">
                    <a href="{{ route('bedrijven.create') }}"><i class="fas fa-plus"></i> voeg een bedrijf toe</a>
                </div>
            @endif
            @foreach($companies as $company)
                <div class="col-md-4">
                    <a href="{{ route('bedrijven.show', $company->id) }}">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <h5>{{ $company->name }}</h5>
                                        <hr>
                                        <p>
                                            <b>Telefoon:</b>
                                            {{ $company->phone }}<br>
                                            <b>Email:</b>
                                            {{ $company->email }}<br>

                                        </p>
                                    </div>
                                    <div class="col-4">
                                        <img src="{{ asset("images/companies/$company->logo") }}" alt=""
                                             class="h-100">
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
