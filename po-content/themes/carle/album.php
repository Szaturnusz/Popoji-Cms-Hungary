<?=$this->layout('index');?>

	<section id="portfolio">
        <div class="container">
            <div class="center">
               <h2><?=$this->e($front_gallery);?></h2>
            </div>

            <div class="row">
                <div class="portfolio-items">
					<?php
						$albums = $this->gallery()->getAlbum('8', 'id_album ASC', $this->e($page));
						foreach($albums as $alb){
					?>
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?=BASE_URL.'/'.DIR_CON.'/uploads/medium/medium_'.$alb['picture'];?>" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="<?=BASE_URL.'/gallery/'.$this->e($alb['seotitle']);?>"><?=$alb['title'];?></a></h3>
									<a class="preview" href="<?=BASE_URL.'/gallery/'.$this->e($alb['seotitle']);?>"><i class="fa fa-eye"></i> View</a>
								</div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->
					<?php } ?>
                </div>
				<div class="text-center">
					<ul class="pagination pagination-lg">
						<?=$this->gallery()->getAlbumPaging('8', $this->e($page), '1', $this->e($front_paging_prev), $this->e($front_paging_next));?>
					</ul><!--/.pagination-->
				</div>
            </div>
        </div>
    </section><!--/#portfolio-item-->