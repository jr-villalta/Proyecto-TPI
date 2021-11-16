@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-11 col-md-10 col-lg-7 col-xl-6 card rounded-3 text-black mx-auto">
                <div class="card-body p-md-5 mx-md-4">
                    <div class="movie-photo shadow m-auto" style="background-image: url({{asset($movie->image)}})"></div>
                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item"><strong class="me-2">Title:</strong>{{$movie->title}}</li>
                        <li class="list-group-item" style="text-align: justify;"><strong class="me-2">Description:</strong>{{$movie->description}}</li>
                        <li class="list-group-item"><strong class="me-2">Stock:</strong>{{$movie->stock}} units</li>
                        <li class="list-group-item"><strong class="me-2">Rental Price:</strong>$ {{number_format($movie->rental_price,2,".",",")}}</li>
                        <li class="list-group-item"><strong class="me-2">Sale Price:</strong>$ {{number_format($movie->sale_price,2,".",",")}}</li>
                        <li class="list-group-item"><strong class="me-2">Availability:</strong>
                            @if ($movie->availability == 1)
                                {{ __('Available') }}
                            @else
                                {{ __('Not available') }} 
                            @endif
                        </li>
                        <li class="list-group-item"><strong class="me-2">Likes:</strong> {{$movie->likes}}</li>
                        <li class="list-group-item text-center mt-2"><a href="/movie" class="btn btn-primary px-4">Back</a></li>
                      </ul>
                  </div>
            </div>
        </div>
    </div>
@endsection