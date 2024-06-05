@extends('layouts.client.master')
@section('title')
    Bumdes
@endsection
@section('pages')
    Bumdes Berita
@endsection
@section('content')
 <!-- =========================
      START PAGE TITLE SECTION
      ============================== -->
      <section class="page-title-area blog-standard-area" style="background: url('{{ asset('client/images/single-blog-1.png') }}') no-repeat; background-size: cover; background-attachment: fixed;">
        <div class="container">
           <div class="row">
              <div class="col-md-12 text-center">
                 <div class="about-head-content">
                    <h2>Our Blog</h2>
                    <p>Metrics insights & articles, A blog about analytics, marketing & testing</p>
                 </div>
                 <div class="breadcrumbs text-center">
                    <ul class="page-breadcrumbs">
                        <li><a href="#">home</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- =========================
     END PAGE TITLE SECTION
     ============================== -->

     <!-- =========================
       START FULL INTRO SECTION
     ============================== -->
     <section class="full-intro-area">
        <div class="container">
           <div class="row">
              <div class="col-md-8 col-md-push-4 no-padding text-left">
                 <div class="blog-2-column-left-content">
                    <div class="col-md-6">
                       <div class="blog-2-column-content">
                          <div class="full-intro-img">
                             <img src="{{ asset('client/images/single-blog-1.png') }}" alt="" class="img-responsive">
                          </div>
                          <div class="full-intro-head">
                             <p>Oct 16, 2015 . <span><a href="#">Business</a></span>. Comments : <span><a href="#">80</a></span></p>
                             <h2><a href="{{ route('detailBerita', ['slug' => 'berita-1']) }}">Beyond the SEO: After Optimizing Your Website</a></h2>
                          </div>
                          <div class="full-intro-content">
                             <p>We all know that no user is the same. Aside from the basics such as age, gender, socio-economic background and so every person differs in life experiences, interests, and preferences. </p>
                             <p><img src="{{ asset('client/images/blog/blog-user-1.png') }}" alt="">By:<span><a href="#"> Ahmed Ebraheem</a></span></p>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-6">
                       <div class="blog-2-column-content">
                          <div class="full-intro-img">
                             <img src="{{ asset('client/images/single-blog-2.png') }}" alt="" class="img-responsive">
                          </div>
                          <div class="full-intro-head">
                             <p>Oct 15, 2015 . <span><a href="#">Tools, News</a></span>. Comments : <span><a href="#">70</a></span></p>
                             <h2><a href="#">At Last, You Can Now Add Users to Your Pro Account!</a></h2>
                          </div>
                          <div class="full-intro-content">
                             <p>How would you like to leave work early on Fridays? Raven’s set-it-and-forget-it reports prove to be a major time saver for this marketing agency.With the ability to show progress.</p>
                             <p><img src="{{ asset('client/images/blog-user-2.png') }}" alt="">By:<span><a href="#"> Ahmed Ali</a></span></p>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-6">
                       <div class="blog-2-column-content">
                          <div class="full-intro-img">
                             <img src="{{ asset('client/images/single-blog-3.png') }}" alt="" class="img-responsive">
                          </div>
                          <div class="full-intro-head">
                             <p>Oct 15, 2015 . <span><a href="#">Tools, News</a></span>. Comments : <span><a href="#">70</a></span></p>
                             <h2><a href="#">At Last, You Can Now Add Users to Your Pro Account!</a></h2>
                          </div>
                          <div class="full-intro-content">
                             <p>We all know that no user is the same. Aside from the basics such as age, gender, socio-economic background and so every person differs in life experiences, interests, and preferences. </p>
                             <p><img src="{{ asset('client/images/blog-user-2.png') }}" alt="">By:<span><a href="#"> Ahmed Ali</a></span></p>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-6">
                       <div class="blog-2-column-content">
                          <div class="full-intro-img">
                             <img src="{{ asset('client/images/single-blog-1.png') }}" alt="" class="img-responsive">
                          </div>
                          <div class="full-intro-head">
                             <p>Oct 30, 2015 . <span><a href="#">Tools, Videos</a></span>. Comments : <span><a href="#">70</a></span></p>
                             <h2><a href="#">How to Hack the Amplification Process - Whiteboard Friday</a></h2>
                          </div>
                          <div class="full-intro-content">
                             <p>How would you like to leave work early on Fridays? Raven’s set-it-and-forget-it reports prove to be a major time saver for this marketing agency.With the ability to show </p>
                             <p><img src="{{ asset('client/images/blog-user-3.png') }}" alt="">By:<span><a href="#"> Ahmed Ebraheem</a></span></p>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-6">
                       <div class="blog-2-column-content">
                          <div class="full-intro-img">
                             <img src="{{ asset('client/images/single-blog-4.png') }}" alt="" class="img-responsive">
                          </div>
                          <div class="full-intro-head">
                             <p>Oct 30, 2015 . <span><a href="#">Tools, Videos</a></span>. Comments : <span><a href="#">70</a></span></p>
                             <h2><a href="#">Google Glossary: Revenge of Mega-SERP</a></h2>
                          </div>
                          <div class="full-intro-content">
                             <p>We all know that no user is the same. Aside from the basics such as age, gender, socio-economic background and so every person differs in life experiences, interests, and preferences. </p>
                             <p><img src="{{ asset('client/images/blog-user-3.png') }}" alt="">By:<span><a href="#"> Ahmed Ebraheem</a></span></p>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-6">
                       <div class="blog-2-column-content">
                          <div class="full-intro-img">
                             <img src="{{ asset('client/images/single-blog-5.png') }}" alt="" class="img-responsive">
                          </div>
                          <div class="full-intro-head">
                             <p>Oct 30, 2015 . <span><a href="#">Tools, Videos</a></span>. Comments : <span><a href="#">70</a></span></p>
                             <h2><a href="#">Why Meaning Will Ultimately Determine Your Brand</a></h2>
                          </div>
                          <div class="full-intro-content">
                             <p>We all know that no user is the same. Aside from the basics such as age, gender, socio-economic background and so every person differs in life experiences, interests, and preferences. </p>
                             <p><img src="{{ asset('client/images/blog-user-3.png') }}" alt="">By:<span><a href="#"> Ahmed Emad</a></span></p>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-6">
                       <div class="blog-2-column-content">
                          <div class="full-intro-img">
                             <img src="{{ asset('client/images/single-blog-1.png') }}" alt="" class="img-responsive">
                          </div>
                          <div class="full-intro-head">
                             <p>Oct 16, 2015 . <span><a href="#">Business</a></span>. Comments : <span><a href="#">80</a></span></p>
                             <h2><a href="#">Beyond the SEO: After Optimizing Your Website</a></h2>
                          </div>
                          <div class="full-intro-content">
                             <p>We all know that no user is the same. Aside from the basics such as age, gender, socio-economic background and so every person differs in life experiences, interests, and preferences. </p>
                             <p><img src="{{ asset('client/images/blog-user-1.png') }}" alt="">By:<span><a href="#"> Ahmed Ebraheem</a></span></p>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-6">
                       <div class="blog-2-column-content">
                          <div class="full-intro-img">
                             <img src="{{ asset('client/images/single-blog-2.png') }}" alt="" class="img-responsive">
                          </div>
                          <div class="full-intro-head">
                             <p>Oct 15, 2015 . <span><a href="#">Tools, News</a></span>. Comments : <span><a href="#">70</a></span></p>
                             <h2><a href="#">At Last, You Can Now Add Users to Your Pro Account!</a></h2>
                          </div>
                          <div class="full-intro-content">
                             <p>How would you like to leave work early on Fridays? Raven’s set-it-and-forget-it reports prove to be a major time saver for this marketing agency.With the ability to show progress</p>
                             <p><img src="{{ asset('client/images/blog-user-2.png') }}" alt="">By:<span><a href="#"> Ahmed Ali</a></span></p>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-12 matrics-pagination matrics-blog-pagination text-center clearfix">
                       <nav>
                           <ul class="pagination">
                               <li><a href="#">1</a></li>
                               <li><a href="#">2</a></li>
                               <li>
                                 <a href="#" aria-label="Next">
                                   <i class="fa fa-angle-right"></i>
                                 </a>
                               </li>
                           </ul>
                       </nav>
                    </div>
                 </div>
              </div>
              <div class="col-md-4 col-md-pull-8">
                 <div class="right-sidebar blog-standard-right blog-2-column-right">
                    <div class="sidebar-inner">
                       <h2>Search</h2>
                       <div class="search-bar">
                           <form action="#">
                               <input type="text" value="" class="sidebar-input-text" placeholder="Type and hit enter ...">
                               <input type="submit" class="sidebar-input-submit"  value="">
                               <i class="fa fa-search"></i>
                           </form>
                       </div> <!-- end search-bar -->
                    </div>
                    <div class="sidebar-category sidebar-inner">
                       <h2>Categories</h2>
                       <ul>
                           <li><a href="#">Social Analytics<i class="fa fa-long-arrow-right"></i></a></li>
                           <li><a href="#">Security<i class="fa fa-long-arrow-right"></i></a></li>
                           <li><a href="#">Engagement<i class="fa fa-long-arrow-right"></i></a></li>
                           <li><a href="#">Listening<i class="fa fa-long-arrow-right"></i></a></li>
                           <li><a href="#">Collaboration<i class="fa fa-long-arrow-right"></i></a></li>
                           <li><a href="#">Web & Mob Applications<i class="fa fa-long-arrow-right"></i></a></li>
                       </ul>
                    </div>
                    <div class="sidebar-inner">
                       <h2>Recent Posts</h2>
                       <div class="recent-post">
                           <p>Oct 30, 2015 . <span><a href="#">Business</a></span></p>
                           <h3><a href="#">Target Individual Users by Tailoring Your Website !</a></h3>
                           <p>By:<span><a href="#">Ahmed Ebraheem</a></span></p>
                           <img src="{{ asset('client/images/recent-post-1.png') }}" alt="">
                       </div>
                       <div class="recent-post">
                           <p>Oct 15, 2015 . <span><a href="#">Business</a></span></p>
                           <h3><a href="#">What’s Love Got To Do With Marketing Reports?</a></h3>
                           <p>By:<span><a href="#">Ahmed Ali</a></span></p>
                           <img src="{{ asset('client/images/recent-post-2.png') }}" alt="">
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- =========================
       END FULL INTRO SECTION
     ============================== -->

@endsection
