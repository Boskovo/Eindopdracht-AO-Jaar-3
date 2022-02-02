@extends('layouts.app')
@section('title', 'Klassen')

@section('content')

    <div class="main py-4">
        <div class="row">
            @if(auth()->user()->hasAnyRole('admin', 'Admin'))
            <div class="col-12 text-end mb-4">
                <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-plus"></i> klas
                    aanmaken</a>
            </div>
            @endif
            @foreach($grades as $grade)
                <div class="col-3">
                    <a href="{{ route('student.grades.show', $grade->id) }}">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5>{{ $grade->name }}</h5>
                                <hr>
                                <p><b>Aantal studenten:</b> {{ $grade->members->count() }}</p>
                                <div class="text-center">
                                    @if(auth()->user()->hasAnyRole('Admin', 'admin'))
                                        <hr>
                                        <a href="{{ route('student.grades.destroy', $grade->id) }}"
                                           class="card-link text-danger"><i
                                                class="fas fa-trash-alt"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Klas aanmaken</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {!! Form::open(array('route' => 'student.grades.store','method'=>'POST')) !!}
                    @csrf
                    <div class="row">

                        <div class="col-md-12 mb-3">
                            <label for="name">{{ 'klas naam:' }}</label>
                            <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-file-signature"></i>
                                    </span>
                                <input id="name" class="form-control" type="text" name="name"
                                       placeholder="{{ __('Naam') }}"
                                       required>
                                {{--                                    {!! Form::text('name', null, array('placeholder' => 'Bedrijfsnaam','class' => 'form-control', 'required')) !!}--}}
                            </div>
                            @error('name')
                            <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-start">
                            <button type="submit" class="btn btn-primary">Verstuur</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
