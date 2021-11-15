@extends('layouts.app')

@section('content')

<div class="div-container">
   <div class="movies-container">
      @foreach ($movies as $movie)
      <div class="movie">
         <a href="#" class="movie-photo shadow" style="background-image: url({{asset($movie->image)}})"></a>
         <p>{{$movie->title}}</p>
      </div>
      @endforeach
   </div>
</div>
{{-- <div class="div-main">
   <h1 class="h4 p-3">MOVIES IN STOCK</h1>
   <div class="div-movies">
      <div class="movie">
         <div class="movie-photo" style="background-image: url(https://phantom-marca.unidadeditorial.es/e522d2e2fd0772e0462ca8d15e3a05ee/resize/640/assets/multimedia/imagenes/2019/09/17/15687205359826.jpg)"></div>
         <p>Titulo largo de pelicula para probar</p>
      </div>
   </div>
</div> --}}

@endsection
