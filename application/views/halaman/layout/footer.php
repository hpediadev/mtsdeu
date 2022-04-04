<style type="text/css">
	
</style>
<!--************************************
                Footer Start
        *************************************-->

<footer id="tg-footer" class="tg-footer tg-haslayout">
	<!-- <div class="tg-signupbox" id="warna1">
		<div class="container">
			<div class="tg-signuptextbox">
				<script src="https://apis.google.com/js/platform.js"></script>

				<div class="g-ytsubscribe" data-channelid="UCfi9lT1C6zei6EBDra7LI4g" data-layout="full" data-theme="dark" data-count="hidden"></div>
				<h3>Free Signup!</h3>
				<div class="tg-description">
					<p>Subscribe Monthly Newsletter &amp; Get Latest New &amp; Updates.</p>
				</div>
			</div>
			<form class="tg-formtheme tg-formsignupfree">
				<fieldset>
					<div class="form-group"><input type="text" name="emailid" class="form-control" placeholder="Enter Email ID"></div>
					<div class="form-group"><button type="submit" class="tg-btn">Signup Now</button></div>
				</fieldset>
			</form>
		</div>
	</div> -->
	<div class="tg-footermiddlebar" id="warna2">
		<div class="container">
			<div class="row" style="color:#fff;">
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="tg-widget tg-widgetcompanyinfo">
						<div class="tg-widgetcontent">




							<?php
							foreach ($dataLembaga as $u) {
								$nama = $u->NAMALEMBAGA;
								$alamat = $u->ALAMATLEMBAGA;
								$telp = $u->TELP;
								$email = $u->EMAILLEMBAGA;
								$hp = $u->HP;
								$fb = $u->FACEBOOK;
								$ig = $u->INSTAGRAM;
								//echo 'Situs Resmi : '.ucwords(htmlentities(htmlspecialchars(strtoupper($yu ))));
							}
							?>
							<strong class="tg-logo"><a href=""><img src="<?= base_url('uploads/' . $u->LOGO) ?>" alt="image description"></a></strong>
							<div class="tg-description">
								<p>
									<?= '<b>' . ucwords(htmlentities(htmlspecialchars(strtoupper($nama)))) . '</b><br>' . $alamat; ?>
								</p>
							</div>
							<!-- <ul class="tg-infolist">
										<li>
											<i class="icon-location"></i>
											<address>Abc, xyz street London, HG521A</address>
										</li>
										<li>
											<i class="icon-phone-handset"></i>
											<span>0800 - 1234 - 562 - 6</span>
										</li>
										<li>
											<i class="icon-printer"></i>
											<span>+4 1234 567 - 9</span>
										</li>
										<li>
											<a href="mailto:query@domain.com">
												<i class="icon-envelope"></i>
												<span>query@domain.com</span>
											</a>
										</li>
									</ul> -->
							<ul class="tg-socialicons">
								<li class="tg-facebook"><a href="<?= $fb ?>"><i class="fa fa-facebook"></i></a></li>
								<li class="tg-instagram"><a href="<?= $ig ?>"><i class="fa fa-instagram"></i></a></li>
								<li class="tg-envelop"><a href="mailto:<?= $email ?>"><i class="fa fa-envelope"></i></a></li>
								<li class="tg-twitter"><a href="mailto:<?= $email ?>"><i class="fa fa-phone"></i></a></li>
								<li class="tg-whatsapp"><a href="mailto:<?= $email ?>"><i class="fa fa-whatsapp"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- 						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-4">
							<div class="tg-widget tg-widgettweets">
								<div class="tg-widgettitle">
									<h3>Latest Tweets</h3>
								</div>
								<div class="tg-widgetcontent">
									<ul>
										<li>ss
										</li>
										<li>
											<p>Sed ut perspiciatis unde omnis isteat natus error sit voluptatem</p>
											<span><a href="mailto:http://www.domainurl.com">http://www.domainurl.com</a></span>
											<time datetime="2017-01-01">3 hours ago</time>
										</li>
									</ul>
								</div>
							</div>
						</div> -->
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="tg-widget tg-widgetcoursecategories">
						<div class="tg-widgettitle">
							<h3 style="color:#fff;">Akses Cepat</h3>
						</div>
						<div class="tg-widgetcontent">
							<div style="border-bottom: 1px solid #fff; height: 30px;padding-top: 4px;padding-bottom: 4px; padding-right: 4px;"><a style="color: #fff;" href="<?= base_url()?>">Home</a></div>
							<div style="border-bottom: 1px solid #fff; height: 30px;padding-top: 4px;padding-bottom: 4px; padding-right: 4px;"><a style="color: #fff;" href="<?= base_url('profil.html')?>">Identitas</a></div>
							<div style="border-bottom: 1px solid #fff; height: 30px;padding-top: 4px;padding-bottom: 4px; padding-right: 4px;"><a style="color: #fff;" href="<?= base_url('visimisi.html')?>">Visi Misi</a></div>
							<div style="border-bottom: 1px solid #fff; height: 30px;padding-top: 4px;padding-bottom: 4px; padding-right: 4px;"><a style="color: #fff;" href="<?= base_url('sejarah.html')?>">Sejarah</a></div>
							<div style="border-bottom: 1px solid #fff; height: 30px;padding-top: 4px;padding-bottom: 4px; padding-right: 4px;"><a style="color: #fff;" href="<?= base_url('struktur.html')?>">Struktur</a></div>
		                </div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="tg-widget tg-widgetcoursecategories">
						<div class="tg-widgettitle">
							<h3 style="color:#fff;">Ekskul</h3>
						</div>
						<div class="tg-widgetcontent">
							<?php
                                                    $q = $this->db->get('textra_md')->result();
                                                    foreach($q as $jur){
                                                    	?>
							<div style="border-bottom: 1px solid #fff; height: 30px;padding-top: 4px;padding-bottom: 4px; padding-right: 4px;"><a style="color: #fff;" href="<?= base_url() . 'ekskul/read/' . strtolower($jur->IDEXTRA) . '.html' ?>"><?= ucfirst(strtolower($jur->NAMAEXTRA)) ?></a></div>
						<?php } ?>
		                </div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="tg-widget tg-widgetcoursecategories">
						<div class="tg-widgettitle">
							<h3 style="color:#fff;">Video Profil</h3>
						</div>
						<div class="tg-widgetcontent">
							<!-- <iframe width="420" heigsht="345" src="https://www.youtube.com/embed/dS_BVy4Ypfs">
							</iframe> -->
					</div>
				</div>
							<?php
							$sp = $this->db->get('tlembaga_md')->result();
							$youtube = '';
							foreach ($sp as $lem) {
								$youtube = $lem->YOUTUBE;
							}
							?>
				</div>
			</div>
		</div>
	</div>
	<div class="tg-footerbar" id="warna1">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<span class="tg-copyright"><a style="color:#fff" target="_blank" href="https://www.mediadigitalofficial.com">
							&copy; Copyright 2021 | MTs. Miftahul Ulum |
							All rights reserved

						</a></span>
					<nav class="tg-addnav">
						Powered by <a target="_blank" href="https://www.facebook.com/mediadigitalofficial" style="color:#fff">Media Digital</a>
						<!-- <ul>
                                    <li><a style="color:#fff">Powered by  Media Digital</a></li>
                                    <li><a style="color:#fff">Term and Conditions</a></li>
                                    <li><a style="color:#fff">Contact</a></li>
                                </ul> -->
					</nav>
				</div>
			</div>
		</div>
	</div>
