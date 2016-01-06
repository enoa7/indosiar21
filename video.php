<?php

    $pageTitle = 'HUT Indosiar 19 | Video';
    $pageSubject = 'Kuis Tebak Program';
    $pageKeywords = 'indosiar, indosiar19, HUT, kuis, tebak program';
    $pageDesc = 'Kuis tebak program unggulan Indosiar dari masa ke masa dalam rangka HUT Indosiar ke 19';
    $socialShareImg = 'http://hut.indosiar.com/asset/images/hutindosiar19.png';
    include 'header.php';

?>


<?php require('nav.php') ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="page-wrap" id="hut-video">
    <div class="header">
      <div class="container-fluid">
        <ul class="submenu nodots nopadding nomarginbottom">
          <li class="col-xs-12 col-sm-4 active" data-name="ilikedangdut">
            <div class="vertical-align-nofloat">
              <span class="col-xs-4 nopadding"><img class="img-circle img-responsive center-block" src="asset/images/video/ilikedangdut.jpg" alt="I like Dangdut" /></span>
              <span class="col-xs-6 nopadding">I Like Dangdut</span>
            </div>
          </li>
          <li class="col-xs-12 col-sm-4" data-name="greetingsindosiar">
            <div class="vertical-align-nofloat">
              <span class="col-xs-4 nopadding"><img class="img-circle img-responsive center-block" src="asset/images/video/kontes-greeting.jpg" alt="Kontes Greetings" /></span>
              <span class="col-xs-6 nopadding">Greetings Indosiar 21</span>
            </div>
          </li>
          <li class="col-xs-12 col-sm-4" data-name="videobumper">
            <div class="vertical-align-nofloat">
              <span class="col-xs-4 nopadding"><img class="img-circle img-responsive center-block" src="asset/images/video/bumper.jpg" alt="Bumper" /></span>
              <span class="col-xs-6 nopadding">Video bumper indosiar</span>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <?php include('template/video-content.php') ?>
		</div>

		<?php require('footer.php') ?>
	<?php require('overlay-menu.php') ?>
</div>
</body>
</html>
