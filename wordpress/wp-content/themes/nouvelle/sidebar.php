<!-- 1 box -->	
<div class="arrows box-1">
	<h6>Avis Important</h6>

	<?php query_posts('cat=3&showposts=1'); ?>
	
	<?php if(have_posts()): while(have_posts()):the_post(); ?>
		<?php the_title('<p class="post-title">','</p>');?>
		<?php the_content(); ?>
	<?php endwhile; ?>
			
	<a href="<?php echo get_category_link(3);?>" class="read-more">Read More</a>
	<?php endif; wp_reset_query(); ?>
</div>	

<!-- 2 box -->	
<div class="box-2">
	<h6>ÉVÉNEMENTS À VENIR</h6>
						
	<?php query_posts('post_type=tribe_events&showposts=5'); ?>
	
	<?php if(have_posts()): while(have_posts()):the_post(); ?>
		<p class="meta"><?php echo get_the_date('d.m.Y');?><br
		<a href="<?php the_permalink();?>"><?php the_title();?> >></a></p>
	<?php endwhile; ?>

	<a href="" class="read-more">Read More</a>
	<?php endif; wp_reset_query(); ?>
</div>

<!-- 3 box -->			
<div class="box-3">
	<h6>COURRIER du jeudi</h6>
	
	<?php query_posts('cat=2&showposts=3'); ?>

	<?php if(have_posts()): while(have_posts()):the_post(); ?>
		<p><?php the_title();?><br>
		<?php echo get_excerpt(100); ?></p>
	<?php endwhile; ?>
	
	<a href="<?php echo get_category_link(2);?>" class="read-more">Read More</a>
	<?php endif; wp_reset_query(); ?>
</div>