 <!-- =========================
        START HEADER SECTION
      ============================== -->
      {{-- <div class="outslider_loading">
        <div class="la-ball-scale-ripple-multiple la-dark la-2x">
            <div></div>
            <div></div>
            <div></div>
        </div>
     </div> --}}
     <div class="full-page-search">
        <form action="#">
            <input type="text" name="googlesearch" placeholder="Type Words Then Press Enter To Search">
            <input type="submit" id="searchsubmit" value="Search">
          </form>
        <div class="sr-overlay"></div>
     </div>
     <div class="log-in-up">
        <div class="log-in-content">
           <div class="log-in-head text-center">
              <img src="{{ asset('client/images/log-in-key.png') }}" alt="">
              <h2>Login To Your Account</h2>
           </div>
           <form action="#">
              <input type="text" class="form-control" placeholder="User name">
              <input type="password" class="form-control" placeholder="password">
              <input type="submit" value="LOGIN">
              <input type="checkbox" value="Remember!">Remember! <a href="#"><span>Register/</span>Forget Password?</a>
           </form>
           <a href="#" class="remove-log-in"><img src="{{ asset('client/images/log-in-cross.png') }}" alt=""></a>
        </div>
        <div class="log-in-overlay"></div>
     </div>
     <div class="right-full-menu">
        <div class="right_menu_item">
           <div class="right_menu_item-content">
              <div class="right-menu-icon">
                 <a href="{{ route('home') }}"><img src="{{ asset('client/images/logo.png') }}" alt=""></a>
              </div>
              <div class="right-menu-list">
                 <ul>
                    <li class="{{ request()->is('/*') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                    <li class="{{ request()->is('profile*') ? 'active' : '' }}"><a href="#">Profile</a></li>
                    <li><a href="products.html">Unit</a></li>
                    <li class="{{ request()->is('agenda*') ? 'active' : '' }}"><a href="{{ route('agenda') }}">Agenda</a></li>
                    <li class="{{ request()->is('berita*') ? 'active' : '' }}"><a href="{{ route('berita') }}">Berita</a></li>
                    <li class="{{ request()->is('galeri*') ? 'active' : '' }}"><a href="{{ route('galeriKegiatan') }}">Galeri</a></li>
                    <li class="{{ request()->is('kontak*') ? 'active' : '' }}"><a href="{{ route('kontak') }}">Kontak</a></li>
                 </ul>
              </div>
              <div class="right-menu-social-box">
                 <ul class="cms-social">
                    <li class="facebook">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="twitter">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="google">
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                    <li class="linkedin">
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li class="linkedin">
                    <a href="#"><i class="fa fa-rss"></i></a>
                    </li>
                 </ul>
                 <div class="footer-bottom-right right-menu-copyright">
                    <p>© 2015 - 2016 Metrics. All Rights Reserved</p>
                    <p>With Love by <span><a href="#">7oroof.com</a></span></p>
                 </div>
              </div>
           </div>
        </div>
        <div class="close_ic"></div>
     </div>
     <header class="header-area navbar-fixed-top">
        <div class="container custom-header">
           <div class="row">
               <div id="menuzord" class="menuzord single-page-header">
                  <a href="{{ route('home') }}" class="menuzord-brand menuzord-brand-no-padding"><img src="{{ asset('client/images/logo.png') }}" alt="">metrics</a>
                  <div class="header-search">
                       <ul>
                           <li class="filter-search"><i class="fa fa-search"></i></li>
                           <li class="log-in-search" style="margin-left: 25px;"><i class="fa fa-user"></i></li>
                       </ul>
                  </div>
                  <ul class="menuzord-menu menuzord-menu-bg">
                       <li class="{{ request()->is('/*') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a>
                       </li>
                       <li class="{{ request()->is('profile*') || request()->is('struktur-organisasi*') || request()->is('visi-misi*') || request()->is('regulasi*') ? 'active' : '' }}"><a href="#">Profile</a>
                           <ul class="dropdown">
                               <li><a href="{{ route('strukturOrganisasi') }}">Struktur Organisasi</a>
                               </li>
                               <li><a href="{{ route('visiMisi') }}">Visi Misi</a>
                               </li>
                               <li><a href="footer-1.html">Regulasi</a>
                               </li>
                           </ul>
                       </li>
                       <li class="{{ request()->is('unit*') ? 'active' : '' }}">
                        <a href="{{ route('unit') }}">Unit</a>
                        <ul class="dropdown">
                            <li class="{{ request()->is('unit/unit-1') ? 'active' : '' }}">
                                <a href="{{ route('unitJenis', ['jenis_usaha' => 'unit-1']) }}">Unit 1</a>
                            </li>
                            <li class="{{ request()->is('unit/unit-2') ? 'active' : '' }}">
                                <a href="{{ route('unitJenis', ['jenis_usaha' => 'unit-2']) }}">Unit 2</a>
                            </li>
                        </ul>
                    </li>
                       <li class="{{ request()->is('agenda*') ? 'active' : '' }}"><a href="{{ route('agenda') }}">Agenda</a>
                       </li>
                       <li class="{{ request()->is('berita*') ? 'active' : '' }}"><a href="{{ route('berita') }}">Berita</a>
                       </li>
                       <li class="{{ request()->is('galeri*') ? 'active' : '' }}"><a href="#">Galeri</a>
                        <ul class="dropdown">
                            <li class="{{ request()->is('galeri*') ? 'active' : '' }}"><a href="{{ route('galeriKegiatan') }}">Kegiatan</a></li>
                            <li class="{{ request()->is('galeri*') ? 'active' : '' }}"><a href="{{ route('galeriVideo') }}">Galeri Video</a></li>
                        </ul>
                    </li>
                       <li class="{{ request()->is('kontak*') ? 'active' : '' }}"><a href="{{ route('kontak') }}">Kontak</a></li>
                  </ul>
               </div>
           </div>
        </div>
     </header>
     <!-- =========================
       END HEADER SECTION
     ============================== -->


     <!-- =========================
     START PAGE TITLE SECTION
     ============================== -->
