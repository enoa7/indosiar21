<?php 

	$pageTitle = "HUT Indosiar 21 | Kuis";
	$pageSubject = "Kuis Indosiar 21";
	$pageKeywords = "indosiar, indosiar21, HUT, kuis, tebak program, kontes, Greetings Pemirsa Indosiar 21, Video Bumper, I Like Dangdut";
	$pageDesc = "Kuis tebak program unggulan Indosiar dari masa ke masa dalam rangka HUT Indosiar ke 21";
	$socialShareImg = "http://hut.indosiar.com/asset/images/video/hutindosiar21-banner-pemenangkontes.jpg";
	include("header.php");

?>
	

<?php require('nav.php') ?>

<!-- page content starts with the class page-wrap -->
<div class="page-wrap" id="hut-video">
    <div class="header">
    <?php include('video-menu.php') ?>
    </div>
    <div class="content">
      <?php if ( $detect->isMobile() ) { ?>
                    <div><img class="img-responsive center-block" src="asset/images/hutindosiar21-mainbanner-winner-mobile.jpg" alt="Indosiar 21 LiveStream"></div>
                <?php } else { ?>
                    <div><img class="img-responsive center-block fullwidth" src="asset/images/hutindosiar21-mainbanner-winner.jpg" alt="Indosiar 21 nonton narsis"></div>
                <?php } ?>
    </div>
    <?php require('footer.php') ?>
    <?php require('overlay-menu.php') ?>
</div>
</body>
</html>
