<div class="card card-body border-0 shadow mb-4">
    <h2 class="h5 mb-4">{{ __('Links toevoegen:') }}</h2>
    <form action="{{ route('settings.create.link') }}" method="POST">
        @csrf

        <div class="row align-items-center">
            <div class="col-md-6 mb-3">
                <label for="link-title">{{ 'Welke link' }}</label>
                <select id="link-title" name="title" class="form-control">
                    <option value="">--- Selecteer soort link ---</option>
                    <option value="GitHub">GitHub</option>
                    <option value="LinkedIn">LinkedIn</option>
                    <option value="Facebook">Facebook</option>
                    <option value="Twitter">Twitter</option>
                    <option value="Instagram">Instagram</option>
                    <option value="Slack">Slack</option>
                    <option value="Discord">Discord</option>
                    <option value="Portfolio">Portfolio</option>
                </select>
                @error('title')
                <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="link">{{ 'Link' }}</label>
                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-link"></i>
                                    </span>
                    <input id="link" class="form-control" type="text" name="link"
                           placeholder="{{ __('Link-adres') }}"
                           required>
                </div>
                @error('link')
                <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>
            <div class="mt-3">
                <button type="submit"
                        class="btn btn-gray-800 mt-2 animate-up-2">{{ __('Submit') }}</button>
            </div>
        </div>
    </form>

</div>
