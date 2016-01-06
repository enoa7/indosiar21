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
<div class="page-wrap" id="hut-video">
    <div class="header">
      <div class="container-fluid">
        <ul class="submenu nodots nopadding nomarginbottom">
          <li class="col-xs-12 col-sm-4" data-name="ilikedangdut">
            <div class="">
              <span><img class="img-circle img-responsive" src="asset/images/video/ilikedangdut.jpg" alt="I like Dangdut" /></span>
              <span>I Like Dangdut</span>
            </div>
          </li>
          <li class="col-xs-12 col-sm-4" data-name="greetingsindosiar">
            <div class="">
              <span><img class="img-circle img-responsive" src="asset/images/video/kontes-greeting.jpg" alt="Kontes Greetings" /></span>
              <span>Greetings Indosiar 21</span>
            </div>
          </li>
          <li class="col-xs-12 col-sm-4" data-name="videobumper">
            <div class="">
              <span><img class="img-circle img-responsive" src="asset/images/video/bumper.jpg" alt="Bumper" /></span>
              <span>Video bumper indosiar</span>
            </div>
          </li>
        </ul>
      </div>
    </div>
		<div class="content submenu-content">
			<div class="submenu-content-list" name="ilikedangdut">
				<img class="img-responsive center-block" src="asset/images/video/ilikedangdut-mainbanner.jpg" alt="" />
				<div class="container">

				</div>
			</div>
			<div class="submenu-content-list" name="greetingsindosiar">
				<img class="img-responsive center-block" src="asset/images/video/kontes-greeting-mainbanner.jpg" alt="" />

			</div>
			<div class="submenu-content-list" name="videobumper">
				<img class="img-responsive center-block" src="asset/images/video/bumper-mainbanner.jpg" alt="" />
			</div>
		</div>
	<?php require('footer.php') ?>
	<?php require('overlay-menu.php') ?>
</div>
</body>
</html>
