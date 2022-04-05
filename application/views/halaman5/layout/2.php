<!DOCTYPE html>
<!--[if lt IE 7]>       <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>          <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>          <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang="zxx"> <!--<![endif]-->


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php foreach ($dataLembaga as $u) 
        {
            echo 'Situs Resmi : '.ucwords(htmlentities(htmlspecialchars(strtoupper($u->NAMALEMBAGA ))));

         $menu='home';
         $menu = $this->uri->segment(1);

         
         echo $menu;
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
         if ($menu=='berita'){
            $berita='current-menu-item';
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

    <!-- Bagian css -->
	<lhnck rel="stylesheet" href="<?= base_url('assets/slideshow/assets/css/ilmudetil.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/slideshow/wowslider/style.css')?>" />
	<linhk rel="stylesheet" href="<?= base_url('assets/slideshow/assets/css/font-awesome.min.css')?>"> 
	<!-- Akhir dari Bagian css -->
	<scrhipt src="<?= base_url('assets/slideshow/assets/js/jquery-1.10.1.min.js')?>"></script>       
	<scrihpt src="<?= base_url('assets/slideshow/assets/js/bootstrap.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/slideshow/wowslider/jquery.js')?>"></script>

    <!-- 

    <script srxc="<?= base_url('assets/js/js/jquery-1.9.1.min.js')?>"></script>
    <script srxc="<?= base_url('assets/js/js/twd-menu.js')?>"></script> -->


<script src="https://v2.txt.me/livechat/js/wrapper/190f672f789546cd81a90cad61188227" async></script>
<noscript><a href="https://txt.me" rel="nofollow">Chat with us</a>, powered by <a href="https://txt.me" rel="noopener nofollow" target="_blank">txt.me</a></noscript>
<!-- End of txt.me widget code -->
</script>
    
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

        <header id="tg-header" class="tg-header tg-haslayout" >
            <div class="tg-topbar" style="background-color: #55769c;">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color: #55769c;">
                            <ul class="tg-addressinfo">
                                <li>
                                    <?php foreach ($dataLembaga as $u) {
                                        ?>
                                    <i class="icon-map-marker"></i>
                                    <address><?php echo ucwords(htmlentities(htmlspecialchars(strtolower($u->ALAMATLEMBAGA )))) ?></address>
                                    <?php    # code...
                                    }?>
                                </li>
                                <li>
                                    <i class="icon-clock"></i>
                                    <time datetime="2016-10-10">Mon - Sat 9:00 - 17:00</time>
                                </li>
                                <li>
                                    <i class="icon-phone-handset"></i>
                                    <span>+4 1234 567890</span>
                                </li>
                            </ul>
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
            <div class="container" >
                <div class="row" >
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                        <div class="tg-logoandnoticeboard">
                           <strong class="tg-logo">
                            <a href="index-2.html"><img src="<?= base_url('assets/images/lg.png')?>" alt="University of Education and knowledge"></a>
                        </strong>
                            <div class="tg-noticeboard hidden-xs">
                                <div class="tg-textbox"><br>
                                    <span>PPDB | PRODI | SIAKAD</span>
                                    <span>Last Date For Spring Admission 27-Sept-2017</span>
                                </div>
                                <!-- <figure><img src="images/img-01.jpg" alt="image description"></figure> -->
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-----Warna Biru : 3575d3--->
            <div style="background-color: #4390cf;color: #fff" class="menu">
            <div class="container" >
                <div class="row" >
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                       <!--  <div class="tg-logoandnoticeboard">
                            <strong class="tg-logo"><a href="index-2.html"><img src="images/logo.png" alt="University of Education and knowledge"></a></strong>
                            <div class="tg-noticeboard hidden-xs">
                                <div class="tg-textbox">
                                    <span>Admission Open!</span>
                                    <span>Last Date For Spring Admission 27-Sept-2017</span>
                                </div>
                                <figure><img src="images/img-01.jpg" alt="image description"></figure>
                            </div>
                        </div> -->
                        <div class="tg-navigationarea" >
                            <nav id="tg-nav" class="tg-nav">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div id="tg-navigation " class="collapse navbar-collapse tg-navigation mormal" >
                                        <ul>
                                        <li class="<?= $home ?>"><a href="<?= base_url()?>"><i class="fa fa-wome"></i> Beranda</a></li>
                                        <li class="menu-item-has-children <?= $profil ?>">
                                            <a href="javascript:void(0);">Profil
                                            <ul class="sub-menu">
                                            <li class="<?= $profilsekolah?>"><a href="<?= base_url('profil')?>">Profil Sekolah</a></li>
                                            <li class="<?= $sejarah ?>"><a href="<?= base_url('sejarah')?>">Sejarah</a></li>
                                            <li class="<?= $visimisi ?>"><a href="<?= base_url('visimisi')?>">Visi Misi dan Tujuan</a></li>
                                            <li class="<?= $struktur ?>"><a href="<?= base_url('struktur')?>">Struktur Organisasi</a></li>
                                               
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
                                        <li class="<?= $berita ?>"><a href="<?= base_url('berita')?>">Berita</a></li>
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
                                        <li><a href="bantuan.html">Bantuan</a></li>
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
        <!---

        <header id="tg-header" class="tg-header tg-headervtwo tg-headervthree tg-haslayout">
            <div class="tg-topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <ul class="tg-addressinfo">
                                <li>
                                    <?php foreach ($dataLembaga as $u) {
                                        ?>
                                    <i class="icon-map-marker"></i>
                                    <address><?php echo ucwords(htmlentities(htmlspecialchars(strtolower($u->ALAMATLEMBAGA )))) ?></address>
                                    <?php    # code...
                                    }?>
                                </li>
                                <li>
                                    <i class="icon-clock"></i>
                                    <time datetime="2016-10-10">Mon - Sat 9:00 - 17:00</time>
                                </li>
                                <li>
                                    <i class="icon-phone-handset"></i>
                                    <span>+4 1234 567890</span>
                                </li>
                            </ul>
                            <d!--d <div class="tg-themedropdown tg-languagesdropdown">
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
                            </div> -2->
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-navigationarea">
                           <strong class="tg-logo"><a href="index-2.html"><img src="<?= base_url('assets/images/lg.png')?>" alt="University of Education and knowledge"></a></strong>
                            <div class="tg-navigationandsearch">
                                <nav id="tg-nav" class="tg-nav">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                                        <ul>
                                        <li><a href="campuses.html"><i class="fa fa-home"></i> Beranda</a></li>
                                        <li class="menu-item-has-children current-menu-item">
                                            <a href="javascript:void(0);">Profil</a>
                                            <ul class="sub-menu">
                                                <li><a href="index-2.html">Profil Sekolah</a></li>
                                                <li><a href="index2.html">Sejarah</a></li>
                                                <li><a href="index3.html">Visi-Misi</a></li>
                                                <li class="current-menu-item"><a href="index4.html">Struktur Organisasi</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children current-menu-item">
                                            <a href="javascript:void(0);">Jurusan</a>
                                            <ul class="sub-menu">
                                                <li><a href="index-2.html">RPL</a></li>
                                                <li><a href="index2.html">TAV</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children current-menu-item">
                                            <a href="javascript:void(0);">Pegawai</a>
                                            <ul class="sub-menu">
                                                <li><a href="index-2.html">Pendidik</a></li>
                                                <li><a href="index2.html">Tenaga Pendidikan</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="campuses.html">Berita</a></li>
                                        <li class="menu-item-has-children current-menu-item">
                                            <a href="javascript:void(0);">Exskul</a>
                                            <ul class="sub-menu">
                                                <li><a href="index-2.html">Robotik</a></li>
                                                <li><a href="index2.html">Software</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="campuses.html">Bantuan</a></li>
                                        <s!--
                                        <li class="menu-item-has-mega-menu">
                                            <a href="javascript:void(0);">Courses</a>
                                            <div class="mega-menu">
                                                <ul class="mega-menu-row">
                                                    <li class="mega-menu-col">
                                                        <a href="javascript:void(0);">Course Categories</a>
                                                        <ul>
                                                            <li><a href="courseslist.html">Rekayasa Perangkat Lunak (RPL)</a></li>
                                                            <li><a href="coursesgrid.html">Course gird</a></li>
                                                            <li><a href="coursedetail.html">Course Detail</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col">
                                                        <a href="javascript:void(0);">Faculties</a>
                                                        <ul>
                                                            <li><a href="faculties.html">faculties</a></li>
                                                            <li><a href="facultydetail.html">faculty detail</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="mega-menu-row">
                                                    <li class="mega-menu-col">
                                                        <figure><img src="<?= base_url('assets/images/img-02.jpg')?>" alt="image description"></figure>
                                                        <div class="tg-textbox">
                                                            <strong>excellent service &amp; support</strong>
                                                            <div class="tg-description">
                                                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quistance nostrud exercitation ullamco laboris nisi ut aliquip commodo.</p>
                                                            </div>
                                                            <a class="tg-btn tg-bgn-sm" href="javascript:void(0);">contact now</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menu-item-has-mega-menu">
                                            <a href="javascript:void(0);">Events</a>
                                            <div class="mega-menu tg-fullmegamenu">
                                                <ul class="mega-menu-row">
                                                    <li class="mega-menu-col">
                                                        <div class="tg-themetabs">
                                                            <ul class="tg-themetabnav" role="tablist">
                                                                <li role="presentation" class="active">
                                                                    <a href="#tg-science" aria-controls="tg-science" role="tab" data-toggle="tab">Science</a>
                                                                </li>
                                                                <li role="presentation">
                                                                    <a href="#tg-management" aria-controls="tg-management" role="tab" data-toggle="tab">Management</a>
                                                                </li>
                                                                <li role="presentation">
                                                                    <a href="#tg-medical" aria-controls="tg-medical" role="tab" data-toggle="tab">Medical</a>
                                                                </li>
                                                                <li role="presentation">
                                                                    <a href="#tg-arts" aria-controls="tg-arts" role="tab" data-toggle="tab">Arts</a>
                                                                </li>
                                                                <li role="presentation">
                                                                    <a href="#tg-informationtechnology" aria-controls="tg-informationtechnology" role="tab" data-toggle="tab">Information Technology</a>
                                                                </li>
                                                                <li role="presentation">
                                                                    <a href="#tg-history" aria-controls="tg-history" role="tab" data-toggle="tab">History</a>
                                                                </li>
                                                                <li role="presentation">
                                                                    <a href="#tg-economics" aria-controls="tg-economics" role="tab" data-toggle="tab">Economics</a>
                                                                </li>
                                                                <li role="presentation">
                                                                    <a href="#tg-accounts" aria-controls="tg-accounts" role="tab" data-toggle="tab">Accounts</a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content tg-themetabcontent">
                                                                <div role="tabpanel" class="tab-pane tg-tabpane active" id="tg-science">
                                                                    <strong>Latest Science Courses</strong>
                                                                    <div class="tg-posts">
                                                                        <div id="tg-navtabslider" class="tg-navtabslider tg-megamenuslider owl-carousel">
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-01.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventslist.html">Become a Proffesional Teacher</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-02.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventsgrid.html">One Day Crash Course on Skills Improvement</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-03.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventdetail.html">Back To School, Open Discussion</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-04.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventslist.html">Make a Goal For Successful Your Life</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-01.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventslist.html">Become a Proffesional Teacher</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-02.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventsgrid.html">One Day Crash Course on Skills Improvement</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div role="tabpanel" class="tab-pane tg-tabpane" id="tg-management">
                                                                    <strong>Latest Management Courses</strong>
                                                                    <div class="tg-posts">
                                                                        <div id="tg-navtabslider" class="tg-navtabslider tg-megamenuslider owl-carousel">
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-03.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventsgrid.html">Back To School, Open Discussion</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-04.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventdetail.html">Make a Goal For Successful Your Life</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-01.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventslist.html">Become a Proffesional Teacher</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-02.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventsgrid.html">One Day Crash Course on Skills Improvement</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-03.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventsgrid.html">Back To School, Open Discussion</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-04.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventdetail.html">Make a Goal For Successful Your Life</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div role="tabpanel" class="tab-pane tg-tabpane" id="tg-medical">
                                                                    <strong>Latest Medical Courses</strong>
                                                                    <div class="tg-posts">
                                                                        <div id="tg-navtabslider" class="tg-navtabslider tg-megamenuslider owl-carousel">
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-02.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventdetail.html">One Day Crash Course on Skills Improvement</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-03.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventslist.html">Back To School, Open Discussion</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-01.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventsgrid.html">Become a Proffesional Teacher</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-04.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventdetail.html">Make a Goal For Successful Your Life</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-02.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventdetail.html">One Day Crash Course on Skills Improvement</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-03.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventslist.html">Back To School, Open Discussion</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div role="tabpanel" class="tab-pane tg-tabpane" id="tg-arts">
                                                                    <strong>Latest Arts Courses</strong>
                                                                    <div class="tg-posts">
                                                                        <div id="tg-navtabslider" class="tg-navtabslider tg-megamenuslider owl-carousel">
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-01.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventslist.html">Become a Proffesional Teacher</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-02.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventsgrid.html">One Day Crash Course on Skills Improvement</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-03.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventdetail.html">Back To School, Open Discussion</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-04.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventdetail.html">Make a Goal For Successful Your Life</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-01.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventslist.html">Become a Proffesional Teacher</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-02.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventsgrid.html">One Day Crash Course on Skills Improvement</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div role="tabpanel" class="tab-pane tg-tabpane" id="tg-informationtechnology">
                                                                    <strong>Latest Information Technology Courses</strong>
                                                                    <div class="tg-posts">
                                                                        <div id="tg-navtabslider" class="tg-navtabslider tg-megamenuslider owl-carousel">
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-03.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventslist.html">Back To School, Open Discussion</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-04.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventsgrid.html">Make a Goal For Successful Your Life</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-01.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventdetail.html">Become a Proffesional Teacher</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-02.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventslist.html">One Day Crash Course on Skills Improvement</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-03.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventslist.html">Back To School, Open Discussion</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-04.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventsgrid.html">Make a Goal For Successful Your Life</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div role="tabpanel" class="tab-pane tg-tabpane" id="tg-history">
                                                                    <strong>Latest History Courses</strong>
                                                                    <div class="tg-posts">
                                                                        <div id="tg-navtabslider" class="tg-navtabslider tg-megamenuslider owl-carousel">
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-02.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventsgrid.html">One Day Crash Course on Skills Improvement</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-03.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventdetail.html">Back To School, Open Discussion</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-01.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventslist.html">Become a Proffesional Teacher</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-04.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventsgrid.html">Make a Goal For Successful Your Life</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-02.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventsgrid.html">One Day Crash Course on Skills Improvement</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-03.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventdetail.html">Back To School, Open Discussion</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div role="tabpanel" class="tab-pane tg-tabpane" id="tg-economics">
                                                                    <strong>Latest Economics Courses</strong>
                                                                    <div class="tg-posts">
                                                                        <div id="tg-navtabslider" class="tg-navtabslider tg-megamenuslider owl-carousel">
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-03.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventdetail.html">Back To School, Open Discussion</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-01.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventslist.html">Become a Proffesional Teacher</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-02.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventsgrid.html">One Day Crash Course on Skills Improvement</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-04.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventdetail.html">Make a Goal For Successful Your Life</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-03.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventdetail.html">Back To School, Open Discussion</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-01.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventslist.html">Become a Proffesional Teacher</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div role="tabpanel" class="tab-pane tg-tabpane" id="tg-accounts">
                                                                    <strong>Latest Accounts Courses</strong>
                                                                    <div class="tg-posts">
                                                                        <div id="tg-navtabslider" class="tg-navtabslider tg-megamenuslider owl-carousel">
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-01.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventslist.html">Become a Proffesional Teacher</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-02.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventsgrid.html">One Day Crash Course on Skills Improvement</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-03.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventdetail.html">Back To School, Open Discussion</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-04.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventslist.html">Make a Goal For Successful Your Life</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-01.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventslist.html">Become a Proffesional Teacher</a></h3>

                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                            <div class="item">
                                                                                <article class="tg-themepost">
                                                                                    <figure class="tg-featuredimg">
                                                                                        <a href="javascript:void(0);">
                                                                                            <img src="<?= base_url('assets/images/themepost/img-02.jpg')?>" alt="image description">
                                                                                        </a>
                                                                                    </figure>
                                                                                    <div class="tg-themepostcontent">
                                                                                        <ul class="tg-themeposttags">
                                                                                            <li><a href="javascript:void(0);">Management</a></li>
                                                                                            <li><a href="javascript:void(0);">Science</a></li>
                                                                                        </ul>
                                                                                        <div class="tg-themeposttitle">
                                                                                            <h3><a href="eventsgrid.html">One Day Crash Course on Skills Improvement</a></h3>
                                                                                        </div>
                                                                                        <ul class="tg-matadata">
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <i class="fa fa-comment-o"></i>
                                                                                                    <span>1205</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                        <span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a data-new="new" href="results.html">Results</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="javascript:void(0);">Admissions</a>
                                            <ul class="sub-menu">
                                                <li><a href="admissions.html">Admissions</a></li>
                                                <li><a href="admissionsdetail.html">Admission Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="javascript:void(0);">Depts</a>
                                            <ul class="sub-menu">
                                                <li><a href="departments.html">Departments</a></li>
                                                <li><a href="departmentdetail.html">Department Detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="campuses.html">Campuses</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="javascript:void(0);">Contact us</a>
                                            <ul class="sub-menu">
                                                <li><a href="contactusvone.html">Contact us V-one</a></li>
                                                <li><a href="contactusvtwo.html">Contact us V-two</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="javascript:void(0);">Pages</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children">
                                                    <a href="javascript:void(0);">About University</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="aboutcampuslife.html">Our Campus Life</a></li>
                                                        <li><a href="abouthonorsawards.html">Our Honor &amp; Awards</a></li>
                                                        <li><a href="aboutleadership.html">Our Leadership</a></li>
                                                        <li><a href="aboutobjectives.html">OurObjectives</a></li>
                                                        <li><a href="aboutouridentity.html">Our Identity</a></li>
                                                        <li><a href="aboutrectormessage.html">Rector Message</a></li>
                                                        <li><a href="aboutvisionmission.html">Our Missions</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="javascript:void(0);">News</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="newslist.html">News List</a></li>
                                                        <li><a href="newsgrid.html">News Grid</a></li>
                                                        <li><a href="newsgridsidebar.html">News Grid Sidebar</a></li>
                                                        <li><a href="newsdetail.html">News Detail</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="javascript:void(0);">Our Jobs</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="jobs.html">Jobs</a></li>
                                                        <li><a href="jobdetail.html">Job Detail</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="javascript:void(0);">Others</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="gallery.html">gallary</a></li>
                                                        <li><a href="faqs.html">FAQ</a></li>
                                                        <li><a href="404error.html">404 Error</a></li>
                                                        <li><a href="comingsoon.html">coming soon</a></li>
                                                    </ul>
                                                </li>
                                            --
                                            </ul>
                                        </li>--s>
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
        -->

        