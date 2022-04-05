
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
                                            
                                           <?php 
                                foreach ($user as $r) {
                                                 ?>
                                                 
                                        <div class="row">
                                    <div class="col-md-2">
                                    <img width="100%" src="<?= base_url('uploads/artikel/'.$r->GAMBAR)?>" alt="image description">
                                    </div>
                                    <div class="col-md-10">
                                        <b><?= $r->NAMATESTI?></b><br>
                                        <span>Lulus : Tahun <?= $r->LULUS?></span><br>
                                        <span><?= $r->JABATAN?> di <?= $r->KANTOR?></span>
                                        <?= '<p align="justify">'.substr($r->TESTIMONI,0,1000).'</p>';
                                                ?>
                                    </div>

                                
                                        </div>
                                <?php } ?>
                                            
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