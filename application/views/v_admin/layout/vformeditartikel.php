<?php
defined('BASEPATH') OR exit('No direct script access allowed');

foreach ($artikel as $row) {
  # code...

?>
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Artikrel</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url('webadmsekolah/artikel/simpanedit')?>" >
              <div class="box-body">
                <div class="col-md-8">
              
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul</label>
                  <input type="text" class="form-control" id="" value="<?= $row->JUDUL?>" p="Enter email" required minlength="34" name="judul" >
                </div>
                <div class="form-group">

                  <input type="hidden" name="sub" value="<?= $row->SUB?>">
                  <label for="exampleInputEmail1">Text</label>
                  <textarea name="art" class="ckeditor" required="" id="text-ckeditor"><?= $row->URAIAN?></textarea>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Kategori</label>
                  <select class="form-control" name="kate" required>
                    <option value="">Kategori</option>
                    <?php
                    $sekolah ='';
                    $humas ='';
                    $adiwiyata ='';
                    $osis ='';
                    $extra ='';
                    $prestasi ='';
                    $informasi ='';
                    if($row->KATEGORI=='sekolah'){
                      $sekolah = 'selected';
                    }
                    else if($row->KATEGORI=='humas'){
                      $humas = 'selected';
                    }
                    else if($row->KATEGORI=='adiwiyata'){
                      $adiwiyata = 'selected';
                    }
                    else if($row->KATEGORI=='osis'){
                      $osis = 'selected';
                    }
                    else if($row->KATEGORI=='extra'){
                      $extra = 'selected';
                    }
                    else if($row->KATEGORI=='prestasi'){
                      $prestasi = 'selected';
                    }
                    else if($row->KATEGORI=='informasi'){
                      $informasi = 'selected';
                    }

                    ?>
                    <option <?= $sekolah ?>  value="sekolah">Kegiatan Sekolah</option>
                    <option <?= $humas ?>  value="humas">Kegiatan Humas</option>
                    <option  <?= $adiwiyata ?> value="adiwiyata">Kegiatan Adiwiyata</option>
                    <option  <?= $prestasi ?> value="prestasi">Prestasi</option>
                    <option  <?= $osis ?> value="osis">Kegiatan OSIS</option>
                    <option  <?= $extra ?> value="extra">Kegiatan Extra Kurikuler</option>
                    <option <?= $informasi ?>  value="informasi">Pengumumnan Ekolah</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Gambar Asal</label><br>
                  <img src="<?= base_url('uploads/artikel/'.$row->GAMBAR);?>" height="100px">
                  <input type="hidden" id="exampleInputFile" required=""  value="<?= $row->IDARTIKEL ?>" name="id" >
                  <input type="hidden" id="exampleInputFile" required=""  value="<?= $row->GAMBAR ?>" name="gambarasal" >

                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Gambar</label>
                  <input type="file" id="exampleInputFile" requyired=""  value="" name="gambar" >

                </div>
                <div class="form-group">

                  <label for="exampleInputEmail1">Gambar Tambahan</label><br>
                <button type="button" class="btn btn-primary btn-xs" onclick="window.open('<?= base_url('webadmsekolah/artikel/addfoto')?>','new','width=500,height=400')"><i class="fa fa-plus"></i> Tambah Foto</button>
                  
                </div>
              </div>
              
              </div>
              <!-- /.box-body -->


                
              <div class="box-footer">
                 <a href="<?= base_url('webadmsekolah/artikel')?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button></a>
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
<?php }?>
