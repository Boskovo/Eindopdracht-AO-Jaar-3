<div class="card card-body border-0 shadow mb-4">

    <div class="row">
        <div class="col-md-10">
            <h2 class="h5 mb-4">{{ __('Links bewerken:') }}</h2>
        </div>
        <div class="col-md-2 text-end">
            <p><a data-bs-toggle="modal" data-bs-target="#createLink">link toevoegen</a></p>
        </div>
    </div>

    <div class="row align-items-center">
        @foreach(Auth::user()->link as $link)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-10">
                                <p>
                                    {!! $link->title !!}<br>
                                    <a href="{{ $link->link }}" target="_blank">{{ $link->link }}</a>
                                </p>
                            </div>
                            <div class="col-2">
                                <a href="" data-bs-toggle="modal" data-bs-target="#updateLink{{$link->id}}" ><i class="fas fa-edit"></i></a>
                                <a href=""><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

{{--Modal links aanmaken--}}
<div class="modal fade" id="createLink" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="createLinkLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createLinkLabel">Link aanmaken</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('settings.create.link') }}" method="POST">
                    @csrf
                    <div class="row align-items-center">
                        <div class="col-md-12 mb-3">
                            <label for="link-title">{{ 'Welke link' }}</label>
                            <select id="link-title" name="title" class="form-control">
                                <option value="">--- Selecteer soort link ---</option>
                                <option value='<i class="fab fa-github"></i> GitHub'>GitHub</option>
                                <option value='<i class="fab fa-linkedin"></i> LinkedIn'>LinkedIn</option>
                                <option value='<i class="fab fa-facebook"></i> Facebook'>Facebook</option>
                                <option value='<i class="fab fa-twitter"></i> Twitter'>Twitter</option>
                                <option value='<i class="fab fa-instagram"></i> Instagram'>Instagram</option>
                                <option value='<i class="fab fa-slack"></i> Slack'>Slack</option>
                                <option value='<i class="fab fa-discord"></i> Discord'>Discord</option>
                                <option value='<i class="fab fa-pinterest"></i> Pinterest'>Pinterest</option>
                                <option value='<i class="fas fa-file-signature"></i> Portfolio'>Portfolio</option>
                            </select>
                            @error('title')
                            <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="link">{{ 'Link' }}</label>
                            <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-link"></i>
                                    </span>
                                <input id="link" class="form-control" type="url" name="link"
                                       placeholder="{{ __('Link-adres') }}"
                                       required>
                            </div>
                            @error('link')
                            <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>
                        <div class="mt-3">
                            <button type="submit"
                                    class="btn btn-gray-800 mt-2 animate-up-2 align-content-end">{{ __('Submit') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{--Modal link bewerken--}}
<div class="modal fade" id="updateLink{{$link->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby=updateLink{{$link->id}}Label" aria-hidden="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateLink{{$link->id}}Label">{!! $link->title !!} bewerken</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('settings.update.link', ['id' => $link->id]) }}" method="POST">
                @csrf
                @method('PUT')
                    <input type="hidden" name="id" value="{{$link->id}}">
                    <div class="row align-items-center">
                        <div class="col-md-12 mb-3">
                            <label for="link">{{ 'Webadres' }}</label>
                            <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-link"></i>
                                    </span>
                                <input id="link" class="form-control" type="text" name="link"
                                       placeholder="{{ __('Link') }}"
                                       value="{{ old('link', $link->link) }}"
                                       required>
                            </div>
                            @error('link')
                            <div class="invalid-feedback"> {{ $message }} </div> @enderror
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-gray-800 mt-2 animate-up-2">{{ __('Submit') }}</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
