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
<meta name="description" content="Actualite sur le rechauffement climatique dans le monde et qui a provoquer ensuite la secheresse,l'inondation"/>
<meta name=" robots" content=" follow"/>
<title>Information et les actualites sur le rechauffement climatique</title>
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
			<h2>InfoClimat</h2>
			</a>
		</div>
	</div>
	<div class="headermenu eight columns noleftmarg">
		<nav id="nav-wrap">
		<ul id="main-menu" class="nav-bar sf-menu">
			<li>
			<a href="<?php echo base_url();?>welcome/connecter">Se Connecter</a>
			</li>
		</ul>
		</nav>
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
		<div class="eight columns noleftmargin">
		  <h3 style="color:#55a2a6;text-align:center">Les Actualités</h3>
		  <hr>
		  <?php foreach($contenus as $contenus){?>
			<div class="six columns">
				<div class="boxblog">
				    <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $contenus['id'];?>">  
					<a href="<?php echo base_url();?>welcome/detailsFrontOffice?id=<?php echo $contenus['id'];?>"><h5><?php echo $contenus['titre'];?></h5></a>
					<p class="small date">
						Date de publication :  <?php echo $contenus['datepublication']; ?><span class="has-tip tip-top" data-width="90" title="6 comments"></span>
					</p>
					<p>
						<img src="<?php echo base_url() ;?>cssBackOffice/assets/img/<?php echo $contenus['photo']; ?>" alt="" class="thumb"><?php echo $contenus['resumee']; ?>
					</p>
					<p>
						<a href="#" class="small continue"><?php echo $contenus['source']; ?></a>
					</p>
				</div>
			</div>
		  <?php } ?>
		  <ul class="pagination">
				<li class="arrow unavailable"><a href="">&laquo;</a></li>
				<li class="current"><a href="<?php echo base_url();?>welcome/listeFrontOffice?numeropage=1">1</a></li>
				<li><a href="<?php echo base_url();?>welcome/listeFrontOffice?numeropage=2">2</a></li>
				<li><a href="<?php echo base_url();?>welcome/listeFrontOffice?numeropage=3">3</a></li>
				<li><a href="<?php echo base_url();?>welcome/listeFrontOffice?numeropage=4">4</a></li>
				<li><a href="<?php echo base_url();?>welcome/listeFrontOffice?numeropage=5">5</a></li>
				<li class="arrow"><a href="">&raquo;</a></li>
			</ul>
		</div>
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
		<h6 style="color:white">À PROPOS DE NOUS</h6>
		Notre objectif est de garder les clients satisfaits!!
	</div>
	<div class="four columns">
		<h6 style="color:white">Réseau Sociaux</h6>
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
