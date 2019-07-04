<?=$this->layout('index');?>

	<section id="portfolio">
        <div class="container">
            <div class="center">
               <h2><?=$this->e($page_title);?></h2>
            </div>

            <div class="row">
                <div class="portfolio-items">
					<?php
						$gallerys = $this->gallery()->getGallery('12', 'id_gallery DESC', $album, $this->e($page));
						foreach($gallerys as $gal){
					?>
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?=BASE_URL.'/'.DIR_CON.'/uploads/medium/medium_'.$gal['picture'];?>" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="javascript:void(0)"><?=$gal['title'];?></a></h3>
									<a class="preview" href="<?=BASE_URL.'/'.DIR_CON.'/uploads/'.$gal['picture'];?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
								</div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->
					<?php } ?>
                </div>
				<div class="text-center">
					<ul class="pagination pagination-lg">
						<?=$this->gallery()->getGalleryPaging('12', $album, $this->e($page), '1', $this->e($front_paging_prev), $this->e($front_paging_next));?>
					</ul><!--/.pagination-->
				</div>
            </div>
        </div>
    </section><!--/#portfolio-item-->