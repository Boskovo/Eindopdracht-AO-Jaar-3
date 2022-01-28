@extends('layouts.app')
@section('title', 'Vacature Aanmaken')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card m-4">
                <div class="card-body">
                    <div class="">
                        <h1>Nieuwe Vacature aanmaken</h1>
                    </div>
                    <form >
                        <div class="my-4">
                            <label for="exampleInput1" class="form-label">Titel</label>
                            <input type="text" class="form-control" id="exampleInput1" aria-describedby="Input1">
                            <div id="Input1" class="form-text" ></div>
                        </div>
                        <div class="my-4">
                            <label for="exampleInput1" class="form-label">Korte Omschrijving</label>
                            <input type="text" class="form-control" id="exampleInput1" aria-describedby="Input1">
                            <div id="Input1" class="form-text" ></div>
                        </div>
                        <div class="my-4">
                            <label for="exampleInput1" class="form-label">Locatie</label>
                            <input type="text" class="form-control" id="exampleInput1" aria-describedby="Input1">
                            <div id="Input1" class="form-text" ></div>
                        </div>
                        <div class="my-4">
                            <label for="exampleInput1" class="form-label">Periode</label>
                            <input type="text" class="form-control" id="exampleInput1" aria-describedby="Input1">
                            <div id="Input1" class="form-text" ></div>
                        </div>
                        <div class="my-4">
                            <label for="exampleInput1" class="form-label">Wat gaat de student leren?</label>
                            <input type="text" class="form-control" id="exampleInput1" aria-describedby="Input1">
                            <div id="Input1" class="form-text" ></div>
                        </div>
                        <div class="my-4">
                            <label for="exampleInput1" class="form-label">Waar zijn we naar op zoek?</label>
                            <input type="text" class="form-control" id="exampleInput1" aria-describedby="Input1">
                            <div id="Input1" class="form-text" ></div>
                        </div>
                        <div class="my-4">
                            <label for="exampleInput1" class="form-label">Wat bieden wij aan de student?</label>
                            <input type="text" class="form-control" id="exampleInput1" aria-describedby="Input1">
                            <div id="Input1" class="form-text" ></div>
                        </div>
                    </form>
                    <div class="btnwrap py-3">
                            <div class="makevacbutton text-center">
                                <div class="makevacbtntext">
                                    <a href="/vacatures">Nieuwe vacature aanmaken</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection