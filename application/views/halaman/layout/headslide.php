
    <div class="row" >

<?php if($menu=="home" OR empty($menu)){  ?>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: -10px;">
        <!-- S -->
        <div id="slideshow-mudah" class="carousel slide" data-ride="carousel">
          <!-- Indicators, Ini adalah Tombol BULET BULET dibawah. item ini dapat dihapus jika tidak diperlukan -->
          <ol class="carousel-indicators">
            <?php
            $no = 0;
            $k = '';
            $nno = 0;
            $kk = '';

            $slide = $this->db->order_by('IDSLIDE ASC');
            $slide = $this->db->limit(3);
            $slide = $this->db->get('tslide_md')->result();
            foreach ($slide as $row) {
              if ($no == 0)
                $k = 'active';
              else
                $k = '';
              $idwows = 'wows1_' . $no;
            ?>
              <li data-target="#slideshow-mudah" data-slide-to="<?= $no ?>" class="<?= $k ?>"></li>
            <?php $no++;
            } ?>
          </ol>

          <!-- Wrapper for slides, Ini adalah Tempat Gambar-->
          <div class="carousel-inner">
            <?php
            $no = 0;
            $k = '';
            $nno = 0;
            $kk = '';

            $slide = $this->db->order_by('IDSLIDE ASC');
            $slide = $this->db->limit(3);
            $slide = $this->db->get('tslide_md')->result();
            foreach ($slide as $row) {
              if ($no == 0)
                $k = 'active';
              else
                $k = '';
              $idwows = 'wows1_' . $no;
            ?>
              <div class="item <?= $k ?>" style="height: 400px;">
                <img width="100%"  alt="slideshow-mudah" src="<?php echo base_url('uploads/' . $row->GAMBAR) ?>">
                <!—Gambar -->
                  <div class="carousel-caption">
                    <!--Penjelasan 
                                <h3>Slide 1 (Judul)</h3>
                                <p>Ini adalah Slide 1 (Penjelasan)</p>-->
                  </div>
              </div>

            <?php $no++;
            echo $menu;
            } ?>


          </div>

          <!-- Controls, Ini adalah Panah Kanan dan Kiri. item ini dapat dihapus jika tidak diperlukan-->
          <a class="left carousel-control" href="#slideshow-mudah" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#slideshow-mudah" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
       
      </div>
      <?php } ?>
      <div class="clearfix"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php $warna2="red"; ?>
                    <div class="tg-tickerbox">
                        <span style="background-color: <?= $warna2?>;">Informasi Terbaru :</span>
                        <div id="tg-ticker" class="tg-ticker owl-carousel">
                            <div class="item">
                                <div class="tg-description">
                                    <p>Info Pembekalan Tahun Praktik Kerja Lapangan akan dilakukan hari senin12 Juni 2022, Informasi Lebih Lanjut <a href="" style="background-color: <?= $warna2?>; padding: 2px;color: white;"><b> Klik Disini </b></a></p>
                                </div>
                            </div>
                             <div class="item">
                                <div class="tg-description">
                                    <p>Info Kegiatan KBM akan dilakukan hari senin12 Juni 2022, Informasi Lebih Lanjut <a href="" style="background-color: <?= $warna2?>; padding: 2px;padding-left: 2px;padding-right: 2px;color: white;"><b> Klik Disini </b></a></p>
                                </div>
                            </div>
                             <div class="item">
                                <div class="tg-description">
                                    <p>Info Wisuda Akhir Tahun  akan dilakukan hari senin12 Juni 2022, Informasi Lebih Lanjut <a href="" style="background-color: <?= $warna2?>; padding: 2px;color: white;"><b> Klik Disini </b></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>