<?php 

	$pageTitle = "HUT Indosiar 21 | Home";
	$pageSubject = "Ulang Tahun Indosiar 21";
	$pageKeywords = "indosiar, indosiar21, HUT, Konser Raya, Indosiar 21 kontes";
	$pageDesc = "Konser Raya HUT 21 Indosiar Untuk Indonesia";
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
				<?php if ( $detect->isMobile() ) { ?>
					<div><img class="img-responsive center-block" src="asset/images/indosiar21-kontes-generic-mobile.jpg" alt="Indosiar 21 kontes"></div>
				<?php } else { ?>
					<div><img class="img-responsive center-block" src="asset/images/indosiar21-kontes-generic.jpg" alt="Indosiar 21 kontes"></div>
				<?php } ?>
				
				<div class="call-to-action">
					<a target="_blank" href="http://www.vidio.com/events/15-indosiar-21"><button type="button" class="btn btn-default btn-danger">Ikuti Kontes!</button></a>
				</div>
			</div>
	    </div>
	</div>

	<div class="segment" id="list-artist">
		
		<div class="container-fluid slicky">
			<div class="slick-artist noah">
				<div class="overlay-title">Konser Raya HUT 21 Indosiar Untuk Indonesia - 2nd Lineup </div>
				<img class="img-responsive center-block" src="asset/images/list-artist/indosiar21-artist-noa.jpg" alt="noah">
			</div>
			<div class="slick-artist raditya">
				<div class="overlay-title">Konser Raya HUT 21 Indosiar Untuk Indonesia - 1st Lineup </div>
				<img class="img-responsive center-block" src="asset/images/list-artist/indosiar21-artist-raditya.jpg" alt="raditya">
			</div>
						<div class="slick-artist evidanang">
				<div class="overlay-title">Konser Raya HUT 21 Indosiar Untuk Indonesia - 1st Lineup </div>
				<img class="img-responsive center-block" src="asset/images/list-artist/indosiar21-artist-evidanang.jpg" alt="evi & danang">
			</div>
			<div class="slick-artist afgan">
				<div class="overlay-title">Konser Raya HUT 21 Indosiar Untuk Indonesia - 1st Lineup </div>
				<img class="img-responsive center-block" src="asset/images/list-artist/indosiar21-artist-afgan.jpg" alt="afgan">
			</div>
			<div class="slick-artist ayu">
				<div class="overlay-title">Konser Raya HUT 21 Indosiar Untuk Indonesia - 1st Lineup </div>
				<img class="img-responsive center-block" src="asset/images/list-artist/indosiar21-artist-ayutingting.jpg" alt="ayu ting ting">
			</div>
			<div class="slick-artist ayu">
				<div class="overlay-title">Konser Raya HUT 21 Indosiar Untuk Indonesia - 1st Lineup </div>
				<img class="img-responsive center-block" src="asset/images/list-artist/indosiar21-artist-teza.jpg" alt="teza">
			</div>
			<div class="slick-artist lesti">
				<div class="overlay-title">Konser Raya HUT 21 Indosiar Untuk Indonesia - 1st Lineup </div>
				<img class="img-responsive center-block" src="asset/images/list-artist/indosiar21-artist-lesti.jpg" alt="lesti">
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
