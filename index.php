<?php 

	$pageTitle = "HUT Indosiar 21 | Home";
	$pageSubject = "Ulang Tahun Indosiar 21";
	$pageKeywords = "indosiar, indosiar21, HUT";
	include("header.php");

?>
	

<?php require('nav.php') ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="page-wrap" id="homepage">
	<div class="main-banner">
	    <div class="container-fluid">
			<div class="col-xs-12">
				<div>
					<img class="img-responsive center-block" src="asset/images/indosiar21-logo.png">
				</div>
			</div>
	    </div>
	</div>

	<div class="segment" id="list-artist">
		<div class="container-fluid">
			<div><img class="img-responsive center-block" src="asset/images/indosiar21-artist-isyana2.jpg"></div>
			<div><img class="img-responsive center-block" src="asset/images/indosiar21-artist-noa.jpg" alt=""></div>
			<div><img class="img-responsive center-block" src="asset/images/indosiar21-artist-slank.jpg" alt=""></div>
		</div>
	</div>
	<div class="segment" id="kontes">
		<div class="container-fluid">
			<?php if ( $detect->isMobile() ) { ?>
				<div><img class="img-responsive center-block" src="asset/images/kontes-wefie-title.png" alt=""></div>
			<?php } else { ?>
				<div><img class="img-responsive center-block" src="asset/images/kontes-wefie.jpg" alt=""></div>
			<?php } ?>
		</div>
	</div>
	<div class="segment" id="livestream">
		<div class="container-fluid">
			<div class="intro-text"><h2>Watch our livestream here!</div>
				<div class="video col-xs-12">
					<div class="">
						<iframe class="vidio-embed" src="http://www.vidio.com/embed/208881-andik-tiru-cr7-jadi-kakek-kakek-main-bola-di-jalan?autoplay=false" scrolling="no" frameborder="0" height="380" allowfullscreen></iframe>
					</div>
				</div>
		</div>
	</div>
	
	<?php require('footer.php') ?>
	<?php require('overlay-menu.php') ?>
	</div>
</div>
</html>
