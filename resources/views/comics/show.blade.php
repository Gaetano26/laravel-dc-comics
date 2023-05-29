@extends('layout.app')

@section('content')
        <div class="container position-relative px-3">
             <div class="cont-img-3">
                 <img src="{{$comic->thumb}}" alt="">
             </div>

            <div class="row my-5 py-5 d-flex gap-0">
                    <div class="col-8">
                                <h1 class="text-white">{{ $comic->title }} </h1>
                                <div class="d-flex justify-content-between pt-2 px-3 bg-primary">
                                    <p class="text-white">Price : {{ $comic->price}}</p>
                                    <p class="text-white">Aviable</p>
                                </div>
                                <p class="font text-white mt-3">{{ $comic->description}}</p>

                    </div>

                    <div class="col-4">
                        <img src="{{ Vite::asset('resources/loghi/adv.jpg') }}" alt="">
                    </div>
            </div>
            <div class="row">
                <div class="col">
                     <div class="card my-5 bg-primary ">
                        <div class="card-title ps-2 py-2">
                            <h2 class="text-white">Talent</h2>
                        </div>
                        <div class="card-body ">
                            <p class="fw-bold text-white">Art by :  </p>
                              <span class="text-white">{{$comic->artist}},</span>

                            <p class="fw-bold text-white mt-4">Written by :  </p>
                              <span class="text-white">{{$comic->writer}},</span>



                        </div>
                     </div>
                </div>
                <div class="col">
                    <div class="card my-5 bg-primary ">
                        <div class="card-title ps-2 py-2">
                            <h2 class="text-white">Specs</h2>
                        </div>
                        <div class="card-body d-flex flex-column gap-5">
                            <p class="fw-bold text-white">Series :  {{$comic->series}} </p>
                            <p class="fw-bold text-white">U.S Price :  {{$comic->price}} </p>
                            <p class="fw-bold text-white">On Sale Date :  {{$comic->sale_date}} </p>



                        </div>
                     </div>
                </div>
            </div>


        </div>
@endsection
