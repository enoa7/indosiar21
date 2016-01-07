<?php
    $pageTitle = 'HUT Indosiar 21 | Kontes Video Bumper Indosiar 21';
    $pageSubject = 'Kontes Video Bumper Indosiar 21';
    $pageKeywords = 'indosiar, indosiar21, HUT, kontes, Video Bumper, pemenang';
    $pageDesc = 'Kontes Video Bumper Indosiar 21 untuk HUT Indosiar 21';
    $socialShareImg = 'http://hut.indosiar.com/asset/images/hutindosiar21.png';
    include('header.php');
?>
<?php require('nav.php') ?>
<div class="page-wrap" id="hut-video">
  <div class="header">
    <?php include('video-menu.php') ?>
  </div>
    <div class="content">
      <div class="submenu-content-list active" name="greetings">
        <div class="container-fluid nopadding">
        <?php if($detect->isMobile()) { ?>
          <img class="img-responsive center-block" src="asset/images/video/bumper-mainbanner-mobile.jpg" alt="banner - bumper" />
        <?php } else { ?>
          <img class="img-responsive center-block" src="asset/images/video/bumper-mainbanner.jpg" alt="banner - bumper" />
        <?php } ?>
      </div>
        <div class="container">
          <h2 class="title">Pemenang Video Bumper</h2>
          <div class="video-list row spacepad">
            <div class="col-sm-4">
              <iframe class="vidio-embed" src="http://www.vidio.com/embed/225160/?autoplay=false&player_only=true&" scrolling="no" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-4">
              <iframe class="vidio-embed" src="http://www.vidio.com/embed/211134/?autoplay=false&player_only=true&" scrolling="no" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-4">
              <iframe class="vidio-embed" src="http://www.vidio.com/embed/220933/?autoplay=false&player_only=true&" scrolling="no" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-4">
              <iframe class="vidio-embed" src="http://www.vidio.com/embed/220907/?autoplay=false&player_only=true&" scrolling="no" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-4">
              <iframe class="vidio-embed" src="http://www.vidio.com/embed/207603/?autoplay=false&player_only=true&" scrolling="no" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-4">
              <iframe class="vidio-embed" src="http://www.vidio.com/embed/213631/?autoplay=false&player_only=true&" scrolling="no" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-4">
              <iframe class="vidio-embed" src="http://www.vidio.com/embed/211228/?autoplay=false&player_only=true&" scrolling="no" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-4">
              <iframe class="vidio-embed" src="http://www.vidio.com/embed/224365/?autoplay=false&player_only=true&" scrolling="no" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-4">
              <iframe class="vidio-embed" src="http://www.vidio.com/embed/211287/?autoplay=false&player_only=true&" scrolling="no" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-4">
              <iframe class="vidio-embed" src="http://www.vidio.com/embed/217267/?autoplay=false&player_only=true&" scrolling="no" frameborder="0" allowfullscreen></iframe>
            </div>
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
