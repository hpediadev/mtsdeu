
<style type="text/css">
    .aku{
        background-color: red;
    }
    .aku:hove{
        background-color: blue;
    }
    .aku:active{
        background-color: yellow;
    } 
</style>
  <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                            <div id="tg-content" class="tg-content">
                                
                                <section class="tg-sectionspace tg-haslayout">
                                     <div class="tg-borderheading sidebar">
                                    <div class="split"></div>
                                        <h2>&nbsp;Berita</h2>
                                    </div>
                                    <!-- <div class="tg-borderheading">
                                        <h2>Latest Events</h2>
                                    </div> -->
                                    <div class="tg-events">
                                        <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <?php
                                        foreach ($user as $slidebar) {
                                            $jdl = str_replace(" ","-",$slidebar->JUDUL);
                                             $tanggal = substr($slidebar->TANGGALARTIKEL, 0,10);
                                    $hari   = date('N', strtotime($tanggal)); 
                                                     $day = array('','Senin','Selasa', 'Rabu','Kamis','Jumat','Sabtu','Ahad');
                                                     $bln = array('','Januari','Februari','Maret','April','Juni','Juli','Agustus','September','Oktober','November','Desember');
                                                     $tgl   = date('d ', strtotime($tanggal)).$bln[date('n', strtotime($tanggal))].date(' Y ', strtotime($tanggal)); 
                                            # code...

                                        $t = $slidebar->TANGGALARTIKEL;
                                        $tg = substr($t, 8,2);
                                        $bl = substr($t, 5,2);
                                        $th = substr($t, 0,4);
                                        ?>

                                        <article class="tg-campus tg-campusleftthumb">
                                            <!-- <figure class="tg-featuredimg" style="width: 60px; height: 100%; overflow: hidden;position: relative;">
                                                <a href="javascript:void(0);">
                                                    <img width="100%" src="<?= base_url('uploads/artikel/'.$slidebar->GAMBAR)?>" alt="image description">
                                                </a>
                                            </figure> -->
                                            <figure class="tg-featuredimg" style="width: 60px; height: 35px; overflow: hidden;position: relative;">
                                                        
                                                        <a href="javascript:void(0);" >
                                                            <img src="<?= base_url('uploads/artikel/'.$slidebar->GAMBAR)?>" alt="image description">
                                                        </a>
                                                    </figure>
                                            <div class="tg-campuscontent">
                                                <ul class="tg-matadata">
                                                    <li>
                                                        <a href="<?=  base_url()?>berita/read/<?= $tg.'/'.$bl.'/'.$th.'/'.$slidebar->IDARTIKEL.'/'.$slidebar->LINK.'.html'; ?>">
                                                            <i class="fa fa-calendar"></i>
                                                            <span><?= $day[$hari].','.$tgl ?></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tg-campustitle">
                                                    <h3><a href="<?=  base_url()?>berita/read/<?= $tg.'/'.$bl.'/'.$th.'/'.$slidebar->IDARTIKEL.'/'.$slidebar->LINK.'.html'; ?>"><?= $slidebar->JUDUL?></a></h3>
                                                </div>
                                            </div>
                                        </article>
                                    <?php } ?>
                                </div>
                                    </div>
                                </section>
                                
                                
                            </div>
                        </div>