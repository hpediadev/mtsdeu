
<script type="text/javascript">
$(document).ajaxStart(function() {
    $("#ajax-wait").css({
        left: ($(window).width() - 32) / 2 + "px", // 32 = lebar gambar
        top: ($(window).height() - 32) / 2 + "px", // 32 = tinggi gambar
        display: "block"
    })
}).ajaxComplete(function() {
    $("#ajax-wait").fadeOut();
});
</script>
<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                            <div id="tg-content" class="tg-content">
                                
                                
                                <section class="tg-sectionspace tg-haslayout">
                                    <div class="tg-latestnews">
                                    <div class="tg-borderheading sidebar">
									<!-- <div class="split"></div> -->
                                        <!-- <h2>&nbsp;Baca Berita</h2> -->
                                        <!-- </div> -->
											<!---- ======START BERITA==== ---->
                                            <?php
											$idArt = 0;
											$idKOM = 0;
                                                foreach ($dataartikel as $row) {
                                                	$idArt = $row->IDARTIKEL;
                                                	$idKOM = $row->IDARTIKEL;
                                                    # code...
                                                   $tanggal = substr($row->TANGGALARTIKEL, 0,10);
                                                   $jdl = str_replace(" ","-",$row->JUDUL);
                                                     $hari   = date('N', strtotime($tanggal)); 
                                                     $day = array('','Senin','Selasa', 'Rabu','Kamis','Jumat','Sabtu','Ahad');
                                                     $bln = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                                                     $tgl   = date('d ', strtotime($tanggal)).$bln[date('n', strtotime($tanggal))].date(' Y ', strtotime($tanggal)); 
                                                     //echo date('N', strtotime('2021-03-21'));
                                                
                                            ?>
										<article class="tg-themepost tg-newspost">
										<div class="tg-themsepostcontent">
											<div class="tg-themeposttitle">
												<h1 id="judul-bg" style="font-weight:bold"><?= $row->JUDUL ?></h1>
											</div>
											<?php 
												$nm='';
												foreach($datUser as $v){
													$nm = $v->NAMA;
												}
											 ?>

											Diposting oleh : <i class="fa fa-user"></i> Admin - 
											<i class="fa fa-calendar"></i> <?= $day[$hari].', '.$tgl ?> - 
											<i class="fa fa-clock-o"></i> <?= substr($row->TANGGALARTIKEL, 10,9) ?>
											
										</div>
										<div class="tg-themepostcontent">
											<!-- <div class="tg-themeposttitle">
												<h4><b id="judul-bg"><?= $row->JUDUL ?></b></h4>
												
												<i class="fa fa-user"></i>
                                                <span><?= $row->USERNAME?></span>
                                                <i class="fa fa-calendar"></i>
                                                <span><?= $day[$hari].','.$tgl ?></span>
                                                <i class="fa fa-time"></i>
                                                <span><?= substr($row->TANGGALARTIKEL, 10,9) ?></span>

											</div> -->
											<div class="tg-sharetext tg-themeposttitle">
												<?php
													$uri_path =  "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	?>
												<ul class="tg-socialicons">
													<li class="tg-facebook"><a href="http://www.facebook.com/sharer.php?u=<?= $uri_path?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
													
													<li class="tg-twitter"><a href="http://www.twitter.com/sharer?url=<?= $uri_path?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
													
													<li class="tg-pinterestp"><a href="https://www.pinterest.com/pin/create/button/?url=<?= $uri_path?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
													
													<li class="tg-whatsapp"><a href="whatsapp://send?text=<?= $uri_path?>" target="_blank"><i class="fa fa-whatsapp"></i></a></li>

													
												</ul>


    
    
    											</div>
											
										<figure class="tg-featuredimg">
                                                        <center href="javascript:void(0);" >
                                                            <img src="<?= base_url('uploads/artikel/'.$row->GAMBAR)?>" alt="image description" width="100%">
                                                        </center>
                                                    </figure>
										<div class="tg-description">
                                                        <br>
                                                        <?php $a="saya kamu";
                                                        // echo str_replace('<p>','<p align="justify">',$row->URAIAN); ?>

											<?php echo str_replace('<p>','<p align="justify">', str_replace('<p><img', '<p align="center"><img', $row->URAIAN)) ?>
<!-- 
											<a href="http://www.facebook.com/sharer.php?u=https://ma-alhasanahpasean.sch.id/berita/read/1/Selamat-dan-Sukses--UMBKS-2020-2021.html" target="_blank">Share To Facebook</a>
 -->
											<!-- <a href="http://www.facebook.com/sharer.php?u=<?= base_url() ?>berita/read/<?= $this->uri->segment(3)?>/<?= $this->uri->segment(4)?>.html" target="_blank">Share To Facebook</a> -->

										</div>
									</article>

									
									<?php } ?>

                                            	<!---- ======END BERITA==== ---->
									<div class="tg-tagsandpsotshares">
										<!-- <div class='addthis_toolbox addthis_default_style '>
