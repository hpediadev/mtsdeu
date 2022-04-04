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
              <h3 class="box-title">Form Testi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url('webadmsekolah/testi/simpan')?>">
              <div class="box-body">
                <div class="col-md-8">
                <div class="form-group">
                  <label for="exampleInputEmail1">NAMA </label>
                  <input type="text" class="form-control" id="" ppp="Enter email" required  name="nama" >
                </div>
                
              <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="sts" required>
                    <option value="">Status</option>
                    <option value="1">Bekerja</option>
                    <option value="2">Kuliah</option>
                    <option value="3">Pengangguran</option>
                  </select>
                </div>
                
                <div class="form-group">
                  <input type="hidden" name="sub" value="">
                  <label for="exampleInputEmail1">Text</label>
                  <textarea name="art" class="ckeditor" required="" id="ckeditor"></textarea>
                </div>
              </div>
                <div class="col-md-4">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Nama Kantor / Kampus </label>
                  <input type="text" class="form-control" id="" ppp="Enter email" required  name="kantor" >
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Jabatan </label>
                  <input type="text" class="form-control" id="" ppp="Enter email" required  name="jab" >
                </div>
              <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="jk" required>
                    <option value="">Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              <div class="form-group">
                  <label>Tahun Masuk</label>
                  <select class="form-control" name="masuk" required>
                    <option value="">Tahun Masuk</option>
                    <?php 
                    for ($i=date('Y'); $i >=2014 ; $i--) { 
                     ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                    <?php } ?>
                  </select>
                </div>
              <div class="form-group">
                  <label>Tahun Lulus</label>
                  <select class="form-control" name="lulus" required>
                    <option value="">Tahun Lulus</option>
                    <?php 
                    for ($i=date('Y'); $i >=2017 ; $i--) { 
                     ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                    <?php } ?>
                  </select>
                </div>
              <div class="form-group">
                  <label>Penilaian</label>
                  <select class="form-control" name="nilai" required>
                    <option value="">Penilaian</option>
                    <?php 
                    for ($i=1; $i < 6 ; $i++) { 
                     ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                    <?php } ?>
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
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Simmpan</button>
                 <a href="<?= base_url('webadmsekolah/artikel')?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button></a>              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
