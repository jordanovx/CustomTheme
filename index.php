<?php get_header(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description"
    content="JorTech Solutions provides cutting-edge IT solutions, custom software development, and digital services to boost your business success.">
  <meta name="author" content="">
  <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,700" rel="stylesheet"> -->
</head>

<body>



  <!-- Banner Start -->
  <div class="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="caption">
            <h1>Cutting-Edge Digital Solutions</h1>
            <div class="line-dec"></div>
            <p>
              Welcome to JorTech Solutions, your trusted partner in cutting-edge technology and innovation. <br><br>We
              are dedicated to providing high-quality
              IT solutions and digital services that cater to your needs. Our team of experts is committed to
              innovation, excellence, and customer satisfaction.
            </p>
            <button class="btn btn-primary custom-btn">Read More</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner End -->

  <!-- Featured Section Start -->
  <div class="featured-items" id="featured-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h1>Featured Items</h1>
          </div>
        </div>
        <div class="col-md-12">
          <div class="owl-carousel owl-theme">
            <a href="single-product.html">
              <div class="featured-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/item-01.jpg" alt="Item 1">
                <h4>Mechanical Keyboard</h4>
                <h6>$115.00</h6>
              </div>
            </a>
            <a href="single-product.html">
              <div class="featured-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/item-02.jpg" alt="Item 2">
                <h4>Headphones</h4>
                <h6>$55.00</h6>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Featured Section End -->

  <!-- Form Section Start -->
  <form id="customForm" class="requires-validation" novalidate>
    <div class="container">
      <div class="form-body">
        <div class="row">
          <div class="form-holder">
            <div class="form-content">
              <div class="form-items">
                <h3>Register</h3>
                <p>Fill the form.</p>

                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6">
                      <input class="form-control" type="text" name="Fname" placeholder="First Name" required>
                      <div class="valid-feedback">First Name field is valid!</div>
                      <div class="invalid-feedback">First Name field cannot be blank!</div>
                    </div>

                    <div class="col-md-6">
                      <input class="form-control" type="text" name="Lname" placeholder="Last Name" required>
                      <div class="valid-feedback">Last Name field is valid!</div>
                      <div class="invalid-feedback">Last Name field cannot be blank!</div>
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                  <div class="valid-feedback">Email field is valid!</div>
                  <div class="invalid-feedback">Email field cannot be blank!</div>
                </div>

                <div class="col-md-12">
                  <input type="tel" id="phone" name="mobile" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                    placeholder="Enter Your Phone Number" />
                  <div class="valid-feedback">Phone field is valid!</div>
                  <div class="invalid-feedback">Phone field cannot be blank!</div>
                </div>

                <div class="form-button mt-3">
                  <button id="submit" onclick="submitCustomForm(event)" value="Submit Form"
                    class="btn btn-primary custom-btn">Register</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </form>
  <!-- Form Section End -->

  <!-- Testimonials Section Start-->
  <div class="testimonials">
    <div class="container mt-5 mb-5">
      <div class="section-heading">
        <div class="line-dec"></div>
        <h1>Testimonials</h1>
      </div>
      <div class="row g-2">
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card p-3 text-center px-4 h-100">
            <div class="user-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ethan.png" class="rounded-circle" width="80">
            </div>
            <div class="user-content">
              <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <h5 class="mb-0">John Doe</h5>
              <p>JorTech Solutions exceeded our expectations! Their IT solutions are top-notch, and their customer
                service is exceptional!"
              </p>
            </div>

          </div>
        </div>
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card p-3 text-center px-4 h-100">
            <div class="user-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/av2.png" class="rounded-circle" width="80">
            </div>
            <div class="user-content">
              <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <h5 class="mb-0">Jane Smith</h5>
              <p>Highly recommended! Professional, efficient, and reliable.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card p-3 text-center px-4 h-100">
            <div class="user-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/av3.png" class="rounded-circle" width="80">
            </div>
            <div class="user-content">
              <div class="ratings">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <h5 class="mb-0">Sarah Duncan</h5>
              <p>Their IT consulting services helped us streamline our business operations effectively. Fantastic team!
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Testimonials Section End -->

  <!-- Subscribe Form Start -->
  <div class="subscribe-form">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h1>Subscribe now!</h1>
          </div>
        </div>
        <div class="col-md-8 offset-md-2">
          <div class="main-content">
            <p>Join Our Mailing List for Discounts & More!</p>
            <div class="container">
              <form id="subscribe" action="save_email.php" method="post">
                <div class="row">
                  <div class="col-md-7 pb-3 pb-md-0">
                    <fieldset>
                      <input name="email" type="email" class="form-control" id="email" placeholder="Your Email..."
                        required>
                    </fieldset>
                  </div>
                  <div class="col-md-5">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">Subscribe Now!</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Subscribe Form End -->

  <!-- FAQ Section Start -->
  <div class="faq">
    <div class="container">
      <div class="section-heading">
        <div class="line-dec"></div>
        <h1>Frequently Asked Question</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="accordion">
            <div class="accordion__item">
              <div class="accordion__header" data-toggle="#faq1">What services does JorTech Solutions offer?
              </div>
              <div class="accordion__content" id="faq1">
                <p>We specialize in custom software development, web & mobile app development, and IT consulting &
                  support services.
                </p>
              </div>
            </div>

            <div class="accordion__item">
              <div class="accordion__header" data-toggle="#faq2">How can JorTech Solutions help my business?
              </div>
              <div class="accordion__content" id="faq2">
                <p>We provide tailored IT solutions that enhance efficiency, improve digital presence, and optimize your
                  business operations.
                </p>
              </div>
            </div>

            <div class="accordion__item">
              <div class="accordion__header" data-toggle="#faq3">Do you offer ongoing support after project completion?
              </div>
              <div class="accordion__content" id="faq3">
                <p>Yes, we offer maintenance and support services to ensure your systems run smoothly post-deployment.
                </p>
              </div>
            </div>

            <div class="accordion__item">
              <div class="accordion__header" data-toggle="#faq4">Can you develop solutions for startups and small
                businesses?</div>
              <div class="accordion__content" id="faq4">
                <p>Absolutely! We work with businesses of all sizes and tailor our services to meet their specific
                  needs.
                </p>
              </div>
            </div>

            <div class="accordion__item">
              <div class="accordion__header" data-toggle="#faq5">How long does it take to develop a custom software
                solution?</div>
              <div class="accordion__content" id="faq5">
                <p>The timeline varies depending on project complexity, but we work efficiently to deliver high-quality
                  solutions on time.
                </p>
              </div>
            </div>

            <div class="accordion__item">
              <div class="accordion__header" data-toggle="#faq6">How can I get a quote for my project?</div>
              <div class="accordion__content" id="faq6">
                <p>You can contact us via email, phone, or our website, and we’ll provide a tailored quote based on your
                  requirements.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- FAQ Section End -->

  <?php get_footer(); ?>