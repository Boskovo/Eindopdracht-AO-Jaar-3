<div class="card card-body border-0 shadow mb-4">

    <div class="row">
        <div class="col-md-10">
            <h2 class="h5 mb-4">{{ __('Adressen bewerken:') }}</h2>
        </div>
        <div class="col-md-2">
            <p><a data-bs-toggle="modal" data-bs-target="#createAddress" class="text-end">adres toevoegen</a></p>
        </div>
    </div>

    <div class="row align-items-center">
        @foreach(Auth::user()->address as $address)
            <div class="col-4">
                <div class="card m-1">
                    <div class="card-body">
                        <p>
                            <b>Adres:</b> {{ $address->street }} {{ $address->number }}<br>
                            <b>Postcode:</b> {{ $address->zipcode }}<br>
                            <b>Plaats:</b> {{ $address->city }}<br>
                            <b>Telefoon:</b> {{ $address->phone }}
                        </p>
                        <p>
                            <a href="" data-bs-toggle="modal" data-bs-target="#updateAddress{{$address->id}}"><i
                                    class="fas fa-edit"></i></a>
                            <a href=""><i class="fas fa-trash-alt"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

{{--create address modal--}}
<div class="modal fade" id="createAddress" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="createAddressLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createAddressLabel">Adres toevoegen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('settings.create.address') }}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="row align-items-center">
                        <div class="col-md-12 mb-3">
                            <label for="street">{{ 'Straat' }}</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-road"></i></span>
                                <input id="street" class="form-control" type="text" name="street"
                                       placeholder="{{ __('Straat') }}" required>
                            </div>
                            @error('street')
                            <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="number">{{ 'Nummer' }}</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-home"></i></span>
                                <input id="number" class="form-control" type="text" name="number"
                                       placeholder="{{ __('Nummer') }}" required>
                            </div>
                            @error('number')
                            <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="zipcode">{{ 'Postcode' }}</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-door-closed"></i></span>
                                <input id="zipcode" class="form-control" type="text" name="zipcode"
                                       placeholder="{{ __('Postcode') }}" required>
                            </div>
                            @error('zipcode')
                            <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="city">{{ 'Plaats' }}</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-city"></i></span>
                                <input id="city" class="form-control" type="text" name="city"
                                       placeholder="{{ __('Plaats') }}" required>
                            </div>
                            @error('city')
                            <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="phone">{{ 'Telefoon' }}</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                <input id="phone" class="form-control" type="text" name="phone"
                                       placeholder="{{ __('Telefoon') }}" required>
                            </div>
                            @error('phone')
                            <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>

                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-gray-800 mt-2 animate-up-2">{{ __('Submit') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{--Update modal--}}
<div class="modal fade" id="updateAddress{{$address->id}}" data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1" aria-labelledby="updateAddress{{$address->id}}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateAddress{{$address->id}}Label">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
        </div>
    </div>
</div>
