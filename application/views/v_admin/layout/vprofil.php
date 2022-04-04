<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <?php foreach ($lembaga as $row) {
            # code...
           ?>

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('uploads/'.$row->LOGO)?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $row->NAMALEMBAGA ?></h3>

              <p class="text-muted text-center"><?php echo $row->ALAMATLEMBAGA ?></p>
              <strong><i class="fa fa-book margin-r-5"></i> Nama Sekolah</strong>
              <p class="text-muted pull-right">
                <?php echo $row->NAMALEMBAGA ?>
              </p>
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> NPSN</strong>
              <p class="text-muted pull-right">
                <?php echo $row->NPSN ?>
              </p>
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> Jenis Lembaga</strong>
              <p class="text-muted pull-right">
                <?php echo $row->JENISLEMBAGA ?>
              </p>
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> Alamat Lembaga</strong>
              <p class="text-muted pull-right">
                <?php echo $row->ALAMATLEMBAGA ?>
              </p>
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> Email</strong>
              <p class="text-muted pull-right">
                <?php echo $row->EMAILLEMBAGA ?>
              </p>
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> Telp.</strong>
              <p class="text-muted pull-right">
                <?php echo $row->TELP ?>
              </p>
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> Hp.</strong>
              <p class="text-muted pull-right">
                <?php echo $row->HP ?>
              </p>
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> Fax.</strong>
              <p class="text-muted pull-right">
                <?php echo $row->FAX ?>
              </p>
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> Facebook</strong>
              <p class="text-muted pull-right">
                <?php echo $row->FACEBOOK ?>
              </p>
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> Twitter</strong>
              <p class="text-muted pull-right">
                <?php echo $row->TWITTER ?>
              </p>
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> Instagram</strong>
              <p class="text-muted pull-right">
                <?php echo $row->INSTAGRAM ?>
              </p>
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> Youtube</strong>
              <p class="text-muted pull-right">
                <?php echo $row->YOUTUBE ?>
              </p>
              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> Kepala Sekolah</strong>
              <p class="text-muted pull-right">
                <?php echo $row->KEPALA ?>
              </p>
              <hr>

                 <a href="../../profilsekolah"><button type="button" class="btn btn-danger">Kembali</button>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        <?php } ?>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->