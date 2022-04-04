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
              <h3 class="box-title">Form Edit Slide</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach ($slide as $row) {
                                        ?>
            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url('webadmsekolah/slide/simpanedit')?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul</label>
                  <input type="text" class="form-control" id="" value="<?= $row->JUDUL?>" placeholder="Enter email" name="judul" >
                </div>
                <div class="form-group">
                  <label>Gambar Asal</label><br>
                  <img src="<?= base_url('uploads/').$row->GAMBAR?>" height="100px">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Gambar</label>
                  <input type="hidden" value="<?= $row->IDSLIDE?>"  name="id" >
                  <input type="hidden" value="<?= $row->GAMBAR?>"  name="gambarasli" >
                  <input type="file" id="exampleInputFile"  value="" name="gambar" >

                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                 <a href="../../slide"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Simpan</button>
              </div>
            </form>
          <?php } ?>
          </div>
        </div>
      </div>
    </section>