
                       
  <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                            <div id="tg-content" class="tg-content">
                                <section class="tg-sectionspace tg-haslayout">
                                    <div class="sidebar">
                                        <h2>Sambutan</h2>
                                    </div>

                                    <div class="tg-shortcode tg-welcomeandgreeting">
                                        <figure><img src="<?= base_url('assets/images/img-03.jpg')?>"alt="image description"></figure>
                                        <div class="tg-shortcodetextbox">
                                            <h2>Sambutan Kepala Sekolah &amp; Greetings!</h2>
                                            <div class="tg-description">
                                                <?= $_SERVER['SERVER_NAME']?>
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt labore et dolore amit agna aliqua enimnate minim veniam quis nostrud exercitation ullamco laboris nisi utiata ...</p>
                                            </div>
                                            <span class="tg-name">Prof. Donovan Bradburn</span>
                                            <span class="tg-designation">Vice Chancellor</span>
                                            <div class="tg-btnpluslogo">
                                                <a class="tg-btn" href="javascript:void(0);">read more</a>
                                                <strong class="tg-universitylogo"><a href="javascript:void(0);"><img src="<?= base_url('assets/images/logo2.png')?>" alt="image description"></a></strong>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="tg-sectionspace tg-haslayout">
                                    <div class="sidebar">
                                        <h2>Informasi Terbaru</h2>
                                    </div>

                                    <div class="tg-events">
                                        <div class="row  tg-resultandstyle">
                                            

                                             <?php
                                              
                                             // $no = $this->uri->segment('3') + 1;
                                             // foreach($user as $u){
                                             ?>
                                            <?php
                                           // $no = $this->uri->segment('3') + 1;
                                                foreach ($user as $row) {
                                                    # code...
                                                   $jdl = str_replace(" ","-",$row->JUDUL);
                                                   $tanggal = substr($row->TANGGALARTIKEL, 0,10);
                                                     $hari   = date('N', strtotime($tanggal)); 
                                                     $day = array('','Senin','Selasa', 'Rabu','Kamis','Jumat','Sabtu');
                                                     $bln = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                                                     $tgl   = date('d ', strtotime($tanggal)).$bln[date('n', strtotime($tanggal))].date(' Y ', strtotime($tanggal)); 
                                                     //echo "Tanggal $tanggal adalah hari " . $hari;
                                                     // Tanggal 2017-01-31 adalah hari Tuesday
                                                
                                            ?>
                                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 ">
                                                <article class="tg-themepost tg-eventpost ">
                                                    <figure class="tg-featuredimg">
                                                        <a href="javascript:void(0);" style="width: 100%; height: 120px; overflow: hidden;position: relative;">
                                                            <img src="<?= base_url('uploads/artikel/'.$row->GAMBAR)?>" alt="image description">
                                                        </a>
                                                    </figure>
                                                    <div class="tg-themepostcontent">
                                                        <ul class="tg-matadata">
                                                            <li>
                                                                <a href="<?=  base_url()?>berita/read/<?= $row->IDARTIKEL.'/'.$jdl.'.html'; ?>">
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span><?= $day[$hari].','.$tgl ?></span>
                                                                </a>
                                                                <!-- <a href="<?=  base_url()?>berita/read/<?= $row->IDARTIKEL.'/'.$jdl.'.html'; ?>">
                                                                    <i class="fa fa-user"></i>
                                                                    <span>Oleh :<?= $row->USERNAME ?></span>
                                                                </a> -->
                                                            </li>
                                                        </ul>
                                                        <div class="tg-themeposttitle">
                                                            <h3><a href="<?=  base_url()?>berita/read/<?= $row->IDARTIKEL.'/'.$jdl.'.html'; ?>"><?= $row->JUDUL." ".strlen($row->JUDUL) ?></a></h3>
                                                        </div>
                                                        <div class="tg-description">
                                                            <p><?= substr($row->SUB,0,50) ?>... <a href="<?=  base_url()?>berita/read/<?= $row->IDARTIKEL.'/'.$jdl.'.html'; ?>">Baca Selanjutnya</a></p>
                                                        </div>
                                                    </div>
                                                    
                                                </article>
                                            </div>

                                            <?php } ?>

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center">
                                                <center class="tg-themepost tg-eventpost">
                                                    <?php echo $this->pagination->create_links(); ?>
                                                </center>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </section>
                                <section class="tg-sectionspace tg-haslayout">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                            <div class="tg-glanceatuoeandk tg-glanceatuoeandkvtwo">
                                                <div class="tg-borderheading">
                                                    <h2>Glance at UOE&amp;K</h2>
                                                </div>
                                                <ul class="tg-gallery">
                                                    <li>
                                                        <figure>
                                                            <a class="tg-btnview" href="images/glance/img-22.jpg')?>" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
                                                            <img src="<?= base_url('assets/images/glance/img-22.jpg')?>" alt="image description">
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <a class="tg-btnview" href="images/glance/img-01.jpg')?>" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
                                                            <img src="<?= base_url('assets/images/glance/img-01.jpg')?>" alt="image description">
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <a class="tg-btnview" href="images/glance/img-02.jpg')?>" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
                                                            <img src="<?= base_url('assets/images/glance/img-02.jpg')?>" alt="image description">
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <a class="tg-btnview" href="images/glance/img-03.jpg')?>" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
                                                            <img src="<?= base_url('assets/images/glance/img-03.jpg')?>" alt="image description">
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <a class="tg-btnview" href="images/glance/img-04.jpg')?>" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
                                                            <img src="<?= base_url('assets/images/glance/img-04.jpg')?>" alt="image description">
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <a class="tg-btnview" href="images/glance/img-05.jpg')?>" data-rel="prettyPhoto[glance]"><i class="icon-magnifier"></i></a>
                                                            <img src="<?= base_url('assets/images/glance/img-05.jpg')?>" alt="image description">
                                                        </figure>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                            <div class="tg-widget tg-widgetquicklinks tg-widgetquicklinksvtwo">
                                                <div class="tg-borderheading">
                                                    <h2>Quick Links</h2>
                                                </div>
                                                <div class="tg-widgetcontent">
                                                    <ul>
                                                        <li><a href="javascript:void(0);">Downloads Function Form</a></li>
                                                        <li><a href="javascript:void(0);">Admissions Guidline For New Students</a></li>
                                                        <li><a href="javascript:void(0);">UOE&amp;K Online Library</a></li>
                                                        <li><a href="javascript:void(0);">Multimedia and Entertainment</a></li>
                                                        <li><a href="javascript:void(0);">Annual Holiday Trip to Dubai 2017</a></li>
                                                        <li><a href="javascript:void(0);">Student Advisory June 27,2017</a></li>
                                                        <li><a href="javascript:void(0);">Parents Meeting 2017</a></li>
                                                        <li><a href="javascript:void(0);">Overseas &amp; E-Learning</a></li>
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
                                                            <img src="<?= base_url('assets/images/themepost/img-05.jpg')?>" alt="image description">
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
                                                            <img src="<?= base_url('assets/images/themepost/img-06.jpg')?>" alt="image description">
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
                                                            <img src="<?= base_url('assets/images/themepost/img-07.jpg')?>" alt="image description">
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
                                                            <img src="<?= base_url('assets/images/themepost/img-05.jpg')?>" alt="image description">
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
                                                            <img src="<?= base_url('assets/images/themepost/img-06.jpg')?>" alt="image description">
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
                                                            <img src="<?= base_url('assets/images/themepost/img-07.jpg')?>" alt="image description">
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
                                </section>

                                <section class="tg-sectionspace tg-haslayout">
                                    <div class="tg-latestnews">
                                        <div class="tg-borderheading">
                                            <h2>Latest News</h2>
                                        </div>
                                        <div id="tg-latestnewsslider" class="tg-latestnewsslider owl-carousel tg-dposts">
                                            <div class="item">
                                                <article class="tg-themepost tg-newspost">
                                                    <figure class="tg-featuredimg">
                                                        <a href="javascript:void(0);">
                                                            <img src="<?= base_url('assets/images/themepost/img-05.jpg')?>" alt="image description">
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
                                                            <img src="<?= base_url('assets/images/themepost/img-06.jpg')?>" alt="image description">
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
                                                            <img src="<?= base_url('assets/images/themepost/img-07.jpg')?>" alt="image description">
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
                                                            <img src="<?= base_url('assets/images/themepost/img-05.jpg')?>" alt="image description">
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
                                                            <img src="<?= base_url('assets/images/themepost/img-06.jpg')?>" alt="image description">
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
                                                            <img src="<?= base_url('assets/images/themepost/img-07.jpg')?>" alt="image description">
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
                                </section>
                            </div>
                        </div> -->