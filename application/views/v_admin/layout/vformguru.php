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
              <h3 class="box-title">Form Guru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url('webadmsekolah/guru/simpan')?>">
              <div class="box-body">
              
                <div class="form-group">
                  <label for="exampleInputEmail1">NIG</label>
                  <input type="text" class="form-control" id="" p="NIG" required  name="nig" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" id="" p="Nama" required  name="nama" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jenis Kelamin</label>
                  <select class="form-control" name="jk" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="1">Laki-laki</option>
                    <option value="2">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jabatan</label>
                  
                  <select class="form-control" name="jbt" required>
                    <option value="">Pilih Jabatan</option>
                    <option value="1">Kepala Sekolah</option>
                    <option value="2">Waka Kurikulum</option>
                    <option value="3">Waka Humas</option>
                    <option value="4">BK</option>
                    <option value="5">Waka Kesiswaan</option>
                    <option value="6">Tata Usaha</option>
                    <option value="7">Operator</option>
                    <option value="8">Guru</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Gambar</label>
                  <input type="file" id="exampleInputFile" required=""  value="" name="gambar" >

                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                 <a href="../../guru"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
