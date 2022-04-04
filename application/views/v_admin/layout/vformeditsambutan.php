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
              <h3 class="box-title">Form Edit sambutan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

                  <?php foreach ($DataArtikel as $row) {?>
            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url('webadmsekolah/sambutan/simpanedit')?>">
              <div class="box-body">
              
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul</label>
                  <input type="text" class="form-control" id="" value="<?php echo $row->JUDUL ?>" p="Masukkan Judul" required minlength="4" name="judul" >
                  <input type="hidden" class="form-control" id="" value="<?php echo $row->IDS ?>" p="Masukkan Judul" required minlength="34" name="idsambutan" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Gambar Asal</label><br><br>
                  <img src="<?php echo BASE_URL('uploads/artikel/'.$row->GAMBAR)?>" width="200px" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Gambar</label>
                  <input type="file" id="exampleInputFile"  value="" name="gambar" >

                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Uraian</label>
                <textarea name="art" class="ckeditor" required="" id="text-ckeditor"><?= $row->SAMBUTAN?></textarea>


                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                 <a href="<?= base_url('webadmsekolah/sambutan')?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Simpan</button>
              </div>
            </form>
                  <?php  }  ?>
          </div>
        </div>
      </div>
    </section>
