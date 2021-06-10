<!DOCTYPE html>
<html lang="en">
  <head>
    <title>doPonic</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url()?>assets/user/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/user/css/animate.css">
    
    <link rel="stylesheet" href="<?=base_url()?>assets/user/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/user/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/user/css/magnific-popup.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/user/css/aos.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/user/css/ionicons.min.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/user/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/user/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?=base_url()?>assets/user/css/flaticon.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/user/css/icomoon.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/user/css/style.css">
  </head>
  <body class="goto-here">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="#">doPonic</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Mitra</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Katalog</a></li>
	          <li class="nav-item cta cta-colored"><a href="#" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
                <li>
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="hidden-xs"><?=$this->fungsi->user_login() == null ? "Login" : ucfirst($this->fungsi->user_login()->username)?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?=base_url()?>assets/dist/img/user.png" class="img-circle" alt="User Image">

                  <p>
                  <?=$this->fungsi->user_login() == null ? "Login" : ucfirst($this->fungsi->user_login()->username)." - Do Ponic"?> 
                    <small>Asik Bertani</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <?php if($this->fungsi->user_login() == null) { ?>
                        <div class="pull-right">
                        <a href="<?=site_url('auth/login')?>" class="btn btn-default btn-flat">Sign in</a>
                        </div>
                    <?php } else {?>
                        <div class="pull-left">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                            <a href="<?=site_url('auth/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                        </div>
                    <?php } ?>
                </li>
              </ul>
            </li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(<?=base_url()?>assets/user/img/gambar-2.jpg);">
            <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

              <div class="col-md-12 ftco-animate text-center">
                <h1 class="mb-2">Mulai Menanam</h1>
                <h2 class="subheading mb-4">Banyak cara yang dapat digunakan untuk menanam sayur dan buah, bahkan dipekarangan rumah yang minim.</h2>
              </div>

            </div>
          </div>
        </div>

        <div class="slider-item" style="background-image: url(<?=base_url()?>assets/user/img/gambar-2.jpg);">
            <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

              <div class="col-sm-12 ftco-animate text-center">
                <h1 class="mb-2">Tau kah Anda?</h1>
                <h2 class="subheading mb-4">Bahwa sayur dan buah dapat di tanam di lahan minim</h2>
              </div>

            </div>
          </div>
        </div>
      </div>
  </section>

  <hr>

    <div class="content-wrapper">
      <div class="container">
          <?php echo $contents ?>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->

    
    <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> doPonic 
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?=base_url()?>assets/user/js/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/user/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?=base_url()?>assets/user/js/popper.min.js"></script>
  <script src="<?=base_url()?>assets/user/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/user/js/jquery.easing.1.3.js"></script>
  <script src="<?=base_url()?>assets/user/js/jquery.waypoints.min.js"></script>
  <script src="<?=base_url()?>assets/user/js/jquery.stellar.min.js"></script>
  <script src="<?=base_url()?>assets/user/js/owl.carousel.min.js"></script>
  <script src="<?=base_url()?>assets/user/js/jquery.magnific-popup.min.js"></script>
  <script src="<?=base_url()?>assets/user/js/aos.js"></script>
  <script src="<?=base_url()?>assets/user/js/jquery.animateNumber.min.js"></script>
  <script src="<?=base_url()?>assets/user/js/bootstrap-datepicker.js"></script>
  <script src="<?=base_url()?>assets/user/js/scrollax.min.js"></script>
  <script src="<?=base_url()?>assets/user/js/main.js"></script>
    
  </body>
</html>