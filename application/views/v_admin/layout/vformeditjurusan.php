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
              <h3 class="box-title">Form Edit Jurusan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
              foreach ($DataArtikel as $row) {
               
            ?>
            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url('webadmsekolah/jurusan/simpanedit')?>">
              <div class="box-body">
                <div class="col-md-8">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Jurusan</label>
                  <input type="text" class="form-control" value="<?= $row->NAMAPRODI?>" id="" p="Enter email" required  name="panjang" >
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Keterangan Prodi</label>
                  <textarea name="keterangan" class="ckeditor" required="" id="text-ckeditor"><?= $row->URAIAN?></textarea>
                </div>
              </div>
                <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Pendek Jurusan Tampil</label>
                  <input type="text" class="form-control" value="<?= $row->IDPRODI?>" id="" p="Enter email" required  name="pendek" >
                  <input type="hidden" class="form-control" value="<?= $row->IDPRODI?>" id="" p="Enter email" required  name="id" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Logo Jurusan Asal</label><br>
                  <img src="<?= base_url('uploads/artikel/'.$row->GAMBAR);?>" width="250px">
                  <input type="hidden" id="exampleInputFile" required=""  value="<?= $row->IDPRODI ?>" name="id" >
                  <input type="hidden" id="exampleInputFile" required=""  value="<?= $row->GAMBAR ?>" name="gambarasal" >

                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Logo Jurusan</label>
                  <input type="file" id="exampleInputFile"   value="" name="gambar" >
                  <input type="hidden" name="kompetensi">
                  <input type="hidden" name="profesi">
                  <input type="hidden" name="prestasi">

                </div>
                </div>
            </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Simmpan</button>
                 <a href="<?= base_url('webadmsekolah/jurusan')?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button></a>
              </div>
            </form>
            <?php
              }
            ?>
          </div>
        </div>
      </div>
    </section>
