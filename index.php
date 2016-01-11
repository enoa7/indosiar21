<?php
	$pageTitle = "HUT Indosiar 21 | Home";
	$pageSubject = "Konser Raya HUT 21 Indosiar Untuk Indonesia";
	$pageKeywords = "indosiar, indosiar21, HUT, Konser Raya Indosiar untuk Indonesia, kuis indosiar 21, kontes indosiar 21, ulang tahun ke-21";
	$pageDesc = "Menyambut ulang tahun ke-21, Indosiar akan mempersembahkan 'Konser Raya HUT 21 Tahun Indosiar untuk Indonesia' panggung spesial dan penuh kejutan segera di 11 januari 2016.";
	$socialShareImg = "http://hut.indosiar.com/asset/images/hutindosiar21.png";
	include("header.php");
?>


<?php require('nav.php') ?>

<!-- this is the index page -->
<div class="page-wrap" id="homepage">
	<div class="main-banner">
	    <div class="container-fluid nopadding">
			<div class="col-xs-12 pos-relative nopadding">
				<?php if ( $detect->isMobile() ) { ?>
					<div><img class="img-responsive center-block" src="asset/images/hutindosiar21-konserraya-mobile.jpg" alt="Indosiar 21 LiveStream"></div>
				<?php } else { ?>
					<div><img class="img-responsive center-block fullwidth" src="asset/images/hutindosiar21-konserraya.jpg" alt="Indosiar 21 nonton narsis"></div>
				<?php } ?>
			</div>
	    </div>
	</div
>	<div id="livestream">
		<div class="segment">
			<div class="container-fluid">
				<div class="intro-text">
					<h2>Saksikan <i>livestream</i> Indosiar di sini</h2>
					<hr />
				</div>
				<div class="video col-xs-12 spacepad">
					<div class="">
						<iframe class="vidio-embed" src="http://www.vidio.com/live/205-indosiar-tv-stream/embed?autoplay=false" scrolling="no" frameborder="0" allowfullscreen="" id="fitvid273370"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php 
		if ( $detect->isMobile() ) {
			include('template/photo-gallery-mobile.html');
		} else {
			include('template/photo-gallery-desktop.html');
		}
		// include('template/photo-gallery-common.html');
	?> 

	<?php require('footer.php') ?>
	<?php require('overlay-menu.php') ?>
</div>
<!-- made by KG - SCM digital -->
</body>
</html>
