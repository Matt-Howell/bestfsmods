<!DOCTYPE html>
<html>

<head>

  <?php 
    #set variables here:

    $postTitle = 'Dreisternhof';
    $postDesc = 'Download the '.$postTitle.' FS 19 map here!';
    $postImg = '/images/mod-images/dreisternhof-1.jpg';
    $postCategory = 'maps';
    $downloadLink = 'http://modsfile.com/oo86qdypjyge/FS19_Dreisternhof.zip.html';
    $postAuthor = 'RitchiF';
    $postDate = 'September 28, 2020';

    ?>

  <!-- Keywords + SEO -->
  <title>FS19 <?php echo $postTitle; ?> - BestFSMods</title>
  <meta name="description" content="<?php echo $postDesc; ?>">
  <meta name="keywords"
    content="farming simulator 19 mods,farming simulator 19 mods xbox one,farming simulator 19 mods pc,farming simulator 19 mods in testing,farming simulator 19 mods for xbox one,farming simulator 19 truck mods xbox one,farming simulator 19 mods com,farming simulator 19 mods download,farming simulator 19 mods hub,farming simulator 19 mods trucks">
  <link rel="shortcut icon" type="image/png" href="/favicon.png">
  <!-------------------->

  <?php require '../head.php'; ?>

  <!-- Social Media -->
  <meta name="twitter:title" content="FS19 <?php echo $postTitle; ?> - BestFSMods">
  <meta name="twitter:description" content="<?php echo $postDesc; ?>">
  <meta name="twitter:image" content="<?php echo $postImg; ?>">
  <meta name="twitter:card" content="summary_large_image">

  <meta property="og:title" content="FS19 <?php echo $postTitle; ?> - BestFSMods">
  <meta property="og:description" content="<?php echo $postDesc; ?>">
  <meta property="og:image" content="<?php echo $postImg; ?>">
  <!------------------->

  <!-- Robots -->
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large" />
  <!------------>
</head>

