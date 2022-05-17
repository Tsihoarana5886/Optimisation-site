<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8"/>
<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width"/>
<title>Rechauffement climatique</title>
<!-- CSS Files-->
<link href="<?php echo base_url() ;?>cssBackOffice/assets/img/favicon.png" rel="icon">
<link rel="stylesheet" href="<?php echo base_url();?>cssFrontOffice/stylesheets/style.css">
<link rel="stylesheet" href="<?php echo base_url();?>cssFrontOffice/stylesheets/skins/blue.css">
<!-- skin color -->
<link rel="stylesheet" href="<?php echo base_url();?>cssFrontOffice/stylesheets/responsive.css">
<!-- IE Fix for HTML5 Tags -->
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
<!-- HIDDEN PANEL 
================================================== -->
<!-- HEADER
================================================== -->
<div class="row">
	<div class="headerlogo four columns">
		<div class="logo">
			<a href="#">
			<h4>InfoClimat</h4>
			</a>
		</div>
	</div>			
</div>
<div class="clear">
</div>
<!-- SUBHEADER
================================================== -->
<div id="subheader">
	<div class="row">
		<div class="eight columns">
			<p class="bread leftalign">
				Le réchauffement climatique
			</p>
		</div>
		<div class="four columns">
			<div class="row collapse">
				<p class=" bread leftalign">Le Monde d'aujourd'hui</p>
			</div>
		</div>
		
	</div>
</div>
<div class="hr">
</div>
<!-- CONTENT 
================================================== -->
<div class="row">
	<div class="twelve columns noleftmargin">
	    <!-- MAIN CONTENT -->
		<?php foreach($contenus as $contenus){?>
		<div class="eight columns noleftmargin">
		<h3 style="color:#55a2a6;text-align:center">Détails Contenu</h3>
		<hr>
			<div class="circledate">
				<div class="textcircle">
					<br/><?php echo $contenus['datepublication'];?><br/>
				</div>
			</div>
			<h4 ><?php echo $contenus['titre'];?></h4>
			<div class="dots blogdots">
			</div>
				<p>
						<img src="<?php echo base_url() ;?>cssBackOffice/assets/img/<?php echo $contenus['photo']; ?>" alt="" class="thumb">
					</p>
				</p>
			   <?php echo $contenus['resumee'];?>
			</p>
			<p>
			   <?php echo $contenus['contexte'];?>
			</p>
			<p>
			   <?php echo $contenus['source'];?>
			</p>
			<p>
			   <a href="<?php echo site_url('Welcome/listeFrontOffice');?>" class="saymore">Retour</a>
			</p>
			<div class="hr">
			</div>
		</div>
		<?php } ?>
		<!-- SIDEBAR -->
		<div class="four columns">
			<h6 class="sidebartitle">COMMENTAIRES RÉCENTS</h6>
			<div class="avatar">
				<img src="<?php echo base_url();?>cssFrontOffice/images/author1.png" alt="">
			</div>
			<p>
				Il est clair que le changement climatique a déjà des conséquences pour les droits humains. Et que ces conséquences ne feront que s’aggraver dans les années à venir.
			</p>
			<div class="avatar">
				<img src="<?php echo base_url();?>cssFrontOffice/images/author2.png" alt="">
			</div>
			<p>
				Tous les êtres humains aspirent à la même chose : vivre en sécurité sur notre planète. Ainsi, bien que notre travail doive rester objectif et impartial, nous élevons de plus en plus nos voix et soutenons le message clair que le changement climatique est réel ...
			</p>
			<br class="clear"/>
			<h6 class="sidebartitle">CONSEQUENCES</h6>
			<a href="#" class="tags">Incendie</a>
			<a href="#" class="tags">Sécheresse</a>
			<a href="#" class="tags">Feux de brousse</a>
			<a href="#" class="tags">Canicule</a>
			<a href="#" class="tags">Inondation</a>
			<a href="#" class="tags">Cyclone</a>
			<a href="#" class="tags">Typhon</a>
			<a href="#" class="tags">Tremblemen de terre</a>
			<br class="clear"/>
			<br/><br/>
		</div>
	</div>
</div>
<div class="hr">
</div>

<!-- FOOOTER 
================================================== -->
<div id="footer">
	<footer class="row">
	<p class="back-top floatright">
		<a href="#top"><span></span></a>
	</p>
	<div class="four columns">
	    <h1>À PROPOS DE NOUS</h1>
		Notre objectif est de garder les clients satisfaits!!
	</div>
	<div class="four columns">
	    <h1>Réseau Sociaux</h1>
		<a class="social facebook" href="#"></a>
		<a class="social twitter" href="#"></a>
		<a class="social deviantart" href="#"></a>
		<a class="social flickr" href="#"></a>
		<a class="social dribbble" href="#"></a>
	</div>
	</footer>
</div>
<div class="copyright">
	<div class="row">
		<div class="six columns">
			 &copy;<span class="small"> Copyright 2022 Rojas Tsihoarana Giovanni</span>
		</div>
		<div class="six columns">
			<span class="small floatright"> Template by <a href="#">InfoClimat.net</a></span>
		</div>
	</div>
</div>
<!-- JAVASCRIPTS 
================================================== -->
<!-- Javascript files placed here for faster loading -->
<script src="<?php echo base_url();?>cssFrontOffice/javascripts/foundation.min.js"></script>
<script src="<?php echo base_url();?>cssFrontOffice/javascripts/jquery.cycle.js"></script>
<script src="<?php echo base_url();?>cssFrontOffice/javascripts/app.js"></script>
<script src="<?php echo base_url();?>cssFrontOffice/javascripts/modernizr.foundation.js"></script>
<script src="<?php echo base_url();?>cssFrontOffice/javascripts/slidepanel.js"></script>
<script src="<?php echo base_url();?>cssFrontOffice/javascripts/scrolltotop.js"></script>
<script src="<?php echo base_url();?>cssFrontOffice/javascripts/hoverIntent.js"></script>
<script src="<?php echo base_url();?>cssFrontOffice/javascripts/superfish.js"></script>
<script src="<?php echo base_url();?>cssFrontOffice/javascripts/responsivemenu.js"></script>

</body>
</html>
