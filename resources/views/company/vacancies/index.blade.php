@extends('layouts.app')
@section('title', 'Vacatures')

@section('content')

    <div class="main py-4">
        <div class="row">
            @foreach ($vacancies as $vacancy)
                <div class="col-4">
                    <div class="card m-1">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg">
                                    <div class="pb-2 px-3">
                                        <h4>
                                            {{ $vacancy->title }}
                                        </h4>
                                        <hr>
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
                                        <div class="btnwrap">
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
        </div>
    </div>

@endsection
