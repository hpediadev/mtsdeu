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
              <h3 class="box-title">Form Visi-Misi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url('webadmsekolah/visimisi/simpan')?>">
              <div class="box-body">
              
                <div class="form-group">
                  <label for="exampleInputEmail1">Text</label>
                  <textarea name="art" class="ckeditor" required="" id="text-ckeditor"></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Simmpan</button>
                 <a href="../visimisi"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button></a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
