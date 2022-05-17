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
	<meta name="description" content="Modifier les contenus sur les informations sur le rechauffement climatiques dans le monde"/>
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
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index.html">InfoClimat</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

	  <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?php echo site_url('Welcome/listeContenus');?>">Accueil</a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url('Welcome/logOut');?>">Se déconnecter</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End #header -->

  <!-- ======= Hero Section ======= -->
  <!-- #hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
	<section id="about" class="about">
      <div class="container">
		<form action="<?php echo site_url('Welcome/modification');?>" method="get">
			<h2>Modifier le contenu</h2>
		 <?php foreach($contenus as $contenus){?>
			<div class="form-group">
				<input type="hidden" name= "id"class="form-control-file" id="exampleFormControlFile1" value="<?php echo $contenus['id'];?>">
			</div>
			<div class="form-group">
				<label for="exampleFormControlFile1">Photo</label>
				<input type="text" name= "photo"class="form-control-file" id="exampleFormControlFile1" value="<?php echo $contenus['photo'];?>">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Titre</label>
				<input type="text" name="titre" class="form-control" id="exampleFormControlInput1" value="<?php echo $contenus['titre'];?>">
			</div>
			<div class="form-group">
			    <label for="exampleFormControlTextarea1">Resume</label>
				<input type="text" name="resumee" class="form-control" id="exampleFormControlInput1" value="<?php echo $contenus['resumee'];?>">
			</div>
			<div class="form-group">
				<label for="exampleFormControlTextarea1">Contexte</label>
				<input type="text" name="contexte" class="form-control" id="exampleFormControlInput1" value="<?php echo $contenus['contexte'];?>">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Date</label>
				<input type="text" name="datepublication" class="form-control" id="exampleFormControlInput1" value="<?php echo $contenus['datepublication'];?>">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Source</label>
				<input type="text" name="source" class="form-control" id="exampleFormControlInput1" value="<?php echo $contenus['source'];?>">
			</div>
		  <?php } ?>	
			<hr>
			    <button type="submit" class="btn btn-secondary btn-lg">Modifier</button>
			
		</form>
	</div>
	</section>
    <!-- End About Us Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>InfoClimat</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-one-page-bootstrap-template-amoeba/ -->
		Designed by <a href="https://bootstrapmade.com/">Rojas Tsihoarana Giovanni</a>
      </div>
    </div>
  </footer><!-- End #footer -->

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
