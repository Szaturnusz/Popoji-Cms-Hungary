<div class="widget search">
	<form action="<?=BASE_URL;?>/search" method="post">
		<input type="text" name="search" class="form-control search_box" value="" placeholder="<?=$this->e($front_search);?>...">
	</form>
</div><!--/.search-->

<div class="widget categories">
	<h3><?=$this->e($front_comment);?></h3>
	<div class="row">
		<div class="col-sm-12">
		<?php
			$comments_side = $this->post()->getComment('5', 'DESC');
			foreach($comments_side as $comment_side){
			$comment_post = $this->post()->getPostById($comment_side['id_post'], WEB_LANG_ID);
		?>
			<div class="single_comments">
				<img class="img-responsive" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_avatar.jpg" alt="" width="80" />
				<p><?=$this->pocore()->call->postring->cuthighlight('post', $comment_side['comment'], '80');?>...</p>
				<div class="entry-meta small muted">
					<span>By <a href="<?=BASE_URL;?>/detailpost/<?=$comment_post['seotitle'];?>#comment"><?=$comment_side['name'];?></a></span> <span>On <a href="<?=BASE_URL;?>/detailpost/<?=$comment_post['seotitle'];?>#comment"><?=$comment_post['title'];?></a></span>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>                     
</div><!--/.recent comments-->

<div class="widget categories">
	<h3><?=$this->e($front_categories);?></h3>
	<div class="row">
		<div class="col-sm-6">
			<ul class="blog_category">
			<?php
				$categorys_side = $this->category()->getAllCategory(WEB_LANG_ID);
				foreach($categorys_side as $category_side){
			?>
				<li><a href="<?=BASE_URL;?>/category/<?=$category_side['seotitle'];?>"><?=$category_side['title'];?></a></li>
			<?php } ?>
			</ul>
		</div>
	</div>                     
</div><!--/.categories-->

<div class="widget tags">
	<h3><?=$this->e($front_tag);?></h3>
	<ul class="tag-cloud">
		<?=$this->post()->getAllTag('RAND()', '30', '&nbsp;', true, '<li>', '</li>', 'btn btn-xs btn-primary');?>
	</ul>
</div><!--/.tags-->

<div class="widget blog_gallery">
	<h3><?=$this->e($front_gallery);?></h3>
	<ul class="sidebar-gallery">
	<?php
		$gallerys = $this->gallery()->getAllGallery('RAND()', '6');
		foreach($gallerys as $gal){
	?>
		<li><a href="javascript:void(0)"><img class="img-responsive" src="<?=BASE_URL.'/'.DIR_CON.'/thumbs/'.$gal['picture'];?>" alt="<?=$gal['title'];?>" width="107" /></a></li>
	<?php } ?>
	</ul>
</div><!--/.blog_gallery-->