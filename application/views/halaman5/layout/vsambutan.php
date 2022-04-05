
        <div id="slisseshow-mudah" class="carousel slide" data-ride="carousel" style="width:100%; border: 1px solid red;">
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
              <div class="item <?= $k ?>">
                <img width="100%" alt="slideshow-mudah" src="<?php echo base_url('uploads/' . $row->GAMBAR) ?>">
                <!—Gambar -->
                  <div class="carousel-caption">
                    <!--Penjelasan 
                                <h3>Slide 1 (Judul)</h3>
                                <p>Ini adalah Slide 1 (Penjelasan)</p>-->
                  </div>
              </div>
            <?php $no++;
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