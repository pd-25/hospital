@extends("frontend.layouts.app")
@section("content")


<section id="innerPG-banner">
    <div class="container-fluid">
       <div class="row">
         <div class="banner-item col-lg-12">
         <img src="{{asset('frontend/images//inner-banner.jpg')}}" class="img-fluid">
         </div>
         </div>
         </div>
</section>
   <!-- Page Content -->

   
   <section id="docPG-section">
   <div class="container">
     <div class="row">
     <div class="col-lg-12 mb-3">	  
     <h2>Job Post</h2>
       </div>
       <div class="col-lg-6">
       <p>Pellentesque facilisis porttitor est, id ullamcorper diam molestie nec. Nulla lorem urna, feugiat ac rutrum a, dictum ac tortor. Morbi posuere convallis turpis sit amet malesuada. Maecenas nisl diam, vestibulum non fermentum a, cursus ac lectus. Curabitur luctus et nunc ut egestas. Vivamus iaculis ligula urna, non imperdiet libero luctus sed. Phasellus viverra arcu eu malesuada interdum. Nullam elementum augue commodo, vulputate tellus eu, suscipit velit. Nulla purus urna, cursus non risus vitae, condimentum auctor mauris. Cras nunc diam, dictum id egestas eget, tincidunt ut augue. Integer eget ante ut odio pulvinar mollis nec vel est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam eget consectetur odio. In hac habitasse platea dictumst. </p>
       
       <p>Phasellus tincidunt consequat ligula, ut venenatis lacus consequat ut. Nam tempor tellus posuere metus tempor varius vel nec lacus. Pellentesque justo magna, eleifend vitae condimentum a, imperdiet eu odio. Nunc vel ipsum congue, sagittis dui eu, hendrerit tellus. Vivamus sollicitudin finibus nisi ut molestie. Vivamus vel eros eget libero egestas laoreet ut at elit. Aenean lobortis, mauris sit amet feugiat scelerisque, nunc tellus aliquet purus, at faucibus magna magna semper dolor. Vestibulum ut dolor imperdiet, tincidunt enim vel, tincidunt orci.</p>
       
       </div>
       <div class="col-lg-6 jpost-box">
       
       <form role="form" action="cenquiry.php" method="post" id="contact-form">
         <div class="controls">
           <div class="row">
             <div class="col-md-6">
               <div class="form-group">
                 <input type="text" required="required" placeholder="First Name" class="form-control" name="first_name" id="first_name">
               </div>
             </div>
             <div class="col-md-6">
               <div class="form-group">
                 <input type="text" required="required" placeholder="Last Name" class="form-control" name="last_name" id="last_name">
               </div>
             </div>
                </div>
             
             <div class="row">
             
             <div class="col-md-6">
               <div class="form-group">
                 <input type="tel" required="required" placeholder="Phone" class="form-control" name="form_Phone" id="form_Phone">
               </div>
             </div>
             
             <div class="col-md-6">
               <div class="form-group">
                 <input type="text" required="required" placeholder="Email" class="form-control" name="form_Email" id="form_Email">
               </div>
             </div>
           </div>
           
           <div class="row">
             <div class="col-md-12">
               <div class="form-group">
                   <textarea data-error="Please,leave us a message." required="required" rows="4" placeholder="Message for me" class="form-control" name="form_message" id="form_message"></textarea>
               </div>
           </div>
           
           <div class="col-md-12">
               <div class="form-group">
                   <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
               </div>
           </div>
           
           
           
           <div class="col-md-12 mt-3">
               <input type="submit" value="Submit Now" class="rm-btn">
             </div>
         </div>

             
     </div>
     </form>

       </div>
       </div>
       
       
     </div>
   </section>
@endsection