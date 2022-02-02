@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
    <div class="main py-4">
        <div class="row">
            @if(auth()->user()->hasAnyRole('Student', 'student'))
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
                                            <a href="{{ route('student.documents') }}">Document inleveren</a>
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
            @endif
            @if(auth()->user()->hasAnyRole('Docent', 'docent'))
                <section class="docentenprofiel">
                    <div class="row align-items-stretch">
                        <div class="col-12 col-lg-4">
                            <div class="profile-dashboard d-flex justify-content-center text-center p-3">
                                <div class="profile-holder">
                                    <div class="profile-img-wrapper mb-2">
                                        <img class="profile-img"
                                             src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.libelle.nl%2Factueel%2Fzo-ziet-het-lieve-baby-tje-uit-de-teletubbies-er-nu-uit~b0ce3d9c%2F&psig=AOvVaw16WPNrTOs1X6cG465RNfNc&ust=1643450875299000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPjH1eOZ1PUCFQAAAAAdAAAAABAg"
                                             alt="profilepic         ">
                                    </div>
                                    <div class="profile-info text-start">
                                        <ul class="profile-info-list">
                                            <li>
                                                Henk van der Steen
                                            </li>
                                            <li>
                                                henkvdsteen@hotmail.com
                                            </li>
                                            <li>
                                                ita4-3a
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cv-button">
                                        <a href="">Bekijk cv</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="stage-info">
                                <div class="row align-items-stretch p-3">
                                    <div class="col-lg-4">
                                        <div class="stage-status p-3">
                                            <ul class="stage-status-list">
                                                <li>
                                                    Stage Gevonden: <i class="fas fa-check"></i>
                                                </li>
                                                <li>
                                                    POK aangevraagd: <i class="fas fa-times"></i>
                                                </li>
                                                <li>
                                                    Documenten ingeleverd: <i class="fas fa-times"></i>
                                                </li>
                                            </ul>
                                            <div class="progress-wrapper">
                                                <p>
                                                    Stage voortgang
                                                </p>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 25%"
                                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="stage-zoeken-buttton text-center">
                                                <a href="">Sollicitaties</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 offset-lg-3 mt-3 mt-lg-3">
                                        <div class="stage-description">
                                            <h2>Huidig stage bedrijf</h2>
                                            <ul class="description-list p-2">
                                                <li>
                                                    Bedrijfsnaam
                                                </li>
                                                <li>
                                                    Adres en woonplaats
                                                </li>
                                                <li>
                                                    Functie
                                                </li>
                                            </ul>
                                            <div class="progress-circle-holder">
                                                <p>Aantal behaalde uren 0/400</p>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 25%"
                                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="400"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="file-holder">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="file-overzicht p-2">
                                            <p>
                                                Student heeft documentnaam ingeleverd
                                            </p>
                                            <div class="document-button text-center">
                                                <a href=""> Document inlezen</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif

            @if(auth()->user()->hasAnyRole('Admin', 'admin'))
                <div class="main py-4">
                    <div class="row">
                        <div class="col-md-8 col-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5>Gebruikers:</h5>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p><a href="{{ route('users.index') }}">toon meer</a></p>
                                        </div>
                                        <div class="col-md-12">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th scope="col">id</th>
                                                    <th scope="col">Naam</th>
                                                    <th scope="col">Soort Account</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col" width="280px">Acties</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <th scope="row">{{ $user->id }}</th>
                                                        <td>{{ $user->firstname }} {{ $user->lastname }}</td>
                                                        <td>
                                                            @if(!empty($user->getRoleNames()))
                                                                @foreach($user->getRoleNames() as $v)
                                                                    <span
                                                                        class="badge rounded-pill bg-primary">{{ $v }}</span>
                                                                    {{--                                <label class="badge badge-success"></label>--}}
                                                                @endforeach
                                                            @endif
                                                        </td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>
                                                            <a class="text-primary font-medium"
                                                               href="{{ route('users.edit',$user->id) }}"><i
                                                                    class="fas fa-eye"></i></a>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <a class="text-danger font-medium"
                                                               href="{{ route('users.destroy',$user->id) }}"><i
                                                                    class="fas fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
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
                                            <h5>Rollen:</h5>
                                        </div>
                                        <div class="col-12">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Naam</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($roles as $role)
                                                    <tr>
                                                        <th scope="row">{{ $role->id }}</th>
                                                        <td>{{ $role->name }}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5>Bedrijven:</h5>
                                        </div>
                                        <div class="col-6 text-end">
                                            <a href="{{ route('bedrijven.index') }}">toon meer</a>
                                        </div>
                                        <div class="col-md-12">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th scope="col">id</th>
                                                    <th scope="col">Naam</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col" width="280px">Acties</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($companies as $company)
                                                    <tr>
                                                        <th scope="row">{{ $company->id }}</th>
                                                        <td>{{ $company->name }} </td>
                                                        <td>{{ $company->email }} </td>
                                                        <td>
                                                            <a class="text-primary font-medium"
                                                               href="{{ route('bedrijven.edit',$company->id) }}"><i
                                                                    class="fas fa-eye"></i></a>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <a class="text-danger font-medium"
                                                               href="{{ route('bedrijven.destroy',$company->id) }}"><i
                                                                    class="fas fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5>Klassen:</h5>
                                        </div>
                                        <div class="col-6 text-end">
                                            <a href="">toon meer</a>
                                        </div>
                                        <div class="col-12">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th scope="col">id</th>
                                                    <th scope="col">Naam</th>
                                                    <th scope="col" width="280px">Acties</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($grades as $grade)
                                                    <tr>
                                                        <th scope="row">{{ $grade->id }}</th>
                                                        <td>{{ $grade->name }} </td>
                                                        <td>
                                                            <a class="text-primary font-medium"
                                                               href="{{ route('users.edit',$user->id) }}"><i
                                                                    class="fas fa-eye"></i></a>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <a class="text-danger font-medium"
                                                               href="{{ route('users.destroy',$user->id) }}"><i
                                                                    class="fas fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5>Bestanden:</h5>
                                        </div>
                                        <div class="col-6 text-end">
                                            <a href="">toon meer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
