@extends('layouts.app')
@section('title', 'Zoekresultaten')

@section('content')


    <div class="main py-4">
        <div class="row">
            @if($users->isNotEmpty())
                @foreach ($users as $user)
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <p>{{ $user->firstname }} {{ $user->lastname }}</p>
                                    </div>
                                    <div class="col-6 text-end">
                                        <p>
                                            @if(!empty($user->getRoleNames()))
                                                @foreach($user->getRoleNames() as $v)
                                                    <span class="badge rounded-pill bg-primary">{{ $v }}</span>
                                                    {{--                                <label class="badge badge-success"></label>--}}
                                                @endforeach
                                            @endif
                                        </p>
                                    </div>
                                    <div class="col-12">
                                        <hr>
                                        <p>
                                            {{ $user->email }}<br>
                                            {{ $user->phone }}
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

            @if($grades->isNotEmpty())
                @foreach ($grades as $grade)
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <p>{{ $grade->name }}</p>s
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

            @if($companies->isNotEmpty())
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
                                                {{ $company->email }}
                                            </p>
                                            <p><b>Website:</b> {{$company->website}}</p>
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
            @endif

            @if($vacancies->isNotEmpty())
                @foreach($vacancies as $vacancy)
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
            @endif

        </div>

    </div>

@endsection
