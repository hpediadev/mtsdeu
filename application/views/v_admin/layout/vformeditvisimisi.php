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
             <?php foreach ($data as $row) {?>
            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url('webadmsekolah/visimisi/simpanedit')?>">
              <div class="box-body">
              
                <div class="form-group">
                  <label for="exampleInputEmail1">Text</label>
                  <input type="hidden" name="id" value="<?= $row->IDVISIMISI?>">
                  <textarea name="art" class="ckeditor" required="" id="text-ckeditor"><?= $row->VISIMISI?></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                 <a href="<?= base_url('webadmsekolah/visimisi')?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Simpan</button>
              </div>
            </form>
             <?php }?>
          </div>
        </div>
      </div>
    </section>
