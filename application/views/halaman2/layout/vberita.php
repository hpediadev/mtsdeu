
<style type="text/css">
    .aku{
        background-color: red;
    }
    .aku:hove{
        background-color: blue;
    }
    .aku:active{
        background-color: yellow;
    } 
</style>
  <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                            <div id="tg-content" class="tg-content">
                                
                                <section class="tg-sectionspace tg-haslayout">
                                     <div class="tg-borderheading sidebar">
									<div class="split"></div>
                                        <h2>&nbsp;Berita</h2>
                                    </div>
                                    <!-- <div class="tg-borderheading">
                                        <h2>Latest Events</h2>
                                    </div> -->
                                    <div class="tg-events">
                                        <div class="row">
                                            
                                            <?php
                                           // $no = $this->uri->segment('3') + 1;
                                                foreach ($user as $row) {
                                                    # code...
                                                   $jdl = str_replace(" ","-",$row->JUDUL);
                                                   $tanggal = substr($row->TANGGALARTIKEL, 0,10);
                                                     $hari   = date('N', strtotime($tanggal)); 
                                                     $day = array('','Senin','Selasa', 'Rabu','Kamis','Jumat','Sabtu','Ahad');
                                                     $bln = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                                                     $tg   = date('d ', strtotime($tanggal)).$bln[date('n', strtotime($tanggal))].date(' Y ', strtotime($tanggal)); 
                                                    // echo "Tanggal $tanggal adalah hari " . $hari;
                                                     // Tanggal 2017-01-31 adalah hari Tuesday

                                                     $t = $row->TANGGALARTIKEL;
                                                     $tgl = substr($t, 8,2);
                                                     $bln = substr($t, 5,2);
                                                     $thn = substr($t, 0,4);
                                                
                                            ?>
                                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                                <article class="tg-themepost tg-eventpost">
                                                    <figure class="tg-featuredimg">
                                                        
                                                        <a href="<?=  base_url()?>berita/read/<?= $tgl.'/'.$bln.'/'.$thn.'/'.$row->LINK.'.html'; ?>" style="width: 100%; height: 150px; overflow: hidden;position: relative;">
                                                            <img src="<?= base_url('uploads/artikel/'.$row->GAMBAR)?>" alt="image description">
                                                        </a>
                                                    </figure>
                                                    <div class="tg-themepostcontent">
                                                        <ul class="tg-matadata">
                                                            <li>
                                                                <a href="<?=  base_url()?>berita/read/<?= $tgl.'/'.$bln.'/'.$thn.'/'.$row->LINK.'.html'; ?>">
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span><?= $day[$hari].', '.$tg ?></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="tg-themeposttitle">
                                                            <h3><a href="<?=  base_url()?>berita/read/<?= $tgl.'/'.$bln.'/'.$thn.'/'.$row->LINK.'.html'; ?>"><?= $row->JUDUL; ?></a></h3>
                                                        </div>
                                                        <div class="tg-description">
                                                            <p><?= substr($row->URAIAN,0,50) ?>... <a href="<?=  base_url()?>berita/read/<?= $tgl.'/'.$bln.'/'.$thn.'/'.$row->LINK.'.html'; ?>">Baca Selanjutnya</a></p>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        <?php } ?>
                                            
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center">
                                                <center class="tg-themepost tg-eventpost">
                                                    <?php echo $this->pagination->create_links(); ?>
                                                </center>
                                            </div>
                                    </div>
                                </section>
                                <!-- <section class="tg-sectionspace tg-haslayout">
									<div class="tg-shortcode tg-welcomeandgreeting">
										<figure ><img style="width:200px;height:250px" src="<?= base_url('u.jpg')?>" alt="image description"></figure>
										<div class="tg-shortcodetextbox">
											<h2>Welcome &amp; Greetings!</h2>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt labore et dolore amit agna aliqua enimnate minim veniam quis nostrud exercitation ullamco laboris nisi utiata ...</p>
											</div>
											<span class="tg-name">Prof. Donovan Bradburn</span>
											<span class="tg-designation">Vice Chancellor</span>
											<div class="tg-btnpluslogo">
												<a class="tg-btn" href="javascript:void(0);">read more</a>
												<strong class="tg-universitylogo"><a href="javascript:void(0);"><img src="images/logo2.png" alt="image description"></a></strong>
											</div>
										</div>
									</div>
								</section> -->
                                
                                
                            </div>
                        </div>