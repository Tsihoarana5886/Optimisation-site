<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rechauffement climatique</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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

        <div class="section-title">
          <h2>Les Contenus</h2>
        </div>
		<?php foreach($contenus as $contenus){?>
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="<?php echo base_url() ;?>cssBackOffice/assets/img/<?php echo $contenus['photo']; ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
		       <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $contenus['id'];?>">   
           <a href="contenusDetails?id=<?php echo $contenus['id'];?>"> <h3><?php echo $contenus['titre'];?></h3></a>
           <p class="fst-italic">Date de publication :
			  <?php echo $contenus['datepublication']; ?>
            </p>
            <p>
			  <?php echo $contenus['resumee']; ?>   	
            </p>
			<p>Source :
				<ul>
				<li><i class="bi bi-check2-circle"></i><?php echo $contenus['source']; ?></li>
				</ul>
		    </p>
			<a href="detailsBackOffice?id=<?php echo $contenus['id'];?>" class="btn-get-started scrollto">Voir details</a> | 
			<a href="<?php echo site_url('Welcome/ajouter');?>" class="btn-get-started scrollto">Ajouter</a> |
			<a href="supprimerContenus?id=<?php echo $contenus['id'];?>" class="btn-get-started scrollto">Supprimer</a> |
			<a href="modifierContenus?id=<?php echo $contenus['id'];?>" class="btn-get-started scrollto">Modifier</a> |
          </div>
		  <hr>
        </div>
		<?php } ?>
		<p style="margin-top:40px;margin-left:200px">
			<a href="listeContenus?numeropage=1" class="btn-get-started scrollto"><< 1 - </a>
			<a href="listeContenus?numeropage=2" class="btn-get-started scrollto"> 2 - </a>
			<a href="listeContenus?numeropage=3" class="btn-get-started scrollto"> 3 - >></a>
		</p>
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
