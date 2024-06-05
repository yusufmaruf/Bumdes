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
     <section class="full-intro-area" style="margin-bottom: 80px;">
        <div class="container">
           <div class="row">
              <div class="col-md-9 col-md-push-3">
                 <div class="blog-single">
                    <div class="full-intro-head text-center">
                       <span><i class="fa fa-newspaper"></i></span>
                       <h2>Beyond the SEO: After Optimizing Your Website</h2>
                       <p>Oct 16, 2015 . <span><a href="#">Business</a></span>. Comments : <span><a href="#">80</a></span></p>
                    </div>
                    <div class="full-intro-img text-center">
                       <img src="{{ asset('client/images/single-blog-1.png') }}" alt="" class="img-responsive">
                    </div>
                    <div class="full-intro-content text-left">
                       <p>It's a near-universal experience for consultants and in-house SEOs who've worked on numerous organic search campaigns. The first 3–6 months (longer if the site is very large or complex) of any SEO effort is almost always exclusively dedicated to fixing mistakes, improving existing issues, tweaking and tuning the sub-optimal, and generally closing the gap between what exists now and current best practices.</p>
                       <p>The beautiful part of SEO is that, once completed, these efforts can have ongoing and compounding benefits for months or years to come. The newly accessible and optimized pages start earning rankings and traffic, which beget more links, more personalization-biasing, more exposure, more sharing, and more business. If you've got competent content & dev teams continually checking items off the list (and not creating many new ones), slowly the list of actionable, low-hanging fruit dwindles. I like to call this "the SEO plateau."</p>
                       <p>he existing parts of the site have been optimized. The processes for content creation are now efficient and up to SEO standards. That immense task-list of SEO to-dos is now a stable, manageable group of regularly addressed items. Don't get me wrong—it's an AMAZING place to be. There are plenty of companies that never reach it (since the move from SEOmoz to Moz, even we never have!).But this cleared backlog also creates its own problems, namely the frustrating "What Are You Gonna Do Now?" question.</p>
                       <p>half of all new customers!" just doesn't cut it. That's why we need to look at the 5 opportunities that nearly every organization has to jump-start from plateau to high-growth SEO. Not every one of these will make sense for every site, but each deserves analysis and investigation.</p>
                       <p>For this post, I'm going to assume you're a moderately advanced SEO and you've already optimized pieces like on-page SEO, made your snippets rock with killer titles & meta descriptions, fixed every technical issue that might have held you back, and gone through a few rounds of keyword research and content creation/amplification. This process is about what comes next.</p>
                       <p>One important note: YouTube on its own is the world's second-largest search engine. If video isn't coming up as a big opportunity for you, double check that math! For almost every niche there's a good possibility that video can bring in terrific audience attention and branding value, even if the traffic isn't as direct as from Google itself.Plus, although it technically falls under the paid search umbrella, RLSA (Remarketing Lists for Search Ads) mean that if someone's already visited your site once and you know you want to reach them again if they search for more downfunnel keywords, you can bid higher and more effectively for them in Google AdWords.</p>
                       <p>number of the SERPs you care about to attract your search visits, it's almost certainly worth some effort. Google News, Shopping, Reviews, Images, Knowledge Panels, Tweets, Local Boxes, and more all have the potential to take away a lot of the clicks that would ordinarily go to "classic blue links"-style results. If you can own that SERP real estate before or even in addition to your competition, your traffic growth opportunities have considerably more room to rise.</p>
                    </div>
                    <div class="blog-prev-next clearfix">
                       <div class="blog-prev">
                           <div class="blog-prev-content">
                               <p>Previous Post</p>
                               <h3>At Last, You Can Now Add Users to Your Pro Account!</h3>
                               <div class="prev-left">
                                   <a href="#"><img src="{{ asset('client/images/single-prev.png') }}" alt=""></a>
                               </div>
                           </div>
                       </div>
                       <div class="blog-next text-right">
                           <div class="blog-next-content">
                               <p>Next Post</p>
                               <h3>Scraping and Cleaning Your Data with Google Sheets</h3>
                               <div class="next-right">
                                   <a href="#"><img src="{{ asset('client/images/single-next.png') }}" alt=""></a>
                               </div>
                           </div>
                       </div>
                      </div>
                      <div class="sidebar-inner single-blog-author related-post-margin">
                          <h2>Related Posts</h2>
                      </div>
                      <div class="col-md-4 blog-single-block no-padding-left b-s-l-p">
                          <div class="blog-single-img">
                              <img src="{{ asset('client/images/single-blog-3.png') }}" class="img-responsive" alt="blog-post">
                          </div>
                          <div class="full-intro-head">
                             <p>Oct 16, 2015 . <span><a href="#">Business</a></span></p>
                             <h2><a href="#">Target Individual Users by Tailoring Your Website !</a></h2>
                          </div>
                       </div>
                      <div class="col-md-4 blog-single-block">
                          <div class="blog-single-img">
                              <img src="{{ asset('client/images/single-blog-1.png') }}" class="img-responsive" alt="blog-post">
                          </div>
                          <div class="full-intro-head">
                             <p>Oct 16, 2015 . <span><a href="#">Business</a></span></p>
                             <h2><a href="#">Why Meaning Will Ultimately Determine Your Brand</a></h2>
                          </div>
                      </div>
                      <div class="col-md-4 blog-single-block no-padding-right b-s-r-p">
                          <div class="blog-single-img">
                              <img src="{{ asset('client/images/single-blog-4.png') }}" class="img-responsive" alt="blog-post">
                          </div>
                          <div class="full-intro-head">
                             <p>Oct 16, 2015 . <span><a href="#">Business</a></span></p>
                             <h2><a href="#">How to Hack the Amplification Process - Whiteboard Friday</a></h2>
                          </div>
                      </div>
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
