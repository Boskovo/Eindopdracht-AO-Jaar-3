@extends('layouts.app')
@section('title', "$grade->name bewerken")

@section('content')
    <div class="main py-4">
        <div class="row">
            <div class="col-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5>Klas bewerken:</h5>
                            </div>
                            <div class="col-12">
                                <form action="{{ route('student.grades.update', $grade->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">

                                        <div class="col-md-12 mb-3">
                                            <label for="name">{{ 'klas naam:' }}</label>
                                            <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-file-signature"></i>
                                    </span>
                                                <input id="name" class="form-control" type="text" name="name"
                                                       placeholder="{{ __('Naam') }}"
                                                       value="{{ old('name', $grade->name) }}"
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
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h5>{{ $grade->name }}</h5>
                                <hr>
                                <p>
                                    <b>ID:</b> {{ $grade->id }}<br>
                                    <b>Aangemaakt op:</b> {{ $grade->created_at }}<br>
                                    <b>Aantal leden:</b> {{ $grade->members->count() }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5>Klas leden:</h5>
                            </div>
                            <div class="col-6 text-end">
                                <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                        class="fas fa-plus"></i> voeg lid toe</a>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    @if($grade->members->count() == 0)
                                        <div class="col-12 mt-5 text-center">
                                            <h5>Deze klas heeft nog geen leden.</h5>
                                        </div>
                                    @endif
                                    @foreach($grade->members as $member)
                                        <div class="col-3">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5>{{ $member->user->firstname }} {{ $member->user->lastname }}</h5>
                                                        </div>
                                                        <div class="col-6 text-end text-danger">
                                                            <a href="{{ route('student.grades.member.destroy', $member->id) }}"><i
                                                                    class="fas fa-trash-alt"></i></a>
                                                        </div>
                                                        <div class="col-12">
                                                            <p>
                                                                <b>Gebruiker ID:</b> {{ $member->user->id }}<br>
                                                                <b>Email:</b> {{ $member->user->email }}<br>
                                                                @if($member->user->phone == null)

                                                                @else
                                                                    <b>Telefoon:</b> {{ $member->user->phone }}
                                                                @endif
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Voeg een lid toe</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('student.grades.member.store', $grade->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="user_id">{{ 'Gebruiker:' }}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-file-signature"></i>
                                    </span>
                                    <select id="user_id" name="user_id" class="form-control">
                                        <option value="">--- Selecteer gebruiker ---</option>
                                        @foreach($users as $user)
                                            <option value='{{ $user->id }}'>{{ $user->firstname }} {{ $user->lastname }}
                                                , {{ $user->email }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('user_id')
                                <div class="invalid-feedback"> {{ $message }} </div> @enderror
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-start">
                                <button type="submit" class="btn btn-primary">Verstuur</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
