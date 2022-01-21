@extends('layouts.app')
@section('title', 'Mijn Profiel')

@section('content')
    <div class="main py-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-11">
                        <h3>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h3>
                        <h6 class="card-subtitle mb-2 text-muted">139970</h6>
                    </div>
                    <div class="col-md-1">
                        <a href="{{ route('settings') }}">profiel bewerken</a>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Contactgegevens:</h5>
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
                                            <a href="{{ $link->links }}"
                                               target="_blank">{!! $link->icon !!}  {{ $link->title }}</a><br>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h5>Adres:</h5>
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
                            <div class="col-md-12">
                                <h5>Overige Informatie:</h5>
                            </div>
                            <div class="col-md-12">
                                <p>
                                    <b>Klas:</b> <a href="">als gebruiker student dan show dit en geef klas weer</a><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
