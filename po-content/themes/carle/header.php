	<header id="header">
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-xs-4">
						<div class="top-number"><p><i class="fa fa-phone-square"></i> <?=$this->pocore()->call->posetting[6]['value'];?></p></div>

                    <div class="col-sm-6 col-xs-4">



                     </div>


					</div>
					<div class="col-sm-6 col-xs-8">
					   <div class="social">
							<ul class="social-share">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-skype"></i></a></li>
							</ul>
							<div class="search">
								<form action="<?=BASE_URL;?>/search" method="post">
									<input type="text" class="search-form" autocomplete="off" placeholder="<?=$this->e($front_search);?>...">
									<i class="fa fa-search"></i>
								</form>
						   </div>
					   </div>
					</div>
				</div>
			</div><!--/.container-->
		</div><!--/.top-bar-->

		<nav class="navbar navbar-inverse" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?=BASE_URL;?>"><img src="<?=$this->asset('/images/logo.png')?>" alt="logo"></a>
				</div>

				<div class="collapse navbar-collapse navbar-right">
					<?php
						echo $this->menu()->getFrontMenu(WEB_LANG, 'class="nav navbar-nav"', 'class="dropdown"', 'class="dropdown-menu"');
					?>
				</div>
			</div><!--/.container-->
		</nav><!--/nav-->
	</header><!--/header-->