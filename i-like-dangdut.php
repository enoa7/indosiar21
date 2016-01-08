<?php
    $pageTitle = 'HUT Indosiar 21 | Kontes I Like Dangdut';
    $pageSubject = 'Kontes I Like Dangdut Kontes';
    $pageKeywords = 'indosiar, indosiar21, HUT, Kontes, I Like Dangdut, Finalis';
    $pageDesc = 'Kontes I Like Dangdut untuk HUT Indosiar 21';
    $socialShareImg = 'http://hut.indosiar.com/asset/images/hutindosiar21.png';
    $pageName = 'ilikedangdut';
    include('header.php');
?>
<?php require('nav.php') ?>
<div class="page-wrap" id="hut-video">
  <div class="header">
    <?php include('video-menu.php') ?>
  </div>
  <div class="content">
    <div class="submenu-content-list active" name="<?php echo $pageName ?>">
      <div class="container-fluid nopadding">
        <?php if($detect->isMobile()) { ?>
          <img class="img-responsive center-block" src="asset/images/video/ilikedangdut-mainbanner-mobile.jpg" alt="banner - ilikedangdut" />
        <?php } else { ?>
          <img class="img-responsive center-block" src="asset/images/video/ilikedangdut-mainbanner.jpg" alt="banner - ilikedangdut" />
        <?php } ?>
      </div>
      <div class="container">
        <h2 class="title">Finalis I Like Dangdut</h2>
        <div class="video-list row spacepad">
          <div class="col-xs-12 col-sm-4">
            <iframe class="vidio-embed" src="http://www.vidio.com/embed/214760/?autoplay=false&player_only=true&" scrolling="no" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="col-xs-12 col-sm-4">
            <iframe class="vidio-embed" src="http://www.vidio.com/embed/216926/?autoplay=false&player_only=true&" scrolling="no" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="col-xs-12 col-sm-4">
            <iframe class="vidio-embed" src="http://www.vidio.com/embed/221249/?autoplay=false&player_only=true&" scrolling="no" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="col-xs-12 col-sm-4">
            <iframe class="vidio-embed" src="http://www.vidio.com/embed/217554/?autoplay=false&player_only=true&" scrolling="no" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="col-xs-12 col-sm-4">
            <iframe class="vidio-embed" src="http://www.vidio.com/embed/214628/?autoplay=false&player_only=true&" scrolling="no" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="col-xs-12 col-sm-4">
            <iframe class="vidio-embed" src="http://www.vidio.com/embed/215614/?autoplay=false&player_only=true&" scrolling="no" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="col-xs-12 col-sm-4">
            <iframe class="vidio-embed" src="http://www.vidio.com/embed/189590/?autoplay=false&player_only=true&" scrolling="no" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="col-xs-12 col-sm-4">
            <iframe class="vidio-embed" src="http://www.vidio.com/embed/217588/?autoplay=false&player_only=true&" scrolling="no" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="col-xs-12 col-sm-4">
            <iframe class="vidio-embed" src="http://www.vidio.com/embed/167227/?autoplay=false&player_only=true&" scrolling="no" frameborder="0" allowfullscreen></iframe>
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