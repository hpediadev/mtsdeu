<!doctype html>
<!--[if lt IE 7]>       <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>          <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>          <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="zxx">
<!--<![endif]-->


<head>
    <!-- Google Analytics -->
<script>
window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
ga('create', 'UA-XXXXX-Y', 'auto');
ga('send', 'pageview');
</script>
<script async src='https://www.google-analytics.com/analytics.js'></script>
<!-- End Google Analytics -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php
        // $url = "http".(!empty($_SERVER['HTTPS'])?"s":"")."://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        // $sb = substr($url, 0, 5);
        // if($sb!='https'){

        // header('Location: '.str_replace('http','https',$url));
        // }


        $yu = '';
        // $warna1 ='#FFA07A';
        // $warna2 ='#FF8C00';
        // $warna3 = $warna2;

        // $warna1 ='#27AE60';
        // $warna2 ='#16A085';
        // $warna3 = $warna2;
        // $warna1 ='#0ecc5d';
        // $warna2 ='#33CEFF';
        // $warna3 ='#09a048';

        $warna1 = '#4390cf';
        $warna2 = '#55769c';
        $warna3 = $warna2;


        // warna biru langit #4390cf

        // $file = fopen(base_url('assets/css/color.css'), "a+");
        // $data = fread($file, filesize(base_url('assets/css/color.css')));
        // fclose($file);
        // $newdata = str_replace($old, $new, $data);
        // file_put_contents(base_url('assets/css/color.css'), "");
        // $file = fopen(base_url('assets/css/color.css'), "a+");
        // fwrite($file, $newdata);
        // fclose($file);

        foreach ($dataLembaga as $u) {
            $yu = $u->NAMALEMBAGA;
            $t = 'Situs Resmi : ' . ucwords(htmlentities(htmlspecialchars(strtoupper($yu))));
            // foreach ($dataartikel as $row) {
            //     // echo $row->LINK;
            // }

            $menu = 'home';
            $menu = $this->uri->segment(1);


            // echo $menu;
            $berita = '';
            $profil = '';
            $profilsekolah = '';
            $home = '';
            $visimisi = '';
            $sejarah = '';
            $keahlian = '';
            $rpl = '';
            $struktur = '';
            $ekskulid = '';
            $bantuan = '';
            $alumni = '';
            $guru = '';
            $siswa='';

            $gambar = '';
            $judul = '';
            $link = '';
            $diskrip = '';
            if ($menu == 'berita') {
                $berita = 'current-menu-item';
                $b=0;
                foreach ($dataartikel as $r) {
                    $gambar = base_url('uploads/artikel/' . $r->GAMBAR);
                    $judul = $r->JUDUL;
                    $link = $r->LINK;
                    $diskrip = $r->URAIAN;
                    if($b==0){
                        $judul = $judul;
                    }
                    else{
                        $judul='Berita';
                    }
                    $b++;
                }
            } else if ($menu == 'bantuan') {
                $bantuan = 'current-menu-item';
                $judul = 'Bantuan | MTs. Darul Ulum II';
            } else if ($menu == 'alumni') {
                $alumni = 'current-menu-item';
                $judul = 'Alumni | MTs. Darul Ulum II';
            } else if ($menu == 'siswa') {
                $siswa = 'current-menu-item';
            } else if ($menu == 'home' or empty($menu)) {
                $home = 'current-menu-item';
                $judul = 'MTs. Darul Ulum II';
            } else if ($menu == 'profil') {
                $profil = "current-menu-item";
                $judul = 'Profil | MTs. Darul Ulum II';
                $profilsekolah = "current-menu-item";
            } else if ($menu == 'sejarah') {
                $profil = 'current-menu-item';
                $sejarah = 'current-menu-item';
                $judul = 'Sejarah | MTs. Darul Ulum II';
            } else if ($menu == 'visimisi') {
                $profil = "current-menu-item";
                $visimisi = "current-menu-item";
                $judul = 'Visi Misi | MTs. Darul Ulum II';
            } else if ($menu == 'struktur') {
                $profil = "current-menu-item";
                $struktur = "current-menu-item";
                $judul = 'Struktur | MTs. Darul Ulum II';
            } else if ($menu == 'ekskul') {
                $ekskulid = "current-menu-item";
                $b=0;
                foreach ($dataartikel as $r) {
                    $gambar = base_url('uploads/artikel/' . $r->GAMBAREXTRA);
                    $judul = $r->NAMAEXTRA;
                    $diskrip = $r->URAIANEXTRA;
                    if($b==0){
                        $judul = $judul;
                    }
                    else{
                        $judul='Berita';
                    }
                    $b++;
                }
            } else if ($menu == 'keahlian') {
                $keahlian = "current-menu-item";
                $b=0;
                foreach ($dataartikel as $r) {
                    $gambar = base_url('uploads/artikel/' . $r->GAMBAR);
                    $judul = $r->NAMAPRODI;
                    $diskrip = $r->URAIAN;
                    if($b==0){
                        $judul = $judul;
                    }
                    else{
                        $judul='Berita';
                    }
                    $b++;
                }
            } else if ($menu == 'guru') {
                $guru = "current-menu-item";
                $judul = 'Guru | MTs. Darul Ulum II';
            }
        } 

        $uri_path =  "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        ?>

    <title><?= $judul ?></title>
    <meta name="description" content="">
    <meta name="google-site-verification" content="mnzElWY4cok_4nVzVolkACmqqE-_wvRuNjLXEaMEj7U" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="<?= $uri_path ?>" />
    <meta property="og:image" content="<?= $gambar ?>" />

    <meta property="og:title" content="<?= $judul ?>" />

    <meta property="og:description" content='' />

    <meta property="og:image:width" content="1200" />

    <meta property="og:image:height" content="630" />
    <!--  <link rel="apple-touch-icon" href="<?= base_url('apple-touch-icon.png') ?>"> -->
    <link rel="icon" href="<?= base_url('logo.png') ?>" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bodotstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/normalize.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/icomoon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/prettyPhoto.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.default.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/transitions.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/color.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <style type="text/css">
        #warna1 {
            background: <?= $warna1 ?>;
        }

        #warna2 {
            background: <?= $warna2 ?>;
            color: #fff;
        }
        #judul-bg {
            color: <?= $warna2 ?>;
        }


        .sidebar h2 {
            height: 40px;
            background: <?= $warna1 ?>;
            margin: 5px 4px 5px 0;
            padding: 9px 0 9px 10px;
            border: 0;
            color: white;
            font-size: 16px;
            line-height: 1.2em;
            font: 500 140%;
        }

        .split {
            height: 40px;
            background: <?= $warna3 ?>;
            margin: 5px 4px 5px 0;
            padding: 9px 0 9px 10px;
            border: 0;
            color: white;
            font-size: 16px;
            line-height: 1.2em;
            font: 500 140%;
            float: left;
            margin-top: 5px;

        }

        .tg-navigation>ul>li.current-menu-item a[data-new]:after {
            color: #d33535;
        }
    </style>

    <!-- Bagian css -->
            <!-- Akhir dari Bagian css -->
            <scrhipt src="<?= base_url('assets/slideshow/assets/js/jquery-1.10.1.min.js') ?>">
                </script>
                <scrihpt src="<?= base_url('assets/slideshow/assets/js/bootstrap.min.js') ?>">
                    </script>
                    <script type="text/javascript" src="<?= base_url('assets/slideshow/wowslider/jquery.js') ?>"></script>
                    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
                    <!--  <style type="text/css">
        .fixedElement {
    background-color: <?= $warna1 ?>;
    
    width:100%;
}.fix-fixedElement {
    background-color: <?= $warna1 ?>;
    position:fixed;
    top:0;
    width:100%;
    z-index:100;
}
</style>
<script type="text/javascript">
     $(window).scroll(function(e){ 
  var $el = $('.fixedElement'); 
  var isPositionFixed = ($el.css('position') == 'fixed');
  if ($(this).scrollTop() > 90 && !isPositionFixed){ 
    $el.css({'position': 'fixed', 'top': '0px'}); 
  }
  if ($(this).scrollTop() < 90 && isPositionFixed){
    $el.css({'position': 'static', 'top': '0px'}); 
  } 
});
</script> -->
                    <style type="text/css">
                        #MyMenu {
                            position: relative;
                            width: 100%;
                        }
                    </style>

                    <script>
                        window.onscroll = function() {
                            scrollFunction()
                        }; // saat window di scroll

                        function scrollFunction() {
                            if (document.body.scrollTop > 130 || document.documentElement.scrollTop > 130) {
                                document.getElementById("MyMenu").style.top = "0";
                                document.getElementById("MyMenu").style.position = "fixed";
                            } else {
                                document.getElementById("MyMenu").style.top = "relative";
                                document.getElementById("MyMenu").style.position = "relative";
                            }
                        }
                    </script>


