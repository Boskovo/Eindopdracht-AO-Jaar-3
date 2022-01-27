@extends('layouts.app')
@section('title', 'Mijn Profiel')

@section('content')
    <div class="main py-4">
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10 mb-3">
                        <h3>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h3>
                        <h6 class="card-subtitle mb-2 text-muted">139970</h6>
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
                                    <b>Persoonlijk Email:</b> <a
                                        href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</a><br>
                                    <b>Zakelijke Email:</b> <a
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
                                                <b>Telefoon:</b> {{ $address->phone }}
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
                                    <b>Klas:</b> <a href="">als gebruiker student dan show dit en geef klas weer</a><br>
                                    @if(auth()->user()->hasRole('admin'))
                                        <b>Soort account:</b> {{ auth()->user()->roles->first()->name  }}<br>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Vacaturescard-->
        <div class="card"> 
            <div class="card-body">
                <div class="row">
                    <div class="">
                        <div class="col-md-10 mb-3">
                            <h3>Vacatures</h3>
                            <hr>
                        </div>
                        <div class="container mx-3 my-3 stage">
                            <div class="row">
                                <div class="col">
                                    <div class="pt-3 px-3">
                                        <h3>Frontend developer</h3>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li>{Opleiding}</li>
                                            <li>{BOL/BBL}</li>
                                            <li>{MBO-Niveau}</li>
                                        </ul>
                                        <div class="btnwrap mx-5 mb-3">
                                            <div class="vacaturebutton text-center mb-2">
                                                <a href="">Bekijk Vacature</a>
                                            </div>
                                        </div>
                                        <!--<div class="vr"></div>-->
                                    </div>
                                </div>
                                <div class="col-xl">
                                    <div class="container my-3 w-100 h-75 stagebeschrijving">
                                        <div class="p-3">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                                Quam nulla porttitor massa id neque aliquam vestibulum morbi blandit. 
                                                Egestas quis ipsum suspendisse ultrices gravida dictum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
