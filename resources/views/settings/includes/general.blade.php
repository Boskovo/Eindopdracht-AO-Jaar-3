<div class="card card-body border-0 shadow mb-4">
    <h2 class="h5 mb-4">{{ __('Algemene Gegevens:') }}</h2>
    <form action="{{ route('settings.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row align-items-center">
            <div class="col-md-6 mb-3">
                <label for="firstname">{{ 'Your Firstname' }}</label>
                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-user-alt fa-fw"></i>
                                    </span>
                    <input id="firstname" class="form-control" type="text" name="firstname"
                           placeholder="{{ __('Firstname') }}"
                           value="{{ old('firstname', auth()->user()->firstname) }}"
                           required>
                </div>
                @error('firstname')
                <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="lastname">{{ 'Your Lastname' }}</label>
                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-user-alt fa-fw"></i>
                                    </span>
                    <input id="lastname" class="form-control" type="text" name="lastname"
                           placeholder="{{ __('Lastname') }}"
                           value="{{ old('lastname', auth()->user()->lastname) }}"
                           required>
                </div>
                @error('lastname')
                <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="email">{{ __('Your Email') }}</label>
                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                    <input type="email" name="email" class="form-control"
                           placeholder="{{ __('Email') }}" id="email"
                           value="{{ old('email', auth()->user()->email) }}" required>
                </div>
                @error('email')
                <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="phone">{{ __('Your Phone') }}</label>
                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fas fa-phone"></i>
                                    </span>
                    <input type="tel" name="phone" class="form-control"
                           placeholder="{{ __('Phone') }}" id="phone"
                           value="{{ old('phone', auth()->user()->phone) }}" required>
                </div>
                @error('phone')
                <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-3">
                <label for="password">{{ __('New Password') }}</label>
                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2">
                                        <i class="fas fa-lock"></i>
                                    </span>
                    <input type="password" name="password" placeholder="{{ __('New Password') }}"
                           class="form-control" id="password">
                </div>
                @error('password')
                <div class="invalid-feedback"> {{ $message }} </div> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon3">
                                        <i class="fas fa-lock"></i>
                                    </span>
                    <input type="password" name="password_confirmation" class="form-control"
                           id="password_confirmation"
                           placeholder="{{ __('New password confirmation') }}"
                           autocomplete="new-password">
                </div>
            </div>
            <hr>
            {{--                            @foreach(Auth::user()->link as $link)--}}
            {{--                            <div class="col-md-6 mb-3">--}}
            {{--                                <label for="link">{{ __('Linkjes') }}</label>--}}
            {{--                                <div class="input-group">--}}
            {{--                                    <span class="input-group-text" id="basic-addon1">--}}
            {{--                                        <i class="fas fa-phone"></i>--}}
            {{--                                    </span>--}}
            {{--                                    <input type="text" name="link" class="form-control"--}}
            {{--                                           placeholder="{{ __('Link') }}" id="link"--}}
            {{--                                           value="{{ old('link->link', auth()->user()->link()->link) }}" required>--}}
            {{--                                </div>--}}
            {{--                                @error('link')--}}
            {{--                                <div class="invalid-feedback"> {{ $message }} </div> @enderror--}}
            {{--                            </div>--}}
            {{--                            @endforeach--}}
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-gray-800 mt-2 animate-up-2">{{ __('Submit') }}</button>
        </div>
    </form>
</div>
