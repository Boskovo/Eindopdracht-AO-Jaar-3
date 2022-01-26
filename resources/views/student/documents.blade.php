@extends('layouts.app')
@section('title', 'Document')

@section('content')
<section class="student-document">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="documentdrop">
                    <h1>Documenten / Werkstaten inleveren</h1>
                    <form method="post" action="#" id="#">
                        <div class="file-upload-wrapper">
                            
                        </div>
                        <div class="documentbutton">
                           <button type="file" class="file-upload">Document Toevoegen</button>
                        </div>
                        <div class="inleverenbutton">
                            <button type="submit" value="submit">inleveren</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection