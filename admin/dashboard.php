<?php
    session_start();
    if (empty($_SESSION['userUid'])) {
        header("Location: admin-login.php?error=Uid");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>


    <!-- Meta -->
    <title>Dashboard</title>
	<meta name="description" content="Admin Dashboard">
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
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z' crossorigin='anonymous'>
    <!----------->

    <style>
  input.invalid {
    background-color: #ffdddd;
  }
  .tab {
    display: none;
  }
  .step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
  }
  .step.active {
    opacity: 1;
  }
  .step.finish {
    background-color: #4CAF50;
  }
    </style>
</head>
<body style="font-family: 'Open Sans', sans-serif;">
    <header>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top" style="background-color: #fd8c02; width: 100%; min-height: 75px; justify-content: center; display: flex; width: 100%;">
            <a class="navbar-brand" href="/index"><div id="logoresp" class="logo" style="padding: 2%; width: 285px; height: 57px; background-image: url(/images/longlogo.png);"></div></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown" style="justify-content: space-between;">
              <ul class="navbar-nav" id="navHeader">
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 14px; line-height: 18px" href="/categories/maps"><i class="fas fa-map" style="margin-right: 5px;"></i>FS 19 Maps</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 14px; line-height: 18px" href="/categories/combines"><i class="fas fa-seedling" style="margin-right: 5px;"></i>FS 19 Combines</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 14px; line-height: 18px" href="/categories/tractors"><i class="fas fa-tractor" style="margin-right: 5px;"></i>FS 19 Tractors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 14px; line-height: 18px" href="/categories/trucks"><i class="fas fa-truck" style="margin-right: 5px;"></i>FS 19 Trucks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 14px; line-height: 18px" href="/categories/buildings"><i class="fas fa-warehouse" style="margin-right: 5px;"></i>FS 19 Buildings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-size: 14px; line-height: 18px" href="/categories/vehicles"><i class="fas fa-car" style="margin-right: 5px;"></i>FS 19 Vehicles</a>
                </li>
              </ul>
              <div style="width: 100px;" class="gcse-searchbox-only"></div>
            </div>
          </nav>
        </header>
<div class="container" style="margin-top: 75px; padding: 0;">        
  <div class="jumbotron text-white rounded" style="padding: 0; min-height: 200px;">
      <img src="/images/front-banner-main.jpg" style="width: 100%; min-height: 200px;">
      <ul class="nav justify-content-center bg-light nav-pills nav-fill" id="nav-bel-img" style="padding: 15px;">
        <li class="nav-item">
          <a class="nav-link" href="/guides/how-to-download-mods"><i class="fas fa-file-download" style="margin-right: 10px;"></i>How to Download Mods</a>
        </li>
        <li class="nav-item" style="border-left: 2px solid #dee2e6;">
          <a class="nav-link" href="/guides/how-to-install-mods"><i class="fas fa-question" style="margin-right: 10px;"></i>How to Install Mods</a>
        </li>
        <li class="nav-item" style="border-left: 2px solid #dee2e6;">
          <a class="nav-link" href="/categories/best-maps"><i class="fas fa-road" style="margin-right: 10px;"></i>Best FS 19 Maps</a>
        </li>
        <li class="nav-item" style="border-left: 2px solid #dee2e6;">
          <a class="nav-link" href="/includes/logout.admin.php"><i class="fas fa-times" style="margin-right: 10px;"></i>Log Out</a>
        </li>
      </ul>
  </div>
  <main role="main">
    <div class="container">
      <h3 class="pb-4 mb-4 border-bottom d-flex mt-4 justify-content-center text-align-center">
        Admin Dashboard
      </h3>
    <ul class="nav justify-content-center bg-light nav-pills nav-fill border-bottom" style="padding: 15px;">
      <li class="nav-item" style="border-right: 2px solid #dee2e6; width: 50%;">
        <a href="#createMod" type="button" data-toggle="modal" data-target="#createMod">
          <p><i class="fas fa-wrench"></i>&nbsp; Create Mod</p>
        </a>    
      </li>
    </ul>
    <?php
        if (isset($_GET['murl'])) {
            echo '<p class="signup-success"><a href="https://bestfsmods.com/mods/'.$_GET['murl'].'">View Mod</a></p>';
        }
    ?>
  </div>
  <div class="container-fluid" style="padding-left: 3%; padding-right: 3%">    
    <div class="modal fade" id="createMod" tabindex="-1" aria-labelledby="createMod" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4">
      <form class="form-signin" id="regForm" action="/includes/create-mod.php" enctype="multipart/form-data" method="post">      
        <div class="tab">
          <div class="form-label-group">
            <input type="text" id="MTitle" class="form-control" name="MTitle" placeholder="Mod Title">
            <label for="MTitle">Mod Title</label>
          </div>
          <div class="form-label-group">
            <input type="text" id="MDesc" class="form-control" name="MDesc" style="height: auto; min-height: 100px;" placeholder="Mod Description">
            <label for="MDesc">Mod Description</label>
          </div>
        <div class="form-label-group">
            <input type="file" id="modImageUpload" class="form-control" name="modImageUpload" style="height: 100px;" placeholder="Upload Image">
            <label for="modImageUpload">Upload Image</label>
        </div>
        </div>
        <div class="tab">
          <div class="form-label-group">
            <input type="text" id="MCat" class="form-control" name="MCat" placeholder="Mod Category">
            <label for="MCat">Mod Category</label>
          </div>
          <div class="form-label-group">
            <input type="text" id="MAuthor" class="form-control" name="MAuthor" placeholder="Mod Author">
            <label for="MAuthor">Mod Author</label>
          </div>
          <div class="form-label-group">
            <input type="text" id="MLink" class="form-control" name="MLink" placeholder="Download Link">
            <label for="MLink">Download Link</label>
          </div>
        </div>
        <div style="overflow:auto;">
            <button type="button" class="btn btn-lg btn-primary btn-block" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" class="btn btn-lg btn-primary btn-block" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
        </div>
      </form>
    </div>
  </div>
</div> <!-- End Modal 1 - Create Mod -->
<div class="container-fluid" style="padding-left: 3%; padding-right: 3%">    
</div>
<?php include '../footer.php'; ?>
</div>
<nav class="navbar navbar-light bg-light" style="width: 100%;">
  <p>&copy; BestFSMods.com <br> <a href="/privacy-policy">Privacy Policy</a> | <a href="/terms-and-conditions">Terms and Conditions</a></p>

  <a href="#">Back to top</a>
</nav>
<script src="/includes/create-mod.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>