<a class='addthis_button_facebook_like' fb:like:layout='button_count'/>
<a class='addthis_button_tweet'/>
<a class='addthis_button_google_plusone' g:plusone:size='medium'/>
<a class='addthis_counter addthis_pill_style'/>
</div>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55e8670d20d71d58" async="async"></script> -->
										<!-- <div class="tg-tagstext">
											<span>tags:</span>
											<div class="tg-tags">
												<a class="tg-tag" href="javascript:void(0);">Student</a>
												<a class="tg-tag" href="javascript:void(0);">Examination</a>
												<a class="tg-tag" href="javascript:void(0);">Easy Learning</a>
												<a class="tg-tag" href="javascript:void(0);">Pencils</a>
												<a class="tg-tag" href="javascript:void(0);">Technology</a>
												<a class="tg-tag" href="javascript:void(0);">Video</a>
												<a class="tg-tag" href="javascript:void(0);">Teachers</a>
												<a class="tg-tag" href="javascript:void(0);">Amazing Trips</a>
												<a class="tg-tag" href="javascript:void(0);">News</a>
												<a class="tg-tag" href="javascript:void(0);">Bully Kids</a>
											</div>
										</div> -->
										<div class="tg-sharetext">
											<span>share:</span>

											<?php
												$uri_path =  "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
											<ul class="tg-socialicons">
													<li class="tg-facebook"><a href="http://www.facebook.com/sharer.php?u=<?= $uri_path?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
													
													<li class="tg-twitter"><a href="http://www.twitter.com/sharer?url=<?= $uri_path?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
													
													<li class="tg-pinterestp"><a href="https://www.pinterest.com/pin/create/button/?url=<?= $uri_path?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
													
													<li class="tg-whatsapp"><a href="whatsapp://send?text=<?= $uri_path?>" target="_blank"><i class="fa fa-whatsapp"></i></a></li>

													
												</ul>
										</div>
									</div>

									<ul class="tg-postnav">
										<?php
											$no=0;
											$b=10;
											$j=0;
											$g=0;
											$in=0;
											foreach ($after as $b) {
												$in++;
													// echo $b->JUDUL;
												if($in!=1){
													// echo "Ok";
												}
											}
											foreach ($after as $b) {
												$in++;
													// echo $b->JUDUL;
												if($in!=1){
													// echo "Ok";
												}
											}

												$se=array('Sebelumnya','Selanjutnya');
												$s=0;
                                                foreach ($nextNews as $r) {
                                                	$t = $r->TANGGALARTIKEL;
                                                     $tgl = substr($t, 8,2);
                                                     $bln = substr($t, 5,2);
                                                     $thn = substr($t, 0,4);

                                            ?>

											<li>
												<figure style="width: 90px; height: 50px; overflow: hidden;position: relative;">
													<a href=""  >
														<img src="<?= base_url('uploads/artikel/'.$r->GAMBAR)?>" alt="image description">
													</a>
												</figure>
												<div class="tg-postnavcontent">
													<a href="javascript:void(0);"><?= $se[$s]?></a>
													<h3><a href="<?=  base_url()?>berita/read/<?= $tgl.'/'.$bln.'/'.$thn.'/'.$r->LINK.'.html'; ?>">
														<?= $r->JUDUL?>
													</a></h3>
												</div>
											</li>
                                            <?php 
                                            $s++;
                                                }
                                            ?>
									</ul>
									<ul class="tg-postnav">
										<?php
										$idArt =$this->uri->segment(3);
										$ind=1;
										$i=0;
										$kur=1;
										$idArray ='';
										$judulArt = '';
										$gambar = '';
										foreach($prevnext as $pr){
											// $idf[]= $pr->IDARTIKEL;
											// if($idf==$idArt)
											// {
											// 	$i=$ind-$kur;
											// 	//$prev=$pr->IDARTIKEL;
											// 	$z=$ind+$kur;
											// 	echo $i.'|'.$z;
											// 	echo $idf[$ind];
											// }
											//echo $pr->IDARTIKEL.'<br>';
											$idArray=$idArray.''.$pr->IDARTIKEL.',';
											$judulArt=$judulArt.''.$pr->JUDUL.'|';
											$gambar=$gambar.''.$pr->GAMBAR.'|';
											
											//$ind++;
										}
										//echo $judulArt;
										$jdlA = $judulArt;
										$text = $idArray;
										$gam = $gambar;
										$hobi=explode(",", $text);
											//echo "<p>Hasilnya Ketika Menggunakan fungsi Explode</p><pre>";
									
											//print_r($hobi);
										
											//echo "</pre>";
										$textjudul=explode("|", $jdlA);
										$textgambar=explode("|", $gam);
											//echo "<p>Hasilnya Ketika Menggunakan fungsi Explode</p><pre>";
									
											//print_r($textjudul);
										
											//echo "</pre>";
										
										 
										
											foreach ($hobi as $key => $data) {
										
												//echo "index : $key Nilai : $data<br/>";
												if($data==$idArt)
												{
													$p=$key-1;
													$n=$key+1;
													if($p<0)
													$p=$key;
													//echo $data.' | '.$idArt;
												}
										
											}
											//echo "Prev : ".$hobi[$p];
											//echo "<br>Next : ".$hobi[$n];
											//echo "<br>Next : ".$textjudul[$n];
										//if($p<0){
									?>
										<!-- <li>
											<a href="http://www.facebook.com/sharer.php?u=<?=  base_url()?>berita/read/<?= $idArt.'/'.str_replace(" ","-",$idArt =$this->uri->segment(4)).'.html'; ?>" target="_blank">Share To Facebook</a>
										</li>
										
										<li>
											<div class="tg-postnavcontent">
											<figure><img id="sedbagian" width="100px" src="<?=  base_url('uploads/artikel/'.$textgambar[$p])?>" alt="image description"></fegure>
											
											</div><a href="<?=  base_url()?>berita/read/<?= $hobi[$p].'/'.str_replace(" ","-",$textjudul[$p]).'.html'; ?>">Berita Selanjutnya</a><br>
											<b><a href="<?=  base_url()?>berita/read/<?= $hobi[$p].'/'.str_replace(" ","-",$textjudul[$p]).'.html'; ?>"><b style="color: #333"><?= $textjudul[$p]?></b></a></b>
										</li> 
										<li>
											<div class="tg-postnavcontent">
											<figure><img id="sebdagian" width="100px" src="<?=  base_url('uploads/artikel/'.$textgambar[$n])?>" alt="image description"></fegure>
											
											</div><a href="<?=  base_url()?>berita/read/<?= $hobi[$n].'/'.str_replace(" ","-",$textjudul[$n]).'.html'; ?>">Berita Selanjutnya</a><br>
											<b><a href="<?=  base_url()?>berita/read/<?= $hobi[$n].'/'.str_replace(" ","-",$textjudul[$n]).'.html'; ?>"><b style="color: #333"><?= $textjudul[$n]?></b></a></b>
										</li>  -->
									</ul>
									<!-- div class="col-xs-12 col-sm-8 col-md-9 col-lg-2 " style="text-align: left;">
										<p clas="gambar" style="width: 70px;height: 70px" style="text-align: right; border: 1px solid"><img id="sebagian" src="<?=  base_url('uploads/artikel/'.$textgambar[$n])?>" alt="image description"></p>
									</div>
									<div class="col-xs-12 col-sm-8 col-md-9 col-lg-3 " style="text-align: left;">
										<a href="<?=  base_url()?>berita/read/<?= $hobi[$n].'/'.str_replace(" ","-",$textjudul[$n]).'.html'; ?>">Berita Selanjutnya</a>
											<p><a href="<?=  base_url()?>berita/read/<?= $hobi[$n].'/'.str_replace(" ","-",$textjudul[$n]).'.html'; ?>"><?= $textjudul[$n]?></a></p>
									</div>
									<div class="col-xs-12 col-sm-8 col-md-9 col-lg-2 " style="text-align: left;">
									</div>

									<div class="col-xs-12 col-sm-8 col-md-9 col-lg-3 " style="text-align: RI;">
										<a href="<?=  base_url()?>berita/read/<?= $hobi[$n].'/'.str_replace(" ","-",$textjudul[$n]).'.html'; ?>">Berita Selanjutnya</a>
											<p><a href="<?=  base_url()?>berita/read/<?= $hobi[$n].'/'.str_replace(" ","-",$textjudul[$n]).'.html'; ?>"><?= $textjudul[$n]?></a></p>
									</div>


									<div class="col-xs-12 col-sm-8 col-md-9 col-lg-2 pull-right" style="text-align: left;">
										<p clas="gambar" style="width: 70px;height: 70px" style="text-align: right; border: 1px solid"><img id="sebagian" src="<?=  base_url('uploads/artikel/'.$textgambar[$n])?>" alt="image description"></p>
									</div> -->

									

									
									<!-- <div class="tg-postauthor">
										<figure><a href="javascript:void(0);"><img src="images/img-18.jpg" alt="image description"></a></figure>
										<div class="tg-postauthorcontent">
											<div class="tg-postauthorhead">
												<h4><a href="javascript:void(0);">Maragaret Ellinger</a></h4>
												<span>Author Since: June 27, 2015</span>
												<ul class="tg-socialicons">
													<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
													<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
													<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
													<li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
													<li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
												</ul>
											</div>
											<div class="tg-description">
												<p>Consequat duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu fugiat nullataka pariatur occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum perspiciatis undes omnis iste natus error sit quae ab illo inventore irure dolor in reprehenderit voluptate velit esse cillum dolore eu fugiat ananulla pariatur occaecat cupidatat non dolore eu fugiat nullataka pariatur.</p>
											</div>
										</div>
									</div> -->
									<div class="tg-commentssection">
										<div class="tg-titleborder">
											<h2>Comments</h2>
										</div>
										<ul id="tg-comments" class="tg-comments">
											<?php 
											foreach($datKom as $rk){
												
                                                   $tanggal = substr($rk->TANGGALKOMENTAR, 0,10);
                                                     $hari   = date('N', strtotime($tanggal)); 
                                                     $day = array('','Senin','Selasa', 'Rabu','Kamis','Jumat','Sabtu','Ahad');
                                                     $bln = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                                                     $tgl   = date('d ', strtotime($tanggal)).$bln[date('n', strtotime($tanggal))].date(' Y ', strtotime($tanggal)); 
                                                     //echo date('N', strtotime('2021-03-21'));
											 ?>
											<li>
												<div class="tg-comment">
													<!-- <figure><a href="javascript:void(0);"><img src="images/img-19.jpg" alt="image description"></a></figure> -->
													<div class="tg-commentcontent">
														<div class="tg-commenthead">
															<h4><a href="javascript:void(0);"><?= $rk->NAMA.'-'.$rk->TANGGALKOMENTAR?></a></h4>
															<span><?= $day[$hari].','.$tgl ?></span>
															<a class="tg-btncommentreply" href="javascript:void(0);">
																<i class="fa fa-reply"></i>
																<em>reply</em>
															</a>
														</div>
														<div class="tg-description">
															<p><?= $rk->KOMENTAR ?></p>
														</div>
													</div>
												</div>
												<!-- <ul class="tg-commentchild">
													<li>
														<div class="tg-comment">
															<figure><a href="javascript:void(0);"><img src="images/img-20.jpg" alt="image description"></a></figure>
															<div class="tg-commentcontent">
																<div class="tg-commenthead">
																	<h4><a href="javascript:void(0);">Machelle Paolini</a></h4>
																	<span>June 27, 2015</span>
																	<a class="tg-btncommentreply" href="javascript:void(0);">
																		<i class="fa fa-reply"></i>
																		<em>reply</em>
																	</a>
																</div>
																<div class="tg-description">
																	<p>Consequat duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu fugiat nullataka pariatur occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum perspiciatis undes omnis iste natus error voluptate.</p>
																</div>
															</div>
														</div>
													</li>
												</ul> -->
											</li>
										<?php } ?>
										</ul>
									</div>
									<div class="tg-postcomments">
										<div class="tg-titleborder">
											<h2>Tinggalkan Komentar Anda</h2>

         

										</div>
										<form class="tg-formtheme tg-formcontactus" action="<?= base_url('berita/simpan.html')?>" method="post">
											<fieldset>
												<div class="form-group">
													<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama*">
													<input type="hidden" name="id" id="id" value="<?= $idKOM?>">
												</div>
												<div class="form-group">
													<input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email* (Email Anda Tidak Akan di Tampilkan)">
												</div>
												<div class="form-group">
													<textarea  name="komentar" id="komentar" class="form-control" placeholder="Komentar"></textarea>
												</div>
												<button id="tombol_tambash" class="tg-btn" type="submit">submit</button>
											</fieldset>
										</form>
									</div>
									</div>
                                </section>

                                
                            </div>
                        </div>
                       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script type="text/javascript">
				        $(document).ready(function(){
				            $("#tombol_tambah").click(function(){
				            	var id = $('#id').val();
				            	var nama = $('#nama').val();
				            	var email = $('#email').val();
				            	var komentar = $('#komentar').val();
				                $.ajax({
				                    type	: 'POST',
				                    url	: "<?= base_url(); ?>/berita/simpan",
				                    data: {
				                    	id: id,
				                    	nama: nama,
				                    	email: email,
				                    	komentar: komentar,
				                    },
				                    cache	: false,
				                    success	: function(data){
				                         success: function(dataResult){
											var dataResult = JSON.parse(dataResult);
											if(dataResult.statusCode==200){
												
											   alert("Sukses occured !");						
											}
											else {
											   alert("Error occured !");
											}

				                    }
				                });
				            });
				        });
				</script> 
