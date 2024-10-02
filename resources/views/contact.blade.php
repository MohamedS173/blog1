@extends('layout')

@section('content')
</div>
     <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="contact_taital contact_heading">Get In Touch</h1>
               </div>
            </div>
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <div class="mail_section map_form_container">
                        <form action="">
                           <input type="text" class="mail_text" placeholder="Full Name" name="Full Name">
                           <input type="text" class="mail_text" placeholder="Email" name="Email">
                           <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number"> 
                           <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                           <div class="send_bt active"><a href="#">Send</a></div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
@endsection