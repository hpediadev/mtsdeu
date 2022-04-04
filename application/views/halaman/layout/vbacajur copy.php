  <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
    <div id="tg-content" class="tg-content">
    	<?php  foreach ($dataartikel as $row) {

	    ?>
        <section class="tg-sectionspace tg-haslayout">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-glanceatuoeandk tg-glanceatuoeandkvtwo">
                        <div class="tg-borderheading sidebar">
                        <div class="split">s</div>
                            <h2>&nbsp;&nbsp;Keahlian</h2>
                        </div>
                        <article class="tg-themepost tg-newspost">
							<!-- <figure class="tg-featuredimg">
                                <a href="javascript:void(0);" >
                                    <img style="float: left;width: 300px" src="<?= base_url('uploads/artikel/'.$row->GAMBAR)?>" alt="image description">
                                </a>
                            </figure> -->
                            <div class="tg-themeposttitle">
									<h4><?= ucfirst(strtolower($row->NAMAPRODI)) ?></h4>
								</div>

								<img style="float: left;width: 150px;margin-right: 10px" src="<?= base_url('uploads/artikel/'.$row->GAMBAR)?>" alt="image description">
								<?= $row->URAIAN ?> 
						</article>
                    </div>
                </div>
                
            </div>
        </section>
        <?PHP } ?>
        

        
    </div>
</div>