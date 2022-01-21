@extends('layouts.app')

@section('content')
<section class="student">
  <div class="container">
    <div class="row">
      <div class="col-large-12">
        <div class="student-overall">
          <H1>Mijn stage</H1>
          <p>Bedrijfsnaam</p>
          <p>Uren Stage: 0</p>
          <p>Alle documenten ingeleverd</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="document-display">
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
        <div class="appointment-display">
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