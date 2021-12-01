<?php include('include/head.php'); ?>
<?php include('include/header.php'); ?>
<main id="main">
   <div id="banner">
      <div class="container">
         <h2>Contact Us</h2>
         <ul>
            <li>
               <a href="index.php" class="brdtitle">Home</a>
            </li>
            <li class="list">
               Contact us
            </li>
         </ul>
      </div>
   </div>
   <!-- Blog listing section start -->
   <div class="container mt-5 mb-5">
      <div class="about1">
         <h3>Contact Us</h3>
         <div class="mapouter">
            <div class="gmap_canvas">
               <iframe width="100%" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=Blu%20Vard%20Area,%20Main%20Double%20Road,%20Africa&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
               <style>.mapouter{position:relative;text-align:right;height:250px;width:100%;}</style>
               <style>.gmap_canvas {overflow:hidden;background:none!important;height:250px;width:100%;}</style>
            </div>
         </div>
      </div>
      <div class="d-flex just mt-3">
         <div class="contact-social">
            <i class="fas fa-envelope"></i>
            <span>support@travelooky.com</span>
         </div>
         <div class="contact-social">
            <i class="fas fa-phone"></i>
            <span>+222 – 5548 656</span>
         </div>
         <div class="contact-social">
            <i class="fas fa-map-marker-alt"></i>
            <span>Street No: 1234/A, Blu Vard Area, Main Double Road, Africa</span>
         </div>
      </div>
      <div class="contact-form mt-5">
         <h3>Send us message</h3>
         <form  class="form text-left">
            <div class="row">
               <div class="col-md-4 col-xs-12">
                  <div class="form-group cont">            
                     <input type="text" id="user" class="form-control" placeholder="Your name">
                  </div>
                  <div class="form-group cont">            
                     <input type="email" id="user" class="form-control" placeholder="Your email">
                  </div>
                  <div class="form-group cont">            
                     <input type="text" id="user" class="form-control" placeholder="Your subject">
                  </div>
               </div>
               <div class="col-md-8 col-xs-12">
                  <div class="form-group cont">
                     <textarea cols="6" rows="4" class="form-control" placeholder="Your message"></textarea>
                  </div>
                  <div class="text-right">
                     <button type="submit" class="form-submit">Submit</button>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</main>
<?php include('include/footer.php'); ?>
