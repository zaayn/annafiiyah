@extends('layouts.master')
@section('content')
<aside id="fh5co-hero">
    <div class="flexslider">
        <ul class="slides">
           <li style="background-image: url(main_asset/images/img_bg_4.jpg);">
               <div class="overlay-gradient"></div>
               <div class="container">
                   <div class="row">
                       <div class="col-md-8 col-md-offset-2 text-center slider-text">
                           <div class="slider-text-inner">
                               <h1 class="heading-section">{{ $data[0]->judul }}</h1>
                           </div>
                       </div>
                   </div>
               </div>
           </li>
          </ul>
      </div>
</aside>

<div id="fh5co-contact">
    <div class="container">
        <div class="row">
            Hello
        </div>
    </div>
</div>
@endsection