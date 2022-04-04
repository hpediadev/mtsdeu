
    <!-- Main content -->


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

        <?php 
        if(!empty($this->session->flashdata("rubah"))){
         ?>
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <b><i class="icon fa fa-check"></i> Selamat...!. </b><?php echo $this->session->flashdata('rubah');  ?>
              </div>
            <?php }
        if(!empty($this->session->flashdata("data"))){
         ?>
        <div class="alert alert-success alert-dismissible">
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
         ?>
        <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <b><i class="icon fa fa-close"></i> Perhatian...!. </b><?php echo $this->session->flashdata('besar');  ?>
              </div>
            <?php }
        if(!empty($this->session->flashdata("png"))){
         ?>
        <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <b><i class="icon fa fa-close"></i> Perhatian...!. </b><?php echo $this->session->flashdata('png');  ?>
              </div>
            <?php }
            ?> 

            <a href="<?= base_url('webadmsekolah/testi/tambah/')?>"><button class="btn btn-primary btn-sm btn-block"><i class="fa fa-plus"></i> Tambah Testimoni</button></a>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data testi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <!-- <th>Gambar</th> -->
                  <th width="40px">Aksi</th>
                  <th>Nama Alumni</th>
                  <th>Testimuni Alumni</th>
                </tr>
                </thead>
                <tbody> 
                  <?php foreach ($data as $row) {
                                        ?>
                <tr>
                  <!-- <td><img src="<?php echo BASE_URL('uploads/testi/'.$row->GAMBAR)?>" width="150px" ></td> -->
                  <td>
                    <div>
                    <a onClick="confirm_modal('<?php echo base_url('webadmsekolah/testi/hapus/'.$row->IDTESTI) ?>');" ><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a>
                    <a href="<?php echo base_url('webadmsekolah/testi/edit/'.$row->IDTESTI) ?>"><button  type="button" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button></a>
                    <!-- <a href="<?php echo base_url('webadmsekolah/testi/lihat/'.$row->IDTESTI) ?>"><button type="button" class="btn btn-primary btn-xs"><i class="fa fa-search"></i></button></a> -->
                    </div>
                  </td>
                  <td><?php echo $row->NAMATESTI ?></td>
                  <td><?php echo $row->TESTIMONI ?></td>
                </tr>
                  <?php 
                }
                   ?>
                </tbody>
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
    
<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Anda yakin akan menghapus data ini.. ?</h4>
      </div>
                
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger btn-sm" id="delete_link">Hapus</a>
        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<!-- Javascript untuk popup modal Delete-->
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>   