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
              <h3 class="box-title">Form Testi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach ($data as $r) {?>
            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url('webadmsekolah/testi/simpanedit')?>">
              <div class="box-body">
                <div class="col-md-8">
                <div class="form-group">
                  <label for="exampleInputEmail1">NAMA </label>
                  <input type="text" class="form-control" id="" value="<?= $r->NAMATESTI?>" ppp="Enter email" required  name="nama" >
                  <input type="text" name="id" value="<?= $r->IDTESTI?>">
                </div>
                
              <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="sts" required>
                    <?php 
                    $ce='';
                    $ce2='';
                    $ce3='';
                    if($r->PEKERJAAN==1)
                      $ce = 'selected';
                    else if($r->PEKERJAAN==2)
                      $ce2 = 'selected';
                    else if($r->PEKERJAAN==3)
                      $ce3='selected';
                     ?>
                    <option value="">Status</option>
                    <option <?= $ce ?> value="1">Bekerja</option>
                    <option <?= $ce2 ?> value="2">Kuliah</option>
                    <option <?= $ce3 ?> value="3">Pengangguran</option>
                  </select>
                </div>
                
                <div class="form-group">
                  <input type="hidden" name="sub" value="">
                  <label for="exampleInputEmail1">Text</label>
                  <textarea name="art" class="ckeditor" required="" id="ckeditor"><?= $r->TESTIMONI?></textarea>
                </div>
              </div>
                <div class="col-md-4">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Nama Kantor / Kampus </label>
                  <input type="text" class="form-control" id="" value="<?= $r->KANTOR?>" ppp="Enter email" required  name="kantor" >
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Jabatan </label>
                  <input type="text" class="form-control" id="" ppp="Enter email" value="<?= $r->JABATAN?>" required  name="jab" >
                </div>
              <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="jk" required>
                    <?php 
                    $jk1='';
                    $jk2='';
                    if($r->JK=='Laki-laki')
                      $jk1 = 'selected';
                    else if($r->JK=='Perempuan')
                      $jk2 = 'selected';
                     ?>
                    <option value="">Jenis Kelamin</option>
                    <option <?= $jk1?> value="Laki-laki">Laki-laki</option>
                    <option <?= $jk2?> value="Perempuan">Perempuan</option>
                  </select>
                </div>
              <div class="form-group">
                  <label>Tahun Masuk</label>
                  <select class="form-control" name="masuk" required>
                    <option value="">Tahun Masuk</option>
                    <?php 

                    for ($i=date('Y'); $i >=2014 ; $i--) { 
                      $b='';
                      if($r->MASUK==$i)
                        $b='selected';
                      else
                        $b='';
                     ?>
                    <option <?= $b?> value="<?= $i ?>"><?= $i ?></option>
                    <?php } ?>
                  </select>
                </div>
              <div class="form-group">
                  <label>Tahun Lulus</label>
                  <select class="form-control" name="lulus" required>
                    <option value="">Tahun Lulus</option>
                    <?php 
                    for ($i=date('Y'); $i >=2017 ; $i--) { 
                       $b='';
                      if($r->LULUS==$i)
                        $b='selected';
                      else
                        $b='';
                     ?>
                    <option <?= $b?> value="<?= $i ?>"><?= $i ?></option>
                    <?php } ?>
                  </select>
                </div>
              <div class="form-group">
                  <label>Penilaian</label>
                  <select class="form-control" name="nilai" required>
                    <option value="">Penilaian</option>
                    <?php 
                    for ($i=1; $i < 6 ; $i++) { 
                       $b='';
                      if($r->NILAI==$i)
                        $b='selected';
                      else
                        $b='';
                     ?>
                    <option <?= $b?> value="<?= $i ?>"><?= $i ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Gambar Awal</label><br> 
                  <img src="<?= base_url('uploads/artikel/'.$r->GAMBAR)?>" width="50px">

                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Gambar</label>
                  <input type="file" id="exampleInputFile"  value="" name="gambar" >

                </div>

              </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                 <a href="<?= base_url('webadmsekolah/artikel')?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button></a>           
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Simpan</button>   
               </div>
            </form>
          <?php } ?>
          </div>
        </div>
      </div>
    </section>
