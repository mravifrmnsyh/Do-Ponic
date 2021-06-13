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
    <link rel="stylesheet" href="<?=base_url()?>assets/user/css/ui.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/user/css/ionicons.min.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/user/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/user/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?=base_url()?>assets/user/css/flaticon.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/user/css/icomoon.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/user/css/style.css">
    <link rel="stylesheet" href="https://cedeen.netlify.app/font-awesome-5-pro/css/all.min.css" />
    
    
  </head>
  <body class="goto-here">
  <nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
<div class="container">
    <ul class="navbar-nav d-none d-md-flex mr-auto">
    </ul>
    <ul class="navbar-nav ">
		<li  class="nav-item"><a href="#" class="nav-link"> Blog </a></li>
		<li  class="nav-item"><a href="#" class="nav-link"> Mitra </a></li>
		<li  class="nav-item"><a href="#" class="nav-link"> Katalog </a></li>  
		<li  class="nav-item"><a href="#" class="nav-link"> Kontak </a></li>    
		<li  class="nav-item"><a href="#" class="nav-link"> Indonesian </a></li>
	</ul> <!-- list-inline //  -->
  </div> <!-- navbar-collapse .// -->
</div> <!-- container //  -->
</nav> <!-- header-top-light.// -->

<section class="header-main border-bottom">
	<div class="container">
<div class="row align-items-center">
	<div class="col-lg-2 col-6">
		<a href="<?=base_url()?>" class="navbar-brand">do Ponic
		</a> <!-- brand-wrap.// -->
	</div>
	<div class="col-lg-10 col-sm-6 col-12">
		<div class="widgets-wrap float-md-right">
			<div class="widget-header  mr-3">
				<a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
				<span class="badge badge-pill badge-danger notify">0</span>
			</div>
			<div class="widget-header icontext">
				<a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
				<div class="text">
					<span class="text-muted">Selamat Datang!</span>
					<div> 
            <?php if($this->fungsi->user_login() == null) { ?>
              <a href="<?=site_url('auth/login')?>">Masuk</a> |  
              <a href="#"> Daftar</a>
            <?php }else{ ?>
              <a href="#"><?=ucfirst($this->fungsi->user_login()->username)?></a> | 
              <a href="<?=site_url('auth/logout')?>"> Keluar</a>
            <?php }?>
					</div>
				</div>
			</div>
		</div> <!-- widgets-wrap.// -->
	</div> <!-- col.// -->
</div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->

<section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(<?=base_url()?>assets/user/img/gambar-6.jpg);">
            <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

              <div class="col-md-12 ftco-animate text-center">
                <h1 class="mb-2">Semua Orang dapat Menanam</h1>
                <h2 class="subheading mb-4">Anda dapat memulai di lahan minim pekarangan rumah</h2>
              </div>

            </div>
          </div>
        </div>

        <div class="slider-item" style="background-image: url(<?=base_url()?>assets/user/img/gambar-5.jpg);">
            <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

              <div class="col-sm-12 ftco-animate text-center">
                <h1 class="mb-2">Hasilkan Produk Pertanian</h1>
                <h2 class="subheading mb-4">Sayur dan buah dapat dihasilkan di lahan minim</h2>
              </div>

              </div>
          </div>
        </div>

              <div class="slider-item" style="background-image: url(<?=base_url()?>assets/user/img/gambar-2.jpg);">
            <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

              <div class="col-sm-12 ftco-animate text-center">
                <h1 class="mb-2">Anda dapat Menjual di do Ponic</h1>
                <h2 class="subheading mb-4">Kami dapat membantu menjual produk Anda</h2>

                </div>
          </div>
        </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
    


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