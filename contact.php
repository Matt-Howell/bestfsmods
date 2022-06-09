<!DOCTYPE html>
<html>
<head>
  <!-- Keywords + SEO -->
  <title>Contact Us - BestFSMods</title>
	<meta name="description" content="If you have any questions, concerns or issues, please contact us here!">
  <link rel="shortcut icon" type="image/png" href="/favicon.png">
  <link rel="canonical" href="https://bestfsmods.com/contact" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
  <!-------------------->
  
    <?php require 'head.php'; ?>

  <!-- Social Media -->
  <meta name="twitter:title" content="Contact Us - BestFSMods">
	<meta name="twitter:description" content="If you have any questions, concerns or issues, please contact us here!">
	<meta name="twitter:image" content="/images/icon-cover-184.png">
  <meta name="twitter:card" content="summary_large_image">
        
	<meta property="og:title" content="Contact Us - BestFSMods">
	<meta property="og:description" content="If you have any questions, concerns or issues, please contact us here!">
	<meta property="og:image" content="/images/icon-cover-184.png">
  <!------------------->
  
  <!-- Robots -->
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large" />
  <!------------>
</head>
<body style="font-family: 'Open Sans', sans-serif;">
    <header>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top" style="background-color: #fd8c02; width: 100%; min-height: 75px; justify-content: center; display: flex; width: 100%;">
            <a class="navbar-brand" href="index"><div id="logoresp" class="logo" style="padding: 2%; width: 285px; height: 57px; background-image: url(images/longlogo.png);"></div></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown" style="justify-content: space-between;">
              <ul class="navbar-nav" id="navHeader">
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 14px; line-height: 18px" href="categories/maps"><i class="fas fa-map" style="margin-right: 5px;"></i>FS 19 Maps</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 14px; line-height: 18px" href="categories/combines"><i class="fas fa-seedling" style="margin-right: 5px;"></i>FS 19 Combines</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 14px; line-height: 18px" href="categories/tractors"><i class="fas fa-tractor" style="margin-right: 5px;"></i>FS 19 Tractors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 14px; line-height: 18px" href="categories/trucks"><i class="fas fa-truck" style="margin-right: 5px;"></i>FS 19 Trucks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 14px; line-height: 18px" href="categories/buildings"><i class="fas fa-warehouse" style="margin-right: 5px;"></i>FS 19 Buildings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 14px; line-height: 18px" href="categories/vehicles"><i class="fas fa-car" style="margin-right: 5px;"></i>FS 19 Vehicles</a>
                </li>
              </ul>
              <div style="width: 100px;" class="gcse-searchbox-only"></div>
            </div>
          </nav>
        </header>
<div class="container" style="margin-top: 75px; padding: 0;">        
  <div class="jumbotron text-white rounded" style="padding: 0; min-height: 200px;">
      <img src="images/front-banner-main.jpg" style="width: 100%; min-height: 200px;">
      <ul class="nav justify-content-center bg-light nav-pills nav-fill" id="nav-bel-img" style="padding: 15px;">
        <li class="nav-item">
          <a class="nav-link" href="guides/how-to-download-mods"><i class="fas fa-file-download" style="margin-right: 10px;"></i>How to Download Mods</a>
        </li>
        <li class="nav-item" style="border-left: 2px solid #dee2e6;">
          <a class="nav-link" href="guides/how-to-install-mods"><i class="fas fa-question" style="margin-right: 10px;"></i>How to Install Mods</a>
        </li>
        <li class="nav-item" style="border-left: 2px solid #dee2e6;">
          <a class="nav-link" href="categories/best-maps"><i class="fas fa-road" style="margin-right: 10px;"></i>Best FS 19 Maps</a>
        </li>
        <li class="nav-item" style="border-left: 2px solid #dee2e6;">
          <a class="nav-link" href="#contact"><i class="fas fa-at" style="margin-right: 10px;"></i>Contact Us</a>
        </li>
      </ul>
  </div>
    <div class="center">
        <h1 class="h2 pb-4 mb-4 justify-content-center border-bottom text-align-center">
            Contact Us
        </h1>
    </div>
    <div style="padding-left: 3%; padding-right: 3%">
    <p>
        If you have any issues, comments or concerns then you should contact us! We can help with any issues you have, like mod removals, site issues and more! Below we have a contact form, here you can contact us directly!
        <br><br>
        Feel free to contact us using the form below, we usually reply in 1 to 2 business days!
    </p>
    <?php 
    if (isset($_GET['m'])) {
        if ($_GET['m'] == "s") {
            echo '<p class="signup-success" style="margin-left: 0px; padding-left: 0px">Message Sent!</p>';
        }
    }
    ?>
    <form class="needs-validation" novalidate action="includes/mail.inc.php" method="POST">
      <div class="form-group">
          <label for="uName">Name</label>
          <input type="text" class="form-control" name="name" id="uName" placeholder="John Doe" aria-describedby="inputGroupPrepend" required>
          <div class="invalid-feedback">Please enter your name</div>
      </div>
      <div class="form-group">
        <label for="mail">Email address</label>
        <input type="email" name="email" class="form-control" id="mail" placeholder="name@example.com" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">Please enter your email address</div>
      </div>
      <div class="form-group">
        <label for="msg">Message</label>
        <input class="form-control" name="message" id="msg" style="height: 100px;" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">Please enter a message</div>
      </div>
      <input type="submit" class="btn btn-primary mx-auto my-3" value="Send" name="send-mail">
  </form>
      
      <script>
        (function () {
          'use strict'

          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.querySelectorAll('.needs-validation')

          // Loop over them and prevent submission
          Array.prototype.slice.call(forms)
            .forEach(function (form) {
              form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                  event.preventDefault()
                  event.stopPropagation()
                }

                form.classList.add('was-validated')
              }, false)
            })
        })();
      </script>

<?php include 'footer.php'; ?>
</div>
<nav class="navbar navbar-light bg-light" style="width: 100%;">
  <p>&copy; BestFSMods.com <br> <a href="privacy-policy">Privacy Policy</a> | <a href="terms-and-conditions">Terms and Conditions</a></p>

  <a href="#">Back to top</a>
</nav>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
    </body>
    </html>