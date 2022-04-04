<form enctype="multipart/form-data" id="submit">
	<input type="file" name="file">
                  <br><br>
                  <img src="null" height="100px" id="image2"><br>
                  <input type="text" name="" id="ket" value="" size="40" readonly><br>
                  <span id="kts">Ket. Salin link ini untuk menambah gambar di tengah-tengah artikel</span>
</form>

<script type="text/javascript" src="<?php echo base_url().'assets/js/js/jqueryajax.js'?>"></script>
<script type="text/javascript">
  $(document).ready(function(){

    $('#submit').change(function(e){
        e.preventDefault(); 
             $.ajax({
                 url:'<?php echo base_url('webadmsekolah/artikel/tes');?>',
                 type:"post",
                 data:new FormData(this),
                 processData:false,
                 contentType:false,
                 cache:false,
                 async:false,
                  success: function(response){
                    var jsonData = JSON.parse(response);
                    if (jsonData.success == "1")
                    {
                      // $('#ggambar').src(jsonData.message);
                      $("#image2").attr("src",jsonData.message);
                      $("#ket").attr("value",jsonData.message);
                      $('#kt').text(jsonData.message);
                      // alert(jsonData.message);
                    }
               }
             });
        });
    

  });
  
</script>