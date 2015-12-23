<?php 

	$pageTitle = "HUT Indosiar 21 | Personality Kuis";
	$pageSubject = "Kuis Personality";
	$pageKeywords = "indosiar, indosiar21, HUT, kuis, tebak program";
	$pageDesc = "Kuis tebak program unggulan Indosiar dari masa ke masa dalam rangka HUT Indosiar ke 21";
	$socialShareImg = "";
	include("header.php");

?>
	

<?php require('nav.php') ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="page-wrap" id="kuis">
	<div class="segment" id="personality-list">
		<div class="container spacepad">
			<form method="" id="quiz">
				<div class="quiz one">
					<h3>Question 1</h3>
					Hal pertama yang kamu lakukan ketika melihat temannya temanmu cantik / ganteng.
					<div class="options spacepad">
						<div>
							<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
	        				<label for="question-1-answers-A">A) Spontan muji dan modusin</label>
						</div>
						<div>
					        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
					        <label for="question-1-answers-B">B) Langsung ngobrol </label>
					    </div>
					    <div>
					        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
					        <label for="question-1-answers-C">C) Diem aja</label>
					    </div>
					    
					    <div>
					        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
					        <label for="question-1-answers-D">D) Ngajak kenalan duluan</label>
					    </div>
					    <div>
							<input type="radio" name="question-1-answers" id="question-1-answers-E" value="E" />
	        				<label for="question-1-answers-E">E) Nunggu dikenalin, karena gengsi kenalan duluan </label>
						</div>
					</div>
				</div>
				<div class="quiz two">
					<h3>Question 2</h3>
					Menurut kamu lauk yang cocok untuk nasi panas adalah?
					<div class="options spacepad">
					    <div>
					        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
					        <label for="question-2-answers-A">A) Telor Ceplok</label>
					    </div>
					    <div>
					        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
					        <label for="question-2-answers-B">B) Abon Pedas</label>
					    </div>
					    <div>
					        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
					        <label for="question-2-answers-C">C) Sambal</label>
					    </div>
					    <div>
					        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
					        <label for="question-2-answers-D">D) Sayur Lengkap</label>
					    </div>
					    <div>
					        <input type="radio" name="question-2-answers" id="question-2-answers-E" value="E" />
					        <label for="question-2-answers-E">E) Kerupuk </label>
					    </div>
					</div>
				</div>
				<div class="quiz three">
					<h3>Question 3</h3>
					Setelah kenalan sama cewek / cowok, hal apa yang kemudian kamu tanya ke dia?
					<div class="options spacepad">
					    <div>
					        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
					        <label for="question-3-answers-A">A) Lagi sibuk apa sekarang?</label>
					    </div>
					    <div>
					        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
					        <label for="question-3-answers-B">B) Asal darimana?</label>
					    </div>
					    <div>
					        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
					        <label for="question-3-answers-C">C) Anak ke berapa?</label>
					    </div>
					    <div>
					        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
					        <label for="question-3-answers-D">D) Udah punya pacar belum?</label>
					    </div>
					    <div>
					        <input type="radio" name="question-3-answers" id="question-3-answers-E" value="E" />
					        <label for="question-3-answers-E">E) Hobinya apa?</label>
					    </div>
					</div>
				</div>
				<div class="quiz four">
					<h3>Question 4</h3>
					Baju apa yang akan kamu pakai saat mau ketemu gebetan?
					<div class="options spacepad">
					    <div>
					        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
					        <label for="question-4-answers-A">A) Jersey bola</label>
					    </div>
					    <div>
					        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
					        <label for="question-4-answers-B">B) Kemeja</label>
					    </div>
					    <div>
					        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
					        <label for="question-4-answers-C">C) Batik</label>
					    </div>
					    <div>
					        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
					        <label for="question-4-answers-D">D) Jaket</label>
					    </div>
					    <div>
					        <input type="radio" name="question-4-answers" id="question-4-answers-E" value="E" />
					        <label for="question-4-answers-E">E) Setelan kerja</label>
					    </div>
					</div>
				</div>
				<div class="quiz five">
					<h3>Question 5</h3>
					Setelah kenalan, gimana cara kamu dapetin kontaknya?
					<div class="options spacepad">
					    <div>
					        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
					        <label for="question-5-answers-A">A) Pura-pura minjem hp-nya buat missed call hp sendiri</label>
					    </div>
					    <div>
					        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
					        <label for="question-5-answers-B">B) Minta ke temannya</label>
					    </div>
					    <div>
					        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
					        <label for="question-5-answers-C">C) Kepoin sosmednya</label>
					    </div>
					    <div>
					        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
					        <label for="question-5-answers-D">D) Minta langsung ke orangnya</label>
					    </div>
					    <div>
					        <input type="radio" name="question-5-answers" id="question-5-answers-E" value="E" />
					        <label for="question-5-answers-E">E) Ngerasa ngga butuh kontaknya, kalo jodoh ngga kemana</label>
					    </div>
					</div>
				</div>
				<div class="quiz six">
					<h3>Question 6</h3>
					Tempat ngedate paling asik buat kencan pertama sama gebetan?
					<div class="options spacepad">
					    <div>
					        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
					        <label for="question-6-answers-A">A) Fly over</label>
					    </div>
					    <div>
					        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
					        <label for="question-6-answers-B">B) Warung</label>
					    </div>
					    <div>
					        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
					        <label for="question-6-answers-C">C) Pasar Malam</label>
					    </div>
					    <div>
					        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
					        <label for="question-6-answers-D">D) Mall</label>
					    </div>
					    <div>
					        <input type="radio" name="question-6-answers" id="question-6-answers-E" value="E" />
					        <label for="question-6-answers-E">E) Taman </label>
					    </div>
					</div>
				</div>
				<div class="quiz seven">
					<h3>Question 7</h3>
					Lagu Indonesia yang langsung bisa kamu nyanyiin di kepala kamu saat ini?
					<div class="options spacepad">
					    <div>
					        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
					        <label for="question-7-answers-A">A) Sambalado –ayu ting ting</label>
					    </div>
					    <div>
					        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
					        <label for="question-7-answers-B">B) Cik cik periuk</label>
					    </div>
					    <div>
					        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
					        <label for="question-7-answers-C">C) Kesempurnaan cinta – rizki anak sule</label>
					    </div>
					    <div>
					        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
					        <label for="question-7-answers-D">D) Percayalah – afgan raisa</label>
					    </div>
					    <div>
					        <input type="radio" name="question-7-answers" id="question-7-answers-E" value="E" />
					        <label for="question-7-answers-E">E)Tetap dalam jiwa – isyana sarasvati</label>
					    </div>
					</div>
				</div>
				<div class="quiz eight">
					<h3>Question 8</h3>
					Hal pertama yang dilakukan saat kencan?
					<div class="options spacepad">
					    <div>
					        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
					        <label for="question-8-answers-A">A) Makan</label>
					    </div>
					    <div>
					        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
					        <label for="question-8-answers-B">B) mengenalkan ke orang tua</label>
					    </div>
					    <div>
					        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
					        <label for="question-8-answers-C">C) nonton</label>
					    </div>
					    <div>
					        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
					        <label for="question-8-answers-D">D) Belanja</label>
					    </div>
					    <div>
					        <input type="radio" name="question-8-answers" id="question-8-answers-E" value="E" />
					        <label for="question-8-answers-E">E) Nonton konser </label>
					    </div>
					</div>
				</div>
				<div class="quiz nine">
					<h3>Question 9</h3>
					Hal yang paling kamu benci, jika:
					<div class="options spacepad">
					    <div>
					        <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
					        <label for="question-9-answers-A">A) Dibohongi</label>
					    </div>
					    <div>
					        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
					        <label for="question-9-answers-B">B) Tiba-tiba disuruh bayarin makan</label>
					    </div>
					    <div>
					        <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
					        <label for="question-9-answers-C">C) Dimintain tolong oleh teman</label>
					    </div>
					    <div>
					        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
					        <label for="question-9-answers-D">D) Diselingkuhin</label>
					    </div>
					    <div>
					        <input type="radio" name="question-9-answers" id="question-9-answers-E" value="E" />
					        <label for="question-9-answers-E">E) Dicuekin </label>
					    </div>
					</div>
				</div>
				<div class="quiz ten">
					<h3>Question 10</h3>
					Tontonan favorit di Indosiar:            
					<div class="options spacepad">
					    <div>
					        <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
					        <label for="question-10-answers-A">A) Stand Up Comedy Academy</label>
					    </div>
					    <div>
					        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
					        <label for="question-10-answers-B">B) D'TerongShow</label>
					    </div>
					    <div>
					        <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
					        <label for="question-10-answers-C">C) Mamah & Aa Beraksi</label>
					    </div>
					    <div>
					        <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
					        <label for="question-10-answers-D">D) Sinema Pintu Taubat </label>
					    </div>
					    <div>
					        <input type="radio" name="question-10-answers" id="question-10-answers-E" value="E" />
					        <label for="question-10-answers-E">E) D’Academy </label>
					    </div>
					</div>
				</div>
				<div class="submission">
					<button type="submit" id="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>

			<div id="result" class="spacepad">

			<div id="retake"></div>
		</div>

	</div>

	<?php require('footer.php') ?>
	<?php require('overlay-menu.php') ?>
