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
                                        <h2>&nbsp;Struktur Organisasi</h2>
                        </div>
                        <article class="tg-themepost tg-newspost">
							<figure class="tg-featuredimg">
                                    <img width="100%" src="<?= base_url('uploads/artikel/'.$row->STRUKTUR)?>" alt="image description">
                            </figure>
                            

						</article>
                    </div>
                </div>
                
            </div> 
        </section>
        <?PHP } ?>
        

        
    </div>
</div>