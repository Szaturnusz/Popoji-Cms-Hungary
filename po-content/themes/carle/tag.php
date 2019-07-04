<?=$this->layout('index');?>

	<section id="blog" class="container">
		<div class="center">
			<h2><?=$this->e($page_title);?></h2>
		</div>

		<div class="blog">
			<div class="row">
				<div class="col-md-8">
					<?php
						$tags = $this->post()->getPostFromTag('3', 'post.id_post DESC', $this->e($tag_seo), $this->e($page), WEB_LANG_ID);
						foreach($tags as $post){
					?>
					<div class="blog-item">
						<div class="row">
							<div class="col-xs-12 col-sm-2 text-center">
								<div class="entry-meta">
									<span id="publish_date"><?=$this->pocore()->call->podatetime->tgl_indo($post['date']);?></span>
									<span><i class="fa fa-user"></i> <a href="javascript:void(0)"><?=$this->post()->getAuthorName($post['editor']);?></a></span>
									<span><i class="fa fa-comment"></i> <a href="<?=BASE_URL;?>/detailpost/<?=$post['seotitle'];?>#comments"><?=$this->post()->getCountComment($post['id_post']);?> <?=$this->e($front_comment);?></a></span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-10 blog-content">
								<a href="<?=BASE_URL;?>/detailpost/<?=$post['seotitle'];?>"><img class="img-responsive img-blog" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$post['picture'];?>" width="100%" alt="" /></a>
								<h2><a href="<?=BASE_URL;?>/detailpost/<?=$post['seotitle'];?>"><?=$post['title'];?></a></h2>
								<h3><?=$this->pocore()->call->postring->cuthighlight('post', $post['content'], '200');?>...</h3>
								<a class="btn btn-primary readmore" href="<?=BASE_URL;?>/detailpost/<?=$post['seotitle'];?>">Read More <i class="fa fa-angle-right"></i></a>
							</div>
						</div>    
					</div><!--/.blog-item-->
					<?php } ?>
					<div class="text-center">
						<ul class="pagination pagination-lg">
							<?=$this->post()->getTagPaging('3', $this->e($tag_seo), $this->e($page), '1', $this->e($front_paging_prev), $this->e($front_paging_next));?>
						</ul><!--/.pagination-->
					</div>
				</div><!--/.col-md-8-->

				<aside class="col-md-4">
					<!-- Insert Sidebar -->
					<?=$this->insert('sidebar');?>
				</aside>  
			</div><!--/.row-->
		</div>
	</section><!--/#blog-->