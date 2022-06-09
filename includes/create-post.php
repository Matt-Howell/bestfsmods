<?php

$postTitle = $_POST['PTitle'];
$downloadLink = $_POST['PLink'];
$postAuthor = $_POST['PAuthor'];
$metaPostDesc = $_POST['PDesc'];
$postType = $_POST['PType'];
$pH1 = $_POST['pH1'];

// paragraphs POST

if (isset($_POST['p1'])) {
    $p1 = $_POST['p1'];
} if (isset($_POST['p2'])) {
    $p2 = $_POST['p2'];
} if (isset($_POST['p3'])) {
    $p3 = $_POST['p3'];
} if (isset($_POST['p4'])) {
    $p4 = $_POST['p4'];
} if (isset($_POST['p5'])) {
    $p5 = $_POST['p5'];
}

// End

// H2s Post

$h2String = $_POST['pH2'];
$h2Array = explode(', ', $h2String);
$h2lenarray = count($h2Array);

// End

$postTypeUC = ucfirst($postType);

$fileNameLSS = strtolower($postTitle);
$uFilename = str_replace(" ","-",$fileNameLSS);

$timestamp = time();
$postDay = date("d", $timestamp);
$postMonth = date("m", $timestamp);

$monthNum = $postMonth;
$dateObj  = DateTime::createFromFormat('!m', $monthNum);
$monthName = $dateObj->format('F');

// ftp file upload

$postThumbnail = '../images/'.basename($_FILES["postThumbnail"]["name"]);
$postImg1 = '../images/'.basename($_FILES["postImage1"]["name"]);
$postImg2 = '../images/'.basename($_FILES["postImage2"]["name"]);
$postImg3 = '../images/'.basename($_FILES["postImage3"]["name"]);

