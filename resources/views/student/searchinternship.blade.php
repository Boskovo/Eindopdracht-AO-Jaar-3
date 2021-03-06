@extends('layouts.app')
@section('title', 'BedrijfZoeken')

@section('content')
<section class="bedrijfzoeken">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="searchbar p-3">
                            <div class="Namesearch">
                                <h2>
                                    Zoeken naar stage
                                </h2>
                                <input class="search" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 mt-3 mt-lg-0">
                        <div class="searchbar p-3">
                            <div class="postcodesearch">
                                <h2>Postcode</h2>
                                <input class="search" type="text">
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="internship-preview p-3">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="intership-short">
                                <h2>software developer</h2>
                                    <div class="sub-info">
                                        <p>Groningen</p>
                                        <p>Bol</p>
                                        <p>MBO niv 4</p>
                                    </div>
                                <div class="companybutton d-flex justify-content-center">
                                    <a class="d-inline-block" href="">bekijk stage</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-3 mt-lg-0">
                            <div class="company-description p-2">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in nibh finibus, rutrum risus id, ultrices mauris. Suspendisse rutrum, enim ultricies ullamcorper viverra, quam nisl dictum metus, eu condimentum odio ex interdum ligula. Phasellus mollis libero at purus finibus, id accumsan nisl ultricies. Aenean elementum ex id condimentum mollis.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-3 mt-lg-0">
                            <div class="companyinformation">
                                <img class="company-image" src="data:image/jpeg;base64,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" alt="Erica">
                                <h2 class="text-center">
                                    Bedrijfsnaam
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection