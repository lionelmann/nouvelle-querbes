<?php
/*
Template Name: Journées pédagogiques
*/
get_header(); ?>

<?php get_template_part( 'template-part', 'breadcrumb' ); ?>



<section role="main">


    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article>	
        <h4><?php the_title(); ?></h4>
        <div class="article-inside">
            <?php the_content();?>
        </div>

        <?php endwhile; endif; ?>

        <?php 
        $my_query = new WP_Query('cat=[23]&post_count=2&order=ASC');
        if ( $my_query->have_posts() ) : while ( $my_query->have_posts() ) : $my_query->the_post(); ?>


        <h4><?php the_title(); ?></h4>
        <div class="article-inside">
            <?php the_content();?>
        </div>

        <?php endwhile; endif; ?>

    </article>


    <aside>
        <?php get_sidebar();?>
    </aside>



</section>












<?php get_footer(); ?>