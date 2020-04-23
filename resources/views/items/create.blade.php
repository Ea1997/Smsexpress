@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Créer un Objet') }}</div>

                    <div class="card-body">

                        <form method="POST" action="/item/store">
                            @csrf
                          <h6>Votre Objet</h6><hr>
                            <div class="form-group row">
                                <label for="Titre" class="col-md-4 col-form-label text-md-right">{{ __('Titre') }}</label>

                                <div class="col-md-6">
                                    <input placeholder="Appareil photo Nikon D80" id="Titre" type="text" class="form-control @error('Titre') is-invalid @enderror" name="Titre" value="{{ old('Titre') }}"  autocomplete="Titre" autofocus>

                                    @error('Titre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="categorie" class="col-md-4 col-form-label text-md-right">{{ __('Catégorie') }}</label>

                                <div class="col-md-6">
                                    <select  name="categorie" >
                                    @foreach($elements as $element)

                                        <option value="{{$element->id}}" >{{$element->nom}} </option>

                                        @endforeach
                                        </select>

                                    @error('categorie')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>
                            <h6>Description de l'objet</h6><hr>
                            <div class="form-group row">
                                <label for="sous_titre" class="col-md-4 col-form-label text-md-right">{{ __('Sous_titre') }}</label>

                                <div class="col-md-6">
                                    <input placeholder="10 millions de pixels,carte mémoire 2GB" id="sous_titre" type="number" class="form-control @error('sous_titre') is-invalid @enderror" name="sous_titre" value="{{ old('sous_titre') }}"  autocomplete="sous_titre" autofocus>

                                    @error('sous_titre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Déscription') }}</label>

                                <div class="col-md-6">
                                    <textarea id="description"  class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}"  autocomplete="description" autofocus ></textarea>

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <h6>Détails prix</h6><hr>
                            <div class="form-group row">

                                <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Prix par jour (MAD)') }}</label>

                                <div class="col-md-6">
                                    <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}"  autocomplete="price" autofocus>

                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('Photo ') }}</label>

                                <div class="col-md-6">
                                    <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}"  autocomplete="photo">

                                    @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>





                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Envoyer  ') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
