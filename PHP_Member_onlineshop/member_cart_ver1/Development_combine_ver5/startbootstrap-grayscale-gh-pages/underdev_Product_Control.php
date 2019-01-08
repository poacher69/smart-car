<?php 	
session_start();
$smartCarFlag=$_SESSION["smartCarFlag"];
$adminFlag = $_SESSION["adminFlag"];




$ClementIP = "http://192.168.63.6/";
$buySmartLink = "PHP_practice/member_cart_ver1/Development_combine_ver4/index_cart.php"  
 ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product Control</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">

  </head>

  <body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Product Control</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About YVTS_IOTB107</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#projects">Your Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#signup">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
          <h1 class="mx-auto my-0 text-uppercase">YVTS IOTB107</h1>
          <?php 
  			if($adminFlag==1){
        			print "<h3 class=\"mx-auto my-0 text-uppercase\">Welcome Admin!</h3>";
        		}
  		   ?>
          <h5 class="text-white-50 mx-auto mt-2 mb-5">A free, responsive, one page Bootstrap theme created by Start Bootstrap.</h5>
          <p><a href="#about" class="btn btn-primary js-scroll-trigger">Get Started</a><br><br><?php if($adminFlag==1){print "<a href=\"member_admin.php\" class=\"btn btn-primary js-scroll-trigger\">Admin Center</a>";}else{print "<a href=\"member_center.php\" class=\"btn btn-primary js-scroll-trigger\">Member Center</a>";}	 ?></p>
          <!-- http://192.168.58.134/PHP_practice/member_cart_ver1/Development_combine_ver5/member_admin.php -->
          
          <!-- <a href="#about" class="btn btn-primary js-scroll-trigger">Get Started</a> -->
          

        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="about-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
          	<h2 class="text-white mb-4">About YVTS_IOTB107</h2>
            <h5 class="text-white mb-4">Built with Bootstrap 4</h5>
           <p class="text-white-50">We are a team of YVTS(勞動部勞動力發展署桃竹苗分署幼獅職業訓練場)IOTB107 class which fromed by [<a href="">14_Clement</a>,<a href="">19_Jason</a>,<a href="">03_Poacher</a>,<a href="">09_Steve</a>].</p>
          </div>
        </div>
        <img src="img/ipad.png" class="img-fluid" alt="">
      </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects-section bg-light">
      <div class="container">

        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
          <div class="col-xl-8 col-lg-7">
            <img class="img-fluid mb-3 mb-lg-0" src="img/bg-masthead.jpg" alt="">
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="featured-text text-center text-lg-left">
              <h4>SmartCar with OpenCV</h4>
              <p class="text-black-50 mb-0">Layout of car control is coding with PHP,and the vision of SmartCar is made with OpenCV.<br>The OpenCV can help the car turn right and stop when OpenCV detected over 1 object.</p>
            </div>
          </div>
        </div>

        <?php 	
        	if($smartCarFlag==1){
        	
        		print "<div>
        	
    		<CENTER>
    		<iframe align=\"center\" src=\"http://192.168.58.138/newnewcar_control.php\" width=\"100%\" height=\"1000dp\" marginwidth=\"10\" marginheight=\"60\"  scrolling=\"No\" frameborder=\"0\" ></iframe>  
  			</CENTER>    				
        </div>";

        	}else{

        		print "You haven't buy this car. <a href=\"".$ClementIP.$buySmartLink." \">Here to buy.</a>";
        	}

         ?>
        

        <!-- Project One Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
          <div class="col-lg-6">
            <img class="img-fluid" src="img/demo-image-01.jpg" alt="">
          </div>
          <div class="col-lg-6">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                  <h4 class="text-white">Product 2</h4>
                  <p class="mb-0 text-white-50">Coming soon......</p>
                  <hr class="d-none d-lg-block mb-0 ml-0">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
          <div class="col-lg-6">
            <img class="img-fluid" src="img/demo-image-02.jpg" alt="">
          </div>
          <div class="col-lg-6 order-lg-first">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-right">
                  <h4 class="text-white">Product 3</h4>
                  <p class="mb-0 text-white-50">Coming soon......</p>
                  <hr class="d-none d-lg-block mb-0 mr-0">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Signup Section -->
    <section id="signup" class="signup-section">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto text-center">

            <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
            <h2 class="text-white mb-5">Subscribe to receive our new message!</h2>

            <form class="form-inline d-flex">
              <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
              <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
            </form>

          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section bg-black">
      <div class="container">

        <div class="row">

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Address of YVTS</h4>
                <hr class="my-4">
                <div class="small text-black-50">No.851, Xiucai Rd., Yangmei Dist., Taoyuan City</div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Email of Clement</h4>
                <hr class="my-4">
                <div class="small text-black-50">
                  <a href="#">f1713123@gmail.com</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Phone of YVTS</h4>
                <hr class="my-4">
                <div class="small text-black-50">(03) 4855368</div>
              </div>
            </div>
          </div>
        </div>

        <div class="social d-flex justify-content-center">
          <a href="#" class="mx-2">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="mx-2">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://github.com/Clement18Z" class="mx-2">
            <i class="fab fa-github"></i>
          </a>

      </div>
      <!-- <div>
      	 <p class="text-white-50">Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on
              <a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
      </div> -->
    </section>

    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
      <div class="container">
      	<p class="text-white-50">Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on
              <a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
         &copy; 2018 YVTS IOTB 14Clement.
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>

</html>
