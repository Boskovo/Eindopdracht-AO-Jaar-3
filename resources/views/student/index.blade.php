@extends('layouts.app')

@section('content')
<section class="student">
  <div class="container">
    <div class="row">
      <div class="col-large-12">
        <H1>Mijn stage</H1>
        <p>Bedrijfsnaam</p>
        <p>Uren Stage: 0</p>
        <p>Alle documenten ingeleverd</p>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <h2>ingeleverde documenten</h2>
        <ul>
          <li>Documentnaam</li>
          <li>Documentnaam</li>
          <li>Documentnaam</li>
        </ul>
        <div class="Buttonwrapper">
          <a class="btn" href="">Pok aanvragen</a>
          <a class="btn" href="">Document inlevern</a>
        </div>
      </div>
      <div class="col">
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
</section>

@endsection