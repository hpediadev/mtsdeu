<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                            <div id="tg-content" class="tg-content">
                                <section class="tg-sectionspace tg-haslayout">
                                    <div class="tg-borderheading">
                                        <h2>Baca Berita</h2>
                                    </div>
                                    <div class="tg-events">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
                                            	<!---- ======START BERITA==== ---->
                                            <?php
                                                foreach ($dataartikel as $row) {
                                                    # code...
                                                   $tanggal = substr($row->TANGGALARTIKEL, 0,10);
                                                   $jdl = str_replace(" ","-",$row->JUDUL);
                                                     $hari   = date('N', strtotime($tanggal)); 
                                                     $day = array('','Senin','Selasa', 'Rabu','Kamis','Jumat','Sabtu');
                                                     $bln = array('','Januari','Februari','Maret','April','Juni','Juli','Agustus','September','Oktober','November','Desember');
                                                     $tgl   = date('d ', strtotime($tanggal)).$bln[date('n', strtotime($tanggal))].date(' Y ', strtotime($tanggal)); 
                                                
                                            ?>
                                                <article class="tg-themepost tg-eventpost">
                                                    <figure class="tg-featuredimg">
                                                        <a href="javascript:void(0);" >
                                                            <img src="<?= base_url('uploads/artikel/'.$row->GAMBAR)?>" alt="image description">
                                                        </a>
                                                    </figure>
										<div class="tg-themepostcontent">
											<div class="tg-themeposttitle">
												<h1><?= $row->JUDUL ?></h1>
											</div>
                                                        <ul class="tg-matadata">
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span><?= $day[$hari].','.$tgl ?></span>
                                                                </a>
                                                            </li>
                                                        </ul>
										</div>
										<div class="tg-desscription">
											<?= $row->URAIAN ?> 
											<br>
											<br>
											
										</div>

										</div>
									</article>
									
                                    <div class="tg-evednts">
                                        <div class="row">
									
									<ul class="tg-postnav">
									<?php
										$idArt =$this->uri->segment(3);
										$ind=1;
										$i=0;
										$kur=1;
										$idArray ='';
										$judulArt = '';
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
											
											//$ind++;
										}
										//echo $judulArt;
										$jdlA = $judulArt;
										$text = $idArray;
										$hobi=explode(",", $text);
											//echo "<p>Hasilnya Ketika Menggunakan fungsi Explode</p><pre>";
									
											//print_r($hobi);
										
											//echo "</pre>";
										$textjudul=explode("|", $jdlA);
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
										if($p<0){
									?>
										<li>
											<figure><img src="<?= base_url('assets/images/img-16.jpg')?>" alt="image description"></figure>
											<div class="tg-postnavcontent">
												<a href="<?=  base_url()?>berita/read/<?= $hobi[$p].'/'.str_replace(" ","-",$textjudul[$p]).'.html'; ?>">Berita Sebelumnya</a>
												<h3><a href="<?=  base_url()?>berita/read/<?= $hobi[$p].'/'.str_replace(" ","-",$textjudul[$p]).'.html'; ?>"><?= $textjudul[$p]?></a></h3>
											</div>
										</li>
										<?php
										}
										
										?>
										<li>
											<figure><img src="images/img-17.jpg" alt="image description"></figure>
											<div class="tg-postnavcontent">
											<a href="<?=  base_url()?>berita/read/<?= $hobi[$n].'/'.str_replace(" ","-",$textjudul[$n]).'.html'; ?>">Berita Sebelumnya</a>
												<h3><a href="<?=  base_url()?>berita/read/<?= $hobi[$n].'/'.str_replace(" ","-",$textjudul[$n]).'.html'; ?>"><?= $textjudul[$n]?></a></h3>
											</div>
										</li>
									</ul>
									</dib>
									</dib>
									<div class="tg-postauthor">
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
									</div>
									<div class="tg-relatedthemeposts">
										<div class="tg-borderheading">
											<h2>Related News</h2>
										</div>
										<div id="tg-latestnewsslider" class="tg-latestnewsslider owl-carousel tg-posts">
											<div class="item">
												<article class="tg-themepost tg-newspost">
													<figure class="tg-featuredimg">
														<a href="javascript:void(0);">
															<img src="images/courses/img-04.jpg" alt="image description">
														</a>
													</figure>
													<div class="tg-themepostcontent">
														<ul class="tg-matadata">
															<li>
																<a href="javascript:void(0);">
																	<i class="fa fa-calendar"></i>
																	<span>Tuesday, Apr 21, 2017</span>
																</a>
															</li>
														</ul>
														<div class="tg-themeposttitle">
															<h3><a href="javascript:void(0);">Take a Step &amp; Become a Proffesional Teacher</a></h3>
														</div>
														<div class="tg-description">
															<p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href="javascript:void(0);">Read More</a></p>
														</div>
													</div>
												</article>
											</div>
											<div class="item">
												<article class="tg-themepost tg-newspost">
													<figure class="tg-featuredimg">
														<a href="javascript:void(0);">
															<img src="images/courses/img-05.jpg" alt="image description">
														</a>
													</figure>
													<div class="tg-themepostcontent">
														<ul class="tg-matadata">
															<li>
																<a href="javascript:void(0);">
																	<i class="fa fa-calendar"></i>
																	<span>Tuesday, Apr 21, 2017</span>
																</a>
															</li>
														</ul>
														<div class="tg-themeposttitle">
															<h3><a href="javascript:void(0);">One Day Crash Course on Skills Improvement</a></h3>
														</div>
														<div class="tg-description">
															<p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href="javascript:void(0);">Read More</a></p>
														</div>
													</div>
												</article>
											</div>
											<div class="item">
												<article class="tg-themepost tg-newspost">
													<figure class="tg-featuredimg">
														<a href="javascript:void(0);">
															<img src="images/courses/img-06.jpg" alt="image description">
														</a>
													</figure>
													<div class="tg-themepostcontent">
														<ul class="tg-matadata">
															<li>
																<a href="javascript:void(0);">
																	<i class="fa fa-calendar"></i>
																	<span>Tuesday, Apr 21, 2017</span>
																</a>
															</li>
														</ul>
														<div class="tg-themeposttitle">
															<h3><a href="javascript:void(0);">An Apple A Day Keeps The Teacher Away</a></h3>
														</div>
														<div class="tg-description">
															<p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href="javascript:void(0);">Read More</a></p>
														</div>
													</div>
												</article>
											</div>
											<div class="item">
												<article class="tg-themepost tg-newspost">
													<figure class="tg-featuredimg">
														<a href="javascript:void(0);">
															<img src="images/courses/img-07.jpg" alt="image description">
														</a>
													</figure>
													<div class="tg-themepostcontent">
														<ul class="tg-matadata">
															<li>
																<a href="javascript:void(0);">
																	<i class="fa fa-calendar"></i>
																	<span>Tuesday, Apr 21, 2017</span>
																</a>
															</li>
														</ul>
														<div class="tg-themeposttitle">
															<h3><a href="javascript:void(0);">Degree In Hand And A Job In Your Pocket</a></h3>
														</div>
														<div class="tg-description">
															<p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href="javascript:void(0);">Read More</a></p>
														</div>
													</div>
												</article>
											</div>
											<div class="item">
												<article class="tg-themepost tg-newspost">
													<figure class="tg-featuredimg">
														<a href="javascript:void(0);">
															<img src="images/courses/img-08.jpg" alt="image description">
														</a>
													</figure>
													<div class="tg-themepostcontent">
														<ul class="tg-matadata">
															<li>
																<a href="javascript:void(0);">
																	<i class="fa fa-calendar"></i>
																	<span>Tuesday, Apr 21, 2017</span>
																</a>
															</li>
														</ul>
														<div class="tg-themeposttitle">
															<h3><a href="javascript:void(0);">Ending? This Is Only The Beginning Ending This Is Only The</a></h3>
														</div>
														<div class="tg-description">
															<p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href="javascript:void(0);">Read More</a></p>
														</div>
													</div>
												</article>
											</div>
											<div class="item">
												<article class="tg-themepost tg-newspost">
													<figure class="tg-featuredimg">
														<a href="javascript:void(0);">
															<img src="images/courses/img-09.jpg" alt="image description">
														</a>
													</figure>
													<div class="tg-themepostcontent">
														<ul class="tg-matadata">
															<li>
																<a href="javascript:void(0);">
																	<i class="fa fa-calendar"></i>
																	<span>Tuesday, Apr 21, 2017</span>
																</a>
															</li>
														</ul>
														<div class="tg-themeposttitle">
															<h3><a href="javascript:void(0);">I Use To Be Little, But Now I'm Going To School</a></h3>
														</div>
														<div class="tg-description">
															<p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href="javascript:void(0);">Read More</a></p>
														</div>
													</div>
												</article>
											</div>
										</div>
									</div>
									<div class="tg-commentssection">
										<div class="tg-titleborder">
											<h2>03 Comments</h2>
										</div>
										<ul id="tg-comments" class="tg-comments">
											<li>
												<div class="tg-comment">
													<figure><a href="javascript:void(0);"><img src="images/img-19.jpg" alt="image description"></a></figure>
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
															<p>Consequat duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu fugiat nullataka pariatur occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum perspiciatis undes omnis iste natus error sit quae ab illo inventore irure dolor in reprehenderit voluptate.</p>
														</div>
													</div>
												</div>
												<ul class="tg-commentchild">
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
												</ul>
											</li>
											<li>
												<div class="tg-comment">
													<figure><a href="javascript:void(0);"><img src="images/img-21.jpg" alt="image description"></a></figure>
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
															<p>Consequat duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu fugiat nullataka pariatur occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum perspiciatis undes omnis iste natus error sit quae ab illo inventore irure dolor in reprehenderit voluptate.</p>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<div class="tg-postcomments">
										<div class="tg-titleborder">
											<h2>Leave Your Comment</h2>
										</div>
										<form class="tg-formtheme tg-formpostcomment">
											<fieldset>
												<div class="form-group">
													<input type="text" name="name" class="form-control" placeholder="Name*">
												</div>
												<div class="form-group">
													<input type="email" name="email" class="form-control" placeholder="Email* (Your email address will not be published.)">
												</div>
												<div class="form-group">
													<input type="text" name="subject" class="form-control" placeholder="Subject">
												</div>
												<div class="form-group">
													<textarea  name="Comment" class="form-control" placeholder="Comment"></textarea>
												</div>
												<button class="tg-btn" type="submit">submit</button>
											</fieldset>
										</form>
									</div>
								
                                            </div>
                                            <?PHP } ?>
                                            	<!---- ======END BERITA==== ---->
                                            <div>
                                                <nav class="tg-pagination">
				                                    <ul>
				                                        <li class="tg-prevpage"><a href="#"><i class="fa fa-angle-left"></i></a></li>
				                                        <li><a href="#">1</a></li>
				                                        <li><a href="#">2</a></li>
				                                        <li><a href="#">3</a></li>
				                                        <li><a href="#">4</a></li>
				                                        <li class="tg-active"><a href="#">5</a></li>
				                                        <li>...</li>
				                                        <li><a href="#">10</a></li>
				                                        <li class="tg-nextpage"><a href="#"><i class="fa fa-angle-right"></i></a></li>
				                                    </ul>
				                                </nav>
                                            </div>
                                </section>
                                
                            </div>
                        </div>