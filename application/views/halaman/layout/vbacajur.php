
  <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
    <div id="tg-content" class="tg-content">
    	<?php  foreach ($dataartikel as $row) {

	    ?>
        <section class="tg-sectionspace tg-haslayout">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-glanceatuoeandk tg-glanceatuoeandkvtwo">
                        <div class="tg-borderheading sidebar">
									<div class="split"></div>
                                        <h2>&nbsp;Keahlian</h2>
                        </div>
                        <article class="tg-themepost tg-newspost">
							<!-- <figure class="tg-featuredimg">
                                <a href="javascript:void(0);" >
                                    <img style="float: left;" src="<?= base_url('uploads/artikel/'.$row->GAMBAR)?>" alt="image description">
                                </a>
                            </figure> -->
                            <div class="tg-themeposttitle">
									<h4 id="judul-bg" style="font-weight:bold"><?= ucfirst(strtolower($row->NAMAPRODI)) ?></h4>
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
								</div>


								<img style="float: left;width: 350px;margin-right: 10px" src="<?= base_url('uploads/artikel/'.$row->GAMBAR)?>" alt="image description">
								<?= $row->URAIAN ?> 
						</article>
                    </div>
                </div>
                
            </div>
        </section>
        <?PHP } ?>
        

        
    </div>
</div>