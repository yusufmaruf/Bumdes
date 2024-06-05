@extends('layouts.client.master')
@section('title')
    Bumdes
@endsection
@section('pages')
    Bumdes Berita
@endsection
@section('content')

 <!-- =========================
      START SOLUTION 2 SECTION
      ============================== -->
      <section class="solution-2-area grey-bg">
        <!-- MAIN TITLE AREA -->
        <div class="container">
           <div class="row">
              <div class="col-md-12 text-center">
                 <div class="main-title wow zoomIn">

                 </div>
              </div>
           </div>
        </div> <!-- END TITLE -->
        <div class="solution-2-content">
            <div class="container">
                <div class="row">
                   {{-- <div class="col-md-6">
                      <div class="marketing-left-content wow fadeInLeft">
                         <h3>Metrics enterprise SEO and content marketing platform provides competitive insight and market analysis no one can duplicate. Analysis that reveals opportunities, supports decisions and connects your SEO tactics and strategy directly to revenue. </h3>
                         <h3>Reach the right prospects at the right time with the right message, talk more effectively to the prospects who are most likely to buy. Harness the complexity of SEO and content marketing to boost online visibility and make smarter marketing decisions.</h3>
                      </div>
                   </div> --}}
                   <div class="col-md-12 ">
                      <div class="marketing-right-content wow fadeInRight">
                         <img src="{{ asset('client/images/slide2.png') }}" alt="" class="img-responsive">
                      </div>
                   </div>
                </div>
             </div>
        </div>
     </section>
     <!-- =========================
     END SOLUTION 2 SECTION
     ============================== -->



     <!-- =========================
       START TEAM SECTION
     ============================== -->
      <!-- =========================
       START TEAM SECTION
     ============================== -->
     <section class="team-area team-no-bottom-padding">
        <!-- MAIN TITLE AREA -->
        <div class="container">
           <div class="row">
              <div class="col-md-12 text-center">
                 <div class="main-title wow zoomIn">
                    <div class="main-shadow-heading">
                       <h2>Struktur Organisasi</h2>
                    </div>
                    <h2>Struktur Organisasi</h2>
                    {{-- <h3>We Love It Here. You Will, Too.</h3> --}}
                 </div>
              </div>
           </div>
        </div> <!-- END TITLE -->
        <!-- TEAM CONTENT -->
        <div class="container wow zoomIn">
            <div class="row">
                 <div class="col-sm-6 col-md-3">
                    <article class="entry-team">
                       <div class="team-member">
                          <div class="team-member-featured">
                             <img  src="{{ asset('client/images/team-1.jpg') }}" class="img-responsive" alt="Ahmed Abd-Alhaleem" />
                          </div>
                          <div class="team-member-main">
                             <div class="team-member-info">
                                <div class="team-member-header">
                                   <h3 class="team-member-title"><a href="#" title="Ahmed Abd-Alhaleem">Ahmed Abd-Alhaleem</a></h3>
                                   <p class="team-member-roles">Graphic Designer</p>
                                   <ul class="cms-social">
                                      <li class="facebook">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      </li>
                                      <li class="twitter">
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      </li>
                                      <li class="google">
                                      <a href="#"><i class="fa fa-google-plus"></i></a>
                                      </li>
                                      <li class="linkedin">
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                      </li>
                                   </ul>
                                </div>
                                <div class="team-member-content">
                                   I am excited about helping companies make impactful decisions based on their data.
                                </div>
                             </div>
                             <div class="team-member-brief">
                                <h3 class="team-member-title">Ahmed Abd-Alhaleem</h3>
                                <p class="team-member-roles font-alt-1">Graphic Designer</p>
                             </div>
                          </div>
                       </div>
                    </article>
                 </div>
                 <div class="col-sm-6 col-md-3">
                    <article class="entry-team">
                       <div class="team-member">
                          <div class="team-member-featured">
                             <img  src="{{ asset('client/images/team-2.jpg') }}" class="img-responsive" alt="Ahmed Abd-Alhaleem" />
                          </div>
                          <div class="team-member-main">
                             <div class="team-member-info">
                                <div class="team-member-header">
                                   <h3 class="team-member-title"><a href="#" title="Ahmed Abd-Alhaleem">Ahmed Hassan</a></h3>
                                   <p class="team-member-roles">Web Developer</p>
                                   <ul class="cms-social">
                                      <li class="facebook">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      </li>
                                      <li class="twitter">
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      </li>
                                      <li class="google">
                                      <a href="#"><i class="fa fa-google-plus"></i></a>
                                      </li>
                                      <li class="linkedin">
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                      </li>
                                   </ul>
                                </div>
                                <div class="team-member-content">
                                   I am excited about helping companies make impactful decisions based on their data.
                                </div>
                             </div>
                             <div class="team-member-brief">
                                <h3 class="team-member-title">Ahmed Abd-Alhaleem</h3>
                                <p class="team-member-roles font-alt-1">Web Developer</p>
                             </div>
                          </div>
                       </div>
                    </article>
                 </div>
                 <div class="col-sm-6 col-md-3">
                    <article class="entry-team">
                       <div class="team-member">
                          <div class="team-member-featured">
                             <img  src="{{ asset('client/images/team-3.jpg') }}" class="img-responsive" alt="Ahmed Abd-Alhaleem" />
                          </div>
                          <div class="team-member-main">
                             <div class="team-member-info">
                                <div class="team-member-header">
                                   <h3 class="team-member-title"><a href="#" title="Ahmed Abd-Alhaleem">Mohamed Habaza</a></h3>
                                   <p class="team-member-roles">Lead Dev Ops</p>
                                   <ul class="cms-social">
                                      <li class="facebook">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      </li>
                                      <li class="twitter">
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      </li>
                                      <li class="google">
                                      <a href="#"><i class="fa fa-google-plus"></i></a>
                                      </li>
                                      <li class="linkedin">
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                      </li>
                                   </ul>
                                </div>
                                <div class="team-member-content">
                                   I am excited about helping companies make impactful decisions based on their data.
                                </div>
                             </div>
                             <div class="team-member-brief">
                                <h3 class="team-member-title">Mohamed Habaza</h3>
                                <p class="team-member-roles font-alt-1">Lead Dev Ops</p>
                             </div>
                          </div>
                       </div>
                    </article>
                 </div>
                 <div class="col-sm-6 col-md-3">
                    <article class="entry-team">
                       <div class="team-member">
                          <div class="team-member-featured">
                             <img  src="{{ asset('client/images/team-4.jpg') }}" class="img-responsive" alt="Ahmed Abd-Alhaleem" />
                          </div>
                          <div class="team-member-main">
                             <div class="team-member-info">
                                <div class="team-member-header">
                                   <h3 class="team-member-title"><a href="#" title="Ahmed Abd-Alhaleem">Amr Gamal Sadeq</a></h3>
                                   <p class="team-member-roles">Design expert</p>
                                   <ul class="cms-social">
                                      <li class="facebook">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      </li>
                                      <li class="twitter">
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      </li>
                                      <li class="google">
                                      <a href="#"><i class="fa fa-google-plus"></i></a>
                                      </li>
                                      <li class="linkedin">
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                      </li>
                                   </ul>
                                </div>
                                <div class="team-member-content">
                                   I am excited about helping companies make impactful decisions based on their data.
                                </div>
                             </div>
                             <div class="team-member-brief">
                                <h3 class="team-member-title">Amr Gamal Sadeq</h3>
                                <p class="team-member-roles font-alt-1">Design expert</p>
                             </div>
                          </div>
                       </div>
                    </article>
                 </div>
            </div>
            <div class="row">
                 <div class="col-sm-6 col-md-3">
                    <article class="entry-team">
                       <div class="team-member">
                          <div class="team-member-featured">
                             <img  src="{{ asset('client/images/team-1.jpg') }}" class="img-responsive" alt="Ahmed Abd-Alhaleem" />
                          </div>
                          <div class="team-member-main">
                             <div class="team-member-info">
                                <div class="team-member-header">
                                   <h3 class="team-member-title"><a href="#" title="Ahmed Abd-Alhaleem">Ahmed Abd-Alhaleem</a></h3>
                                   <p class="team-member-roles">Graphic Designer</p>
                                   <ul class="cms-social">
                                      <li class="facebook">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      </li>
                                      <li class="twitter">
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      </li>
                                      <li class="google">
                                      <a href="#"><i class="fa fa-google-plus"></i></a>
                                      </li>
                                      <li class="linkedin">
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                      </li>
                                   </ul>
                                </div>
                                <div class="team-member-content">
                                   I am excited about helping companies make impactful decisions based on their data.
                                </div>
                             </div>
                             <div class="team-member-brief">
                                <h3 class="team-member-title">Ahmed Abd-Alhaleem</h3>
                                <p class="team-member-roles font-alt-1">Graphic Designer</p>
                             </div>
                          </div>
                       </div>
                    </article>
                 </div>
                 <div class="col-sm-6 col-md-3">
                    <article class="entry-team">
                       <div class="team-member">
                          <div class="team-member-featured">
                             <img  src="{{ asset('client/images/team-2.jpg') }}" class="img-responsive" alt="Ahmed Abd-Alhaleem" />
                          </div>
                          <div class="team-member-main">
                             <div class="team-member-info">
                                <div class="team-member-header">
                                   <h3 class="team-member-title"><a href="#" title="Ahmed Abd-Alhaleem">Ahmed Hassan</a></h3>
                                   <p class="team-member-roles">Web Developer</p>
                                   <ul class="cms-social">
                                      <li class="facebook">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      </li>
                                      <li class="twitter">
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      </li>
                                      <li class="google">
                                      <a href="#"><i class="fa fa-google-plus"></i></a>
                                      </li>
                                      <li class="linkedin">
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                      </li>
                                   </ul>
                                </div>
                                <div class="team-member-content">
                                   I am excited about helping companies make impactful decisions based on their data.
                                </div>
                             </div>
                             <div class="team-member-brief">
                                <h3 class="team-member-title">Ahmed Abd-Alhaleem</h3>
                                <p class="team-member-roles font-alt-1">Web Developer</p>
                             </div>
                          </div>
                       </div>
                    </article>
                 </div>
                 <div class="col-sm-6 col-md-3">
                    <article class="entry-team">
                       <div class="team-member">
                          <div class="team-member-featured">
                             <img  src="{{ asset('client/images/team-3.jpg') }}" class="img-responsive" alt="Ahmed Abd-Alhaleem" />
                          </div>
                          <div class="team-member-main">
                             <div class="team-member-info">
                                <div class="team-member-header">
                                   <h3 class="team-member-title"><a href="#" title="Ahmed Abd-Alhaleem">Mohamed Habaza</a></h3>
                                   <p class="team-member-roles">Lead Dev Ops</p>
                                   <ul class="cms-social">
                                      <li class="facebook">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      </li>
                                      <li class="twitter">
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      </li>
                                      <li class="google">
                                      <a href="#"><i class="fa fa-google-plus"></i></a>
                                      </li>
                                      <li class="linkedin">
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                      </li>
                                   </ul>
                                </div>
                                <div class="team-member-content">
                                   I am excited about helping companies make impactful decisions based on their data.
                                </div>
                             </div>
                             <div class="team-member-brief">
                                <h3 class="team-member-title">Mohamed Habaza</h3>
                                <p class="team-member-roles font-alt-1">Lead Dev Ops</p>
                             </div>
                          </div>
                       </div>
                    </article>
                 </div>
                 <div class="col-sm-6 col-md-3">
                    <article class="entry-team">
                       <div class="team-member">
                          <div class="team-member-featured">
                             <img  src="{{ asset('client/images/team-4.jpg') }}" class="img-responsive" alt="Ahmed Abd-Alhaleem" />
                          </div>
                          <div class="team-member-main">
                             <div class="team-member-info">
                                <div class="team-member-header">
                                   <h3 class="team-member-title"><a href="#" title="Ahmed Abd-Alhaleem">Amr Gamal Sadeq</a></h3>
                                   <p class="team-member-roles">Design expert</p>
                                   <ul class="cms-social">
                                      <li class="facebook">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      </li>
                                      <li class="twitter">
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      </li>
                                      <li class="google">
                                      <a href="#"><i class="fa fa-google-plus"></i></a>
                                      </li>
                                      <li class="linkedin">
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                      </li>
                                   </ul>
                                </div>
                                <div class="team-member-content">
                                   I am excited about helping companies make impactful decisions based on their data.
                                </div>
                             </div>
                             <div class="team-member-brief">
                                <h3 class="team-member-title">Amr Gamal Sadeq</h3>
                                <p class="team-member-roles font-alt-1">Design expert</p>
                             </div>
                          </div>
                       </div>
                    </article>
                 </div>
            </div>
        </div>
     </section>
     <div class="progress-bar-area">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 
              </div>
           </div>
        </div>
     </div>

     <!-- =========================
       END TEAM SECTION
     ============================== -->
@endsection
