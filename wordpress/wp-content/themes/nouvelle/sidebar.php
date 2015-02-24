<!-- 1 box -->	
<div class="arrows box-1">
	<h6>Avis Important</h6>

	<?php query_posts('cat=3&showposts=1'); ?>
	
	<?php if(have_posts()): while(have_posts()):the_post(); ?>
		<p><a href="<?php the_permalink();?>"><?php the_title();?> <i class="fa fa-arrow-right"></i></a></p>
		<?php the_content(); ?> 
	<?php endwhile; ?>
			
	<a href="<?php echo get_category_link(3);?>" class="read-more">Read More</a>
	<?php endif; wp_reset_query(); ?>
</div>	

<!-- 2 box -->	
<div class="content box-2">
	<h6>ÉVÉNEMENTS À VENIR</h6>
							
	<?php query_posts('post_type=tribe_events&showposts=5'); ?>
		
	<?php if(have_posts()): while(have_posts()):the_post(); ?>
		<p><span class="meta"><?php echo tribe_get_start_date($post->ID, false, 'j F, Y');?></span><br>
		<a href="<?php the_permalink();?>"><?php the_title();?> <i class="fa fa-arrow-right"></i></a></p>
	<?php endwhile; ?>

	<a href="/evenements/" class="read-more">Read More</a>
	<?php endif; wp_reset_query(); ?>
</div>

<!-- 3 box -->			
<div class="content box-3">
	<h6>COURRIER du jeudi</h6>
		
	<?php query_posts('cat=2&showposts=5'); ?>

	<?php if(have_posts()): while(have_posts()):the_post(); ?>
		<p><a href="<?php the_permalink();?>"><?php the_title();?> <i class="fa fa-arrow-right"></i></a></p>
	<?php endwhile; ?>
		
	<a href="<?php echo get_category_link(2);?>" class="read-more">Read More</a>
	<?php endif; wp_reset_query(); ?>
</div>