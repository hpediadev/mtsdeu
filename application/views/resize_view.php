<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cara Upload dan Resize Gambar Menggunakan Codeigniter</title>
    <link rel="stylesheet" href="<?php echo base_url()?>bootstrap/css/bootstrap.min.css">
</head>
<body>
 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Cara Upload dan Resize Gambar Menggunakan Codeigniter</h2>
        </div>
        <div class="col-md-6">
        <?php echo $error; ?>
            <?php echo form_open_multipart() ?>
                <div class="form-group">
                    <?php echo form_upload('userfile')  ?>
                </div>
                <div class="form-group">
                    <?php echo form_submit('upload', 'Upload', 'class="btn btn-success"') ?>
                </div>
            <?php echo form_close() ?>
                <?php echo $output; ?>   
        </div>
    </div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>bootstrap/css/bootstrap.min.css"></script>
</body>
</html>