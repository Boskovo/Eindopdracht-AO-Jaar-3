@extends('layouts.app')
@section('title', " bewerken")

@section('content')
    <div class="main py-4">
        <div class="row">

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h5>{{ $link }}</h5>
                        </div>
                        <div class="col-12">

                        </div>
                    </div>
                </div>
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
