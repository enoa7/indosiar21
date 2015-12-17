<?php 

	$pageTitle = "HUT Indosiar 21 | Sekolah Kita";
	$pageSubject = "Kegiatan Sosial";
	$pageKeywords = "indosiar, indosiar21, HUT, kegiatan sosial, sekolah, kita";
	$pageDesc = "Salurkan bantuan kamu untuk renovasi sekolah yang ke-5, yaitu SDN Patemon 12, Probolinggo, melalui rekening BCA 500 555 888 1.";
	$socialTitle = "Sekolah Kita Indosiar";
	$socialDesc = "Salurkan bantuan kamu untuk renovasi sekolah yang ke-5, yaitu SDN Patemon 12, Probolinggo, melalui rekening BCA 500 555 888 1.";
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
				<p class="desc text-center hidden-xs">Hingga 16 Desember 2015, Sekolah Kita Indosiar telah berhasil mengumpulkan dana sebesar Rp 1.271.659.578.  Dana tersebut akan digunakan untuk renovasi empat sekolah, yaitu SDN Tenjolahang 2 Banten, SD Inpres Bengo 2 Gowa, SDN Trimulyo 2 Semarang, dan SMPN 1 Siberut Selatan. Renovasi Sekolah Kita Indosiar saat ini telah dilakukan di dua sekolah, yaitu SDN Tenjolahang 2 Banten dan SD Inpres Bengo 2 Gowa. Perbaikan di SDN Tenjolahang 2, Banten, sudah sampai pada tahap akhir yaitu pemasangan atap dan keramik. Sementara itu, untuk SD Inpres Bengo 2 masih dalam proses penggalian pondasi untuk tiga ruang kelas.</p>
				<p class="text-center mobile-text">
					Salurkan terus bantuan kamu untuk renovasi sekolah yang ke-5, yaitu SDN Patemon 12, Probolinggo, melalui rekening BCA 500-555-888-1.
				</p>
			</div>
				<div class="saldo col-xs-12">
					<div class="name col-xs-12 col-sm-6">total saldo</div>
					<div class="amount col-xs-12 col-sm-6">Rp 1.285.352.078,-</div>
				</div>
			<div class="activity one clearfix">
				<h3 class="title">SDN Tenjolahang 2, Jiput - Pandeglang Banten</h3>
				<div class="video col-xs-12 text-center">
					<div class="">
						<iframe class="vidio-embed" src="http://www.vidio.com/embed/166927-sdn-tenjolahang-2-pandeglang-sekolah-kita?autoplay=false&" scrolling="no" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<!-- <div class="progress col-xs-12 nopadding hidden-xs">
				  <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
				    <span class="">65% progress</span>
				  </div>
				</div> -->
				<?php if( $detect->isMobile() && !$detect->isTablet() ){ ?>
					<div class="gallery mobile col-xs-12">
						<img class="img-responsive" src="asset/images/activity/sdn-tenjolahang-1.jpg" alt="">
						<img class="img-responsive" src="asset/images/activity/sdn-tenjolahang-2.jpg" alt="">
						<img class="img-responsive" src="asset/images/activity/sdn-tenjolahang-3.jpg" alt="">
					</div>
				<?php } else { ?>
					<div class="gallery desktop col-xs-12">
						<img class="img-responsive" src="asset/images/activity/sdn-tenjolahang-1.jpg" alt="">
						<img class="img-responsive" src="asset/images/activity/sdn-tenjolahang-2.jpg" alt="">
						<img class="img-responsive" src="asset/images/activity/sdn-tenjolahang-3.jpg" alt="">
					</div>
				<?php } ?>

			</div>
			<hr>
			<div class="activity two clearfix">
				<h3 class="title">SD Inpres Bengo 2, Kabupaten Gowa Sulawesi Selatan</h3>
				<div class="video col-xs-12 text-center">
					<div class="">
						<iframe class="vidio-embed" src="http://www.vidio.com/embed/184801-sd-inpres-bengo-2-sulawesi-selatan-sekolah-kita?autoplay=false&" scrolling="no" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<!-- <div class="progress col-xs-12 nopadding hidden-xs">
				  <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 15%;">
				    <span class="">10% progress</span>
				  </div>
				</div> -->
				<?php if( $detect->isMobile() && !$detect->isTablet() ){ ?>
					<div class="gallery mobile col-xs-12">
					<img class="img-responsive" src="asset/images/activity/sdn-bengo-gowa-1.jpg" alt="">
					<img class="img-responsive" src="asset/images/activity/sdn-bengo-gowa-2.jpg" alt="">
					<img class="img-responsive" src="asset/images/activity/sdn-bengo-gowa-3.jpg" alt="">
					<img class="img-responsive" src="asset/images/activity/sdn-bengo-gowa-4.jpg" alt="">
					</div>
				<?php } else { ?>
					<div class="gallery desktop col-xs-12">
					<img class="img-responsive" src="asset/images/activity/sdn-bengo-gowa-1.jpg" alt="">
					<img class="img-responsive" src="asset/images/activity/sdn-bengo-gowa-2.jpg" alt="">
					<img class="img-responsive" src="asset/images/activity/sdn-bengo-gowa-3.jpg" alt="">
					<img class="img-responsive" src="asset/images/activity/sdn-bengo-gowa-4.jpg" alt="">
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
