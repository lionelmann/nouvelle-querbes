<?php
/*
Template Name: Blog Archive
*/

get_header(); ?>
<?php get_template_part( 'template-part', 'breadcrumb' ); ?>
<div class="container">
		<div class="span-10 center overflow-visible content">
			<div class="span-7">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="white-bg post">
						<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
						<p class="meta"><?php echo get_the_date(); ?> | <?php echo get_the_category_list(' / '); ?>
						</p>
					<article>
						<?php the_excerpt(); ?>
					</article>       
				</div>
			<?php endwhile; endif; ?>
			<div class="pagi center">
				<?php pagination(); ?>
			</div>	
			</div>
			<div class="span-5 overflow-visible sidebar">
					<?php get_sidebar();?>
			</div>
		</div>
</div>	
<?php get_footer(); ?>