</head>

<body class="tg-home tg-homefour">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--************************************
            Wrapper Start
    *************************************-->
    <div id="tg-wrapper" class="tg-wrapper" id="myMenu">
        <!--************************************
                Header Start
        *************************************-->
        <header id="tg-header" class="tg-header tg-haslayout">
            <!--  -->
            <div style="background-color: <?= $warna1 ?>;" id="MyMdenu">
               <!--  <div class="container">
                    <div class="row ">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                            <div style="padding: 10px;color: white;">
                                <i id="Hari"></i>&nbsp;&nbsp;&nbsp;<b id="clock" style="background-color:white;color: <?= $warna2?>; padding: 5px; border-radius: 5px;"></b>

                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="clearfix"></div>
                <div class="clearfix"></div>
                <div class="" style="background-color: <?= $warna2 ?>;" stylle='background-image: url("http://localhost/web/ds.jpg" );  background-repeat: no-repeat;background-size: cover;'>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-logoandnoticeboard">
                                    <strong class="tg-logo">

                                        <a href=""><img style="height:70px" src="<?= base_url('uploads/' . $u->LOGO) ?>" alt="SMK Putra Bangsa"></a>
                                    </strong>
                                    <div class="tg-noticeboard hidden-xs">
                                        <div class="tg-textbox" style="color:#fff;"><br><br>
                                            <span>www.mtsdadu.sch.id</span>
                                            <span>
                                                <i class="fa fa-phone"></i>
                                                <?= $u->TELP ?>
                                                &nbsp;
                                                <i class="fa fa-envelope"></i>
                                                <?= $u->EMAILLEMBAGA ?>
                                            </span>
                                        </div>
                                        <!-- <figure><img src="images/img-01.jpg" alt="image description"></figure> -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div style="background-color: <?= $warna1 ?>;" id="MyMenu">
                    <div class="container">
                        <div class="row ">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-navigationarea">
                                    <nav id="tg-nav" class="tg-nav">
                                        <div class="navbar-header">
                                            <button type="buttos" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>
                                        <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                                            <ul>
                                                <!-- <li class="current-menu-item"><a href="<?= base_url() ?>"><i class="fa fa-home"></i></a></li> -->
                                                <li class="<?= $home ?>"><a href="<?= base_url() ?>">Beranda</a></li>
                                                <li class="menu-item-has-children <?= $profil ?>">
                                                    <a href="javascript:void(0);">Profil
                                                        <ul class="sub-menu">
                                                            <li class="<?= $profilsekolah ?>"><a href="<?= base_url('profil.html') ?>">Profil Sekolah</a></li>
                                                            <li class="<?= $sejarah ?>"><a href="<?= base_url('sejarah.html') ?>">Sejarah</a></li>
                                                            <li class="<?= $visimisi ?>"><a href="<?= base_url('visimisi.html') ?>">Visi Misi dan Tujuan</a></li>
                                                            <li class="<?= $struktur ?>"><a href="<?= base_url('struktur.html') ?>">Struktur Organisasi</a></li>

                                                        </ul>
                                                    </a>
                                                </li>
                                              
                                        <!-- <li class="menu-item-has-children curdrent-menu-item"> 
                                            <a href="javascript:void(0);">Pegawai</a>
                                            <ul class="sub-menu">
                                                <li><a href="index-2.html">Pendidik</a></li>
                                                <li><a href="index2.html">Tenaga Pendidikan</a></li>
                                            </ul>
                                        </li>
                                                <li class="<?= $berita ?>"><a href="<?= base_url('berita.html') ?>">Berita</a></li>-->
                                                <li class="menu-item-has-children <?= $ekskulid ?>">
                                                    <a href="javascript:void(0);">Ekskul</a>
                                                 <ul class="sub-menu">
                                                <?php
                                                    $q = $this->db->get('textra_md')->result();
                                                    foreach($q as $jur){
                                                    // echo $rowtags->LINK;

                                                    $menuekskul = $this->uri->segment(3);
                                                    $rpl='';
                                                if ($menuekskul==strtolower($jur->IDEXTRA)){
                                                    $ekskul="current-menu-item";
                                                }
                                                else{
                                                    $ekskul=' ';
                                                } 


                                                ?>
                                                <li class="<?= $ekskul ?>"><a href="<?= base_url() . 'ekskul/read/' . strtolower($jur->IDEXTRA) . '.html' ?>"><?= ucfirst(strtolower($jur->NAMAEXTRA)) ?></a></li>
                                                <?php
                                                }
                                                ?>
                                                    </ul>
                                                </li>

                                                <li class="<?= $berita ?>"><a href="<?= base_url('berita.html') ?>">Berita</a></li>
                                                <li class="<?= $guru ?>"><a href="<?= base_url('guru.html') ?>">Guru</a></li>
                                                <!-- <li class="menu-item-has-children ">
                                                    <a href="javascript:void(0);">PPDB
                                                        <ul class="sub-menu">
                                                            <li class="<?= $profilsekolah ?>"><a href="<?= base_url('profil.html') ?>">Pendaftaran</a></li>
                                                            <li class="<?= $sejarah ?>"><a href="<?= base_url('sejarah.html') ?>">Persyaratan</a></li>
                                                            <li class="<?= $visimisi ?>"><a href="<?= base_url('visimisi.html') ?>">Pengumuman</a></li>
                                                        </ul>
                                                    </a>
                                                </li>
                                                <li class="menu-item-has-children ">
                                                    <a href="javascript:void(0);">Tendik
                                                        <ul class="sub-menu">
                                                            <li class="<?= $profilsekolah ?>"><a href="<?= base_url('profil.html') ?>">Pendidik</a></li>
                                                            <li class="<?= $sejarah ?>"><a href="<?= base_url('sejarah.html') ?>">Pegawai Pendidikan</a></li>
                                                            <li class="<?= $visimisi ?>"><a href="<?= base_url('visimisi.html') ?>">Pengumuman</a></li>
                                                        </ul>
                                                    </a>
                                                </li>
                                                <li class="menu-item-has-children ">
                                                    <a href="javascript:void(0);">BKK
                                                        <ul class="sub-menu">
                                                            <li class="<?= $profilsekolah ?>"><a href="<?= base_url('profil.html') ?>">BKK Sekolah</a></li>
                                                            <li class="<?= $sejarah ?>"><a href="<?= base_url('sejarah.html') ?>">BKK Nasional</a></li>
                                                        </ul>
                                                    </a>
                                                </li>   
                                                <li class="menu-item-has-children">
                                                    <a href="javascript:void(0);">LSP
                                                        <ul class="sub-menu">
                                                            <li class="<?= $profilsekolah ?>"><a href="<?= base_url('profil.html') ?>">Pendaftaran</a></li>
                                                            <li class="<?= $sejarah ?>"><a href="<?= base_url('sejarah.html') ?>">Persyaratan</a></li>
                                                            <li class="<?= $visimisi ?>"><a href="<?= base_url('visimisi.html') ?>">Pengumuman</a></li>
                                                        </ul>
                                                    </a>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="javascript:void(0);">Industri
                                                        <ul class="sub-menu">
                                                            <li class="<?= $profilsekolah ?>"><a href="<?= base_url('profil.html') ?>">Pendaftaran</a></li>
                                                            <li class="<?= $sejarah ?>"><a href="<?= base_url('sejarah.html') ?>">Persyaratan</a></li>
                                                            <li class="<?= $visimisi ?>"><a href="<?= base_url('visimisi.html') ?>">Pengumuman</a></li>
                                                        </ul>
                                                    </a>
                                                </li> -->
                                                <li class="<?= $alumni ?>"><a href="<?= base_url('alumni.html') ?>">Alumni</a></li>
                                                <!-- <li class="<?= $siswa ?>"><a href="<?= base_url('siswa.html') ?>">Grafik Siswa</a></li> -->
                                                <li class="<?= $bantuan ?>"><a href="<?= base_url('bantuan.html') ?>">Bantuan</a></li>

                                            </ul>
                                        </div>
                                    </nav>
                                    <div class="tg-searchbox">
                                        <a id="tg-btnsearch" class="tg-btnsearch" href="javascript:void(0);"><i class="icon-magnifier"></i></a>
                                        <form class="tg-formtheme tg-formsearch" method="post" action="<?= base_url('berita/cari') ?>">
                                            <fieldset><input type="search" name="cari" class="form-control" placeholder="Mulai Pencarian Disini"></fieldset>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </header>


    <div class="row" >
        <div class="container">
<?php if($menu=="home" OR empty($menu)){  ?>
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

            $slide = $this->db->order_by('IDSLIDE','DESC');
            $slide = $this->db->limit(5);
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

            $slide = $this->db->order_by('IDSLIDE','DESC');
            $slide = $this->db->limit(5);
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
  </div>
</div>