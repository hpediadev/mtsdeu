
                        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                                    <div class="tg-borderheading sidebar">
                                        <h2>Sambutan Kepala Sekolah</h2>
                                    </div>
                            <aside id="tg-sidebar" class="tg-sidebar">
                                <div class="tg-widget">
                                    <div class="tg-widgetcontent">
                                        

                                        <form class="tg-formtheme tg-formsearch">
                                            <fieldset>
                                                <input type="search" name="search" class="form-control" placeholder="Start Your Search Here">
                                                <button type="submit" class="tg-btnsearch"><i class="icon-magnifier"></i></button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <div class="tg-widget tg-widgetnoticeboard">
                                    <div class="tg-borderheading">
                                        <h2>Berita Lainnya</h2>
                                    </div>
                                    <div class="tg-widgetcontent">
                                        <?php
                                        foreach ($artikelacak as $slidebar) {
                                            # code...

                                        
                                        ?>
                                        <article class="tg-campus tg-campusleftthumb">
                                            <figure class="tg-featuredimg">
                                                <a href="javascript:void(0);" style="width: 60px; height: 60px; overflow: hidden;position: relative;">
                                                    <img style="position: absolute;left: 0px;top: 0px;width: 100%;height: 100%" src="<?= base_url('uploads/artikel/'.$slidebar->GAMBAR)?>" alt="ihmage descrhiption">
                                                </a>
                                            </figure>
                                            <div class="tg-campuscontent">
                                                <ul class="tg-matadata">
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <i class="fa fa-calendar"></i>
                                                            <span><?= $this->uri->segment(3);?>Tuesday, Apr 21, 2017</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tg-campustitle">
                                                    <h3><a href="javascript:void(0);"><?= $slidebar->JUDUL?></a></h3>
                                                </div>
                                            </div>
                                        </article>
                                    <?php } ?>
                                        
                                    </div>
                                </div>
                                <div class="tg-widget tg-widgetnoticeboard">
                                    <div class="tg-borderheading">
                                        <h2>Berita Populer</h2>
                                    </div>
                                    <div class="tg-widgetcontent">
                                        <?php
                                        foreach ($artikelacak as $slidebar) {
                                            # code...
                                        
                                        ?>
                                        <article class="tg-campus tg-campusleftthumb">
                                            <figure class="tg-featuredimg">
                                                <a href="javascript:void(0);" style="width: 70px; height: 34px; overflow: hidden;position: relative;">
                                                    <img style="position: absolute;left: 0px;top: 0px;width: 100%" src="<?= base_url('uploads/artikel/'.$slidebar->GAMBAR)?>" alt="ihmage descrhiption">
                                                </a>
                                            </figure>
                                            <div class="tg-campuscontent">
                                                <ul class="tg-matadata">
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <i class="fa fa-calendar"></i>
                                                            <span>Tuesday, Apr 21, 2017</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tg-campustitle">
                                                    <h3><a href="javascript:void(0);"><?= $slidebar->JUDUL?></a></h3>
                                                </div>
                                            </div>
                                        </article>
                                    <?php } ?>
                                        
                                    </div>
                                </div>
                                <div class="tg-widget tg-widgetnoticeboard">
                                    <div class="tg-borderheading">
                                        <h2>Link</h2>
                                    </div>
                                    <div class="tg-widgetcontent ">
                                        <style type="text/css">
                                            .tg-btn-tags{
                                                border: solid 1px #000;
                                                background-color: #fff;
                                                height: 32px;
                                                padding: 0 17px;
                                                margin: 2px 2px 2px 2px;
                                            }
                                            .tg-btn-tags:hover{background-color: #DCDCDC;}
                                            .colortags{ color: #333;}
                                            .colortags:hover{ color: #333;}
                                        </style>
                                        <?php
                                            $q = $this->db->get_where('ttags_md', array('STATUSLINK' => 1))->result();
                                            foreach($q as $rowtags){
                                               // echo $rowtags->LINK;
                                        ?>
                                        <a target="-blank" href="<?= $rowtags->LINK;?>" class="colortags"><button type="submit" class="tg-btn-tags"><?= $rowtags->TAMPILLINK;?></button></a>
                                        <?php } ?>
                                        <!-- <button type="submit" class="tg-btn-tags">PPDB</button>
                                        <button type="submit" class="tg-btn-tags">Info</button>
                                        <button type="submit" class="tg-btn-tags">Selanjutnya</button>
                                        <button type="submit" class="tg-btn-tags">Dapodik</button>
                                        <button type="submit" class="tg-btn-tags">PPDB</button>
                                        <button type="submit" class="tg-btn-tags">Info</button>
                                        <button type="submit" class="tg-btn-tags">Selanjutnya</button>
                                        <button type="submit" class="tg-btn-tags">Dapodik</button>
                                        <button type="submit" class="tg-btn-tags">PPDB</button>
                                        <button type="submit" class="tg-btn-tags">Info</button>
                                        <button type="submit" class="tg-btn-tags">Selanjutnya</button>
                                        <button type="submit" class="tg-btn-tags">Dapodik</button>
                                        <button type="submit" class="tg-btn-tags">PPDB</button>
                                        <button type="submit" class="tg-btn-tags">Info</button>
                                        <button type="submit" class="tg-btn-tags">Selanjutnya</button>
                                        <button type="submit" class="tg-btn-tags">Dapodik</button>
                                        <button type="submit" class="tg-btn-tags">PPDB</button>
                                        <button type="submit" class="tg-btn-tags">Info</button>
                                        <button type="submit" class="tg-btn-tags">Selanjutnya</button>
                                        <button type="submit" class="tg-btn-tags">Dapodik</button>
                                        <button type="submit" class="tg-btn-tags">PPDB</button>
                                        <button type="submit" class="tg-btn-tags">Info</button>
                                        <button type="submit" class="tg-btn-tags">Selanjutnya</button> -->

                                    </div>
                                </div>
                                <div class="tg-widget tg-widgetadmissionform">
                                    <div class="tg-widgetcontent">
                                        <h3>Admission Form 2017</h3>
                                        <div class="tg-description">
                                            <p>Quistane nostrud exertation ulamco laboris nisi ut aliquip ex ea comodo consequat aute irure dolor.</p>
                                        </div>
                                        <a class="tg-btn tg-btnicon" href="javascript:void(0);">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <span>Download PDF</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="tg-widget tg-widgetsearchcourse">
                                    <div class="tg-widgettitle">
                                        <h3>Search Course</h3>
                                    </div>
                                    <div class="tg-widgetcontent">
                                        <form class="tg-formtheme tg-formsearchcourse">
                                            <fieldset>
                                                <div class="tg-inputwithicon">
                                                    <i class="icon-book"></i>
                                                    <input type="search" name="keyword" class="form-control" placeholder="Keyword">
                                                </div>
                                                <div class="tg-inputwithicon">
                                                    <i class="icon-layers"></i>
                                                    <span class="tg-select">
                                                        <select>
                                                            <option value="">Course Category</option>
                                                            <option value="">Course Category</option>
                                                            <option value="">Course Category</option>
                                                        </select>
                                                    </span>
                                                </div>
                                                <button type="submit" class="tg-btn">search now</button>
                                                <a href="javascript:void(0);">View All Courses</a>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <div class="tg-widget tg-widgetdownload">
                                    <div class="tg-widgettitle">
                                        <h3>Downloads</h3>
                                    </div>
                                    <div class="tg-widgetcontent">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-paperclip"></i>
                                                    <span>Prospectus</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-map-signs"></i>
                                                    <span>Admission Guide</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-list-ul"></i>
                                                    <span>Merit List 2017</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-calendar-check-o "></i>
                                                    <span>Examination Date Sheet</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="fa fa-bookmark-o"></i>
                                                    <span>Examination Guide 2017</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tg-widget tg-widgetcampuses">
                                    <div class="tg-widgettitle">
                                        <h3>Campuses</h3>
                                    </div>
                                    <div class="tg-widgetcontent">
                                        <div id="tg-campusslider" class="tg-campusslider owl-carousel tg-campuses">
                                            <div class="item">
                                                <div class="tg-campus">
                                                    <div class="tg-themepost">
                                                        <figure class="tg-othercampusimg">
                                                            <img src="<?= base_url('assets/images/campuses/img-04.jpg')?>" alt="image description">
                                                        </figure>
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <i class="icon-location"></i>
                                                            <address>Abc, xyz street London, HG521A</address>
                                                        </li>
                                                        <li>
                                                            <i class="icon-phone-handset"></i>
                                                            <span>0800 - 1234 - 562 - 6</span>
                                                        </li>
                                                        <li>
                                                            <i class="icon-printer"></i>
                                                            <span>+4 1234 567 - 9</span>
                                                        </li>
                                                        <li>
                                                            <a href="mailto:query@domain.com">
                                                                <i class="icon-envelope"></i>
                                                                <span>query@domain.com</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="mailto:complaint@domain.com">
                                                                <i class="icon-construction"></i>
                                                                <span>complaint@domain.com</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="tg-campus">
                                                    <div class="tg-themepost">
                                                        <figure class="tg-othercampusimg">
                                                            <img src="<?= base_url('assets/images/campuses/img-05.jpg')?>" alt="image description">
                                                        </figure>
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <i class="icon-location"></i>
                                                            <address>Abc, xyz street London, HG521A</address>
                                                        </li>
                                                        <li>
                                                            <i class="icon-phone-handset"></i>
                                                            <span>0800 - 1234 - 562 - 6</span>
                                                        </li>
                                                        <li>
                                                            <i class="icon-printer"></i>
                                                            <span>+4 1234 567 - 9</span>
                                                        </li>
                                                        <li>
                                                            <a href="mailto:query@domain.com">
                                                                <i class="icon-envelope"></i>
                                                                <span>query@domain.com</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="mailto:complaint@domain.com">
                                                                <i class="icon-construction"></i>
                                                                <span>complaint@domain.com</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="tg-campus">
                                                    <div class="tg-themepost">
                                                        <figure class="tg-othercampusimg">
                                                            <img src="<?= base_url('assets/images/campuses/img-06.jpg')?>" alt="image description">
                                                        </figure>
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <i class="icon-location"></i>
                                                            <address>Abc, xyz street London, HG521A</address>
                                                        </li>
                                                        <li>
                                                            <i class="icon-phone-handset"></i>
                                                            <span>0800 - 1234 - 562 - 6</span>
                                                        </li>
                                                        <li>
                                                            <i class="icon-printer"></i>
                                                            <span>+4 1234 567 - 9</span>
                                                        </li>
                                                        <li>
                                                            <a href="mailto:query@domain.com">
                                                                <i class="icon-envelope"></i>
                                                                <span>query@domain.com</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="mailto:complaint@domain.com">
                                                                <i class="icon-construction"></i>
                                                                <span>complaint@domain.com</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>