$target_dir = "../images/";
$target_file0 = $target_dir . basename($_FILES["postThumbnail"]["name"]);
$target_file1 = $target_dir . basename($_FILES["postImage1"]["name"]);
$target_file2 = $target_dir . basename($_FILES["postImage2"]["name"]);
$target_file3 = $target_dir . basename($_FILES["postImage3"]["name"]);
$uploadOk = 1;
$imageFileType0 = strtolower(pathinfo($target_file0,PATHINFO_EXTENSION));
$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
$imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
$check0 = getimagesize($_FILES["postThumbnail"]["tmp_name"]);
  $check1 = getimagesize($_FILES["postImage1"]["tmp_name"]);
  $check2 = getimagesize($_FILES["postImage2"]["tmp_name"]);
  $check3 = getimagesize($_FILES["postImage3"]["tmp_name"]);
  if($check0 !== false || $check1 !== false || $check2 !== false || $check3 !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

if (file_exists($target_file0)) {
    header("Location: ../admin/dashboard?uploaded=false&reason=exists");
    $uploadOk = 0;
}

if (file_exists($target_file1)) {
    header("Location: ../admin/dashboard?uploaded=false&reason=exists");
    $uploadOk = 0;
}

if (file_exists($target_file2)) {
    header("Location: ../admin/dashboard?uploaded=false&reason=exists");
    $uploadOk = 0;
}

if (file_exists($target_file3)) {
    header("Location: ../admin/dashboard?uploaded=false&reason=exists");
    $uploadOk = 0;
}

if ($_FILES["postThumbnail"]["size"] > 2000000) {
    header("Location: ../admin/dashboard?uploaded=false&reason=size");
    $uploadOk = 0;
} 

if ($_FILES["postImage1"]["size"] > 2000000) {
    header("Location: ../admin/dashboard?uploaded=false&reason=size");
    $uploadOk = 0;
} 

if ($_FILES["postImage2"]["size"] > 2000000) {
    header("Location: ../admin/dashboard?uploaded=false&reason=size");
    $uploadOk = 0;
}

if ($_FILES["postImage3"]["size"] > 2000000) {
    header("Location: ../admin/dashboard?uploaded=false&reason=size");
    $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
} else {
  if (move_uploaded_file($_FILES["postThumbnail"]["tmp_name"], $target_file1) && move_uploaded_file($_FILES["postImage1"]["tmp_name"], $target_file1) && move_uploaded_file($_FILES["postImage2"]["tmp_name"], $target_file2) && move_uploaded_file($_FILES["postImage3"]["tmp_name"], $target_file3)) {
    header("Location: ../admin/dashboard?uploaded=true&purl=".$uFilename);
  } else {
    header("Location: ../admin/dashboard?uploaded=false&reason=error");
  }
}

// end ftp upload

$newfile = fopen("../".$postType."/".$uFilename.".php", "w") or die("Unable to open file!");

$HTMLCode = "
<!-- Keywords + SEO -->
<title>'{$postTitle} - BestFSMods'</title>
<meta name='description' content='{$metaPostDesc}'>
<meta name='keywords' content='farming simulator 19 mods,farming simulator 19 mods xbox one,farming simulator 19 mods pc,farming simulator 19 mods in testing,farming simulator 19 mods for xbox one,farming simulator 19 truck mods xbox one,farming simulator 19 mods com,farming simulator 19 mods download,farming simulator 19 mods hub,farming simulator 19 mods trucks'>
<link rel='shortcut icon' type='image/png' href='/favicon.png'>
<!-------------------->

<?php require '../head.php'; ?>

<!-- Social Media -->
<meta name='twitter:title' content='{$postTitle} - BestFSMods'>
<meta name='twitter:description' content='{$metaPostDesc}'>
<meta name='twitter:image' content='{$postImg}'>
<meta name='twitter:card' content='summary_large_image'>

<meta property='og:title' content='{$postTitle} - BestFSMods'>
<meta property='og:description' content='{$metaPostDesc}'>
<meta property='og:image' content='{$postImg}'>
<!------------------->

<!-- Robots -->
<meta name='robots' content='index, follow' />
<meta name='googlebot' content='index, follow, max-snippet:-1, max-image-preview:large' />
<!------------>
</head>
<body style='font-family: Open Sans, sans-serif;'>
    <header>
        <nav class='navbar navbar-light navbar-expand-lg fixed-top' style='background-color: #fd8c02; width: 100%; min-height: 75px; justify-content: center; display: flex; width: 100%;'>
            <a class='navbar-brand' href='/index'><div id='logoresp' class='logo' style='padding: 2%; width: 285px; height: 57px; background-image: url(/images/longlogo.png);'></div></a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
              <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNavDropdown' style='justify-content: space-between;'>
              <ul class='navbar-nav' id='navHeader'>
                <li class='nav-item'>
                    <a class='nav-link' style='font-size: 14px; line-height: 18px' href='/categories/maps'><i class='fas fa-map' style='margin-right: 5px;'></i>FS 19 Maps</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' style='font-size: 14px; line-height: 18px' href='/categories/combines'><i class='fas fa-seedling' style='margin-right: 5px;'></i>FS 19 Combines</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' style='font-size: 14px; line-height: 18px' href='/categories/tractors'><i class='fas fa-tractor' style='margin-right: 5px;'></i>FS 19 Tractors</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' style='font-size: 14px; line-height: 18px' href='/categories/trucks'><i class='fas fa-truck' style='margin-right: 5px;'></i>FS 19 Trucks</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' style='font-size: 14px; line-height: 18px' href='/categories/buildings'><i class='fas fa-warehouse' style='margin-right: 5px;'></i>FS 19 Buildings</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' style='font-size: 14px; line-height: 18px' href='/categories/vehicles'><i class='fas fa-car' style='margin-right: 5px;'></i>FS 19 Vehicles</a>
                </li>
              </ul>
            </div>
          </nav>
        </header>
    <div class='container' style='margin-top: 75px; padding: 0;'>        
      <div class='jumbotron text-white rounded' style='padding: 0; min-height: 200px;'>
          <img src='/images/mod-banner-main.jpg' alt='Farming Simulator 19 Mods, FS 19 Maps, LS 19 Mods' style='width: 100%; min-height: 200px;'>
          <ul class='nav justify-content-center bg-light nav-pills nav-fill' id='nav-bel-img' style='padding: 15px;'>
            <li class='nav-item'>
              <a class='nav-link' href='/guides/how-to-download-mods'><i class='fas fa-file-download' style='margin-right: 10px;'></i>How to Download Mods</a>
            </li>
            <li class='nav-item' style='border-left: 2px solid #dee2e6;'>
              <a class='nav-link' href='/guides/how-to-install-mods'><i class='fas fa-question' style='margin-right: 10px;'></i>How to Install Mods</a>
            </li>
            <li class='nav-item' style='border-left: 2px solid #dee2e6;'>
              <a class='nav-link' href='/categories/best-maps'><i class='fas fa-road' style='margin-right: 10px;'></i>Best FS 19 Maps</a>
            </li>
            <li class='nav-item' style='border-left: 2px solid #dee2e6;'>
              <a class='nav-link' href='/contact'><i class='fas fa-at' style='margin-right: 10px;'></i>Contact Us</a>
            </li>
          </ul>
      </div>
    </div>
    <main role='main' class='container'>
    <div class='mt-3 mb-3' style='margin: auto;'>
      <!-- BFS modTopBanner -->
      <ins class='adsbygoogle' style='display:block' data-ad-client='ca-pub-5682997250624118' data-ad-slot='2151286970'
        data-ad-format='auto' data-full-width-responsive='true'></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
        <div class='center'>
            <h1 class='h2 pb-4 mb-4 justify-content-center border-bottom text-align-center'>
                {$pH1}
            </h1>
        </div>
        <div class='row justify-content-center'>
            <p class='lead' style='font-size: 18px; margin-left: 10px; padding-right: 10px; border-right: 1px solid #dee2e6;'>{$monthName} {$postDay}, 2020</p>
            <p class='lead' style='font-size: 18px; margin-left: 10px; margin-right: 10px;'><a href='/index' style='text-decoration: none;'>{$postTypeUC}</a></p>
        </div>
        <img src='{$postThumbnail}' alt='{$postTitle}' class='img-fluid mx-auto d-block'>
        <div class='mb-2'>
            <!-- BFS inMod -->
            <ins class='adsbygoogle' style='display:block' data-ad-client='ca-pub-5682997250624118'
                data-ad-slot='1606994519' data-ad-format='auto' data-full-width-responsive='true'></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
        <p class='text-align-left mt-4' style='padding-left: 3%; padding-right: 3%'>
            {$p1}
        </p>
        <div class='center'><h2 class='h4 pb-4 mb-4 mt-4 justify-content-center border-bottom text-align-center'>
            {$h2Array[0]}
        </h2></div>
        <div class='mb-2'>
            <!-- BFS inMod -->
            <ins class='adsbygoogle' style='display:block' data-ad-client='ca-pub-5682997250624118'
                data-ad-slot='1606994519' data-ad-format='auto' data-full-width-responsive='true'></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
        <p class='text-align-left' style='padding-left: 3%; padding-right: 3%'>
            {$p2}
        </p>
        <div class='mb-2'>
            <!-- BFS inMod -->
            <ins class='adsbygoogle' style='display:block' data-ad-client='ca-pub-5682997250624118'
                data-ad-slot='1606994519' data-ad-format='auto' data-full-width-responsive='true'></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
        <img src='{$postImg1}' alt='{$$h2Array[0]}' class='img-fluid mx-auto d-block pb-4'>
        <hr>
            <p class='text-align-left' style='padding-left: 3%; padding-right: 3%'>
                {$p3}
            </p>
            <div class='mb-2'>
                <!-- BFS inMod -->
                <ins class='adsbygoogle' style='display:block' data-ad-client='ca-pub-5682997250624118'
                    data-ad-slot='1606994519' data-ad-format='auto' data-full-width-responsive='true'></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <img src='{$postImg2}' alt='{$h2Array[0]}' class='img-fluid mx-auto d-block'>
            <hr>
            <div class='center'><h2 class='h4 pb-4 mb-4 mt-4 justify-content-center border-bottom text-align-center'>
                {$h2Array[1]}
            </h2></div>
            <div class='mb-2'>
                <!-- BFS inMod -->
                <ins class='adsbygoogle' style='display:block' data-ad-client='ca-pub-5682997250624118'
                    data-ad-slot='1606994519' data-ad-format='auto' data-full-width-responsive='true'></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <p class='text-align-left' style='padding-left: 3%; padding-right: 3%'>
                {$p4}
            </p>
            <div class='mb-2'>
                <!-- BFS inMod -->
                <ins class='adsbygoogle' style='display:block' data-ad-client='ca-pub-5682997250624118'
                    data-ad-slot='1606994519' data-ad-format='auto' data-full-width-responsive='true'></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <img src='{$postImg3}' alt='{$h2Array[1]}' class='img-fluid mx-auto d-block'>
            <div class='mb-2'>
                <!-- BFS inMod -->
                <ins class='adsbygoogle' style='display:block' data-ad-client='ca-pub-5682997250624118'
                    data-ad-slot='1606994519' data-ad-format='auto' data-full-width-responsive='true'></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <hr>
            <p class='text-align-left' style='padding-left: 3%; padding-right: 3%'>
                {$p5}
            </p>
            <hr>
            <button class='btn btn-primary btn-lg btn-block' style='background-color: #fd8c02; border: 0px;' type='button' data-toggle='collapse' data-target='#extraNav' aria-controls='extraNav' aria-expanded='true' aria-label='Toggle extraNav'>
                <h4 class='display-5' style='margin-right: 10px'>All FS 19 Mods &nbsp;<i class='fas fa-caret-square-down'></i></h4>
            </button>
          <div class='collapse row' id='extraNav'> 
            <div class='col-md-6' style='margin-top: 10px;'>
            <div class='list-group'>
              <a href='/categories/tractors' class='list-group-item list-group-item-action'><i class='fas fa-tractor' style='margin-right: 10px;'></i>FS 19 Tractors</a>
              <a href='/categories/trucks' class='list-group-item list-group-item-action'><i class='fas fa-truck' style='margin-right: 10px;'></i>FS 19 Trucks</a>
              <a href='/categories/maps' class='list-group-item list-group-item-action'><i class='fas fa-road' style='margin-right: 10px;'></i>FS 19 Maps</a>
            </div>
            </div>
              <div class='col-md-6' style='margin-top: 10px;'>
                <div class='list-group'>
                  <a href='/categories/vehicles' class='list-group-item list-group-item-action'><i class='fas fa-car' style='margin-right: 10px;'></i>FS 19 Vehicles</a>
                  <a href='/categories/buildings' class='list-group-item list-group-item-action'><i class='fas fa-building' style='margin-right: 10px;'></i>FS 19 Buildings</a>
                  <a href='/categories/combines' class='list-group-item list-group-item-action'><i class='fas fa-fan' style='margin-right: 10px;'></i>FS 19 Combines</a>
                </div>
                </div>
                </div><!-- /.row -->
        <div class='mb-3 mt-3'>
            <!-- BFS navFooter -->
            <ins class='adsbygoogle' style='display:block;margin: auto;' data-ad-client='ca-pub-5682997250624118'
                data-ad-slot='9784350519' data-ad-format='auto' data-full-width-responsive='true'></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    <?php include '../footer.php'; ?>
    <nav class='navbar navbar-light bg-light'>
      <p>&copy; BestFSMods.com <br> <a href='/privacy-policy'>Privacy Policy</a> | <a href='/terms-and-conditions'>Terms and Conditions</a></p>

      <a href='#'>Back to top</a>
    </nav>
    </main><!-- /.container -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js' integrity='sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV' crossorigin='anonymous'></script>
        </body>
        </html>
";

fwrite($newfile, $HTMLCode);
fclose();

$openSitemap = fopen("../sitemap.xml", "a+") or die("Unable to open file!");

$sitemapDate = date('Y-m-d');

$sitemapCode = "
<url>
  <loc>https://bestfsmods.com/mods/{$uFilename}</loc>
  <lastmod>{$sitemapDate}</lastmod>
  <priority>1.0</priority>
</url>";

fwrite($openSitemap, $sitemapCode);