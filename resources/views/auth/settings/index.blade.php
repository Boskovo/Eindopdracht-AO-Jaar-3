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

@section('scripts')
    @if ($message = Session::get('success'))
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                icon: 'success',
                text: '{{ $message }}',
            })
        </script>
    @endif
@endsection