</div>
<style type="text/css">
	body {
		overflow-x: hidden;
	}
 	#kuis.page-wrap > .segment {
 		min-height: 5em;
 	}
	#submit {
		font-size: 2em;
    	width: 100%;
	}

	#result > div {
		animation-delay: .8s;
		transition: 1s all ease-in;
	}
	#retake > div {
		animation-delay: 1.1s;
		transition: 1s all ease-in;
	}
</style>
<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
 
  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };
 
  return t;
}(document, "script", "twitter-wjs"));</script>

<script>
$(function(){

	$( "input[type=radio]" ).on( "click", function(){
		$(this).parent().css('background', '#24BF98').siblings().css('background', '#fff');
		$(this).addClass('selected');

	});

    $('form .quiz > .options').each(function() {
    	$('.submission').hide();
    	var radios = $('input[type="radio"]');
    	var quiz = $('.quiz').length;
    	//display the submit button when all questions are answered
    	$(this).change(function(){
			if (radios.filter(':checked').length >= quiz) {
	    		$('.submission').show().addClass('animated bounceInRight');
	    	} else {
	    		$('.submission').hide();
	    	}
    	});
    });

	$('#submit').click(function(ev){

		ev.preventDefault();

		// .addClass('animated fadeOutUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		// 	$(this).hide();
		// });

		//remove quiz once its submitted with fancy animation lol
		$('#quiz').click(false).css('color', 'rgba(0, 0, 0, .4)').addClass('animated fadeOutUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			$(this).hide();
		});

		// option animation for the footer :P
		// $('footer').addClass('animated fadeInUp');

		// make sure the submit button is disabled once its pressed
		$('#submit').addClass('disabled');

		var getAnswer = $('form .quiz > .options input[type=radio].selected').map( function() {
			return $( this ).val();
		}).get().join();

		var obj = { };
		for (var i = 0, j = getAnswer.length; i < j; i++) {
		   obj[getAnswer[i]] = (obj[getAnswer[i]] || 0) + 1;

		}
		console.log(obj);
		
		 var getA = obj['A'] * 1 || 0;
		 var getB = obj['B'] * 2 || 0;
		 var getC = obj['C'] * 3 || 0;
		 var getD = obj['D'] * 4 || 0;
		 var getE = obj['E'] * 5 || 0;

		 var total = getA + getB + getC + getD + getE;


		console.log(total);

		var cemen = "<div class=\"spacepad animated bounceInRight vertical-align-nofloat\"><div class=\"person-img col-xs-12 col-sm-4\"><img class=img-responsive src=asset/images/kuis/personality/cemen.jpg alt=\"personality cemen\"></div><div class=\"person-desc col-xs-12 col-sm-8\"><h2>Cemen!</h2> Wah! Gaya pdkt kamu mirip banget nih sama Cemen karena kamu tuh rela melakukan apapun demi mendapatkan perhatian gebetan kamu. Dalam proses pdkt kamu akan sering kasih sinyal-sinyal positif ke gebetan kamu. Kamu akan mengatur strategi sedemikian rupa demi mendapat tanggapan dari gebetan kamu </div></div>";

		var musdalifah = "<div class=\"spacepad animated bounceInRight vertical-align-nofloat\"><div class=\"person-img col-xs-12 col-sm-4\"><img class=img-responsive src=asset/images/kuis/personality/musdalifah.jpg alt=\"personality musdalifah\"></div><div class=\"person-desc col-xs-12 col-sm-8\"><h2>Musdalifah!</h2>Wah! Gaya pdkt kamu mirip banget nih sama Musdalifah karena kamu punya percaya diri yang tinggi. Artinya kamu udah yakin banget bisa dapetin gebetan kamu. Kamu merasa diri kamu menarik dan kamu mampu untuk merebut perhatian gebetan kamu.'</div></div>";

		var ipul = "<div class=\"spacepad animated bounceInRight vertical-align-nofloat\"><div class=\"person-img col-xs-12 col-sm-4\"><img class=img-responsive src=asset/images/kuis/personality/ipul.jpg alt=\"personality ipul\"></div><div class=\"person-desc col-xs-12 col-sm-8\"><h2>Ipul!</h2>Wah! Gaya pdkt kamu mirip banget nih sama Ipul karena kamu orangnya diem. Tapi walaupun kamu diem, kamu tuh orangnya pasti. Artinya cara kamu pdkt itu udah terencana dengan baik. Pada akhirnya gebetan kamu makin tertarik sama kamu.'</div></div>";

		var rizkiridho = "<div class=\"spacepad animated bounceInRight vertical-align-nofloat\"><div class=\"person-img col-xs-12 col-sm-4\"><img class=img-responsive src=asset/images/kuis/personality/rizkiridho.jpg alt=\"personality rizki ridho\"></div><div class=\"person-desc col-xs-12 col-sm-8\"><h2>Rizki & Ridho!</h2>Wah! Gaya pdkt kamu mirip banget nih sama Rizki dan Ridho karena kamu orangnya setia. Apapun yang terjadi sama gebetan kamu, ngga akan ngurangin rasa suka kamu ke dia. Selagi dia single dan tidak mengecewakan kamu, kamu akan berusaha untuk dapatin dia.</div></div>";

		var irwan = "<div class=\"spacepad animated bounceInRight vertical-align-nofloat\"><div class=\"person-img col-xs-12 col-sm-4\"><img class=img-responsive src=asset/images/kuis/personality/irwan.jpg alt=\"personality irwan\"></div><div class=\"person-desc col-xs-12 col-sm-8\"><h2>Irwan!</h2>Wah! Gaya pdkt kamu mirip banget nih sama Irwan karena kamu orangnya cuek. Tapi, sebenernya niat kamu buat cuek itu supaya gebetan kamu nungguin apa yang akan kamu bakal lakuin. Jadi, dalam proses PDKT kamu cuma kasih tanda-tanda kecil kalau kamu tuh suka sama gebetan kamu. Itu tandanya kamu jago banget buat gebetan kamu penasaran.</div></div>";


		if (total < 15) {
			// $('#personality-list').load('template/cemen.php');
			window.location.href = "cemen";
			// $('#result').prepend(cemen)
   // 			$('meta[name="twitter:image"]').attr('content', 'http://hut.indosiar.com/asset/images/kuis/personality/cemen.jpg');
   // 			$('meta[property="og:image"]').attr('content', 'http://hut.indosiar.com/asset/images/kuis/personality/cemen.jpg');
		} else if (total >= 15 && total < 25) {
			window.location.href = "musdalifah.php";
		} else if (total >= 25 && total < 35) {
			window.location.href = "ipul.php";
		} else if (total >= 35 && total < 45){
			window.location.href = "rizkiridho.php";
		} else if (total >= 45) {
			window.location.href = "irwan.php";
		};
		

	});
	
});

</script>
</body>
</html>