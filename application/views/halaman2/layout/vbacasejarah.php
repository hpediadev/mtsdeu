  <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
    <div id="tg-content" class="tg-content">
    	<?php  foreach ($dataartikel as $row) {

	    ?>
        <section class="tg-sectionspace tg-haslayout">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-glanceatuoeandk tg-glanceatuoeandkvtwo">
                        <div class="tg-borderheading sidebar">
									<div class="split"></div>
                                        <h2>&nbsp;Sejarah</h2>
                        </div>
                        <article class="tg-themepost tg-newspost">
							<!-- <figure class="tg-featuredimg">
                                <a href="javascript:void(0);" >
                                    <img style="float: left;width: 300px" src="<?= base_url('uploads/artikel/'.$row->GAMBAR)?>" alt="image description">
                                </a>
                            </figure> -->

                            <div class="tg-themeposttitle">
									<h4><?= $row->JUDUL ?></h4>
								</div>
								<img style="float: left;width: 450px;margin-right: 10px" src="<?= base_url('uploads/artikel/'.$row->GAMBARSEJARAH)?>" alt="image description">
								<?= $row->URAIANSEJARAH?>
                <!-- Start of txt.me widget code -->
<!--                 
  <div id="jp-post-flair" class="sharedaddy sd-like-enabled sd-sharing-enabled">
  <div class="sharedaddy sd-sharing-enabled">
    <div class="robots-nocontent sd-block sd-social sd-social-icon-text sd-sharing">
      <h3 class="sd-title">Share this:</h3>
      <div class="sd-content">
        <ul><li class="share-twitter"><a rel="nofollow noopener noreferrer" data-shared="sharing-twitter-648" class="share-twitter sd-button share-icon" href="https://ucisuicidal.wordpress.com/2010/10/25/belajar-php-membuat-halaman-komentar/?share=twitter" target="_blank" title="Klik untuk berbagi pada Twitter"><span>Twitter</span></a></li><li class="share-facebook"><a rel="nofollow noopener noreferrer" data-shared="sharing-facebook-648" class="share-facebook sd-button share-icon" href="https://ucisuicidal.wordpress.com/2010/10/25/belajar-php-membuat-halaman-komentar/?share=facebook" target="_blank" title="Klik untuk membagikan di Facebook"><span>Facebook</span></a></li><li class="share-end"></li>
        </ul>
      </div>
    </div>
  </div>
  <div class='sharedaddy sd-block sd-like jetpack-likes-widget-wrapper jetpack-likes-widget-unloaded' id='like-post-wrapper-12792692-648-604da2340165b' data-src='http://localhost:8080/webci/sejarah' data-name='like-post-frame-12792692-648-604da2340165b'><h3 class='sd-title'>Menyukai ini:</h3><div class='likes-widget-placeholder post-likes-widget-placeholder' style='height: 55px;'><span class='button'><span>Suka</span></span> <span class="loading">Memuat...</span></div><span class='sd-text-color'></span><a class='sd-link-color'></a></div>
</script>

                                 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-comments" data-href="http://localhost:8080/webci/sejarah.html" data-num-posts="5" data-width="100%"></div>
						</article> -->
                    </div>
                </div>
            </div>
        </section>
        
        <?PHP } ?>
        

        
    </div>
</div>