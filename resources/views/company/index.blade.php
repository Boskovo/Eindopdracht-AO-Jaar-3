@extends('layouts.app')
@section('title', 'Bedrijven')

@section('content')
<div class="container">
  <div class="row mt-4">
    <div class="col">
      <div class="card mb-6 mx-4">
        <h1 class="m-4">Stagiaires</h1>
          <div class="m-4 mt-2">
            <p>Pietje Schroot</p>
            <p>Christiaan Boldewijn</p>
            <p>Bastijn Potgrave</p>
          </div>
      </div>
      <div class="card mb-6 mx-4">
        <h1 class="m-4">Vacatures</h1>
          <div class="m-4 mt-2">
              <p>VacatureTitel</p>
              <p>VacatureTitel</p>
              <p>VacatureTitel</p>
          </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-6 mx-4">
        <h1 class="m-4">Documenten</h1>
        <div class="p-3">
          <div class="row"> <!--start nieuwe row-->
            <div class="col">
              <p>documentNaam</p>
            </div>
            <div class="col">
              <p>studentNaam</p>
            </div>
          </div>
          <div class="row"> <!--start nieuwe row-->
            <div class="col">
              <p>documentNaam</p>
            </div>
            <div class="col">
              <p>studentNaam</p>
            </div>
          </div>
          <div class="row"> <!--start nieuwe row-->
            <div class="col">
              <p>documentNaam</p>
            </div>
            <div class="col">
              <p>studentNaam</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-6 mx-4">
        <h1 class="m-4">Goed te keuren</h1>
          <div class="m-4 mt-2">
            <p>POK student 1</p>
            <p>POK student 2</p>
            <p>POK student 3</p>
          </div>
        </div>
      </div>
    </div>
@endsection