 <!-- Footer Start -->
 <div class="footer">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="logo">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-logo.png" alt="">
                 </div>
             </div>
             <div class="col-md-12">
                 <div class="footer-menu">
                     <ul>
                         <li><a href="#">Home</a></li>
                         <li><a href="#">Help</a></li>
                         <li><a href="#">Privacy Policy</a></li>
                         <li><a href="#">How It Works ?</a></li>
                         <li><a href="#">Contact Us</a></li>
                     </ul>
                 </div>
             </div>
             <div class="col-md-12">
                 <div class="social-icons">
                     <ul>
                         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Footer End -->


 <!-- Sub Footer Start -->
 <div class="sub-footer">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="copyright-text">
                     <p> &copy; 2025 JorTech Inc.</p>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Sub Footer End -->






 <script language="text/Javascript">
     cleared[0] = cleared[1] = cleared[2] = 0;

     function clearField(t) {
         if (!cleared[t.id]) {
             cleared[t.id] = 1;
             t.value = '';
             t.style.color = '#fff';
         }
     }

     console.log("TEST");
 </script>

 <?php wp_footer(); ?>

 </body>

 </html>