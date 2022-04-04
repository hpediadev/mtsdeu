<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="content">
      <div class="row">
        <?php foreach ($lembaga as $row) {
                                        ?>
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Sekolah</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url('webadmsekolah/profilsekolah/simpanedit')?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">NAMA SEKOLAH</label>
                  <input type="hidden" value="<?= $row->NPSN?>" name="npsnasal">
                  <input type="text" readonly class="form-control" id="" p="Enter email" name="nama" value="<?= $row->NAMALEMBAGA?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">NPSN</label>
                  <input type="text" class="form-control" id="" p="Enter email" name="npsn" value="<?= $row->NPSN?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">JENIS SEKOLAH</label>
                  <input type="text" readonly class="form-control" id="" p="Enter email" name="jenis" value="<?= $row->JENISLEMBAGA?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">KEPALA SEKOLAH</label>
                  <input type="text" class="form-control" id="" p="Enter email" name="kpl" value="<?= $row->KEPALA?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">ALAMAT SEKOLAH</label>
                  <input type="text" class="form-control" id="" p="Enter email" name="alamat" value="<?= $row->ALAMATLEMBAGA?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">EMAIL</label>
                  <input type="f" class="form-control" id="" p="Enter email" name="email" value="<?= $row->EMAILLEMBAGA?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">TELP</label>
                  <input type="text" class="form-control" id="" p="Enter email" name="telp" value="<?= $row->TELP?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">HP</label>
                  <input type="text" class="form-control" id="" p="Enter email" name="hp" value="<?= $row->HP?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">FAX</label>
                  <input type="text" class="form-control" id="" p="Enter email" name="fax" value="<?= $row->FAX?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">FACEBOOK</label>
                  <input type="text" class="form-control" id="" p="Enter email" name="fb" value="<?= $row->FACEBOOK?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">TWITTER</label>
                  <input type="text" class="form-control" id="" p="Enter email" name="tw" value="<?= $row->TWITTER?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">INSTAGRAM</label>
                  <input type="text" class="form-control" id="" p="Enter email" name="ig" value="<?= $row->INSTAGRAM?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">YOUTUBE</label>
                  <input type="text" class="form-control" id="" p="Enter email" name="yt" value="<?= $row->YOUTUBE?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">LOGO SEKOLAH</label>
                  <input type="hidden" value="<?= $row->LOGO?>" name="logoasal">
                  <input type="file" id="exampleInputFile"  value="" name="logo" >

                  <p class="help-block">Example block-level help text here.</p>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                 <a href="../../profilsekolah"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Simpan</button>
              </div>
            </form>
          </div>
        <?php } ?>
        </div>
      </div>
    </section>