@extends('layouts.app')
@section('title', 'Klassen')

@section('content')

    <div class="main py-4">
        @foreach($grades as $grade)
            <div class="col-2">
                <div class="card">
                    <div class="card-body">
                        <h5>{{ $grade->name }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
