	<section id="bottom">
		<div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="widget">
						<address>
							<?=htmlspecialchars_decode($this->pocore()->call->posetting[8]['value']);?>
						</address>
						<abbr title="Phone Number"><strong>Phone:</strong></abbr> <?=$this->pocore()->call->posetting[6]['value'];?><br>
						<abbr title="Fax"><strong>Fax:</strong></abbr> <?=$this->pocore()->call->posetting[7]['value'];?><br>
						<abbr title="Email Address"><strong>Email:</strong></abbr> <?=$this->pocore()->call->posetting[5]['value'];?>
					</div>    
				</div><!--/.col-md-3-->

				<div class="col-md-3 col-sm-6">
					<div class="widget">
						<h3><?=$this->e($front_quick_link);?></h3>
						<ul>
							<li><a href="<?=BASE_URL;?>/category/indonesiaku"><?=$this->e($front_indonesia);?></a></li>
							<li><a href="<?=BASE_URL;?>/category/motivasi"><?=$this->e($front_motivation);?></a></li>
							<li><a href="<?=BASE_URL;?>/category/hubungan"><?=$this->e($front_relationship);?></a></li>
							<li><a href="<?=BASE_URL;?>/category/sukses"><?=$this->e($front_success);?></a></li>
							<li><a href="<?=BASE_URL;?>/album"><?=$this->e($front_gallery);?></a></li>
							<li><a href="<?=BASE_URL;?>/contact"><?=$this->e($front_contact);?></a></li>
						</ul>
					</div>    
				</div><!--/.col-md-3-->

				<div class="col-md-3 col-sm-6">
					<div class="widget">
						<h3><?=$this->e($front_popular);?></h3>
						<ul>
						<?php
							$nopopf = 1;
							$populars = $this->post()->getPopular('2', 'DESC', WEB_LANG_ID);
							foreach($populars as $popular){
						?>
							<li><a href="<?=BASE_URL;?>/detailpost/<?=$popular['seotitle'];?>"><small><?=$this->pocore()->call->podatetime->tgl_indo($popular['date']);?></small><br /><?=$popular['title'];?></a></li>
							<?=($nopopf == '1' ? '<hr />' : '');?>
						<?php $nopopf++;} ?>
						</ul>
					</div>    
				</div><!--/.col-md-3-->

				<div class="col-md-3 col-sm-6">
					<div class="widget">
						<p><?=$this->e($front_subscribe);?> <?=$this->e($front_txt_subscribe);?>:</p>
						<form action="<?=BASE_URL;?>/subscribe" role="form" method="post">
							<div class="input-group divcenter">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input type="email" name="email" class="form-control" placeholder="<?=$this->e($front_email);?>">
								<span class="input-group-btn">
									<button class="btn btn-success" type="submit"><?=$this->e($front_subscribe);?></button>
								</span>
							</div>
						</form>
					</div>    
				</div><!--/.col-md-3-->
			</div>
		</div>
	</section><!--/#bottom-->

	<footer id="footer" class="midnight-blue">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					&copy; 2015 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
				</div>
				<div class="col-sm-6">
					<ul class="pull-right">
						<li><a href="<?=BASE_URL;?>"><?=$this->e($front_home);?></a></li>
						<li><a href="<?=BASE_URL;?>/pages/tentang-kami"><?=$this->e($front_about);?></a></li>
						<li><a href="<?=BASE_URL;?>/contact"><?=$this->e($front_contact);?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer><!--/#footer-->