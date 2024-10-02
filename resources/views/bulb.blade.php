@extends('layout')

@section('content')

</div>
      <!-- bulb section start -->
      <div class="bulb_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="bulb_taital">See Our Bulbs</h1>
                  <p class="bulb_text">nd a search for 'lorem ipsum' will uncover many web sites still in their infancy</p>
               </div>
            </div>
            <div class="bulb_section_2">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="bulb_img"><img src="assets/images/img-1.png"></div>
                              <h3 class="bulb_text1">Bulb1</h3>
                           </div>
                           <div class="col-sm-6">
                              <div class="bulb_img"><img src="assets/images/img-1.png"></div>
                              <h3 class="bulb_text1">Bulb1</h3>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="bulb_img"><img src="assets/images/img-1.png"></div>
                              <h3 class="bulb_text1">Bulb1</h3>
                           </div>
                           <div class="col-sm-6">
                              <div class="bulb_img"><img src="assets/images/img-1.png"></div>
                              <h3 class="bulb_text1">Bulb1</h3>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="bulb_img"><img src="assets/images/img-1.png"></div>
                              <h3 class="bulb_text1">Bulb1</h3>
                           </div>
                           <div class="col-sm-6">
                              <div class="bulb_img"><img src="assets/images/img-1.png"></div>
                              <h3 class="bulb_text1">Bulb1</h3>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <!-- bulb section end -->
@endsection