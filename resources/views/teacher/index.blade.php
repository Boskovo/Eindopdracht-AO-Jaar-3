@extends('layouts.app')

@section('content')
<section class="docentenprofiel">
    <div class="row">
        <div class="col-12 col-lg-4">
            <div class="profile-dashboard d-flex justify-content-center text-center p-3">
                <div class="profile-holder">
                    <div class="profile-img-wrapper mb-2">
                        <img class="profile-img" src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.libelle.nl%2Factueel%2Fzo-ziet-het-lieve-baby-tje-uit-de-teletubbies-er-nu-uit~b0ce3d9c%2F&psig=AOvVaw16WPNrTOs1X6cG465RNfNc&ust=1643450875299000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPjH1eOZ1PUCFQAAAAAdAAAAABAg" alt="profilepic         ">
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
                <div class="row p-3">
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
                                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="400"></div>
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
@endsection