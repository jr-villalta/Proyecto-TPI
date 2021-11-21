@extends('layouts.app') 
@section('content') 
<div class="container"> 
    <h1 class="h4 p-3 text-dark bg-light" style="border-radius: 5px;">{{$movie->title}}</h1> 
    
    <div class="flowplayer fixed-controls no-toggle no-time play-button obj" style="width: 100%; height: 80%; margin:0 auto; z-index: 1000;" data-key="$812975748999788" data-live="true" data-share="false" data-ratio="0.5625"  data-logo="">  
        <video autoplay="true" stretch="true" autoplay>       
            <source type="application/x-mpegurl" src="https://www261.sbcdnvideo.com/hls/tysxeehxr666j6cdaa7bvgsue75rbylyooff2vhj3vkzu7nb5vumvszoksyq/index-v1-a1.m3u8">  
        </video>     
    </div>  
</div> 
@endsection 
@section('script') 
<script src="//code.jquery.com/jquery-1.12.4.min.js"></script>  
<script src="//releases.flowplayer.org/7.0.4/commercial/flowplayer.min.js"></script>  
<script src="//releases.flowplayer.org/hlsjs/flowplayer.hlsjs.min.js"></script>   
<script>  
    flowplayer(function (api) {  
        api.on("load", function (e, api, video) {  
            $("#vinfo").text(api.engine.engineName + " engine playing " + video.type);  
        });  
    });  
</script> 
@endsection