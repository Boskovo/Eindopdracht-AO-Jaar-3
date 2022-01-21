<div class="card card-body border-0 shadow mb-4">
    <h2 class="h5 mb-4">{{ __('Adres Toevoegen:') }}</h2>
    <form action="{{ route('settings.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row align-items-center">
            <div class="col-md-6 mb-3">
                <label for="street">{{ 'Straat' }}</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-road"></i></span>
                    <input id="street" class="form-control" type="text" name="street" placeholder="{{ __('Straat') }}" required>
                </div>
                @error('street')
                <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="number">{{ 'Nummer' }}</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-home"></i></span>
                    <input id="number" class="form-control" type="text" name="number" placeholder="{{ __('Nummer') }}" required>
                </div>
                @error('number')
                <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="zipcode">{{ 'Postcode' }}</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-door-closed"></i></span>
                    <input id="zipcode" class="form-control" type="text" name="zipcode" placeholder="{{ __('Postcode') }}" required>
                </div>
                @error('zipcode')
                <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="city">{{ 'Plaats' }}</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-city"></i></span>
                    <input id="city" class="form-control" type="text" name="city" placeholder="{{ __('Plaats') }}" required>
                </div>
                @error('city')
                <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="phone">{{ 'Telefoon' }}</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    <input id="phone" class="form-control" type="text" name="phone" placeholder="{{ __('Telefoon') }}" required>
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
