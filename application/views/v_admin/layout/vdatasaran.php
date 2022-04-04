 <section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Inbox</h3>

              <!-- /.box-tools -->
            </div>

          <div class="box box-solid">
            <!-- <div class="box-header with-border">
              <h3 class="box-title">Folders</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div> -->
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <?php
                $jumlah=0;

                $jumlahpesan =  $this->db->get_where('tsaran_md',array('STATUSSARAN'=>'1'))->num_rows();
                    
                    ?>
                <li class="active"><a href="<?= base_url('webadmsekolah/saran/id/')?>"><i class="fa fa-inbox"></i> Inbox
                  <span class="label label-primary pull-right"><?= $jumlahpesan ?></span></a></li>
                <!-- <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                <li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a>
                </li>
                <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li> -->
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          <div class="box box-solid">
            <!-- <div class="box-header with-border">
              <h3 class="box-title">Labels</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
              </ul>
            </div> -->
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
        <!-- /.col -->
        <?php
        if($from = $this->uri->segment(3)=='id' && empty($from = $this->uri->segment(4))){

        ?>
         <div class="col-xs-9">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pesan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th>Nama</th>
                  <th>Subject</th>
                  <th>Tanggal</th>
                </tr>
                </thead>
                <tbody>  <?php
                    foreach ($DataSaran as $row) {
                       $tanggal = substr($row->TANGGALSARAN, 0,10);
                                    $hari   = date('N', strtotime($tanggal)); 
                                    $day = array('','Senin','Selasa', 'Rabu','Kamis','Jumat','Sabtu');
                                    $bln = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                                    $tgl   = date('d ', strtotime($tanggal)).$bln[date('n', strtotime($tanggal))].date(' Y ', strtotime($tanggal)); 
                                    if($row->STATUSSARAN==0){
                                      $text='gray';
                                      $bold='';
                                    }
                                    else{
                                      $text='yellow';
                                      $bold='bold';
                                    }

                      if($row->STATUSSARAN != 2){

                    ?>
                  <tr>
                    <?php if($row->STATUSSARAN==0){ ?>
                    <td><a onClick="confirm_modal('<?php echo base_url('webadmsekolah/saran/hapus/'.$row->IDSARAN) ?>');" hsref=""><i class="fa fa-trash-o text-red"></a></td>
                    <?php }
                    else{ ?>
                    <td><a onClick="confirm();" hsref=""><i class="fa fa-trash-o text-red"></a></td>
                    <?php } ?>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star text-<?= $text?>"></i></a></td>
                    <td class="mailbox-name" style="width:170px"><a href="<?= base_url('webadmsekolah/saran/id/'.$row->IDSARAN)?>"><?= substr($row->NAMA,0,20) ?></a></td>
                    <td class="mailbox-subject" style="font-weight: <?= $bold ?>">
                      <?php
                                      echo substr($row->SUBJECT,0,30).'-'.substr($row->SARAN,0,30);
                                      ?> 
                    </td>
                    <td class="mailbox-date" style="width:170px"><?= $tgl." ".substr($row->TANGGALSARAN, 10,10); ?></td>
                  </tr>
                <?php }}?>
                </tbody>
                <tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        
        <?php
          }
        else
        {

        ?>
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Bacar Pesan</h3>

              <div class="box-tools pull-right">
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
                    <?php
                    foreach ($DataSaran as $row) {
                    ?>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h3><?= $row->SUBJECT?></h3>
                <h5>Dari: <?= $row->EMAIL?>
                  <span class="mailbox-read-time pull-right"><?= $row->TANGGALSARAN?></span></h5>
              </div>
             <!--  -->
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <p><?= $row->SARAN?></p>
              </div>
                    <?php

                    }

                    ?>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->
            
            <!-- /.box-footer -->
            <div class="box-footer">
              <!-- <div class="pull-right">
                <button type="button" class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
                <button type="button" class="btn btn-default"><i class="fa fa-share"></i> Forward</button>
              </div>
              <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button>
              <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button> -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
        <!-- /.col -->

        <?php
        }
        ?>
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
    <div class="modal fade" id="modal_confirm">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Pesan Ini Belum Dibaca....!?</h4>
      </div>
                
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Javascript untuk popup modal Delete-->
<script type="text/javascript">
    function confirm()
    {
      $('#modal_confirm').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>   