<body style="font-family: 'Open Sans', sans-serif;">
  <header>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top"
      style="background-color: #fd8c02; width: 100%; min-height: 75px; justify-content: center; display: flex; width: 100%;">
      <a class="navbar-brand" href="/index">
        <div id="logoresp" class="logo"
          style="padding: 2%; width: 285px; height: 57px; background-image: url(/images/longlogo.png);"></div>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown" style="justify-content: space-between;">
        <ul class="navbar-nav" id="navHeader">
          <li class="nav-item">
            <a class="nav-link" style="font-size: 14px; line-height: 18px" href="/categories/maps"><i class="fas fa-map"
                style="margin-right: 5px;"></i>FS 19 Maps</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="font-size: 14px; line-height: 18px" href="/categories/combines"><i
                class="fas fa-seedling" style="margin-right: 5px;"></i>FS 19 Combines</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="font-size: 14px; line-height: 18px" href="/categories/tractors"><i
                class="fas fa-tractor" style="margin-right: 5px;"></i>FS 19 Tractors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="font-size: 14px; line-height: 18px" href="/categories/trucks"><i
                class="fas fa-truck" style="margin-right: 5px;"></i>FS 19 Trucks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="font-size: 14px; line-height: 18px" href="/categories/buildings"><i
                class="fas fa-warehouse" style="margin-right: 5px;"></i>FS 19 Buildings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="font-size: 14px; line-height: 18px" href="/categories/vehicles"><i
                class="fas fa-car" style="margin-right: 5px;"></i>FS 19 Vehicles</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <div class="container" style="margin-top: 75px; padding: 0;">
    <div class="jumbotron text-white rounded" style="padding: 0; min-height: 200px;">
      <img src="/images/mod-banner-main.jpg" alt="Farming Simulator 19 Mods, FS 19 Maps, LS 19 Mods"
        style="width: 100%; min-height: 200px;">
      <ul class="nav justify-content-center bg-light nav-pills nav-fill" id="nav-bel-img" style="padding: 15px;">
        <li class="nav-item">
          <a class="nav-link" href="/guides/how-to-download-mods"><i class="fas fa-file-download"
              style="margin-right: 10px;"></i>How to Download Mods</a>
        </li>
        <li class="nav-item" style="border-left: 2px solid #dee2e6;">
          <a class="nav-link" href="/guides/how-to-install-mods"><i class="fas fa-question"
              style="margin-right: 10px;"></i>How to Install Mods</a>
        </li>
        <li class="nav-item" style="border-left: 2px solid #dee2e6;">
          <a class="nav-link" href="/categories/best-maps"><i class="fas fa-road" style="margin-right: 10px;"></i>Best
            FS 19 Maps</a>
        </li>
        <li class="nav-item" style="border-left: 2px solid #dee2e6;">
          <a class="nav-link" href="/contact"><i class="fas fa-at" style="margin-right: 10px;"></i>Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
  <main role="main" class="container">
    <div class="mt-3 mb-3" style="margin: auto;">
      <!-- ad was here -->
    </div>
    <div class="center">
      <h1 class="h2 pb-4 mb-4 justify-content-center border-bottom text-align-center">
        <?php echo $postTitle; ?> FS19
      </h1>
    </div>
    <div class="row justify-content-center">
      <p class="lead" style="font-size: 18px; margin-left: 10px; padding-right: 10px; border-right: 1px solid #dee2e6;">
        Author: <?php echo $postAuthor; ?></p>
      <p class="lead" style="font-size: 18px; margin-left: 10px; padding-right: 10px; border-right: 1px solid #dee2e6;">
        <?php echo $postDate; ?></p>
      <p class="lead" style="font-size: 18px; margin-left: 10px; margin-right: 10px;"><a
          href="/categories/<?php echo $postCategory; ?>" style="text-decoration: none;">FS 19
          <?php echo $postCategory; ?></a></p>
    </div>
    <img src="<?php echo $postImg; ?>" alt="<?php echo $postTitle; ?> FS19" class="img-fluid mx-auto d-block">
    <div class="row justify-content-center align-items-start border-0 h-100 mt-4">
      <nav id="sidebarMenu" class="col-3 d-md-block sidebar collapse mt-0 pt-0 border-0 h-100">
        <div class="sidebar-sticky pt-3 border-0 h-100">
          <div class="mb-2" style="height: auto;">
<!-- ad was here -->
          </div>
        </div>
      </nav>
      <div class="col-md-9 mr-0 border-left mb-4">
        <div class="mb-2">
          <!-- ad was here -->
        </div>
        <div class="center">
          <h2 class="h4 pb-4 mb-4 mt-4 justify-content-center border-bottom text-align-center">
            FS19 <?php echo $postTitle; ?> Mod
          </h2>
        </div>
        <p class="text-align-left" style="padding-left: 3%; padding-right: 3%">
          You now have the opportunity to breathe new life into the old Dreisternhof.<br>
          The buildings are still good to start immediately. So spare no time or effort, because you will be rewarded
          with
          a beautiful yard and a nice shop.<br>
          At the farm are already cows, pigs and chickens. Sheep and horses are at the side yard, which you have to buy
          first.<br>
          On the map you expect:<br>
          25 fields<br>
          6 meadows<br>
          4 outlets<br>
          1 BGA<br>
          Propagating grass added<br>
          Traffic is blocked<br>
          Added &quot;snow mask&quot;<br>
          Forests for forestry work<br>
          Have fun, whether in SP or MP.<br>
          <br>
          Changelog 1.0.0.1:<br>
          - Cow and pigsty processed (the decoration objects are gone)<br>
          -Other field textures<br>
          - at the two higher levels of difficulty no animals are at the start<br>
          -Cotton and sugarcane are back on the map<br>
          -small changes<br>
          <br>
          Changelog 1.0.0.2:<br>
          -Improve your own placeable<br>
          - exchanged some shelters<br>
          - Textures on the side of the road and some dirt roads changed<br>
          -Revised landscape<br>
          -In the game can now bushes (GRASSTOWN) and decorative grass cannot be drawn renewable (GRASSROUG)be drawn<br>
          -Textures of courtyard buildings revised<br>
          Except for the new textures on the streets, dirt roads and the landscape, none<br>
          new savegame needed<br>
          <br>
          Changelog 1.0.0.3:<br>
          -Textures exchanged on farm buildings<br>
          -Improve performance<br>
          -new water tarpaulin<br>
          no new savegame necessary<br>
          <br>
          Changelog 1.0.0.4:<br>
          -other field textures<br>
          -new garage and halls<br>
          -new yard silo<br>
          -Sleep trigger installed<br>
          - various textures changed<br>
          no new savegame necessary<br>
          <br>
          Changelog 1.0.0.5:<br>
          NEW SAVEGAME REQUIRED!<br>
          There will be no further changes!<br>
          - the courtyard has been redesigned with other buildings<br>
          -new cowshed<br>
          - sheep at the farm<br>
          -new cattle dealer<br>
          -Horses are now in the barn area<br>
          -miscellaneous small changes to the location<br>
          -new wool sale<br>
          I thank Chefkoch for permission to use the courtyard building.
        </p>
        <div class="center" style="margin-top: 15px">
          <p class="lead mx-auto">Credit: <?php echo $postAuthor; ?></p>
        </div>
        <div style="margin: auto; margin-top: 15px; margin-bottom: 10px;">
