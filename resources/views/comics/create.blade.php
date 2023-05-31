@extends('layout.app')

@section('content')
    <main class="bg-fg-dark text-white position-relative h-100 py-4">
        <div class="container">
            <form action="{{route('comics.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control  @error('title') is-invalid @enderror"   name="title">
                  @error('title')
                        <div class="alert alert-danger text-danger mt-2">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Image link</label>
                    <input type="text" class="form-control  @error('thumb') is-invalid @enderror" name="thumb">
                    @error('thumb')
                          <div class="alert alert-danger text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price">
                    @error('price')
                          <div class="alert alert-danger text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control  @error('series') is-invalid @enderror" name="series">
                    @error('series')
                          <div class="alert alert-danger text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data Vendita</label>
                    <input type="text" class="form-control @error('sale_date') is-invalid @enderror " name="sale_date">
                    @error('sale_date')
                         <div class="alert alert-danger text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                 <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" name="type">
                    @error('type')
                       <div class="alert alert-danger text-danger mt-2">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="artists" class="form-label">Artists</label>
                    <input type="text" class="form-control  @error('artists') is-invalid @enderror" name="artists">
                    @error('artists')
                         <div class="alert alert-danger text-danger mt-2">{{ $message }}</div>
                   @enderror
                  </div>
                  <div class="mb-3">
                    <label for="writers" class="form-label">Writers</label>
                    <input type="text" class="form-control  @error('writers') is-invalid @enderror" name="writers">
                    @error('writers')
                         <div class="alert alert-danger text-danger mt-2">{{ $message }}</div>
                    @enderror
                  </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control  @error('description') is-invalid @enderror" name="description" style="height: 100px"></textarea>
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
