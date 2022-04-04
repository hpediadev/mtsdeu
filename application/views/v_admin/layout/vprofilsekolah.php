
    <!-- Main content -->


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12"><?php 
        if(!empty($this->session->flashdata("data"))){
         ?><div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <b><i class="icon fa fa-check"></i> Selamat...!. </b><?php echo $this->session->flashdata('data');  ?>
              </div>
            <?php }
        if(!empty($this->session->flashdata("gagal"))){
         ?>
         <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <b><i class="icon fa fa-close"></i> Perhatian...!. </b><?php echo $this->session->flashdata('gagal');  ?>
              </div>
            <?php }
        if(!empty($this->session->flashdata("besar"))){
         ?><div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <b><i class="icon fa fa-close"></i> Perhatian...!. </b><?php echo $this->session->flashdata('besar');  ?>
              </div>
            <?php }
        if(!empty($this->session->flashdata("png"))){
         ?> <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <b><i class="icon fa fa-close"></i> Perhatian...!. </b><?php echo $this->session->flashdata('png');  ?>
              </div>
            <?php }
            ?> 
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Sekolah</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Aksi</th>
                  <th>Nama Sekolah</th>
                  <th>NPSN</th>
                  <th>Jenis</th>
                  <th>Alamat</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody> 
                  <?php foreach ($dataLembaga as $row) {
                                        ?>
                <tr>
                  <td>
                    <div>
                    <a href="<?php echo base_url('webadmsekolah/profilsekolah/edit/'.$row->NPSN) ?>"><button  type="button" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button></a>
                    <a href="<?php echo base_url('webadmsekolah/profilsekolah/aksi/'.$row->NPSN) ?>"><button type="button" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button></a>
                    </div>
                  </td>
                  <td><?php echo $row->NAMALEMBAGA ?></td>
                  <td><?php echo $row->NPSN ?></td>
                  <td><?php echo $row->JENISLEMBAGA ?></td>
                  <td><?php echo $row->ALAMATLEMBAGA ?></td>
                  <td><?php echo $row->STATUSLEMBAGA ?></td>
                </tr>
                  <?php 
                }
                   ?>
                </tbody>              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    