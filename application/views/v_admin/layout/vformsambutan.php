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
              <h3 class="box-title">Form sambutan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url('webadmsekolah/sambutan/simpan')?>">
              <div class="box-body">
              
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul</label>
                  <input type="text" class="form-control" id="" p="Enter email" required minlength="34" name="judul" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Gambar</label>
                  <input type="file" id="exampleInputFile" required=""  value="" name="gambar" >

                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Text</label>
                  <textarea name="art" class="ckeditor" required="" id="text-ckeditor"></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Simmpan</button>
                 <a href="<?= base_url('webadmsekolah/sambutan')?>"><button type="button" class="btn btn-danger"><i class="fa fa-check"></i> Kembali</button></a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
