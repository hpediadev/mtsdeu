<!doctype html>
<!--[if lt IE 7]>       <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>          <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>          <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang="zxx"> <!--<![endif]-->


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>
        <?php 
        $warna1 ='#0ecc5d';
        $warna2 ='#2f9258';
        $warna3 ='#09a048';
        // $warna1 ='#4390cf';
        // $warna2 ='#55769c';
        // $warna3 ='#55769c';
        

        // warna biru langit #4390cf

        // $file = fopen(base_url('assets/css/color.css'), "a+");
        // $data = fread($file, filesize(base_url('assets/css/color.css')));
        // fclose($file);
        // $newdata = str_replace($old, $new, $data);
        // file_put_contents(base_url('assets/css/color.css'), "");
        // $file = fopen(base_url('assets/css/color.css'), "a+");
        // fwrite($file, $newdata);
        // fclose($file);

        foreach ($dataLembaga as $u) 
        {
            echo 'Situs Resmi : '.ucwords(htmlentities(htmlspecialchars(strtoupper($u->NAMALEMBAGA ))));

         $menu='home';
         $menu = $this->uri->segment(1);

         
        // echo $menu;
         $berita='';
         $profil='';
         $profilsekolah='';
         $home='';
         $visimisi='';
         $sejarah='';
         $keahlian='';
         $rpl='';
         $struktur='';
         $ekskulid='';
         $bantuan='';
         if ($menu=='berita'){
            $berita='current-menu-item';
        }
        else if ($menu=='bantuan'){
           $bantuan='current-menu-item';
       }
         else if ($menu=='home' OR empty($menu)){
            $home='current-menu-item';
        }
        else if ($menu=='profil'){
           $profil="current-menu-item";
           $profilsekolah="current-menu-item";
       }
       else if ($menu=='sejarah'){
          $profil='current-menu-item';
          $sejarah='current-menu-item';
        }
        else if ($menu=='visimisi'){
            $profil="current-menu-item";
            $visimisi="current-menu-item";
        }
        else if ($menu=='struktur'){
            $profil="current-menu-item";
            $struktur="current-menu-item";
        }
        else if ($menu=='ekskul'){
            $ekskulid="current-menu-item";
        }

        else if ($menu=='keahlian'){
            $keahlian="current-menu-item";
        }

      
        }?>
            
        </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="<?= base_url('apple-touch-icon.png')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bodotstrap.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/normalize.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/icomoon.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/prettyPhoto.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.default.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/transitions.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/color.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css')?>">

    <style type="text/css">
    #warna1{
background:<?= $warna1 ?>;
    }
    #warna2{
