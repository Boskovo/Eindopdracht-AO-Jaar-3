@extends('layouts.app')
@section('title', 'Document')

@section('content')
    <section class="student-document">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="documentdrop text-center p-3">
                        <h1>Documenten / Werkstaten inleveren</h1>
                        <form class="" method="post" action="#" id="#">
                            <div class="d-flex p-3 justify-content-center" id="drop_zone" ondrop="dropHandler(event);">
                                <p>Drag one or more files to this Drop Zone ...</p>
                            </div>
                            <div class="button-wrapper mt-3">
                                <button type="file" class="file-upload p-1">Document Toevoegen</button>
                                <button type="submit" class="submit-file p-1" value="submit">inleveren</button>
                            </div>    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function dropHandler(ev) {
            console.log('File(s) dropped');

            // Prevent default behavior (Prevent file from being opened)
            ev.preventDefault();

            if (ev.dataTransfer.items) {
                // Use DataTransferItemList interface to access the file(s)
                for (var i = 0; i < ev.dataTransfer.items.length; i++) {
                    // If dropped items aren't files, reject them
                    if (ev.dataTransfer.items[i].kind === 'file') {
                        var file = ev.dataTransfer.items[i].getAsFile();
                        console.log('... file[' + i + '].name = ' + file.name);
                    }
                }
            } else {
                // Use DataTransfer interface to access the file(s)
                for (var i = 0; i < ev.dataTransfer.files.length; i++) {
                    console.log('... file[' + i + '].name = ' + ev.dataTransfer.files[i].name);
                }
            }
        }
    </script>
@endsection
