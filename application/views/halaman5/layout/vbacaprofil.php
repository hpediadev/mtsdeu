  <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
    <div id="tg-content" class="tg-content">
        <section class="tg-sectionspace tg-haslayout">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-glanceatuoeandk tg-glanceatuoeandkvtwo">
                        <div class="tg-borderheading sidebar">
									<div class="split"></div>
                                        <h2>&nbsp;Profil Sekolah</h2>
                        </div>
                        <article class="tg-themepost tg-newspost">
                            <table class="table">
                                    <?php  foreach ($dataartikel as $row) {

                                    ?>

                                <tr>
                                    <td ><?= $row->IDPROFIL?></td>
                                    <td ><?= $row->NAMAPROFIL?></td>
                                    <td ><?= $row->DATAPROFIL?></td>
                                </tr>

                                <?PHP } ?>
                            </table>

						</article>
                    </div>
                </div>
                
            </div> 
        </section>
        

        
    </div>
</div>