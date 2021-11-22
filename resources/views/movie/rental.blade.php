@extends('layouts.app')
@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-11 col-md-10 col-lg-7 col-xl-6 card rounded-3 text-black mx-auto">
                <div class="p-md-3 mx-md-0 my-3 my-md-0 row">
                    <div class="col-12 col-sm-6">
                        <div class="movie-photo shadow m-auto" style="background-image: url({{asset($movie->image)}})"></div>
                    </div>
                    <form action="/rental" method="POST" class="col-12 col-sm-6 mt-3 mt-sm-0 d-flex flex-column justify-content-center">
                        @csrf
                        <input type="number" name="movie_id" id="" hidden value="{{$movie->id}}">
                        <input type="text" name="movie_title" id="" hidden value="{{$movie->title}}">
                        <input type="number" name="total" id="" hidden value="{{$movie->rental_price}}">
                        <div class="">
                            <div class="me-2 mt-1 d-flex align-items-start">
                                <strong class="">Your order: </strong><strong class="ms-2 text-success">{{$movie->title}}</strong>
                            </div>
                            <div class="me-2 mt-1 d-flex align-items-start">
                                <strong class="">Pay with:</i><span class="h6 mb-0 text-success ms-2">**** **** **** {{substr($card_number,12,16)}} </span></strong>
                            </div>
                            <div class="me-2 mt-1 d-flex align-items-start">
                                <strong class="">Total:</strong><strong class="ms-2 text-success"> ${{number_format($movie->rental_price,2,".",",")}}</strong>
                            </div>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-primary w-100 mt-3 text-uppercase" style="font-weight: 500">Confirm Payment</button>
                        </div>
                    </form>
            </div>
        </div>

    </div>
@endsection