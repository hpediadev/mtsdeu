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
              <h3 class="box-title">Form Artikrel</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url('webadmsekolah/artikel/simpanartikel')?>">
              <div class="box-body">
                <div class="col-md-8">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul</label>
                  <input type="text" class="form-control" id="" placeholder="Enter email" required minlength="34" name="judul" >
                </div>
                
                <div class="form-group">
                  <input type="hidden" name="sub" value="">
                  <label for="exampleInputEmail1">Text</label>
                  <textarea name="art" class="ckeditor" required="" id="ckeditor"></textarea>
                </div>
              </div>
                <div class="col-md-4">
              <div class="form-group">
                  <label>Kategori</label>
                  <select class="form-control" name="kate" required>
                    <option value="">Kategori</option>
                    <option value="berita">Kegiatan Sekolah</option>
                    <option value="humas">Kegiatan Humas</option>
                    <option value="adiwiyata">Kegiatan Adiwiyata</option>
                    <option value="prestasi">Prestasi</option>
                    <option value="osis">Kegiatan OSIS</option>
                    <option value="extra">Kegiatan Extra Kurikuler</option>
                    <option value="informasi">Pengumumnan Ekolah</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Gambar</label>
                  <input type="file" id="exampleInputFile" required=""  value="" name="gambar" >

                </div>

                
                
                <div class="form-group">

                  <label for="exampleInputEmail1">Gambar Tambahan</label><br>
                <button type="button" class="btn btn-primary btn-xs" onclick="window.open('<?= base_url('webadmsekolah/artikel/addfoto')?>','new','width=500,height=400')"><i class="fa fa-plus"></i> Tambah Foto</button>
                  
                </div>
              </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                 <a href="<?= base_url('webadmsekolah/artikel')?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button></a>         
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Simpan</button>     
               </div>
            </form>
          </div>
        </div>
      </div>
    </section>
