@extends('layouts.app')
@section('title', 'Studenten')

@section('content')

    <div class="main py-4">
        @foreach($students as $student)
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h5>{{ $student->firstname }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
