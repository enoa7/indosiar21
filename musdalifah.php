<?php 

	$pageTitle = "HUT Indosiar 21 | Personality Quiz";
	$pageSubject = "Indosiar Personality Quiz";
	$pageKeywords = "indosiar, indosiar21, HUT, kuis, personality quiz";
	$pageDesc = "Seperti apa tipe PDKT kamu? Yuk ikutan personality quiz http://hut.indosiar.com/ #MenujuIndosiar21";
	$socialShareImg = "http://hut.indosiar.com/asset/images/kuis/personality/musdalifah.jpg?4362984378";
	include("header.php");

?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php require('nav.php') ?>
<div class="container spacepad" id="kuis-result">
    <div class="col-xs-12 text-center">
        <h2 class="title">Kamu mirip ...</h2></div>
    <div class=" animated bounceInRight vertical-align-nofloat">
        <div class="person-img col-xs-12 col-sm-6"><img class=img-responsive src=asset/images/kuis/personality/musdalifah.jpg alt="personality musdalifah"></div>
        <div class="person-desc col-xs-12 col-sm-6">
            <h2>Musdalifah!</h2>
            <p>Wah! Gaya pdkt kamu mirip banget nih sama Musdalifah karena  kamu punya percaya diri yang tinggi. Artinya kamu udah yakin banget bisa dapetin gebetan kamu. Kamu merasa diri kamu menarik dan kamu mampu untuk merebut perhatian gebetan kamu.</p>
            <div class="twitter col-xs-2 text-right pull-right spacepad">
                <a href="https://twitter.com/share" data-text="Wah! gue mirip Musdalifah! Yuk ikutan indosiar personality quiz di " data-url="http://hut.indosiar.com/personality-kuis" class="twitter-share-button" {count} data-size="large">Tweet</a>
            </div>
            <!-- <div class="fb col-xs-2 text-right pull-right spacepad">
                <div class="fb-share-button" data-href="http://hut.indosiar.com/musdalifah" data-layout="button"></div>
            </div> -->
            
         	<div class="col-xs-12 nopadding spacepad">
            <a href="personality-quiz"><button type="button" class="btn btn-primary fullwidth">Coba lagi</button></a></div>
        </div>

    </div>
</div>
<script>
! function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0],
        p = /^http:/.test(d.location) ? 'http' : 'https';
    if (!d.getElementById(id)) {
        js = d.createElement(s);
        js.id = id;
        js.src = p + '://platform.twitter.com/widgets.js';
        fjs.parentNode.insertBefore(js, fjs);
    }
}(document, 'script', 'twitter-wjs');
</script>

<?php require('footer.php') ?>
<?php require('overlay-menu.php') ?>
	</div>
</body>
</html>

