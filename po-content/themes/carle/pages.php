<?=$this->layout('index');?>

	<section id="about-us">
		<div class="container">
			<div class="center wow fadeInDown">
				<h2><?=$this->e($pages['title']);?></h2>
			</div>
			<div class="row">
				<?php if ($this->e($pages['picture']) != '') { ?>
				<div class="col-md-12 text-center" style="margin-bottom:30px;">
					<img src="<?=BASE_URL.'/'.DIR_CON.'/uploads/'.$this->e($pages['picture']);?>" alt="" />
				</div>
				<?php } ?>
				<div class="col-md-12">
					<?=htmlspecialchars_decode(html_entity_decode($this->e($pages['content'])));?>
				</div>
			</div>
		</div><!--/.container-->    
	</section><!--/#conatcat-info-->