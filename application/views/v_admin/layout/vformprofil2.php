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
              <h3 class="box-title">Form Identitas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url('webadmsekolah/profil/simpan')?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul Identitas</label>
                  <input type="text" class="form-control" id="" p="Enter email" required  name="nama" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Data Identitas</label>
                  <input type="text" class="form-control" id="" p="Enter email" required  name="profil" >
                </div>
              </div>

              <div class="box-footer">
                 <a href="<?= base_url('webadmsekolah/profil')?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
