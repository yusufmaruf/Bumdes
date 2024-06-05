@extends('layouts.client.master')
@section('title')
    Bumdes
@endsection
@section('pages')
    Bumdes Berita
@endsection
@section('content')


     <!-- =========================
     START CONTACT US SECTION
     ============================== -->
     <section class="contact-us-area contact-us-1-area">
        <div class="contact-form">
           <div class="container">
              <div class="row">
                 <div class="col-sm-4">
                    <div class="contact-form-3-text">
                       <h2>Contact Information</h2>
                       <p>Feel free to contact me for any questions or if you need any help or services ! I provide competitive insight and market analysis no one can duplicate. Analysis reveals opportunities, supports decisions, connects your SEO tactics and strategy directly to revenue.</p>
                       <div class="address-area">
                          <div class="view-location">
                             <h2>Address :</h2>
                             <p><i class="fa fa-map-marker"></i> 2 AlBahr St, Tanta , AlGharbia, Egypt.</p>
                             <a href="#">View Location On Map</a>
                          </div>
                          <div class="col-md-6 no-padding-left">
                             <div class="address-details">
                                 <h2>Email :</h2>
                                 <span><i class="fa   fa-envelope"></i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f1c69e839e9e97b1c69e839e9e97df929e9c">[email&#160;protected]</a></span>
                             </div>
                          </div>
                          <div class="col-md-6 no-padding-left">
                             <div class="address-details">
                                 <h2>Phone :</h2>
                                 <span><i class="fa  fa-phone"></i> + 2 01065370701</span>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-sm-8">
                    <div class="contact-form-left contact-form-3">
                       <h2>Drop Me A Line</h2>
                       <div class="show_result"></div>
                       <div class="result_message"></div>
                       <form>
                          <div class="row">
                             <div class="col-sm-6">
                                <input type="text" id="Name" class="form-control" placeholder="First Name">
                             </div>
                             <div class="col-sm-6">
                                <input type="email" id="Email" class="form-control" placeholder="Email">
                             </div>
                             <div class="col-sm-6">
                                 <input type="text" class="form-control" id="Phone" placeholder="Phone">
                             </div>
                             <div class="col-sm-6">
                                 <input type="text" class="form-control" id="Subject" placeholder="Subject">
                             </div>
                             <div class="col-sm-12">
                                 <textarea class="form-control" rows="3" id="Message"  placeholder="Message"></textarea>
                             </div>
                             <div class="col-sm-12 text-center">
                                <button type="button" id="contact_submit" class="btn btn-dm">Send Message</button>
                             </div>
                          </div>
                       </form>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- =========================
     START CONTACT US SECTION
     ============================== -->
@endsection
