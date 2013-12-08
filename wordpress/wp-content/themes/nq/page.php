<?php get_header(); ?>

<?php if (has_post_thumbnail()) { ?>
        <div class="banner"><?php the_post_thumbnail('banner') ?></div>
        <?php } else { ?>
        <div class="banner"><img src="<?php bloginfo('template_url' ); ?>/images/large.jpg"></div>
    <?php } ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="container">
        <section class="columns-1">
            <?php the_title( '<h1>', '</h1>' ); ?>
            <?php the_content(); ?>
        </section>
    </div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>

