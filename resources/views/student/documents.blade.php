@extends('layouts.app')
@section('title', 'Document')

@section('content')

    <div class="card">
        <div class="card-body">
            {!! Form::open(array('route' => 'dropzone','method'=>'POST', 'enctype' => 'multipart/form-data')) !!}
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="file">{{ 'Bestand:' }}</label>
                        <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-images"></i>
                                    </span>
                            <input id="logo" class="form-control" type="file" name="file"
                                   placeholder="{{ __('Bestand') }}"
                                   required>
                        </div>
                        @error('file')
                        <div class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
