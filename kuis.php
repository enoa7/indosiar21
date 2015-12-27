<?php 

	$pageTitle = "HUT Indosiar 21 | Kuis";
	$pageSubject = "Kuis Tebak Program";
	$pageKeywords = "indosiar, indosiar21, HUT, kuis, tebak program";
	$pageDesc = "Kuis tebak program unggulan Indosiar dari masa ke masa dalam rangka HUT Indosiar ke 21";
	$socialShareImg = "http://hut.indosiar.com/asset/images/hutindosiar21.png";
	include("header.php");

?>
	

<?php require('nav.php') ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="page-wrap" id="kuis">
	<div class="segment" id="kuis-list">
		<div class="container-fluid slicky nopadding">
		<h1>
			<?php if ( $detect->isMobile() ) { ?>
				<div class="slick-kuis">
					<img class="img-responsive center-block" src="asset/images/kuis/tebak-program/tebakprogram-12-mobile.jpg" alt="indosiar21 tebak program 12">
				</div>
			<?php } else { ?>
				<div class="slick-kuis">
					<img class="img-responsive center-block" src="asset/images/kuis/tebak-program/tebakprogram-12.jpg" alt="indosiar21 tebak program 12">
				</div>
			<?php } ?>
		</h1>
		</div>
	</div>

	<?php require('footer.php') ?>
	<?php require('overlay-menu.php') ?>
</div>
</body>
</html>
