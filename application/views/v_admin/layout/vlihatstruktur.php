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
              <h3 class="box-title">Struktur Organisasi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach ($struktur as $row) {
                                        ?>
            <div class="nav-tabs-custom">

            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                 <div class="post">
                  <!-- /.user-block -->
                  <h3><a href="#"><?= $row->PERIODE?></a></h3>
                  <img width="90%" src="<?= base_url('uploads/artikel/'.$row->STRUKTUR)?>" alt="user image">
                 

                </div>
                <div class="box-footer">
                 <a href="<?= base_url('webadmsekolah/struktur')?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button></a>
              </div>
                <!-- Post -->
                
                  
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              

              
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
          <?php } ?>
          </div>
        </div>
      </div>
    </section>