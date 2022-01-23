@extends('layouts.app')
@section('title', 'Studenten')

@section('content')
<section class="student">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="student-overall p-3">
          <H1>Mijn stage</H1>
          <p>Bedrijfsnaam</p>
          <p>Uren Stage: 0</p>
          <p>Alle documenten ingeleverd</p>
        </div>
      </div>
    </div>

    <div class="row mt-3 align-items-stretch">
      <div class="col">
        <div class="document-display p-3">
          <h2>Ingeleverde documenten</h2>
          <ul>
            <li>Documentnaam</li>
            <li>Documentnaam</li>
            <li>Documentnaam</li>
          </ul>
          <div class="buttonwrapper">
            <div class="pok-button text-center">
              <a href="">Pok aanvragen</a>
            </div>
            <div class="document-button text-center">
              <a href="">Document inleveren</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="appointment-display p-3">
          <h2>
            Afspraken
          </h2>
          <ul>
            <li>
              <p>Afspraaktitel</p>
              <p>20-1-2022 / 12:00</p>
            </li>
            <li>
              <p>Afspraaktitel</p>
              <p>20-1-2022 / 12:00</p>
            </li>
            <li>
              <p>Afspraaktitel</p>
              <p>20-1-2022 / 12:00</p>
            </li>
            <li>
              <p>Afspraaktitel</p>
              <p>20-1-2022 / 12:00</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
