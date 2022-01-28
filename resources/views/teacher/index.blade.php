@extends('layouts.app')

@section('content')
<section class="docentenprofiel">
    <div class="row">
        <div class="col-12 col-lg-5">
            <div class="profile-dashboard align-items-center p-3">
                <div class="profile-holder  text-center">
                    <div class="profile-img-wrapper mb-2">
                        <img class="profile-img" src="" alt="">
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
        <div class="col-12 col-lg-7">
            <div class="stage-info">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="stage-status">
                            <ul>
                                <li>
                                    Stage Gevonden
                                </li>
                                <li>
                                    POK aangevraagd
                                </li>
                                <li>
                                    Documenten ingeleverd
                                </li>
                            </ul>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="stage-zoeken-buttton">
                                <a href="">Sollicitaties</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <h2>Huidig stage bedrijf</h2>
                        <div class="stage-short-description">
                            <p>Bedrijfsnaam</p>
                            <p>Adres</p>
                            <p>Stad/dorp</p>
                        </div>
                        <div class="progress-circle-holder">
                            <div class="progress-circle">

                            </div>
                            <p>Aantal behaalde uren 0/400</p>
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
                    <div class="col-6">
                        <div class="file-overzicht">
                            <p>
                                Student heeft documentnaam ingeleverd
                            </p>
                            <div class="document-button">
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