<?php get_header(); ?>

<section role="slider">
	<?php query_posts('post_type=slider'); ?>
	<?php if(have_posts()): while(have_posts()):the_post(); ?>		
				
		<ul class="slider">
			<?php 
				$slide_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				if(!$slide_img) {
					$slide_img = get_bloginfo('template_url')."/dist/images/no-image.jpg";
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

<div class="columns">
	<div class="content box-2">
		<h6>ÉVÉNEMENTS À VENIR</h6>
							
		<?php query_posts('post_type=tribe_events&showposts=5'); ?>
		
		<?php if(have_posts()): while(have_posts()):the_post(); ?>
			<p class="meta"><?php echo get_the_date('d.m.Y');?><br
			<a href="<?php the_permalink();?>"><?php the_title();?> >></a></p>
		<?php endwhile; ?>

		<a href="" class="read-more">Read More</a>
		<?php endif; wp_reset_query(); ?>
	</div>

	<div class="content box-3">
		<h6>COURRIER du jeudi</h6>
		
		<?php query_posts('cat=2&showposts=3'); ?>

		<?php if(have_posts()): while(have_posts()):the_post(); ?>
			<p><?php the_title();?><br>
			<?php echo get_excerpt(100); ?></p>
		<?php endwhile; ?>
		
		<a href="<?php echo get_category_link(2);?>" class="read-more">Read More</a>
		<?php endif; wp_reset_query(); ?>
	</div>

	<div class="content box-1 arrows">
		<h6>Avis Important</h6>

		<?php query_posts('cat=3&showposts=1'); ?>
		
		<?php if(have_posts()): while(have_posts()):the_post(); ?>
			<?php the_title('<p class="post-title">','</p>');?>
			<?php the_content(); ?>
		<?php endwhile; ?>
				
		<a href="<?php echo get_category_link(3);?>" class="read-more">Read More</a>
		<?php endif; wp_reset_query(); ?>

	</div>
</div>


<div class="video-container">
	<?php query_posts('post_type=page&p=217&showposts=1');?>
	<?php if(have_posts()): while(have_posts()):the_post(); ?>
		<div class="content">
			<?php the_title('<h6>','</h6>');?>
			<?php the_content();?>
		</div>
		<div class="content">
			<img src="<?php bloginfo('template_url' ); ?>/dist/images/kid.png">
		</div>
		<div class="content">
			<div class="video-icon">
				<a href=" http://www.youtube.com/embed/SKa6rKXJf_s" rel="prettyPhoto"><img src="<?php bloginfo('template_url');?>/dist/images/video-icon.png"></a>
				<h6>LANCER LA VIDÉO</h6>
			</div>
		</div>
	<?php endwhile; endif; wp_reset_query(); ?>
</div>
	
<?php get_footer(); ?>