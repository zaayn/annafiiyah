@extends('layouts.master')
@section('content')
<aside id="fh5co-hero">
    <div class="flexslider">
        <ul class="slides">
           <li style="background-image: url(main_asset/images/annafiiyah_1.jpg);">
               <div class="overlay-gradient"></div>
               <div class="container">
                   <div class="row">
                       <div class="col-md-8 col-md-offset-2 text-center slider-text">
                           <div class="slider-text-inner">
                               <h1 class="heading-section">Contact us</h1>
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
            <div class="col-md-5 col-md-push-1 animate-box">
                
                <div class="fh5co-contact-info">
                    <h3>Contact Information</h3>
                    <ul>
                        <li class="address">PPTQ An Nafi'iyah <br> Jl.Raya Kenongo No.1 Tulangan Sidoarjo</li>
                        <li class="phone"><a href="tel://1234567920">+62 123 456 7890</a></li>
                        <li class="email"><a href="mailto:info@yoursite.com">annafiiyah@gmail.com</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-md-6 animate-box">
                <h3>Get In Touch</h3>
                <form action="#">
                    <div class="row form-group">
                        <div class="col-md-6">
                            <!-- <label for="fname">First Name</label> -->
                            <input type="text" id="fname" class="form-control" placeholder="Your firstname">
                        </div>
                        <div class="col-md-6">
                            <!-- <label for="lname">Last Name</label> -->
                            <input type="text" id="lname" class="form-control" placeholder="Your lastname">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="email">Email</label> -->
                            <input type="text" id="email" class="form-control" placeholder="Your email address">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="subject">Subject</label> -->
                            <input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="message">Message</label> -->
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary">
                    </div>

                </form>		
            </div>
        </div>
        
    </div>
</div>
@endsection