@extends('layouts.app')
@section('title', 'Vacature Aanmaken')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card m-4">
                <div class="card-body">
                    <div class="p-2">
                        <h1>Nieuwe Vacature aanmaken</h1>
                    </div>
                    <form action="{{ route('company.create.vacancie') }}" method="POST" >
                        @csrf
                        @method('POST')

                        <div class="my-4">
                            <label for="title" class="form-label">Titel</label>
                            <input id="title" class="form-control" type="text" name="title" required>
                        </div>
                        <div class="my-4">
                            <label for="body" class="form-label">Korte Omschrijving</label>
                            <input id="body" class="form-control" type="text" name="body">
                        </div>
                        <div class="my-4">
                            <label for="course" class="form-label">Opleiding</label>
                            <input id="course" class="form-control" type="text" name="course">
                        </div>
                        <div class="my-4">
                            <label for="variant" class="form-label">BOL of BBL</label>
                            <input id="variant" class="form-control" type="text" name="variant">
                        </div>
                        <div class="my-4">
                            <label for="level" class="form-label">Opleidingsniveau</label>
                            <input id="level" class="form-control" type="text" name="level">
                        </div>
                        <div class="my-4">
                            <label for="location" class="form-label">Locatie</label>
                            <input type="text" class="form-control" id="location" name="location">
                        </div>
                        <div class="my-4">
                            <div class="row">
                                <div class="col-md my-2">
                                    <label for="start_date">Startdatum</label>
                                    <input type="text" class="form-control" id="start_date" name="start_date">
                                </div>
                                <div class="col-md my-2">
                                    <label for="end_date" class="text-muted">Einddatum</label>
                                    <input type="text" class="form-control" id="end_date" name="end_date">
                                </div>
                            </div>
                        </div>
                        <div class="my-4">
                            <label for="learn" class="form-label">Wat gaat de student leren?</label>
                            <input id="learn" class="form-control" type="text" name="learn">
                        </div>
                        <div class="my-4">
                            <label for="demands" class="form-label">Waar zijn we naar op zoek?</label>
                            <input id="demands" class="form-control" type="text" name="demands">
                        </div>
                        <div class="my-4">
                            <label for="offer" class="form-label">Wat bieden wij aan de student?</label>
                            <input id="offer" class="form-control" type="text" name="offer">
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-gray-800 btn-lg mt-2 animate-up-2">{{ __('Vacature aanmaken') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection