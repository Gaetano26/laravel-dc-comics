@extends('layout.app')

@section('content')

<div class="container position-relative px-3">
    <button class="bg-primary text-white curr">Current Series</button>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
   <div class="row row-cols-sm-2 row-cols-md-4 row-cols-lg-4 mt-5 mb-2 px-2 gap-0">
      @foreach ($comics as $comic )
        <div class="col mt-3">
                <div class=" cont-img-2  text-center">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid">
                </div>
                <div class=" mt-3 ps-2 titl  text-white">
                    <p>{{ $comic->title }} </p>
                    <a href="{{ route('comics.show' , ['comic' => $comic->id]) }}" class="btn btn-primary fs">Descrizione</a>
                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning fs">Modifica</a>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button btn btn-danger fs mt-2"
                            data-item-title="{{ $comic->title }}">Cancella</button>

                    </form>

                </div>
        </div>

      @endforeach
   </div>
   <div class="text-center my-5">
    <span>   <a href="{{route('comics.create')}}" class="btn btn-primary text-white">
        Aggiungi Fumetto
    </a></span>
   </div>

</div>
@include('partials.popupdelete');
@endsection
