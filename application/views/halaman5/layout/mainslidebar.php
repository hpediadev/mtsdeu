<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
							<aside id="tg-sidebar" class="tg-sidebar">
								<!-- <div class="tg-widget">
                                    <div class="tg-borderheading sidebar">
									<div class="split"></div>
                                        <h2>&nbsp;Info Terbaru</h2>
                                    </div>
									<div class="tg-widgetcontent">
										<form class="tg-formtheme tg-formsearch">
											<fieldset>
												<input type="search" name="search" class="form-control" placeholder="Start Your Search Here">
												<button type="submit" class="tg-btnsearch" style="background-color:red;"><i class="icon-magnifier"></i></button>
											</fieldset>
										</form>
									</div>
								</div> -->
								<div class="tg-widget tg-widgetnoticeboard">
									<div class="tg-borderheading sidebar">
										<!-- <div class="split"></div>
	                                        <h2>&nbsp;Link</h2>
	                                    </div>
	                                     -->
	                                            <?php
	                                        $sql = $this->db->order_by('IDARTIKEL','DESC');
	                                        $sql = $this->db->limit(1);
	                                        $sql =  $this->db->get_where('tartikel_md',array('KATEGORI'=>'informasi'))->result();
	                                        foreach ($sql as $s) {
	                                            # code...

	                                $jdl = str_replace(" ","-",$s->JUDUL);
	                                        $t = $s->TANGGALARTIKEL;
	                                                     $tgl = substr($t, 8,2);
	                                                     $bln = substr($t, 5,2);
	                                                     $thn = substr($t, 0,4);
	                                        ?>
	                                <div class="tg-widget tg-widgetadmissionform">
	                                    <div class="tg-widgetcontent">
	                                        <h3>Informasi Utama</h3>
	                                        <div class="tg-description">
	                                            <p><?= $s->JUDUL?></p>
	                                        </div>
	                                        <a class="tg-btn tg-btnicon" href="<?=  base_url()?>berita/read/<?= $tgl.'/'.$bln.'/'.$thn.'/'.$s->LINK.'.html'; ?>">
	                                            <span>Selanjutnya...</span>
	                                        </a>
	                                    </div>
	                                </div>

	                                    <?php } ?>
	                                </div>
	                            </div>
								<div class="tg-widget tg-widgetnoticeboard">
                                    <div class="tg-borderheading sidebar">
									<div class="split"></div>
                                        <h2>&nbsp;Berita Populer</h2>
                                    </div>
									<div class="tg-widgetcontent">
										<?php
                                        foreach ($artikelacak as $slidebar) {
                                        	$jdl = str_replace(" ","-",$slidebar->JUDUL);
                                        	 $tanggal = substr($slidebar->TANGGALARTIKEL, 0,10);
                                    $hari   = date('N', strtotime($tanggal)); 
                                                     $day = array('','Senin','Selasa', 'Rabu','Kamis','Jumat','Sabtu','Ahad');
                                                     $bln = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                                                     $tgl   = date('d ', strtotime($tanggal)).$bln[date('n', strtotime($tanggal))].date(' Y ', strtotime($tanggal)); 
                                            # code...
														$t = $slidebar->TANGGALARTIKEL;
                                                     $tg = substr($t, 8,2);
                                                     $b = substr($t, 5,2);
                                                     $th = substr($t, 0,4);
                                        
                                        ?>
                                        <!-- <article class="tg-campus tg-campusleftthumb">
                                            <figure class="tg-featuredimg">
                                                <a href="" style="width: 60px; height: 60px; overflow: hidden;position: relative;">
                                                    <img style="position: absolute;left: 0px;top: 0px;width: 100%;height: 100%" src="<?= base_url('uploads/artikel/'.$slidebar->GAMBAR)?>" alt="ihmage descrhiption">
                                                </a>
                                            </figure>
                                            <div class="tg-campuscontent">
                                                <ul class="tg-matadata">
                                                    <li>
                                                        <a href="">
                                                            <i class="fa fa-calendar"></i>
                                                            <span><?= $day[$hari].','.$tgl ?></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tg-campustitle">
                                                    <h3><a href="<?=  base_url()?>berita/read/<?= $slidebar->IDARTIKEL.'/'.$slidebar->LINK.'.html'; ?>"><?= $slidebar->JUDUL?></a></h3>
                                                </div>
                                            </div>
                                        </article> -->

                                        <article class="tg-campus tg-campusleftthumb">
											<figure class="tg-featuredimg" style="width: 60px; height: 100%; overflow: hidden;position: relative;">
												<a href="javascript:void(0);">
													<img width="100%" src="<?= base_url('uploads/artikel/'.$slidebar->GAMBAR)?>" alt="image description">
												</a>
											</figure>
											<div class="tg-campuscontent">
												<ul class="tg-matadata">
                                                    <li>
                                                        <a href="<?=  base_url()?>berita/read/<?= $tg.'/'.$b.'/'.$th.'/'.$slidebar->LINK.'.html'; ?>">
                                                            <i class="fa fa-calendar"></i>
                                                            <span><?= $day[$hari].','.$tgl ?></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tg-campustitle">
                                                    <h3><a href="<?=  base_url()?>berita/read/<?= $tg.'/'.$b.'/'.$th.'/'.$slidebar->LINK.'.html'; ?>"><?= $slidebar->JUDUL?></a></h3>
                                                </div>
											</div>
										</article>
                                    <?php } ?>
                                    <!-- <ul>
											<li>
												<a href="">Adipisicing elit sed dotas eiusmod tempor incididunt utae labore etiat dolore magna aliqua enim ad minim veniam.</a>
											</li>
											<li>
												<a href="">Labore etiat dolore magna aliqua enim ad minim veniam.</a>
											</li>
											<li>
												<a href="">Duis aute irure dolor in reprehenderit.</a>
											</li>
										</ul> -->
									</div>
								</div>

								<div class="tg-widget tg-widgetnoticeboard">
									<div class="tg-borderheading sidebar">
									<div class="split"></div>
                                        <h2>&nbsp;Berita Lainnya</h2>
                                    </div>
									<div class="tg-widgetcontent">
										<ul>

										<?php
                                        foreach ($SemuaArtikel as $slidebar) {
                                        	$jdl = str_replace(" ","-",$slidebar->JUDUL);
                                        	 $tanggal = substr($slidebar->TANGGALARTIKEL, 0,10);
                                    $hari   = date('N', strtotime($tanggal)); 
                                                     $day = array('','Senin','Selasa', 'Rabu','Kamis','Jumat','Sabtu','Ahad');
                                                     $bln = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                                                     $tgl   = date('d ', strtotime($tanggal)).$bln[date('n', strtotime($tanggal))].date(' Y ', strtotime($tanggal)); 
                                            # code...

                                        		$t = $slidebar->TANGGALARTIKEL;
                                                     $tgl = substr($t, 8,2);
                                                     $bln = substr($t, 5,2);
                                                     $thn = substr($t, 0,4);
                                        ?>
											<li>
												<a href="<?=  base_url()?>berita/read/<?= $tgl.'/'.$bln.'/'.$thn.'/'.$slidebar->LINK.'.html'; ?>"><?= substr($slidebar->JUDUL, 0, 100)?></a>
											</li>

                                    <?php } ?>
										</ul>
									</div>
								</div>
								
										<?php
										$sql = $this->db->order_by('IDARTIKEL','DESC');
										$sql = $this->db->limit(1);
										$sql =	$this->db->get_where('tartikel_md',array('KATEGORI'=>'informasi'))->result();
										foreach ($sql as $s) {
											# code...

                                $jdl = str_replace(" ","-",$s->JUDUL);
										$t = $s->TANGGALARTIKEL;
                                                     $tgl = substr($t, 8,2);
                                                     $bln = substr($t, 5,2);
                                                     $thn = substr($t, 0,4);
										?>
							<!-- 	<div class="tg-widget tg-widgetadmissionform">
									<div class="tg-widgetcontent">
										<h3>Informasi Utama</h3>
										<div class="tg-description">
											<p><?= $s->JUDUL?></p>
										</div>
										<a class="tg-btn tg-btnicon" href="<?=  base_url()?>berita/read/<?= $tgl.'/'.$bln.'/'.$thn.'/'.$s->LINK.'.html'; ?>">
											<span>Selanjutnya...</span>
										</a>
									</div>
								</div> -->

									<?php } ?>
									
                                <div class="tg-widget tg-widgetadmissionform">
                                    <div class="tg-borderheading sidebar">
                                    <div class="split"></div>
                                        <h2>&nbsp;Tags</h2>
                                    </div>
                                    <div class="tg-tags">
                                        <?php
                                        $sql = $this->db->get('ttags_md')->result();
                                        foreach ($sql as $k) {

                                        ?>
                                                <a target="_blank" class="tg-tag" href="<?= $k->LINK?>"><?= $k->TAMPILLINK?></a>
                                            <?php } ?>
                                            </div>
                                </div>
									
                                <div class="tg-widget tg-widgetadmissionform">
                                    <div class="tg-borderheading sidebar">
                                    <div class="split"></div>
                                        <h2>&nbsp;Follow US</h2>
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
                                    </div>
                                    <div class="tg-tags">
                                    	<a target="_blank" href="<?= $fb ?>">
                                    		<img src="<?= base_url('fbb.png')?>">
                                    	</a>
                                    	<a target="_blank" href="<?= $ig?>">
                                    		<img src="<?= base_url('igg.png')?>">
                                    	</a>
                                    </div>
                                </div>
                                <div class="tg-widget tg-widgetadmissionform">
                                    <div class="tg-borderheading sidebar">
									<div class="split"></div>
                                        <h2>&nbsp;Facebook</h2>
                                    </div>
                                    
                                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsmkpb.waru%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=668910424247774" width="" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>


                                </div>
                                <div class="tg-widget tg-widgetadmissionform">
                                    <div class="tg-borderheading sidebar">
									<div class="split"></div>
                                        <h2>&nbsp;Instagram</h2>
                                    </div>
                                    
                                    

                                    
                                </div>
								
							</aside>
						</div>