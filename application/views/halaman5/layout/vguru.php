                   
  <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
        <div id="tg-content" class="tg-content">
            <section class="tg-sectionspace tg-haslayout">
                <div class="tg-borderheading sidebar">
                <div class="split"></div>
                    <h2>&nbsp;Data Guru dan Staf</h2>
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
                                                     $tgl   = date('d ', strtotime($tanggal)).$bln[date('n', strtotime($tanggal))].date(' Y ', strtotime($tanggal)); 
                                    //echo "Tanggal $tanggal adalah hari " . $hari;
                                    // Tanggal 2017-01-31 adalah hari Tuesday

                                $tg = substr($tanggal,8,2);
                                $bl = substr($tanggal,5,2);
                                $th = substr($tanggal,0,4);
                            }
                            $n=0;
                           foreach ($guru->result() as $row) {
                               // code...
                            $n++;
                            $jk='';
                            if($row->JKGURU==1){
                              $jk = 'Laki-laki';
                            }
                            else if($row->JKGURU==2){
                              $jk = 'Perempuan';
                            }
                            $jb='';
                            if($row->JABATAN==1){
                              $jb = 'Kepala Sekolah';
                            }
                            else if($row->JABATAN==2){
                              $jb = 'Waka Kurikulum';
                            }
                            else if($row->JABATAN==3){
                              $jb = 'Waka Humas';
                            }
                            else if($row->JABATAN==4){
                              $jb = 'Waka Kesiswaan';
                            }
                            else if($row->JABATAN==5){
                              $jb = 'BK';
                            }
                            else if($row->JABATAN==6){
                              $jb = 'Tata Usaha';
                            }
                            else if($row->JABATAN==7){
                              $jb = 'Operator';
                            }
                            else if($row->JABATAN==8){
                              $jb = 'Guru';
                            }
                                ?>

                        
                       <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                        <article class="tg-themepost tg-course">
                            <figure class="tg-featuredimg">
                                <a href="javascript:void(0);">
                                    <img src="<?= base_url('uploads/artikel/'.$row->GAMBARGURU)?>" alt="image description">
                                </a>
                            </figure>
                            <div class="tg-themepostcontent">
                                <div class="tg-themeposttitle" style="text-align:center">
                                    <b style="font-size: 13px;text-align: center;" id="warna2-bg"><u><?= $row->NAMAGURU?></u></b><br>
                                    <span><?= $jb ?></span>
                                    <div style="font-size: 20px;">
                                        <i class="fa fa-facebook"></i> |
                                        <i class="fa fa-instagram"></i> |
                                        <i class="fa fa-twitter"></i> 
                                    </div>
                                </div>
                                
                            </div>
                        </article>
                    </div>
                    <?php 
                        if($n%4==0)
                            echo '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center">&nbsp;</div>';
                } ?>
                        
                     <!--    <div class="cols-xs-6 s-sm-6 col-md-3 col-lg-3 mb-2">
                            <div class="tg-shortcode tlg-welcomeandgreeting" >

                                        <figure ><img styale="width:200px;hleight:250px" src="https://www.smkpbwaru.sch.id/uploads/artikel/2022-01-08%2011-01-48-foto-slide.jpg" alt="image description"></figure>

                                <center>
                                    <b style="font-size: 13px;color:;" id="warna2-bg"><u><?= $row->NAMAGURU?></u></b><br>
                                    <?= $jb?><br>
                                    <div style="font-size: 20px;">
                                    <i class="fa fa-facebook"></i> |
                                    <i class="fa fa-instagram"></i> |
                                    <i class="fa fa-twitter"></i> 
                                </div>
                                </center>
                        </div>
                                    
                    </div> -->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center">
                            <center class="tg-themepost tg-eventpost">
                                <?php echo $this->pagination->create_links(); ?>
                            </center>
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