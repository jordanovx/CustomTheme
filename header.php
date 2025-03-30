 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php wp_head() ?>

 </head>

 <body>



     <!-- Pre Header -->
     <div id="pre-header">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <span>Experience the world of Tech!</span>
                 </div>
             </div>
         </div>
     </div>

     <!-- Navigation -->
     <nav class="navbar navbar-expand-lg static-top">
         <div class="container">
             <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-logo.png" alt=""></a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                 aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarResponsive">
                 <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                         <a class="nav-link" href="index.html">Home
                             <span class="sr-only">(current)</span>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="products.html">Products</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="about.html">About Us</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="contact.html">Contact Us</a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>