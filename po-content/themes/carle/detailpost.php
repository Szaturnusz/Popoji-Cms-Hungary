<?=$this->layout('index');?>

	<section id="blog" class="container">
		<div class="center">
			<h2><?=$this->e($page_title);?></h2>
		</div>

		<div class="blog">
			<div class="row">
				<div class="col-md-8">
					<div class="blog-item">
						<img class="img-responsive img-blog" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$post['picture'];?>" width="100%" alt="" />
						<?php if ($post['picture_description'] != '') { ?>
						<p class="text-center" style="padding:10px; background:#eee;"><i><?=$post['picture_description'];?></i></p>
						<?php } ?>
						<div class="row">  
							<div class="col-xs-12 col-sm-2 text-center">
								<div class="entry-meta">
									<span id="publish_date"><?=$this->pocore()->call->podatetime->tgl_indo($post['date']);?></span>
									<span><i class="fa fa-user"></i> <a href="javascript:void(0)"> <?=$this->post()->getAuthorName($post['editor']);?></a></span>
									<span><i class="fa fa-comment"></i> <a href="#comments"><?=$this->post()->getCountComment($post['id_post']);?> <?=$this->e($front_comment);?></a></span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-10 blog-content">
								<?=htmlspecialchars_decode(html_entity_decode($post['content']));?>
								<div class="post-tags">
									<strong><?=$this->e($front_tag);?> :</strong> <?=$this->post()->getPostTag($post['tag'], ' / ');?>
								</div>
							</div>
						</div>
					</div><!--/.blog-item-->

					<div class="media reply_section">
						<div class="pull-left post_reply text-center">
							<?php
								$editor = $this->post()->getAuthor($post['editor']);
								if ($editor['picture'] != '') {
									$editor_avatar = BASE_URL.'/'.DIR_CON.'/uploads/'.$editor['picture'];
								} else {
									$editor_avatar = BASE_URL.'/'.DIR_CON.'/uploads/user-editor.jpg';
								}
							?>
							<a href="javascript:void(0)"><img src="<?=$editor_avatar;?>" class="img-circle" alt="" /></a>
						</div>
						<div class="media-body post_reply_content">
							<h3><?=$editor['nama_lengkap'];?></h3>
							<?=htmlspecialchars_decode(html_entity_decode($editor['bio']));?>
						</div>
					</div>

					<?php if ($post['comment'] == 'Y') { ?>
					<?php if ($this->post()->getCountComment($post['id_post']) > 0) { ?>
					<h1 id="comments_title"><?=$this->post()->getCountComment($post['id_post']);?> <?=$this->e($front_comment);?></h1>
					<?php
						$com_parent = $this->post()->getCommentByPost($post['id_post'], '3', 'DESC', $this->e($page));
						$com_template = array(
							'parent_tag_open' => '<div class="media comment_section">',
							'parent_tag_close' => '</div>',
							'child_tag_open' => '<div class="media comment_section">',
							'child_tag_close' => '</div>',
							'comment_list' => '
								<div class="pull-left post_comments">
									<a href="{$comment_url}"><img src="{$comment_avatar}" class="img-circle" alt="" /></a>
								</div>
								<div class="media-body post_reply_comments">
									<h3>{$comment_name}</h3>
									<h4>{$comment_datetime}</h4>
									<p>{$comment_content}</p>
								</div>
							'
						);
					?>
					<?=$this->post()->generateComment($com_parent, 'DESC', $com_template);?>
					<div class="text-center">
						<ul class="pagination pagination-lg">
							<?=$this->post()->getCommentPaging('3', $post['id_post'], $post['seotitle'], $this->e($page), '1', $this->e($front_paging_prev), $this->e($front_paging_next));?>
						</ul><!--/.pagination-->
					</div>
					<?php } ?>

					<div id="contact-page clearfix">
						<?=$this->pocore()->call->poflash->display();?>
						<div class="message_heading">
							<h4><?=$this->e($front_leave_comment);?></h4>
						</div> 
						<form name="contact-form" class="contact-form" action="<?=BASE_URL;?>/detailpost/<?=$post['seotitle'];?>#contact-page" method="post" id="main-contact-form">
							<input type="hidden" name="id_parent" id="id_parent" value="0" />
							<input type="hidden" name="id" name="id" value="<?=$post['id_post'];?>" />
							<input type="hidden" name="seotitle" id="seotitle" value="<?=$post['seotitle'];?>" />
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<label><?=$this->e($comment_name);?> *</label>
										<input type="text" class="form-control" value="<?=(isset($_POST['name']) ? $_POST['name'] : '');?>" required="required" />
									</div>
									<div class="form-group">
										<label><?=$this->e($comment_email);?> *</label>
										<input type="email" class="form-control" value="<?=(isset($_POST['email']) ? $_POST['email'] : '');?>" required="required" />
									</div>
									<div class="form-group">
										<label><?=$this->e($comment_website);?></label>
										<input type="url" class="form-control" value="<?=(isset($_POST['url']) ? $_POST['url'] : '');?>" />
									</div>                    
								</div>
								<div class="col-sm-7">                        
									<div class="form-group">
										<label><?=$this->e($comment_text);?> *</label>
										<textarea name="message" id="message" required="required" class="form-control" rows="3"><?=(isset($_POST['comment']) ? $_POST['comment'] : '');?></textarea>
									</div>
									<div class="form-group">
										<div class="g-recaptcha" data-sitekey="<?=$this->pocore()->call->posetting[21]['value'];?>"></div>
									</div>  
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-lg" required="required"><?=$this->e($comment_submit);?></button>
									</div>
								</div>
							</div>
						</form>     
					</div><!--/#contact-page-->
					<?php } ?>
				</div><!--/.col-md-8-->

				<aside class="col-md-4">
					<!-- Insert Sidebar -->
					<?=$this->insert('sidebar');?>
				</aside>  
			</div><!--/.row-->
		</div>
	</section><!--/#blog-->