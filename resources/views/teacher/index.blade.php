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
                        <button type="button">Bekijk CV</button>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="container_informatie_stage p-3">
                    <div class="content-wrapper">
                        <div class="aanvragen_goedkeuring p-3">
                            <ul>
                                <li>Stage gevonden:</li>
                                <li>POK aanvraag:</li>
                                <li>Andere informatie:</li>
                            </ul>

                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-pad">
            <div class="col">
                <div class="container_ingeleverde_documenten">
    
                </div>
            </div>
        </div>

    </div>
    


   
@endsection
