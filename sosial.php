<?php 

	$pageTitle = "HUT Indosiar 21 | Kuis";
	$pageSubject = "Kegiatan Sosial";
	$pageKeywords = "indosiar, indosiar21, HUT, kegiatan sosial";
	$pageDesc = "Kuis tebak program unggulan Indosiar dari masa ke masa dalam rangka HUT Indosiar ke 21";
	$socialTitle = "Kuis Tebak Program HUT indosiar 21";
	$socialDesc = "Kuis tebak program unggulan Indosiar dari masa ke masa dalam rangka HUT Indosiar ke 21";
	include("header.php");

?>
<?php require('nav.php') ?>

<div class="page-wrap" id="kuis">
	<div class="segment" id="sosial">
		<div class="main-banner">
			<img class="img-responsive" src="asset/images/sekolah_kita.jpg" alt="sekolah kita indosiar 21">
		</div>
		<div class="container spacepad">
			<div class="intro-text">
				<h1 class="title text-center">Kegiatan Sosial</h1>
				<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et sem sit amet magna dignissim semper. Suspendisse imperdiet urna nunc, eu tempor magna consequat eu.</p>
			</div>
			<div class="activity one clearfix">
				<h3 class="title text-left">SDN Tenjolahang 2, Jiput - Pandeglang Banten</h3>
				<div class="video col-xs-12 spacepad">
					<div class="">
						<iframe class="vidio-embed" src="http://www.vidio.com/embed/166927-sdn-tenjolahang-2-pandeglang-sekolah-kita?autoplay=false&" scrolling="no" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="progress col-xs-12">
				  <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
				    65% working progress
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
