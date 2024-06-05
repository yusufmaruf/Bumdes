@extends('layouts.client.master')
@section('title')
    Bumdes
@endsection
@section('pages')
    Bumdes Berita
@endsection
@section('content')

     <!-- =========================
       START WELCOME SECTION
     ============================== -->
     <section class="welcome-area welcome-3-area">
        <!-- MAIN TITLE AREA -->
        <div class="container">
           <div class="row">
              <div class="col-md-12 text-center">
                 <div class="main-title wow zoomIn mt-4">
              </div>
           </div>
        </div>
     </section>
     <section class="welcome-area welcome-3-area">
        <!-- MAIN TITLE AREA -->
        <div class="container">
           <div class="row">
              <div class="col-md-12 text-center">
                 <div class="main-title wow zoomIn mt-4">
                    <div class="main-shadow-heading">
                       <h2>Visi Misi</h2>
                    </div>
                    <h2>Visi Misi</h2>
                    {{-- <h3>Do More With Social Media</h3> --}}
                 </div>

              </div>
           </div>
        </div>
     </section>
     <!-- =========================
       END WELCOME SECTION
     ============================== -->

     <!-- =========================
       START HELP SECTION
     ============================== -->
     <section class="help-area">

        <div class="help-content-area">
           <div class="container">
              <div class="row">
                 <div class="col-md-6">
                    <div class="help-accordion">
                       <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                          <div class="panel panel-default">
                             <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Visi
                                  </a>
                                </h4>
                             </div>
                             <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                  You can subscribe via credit card or paypal, for annual plans we offer more options. Just contact our support team for more details. Also, you can upgrade your plan at anytime. You are only responsible for the difference.
                                </div>
                             </div>
                          </div>
                          <div class="panel panel-default">
                             <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Misi
                                  </a>
                                </h4>
                             </div>
                             <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                   You can subscribe via credit card or paypal, for annual plans we offer more options. Just contact our support team for more details. Also, you can upgrade your plan at anytime. You are only responsible for the difference.
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div id="help-slider" class="owl-carousel all-carousel owl-theme">
                      <div>
                         <div class="help-slider-content">
                             <div class="help-slider-text">
                               <i class="fa fa-quote-left"></i>
                               <i class="fa fa-quote-right"></i>
                               <p>In my job as social media strategist, I've tried pretty much every analytics product on the market and when I came across Metrics, I was blown away! Metrics is one of the most impressive social media website efforts I've ever seen. </p>
                               <img src="images/home-slider-img-left.png" alt="">
                             </div>
                             <div class="help-slider-img">
                                <h2>Mahmoud Baghagho</h2>
                                <h3>Art Director</h3>
                             </div>
                         </div>
                      </div>
                      <div>
                         <div class="help-slider-content">
                             <div class="help-slider-text">
                               <i class="fa fa-quote-left"></i>
                               <i class="fa fa-quote-right"></i>
                               <p>In my job as social media strategist, I've tried pretty much every analytics product on the market and when I came across Metrics, I was blown away! Metrics is one of the most impressive social media website efforts I've ever seen. </p>
                               <img src="images/home-slider-img-left.png" alt="">
                             </div>
                             <div class="help-slider-img">
                                <h2>Mahmoud Baghagho</h2>
                                <h3>Art Director</h3>
                             </div>
                         </div>
                      </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- =========================
       END HELP SECTION
     ============================== -->
@endsection
