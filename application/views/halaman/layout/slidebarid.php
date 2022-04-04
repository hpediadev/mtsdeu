
                        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                            <aside id="tg-sidebar" class="tg-sidebar">
                                    
                                <div class="tg-widget tg-widgetadmissionform">
                                    <div class="tg-borderheading sidebar">
									<!-- <div class="split"></div>
                                        <h2>&nbsp;Link</h2>
                                    </div>
                                     -->
                                            <?php
                                        $sql = $this->db->order_by('IDARTIKEL','DESC');
                                        $sql = $this->db->limit(1);
                                        $sql =  $this->db->get_where('tartikel_md',array('KATEGORI'=>'informasi'))->result();
                                        foreach ($sql as $s) {
                                            # code...

                                $jdl = str_replace(" ","-",$s->JUDUL);
                                        $t = $s->TANGGALARTIKEL;
                                                     $tgl = substr($t, 8,2);
                                                     $bln = substr($t, 5,2);
                                                     $thn = substr($t, 0,4);
                                        ?>
                                <div class="tg-widget tg-widgetadmissionform">
                                    <div class="tg-widgetcontent">
                                        <h3>Informasi Utama</h3>
                                        <div class="tg-description">
                                            <p><?= $s->JUDUL?></p>
                                        </div>
                                        <a class="tg-btn tg-btnicon" href="<?=  base_url()?>berita/read/<?= $tgl.'/'.$bln.'/'.$thn.'/'.$jdl.'.html'; ?>">
                                            <span>Selanjutnya...</span>
                                        </a>
                                    </div>
                                </div>

                                    <?php } ?>
                                </div>
                                <div class="tg-widget tg-widgetadmissionform">
                                    <div class="tg-borderheading sidebar">
                                    <div class="split"></div>
                                        <h2>&nbsp;Tags</h2>
                                    </div>
                                    <div class="tg-tags">
                                        <?php
                                        $sql = $this->db->get('ttags_md')->result();
                                        foreach ($sql as $k) {

                                        ?>
                                                <a target="_blank" class="tg-tag" href="<?= $k->LINK?>"><?= $k->TAMPILLINK?></a>
                                            <?php } ?>
                                            </div>
                                </div>
                                <div class="tg-widget tg-widgetadmissionform">
                                    <div class="tg-borderheading sidebar">
                                    <div class="split"></div>
                                        <h2>&nbsp;Facebook</h2>
                                    </div>
                                    
                                   <!--  <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsmkputrabangsawaru%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe> -->
                                </div>
                            </aside>
                        </div>
                    </div>