@extends('layout.app')

@section('content')
    <main class="bg-fg-dark text-white position-relative h-100 py-4">
        <div class="container">
            <h1>Modifica Prodotto</h1>
            <form action="{{route('comics.update', $comic->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp"
                  value="{{ $comic->title }}">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Image link</label>
                    <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelp"
                    value="{{ $comic->thumb }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelp"
                    value="{{ $comic->price}}">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelp"
                    value="{{ $comic->series }}">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data Vendita</label>
                    <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="sale_dateHelp"
                    value="{{ $comic->sale_date }}">
                </div>
                 <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelp"
                    value="{{ $comic->type }}">
                  </div>
                  <div class="mb-3">
                    <label for="artists" class="form-label">Artists</label>
                    <input type="text" class="form-control" name="artists" id="artists" aria-describedby="artistsHelp"
                    value="{{ $comic->artists }}">
                  </div>
                  <div class="mb-3">
                    <label for="writers" class="form-label">Writers</label>
                    <input type="text" class="form-control" name="writers" id="writers" aria-describedby="writersHelp"
                    value="{{ $comic->writers }}">
                  </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" style="height: 100px" id="description">
                        {{ $comic->description }}
                    </textarea>

                  </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-outline-danger">Reset</button>
              </form>
        </div>

    </main>
@endsection
