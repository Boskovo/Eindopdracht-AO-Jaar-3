@extends('layouts.app')
@section('title', 'Vacatures')

@section('content')

<div class="card mt-3">
            <div class="card-body">
                        <div class="col-md-10 mb-3">
                            <h3>Vacatures</h3>
                        </div>
                        <hr>
                        <div class="row">
                        @foreach (Auth::user()->company->vacancie as $vacancie)
                            <div class="col-4">
                                <div class="card m-1">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg">
                                                <div class="pb-2 px-3">
                                                    <h4>
                                                        {{ $vacancie->title }}
                                                    </h4>
                                                </div>
                                                <div class="col">
                                                    <ul>
                                                        <li>
                                                            {{ $vacancie->course }}
                                                        </li>
                                                        <li>
                                                            {{ $vacancie->variant }}
                                                        </li>
                                                        <li>
                                                            {{ $vacancie->level }}
                                                        </li>
                                                    </ul>
                                                    <div class="btnwrap">
                                                        <div class="vacaturebutton text-center mb-2 mx-2">
                                                            <div class="vacbtntext">
                                                                <a href="/bedrijven/vacatures/{{ $vacancie->id }}">Bekijk Vacature</a>
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

@endsection