
    <!-- Main content -->


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <?php 
        if(!empty($this->session->flashdata("rubah"))){
         ?>
        <div class="col-xs-12"> <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <b><i class="icon fa fa-check"></i> Selamat...!. </b><?php echo $this->session->flashdata('rubah');  ?>
              </div>
            <?php }
        if(!empty($this->session->flashdata("data"))){
         ?>
        <div class="col-xs-12"> <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <b><i class="icon fa fa-check"></i> Selamat...!. </b><?php echo $this->session->flashdata('data');  ?>
              </div>
            <?php }
        if(!empty($this->session->flashdata("gagal"))){
         ?>
        <div class="col-xs-12"> <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <b><i class="icon fa fa-close"></i> Perhatian...!. </b><?php echo $this->session->flashdata('gagal');  ?>
              </div>
            <?php }
        if(!empty($this->session->flashdata("besar"))){
         ?>
        <div class="col-xs-12"> <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <b><i class="icon fa fa-close"></i> Perhatian...!. </b><?php echo $this->session->flashdata('besar');  ?>
              </div>
            <?php }
        if(!empty($this->session->flashdata("png"))){
         ?>
        <div class="col-xs-12"> <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <b><i class="icon fa fa-close"></i> Perhatian...!. </b><?php echo $this->session->flashdata('png');  ?>
              </div>
            <?php }
            ?> 
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Artikel</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Judul</th>
                  <th>Gambar</th>
                  <th>Uraian</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody> 
                  <?php foreach ($DataArtikel as $row) {
                                        ?>
                <tr>
                  <td><?php echo $row->JUDUL ?></td>
                  <td><img src="<?php echo BASE_URL('uploads/artikel/'.$row->GAMBAR)?>" width="150px" ></td>
                  <td><?php echo $row->IDARTIKEL ?></td>
                  <td>
                    <div>
                    <a href="<?php echo base_url('webadmsekolah/artikel/hapus/'.$row->IDARTIKEL) ?>"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>
                    <a href="<?php echo base_url('webadmsekolah/artikel/edit/'.$row->IDARTIKEL) ?>"><button  type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></a>
                    <a href="<?php echo base_url('webadmsekolah/artikel/lihat/'.$row->IDARTIKEL) ?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-search"></i></button></a>
                    </div>
                  </td>
                </tr>
                  <?php 
                }
                   ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Judul</th>
                  <th>Gambar</th>
                  <th>Aksi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    