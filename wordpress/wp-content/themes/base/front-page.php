<?php get_header(); ?>
	<div class="container">
		<section class="span-10 center">
				<?php 
					query_posts('post_type=slider');
					if(have_posts()):					
				?>
				<ul class="slider">
                	<?php 
					while(have_posts()):the_post();
						$slide_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
						if(!$slide_img) {
							$slide_img = get_bloginfo('template_url')."/images/no-image.jpg";
						}
					?>
                    <li>
                    	<img src="<?php echo $slide_img;?>" />
                        <div class="bx-caption"><?php the_title();?></div>
                    </li>
                    <?php endwhile; ?>
                </ul>   
               <?php endif; wp_reset_query();?>     
		</section>
		<section class="span-10 center boxes overflow-visible">
			<div class="block-grid-3 green">
				<h6>ÉVÉNEMENTS À VENIR</h6>
				<?php query_posts('post_type=tribe_events&showposts=5');
					if(have_posts()):
				?>
					<ul class="events">
						<?php while(have_posts()):the_post(); ?>
							<li>
								<p class="meta"><?php echo get_the_date('d.m.Y');?></p>
								<p><a href="<?php the_permalink();?>"><?php the_title();?> >></a></p>
							</li>
						<?php endwhile; ?>
					</ul>
				<a href="" class="read-more">Read More</a>
				<?php endif; wp_reset_query(); ?>
			</div>
			<div class="block-grid-3 light-green">
				<h6>COURRIER du jeudi</h6>
				<?php query_posts('cat=2&showposts=3');
						if(have_posts()):
				?>
					<ul class="posts">	
						<?php while(have_posts()):the_post(); ?>
							<li>
								<?php the_title('<p class="post-title">','</p>');?>
								<?php echo get_excerpt(100); ?>
							</li>
						<?php endwhile; ?>
					</ul>
				<a href="<?php echo get_category_link(2);?>" class="read-more">Read More</a>
				<?php endif; wp_reset_query(); ?>
			</div>
			<div class="block-grid-3 light-green-2">
				<h6>Avis Important</h6>
				<?php query_posts('cat=3&showposts=1');
						if(have_posts()):
				?>
					<ul class="posts">	
						<?php while(have_posts()):the_post(); ?>
							<li>
								<?php the_title('<p class="post-title">','</p>');?>
								<?php echo get_excerpt(200); ?>
							</li>
						<?php endwhile; ?>
					</ul>
				<a href="<?php echo get_category_link(3);?>" class="read-more">Read More</a>
				<?php endif; wp_reset_query(); ?>
			</div>
		</section>
		<section class="span-10 center overflow-visible">
			<?php query_posts('post_type=page&p=217&showposts=1');
				if(have_posts()): while(have_posts()):the_post();
			?>
			<div class="block-grid-3">
			<?php the_title('<h6>','</h6>');?>
			<?php the_content();?>
			</div>
			<?php $img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
			<div class="block-grid-3" style="background-image:url(<?php echo $img;?>); background-repeat: no-repeat; background-size: contain; background-position: bottom center;">
				<img style="display:none;" src="<?php echo $img; ?>">
			</div>
			<div class="block-grid-3 text-align">
				<div class="video-icon">
					<img src="<?php bloginfo('template_url');?>/images/video-icon.png">
					<h6>LANCER LA VIDÉO</h6>
				</div>
			</div>
			<?php endwhile;endif; wp_reset_query(); ?>
		</section>
	</div>
<?php get_footer(); ?>