@extends('layouts.app')
@section('title', 'Zoekresultaten')

@section('content')


    <div class="main py-4">
        @if($users->isNotEmpty())
            @foreach ($users as $user)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <p>{{ $user->firstname }} {{ $user->lastname }}</p>
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
        @else
            <div>
                <h2>Geen resultaten gevonden</h2>
            </div>
        @endif

            @if($grades->isEmpty())
                @foreach ($grades as $garde)
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
            @else
                <div>
                    <h2>Geen resultaten gevonden</h2>
                </div>
            @endif
    </div>

@endsection
