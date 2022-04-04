<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman Admin | MTs. Miftahul Ulum</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <link rel="icon" href="<?= base_url('logo.png')?>" type="image/png" sizes="16x16">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= base_url('assets4/bootstrap/css/bootstrap.min.css')?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets4/plugins/datatables/dataTables.bootstrap.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets4/dist/css/AdminLTE.min.css')?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url('assets4/dist/css/skins/_all-skins.min.css')?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <?php 
     ?>

  <link rel="stylesheet" href="<?= base_url('assets4/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')?>">
</head>
<body class="hold-transition navbar-dark skin-blue sidebar-mini layout-fixed fixed">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>MTs</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>MTs Miftahul Ulum</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-fixed-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

              <?php
                $m = $menu['pa'];
                
                $artikel = '';
                $ps='';
                $p='';
                $identitas='';
                $tamidentitas='';
                $visimisi='';
                $sejarah='';
                $struktur='';
                $sambutan='';
                $tamidentitas='';
                $guru='';
                $ekskul='';
                $jurusan='';
                $tags='';
                $slide='';
                $ppr='';
                $profilesekolah='';
                $testi='';
                $penga='';
                $inbox='';
                $siswa='';
                if($m=='artikel'){
                  $artikel='active';
                }
                else if($m=='slide'){
                  // $ps='active';
                  $slide='active';
                }
                else if($m=='testi'){
                  // $ps='active';
                  $testi='active';
                }
                else if($m=='siswa'){
                  // $ps='active';
                  $siswa='active';
                }
                else if($m=='pengaturan'){
                  // $ps='active';
                  $penga='active';
                }
                else if($m=='saran'){
                  // $ps='active';
                  $inbox='active';
                }
                else if($m=='profilesekolah'){
                  $ppr='active';
                  $profilesekolah='active';
                }
                else if($m=='identitas'){
                  $ps='active';
                  $identitas='active';
                }
                else if($m=='tamidentitas'){
                  $ps='active';
                  $tamidentitas='active';
                }
                else if($m=='sejarah'){
                  $ps='active';
                  $sejarah='active';
                }
                else if($m=='visimisi'){
                  $ps='active';
                  $visimisi='active';
                }
                else if($m=='struktur'){
                  $ps='active';
                  $struktur='active';
                }
                else if($m=='sambutan'){
                  $ps='active';
                  $sambutan='active';
                }
                else if($m=='guru'){
                  $p='active';
                  $guru='active';
                }
                else if($m=='ekskul'){
                  $p='active';
                  $ekskul='active';
                }
                else if($m=='jurusan'){
                  $p='active';
                  $jurusan='active';
                }
                else if($m=='tags'){
                  $p='active';
                  $tags='active';
                }
                else{
                  // $ps='active';
                }
                $jumlah=0;
                if ($this->session->userdata("L")==1) {
                  $sdm = 'Super Admin';
                }
                else if ($this->session->userdata("L")==2) {
                  $sdm = 'Admin';
                }

                $jumlahpesan =  $this->db->get_where('tsaran_md',array('STATUSSARAN'=>'1'))->num_rows();
                    ?>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"><?= $jumlahpesan; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Anda Pusan <?= $jumlahpesan; ?> Pesan</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <?php
                  $this->db->order_by('IDSARAN DESC');
                  $sq = $this->db->get_where('tsaran_md', array('STATUSSARAN'=>1))->result();
                  foreach ($sq as $t) {

                  ?>
                  <li><!-- start message -->
                    <a href="<?= base_url('webadmsekolah/saran/id/'.$t->IDSARAN)?>">
                      <h4>
                        <?= substr($t->SUBJECT,0,20).' . . .'?>
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p><?= substr($t->SARAN,0,40).' . . .'?></p>
                    </a>
                  </li>
                <?php }?>
                  <!-- end message -->
                  
                </ul>
              </li>
              <li class="footer"><a href="<?= base_url('webadmsekolah/saran/id/')?>">Semua Pesan</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= base_url('uploads/'.$this->session->userdata("G"))?>" class="user-image" alt="User Image">
              <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= base_url('uploads/'.$this->session->userdata("G"))?>" class="img-circle" alt="User Image">

                <p>
                  <?=  $this->session->userdata("N").'<br>'.$sdm;?>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
               
                <div class="pull-right">
                  <a href="<?= base_url('loginadm/logout')?>" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('uploads/'.$this->session->userdata("G"))?>" class="img-circle" alt="User Image">
          
        </div>
        <div class="pull-left info">
          <p>
            <?php
                 echo $this->session->userdata("N");
        //         // set array of items in session
        //         $arraydata = array(
        //                 'author_name'  => 'Sajal Soni',
        //                 'website'     => 'http://code.tutsplus.com',
        //                 'twitter_id' => '@sajalsoni',
        //                 'interests' => array('tennis', 'travelling')
        //         );
        //         $this->session->set_userdata($arraydata);
        //     echo "Favourite Website: ". $this->session->userdata('favourite_website');
        // echo "<br>";
        // echo "Author Name: ". $this->session->userdata('author_name');
        // echo "<br>";
        // echo "Interest (Array Example): " . $this->session->userdata('interests')[0];
        // echo "<br>";

            ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>

            <br><br>
            <br><br>
        </div>
      </div>
      <!-- search form -->
     <!--  <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="">
          <a href="<?php echo base_url('webadmsekolah/beranda')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
        </li>
        <?php
        if($this->session->userdata("L")==1){
          ?>
        <li class="<?= $ppr?>">
          <a href="<?php echo base_url('webadmsekolah/profilsekolah')?>">
            <i class="fa fa-home"></i> <span>Data Sekolah</span>
          </a>
        </li>
        <li class="<?= $slide?>">
          <a href="<?php echo base_url('webadmsekolah/slide')?>">
            <i class="fa fa-dashboard"></i> <span>Data Slide</span>
            
          </a>
        </li>
      <?php }?>
        <li class="treeview <?= $artikel?>">
          <a href="<?php echo base_url('webadmsekolah/artikel')?>">
            <i class="fa fa-edit"></i> <span>Artikel</span>
          </a>
          <!-- <ul class="treeview-menu"><li><a href="<?php echo base_url('webadmsekolah/artikel')?>"><i class="fa fa-circle-o"></i> Data Artikel</a></li>
            <li><a href="<?php echo base_url('webadmsekolah/artikel/tambah')?>"><i class="fa fa-circle-o"></i> Tambah Artikel</a></li>
          </ul> -->
        </li>
        <?php
        if($this->session->userdata("L")==1){
          ?>
        <!-- <li class="tredeview">
          <a href="<?php echo base_url('webadmsekolah/tags')?>">
            <i class="fa fa-envelope-o"></i> <span>Tags</span>
          </a>
        </li> -->
     <!--    <li class="tredeview">
          <a href="<?php echo base_url('webadmsekolah/guru')?>">
            <i class="fa fa-users"></i> <span>Guru</span>
          </a>
        </li> -->
        <li class="treeview <?= $ps?>">
          <a href="#">
            <i class="fa fa-table"></i> <span>Data Profil Sekolah</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li class="<?= $identitas?>"><a href="<?php echo base_url('webadmsekolah/profil')?>"><i class="fa fa-circle-o"></i> Identitas</a></li>
          <li class="<?= $tamidentitas?>"><a href="<?php echo base_url('webadmsekolah/profil/tambah')?>"><i class="fa fa-circle-o"></i> Tambah Identitas</a></li>
          <li class="<?= $sejarah?>"><a href="<?php echo base_url('webadmsekolah/sejarah')?>"><i class="fa fa-circle-o"></i> Sejarah</a></li>
          <li class="<?= $sambutan?>"><a href="<?php echo base_url('webadmsekolah/sambutan')?>"><i class="fa fa-circle-o"></i> Sambutan</a></li>
          <li class="<?= $visimisi?>"><a href="<?php echo base_url('webadmsekolah/visimisi')?>"><i class="fa fa-circle-o"></i> Data Visi Misi</a></li>
         <!--  <li class="<?= $visimisi?>"><a href="<?php echo base_url('webadmsekolah/visimisi/tambah')?>"><i class="fa fa-circle-o"></i> Tambah Visi Misi</a></li> -->
          <li class="<?= $struktur?>"><a href="<?php echo base_url('webadmsekolah/struktur')?>"><i class="fa fa-circle-o"></i> Data Struktur</a></li>
          <!-- <li class="<?= $identitas?>"><a href="<?php echo base_url('webadmsekolah/struktur/tambah')?>"><i class="fa fa-circle-o"></i> Tambah Struktur</a></li> -->
          
          </ul>
        </li>
        <li class="treeview <?= $p?>">
          <a href="#">
            <i class="fa fa-table"></i> <span>Data Pegawai dan Extra</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li class="<?= $guru?>"><a href="<?php echo base_url('webadmsekolah/guru')?>"><i class="fa fa-circle-o"></i> Guru</a></li>
        <!--   <li class="<?= $jurusan?>"><a href="<?php echo base_url('webadmsekolah/jurusan')?>"><i class="fa fa-circle-o"></i> Jurusan</a></li> -->
          <li class="<?= $ekskul?>"><a href="<?php echo base_url('webadmsekolah/ekskul')?>"><i class="fa fa-circle-o"></i> Ekstra</a></li>
          <li class="<?= $tags?>"><a href="<?php echo base_url('webadmsekolah/tags')?>"><i class="fa fa-circle-o"></i> Tags</a></li>
          
          </ul>
        </li>
<!--         <li class="treeview">
          <a href="<?php echo base_url('webadmsekolah/jurusan')?>">
            <i class="fa fa-list-ul"></i> <span>Data Jurusan</span>
          </a>
        
        </li>
        <li class="treeview">
          <a href="<?php echo base_url('webadmsekolah/ekskul')?>">
            <i class="fa fa-bookmark-o"></i> <span>Data Ekskul</span>
          </a>
        
        </li> -->
        <li class="<?= $inbox?>">
          <a href="<?php echo base_url('webadmsekolah/saran')?>">
            <i class="fa fa-inbox"></i> <span>Pesan Masuk</span>
          </a>
        
        </li>
        <li class="<?= $testi?>">
          <a href="<?php echo base_url('webadmsekolah/testi')?>">
            <i class="fa fa-inbox"></i> <span>Alumni</span>
          </a>
        
        </li>
        <li class="<?= $siswa?>">
          <a href="<?php echo base_url('webadmsekolah/siswa')?>">
            <i class="fa fa-pie-chart"></i> <span>Grafik Siswa</span>
          </a>
        
        </li>
        <li class="<?= $penga?>">
          <a href="<?php echo base_url('webadmsekolah/profiluser')?>">
            <i class="fa fa-gear"></i> <span>Pengaturan Akun</span>
          </a>
        </li>
      <?php }?>
        <!-- <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   