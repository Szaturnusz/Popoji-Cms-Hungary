<?=$this->layout('index');?>

	<section id="error" class="container text-center">
		<h1>404</h1>
		<p><?=$this->e($front_404_text);?></p>
		<a class="btn btn-primary" href="<?=BASE_URL;?>">GO BACK TO THE HOMEPAGE</a>
	</section><!--/#error-->