<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php // Get the feature banner image
        if (has_post_thumbnail()) {
            $image_id = get_post_thumbnail_id();
            $image_url = wp_get_attachment_image_src($image_id,'banner', true);
    ?>
    <div class="banner">
        <span class="bannerimage" style="background-image:url('<?php echo $image_url[0]; ?>'); display: block;">
            <span class="inner"></span>
        </span>
    </div>
    <?php } ?>
    <div class="container">
        <section class="span-10 center">
            <?php the_title( '<h1>', '</h1>' ); ?>
        </section>
		<section class="span-10 center overflow-visible">
				<div class="span-7 content">
					<?php the_content();?>
				</div>
				<div class="span-5 overflow-visible">
					<div class="box light-green-2">
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
					<div class="box green">
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
					
					<div class="box light-green">
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
			
				</div>
		</section>
    </div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>