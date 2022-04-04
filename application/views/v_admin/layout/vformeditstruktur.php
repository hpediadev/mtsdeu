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
              <h3 class="box-title">Form Struktur</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach ($struktur as $row) {?>
            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url('webadmsekolah/struktur/simpanedit')?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Masa Priode</label>
                  <input type="text" class="form-control" id="" value="<?= $row->PERIODE?>" p="Periode" required  name="periode" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Struktur Asal</label>
                  <input type="hidden" name="id" value="<?= $row->IDSTRUKTUR?>">
                  <br>
                  <img src="<?= base_url('uploads/artikel/'.$row->STRUKTUR)?>" id="exampleInputFile" width="300px">

                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Struktur Baru</label>
                  <input type="file" id="exampleInputFile" requirsed=""  value="" name="gambar" >

                </div>
                

              <div class="box-footer">
                 <a href="../../struktur"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Simpan</button>
              </div>
            </form>
          <?php } ?>

          </div>
        </div>
      </div>
    </section>