background:<?= $warna2 ?>;
color:#fff;
    }
        .sidebar h2{
            height: 40px;
background:<?= $warna1 ?>;
margin:5px 4px 5px 0;
padding:9px 0 9px 10px;
border:0;
color:white;
font-size:16px;
line-height:1.2em;
font: 500 140%;
}
.split{
    height: 40px;
    background:<?= $warna3 ?>;
    margin:5px 4px 5px 0;
    padding:9px 0 9px 10px;
    border:0;
    color:white;
    font-size:16px;
    line-height:1.2em;
    font: 500 140%;
    float: left;
    margin-top: 5px;

}
.tg-navigation > ul > li.current-menu-item a[data-new]:after{color: #d33535;}
    </style>

    <!-- Bagian css -->
    <lhnck rel="stylesheet" href="<?= base_url('assets/slideshow/assets/css/ilmudetil.css')?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/slideshow/wowslider/style.css')?>" />
    <linhk rel="stylesheet" href="<?= base_url('assets/slideshow/assets/css/font-awesome.min.css')?>"> 
    <!-- Akhir dari Bagian css -->
    <scrhipt src="<?= base_url('assets/slideshow/assets/js/jquery-1.10.1.min.js')?>"></script>       
    <scrihpt src="<?= base_url('assets/slideshow/assets/js/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/slideshow/wowslider/jquery.js')?>"></script>
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body class="tg-home tg-homefour">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--************************************
            Wrapper Start
    *************************************-->
    <div id="tg-wrapper" class="tg-wrapper">
        <!--************************************
                Header Start
        *************************************-->
        <header id="tg-header" class="tg-header tg-haslayout">
            <div class="tg-topbar" style="background-color: <?= $warna2 ?>;">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color: <?= $warna2 ?>;">
                        
                            <!-- <ul class="tg-addressinfo">
                                <li>
                                    <?php foreach ($dataLembaga as $u) {
                                        ?>
                                    <i class="icon-map-marker"></i>
                                    <address><?php echo ucwords(htmlentities(htmlspecialchars(strtolower($u->ALAMATLEMBAGA )))) ?></address>
                                    <?php    
                                    }?>
                                </li>
                                <li>
                                    <a style="color:white"><i class="fa fa-facebook"></i></a>
                                    <time datetime="2016-10-10">Mon - Sat 9:00 - 17:00</time>
                                </li>
                                <li>
                                    <i class="fa fa-facebook"></i>
                                    <time datetime="2016-10-10">Mon - Sat 9:00 - 17:00</time>
                                </li>
                                <li>
                                    <i class="icon-phone-handset"></i>
                                    <span>+4 1234 567890</span>
                                </li>
                            </ul> -->
                            <!-- <div class="tg-themedropdown tg-languagesdropdown">
                                <a href="javascript:void(0);" id="tg-languages" class="tg-btndropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span><img src="<?= base_url('assets/images/flags/img-01.jpg')?>" alt="image description"></span>
                                    <span>Eng</span>
                                </a>
                                <div class="tg-themedropdownbox" aria-labelledby="tg-languages">
                                    <ul class="tg-languageslist">
                                        <li>
                                            <span><img src="<?= base_url('assets/images/flags/img-02.jpg')?>" alt="image description"></span>
                                            <span>Eng</span>
                                        </li>
                                        <li>
                                            <span><img src="<?= base_url('assets/images/flags/img-03.jpg')?>" alt="image description"></span>
                                            <span>Eng</span>
                                        </li>
                                        <li>
                                            <span><img src="<?= base_url('assets/images/flags/img-04.jpg')?>" alt="image description"></span>
                                            <span>Eng</span>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="clearfix"></div>
            <div   style="background-color: <?= $warna2 ?>;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                        <div class="tg-logoandnoticeboard">
                           <strong class="tg-logo">
                            <a href="index-2.html"><img style="height:70px" src="<?= base_url('uploads/'.$u->LOGO)?>" alt="University of Education and knowledge"></a>
                        </strong>
                            <div class="tg-noticeboard hidden-xs">
                                <div class="tg-textbox" style="color:#fff"><br><br>
                                    <span>www.smkpbwaru.sch.id</span>
                                    <span>
                                    <i class="fa fa-phone"></i>
                                    <?= $u->TELP?>
                                    &nbsp;
                                    <i class="fa fa-envelope"></i>
                                    <?= $u->EMAILLEMBAGA?>
                                    </span>
                                </div>
                                <!-- <figure><img src="images/img-01.jpg" alt="image description"></figure> -->
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
                                </div>
            <div style="background-color: <?= $warna1 ?>;">
            <div class="container">
                <div class="row">
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
                                    <ul><li class="<?= $home ?>"><a href="<?= base_url()?>">Beranda</a></li>
                                        <li class="menu-item-has-children <?= $profil ?>">
                                            <a href="javascript:void(0);">Profil
                                            <ul class="sub-menu">
                                            <li class="<?= $profilsekolah?>"><a href="<?= base_url('profil.html')?>">Profil Sekolah</a></li>
                                            <li class="<?= $sejarah ?>"><a href="<?= base_url('sejarah.html')?>">Sejarah</a></li>
                                            <li class="<?= $visimisi ?>"><a href="<?= base_url('visimisi.html')?>">Visi Misi dan Tujuan</a></li>
                                            <li class="<?= $struktur ?>"><a href="<?= base_url('struktur.html')?>">Struktur Organisasi</a></li>
                                               
                                            </ul>
                                        </a>
                                        </li>
                                        <li class="menu-item-has-children <?= $keahlian ?>">
                                            <a href="javascript:void(0);">Keahlian</a>
                                            <ul class="sub-menu">
                                            <?php
                                            
                                                $q = $this->db->get('tprodi_md')->result();
                                                foreach($q as $jur){
                                                // echo $rowtags->LINK;

                                                $menukeahlian = $this->uri->segment(3);
                                                $rpl='';
                                            if ($menukeahlian==strtolower($jur->IDPRODI)){
                                                $rpl="current-menu-item";
                                            }
                                            else{
                                                $rpl=' ';
                                            } 

                                                
                                            ?>
                                            <li class="<?= $rpl ?>"><a href="<?= base_url().'keahlian/read/'.strtolower($jur->IDPRODI).'.html'?>"><?= ucfirst(strtolower($jur->NAMAPRODI))?></a></li>
                                            <?php } ?>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children curdrent-menu-item">
                                            <a href="javascript:void(0);">Pegawai</a>
                                            <ul class="sub-menu">
                                                <li><a href="index-2.html">Pendidik</a></li>
                                                <li><a href="index2.html">Tenaga Pendidikan</a></li>
                                            </ul>
                                        </li>
                                        <li class="<?= $berita ?>"><a href="<?= base_url('berita.html')?>">Berita</a></li>
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
                                            <li class="<?= $ekskul ?>"><a href="<?= base_url().'ekskul/read/'.strtolower($jur->IDEXTRA).'.html'?>"><?= ucfirst(strtolower($jur->NAMAEXTRA))?></a></li>
                                            <?php } ?>
                                            </ul>
                                        </li>
                                        <li class="<?= $bantuan ?>"><a href="<?= base_url('bantuan.html')?>">Bantuan</a></li>
                                        
                                    </ul>
                                </div>
                            </nav>
                            <div class="tg-searchbox">
                                <a id="tg-btnsearch" class="tg-btnsearch" href="javascript:void(0);"><i class="icon-magnifier"></i></a>
                                <form class="tg-formtheme tg-formsearch">
                                    <fieldset><input type="search" name="search" class="form-control" placeholder="Start Your Search Here"></fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </header>