@extends('layouts.app')

@section('content')

<div class="div-container">
   <div class="w-100 d-flex justify-content-end mx-0 mb-4 row">
      <form class="d-flex col-12 col-md-6 col-lg-4 p-0" method="GET" action="/home">
         <select name="o" class="form-select shadow-sm me-3" aria-label=".form-select-sm example" style="width:40%;">
            <option value="" selected>Order by</option>
            <option value="title">Title</option>
            <option value="likes">Likes</option>
          </select>
         <input name="s" class="form-control me-2 shadow-sm" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-primary px-3 shadow-sm" type="submit"><i class="fas fa-search"></i></button>
      </form>
   </div>
   @if(count($movies)<1)
      <div class="py-4" style="background-color:white;border-radius:5px;">
         <p class="h5 mx-3">No matching records found...</p>
      </div>
   @else
      <div class="movies-container py-4" style="background-color:white; border-top-left-radius:5px;border-top-right-radius:5px;">
         @foreach ($movies as $movie)
            <div class="movie">
               <a href="/movie/details/{{$movie->id}}" class="movie-photo" style="background-image: url({{asset($movie->image)}})"></a>
               <p>{{$movie->title}}</p>
            </div>
         @endforeach
      </div>
      <div class="w-100 d-flex justify-content-center paginate" style="background-color: white; border-bottom-left-radius:5px;border-bottom-right-radius:5px;">
         {{$movies->links()}}
      </div>
   @endif
</div>

@endsection
