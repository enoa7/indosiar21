<?php

	$string = "ayu-ting-ting-feat-judika-geboy-mujair-sampai-kau-jadi-milikku-konser-raya-21";
	$hometitle = str_replace("-", " ", $string);
	$hometitle = ucfirst($hometitle);
	$pageTitle = "HUT Indosiar 21 | VoD - " . $hometitle . "";
	$pageSubject = "Konser Raya HUT 21 Indosiar Untuk Indonesia";
	$pageKeywords = "hut indosiar 21, video on demand";
	$pageDesc = $hometitle;
	$socialShareImg = "http://hut.indosiar.com/asset/images/vod/vod-thumb-40.png";
	require('../segment-header.php')
?>


<?php require('../segment-nav.php') ?>

<!-- this is the index page -->
<div class="page-wrap vod" id="<?php echo $string; ?>">
	<div class="content">
		<div class="container">
			<h2 class="title text-center"><?php echo $hometitle; ?></h2>
			<div class="video col-xs-12 spacepad">
				<iframe class="vidio-embed" src="http://www.vidio.com/embed/244597-ayu-ting-ting-feat-judika-geboy-mujair-sampai-kau-jadi-milikku-konser-raya-21?autoplay=false&amp;player_only=true&amp;" scrolling="no" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>	
	</div>	
	<?php require('../segment-footer.php') ?>
	<?php require('../segment-overlaymenu.php') ?>
</div>
</body>
</html>
