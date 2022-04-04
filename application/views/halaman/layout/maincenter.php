                   
  <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
        <div id="tg-content" class="tg-content">
            <section class="tg-sectionspace tg-haslayout">
               
    <div class="row" >

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: -10px;" >
        <!-- S -->
        <div id="slideshow-mudah" class="carousel slide" data-ride="carousel" >
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
              <div class="item <?= $k ?>" >
                <img width="100%"  alt="slideshow-mudah" src="<?php echo base_url('uploads/' . $row->GAMBAR) ?>">
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
       
      </div>
  </div>
            </section>
            <section class="tg-sectionspace tg-haslayout">
                <div class="tg-shortcode tg-welcomeandgreeting">

                            <?php foreach($data->result() as $r){ ?>
                    <figure ><img style="width:200px;hleight:250px" src="<?= base_url('uploads/artikel/'.$r->GAMBAR)?>" alt="image description"></figure>
                    <div class="tg-shortcodetextbox">
                        <h2>Sambutan Kepala Sekolah</h2>
                        <div class="tg-description">
                            <?php
                                echo "<p>".substr($r->SAMBUTAN,0,400)."</p>";
                            }?>
                        </div>
                        <span class="tg-name"><b>NURHASAN, S.Pd</b></span>
                        <span class="tg-designation">Kepala Madrasah</span>
                        <div class="tg-btnpluslogo">
                            <a class="tg-btn" href="<?= base_url('sambutan/')?>">Selengkapnya...</a>
                           <!--  <strong class="tg-universitylogo"><a href="javascript:void(0);"><img src="<?= base_url('uploads/' . $u->LOGO) ?>" alt="image description"></a></strong> -->
                        </div>
                    </div>
                </div>
            </section>
            <section class="tg-sectionspace tg-haslayout">
                <div class="tg-borderheading sidebar">
                <div class="split"></div>
                    <h2>&nbsp;Berita Terbaru</h2>
                </div>
                <!-- <div class="tg-borderheading">
                    <h2>Latest Events</h2>
                </div> -->
                <div class="tg-events">
                    <div class="row">
                        <?php

                        $a = 5000000*2.5/100;
                        // echo $a;
                        // $no = $this->uri->segment('3') + 1;
                            foreach ($latest as $row) {
                                # code...
                                $jdl = str_replace(" ","-",$row->JUDUL);
                                $tanggal = substr($row->TANGGALARTIKEL, 0,10);
                                   $hari   = date('N', strtotime($tanggal)); 
                                                     $day = array('','Senin','Selasa', 'Rabu','Kamis','Jumat','Sabtu','Ahad');
                                                     $bln = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                                                     $tgl   = date('d ', strtotime($tanggal)).$bln[date('n', strtotime($tanggal))].date(' Y ', strtotime($tanggal)); 
                                    //echo "Tanggal $tanggal adalah hari " . $hari;
                                    // Tanggal 2017-01-31 adalah hari Tuesday

                                $tg = substr($tanggal,8,2);
                                $bl = substr($tanggal,5,2);
                                $th = substr($tanggal,0,4);
                        ?>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <article class="tg-themepost tg-eventpost">
                                <figure class="tg-featuredimg">
                                <a href="<?=  base_url()?>berita/read/<?= $tg.'/'.$bl.'/'.$th.'/'.$row->LINK.'.html'; ?>" style="width: 100%; height: 150px; overflow: hidden;position: relative;">
                                        <img src="<?= base_url('uploads/artikel/'.$row->GAMBAR)?>" alt="image description">
                                    </a>
                                    <!-- <a href="javascript:void(0);">
                                        <img src="<?= base_url('uploads/artikel/'.$row->GAMBAR)?>" alt="image description" alt="image description">
                                    </a> -->
                                </figure>
                                <div class="tg-themepostcontent">
                                    <ul class="tg-matadata">
                                        <li>
                                            <a href="<?=  base_url()?>berita/read/<?= $tg.'/'.$bl.'/'.$th.'/'.$row->LINK.'.html'; ?>">
                                                <i class="fa fa-calendar"></i>
                                                <span><?= $day[$hari].', '.$tgl ?></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tg-themeposttitle">
                                        <h3><a href="<?=  base_url()?>berita/read/<?= $tg.'/'.$bl.'/'.$th.'/'.$row->LINK.'.html'; ?>"><?= $row->JUDUL ?></a></h3>
                                    </div>
                                    <div class="tg-description">
                                        <p><?= substr($row->URAIAN,0,50) ?>... <a href="<?=  base_url()?>berita/read/<?= $tg.'/'.$bl.'/'.$th.'/'.$row->LINK.'.html'; ?>">Baca Selanjutnya</a></p>
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
            <section class="tg-sectionspace tg-haslayout">
                <div class="tg-borderheading sidebar">
                <div class="split"></div>
                    <h2>&nbsp;Apa Kata ALumni? </h2>
                </div>
                <!-- <div class="tg-borderheading">
                    <h2>Latest Events</h2>
                </div> -->
                <div class="tg-events">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-widget tg-widgetcampuses">
                                    <div class="tg-widgettitle">
                                        <h3>&nbsp;</h3>
                                    </div>
                                    <div class="tg-widgetcontent">
                                        <div id="tg-campusslider" class="tg-campusslider owl-carousel tg-campuses">
                                            <?php 
                                            foreach($datatesti as $r){
                                             ?>
                                            <div class="item">
                                                <div class="tg-shortcode tg-welcomeandgrgeeting">
                                                    <div class="tg-shortclodetextbox" style="text-align:center;">
                                                        <center><img style="width:130px;height:130px;border-radius: 130px;text-align: center;" src="<?= base_url('uploads/artikel/'.$r->GAMBAR)?>" alt="image description"></center>
                                                        
                                                        <div class="tg-description">
                                                            <br>
                                                           <?= $r->TESTIMONI?>
                                                        <br>
                                                        </div>
                                                        <span class="tg-name"><b><u><?= $r->NAMATESTI?></u></b></span>
                                                        <span class="tg-designation"><?= $r->JABATAN.' di <b>'.$r->KANTOR.'</b>'?></span>
                                                            
                                                            <div>
                                                                <?php
                                                                $bintang='start-o';
                                                                 for ($i=1; $i < 6 ; $i++) { 
                                                                    if($i <= $r->NILAI)
                                                                    {
                                                                        $bintang = 'star';
                                                                    }
                                                                    else{
                                                                        $bintang = 'star-o';
                                                                    }
                                                                        ?>
                                                                <span style="color:orange;"><i class="fa fa-<?= $bintang ?>"></i></span>
                                                            <?php } ?>
                                                            </div>
                                                           
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        <?php } ?>
                                        </div>
                                    </div>
                                </div>
                           <!--  <article class="tg-themepost tg-eventpost">
                               <?php
                               $sp = $this->db->get('tlembaga_md')->result();
                               $youtube='';
                               foreach ($sp as $lem) {
                                $youtube = $lem->YOUTUBE;
                               }
                               ?>
                                <div class="tg-themepostcontent">
                                   <iframe width="100%" height="515" src="https://www.youtube.com/embed/<?= $youtube ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </article> -->
                        </div>
                        
                    </div>
                </div>
            </section>
            
            <!-- <section class="tg-sectionspace tg-haslayout">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="tg-glanceatuoeandk tg-glanceatuoeandkvtwo">
                            <div class="tg-borderheading">
                                <h2>Glance at UOE&amp;K</h2>
                            </div>
                            <ul class="tg-gallery">
                                <li>
                                    <figure>
                                        <a class="tg-btnview" href="images/glance/img-22.jpg" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
                                        <img src="images/glance/img-22.jpg" alt="image description">
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <a class="tg-btnview" href="images/glance/img-01.jpg" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
                                        <img src="images/glance/img-01.jpg" alt="image description">
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <a class="tg-btnview" href="images/glance/img-02.jpg" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
                                        <img src="images/glance/img-02.jpg" alt="image description">
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <a class="tg-btnview" href="images/glance/img-03.jpg" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
                                        <img src="images/glance/img-03.jpg" alt="image description">
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <a class="tg-btnview" href="images/glance/img-04.jpg" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
                                        <img src="images/glance/img-04.jpg" alt="image description">
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <a class="tg-btnview" href="images/glance/img-05.jpg" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
                                        <img src="images/glance/img-05.jpg" alt="image description">
                                    </figure>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="tg-widget tg-widgetquicklinks tg-widgetquicklinksvtwo">
                            <div class="tg-borderheading">
                                <h2>Link Sekolah</h2>
                            </div>
                            <div class="tg-widgetcontent">
                                <ul>
                                    <li><a href="javascript:void(0);">PPDB</a></li>
                                    <li><a href="javascript:void(0);">E-Learning</a></li>
                                    <li><a href="javascript:void(0);">Osis</a></li>
                                    <li><a href="javascript:void(0);">PPDB</a></li>
                                    <li><a href="javascript:void(0);">PPDB</a></li>
                                    <li><a href="javascript:void(0);">PPDB</a></li>
                                    <li><a href="javascript:void(0);">PPDB</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tg-sectionspace tg-haslayout">
                <div class="tg-latestnews">
                    <div class="tg-borderheading">
                        <h2>Latest News</h2>
                    </div>
                    <div id="tg-latestnewsslider" class="tg-latestnewsslider owl-carousel tg-posts">
                        <div class="item">
                            <article class="tg-themepost tg-newspost">
                                <figure class="tg-featuredimg">
                                    <a href="javascript:void(0);">
                                        <img src="images/themepost/img-05.jpg" alt="image description">
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
                                        <h3><a href="javascript:void(0);">Allotment of Hostel Accommodation 2017!</a></h3>
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
                                        <img src="images/themepost/img-06.jpg" alt="image description">
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
                                        <h3><a href="javascript:void(0);">Notification of Mid Term Examinations</a></h3>
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
                                        <img src="images/themepost/img-07.jpg" alt="image description">
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
                                        <h3><a href="javascript:void(0);">Invites Application for Admission in Designing Program</a></h3>
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
                                        <img src="images/themepost/img-05.jpg" alt="image description">
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
                                        <h3><a href="javascript:void(0);">Allotment of Hostel Accommodation 2017!</a></h3>
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
                                        <img src="images/themepost/img-06.jpg" alt="image description">
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
                                        <h3><a href="javascript:void(0);">Notification of Mid Term Examinations</a></h3>
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
                                        <img src="images/themepost/img-07.jpg" alt="image description">
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
                                        <h3><a href="javascript:void(0);">Invites Application for Admission in Designing Program</a></h3>
                                    </div>
                                    <div class="tg-description">
                                        <p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href="javascript:void(0);">Read More</a></p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="tg-btnsbox">
                        <a class="tg-btn" href="javascript:void(0);">view all news</a>
                    </div>
                </div>
            </section> -->
        </div>
    </div>