<!-- ad was here -->
        </div>
        <div class="center" style="margin-top: 15px"><a href="<?php echo $downloadLink; ?>" target="_blank"><button
              class="btn btn-primary btn-lg mx-auto border-0" style="background-color: #009D0B; margin-bottom: 20px;">
              <i class="fas fa-file-download" style="margin-right: 10px;"></i>Download
            </button></a></div>
      </div>
    </div>
    <hr>
    <button class="btn btn-primary btn-lg btn-block" style="background-color: #fd8c02; border: 0px;" type="button"
      data-toggle="collapse" data-target="#extraNav" aria-controls="extraNav" aria-expanded="true"
      aria-label="Toggle extraNav">
      <h4 class="display-5" style="margin-right: 10px">All FS 19 Mods &nbsp;<i class="fas fa-caret-square-down"></i>
      </h4>
    </button>
    <div class="collapse row" id="extraNav">
      <div class="col-md-6" style="margin-top: 10px;">
        <div class="list-group">
          <a href="/categories/tractors" class="list-group-item list-group-item-action"><i class="fas fa-tractor"
              style="margin-right: 10px;"></i>FS 19 Tractors</a>
          <a href="/categories/trucks" class="list-group-item list-group-item-action"><i class="fas fa-truck"
              style="margin-right: 10px;"></i>FS 19 Trucks</a>
          <a href="/categories/maps" class="list-group-item list-group-item-action"><i class="fas fa-road"
              style="margin-right: 10px;"></i>FS 19 Maps</a>
        </div>
      </div>
      <div class="col-md-6" style="margin-top: 10px;">
        <div class="list-group">
          <a href="/categories/vehicles" class="list-group-item list-group-item-action"><i class="fas fa-car"
              style="margin-right: 10px;"></i>FS 19 Vehicles</a>
          <a href="/categories/buildings" class="list-group-item list-group-item-action"><i class="fas fa-building"
              style="margin-right: 10px;"></i>FS 19 Buildings</a>
          <a href="/categories/combines" class="list-group-item list-group-item-action"><i class="fas fa-fan"
              style="margin-right: 10px;"></i>FS 19 Combines</a>
        </div>
      </div>
    </div><!-- /.row -->
    <div class="mb-3 mt-3">
<!-- ad was here -->
    </div>
    <?php include '../footer.php'; ?>
    <nav class="navbar navbar-light bg-light">
      <p>&copy; BestFSMods.com <br> <a href="/privacy-policy">Privacy Policy</a> | <a href="/terms-and-conditions">Terms
          and Conditions</a></p>

      <a href="#">Back to top</a>
    </nav>
  </main><!-- /.container -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
</body>

</html>