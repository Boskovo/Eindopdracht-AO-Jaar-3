@extends('layouts.app')
@section('title', 'Document')

@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>

    <script>
        var dropzone = new Dropzone('#file-upload', {
            previewTemplate: document.querySelector('#preview-template').innerHTML,
            parallelUploads: 3,
            thumbnailHeight: 150,
            thumbnailWidth: 150,
            maxFilesize: 5,
            filesizeBase: 1500,
            thumbnail: function (file, dataUrl) {
                if (file.previewElement) {
                    file.previewElement.classList.remove("dz-file-preview");
                    var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
                    for (var i = 0; i < images.length; i++) {
                        var thumbnailElement = images[i];
                        thumbnailElement.alt = file.name;
                        thumbnailElement.src = dataUrl;
                    }
                    setTimeout(function () {
                        file.previewElement.classList.add("dz-image-preview");
                    }, 1);
                }
            }
        });
        
        var minSteps = 6,
            maxSteps = 60,
            timeBetweenSteps = 100,
            bytesPerStep = 100000;

        dropzone.uploadFiles = function (files) {
            var self = this;

            for (var i = 0; i < files.length; i++) {

                var file = files[i];
                totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));

                for (var step = 0; step < totalSteps; step++) {
                    var duration = timeBetweenSteps * (step + 1);
                    setTimeout(function (file, totalSteps, step) {
                        return function () {
                            file.upload = {
                                progress: 100 * (step + 1) / totalSteps,
                                total: file.size,
                                bytesSent: (step + 1) * file.size / totalSteps
                            };

                            self.emit('uploadprogress', file, file.upload.progress, file.upload
                                .bytesSent);
                            if (file.upload.progress == 100) {
                                file.status = Dropzone.SUCCESS;
                                self.emit("success", file, 'success', null);
                                self.emit("complete", file);
                                self.processQueue();
                            }
                        };
                    }(file, totalSteps, step), duration);
                }
            }
        }

    </script>
    <section class="student-document">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="documentdrop text-center p-3">
                        <h1>Documenten / Werkstaten inleveren</h1>
                        <form action="{{ route('dropzoneFileUpload') }}" class="dropzone" id="file-upload" enctype="multipart/form-data">
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


@endsection
