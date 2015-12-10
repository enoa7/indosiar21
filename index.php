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
			<div class="col-xs-12 pos-relative">
				<!-- generic banner -->
				<!-- <div>
					<img class="img-responsive center-block" src="asset/images/indosiar21-logo.png">
				</div> -->
				<div><img class="img-responsive center-block" src="asset/images/indosiar21-kontes-generic.jpg" alt="Indosiar 21 kontes"></div>
				<div class="call-to-action">
					<a target="_blank" href="http://www.vidio.com/events/15-indosiar-21"><button type="button" class="btn btn-default btn-danger">Ikuti Kontes!</button></a>
				</div>
			</div>
	    </div>
	</div>

	<div class="segment" id="list-artist">
		
		<div class="container-fluid slicky">
			<div class="slick-artist afgan">
				<div class="overlay-title">Konser HUT Indosiar 21 - 1st Lineup </div>
				<img class="img-responsive center-block" src="asset/images/list-artist/indosiar21-artist-afgan.jpg" alt="">
			</div>
			<div class="slick-artist ayu">
				<div class="overlay-title">Konser HUT Indosiar 21 - 1st Lineup </div>
				<img class="img-responsive center-block" src="asset/images/list-artist/indosiar21-artist-ayutingting.jpg">
			</div>
			<div class="slick-artist evidanang">
				<div class="overlay-title">Konser HUT Indosiar 21 - 1st Lineup </div>
				<img class="img-responsive center-block" src="asset/images/list-artist/indosiar21-artist-evidanang.jpg" alt="">
			</div>
			<div class="slick-artist raditya">
				<div class="overlay-title">Konser HUT Indosiar 21 - 1st Lineup </div>
				<img class="img-responsive center-block" src="asset/images/list-artist/indosiar21-artist-raditya.jpg" alt="">
			</div>
		</div>
	</div>
	<!-- <div class="segment" id="kontes">
		<div class="container-fluid">
			<?php if ( $detect->isMobile() ) { ?>
				<div><img class="img-responsive center-block" src="asset/images/kontes-wefie-title.png" alt=""></div>
			<?php } else { ?>
				<div><img class="img-responsive center-block" src="asset/images/kontes-wefie.jpg" alt=""></div>
			<?php } ?>
		</div>
	</div> -->
	<div id="livestream">
			<div class="segment">
		<div class="container-fluid">
			<div class="intro-text">
				<h2>Watch our livestream here!</h2>
				<hr />
			</div>
			<div class="video col-xs-12 spacepad">
				<div class="">
					<!-- <iframe class="vidio-embed" src="http://www.vidio.com/embed/208881-andik-tiru-cr7-jadi-kakek-kakek-main-bola-di-jalan?autoplay=false" scrolling="no" frameborder="0" allowfullscreen></iframe> -->
					<iframe class="vidio-embed" src="http://www.vidio.com/live/205-indosiar-tv-stream/embed?autoplay=false" scrolling="no" frameborder="0" allowfullscreen="" id="fitvid273370"></iframe>
				</div>
			</div>
		</div>
	</div>
	</div>

	<?php require('footer.php') ?>
	<?php require('overlay-menu.php') ?>
</div>
</body>
</html>
