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
                                                  <h2>&nbsp;Sejarah</h2>
                                  </div>
                                      <div class="tg-themeposttitle">
          									<h4><?= $row->JUDUL ?></h4>
          								</div>
          								<img style="float: left;width: 200px;margin-right: 10px" src="<?= base_url('uploads/artikel/'.$row->GAMBAR)?>" alt="image description">
          								<?= $row->SAMBUTAN?>
                          <center><b>MOH. BA'IN, S.Pd</b><br>Kepala Sekolah</center>
                        
                    </div>
                </div>
            </div>
        </section>
        
        <?PHP } ?>
        

        
    </div>
</div>