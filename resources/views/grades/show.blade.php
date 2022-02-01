@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
    <div class="main py-4">
        <div class="row">
            <div class="col-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5>Klas bewerken:</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5>{{ $grade->name }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5>Klas leden:</h5>
                            </div>
                            <div class="col-12">

                                    {{ dd($grade->members) }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
