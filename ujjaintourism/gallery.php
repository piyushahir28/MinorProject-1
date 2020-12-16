<?php

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: index.html');
  }
  if (isset($_GET['home'])) {
    
    header('location: admin.php');
  }
  if (isset($_GET['gallery'])) {
    
    header('location: admin.php#Gallery');
  }
  if (isset($_GET['package'])) {
    
    header('location: admin.php#Packages');
  }
  if (isset($_GET['sharing'])) {
    
    header('location: admin.php#Sharings');
  }
  if (isset($_GET['aboutus'])) {
    
    header('location: admin.php#AboutUs');
  }
  if (isset($_GET['contactus'])) {
    
    header('location: admin.php#ContactUs');
  }
  

?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Ujjain Tourism</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      <!--The given link is for Bootstrap(Version-4.5.2)-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      
      <!--The given link is for Social Media Icons-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />

      
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">


      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

      <!--The given link is for CSS(External)-->
      <style type="text/css" media="screen">
        .row {
          margin: 15px;
        } 
</style>
</head>
<body>
  <nav id="navbar_top" class="navbar navbar-expand-lg bg-white navbar-light fixed-top">
        <a href="#" class="navbar-brand"><img src="images/uj3.png" alt="Ujjain Tourism" width="270px"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#herewecollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="herewecollapse">
          <ul class="nav navbar-nav">
            <?php if (isset($_SESSION['username'])) : ?>
            <li class="nav-item"><a href="admin.php?home='1'" class="nav-link active">Home</a></li>
            <li class="nav-item"><a href="admin.php?gallery='1'" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="admin.php?package='1'" class="nav-link">Packages</a></li>
                <li class="nav-item"><a href="admin.php?sharing='1'" class="nav-link">Sharings</a></li>
                <li class="nav-item"><a href="admin.php?aboutus='1'" class="nav-link">About-Us</a></li>
                <li class="nav-item"><a href="admin.php?contactus='1'" class="nav-link">Contact-Us</a></li>
              </ul>
              <ul class="navbar-nav ml-auto">
                <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user-check"></i><strong><?php echo $_SESSION['username']  ?></strong></a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item"><i class="far fa-id-badge"></i>&nbsp;&nbsp;Profile</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-cog"></i>&nbsp;&nbsp;Setting</a>
                            <a href="admin.php?logout='1'" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Logout</a>
                        </div>
                      <?php endif ?>
                    </div>
              </ul>
        </div>
      </nav>
      <br><br><br><br><br>
  <div class="container">
  <div class="row">
    <a href="images/m1.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m1.png" class="img-fluid rounded">
    </a>
    <a href="images/m2.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4 image-link">
      <img src="images/m2.png" class="img-fluid rounded">
    </a>
    <a href="images/m3.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m3.png" class="img-fluid rounded">
    </a>
  </div>
  <div class="row">
    <a href="images/m4.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m4.png" class="img-fluid rounded">
    </a>
    <a href="images/m5.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m5.png" class="img-fluid rounded">
    </a>
    <a href="images/m6.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m6.png" class="img-fluid rounded">
    </a>
  </div>
  <div class="row">
    <a href="images/m7.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m7.png" class="img-fluid rounded">
    </a>
    <a href="images/m8.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m8.png" class="img-fluid rounded">
    </a>
    <a href="images/m9.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m9.png" class="img-fluid rounded">
    </a>
  </div>
  <div class="row">
    <a href="images/m10.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m10.png" class="img-fluid rounded">
    </a>
    <a href="images/m11.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m11.png" class="img-fluid rounded">
    </a>
    <a href="images/m12.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m12.png" class="img-fluid rounded">
    </a>
  </div>
  <div class="row">
    <a href="images/m13.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m13.png" class="img-fluid rounded">
    </a>
    <a href="images/m14.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m14.png" class="img-fluid rounded">
    </a>
    <a href="images/m15.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m15.png" class="img-fluid rounded">
    </a>
  </div>
  <div class="row">
    <a href="images/m16.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m16.png" class="img-fluid rounded">
    </a>
    <a href="images/m17.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m17.png" class="img-fluid rounded">
    </a>
    <a href="images/m18.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m18.png" class="img-fluid rounded">
    </a>
  </div>
  <div class="row">
    <a href="images/m19.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m19.png" class="img-fluid rounded">
    </a>
    <a href="images/m20.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m20.png" class="img-fluid rounded">
    </a>
    <a href="images/m21.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m21.png" class="img-fluid rounded">
    </a>
  </div>
  <div class="row">
    <a href="images/m22.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m22.png" class="img-fluid rounded">
    </a>
    <a href="images/m23.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m23.png" class="img-fluid rounded">
    </a>
    <a href="images/m24.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m24.png" class="img-fluid rounded">
    </a>
  </div>
  <div class="row">
    <a href="images/m25.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m25.png" class="img-fluid rounded">
    </a>
    <a href="images/m26.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m26.png" class="img-fluid rounded">
    </a>
    <a href="images/m27.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m27.png" class="img-fluid rounded">
    </a>
  </div>
  <div class="row">
    <a href="images/m28.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m28.png" class="img-fluid rounded">
    </a>
    <a href="images/m29.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m29.png" class="img-fluid rounded">
    </a>
    <a href="images/m30.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m30.png" class="img-fluid rounded">
    </a>
  </div>
  <div class="row">
    <a href="images/m31.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m31.png" class="img-fluid rounded">
    </a>
    <a href="images/m32.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m32.png" class="img-fluid rounded">
    </a>
    <a href="images/m33.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m33.png" class="img-fluid rounded">
    </a>
  </div>
  <div class="row">
    <a href="images/m34.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m34.png" class="img-fluid rounded">
    </a>
    <a href="images/m35.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m35.png" class="img-fluid rounded">
    </a>
    <a href="images/m36.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m36.png" class="img-fluid rounded">
    </a>
  </div>
  <div class="row">
    <a href="images/m37.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m37.png" class="img-fluid rounded">
    </a>
    <a href="images/m38.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m38.png" class="img-fluid rounded">
    </a>
    <a href="images/m39.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m39.png" class="img-fluid rounded">
    </a>
  </div>
  <div class="row">
    <a href="images/m40.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m40.png" class="img-fluid rounded">
    </a>
    <a href="images/m41.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m41.png" class="img-fluid rounded">
    </a>
    <a href="images/m42.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m42.png" class="img-fluid rounded">
    </a>
  </div>
  <div class="row">
    <a href="images/m43.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m43.png" class="img-fluid rounded">
    </a>
    <a href="images/m44.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m44.png" class="img-fluid rounded">
    </a>
    <a href="images/m45.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m45.png" class="img-fluid rounded">
    </a>
  </div>
  <div class="row">
    <a href="images/m46.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m46.png" class="img-fluid rounded">
    </a>
    <a href="images/m47.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m47.png" class="img-fluid rounded">
    </a>
    <a href="images/m48.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m48.png" class="img-fluid rounded">
    </a>
  </div>
  <div class="row">
    <a href="images/m49.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m49.png" class="img-fluid rounded">
    </a>
    <a href="images/m50.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m50.png" class="img-fluid rounded">
    </a>
    <a href="images/m61.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m61.png" class="img-fluid rounded">
    </a>
  </div>
  <div class="row">
    <a href="images/m62.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m62.png" class="img-fluid rounded">
    </a>
    <a href="images/m63.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m63.png" class="img-fluid rounded">
    </a>
    <a href="images/m64.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m64.png" class="img-fluid rounded">
    </a>
  </div>
  <div class="row">
    <a href="images/m65.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m65.png" class="img-fluid rounded">
    </a>
    <a href="images/m66.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m66.png" class="img-fluid rounded">
    </a>
    <a href="images/m67.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="images/m67.png" class="img-fluid rounded">
    </a>
  </div>
