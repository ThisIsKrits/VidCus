@extends('layouts.home')

@section('title', 'video')

@section('content')
<div class="mx-auto tm-content-container">
            <main>
                @if($transaction->transaction_status=='PENDING')
                <div class="row mb-5 pb-4">
                   
                    <div class="col-12">
                        <!-- Video player 1422x800 -->
                        <img width="1422" height="800" 
                        src="{{Storage::url($item->images)}}">							  
                    </div>
                    
                </div>
                @elseif($transaction->transaction_status=='APPROVE')
                <video width="1422" height="800" controls autoplay>
                    <source src="{{Storage::url($item->galleries->video)}}" type="video/mp4">							  
                  Your browser does not support the video tag.
                  </video>
                @endif
            </main>

            

            <footer class="row pt-5">
                <div class="col-12">
                    <p class="text-right">Copyright 2020 The Video Catalog Company 
                    
                    - Designed by <a href="https://templatemo.com" rel="nofollow" target="_parent">TemplateMo</a></p>
                </div>
            </footer>
        </div> <!-- .tm-content-container -->
        @endsection