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
<section class="page-title-area gallery-head-area">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center">
            <div class="about-head-content">
               <h2>Our Gallery</h2>
               <p>See us on action</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- =========================
END PAGE TITLE SECTION
============================== -->

<!-- =========================
  START GALLERY SECTION
============================== -->
<section class="gallery_area">
   <div class="container">
        <!-- bootFolio content  -->
        <div id="second" class="bf four_grid">
            <!-- bootFolio category filter -->
            <div class="container">
                <ul class="filter">
                    <li><a data-cat="all" href="#" class="active">ALL</a> </li>
                    <li><a data-cat="attorneys" href="#">Our Office</a> </li>
                    <li><a data-cat="conferences" href="#">Play Room</a> </li>
                    <li><a data-cat="court" href="#">Workspaces</a> </li>
                </ul>
            </div>
            <!-- bootFolio category filter -->
            <!-- bootFolio Items -->
            <ul class="items">
                <!-- single item -->
                <li class="attorneys">
                    <div class="bf-single-item">
                        <img src="{{ asset('client/images/01.jpg') }}" alt="gallery">
                        <div class="gallery_caption text-center">
                            <div class="gl_caption_inner">
                                <p><a href="">Play Room</a></p>
                                <h2>Fingers On IPad</h2>
                                <a class="image-link" href="{{ asset('client/images/01.jpg') }}">Quick View</a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- single item -->
                <li class="attorneys conferences">
                    <div class="bf-single-item">
                        <img src="{{ asset('client/images/01.jpg') }}" alt="gallery">
                        <div class="gallery_caption text-center">
                            <div class="gl_caption_inner">
                                <p><a href="">Our Office</a></p>
                                <h2>Fingers On IPad</h2>
                                <a class="image-link" href="{{ asset('client/images/01.jpg') }}">Quick View</a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- single item -->
                <li class="court conferences">
                    <div class="bf-single-item">
                        <img src="{{ asset('client/images/01.jpg') }}" alt="gallery">
                        <div class="gallery_caption text-center">
                            <div class="gl_caption_inner">
                                <p><a href="">Workspaces</a></p>
                                <h2>Fingers On IPad</h2>
                                <a class="image-link" href="{{ asset('client/images/01.jpg') }}">Quick View</a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- single item -->
                <li class="court">
                    <div class="bf-single-item">
                        <img src="{{ asset('client/images/01.jpg') }}" alt="gallery">
                        <div class="gallery_caption text-center">
                            <div class="gl_caption_inner">
                                <p><a href="">Our Office</a></p>
                                <h2>Fingers On IPad</h2>
                                <a class="image-link" href="{{ asset('client/images/01.jpg') }}">Quick View</a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- single item -->
                <li class="attorneys">
                    <div class="bf-single-item">
                        <img src="{{ asset('client/images/01.jpg') }}" alt="gallery">
                        <div class="gallery_caption text-center">
                            <div class="gl_caption_inner">
                                <p><a href="">Workspaces</a></p>
                                <h2>Fingers On IPad</h2>
                                <a class="image-link" href="{{ asset('client/images/01.jpg') }}">Quick View</a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- single item -->
                <li class="court">
                    <div class="bf-single-item">
                        <img src="{{ asset('client/images/01.jpg') }}" alt="gallery">
                        <div class="gallery_caption text-center">
                            <div class="gl_caption_inner">
                                <p><a href="">Our Office</a></p>
                                <h2>Fingers On IPad</h2>
                                <a class="image-link" href="{{ asset('client/images/01.jpg') }}">Quick View</a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- single item -->
                <li class="conferences">
                    <div class="bf-single-item">
                        <img src="{{ asset('client/images/01.jpg') }}" alt="gallery">
                        <div class="gallery_caption text-center">
                            <div class="gl_caption_inner">
                                <p><a href="">Workspaces</a></p>
                                <h2>Fingers On IPad</h2>
                                <a class="image-link" href="{{ asset('client/images/01.jpg') }}">Quick View</a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- single item -->
                <li class="attorneys">
                    <div class="bf-single-item">
                        <img src="{{ asset('client/images/01.jpg') }}" alt="gallery">
                        <div class="gallery_caption text-center">
                            <div class="gl_caption_inner">
                                <p><a href="">Our Office</a></p>
                                <h2>Fingers On IPad</h2>
                                <a class="image-link" href="{{ asset('client/images/01.jpg') }}">Quick View</a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- single item -->
                <li class="conferences">
                    <div class="bf-single-item">
                        <img src="{{ asset('client/images/01.jpg') }}" alt="gallery">
                        <div class="gallery_caption text-center">
                            <div class="gl_caption_inner">
                                <p><a href="">Workspaces</a></p>
                                <h2>Fingers On IPad</h2>
                                <a class="image-link" href="{{ asset('client/images/01.jpg') }}">Quick View</a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- single item -->
                <li class="court">
                    <div class="bf-single-item">
                        <img src="{{ asset('client/images/01.jpg') }}" alt="gallery">
                        <div class="gallery_caption text-center">
                            <div class="gl_caption_inner">
                                <p><a href="">Play Room</a></p>
                                <h2>Fingers On IPad</h2>
                                <a class="image-link" href="{{ asset('client/images/01.jpg') }}">Quick View</a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- single item -->
                <li class="attorneys">
                    <div class="bf-single-item">
                        <img src="{{ asset('client/images/01.jpg') }}" alt="gallery">
                        <div class="gallery_caption text-center">
                            <div class="gl_caption_inner">
                                <p><a href="">Our Office</a></p>
                                <h2>Fingers On IPad</h2>
                                <a class="image-link" href="{{ asset('client/images/01.jpg') }}">Quick View</a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- single item -->
                <li class="court">
                    <div class="bf-single-item">
                        <img src="{{ asset('client/images/01.jpg') }}" alt="gallery">
                        <div class="gallery_caption text-center">
                            <div class="gl_caption_inner">
                                <p><a href="">Play Room</a></p>
                                <h2>Fingers On IPad</h2>
                                <a class="image-link" href="{{ asset('client/images/01.jpg') }}">Quick View</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- // bootFolio Items -->
        </div>
   </div>
   <div class="container">
      <div class="row">
         <div class="col-md-12 matrics-pagination gallery-pagination text-center clearfix">
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
</section>
<!-- =========================
  END GALLERY SECTION
============================== -->

@endsection
