<?php 
	$pageTitle = "HUT Indosiar 21 | Home";
	$pageSubject = "HUT Indosiar 21";
	$pageKeywords = "indosiar, indosiar21, HUT, Konser Raya Indosiar untuk Indonesia, kuis indosiar 21, kontes indosiar 21, ulang tahun ke-21";
	$pageDesc = "Menyambut ulang tahun ke-21, Indosiar akan mempersembahkan 'Konser Raya HUT 21 Tahun Indosiar untuk Indonesia' panggung spesial dan penuh kejutan segera di 11 januari 2016.";
	$socialTitle = "Konser Raya HUT 21 Indosiar Untuk Indonesia";
	$socialDesc = "Menyambut ulang tahun ke-21, Indosiar akan mempersembahkan 'Konser Raya HUT 21 Tahun Indosiar untuk Indonesia' panggung spesial dan penuh kejutan segera di 11 januari 2016.";
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
			<!-- list artist -->
			<div class="slick-artist cemenxdavid">
				<div class="overlay-title">Konser Raya HUT 21 Indosiar Untuk Indonesia - 2nd Lineup </div>
				<img class="img-responsive center-block" src="asset/images/list-artist/indosiar21-artist-cemenxdavid.jpg" alt="2nd-lineup-cemen dan david">
			</div>
			<div class="slick-artist isyana">
				<div class="overlay-title">Konser Raya HUT 21 Indosiar Untuk Indonesia - 2nd Lineup </div>
				<img class="img-responsive center-block" src="asset/images/list-artist/indosiar21-artist-isyana.jpg" alt="2nd-lineup-isyana">
			</div>
			<div class="slick-artist inul">
				<div class="overlay-title">Konser Raya HUT 21 Indosiar Untuk Indonesia - 2nd Lineup </div>
				<img class="img-responsive center-block" src="asset/images/list-artist/indosiar21-artist-inul.jpg" alt="2nd-lineup-inul">
			</div>
			<!-- <div class="slick-artist sazkia">
				<div class="overlay-title">Konser Raya HUT 21 Indosiar Untuk Indonesia - 2nd Lineup </div>
				<img class="img-responsive center-block" src="asset/images/list-artist/indosiar21-artist-zaskia.jpg" alt="2nd-lineup-zaskia">
			</div> -->
			<div class="slick-artist noah">
				<div class="overlay-title">Konser Raya HUT 21 Indosiar Untuk Indonesia - 2nd Lineup </div>
				<img class="img-responsive center-block" src="asset/images/list-artist/indosiar21-artist-noa.jpg" alt="2nd-lineup-noah">
			</div>
			<div class="slick-artist raditya">
				<div class="overlay-title">Konser Raya HUT 21 Indosiar Untuk Indonesia - 1st Lineup </div>
				<img class="img-responsive center-block" src="asset/images/list-artist/indosiar21-artist-raditya.jpg" alt="1st-lineup-raditya">
			</div>
			<div class="slick-artist evidanang">
				<div class="overlay-title">Konser Raya HUT 21 Indosiar Untuk Indonesia - 1st Lineup </div>
				<img class="img-responsive center-block" src="asset/images/list-artist/indosiar21-artist-evidanang.jpg" alt="1st-lineup-evi & danang">
			</div>
			<div class="slick-artist afgan">
				<div class="overlay-title">Konser Raya HUT 21 Indosiar Untuk Indonesia - 1st Lineup </div>
				<img class="img-responsive center-block" src="asset/images/list-artist/indosiar21-artist-afgan.jpg" alt="1st-lineup-afgan">
			</div>
			<div class="slick-artist ayu">
				<div class="overlay-title">Konser Raya HUT 21 Indosiar Untuk Indonesia - 1st Lineup </div>
				<img class="img-responsive center-block" src="asset/images/list-artist/indosiar21-artist-ayutingting.jpg" alt="1st-lineup-raditya-ayu ting ting">
			</div>
			<div class="slick-artist lesti">
				<div class="overlay-title">Konser Raya HUT 21 Indosiar Untuk Indonesia - 1st Lineup </div>
				<img class="img-responsive center-block" src="asset/images/list-artist/indosiar21-artist-lesti.jpg" alt="1st-lineup-lesti">
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
				<h2>Saksikan livestream Indosiar disini</h2>
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
<!-- made by KG - SCM digital -->
</body>
</html>
Status API Training Shop Blog About Pricing
© 2015 GitHub, Inc. Terms Privacy Security Contact Help