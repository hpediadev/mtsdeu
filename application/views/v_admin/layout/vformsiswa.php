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
            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url('webadmsekolah/siswa/simpan')?>">
              <div class="box-body">
                <div class="col-md-12">
                 <div class="form-group">
                  <label>Tahun Pelajaran</label>
                  <select class="form-control" name="tp" required>
                    <option value="">Tahun Pelajaran</option>
                    <?php 
                    for ($i=date('Y'); $i >=1981 ; $i--) { 
                     ?>
                    <option value="<?= $i.'/'.($i+1) ?>"><?= $i.'/'.($i+1) ?></option>
                    <?php } ?>
                  </select>
                </div>
                </div>  
                <div class="col-md-2">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Kelas VII L</label>
                  <input type="text" class="form-control" id="" ppp="Enter email" required  name="vii" >
                </div>
                </div>
                <div class="col-md-2">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Kelas VII P</label>
                  <input type="text" class="form-control" id="" ppp="Enter email" required  name="viip" >
                </div>
                </div>
                <div class="col-md-2">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Kelas VIII L</label>
                  <input type="text" class="form-control" id="" ppp="Enter email" required  name="viii" >
                </div>
                </div>
                <div class="col-md-2">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Kelas VIII P</label>
                  <input type="text" class="form-control" id="" ppp="Enter email" required  name="viiip" >
                </div>
                </div>
                <div class="col-md-2">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Kelas IX L</label>
                  <input type="text" class="form-control" id="" ppp="Enter email" required  name="ix" >
                </div>
                </div>
                <div class="col-md-2">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Kelas IX P </label>
                  <input type="text" class="form-control" id="" ppp="Enter email" required  name="ixp" >
                </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                 <a href="<?= base_url('webadmsekolah/siswa')?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button></a>         
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Simpan</button>     </div>
            </form>
          </div>
        </div>
      </div>
    </section>
