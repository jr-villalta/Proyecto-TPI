@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row">
        <div class="col-11 col-md-10 col-lg-7 col-xl-6 card rounded-3 text-black mx-auto position-relative">
            
                <a href="/movie/like/{{$movie->id}}" class="badge bg-danger position-absolute text-light px-3 py-2"  style="top:30px; left:-6px; font-size:14px; border:none; text-decoration:none;">
                    @if ($iflike)
                        <i class="fas fa-heart"></i>
                    @else
                        <i class="far fa-heart"></i>
                    @endif
                    {{$movie->likes}}
                </a>
            
            <div class="card-body p-md-5 mx-md-4">
                <div class="movie-photo shadow m-auto" style="background-image: url({{asset($movie->image)}})">
                </div>
                <ul class="list-group list-group-flush mt-3">
                    <li class="list-group-item"><strong class="me-2">Title:</strong>{{$movie->title}}</li>
                    <li class="list-group-item" style="text-align: justify;"><strong class="me-2">Description:</strong>{{$movie->description}}</li>
                    <li class="list-group-item d-flex">
                        @if($ifrental && $restante >= 0)
                            <div class="alert alert-success w-100 mb-0 text-center" style="font-weight: bold;" role="alert">
                            Time remaining to return: {{$restante}} days
                            </div>
                        @elseif($ifrental && $restante < 0)
                            <div class="alert alert-danger w-100 mb-0 text-center" style="font-weight: bold;" role="alert">
                            time delayed: {{abs($restante)}} days
                            </div>
                        @else
                        <div class="me-2 d-flex align-items-start">
                            <strong style="font-size: 14px;">Sale:</strong><strong class="ms-1 text-success h4">${{number_format($movie->sale_price,2,".",",")}}</strong>
                        </div>
                        <div class="ms-2 d-flex align-items-start">
                            <strong style="font-size: 14px;">Rental:</strong><strong class="ms-1 text-success h4">${{number_format($movie->rental_price,2,".",",")}}</strong>
                        </div>
                        @endif
                    </li>
                    <li class="list-group-item d-flex">
                        @if (!$ifshop && !$ifrental && $ifhaverental) 
                        <a href="/movie/shopping/{{$movie->id}}" type="submit" class="btn btn-primary text-uppercase w-50 me-2" style="font-weight: 500;">Buy</a> 
                        <a id="btnRantalG" type="submit" class="btn btn-secondary text-uppercase w-50 ms-2" style="font-weight: 500;">Rent</a> 
                        @elseif (!$ifshop && !$ifrental && !$ifhaverental) 
                        <a href="/movie/shopping/{{$movie->id}}" type="submit" class="btn btn-primary text-uppercase w-50 me-2" style="font-weight: 500;">Buy</a> 
                        <a href="/movie/rental/{{$movie->id}}" type="submit" class="btn btn-primary text-uppercase w-50 ms-2" style="font-weight: 500;">Rent</a> 
                        @elseif($ifshop) 
                        <a href="/movie/play/{{$movie->id}}" class="btn btn-primary text-uppercase w-100 ms-2" style="font-weight: 500;">Play</a> 
                        @elseif($ifrental) 
                        <a href="/movie/play/{{$movie->id}}" class="btn btn-primary text-uppercase w-50 ms-2" style="font-weight: 500;">Play</a> 
                        <a href="/movie/returnRent/{{$movie->id}}" class="btn btn-primary text-uppercase w-50 ms-2" style="font-weight: 500;">Return</a> 
                        @endif
                    </li>
              </div>
        </div>
    </div>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById("btnRantalG").addEventListener("click", function(){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Only one rental at a time!'
        })
    });
</script>

@endsection


