@extends('layouts.app')
@section('title', 'Mijn Profiel')

@section('content')
    <div class="main py-4">
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10 mb-3">
                        <h3>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h3>
                        <h6 class="card-subtitle mb-2 text-muted">{{ Auth::user()->id }}</h6>
                    </div>
                    <div class="col-md-2 text-end mb-3">
                        <a href="{{ route('settings') }}">profiel bewerken</a>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Contactgegevens:</h5>
                                <hr>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    <b>Email:</b> <a
                                        href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</a><br>
                                    <b>Telefoon:</b> <a
                                        href="tel:{{ Auth::user()->phone }}">{{ Auth::user()->phone }}</a><br>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    @foreach(Auth::user()->link as $link)
                                        <div class="col-4">
                                            <a href="//{{ $link->link }}"
                                               target="_blank">{!! $link->title !!}</a><br>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                @if(Auth::user()->address->count() == 1)
                                    <h5>Adres:</h5>
                                @else
                                    <h5>Adressen:</h5>
                                @endif
                                <hr>
                            </div>
                            @foreach(Auth::user()->address as $address)
                                <div class="col-4">
                                    <div class="card m-1">
                                        <div class="card-body">
                                            <p>
                                                <b>Adres:</b> {{ $address->street }} {{ $address->number }}<br>
                                                <b>Postcode:</b> {{ $address->zipcode }}<br>
                                                <b>Plaats:</b> {{ $address->city }}<br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <br>
                            <div class="col-md-12 mt-3">
                                <h5>Overige Informatie:</h5>
                                <hr>
                            </div>
                            <div class="col-md-12">
                                <p>
                                    <b>Klas:</b> <a href="">{{ Auth::user()->member->grade->name }}</a><br>
                                    @if(auth()->user()->hasAnyRole('admin', 'Admin'))
                                        <b>Soort account:</b> {{ auth()->user()->roles->first()->name }}<br>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Vacaturescard-->

@endsection
