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
            <?php foreach($data->result() as $row) {?>
            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url('webadmsekolah/guru/simpanedit')?>">
              <div class="box-body">
              
                <div class="form-group">
                  <label for="exampleInputEmail1">NIG</label>
                  <input type="text" class="form-control" id="" value="<?= $row->NIG?>" p="NIG" required  name="nig" >
                  <input type="text" class="form-control" id="" value="<?= $row->IDGURU?>" p="NIG" required  name="id" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" id="" value="<?= $row->NAMAGURU?>" p="Nama" required  name="nama" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jenis Kelamin</label>
                  <?php 
                    $l='';
                    $p='';
                    if($row->JKGURU==1)
                    $l='selected';
                    else if($row->JKGURU==2)
                    $p='selected';
                   ?>
                  <select class="form-control" name="jk" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option <?= $l?> value="1">Laki-laki</option>
                    <option <?= $p?> value="2">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jabatan</label>
                  
                  <?php 
                    $ks='';
                    $kur='';
                    $hum='';
                    $bk='';
                    $kes='';
                    $tu='';
                    $op='';
                    $gr='';
                    if($row->JABATAN==1)
                    $ks='selected';
                    else if($row->JABATAN==2)
                    $kur='selected';
                    else if($row->JABATAN==3)
                    $hum='selected';
                    else if($row->JABATAN==4)
                    $bk='selected';
                    else if($row->JABATAN==5)
                    $kes='selected';
                    else if($row->JABATAN==6)
                    $tu='selected';
                    else if($row->JABATAN==7)
                    $op='selected';
                    else if($row->JABATAN==8)
                    $gr='selected';
                   ?>
                  <select class="form-control" name="jbt" required>
                    <option  value="">Pilih Jabatan</option>
                    <option <?= $ks?> value="1">Kepala Sekolah</option>
                    <option <?= $kur?> value="2">Waka Kurikulum</option>
                    <option <?= $hum?> value="3">Waka Humas</option>
                    <option <?= $bk?> value="4">BK</option>
                    <option <?= $kes?> value="5">Waka Kesiswaan</option>
                    <option <?= $tu?> value="6">Tata Usaha</option>
                    <option <?= $op?> value="7">Operator</option>
                    <option <?= $gr?> value="8">Guru</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Gambar</label>
                  <input type="file" id="exampleInputFile" requisred=""  value="" name="gambar" >

                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                 <a href="../../guru"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Simpan</button>
              </div>
            </form>
          <?php } ?>
          </div>
        </div>
      </div>
    </section>
