
<style type="text/css">
    .aku{
        background-color: red;
    }
    .aku:hove{
        background-color: blue;
    }
    .aku:active{
        background-color: yellow;
    } 
</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/js/morris.css'?>">
  <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                            <div id="tg-content" class="tg-content">
                                <section class="tg-sectionspace tg-haslayout">
                                     <div class="tg-borderheading sidebar">
									<div class="split"></div>
                                        <h2>&nbsp;Grafis Siswa</h2>
                                    </div>
                                    <!-- <div class="tg-borderheading">
                                        <h2>Latest Events</h2>
                                    </div> -->
                                    <div class="tg-events">
                                    	<div class="row">

 
								    <div id="graph"></div>
								    <div id="graph2"></div>
								 
								   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
									<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
									<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
									<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

								    <script>
								        Morris.Bar({
								          element: 'graph',
								          barGap:4, 
								          barSizeRatio:0.50, // size  width bar yang di tentukan
								          // preUnits:"%", // menampilkan berdasarkan persantese y bar
								          data: <?php echo $data;?>,
								          xkey: 'TP',
								          ykeys: ['X','XP', 'XI', 'XIP', 'XII', 'XIIP'],
								          labels: ['Kelax VII L', 'Kelax VII P', 'Kelax VIII L', 'Kelax VIII P', 'Kelax IX L', 'Kelax IX P'],
								          // barColors:['green', 'red','orange']
								        });
								    </script>   
								    <script>
								        Morris.Line({
								          element: 'graph2',
								          data: <?php echo $data;?>,
								          xkey: 'TP',
								          ykeys: ['X','XP', 'XI', 'XIP', 'XII', 'XIIP'],
								          labels: ['Kelax VII L', 'Kelax VII P', 'Kelax VIII L', 'Kelax VIII P', 'Kelax IX L', 'Kelax IX P'],
								        });

								        
								    </script>               
                                        </div>
                                         
                                    </div>
                                </section>
                             
                                
                                
                            </div>
                        </div>