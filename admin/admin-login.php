<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>


    <!-- Meta -->
    <title>Admin Login</title>
	<meta name="description" content="Admin Login">
    <link rel="shortcut icon" type="image/png" href="/favicon.png">

    <meta charset='utf-8' />
    <meta http-equiv='x-ua-compatible' content='ie=edge' />
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta property='og:locale' content='en_US' />
    <!---------->
    
    <!-- Robots -->
    <meta name="robots" content="noindex, nofollow" />
    <meta name="googlebot" content="noindex, nofollow" />
    <!------------>

    <!-- Links -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css' integrity='sha256-l85OmPOjvil/SOvVt3HnSSjzF1TUMyT9eV0c2BzEGzU=' crossorigin='anonymous' />
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css' integrity='sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=' crossorigin='anonymous' />
    <!-- CSS -->
    <link href='/css/main.css' rel='stylesheet' />
    <link rel="stylesheet" href="/css/admin-tmp.css">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z' crossorigin='anonymous'>
    <!----------->
</head>
<body style="font-family: 'Open Sans', sans-serif;">
    <div class="container" style="margin-top: 75px; padding: 0;">   
    <form class="form-signin" action="/includes/login.admin.php" method="POST">
        <div class="text-center mb-4">
          <img class="mb-4" src="/images/icon-cover-184.png" width="92" height="92">
          <h1 class="h3 mb-3 font-weight-normal">Log In</h1>
          <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "noUid") {
            echo '<p class="signup-error">Please login to view that page!</p>';
        } elseif ($_GET['error'] == "nouser") {
            echo '<p class="signup-error">Username/Email does not exist</p>';
        } elseif ($_GET['error'] == "wrongpwd") {
            echo '<p class="signup-error">Wrong Username/Password</p>';
        } elseif ($_GET['error'] == "sqlerror") {
            echo '<p class="signup-error">SQL error</p>';
        } elseif ($_GET['error'] == "404") {
            echo '<p class="signup-error">Page cannot be accessed</p>';
        }
    }
    ?>
        </div>
        <div class="form-label-group">
          <input type="password" id="inputPassword" class="form-control" name="pwd" placeholder="Password">
          <label for="inputPassword">Password</label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="login-submit" type="submit">Log in</button>
      </form>
      </div>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>