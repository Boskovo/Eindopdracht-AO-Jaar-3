@extends('layouts.app')
@section('title', 'Instellingen')

@section('content')
    <div class="main py-4">
        <div class="row">

            <div class="col-12 col-xl-12">
                @include('auth.settings.general')
                @include('auth.settings.links.links')
                @include('auth.settings.address.address')
            </div>

        </div>
    </div>
@endsection


