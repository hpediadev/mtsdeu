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
              <h3 class="box-title">Form Edit Data User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url('webadmsekolah/profiluser/simpanuser')?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Lengkap</label>
                  <input type="text" class="form-control" id=""  requiredp="Enter email" name="nama" >
                </div>

              
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="username">
                    <!-- <span class="input-group-addon">@smkpbwaru.sch.id</span> -->
                  </div>
                  <p style="color: red">Tidak boleh ada spasi dan simbol, hanya karakter huruf dan angka saja</p>
                </div>

              <div class="form-group">
                  <label>Hak Akses</label>
                  <select class="form-control" name="level" required>
                    <option selected="" value="">Hak Akses</option>
                    <option  value="1">Super Admin</option>
                    <option   value="2">Admin</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="passsword" class="form-control"  id="" resquired p="Password" name="pbaru" >
                  <input type="hidden" class="form-control"  id="" required p="Password Baru" name="plama" >
                  <p style="color: red">Jika password kosong, password tetap yang lama</p>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <div class="box-footer">
                 <a href="<?= base_url('webadmsekolah/profiluser')?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button>
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Simmpan</button></a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>