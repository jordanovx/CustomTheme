<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Support the movement with 2025 Trump gear! Shop official merchandise, apparel, and accessories to show your pride." />
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link rel="icon" type="image/png" href="favicon.png">
    <title>Trump Store 2025</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">


    <!-- Open Graph Tags for Telegram Preview -->
    <meta property="og:title" content="Trump Store 2025 – Get Ready for the Next Red Wave!" />
    <meta property="og:description" content="Support the movement with 2025 Trump gear! Shop official merchandise, apparel, and accessories to show your pride." />
    <meta property="og:image" content="https://2025trump.store/assets/images/trump-store.png" />
    <meta property="og:url" content="https://2025trump.store" />
    <meta property="og:type" content="website" />
</head>

<body>
    <!-- Pre Header -->
    <div id="pre-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>Experience the world of Trump!</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="assets/images/header-logo.png" alt=""></a>
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

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="caption">
                        <div class="line-dec"></div>
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

                            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                $file = "subscribers.txt";
                                $handle = fopen($file, "a");
                                fwrite($handle, $email . PHP_EOL);
                                fclose($handle);
                                echo "<h2><strong>Thank you for subscribing!<strong></h2>";
                            } else {
                                echo "Invalid email address!";
                            }
                        }
                        ?>

                        <div class="main-button">
                            <a href="index.html#featured-sec">View Our Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->