</div>
<footer  style="background-color: #333A40; bottom: 0; width: 100%; margin-top: 0px;">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 text-center text-md-left ">
                    
                    <div class="py-0">
                        <h3 class="my-4 text-white">About<span class="mx-2">Ujjain Tourism</span></h3>

                        <p class="footer-links font-weight-bold">
                            <a class="text-white" href="admin.php?home='1'">Home</a>
                            |
                            <a class="text-white" href="admin.php?package='1'">Packages</a>
                            |
                            <a class="text-white" href="admin.php?aboutus='1'">About</a>
                            |
                            <a class="text-white" href="admin.php?contactus='1'">Contact</a>
                        </p>
                        <p class="text-light py-4 mb-4">&copy;2020 Ujjain Tourism All Rights Reserved.</p>
                    </div>
                </div>
                
                <div class="col-md-4 text-white text-center text-md-left ">
                    <div class="py-2 my-4">
                        <div>
                            <p class="text-white"> <i class="fa fa-map-marker mx-2 "></i>
                                    MIT Ujjain,
                                   Behind Air Strip, Karcha Road,
                                  Ujjain, Madhya Pradesh - 456664</p>
                        </div>

                        <div> 
                            <p><i class="fa fa-phone  mx-2 "></i> +91 82258-63117</p>
                        </div>
                        <div>
                            <p><i class="fas fa-envelope  mx-2"></i><a href="mailto:support@ujjaintourism.com">support@ujjaintourism.com</a></p>
                        </div>  
                    </div>  
                </div>
                
                <div class="col-md-4 text-white my-4 text-center text-md-left ">
                    <span class=" font-weight-bold ">About Ujjain Tourism</span>
          <p class=" my-2" >We are here to help you in exploring the ancient city UJJAIN. Together we enjoy it. Have a Happy and Safe Journey.</p>
                    <div class="py-2">
                        <a href="#"><i class="fab fa-facebook fa-2x text-primary mx-3"></i></a>
                        <a href="#"><i class="fab fa-google-plus fa-2x text-danger mx-3"></i></a>
                        <a href="#"><i class="fab fa-twitter fa-2x text-info mx-3"></i></a>
                        <a href="#"><i class="fab fa-youtube fa-2x text-danger mx-3"></i></a>
                        <a href="#" title="To Top">
              <span class="fa fa-angle-double-up"></span></a>
                    </div>
                </div>
            </div>  
        </div>
     </footer>
<script>
  
  $(document).on("click", '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});
</script>  
</body>
</html>