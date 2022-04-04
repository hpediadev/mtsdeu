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
              <h3 class="box-title">Artikel</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach ($data as $row) {
                                        ?>
            <div class="nav-tabs-custom">

            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                 <div class="post">
                  <!-- /.user-block -->
                  <img width="250px" src="<?= base_url('uploads/artikel/'.$row->GAMBAREXTRA)?>" alt="user image">
                  <h3><a href="#"><?= $row->NAMAEXTRA?></a></h3>
                  <?= $row->URAIANEXTRA?>
                 

                </div>
                <div class="box-footer">
                 <a href="<?= base_url('webadmsekolah/ekskul')?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i> Kembali</button></a>
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