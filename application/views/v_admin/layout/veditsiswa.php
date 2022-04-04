<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Data Siswa Pertahun</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php 
            foreach($data as $r){
             ?>
            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url('webadmsekolah/siswa/simpanedit')?>">
              <div class="box-body">
                <div class="col-md-12">
                 <div class="form-group">
                  <label>Tahun Pelajaran</label>
                  <input type="text" class="form-control" readonly id="" value="<?= $r->TP?>" ppp="Enter email" required  name="vii" >
                  <input type="hidden" name="id" value="<?= $r->IDSISWA?>">
                </div>
                </div>  
                <div class="col-md-2">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Kelas VII L</label>
                  <input type="text" class="form-control" id="" value="<?= $r->X?>" ppp="Enter email" required  name="vii" >
                </div>
                </div>
                <div class="col-md-2">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Kelas VII P</label>
                  <input type="text" class="form-control" id="" value="<?= $r->XP?>" ppp="Enter email" required  name="viip" >
                </div>
                </div>
                <div class="col-md-2">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Kelas VIII L</label>
                  <input type="text" class="form-control" value="<?= $r->XI?>" id="" ppp="Enter email" required  name="viii" >
                </div>
                </div>
                <div class="col-md-2">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Kelas VIII P</label>
                  <input type="text" class="form-control" value="<?= $r->XIP?>" id="" ppp="Enter email" required  name="viiip" >
                </div>
                </div>
                <div class="col-md-2">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Kelas IX L</label>
                  <input type="text" class="form-control" value="<?= $r->XII?>" id="" ppp="Enter email" required  name="ix" >
                </div>
                </div>
                <div class="col-md-2">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Kelas IX P</label>
                  <input type="text" class="form-control" value="<?= $r->XIIP?>" id="" ppp="Enter email" required  name="ixp" >
                </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                 <a href="<?= base_url('webadmsekolah/siswa')?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button></a>             
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Simpan</button>
                 </div>
            </form>
          <?php } ?>
          </div>
        </div>
      </div>
    </section>
