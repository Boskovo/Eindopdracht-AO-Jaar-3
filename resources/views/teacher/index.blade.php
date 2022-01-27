@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="container_profiel_docent">
                    <div class="profiel_foto">

                    </div>
                    <div class="info_persoon">
                        <ul>
                            <li>Naam en Achtername</li>
                            <li>E-mail</li>
                            <li>Klas</li>
                        </ul>
                    </div>
                    <div class="cv_block">
                        <a type="button" class="btn btn-dark">Bekijk CV</a>
                    </div>

                </div>
            </div>
            <div class="col mt-3 m-lg-0">
                <div class="container_informatie_stage p-3">
                    <div class="row">
                        <div class="col">
                            <div class="aanvragen_goedkeuring p-3">
                                <div class="Text-info">
                                    <ul>
                                        <li>Stage gevonden:</li>
                                        <li>POK aanvraag:</li>
                                        <li>Andere informatie:</li>
                                    </ul>
                                </div>
                                <div class="container_process">
                                    <div class="progress" style="height: 20px;">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="button-progress">
                                        <a type="button" class="btn btn-dark">Sollicitaties</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            test
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row no-pad">
            <div class="col-12 col-lg-12">
                <div class="container_ingeleverde_documenten p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ingeleverd_documenten p-3">
                                <div>
                                    (Student) heeft (document) ingeleverd
                                </div>
                                <div class="button-progress">
                                    <a type="button" class="btn btn-dark">Document inzien</a>
                                </div>
                                <div>
                                    (Student) heeft (document) ingeleverd
                                </div>
                                <div class="button-progress">
                                    <a type="button" class="btn btn-dark">Document inzien</a>
                                </div>
                                <div>
                                    (Student) heeft (document) ingeleverd
                                </div>
                                <div class="button-progress">
                                    <a type="button" class="btn btn-dark">Document inzien</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
