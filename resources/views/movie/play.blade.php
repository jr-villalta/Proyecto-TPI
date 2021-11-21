@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="h4 p-3 text-dark bg-light" style="border-radius: 5px;">{{$movie->title}}</h1>
    <div id="async-player" data-player-id="cdcc4202-ef0b-4e03-a43a-d1fcf6d83157">
        <script src="//cdn.flowplayer.com/players/ffdf2c44-aa29-4df8-a270-3a199a1b119e/native/flowplayer.async.js">
          {
            "src": "{{$movie->url}}"
          }
        </script>
      </div>
</div>
@endsection
@section('script')
@endsection
