@extends('layout.app')

@section('content')
    <main class="bg-fg-dark text-white position-relative h-100 py-4">
        <div class="container">
            <form action="{{route('comics.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control  @error('title') is-invalid @enderror"   name="title" required min="3" maxlength="255">
                  <div id="titleHelp" class="form-text">Inserisci un titolo - minimo 3 caratteri - massimo 255 caratteri</div>
                  @error('title')
                        <div class="alert alert-danger text-danger mt-2">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Image link</label>
                    <input type="text" class="form-control  @error('thumb') is-invalid @enderror" name="thumb" required >
                    <div id="thumbHelp" class="form-text">Inserisci la Url</div>
                    @error('thumb')
                          <div class="alert alert-danger text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" required min="3" maxlength="255">
                    <div id="priceHelp" class="form-text">Inserisci un prezzo - minimo 3 caratteri - massimo 255 caratteri</div>
                    @error('price')
                          <div class="alert alert-danger text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control  @error('series') is-invalid @enderror" name="series" required min="3" maxlength="255">
                    <div id="seriesHelp" class="form-text">Inserisci la serie  - minimo 3 caratteri - massimo 255 caratteri</div>
                    @error('series')
                          <div class="alert alert-danger text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data Vendita</label>
                    <input type="text" class="form-control @error('sale_date') is-invalid @enderror " name="sale_date" required min="4" maxlength="255">
                    <div id="sale_dateHelp" class="form-text">Inserisci la data  - minimo 4 caratteri - massimo 255 caratteri</div>
                    @error('sale_date')
                         <div class="alert alert-danger text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                 <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" name="type"  required min="2" maxlength="255">
                    <div id="typeHelp" class="form-text">Inserisci il type  - minimo 2 caratteri - massimo 255 caratteri</div>
                    @error('type')
                       <div class="alert alert-danger text-danger mt-2">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="artists" class="form-label">Artists</label>
                    <input type="text" class="form-control  @error('artists') is-invalid @enderror" name="artists" required min="5" maxlength="255">
                    <div id="artistsHelp" class="form-text">Inserisci artista\i  - minimo 5 caratteri - massimo 255 caratteri</div>
                    @error('artists')
                         <div class="alert alert-danger text-danger mt-2">{{ $message }}</div>
                   @enderror
                  </div>
                  <div class="mb-3">
                    <label for="writers" class="form-label">Writers</label>
                    <input type="text" class="form-control  @error('writers') is-invalid @enderror" name="writers" required min="5" maxlength="255" >
                    <div id="writersHelp" class="form-text">Inserisci scrittore\i  - minimo 5 caratteri - massimo 255 caratteri</div>
                    @error('writers')
                         <div class="alert alert-danger text-danger mt-2">{{ $message }}</div>
                    @enderror
                  </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control  @error('description') is-invalid @enderror" name="description" style="height: 100px" required></textarea>
                    <div id="descriptionHelp" class="form-text">Inserisci la descrizione</div>
                    @error('description')
                       <div class="alert alert-danger text-danger mt-2">{{ $message }}</div>
                    @enderror
                  </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-outline-danger">Reset</button>
              </form>
        </div>

    </main>
@endsection