</footer>

</div>
</div>




<!--************************************
                Footer End
        *************************************-->
</div>
<!--************************************
            Wrapper End
    *************************************-->
<script src="<?= base_url('assets/js/vendor/jquery-library.js') ?>"></script>
<script src="<?= base_url('assets/js/vendor/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/mapclustering/data.js') ?>on"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
<script src="<?= base_url('assets/js/mapclustering/markerclusterer.min.js') ?>"></script>
<script src="<?= base_url('assets/js/mapclustering/infobox.js') ?>"></script>
<script src="<?= base_url('assets/js/mapclustering/map.js') ?>"></script>
<script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('assets/js/isotope.pkgd.js') ?>"></script>
<script src="<?= base_url('assets/js/prettyPhoto.js') ?>"></script>
<script src="<?= base_url('assets/js/countdown.js') ?>"></script>
<script src="<?= base_url('assets/js/collapse.js') ?>"></script>
<script src="<?= base_url('assets/js/moment.js') ?>"></script>
<script src="<?= base_url('assets/js/gmap3.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>
<script src="<?= base_url('assets/js/share.js') ?>"></script>
<script type="text/javascript">
	<!--
	function showTime() {
		var a_p = "";
		var today = new Date();
		var curr_hour = today.getHours();
		var curr_minute = today.getMinutes();
		var curr_second = today.getSeconds();
		if (curr_hour < 12) {
			a_p = "AM";
		} else {
			a_p = "PM";
		}
		if (curr_hour == 0) {
			curr_hour = 12;
		}
		if (curr_hour > 12) {
			curr_hour = curr_hour - 12;
		}
		curr_hour = checkTime(curr_hour);
		curr_minute = checkTime(curr_minute);
		curr_second = checkTime(curr_second);
		document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
	}

	function checkTime(i) {
		if (i < 10) {
			i = "0" + i;
		}
		return i;
	}
	setInterval(showTime, 500);
	//
	-->
</script>

<!-- Menampilkan Hari, Bulan dan Tahun -->

<script type='text/javascript'>
	<!--
	var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
	var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
	var date = new Date();
	var day = date.getDate();
	var month = date.getMonth();
	var thisDay = date.getDay(),
		thisDay = myDays[thisDay];
	var yy = date.getYear();
	var year = (yy < 1000) ? yy + 1900 : yy;
	// document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
	document.getElementById('Hari').innerHTML = thisDay + ', ' + day + ' ' + months[month] + ' ' + year
	//
	-->
</script>
</body>


</html>