<?php

    $pageTitle = 'HUT Indosiar 21 | Sekolah Kita';
    $pageSubject = 'Kegiatan Sosial';
    $pageKeywords = 'indosiar, indosiar21, HUT, kegiatan sosial, sekolah, kita';
    $pageDesc = 'Salurkan bantuan kamu untuk renovasi sekolah yang ke-5, yaitu sdn Rinca, Nusa Tenggara Timur, melalui rekening BCA 500 555 888 1.';
    $socialShareImg = 'http://hut.indosiar.com/asset/images/hutindosiar21.png';
    include 'header.php';

?>
<?php 
	require('nav.php');
	$saldo = "1.953.997.715"
?>

<div class="page-wrap" id="sosial">
	<div class="segment">
		<div class="main-banner">
			<img class="img-responsive" src="asset/images/sekolah_kita.jpg" alt="sekolah kita indosiar 21">
		</div>
		<div class="container spacepad">
			<div class="intro-text">
				<h1 class="title text-center">Kegiatan Sosial</h1>
				<p class="desc text-center hidden-xs">
					Dalam rangka hut indosiar ke 21, program‎ "Sekolah Kita Indosiar" ‎upaya mewujudkan harapan anak-anak kita murid sdn Pulau Rinca, Desa Pasir Panjang, Kec. Komodo, Kab. Manggarai Barat, Nusa Tenggara Timur akan sebuah sekolah yang nyaman & aman untuk belajar, dengan menggalang dana  Rp 426.953.100,-  untuk renovasi sekolah mereka.  Saat ini dana yang baru terkumpul sebesar  Rp. 219,512,036,- mari salurkan bantuan anda lewat rekening bca, no rek. 500 555 888 1  a/n sekolah kita Indosiar (PT Indosiar Visual Mandiri). Kepedulian kita untuk masa depan mereka.
				</p>
				<p class="desc text-center hidden-xs">
					Program sekolah kita Indosiar akan berakhir 7 hari lagi, tanggal 11 januari 2016 pukul 23:59 WIB
				</p>
				<p class="desc text-center hidden-xs">
					Total dana "Sekolah Kita Indosiar" yang terkumpul sampai 7 Januari 2015, sebesar <span class="highlight">Rp. <?php echo $saldo ?>&nbsp;</span>dan  telah disalurkan untuk 5 sekolah; sdn Tenjolahang 2 Pandeglang proses renovasi sudah 95% saat ini sedang finishing & menunggu meubel, SD Inpres Bengo 2 Gowa sedang proses pondasi dan pembesian, sdn Trimulyo 2 Semarang sedang proses pembongkaran bangunan yang rusak, SMPN 1 Siberut Selatan dan sdn Patemon 12, Probolinggo baru akan memulai proses renovasi.
				</p>
				<p class="desc text-center hidden-xs">
					Terima kasih sebesar-besarnya kepada seluruh pemirsa yang sudah menyumbangkan dana. semoga Tuhan Yang Maha Esa membalas semua bantuan dan kebaikan pemirsa.
				</p>
			</div>
				<div class="saldo col-xs-12">
					<div class="name col-xs-12 col-sm-6">total saldo</div>
					<div class="amount col-xs-12 col-sm-6">Rp. <?php echo $saldo ?></div>
				</div>
			<div class="activity one clearfix">
				<h3 class="title">sdn Tenjolahang 2, Jiput - Pandeglang Banten</h3>
				<div class="video col-xs-12 text-center">
					<div class="">
						<iframe class="vidio-embed" src="http://www.vidio.com/embed/166927-sdn-tenjolahang-2-pandeglang-sekolah-kita?autoplay=false&" scrolling="no" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<?php if ($detect->isMobile() && !$detect->isTablet()) {
    ?>
					<div class="gallery mobile col-xs-12">
						<img class="img-responsive" src="asset/images/activity/sdn-tenjolahang-1.jpg" alt="">
						<img class="img-responsive" src="asset/images/activity/sdn-tenjolahang-2.jpg" alt="">
						<img class="img-responsive" src="asset/images/activity/sdn-tenjolahang-3.jpg" alt="">
            <img class="img-responsive" src="asset/images/activity/sdn-tenjolahang-4.jpg" alt="">
            <img class="img-responsive" src="asset/images/activity/sdn-tenjolahang-5.jpg" alt="">
            <img class="img-responsive" src="asset/images/activity/sdn-tenjolahang-6.jpg" alt="">
            <img class="img-responsive" src="asset/images/activity/sdn-tenjolahang-7.jpg" alt="">
					</div>
				<?php
} else {
    ?>
					<div class="gallery desktop col-xs-12">
            <img class="img-responsive" src="asset/images/activity/sdn-tenjolahang-1.jpg" alt="">
						<img class="img-responsive" src="asset/images/activity/sdn-tenjolahang-2.jpg" alt="">
						<img class="img-responsive" src="asset/images/activity/sdn-tenjolahang-3.jpg" alt="">
            <img class="img-responsive" src="asset/images/activity/sdn-tenjolahang-4.jpg" alt="">
            <img class="img-responsive" src="asset/images/activity/sdn-tenjolahang-5.jpg" alt="">
            <img class="img-responsive" src="asset/images/activity/sdn-tenjolahang-6.jpg" alt="">
            <img class="img-responsive" src="asset/images/activity/sdn-tenjolahang-7.jpg" alt="">
					</div>
				<?php
} ?>
			</div>
			<hr>
			<div class="activity two clearfix">
				<h3 class="title">SD Inpres Bengo 2, Kabupaten Gowa Sulawesi Selatan</h3>
				<div class="video col-xs-12 text-center">
					<div class="">
						<iframe class="vidio-embed" src="http://www.vidio.com/embed/184801-sd-inpres-bengo-2-sulawesi-selatan-sekolah-kita?autoplay=false&" scrolling="no" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<?php if ($detect->isMobile() && !$detect->isTablet()) {
    ?>
					<div class="gallery mobile col-xs-12">
            <img class="img-responsive" src="asset/images/activity/sdn-bengo-gowa-1.jpg" alt="">
            <img class="img-responsive" src="asset/images/activity/sdn-bengo-gowa-2.jpg" alt="">
            <img class="img-responsive" src="asset/images/activity/sdn-bengo-gowa-3.jpg" alt="">
            <img class="img-responsive" src="asset/images/activity/sdn-bengo-gowa-4.jpg" alt="">
            <img class="img-responsive" src="asset/images/activity/sdn-bengo-gowa-5.jpg" alt="">
            <img class="img-responsive" src="asset/images/activity/sdn-bengo-gowa-6.jpg" alt="">
					</div>
				<?php
} else {
    ?>
					<div class="gallery desktop col-xs-12">
            <img class="img-responsive" src="asset/images/activity/sdn-bengo-gowa-1.jpg" alt="">
            <img class="img-responsive" src="asset/images/activity/sdn-bengo-gowa-2.jpg" alt="">
            <img class="img-responsive" src="asset/images/activity/sdn-bengo-gowa-3.jpg" alt="">
            <img class="img-responsive" src="asset/images/activity/sdn-bengo-gowa-4.jpg" alt="">
            <img class="img-responsive" src="asset/images/activity/sdn-bengo-gowa-5.jpg" alt="">
            <img class="img-responsive" src="asset/images/activity/sdn-bengo-gowa-6.jpg" alt="">
					</div>
				<?php
} ?>
			</div>
		</div>
    <hr>
    <div class="activity four clearfix">
      <h3 class="title">SDN Trimulyo 2, Semarang</h3>
      <div class="video col-xs-12 text-center">
        <div class="hide">
          <iframe class="vidio-embed" src="http://www.vidio.com/embed/184801-sd-inpres-bengo-2-sulawesi-selatan-sekolah-kita?autoplay=false&" scrolling="no" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <?php if ($detect->isMobile() && !$detect->isTablet()) { ?>
        <div class="gallery mobile col-xs-12">
        <img class="img-responsive" src="asset/images/activity/sdn-trimulyo-1.jpg" alt="">
        <img class="img-responsive" src="asset/images/activity/sdn-trimulyo-2.jpg" alt="">
        </div>
      <?php } else { ?>
        <div class="gallery desktop col-xs-12">
          <img class="img-responsive" src="asset/images/activity/sdn-trimulyo-1.jpg" alt="">
          <img class="img-responsive" src="asset/images/activity/sdn-trimulyo-2.jpg" alt="">
        </div>
      <?php } ?>
    </div>
        <hr>
    <div class="activity three clearfix">
      <h3 class="title">SD Rinca Manggarai, Nusa Tenggara Timur</h3>
      <div class="video col-xs-12 text-center">
        <div class="hide">
          <iframe class="vidio-embed" src="http://www.vidio.com/embed/184801-sd-inpres-bengo-2-sulawesi-selatan-sekolah-kita?autoplay=false&" scrolling="no" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <?php if ($detect->isMobile() && !$detect->isTablet()) { ?>
        <div class="gallery mobile col-xs-12">
        <img class="img-responsive" src="asset/images/activity/sdn-rinca-1.jpg" alt="">
        <img class="img-responsive" src="asset/images/activity/sdn-rinca-2.jpg" alt="">
        <img class="img-responsive" src="asset/images/activity/sdn-rinca-3.jpg" alt="">
        <img class="img-responsive" src="asset/images/activity/sdn-rinca-4.jpg" alt="">
        <img class="img-responsive" src="asset/images/activity/sdn-rinca-5.jpg" alt="">
        </div>
      <?php } else { ?>
        <div class="gallery desktop col-xs-12">
          <img class="img-responsive" src="asset/images/activity/sdn-rinca-1.jpg" alt="">
          <img class="img-responsive" src="asset/images/activity/sdn-rinca-2.jpg" alt="">
          <img class="img-responsive" src="asset/images/activity/sdn-rinca-3.jpg" alt="">
          <img class="img-responsive" src="asset/images/activity/sdn-rinca-4.jpg" alt="">
          <img class="img-responsive" src="asset/images/activity/sdn-rinca-5.jpg" alt="">
        </div>
      <?php } ?>
    </div>

  </div>
	</div>
	<?php require('footer.php') ?>
	<?php require('overlay-menu.php') ?>
</div>
</body>
</html>
