@extends('layouts.app')
@section('title', 'Mijn Profiel')

@section('content')
    <div class="main py-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h3>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h3>
                        <h6 class="card-subtitle mb-2 text-muted">{{ Auth::user()->email }}</h6>
                    </div>
                    <div class="col-md-10">

                    </div>
                    <div class="col-md-2">
                        <img class=" rounded-circle"
                             src="https://ui-avatars.com/api/?background=random&name={{ Auth::user()->firstname }}{{ Auth::user()->lastname  }}"
                             alt="{{ Auth::user()->firstname }}{{ Auth::user()->lastname }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
