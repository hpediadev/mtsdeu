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
              <h3 class="box-title">Form Tags</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
            foreach ($GetData as $row) {
              # code...
            

            ?>
            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url('webadmsekolah/tags/simpan')?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul Link</label>
                  <input type="text" class="form-control" id="" value="<?= $row->JUDULLINK?>" placeholder="Enter email" required  name="linkJ" ><input type="hidden" class="form-control" id="" value="<?= $row->IDTAG?>" placeholder="Enter email" required  name="id" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Link Tampil</label>
                  <input type="text" class="form-control" id="" value="<?= $row->TAMPILLINK?>" placeholder="Enter email" required  name="linkT" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Link</label>
                  <input type="text" class="form-control" id="" value="<?= $row->LINK?>" placeholder="Enter email" required  name="link" >
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                 <a href="../../tags"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Simpan</button>
              </div>
            </form>
          <?php }?>
          </div>
        </div>
      </div>
    </section>
