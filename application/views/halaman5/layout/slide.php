
		<!--************************************
				Home Slider Start
		*************************************-->
		<!-- <div class = "container">
			<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-9 col-lg-12">			

								<div id="wowslider-container1">
									<div class="ws_images">
									<ul>
									<?php 
										$no=0;
										$k='';
										$nno=0;
										$kk='';
										foreach ($slide as $row) {
											if($no==0)
												$k='active';
											else
												$k='';
												$idwows = 'wows1_'.$no;
										?>
										<li class="<?= $idwows?>"><img src="<?php echo base_url('uploads/'.$row->GAMBAR)?>" stylde="width:425px; height:300px;" id="<?= $no?>"/></li>
										<?php $no++;} ?>
									</ul>
									</div>                                                    
									<div class="ws_script" style="position:absolute"></div>
									<div class="ws_shadow"></div>
								</div>
								<script type="text/javascript" src="<?= base_url('assets/slideshow/engine1/wowslider.js')?>"></script>
								<script type="text/javascript" src="<?= base_url('assets/slideshow/engine1/script.js')?>"></script>
								
							
				</div>
			</div>
		</div> -->
	<div class="container">
		<div class="row">
			
			<div class="col-xs-12 col-sm-8 col-md-9 col-lg-12">
			<div id="myCarousel" class="carousel slide" data-ride="carodusel">
				<ol class="carousel-indicators">
					<?php 
				$no=0;
				$k='';
				$nno=0;
				$kk='';
				foreach ($slide as $row) {
					if($no==0)
						$k='active';
					else
						$k='';
				?>
					<li data-target="#myCarousel" data-slide-to="<?= $no ?>" class="<?= $k ?>"></li>
		<?php $no++;} ?>
				</ol>
				<div class="carousel-inner" role="lisstbox" style="border: 0px solid red;">
			<?php foreach ($slide as $row) {
				if($nno==0)
						$kk='active';
					else
						$kk='';
					$nno++;
				?>
					<div class="item <?= $kk ?>" style="width: 100%; height:300px">
						<img src="<?php echo base_url('uploads/'.$row->GAMBAR)?>" style="width: 100%; height:300px" alt="" />
						
					</div>	
		<?php } ?>
				</div>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
</div>
	