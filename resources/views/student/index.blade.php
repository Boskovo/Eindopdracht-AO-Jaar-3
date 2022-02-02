@extends('layouts.app')
@section('title', 'Studenten')

@section('content')

    <div class="main py-4">
        <div class="row">
            @foreach($students as $student)
                <div class="col-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h5>{{ $student->firstname }} {{ $student->lastname }}</h5>
                                    <hr>
                                    <p>
                                        {{ $student->email }}<br>
                                        {{ $student->phone }}<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
