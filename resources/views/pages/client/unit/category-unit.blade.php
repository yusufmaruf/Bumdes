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
                    <h2>Unit Unit-1</h2>
                    {{-- <p>Metrics insights & articles, A blog about analytics, marketing & testing</p> --}}
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
              <div class="col-md-9 col-md-push-3 text-center">
                 <div class="full-intro-head">
                    <span><i class="fa fa-store"></i></span>
                    <h2><a href="#">Beyond the SEO: After Optimizing Your Website</a></h2>
                    <p>Oct 16, 2015 . <span><a href="#">Business</a></span>. Comments : <span><a href="#">80</a></span></p>
                 </div>
                 <div class="full-intro-img">
                    <img src="{{ asset('client/images/single-blog-1.png') }}" alt="" class="img-responsive">
                 </div>
                 <div class="full-intro-content">
                    <p>It's a near-universal experience for consultants and in-house SEOs who've worked on numerous organic search campaigns. The first 3-6 months (longer if the site is very large or complex) of any SEO effort is almost always exclusively dedicated to fixing mistakes, improving existing issues, tweaking and tuning the suboptimal, and generally closing the gap between what exists now and current best ...</p>
                    <img src="images/blog/blog-user-1.png" alt="">
                    <p>By:<span><a href="#"> Ahmed Ebraheem</a></span></p>
                 </div>
                 <div class="full-intro-head">
                    <span><i class="fa fa-store"></i></span>
                    <h2><a href="#">Beyond the SEO: After Optimizing Your Website</a></h2>
                    <p>Oct 15, 2015 . <span><a href="#">Tools, News</a></span>. Comments : <span><a href="#">70</a></span></p>
                 </div>
                 <div class="full-intro-img">
                    <img src="{{ asset('client/images/single-blog-2.png') }}" alt="" class="img-responsive">
                 </div>
                 <div class="full-intro-content">
                    <p>If your company has a lot of people managing a lot of campaigns, you may receive an awful lot of emails about data updates and completed reports, and for this email clutter I sincerely apologize. The good news is that each person with access to an account can now choose which campaigns to follow and thus limit emails from campaigns that aren't relevant.</p>
                    <img src="{{ asset('client/images/blog/blog-user-2.png') }}" alt="">
                    <p>By:<span><a href="#"> Ahmed Ali</a></span></p>
                 </div>
                 <div class="col-md-12 matrics-pagination text-center clearfix">
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
              <div class="col-md-3 col-md-pull-9">
                 <div class="right-sidebar blog-standard-right">
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
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- =========================
       END FULL INTRO SECTION
     ============================== -->
@endsection
