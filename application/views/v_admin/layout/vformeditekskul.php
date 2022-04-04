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
              <h3 class="box-title">Form Edit Extra Kurikuler</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach($data->result() as $r){ ?>
            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url('webadmsekolah/ekskul/simpanedit')?>">
              <div class="box-body">
                <div class="col-md-8">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Extra Kurikuler</label>
                  <input type="text" class="form-control" id="" p="Nama Ekskul" value="<?= $r->NAMAEXTRA?>" required  name="panjang" >
                  <input type="hidden" class="form-control" id="" p="Nama Ekskul" value="<?= $r->IDEXTRA?>" required  name="id" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Keterangan Extra Kurikuler</label>
                  <textarea name="keterangan" class="ckeditor" required="" value="<?= $r->URAIANEXTRA?>" id="text-ckeditor"></textarea>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Pendek Extra Kurikuler </label>
                  <input type="text" class="form-control" id="" p="Nama Pendek Ekskul" value="<?= $r->IDEXTRA?>" required  name="pendek" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Logo Extra Kurikuler</label>
                  <div>
                    <img width="200px" src="<?= base_url('uploads/artikel/'.$r->GAMBAREXTRA)?>">
                  </div>

                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Logo Extra Kurikuler</label>
                  <input type="file" id="exampleInputFile" requsired=""  value="" name="gambar" >

                </div>
              </div>
              <!-- /.box-body -->
            </div>

              <div class="box-footer">
                 <a href="../../ekskul"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Simpan</button>
              </div>
            </form>
          <?php } ?>
          </div>
        </div>
      </div>
    </section>
