<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gerer les informations sur le rechauffement climatique</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="description" content="Gerer les contenus sur le rechauffement climatique dans le monde"/>
  <meta name=" robots" content=" follow"/>
  <!-- Favicons -->
  <link href="<?php echo base_url() ;?>cssBackOffice/assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url() ;?>cssBackOffice/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url() ;?>cssBackOffice/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ;?>cssBackOffice/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url() ;?>cssBackOffice/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ;?>cssBackOffice/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url() ;?>cssBackOffice/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Amoeba - v4.7.0
  * Template URL: https://bootstrapmade.com/free-one-page-bootstrap-template-amoeba/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
   
  </header><!-- End #header -->

  <!-- ======= Hero Section ======= -->
  <!-- #hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
	<!-- Section: Design Block -->
	<section class="">
	<!-- Jumbotron -->
	<div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
		<div class="container">
		<div class="row gx-lg-5 align-items-center">
			<div class="col-lg-6 mb-5 mb-lg-0">
			<h1 class="my-5 display-3 fw-bold ls-tight">
				Se connecter <br />
				<span class="text-primary">en tant qu'administrateur</span>
			</h1>
			<p style="color: hsl(217, 10%, 50.8%)">
			"Les jeunes nous appellent à protéger notre planète et à garantir la vie humaine, les citoyens nous le demandent et la nature nous implore de prendre soin d'elle pour qu'elle puisse prendre soin de nous."
			</p>
			</div>

			<div class="col-lg-6 mb-5 mb-lg-0">
			<div class="card">
				<div class="card-body py-5 px-md-5">
				<form action="<?php echo site_url('Welcome/connexionAdmin');?>" method="post">
					<!-- 2 column grid layout with text inputs for the first and last names -->

					<!-- Email input -->
					<div class="form-outline mb-4">
					<label class="form-label" for="form3Example3">Login :</label>
					<input type="email" id="login" name="login" class="form-control" placeholder="tsiho@gmail.com"/>
					
					</div>

					<!-- Password input -->
					<div class="form-outline mb-4">
					<label class="form-label" for="form3Example4">Mot de passe :</label>
					<input type="password" id="mdp" name="mdp" class="form-control" placeholder="1234"/>
					
					</div>

					<p>
					<?php if(isset($error_message)){?>
							<p style="color:Red"><?php echo $error_message; ?></p>
					<?php  } ?>
					</p>
					<!-- Checkbox -->
					<div class="form-check d-flex justify-content-center mb-4">
					<input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
					<label class="form-check-label" for="form2Example33">
					    Se souviens de moi  
					</label>
					</div>

					<!-- Submit button -->
					<button type="submit" class="btn btn-primary btn-block mb-4">
					Connecter
					</button>

					<!-- Register buttons -->
				</form>
				</div>
			</div>
			</div>
		</div>
		</div>
	</div>
	<!-- Jumbotron -->
	</section>
<!-- Section: Design Block -->
    <!-- End About Us Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- End #footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url() ;?>cssBackOffice/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ;?>cssBackOffice/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url() ;?>cssBackOffice/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url() ;?>cssBackOffice/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url() ;?>cssBackOffice/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url() ;?>cssBackOffice/assets/js/main.js"></script>


</body>

</html>
