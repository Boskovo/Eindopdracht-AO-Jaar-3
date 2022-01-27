@extends('layouts.app')
@section('title', 'studenten en klassen')

@section('content')
<section class="student-classes">
  <div class="row">
    <div class="col-12 col-lg-8">
      <div class="leerling-overzicht">
        <h2>
          Leerlingen
        </h2>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Naam</th>
                <th scope="col">Leerlingnummer</th>
                <th scope="col">Stage</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="pt-2">1</th>
                <td class="pt-2">Jan Puistjes</td>
                <td class="pt-2">12345</td>
                <td class="pt-2">N.V.T</td>
              </tr>
              <tr>
                <th scope="row" class="pt-2">2</th>
                <td class="pt-2">Henk Schimmelteen</td>
                <td class="pt-2">54321</td>
                <td class="pt-2">Aviko</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="col-12 col-lg-4">
      <h2>
        Klassen
      </h2>
      <ul>
        <li class="py-1">
          <button class="bluclassbutton">
            ita-1a
          </button>
        </li>
        <li class="py-1">
          <button class="redclassbutton">
            ita-1a
          </button>
        </li>
        <li class="py-1">
          <button class="bluclassbutton">
            ita-1a
          </button>
        </li>
        <li class="py-1">
          <button class="redclassbutton">
            ita-1a
          </button>
        </li>
      </ul>
    </div>
  </div>
</section>
@endsection