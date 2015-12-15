<?php 

	$pageTitle = "HUT Indosiar 21 | Kuis";
	$pageSubject = "Kuis Tebak Program";
	$pageKeywords = "indosiar, indosiar21, HUT, kuis, tebak program";
	include("header.php");

?>
	

<?php require('nav.php') ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="page-wrap" id="kuis">
	<div class="segment" id="kuis-list">
		<div class="container-fluid slicky nopadding">
			<?php if ( $detect->isMobile() ) { ?>
				<div class="slick-kuis one">
					<img class="img-responsive center-block" src="asset/images/kuis/tebak-program/tebakprogram-mobile-1.jpg" alt="">
				</div>
				<!-- <div class="slick-kuis two">
					<img class="img-responsive center-block" src="asset/images/kuis/tebak-program/tebakprogram-mobile-2.jpg" alt="">
				</div> -->
				<!-- <div class="slick-kuis three">
					<img class="img-responsive center-block" src="asset/images/kuis/tebak-program/tebakprogram-mobile-3.jpg" alt="">
				</div>
				<div class="slick-kuis four">
					<img class="img-responsive center-block" src="asset/images/kuis/tebak-program/tebakprogram-mobile-4.jpg" alt="">
				</div>-->
				<!-- <div class="slick-kuis five">
					<img class="img-responsive center-block" src="asset/images/kuis/tebak-program/tebakprogram-mobile-5.jpg" alt="">
				</div>  -->
			<?php } else { ?>
				<div class="slick-kuis one">
					<img class="img-responsive center-block" src="asset/images/kuis/tebak-program/tebakprogram-1.jpg" alt="">
				</div>
				<!-- <div class="slick-kuis two">
					<img class="img-responsive center-block" src="asset/images/kuis/tebak-program/tebakprogram-2.jpg" alt="">
				</div> -->
				
				<!-- <div class="slick-kuis three">
					<img class="img-responsive center-block" src="asset/images/kuis/tebak-program/tebakprogram-3.jpg" alt="">
				</div>
				<div class="slick-kuis four">
					<img class="img-responsive center-block" src="asset/images/kuis/tebak-program/tebakprogram-4.jpg" alt="">
				</div>-->
				<!-- <div class="slick-kuis five">
					<img class="img-responsive center-block" src="asset/images/kuis/tebak-program/tebakprogram-5.jpg" alt="">
				</div>  -->
			<?php } ?>
		</div>
	</div>

	<?php require('footer.php') ?>
	<?php require('overlay-menu.php') ?>
</div>
</body>
</html>
