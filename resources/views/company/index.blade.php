@extends('layouts.app')
@section('title', 'Bedrijven')

@section('content')

    <div class="row">
        @foreach($companies as $company)
            <div class="col-md-4">
                <a href="{{ $company->link }}">
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



    {{--<div class="container">--}}
    {{--  <div class="row mt-4">--}}
    {{--    <div class="col">--}}
    {{--      <div class="card mb-6 mx-4">--}}
    {{--        <h1 class="m-4">Stagiaires</h1>--}}
    {{--          <div class="m-4 mt-2">--}}
    {{--            <p>Pietje Schroot</p>--}}
    {{--            <p>Christiaan Boldewijn</p>--}}
    {{--            <p>Bastijn Potgrave</p>--}}
    {{--          </div>--}}
    {{--      </div>--}}
    {{--      <div class="card mb-6 mx-4">--}}
    {{--        <h1 class="m-4">Vacatures</h1>--}}
    {{--          <div class="m-4 mt-2">--}}
    {{--              <p>Frontend developer</p>--}}
    {{--              <p>Backend</p>--}}
    {{--              <p>Full stack developer</p>--}}
    {{--          </div>--}}
    {{--          <div class="compbtnwrap mx-3 mb-2">--}}
    {{--            <div class="compbutton text-center">--}}
    {{--              <div class="compbtntext">--}}
    {{--                <a href="">Nieuwe Vacature</a>--}}
    {{--              </div>--}}
    {{--            </div>--}}
    {{--          </div>--}}
    {{--      </div>--}}
    {{--    </div>--}}
    {{--    <div class="col">--}}
    {{--      <div class="card mb-6 mx-4">--}}
    {{--        <h1 class="m-4">Documenten</h1>--}}
    {{--        <div class="mx-4 my-3">--}}
    {{--          <div class="row"> <!--start nieuwe row-->--}}
    {{--            <div class="col">--}}
    {{--              <p>Opdracht.docx</p>--}}
    {{--            </div>--}}
    {{--            <div class="col">--}}
    {{--              <p>IJsbrand Holtjer</p>--}}
    {{--            </div>--}}
    {{--          </div>--}}
    {{--          <div class="row"> <!--start nieuwe row-->--}}
    {{--            <div class="col">--}}
    {{--              <p>Inlogsysteem.php</p>--}}
    {{--            </div>--}}
    {{--            <div class="col">--}}
    {{--              <p>Diogo van de Linde</p>--}}
    {{--            </div>--}}
    {{--          </div>--}}
    {{--          <div class="row"> <!--start nieuwe row-->--}}
    {{--            <div class="col">--}}
    {{--              <p>index.html</p>--}}
    {{--            </div>--}}
    {{--            <div class="col">--}}
    {{--              <p>Ilhan Noordhoek</p>--}}
    {{--              </div>--}}
    {{--            </div>--}}
    {{--          </div>--}}
    {{--        </div>--}}
    {{--        <div class="card mb-6 mx-4">--}}
    {{--        <h1 class="m-4">Goed te keuren</h1>--}}
    {{--          <div class="m-4 mt-2">--}}
    {{--            <p>POK Damianus van den Blink</p>--}}
    {{--            <p>POK Seán Arkema</p>--}}
    {{--            <p>POK Kyano Sap</p>--}}
    {{--          </div>--}}
    {{--        </div>--}}
    {{--      </div>--}}
    {{--    </div>--}}
@endsection
