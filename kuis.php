<?php

	$pageTitle = "HUT Indosiar 19 | Kuis";
	$pageSubject = "Kuis Tebak Program";
	$pageKeywords = "indosiar, indosiar19, HUT, kuis, tebak program";
	$pageDesc = "Kuis tebak program unggulan Indosiar dari masa ke masa dalam rangka HUT Indosiar ke 19";
	$socialShareImg = "http://hut.indosiar.com/asset/images/hutindosiar19.png";
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
					<img class="img-responsive center-block" src="asset/images/kuis/tebak-program/tebakprogram-19-mobile.jpg" alt="indosiar19 tebak program 19">
				</div>
			<?php } else { ?>
				<div class="slick-kuis">
					<img class="img-responsive center-block" src="asset/images/kuis/tebak-program/tebakprogram-19.jpg" alt="indosiar19 tebak program 19">
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
