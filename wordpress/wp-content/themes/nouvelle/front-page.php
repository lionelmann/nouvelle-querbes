<?php get_header(); ?>

<section role="slider">



    <?php query_posts('category_name=image-entete'); ?>
    <?php if(have_posts()): while(have_posts()):the_post(); ?>

    <!-- Si on a un image spéciale, on la met en entete -->
    <ul class="entete">
        <?php $slideImg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <li><?php the_content(); ?></li>
        <!--img src="<?php echo $slideImg;?>"-->
        <?php endwhile;  ?>

        <?php else: ?>
        <!-- Si on n'a pas d'image spéciale, on met le slider -->
        <ul class="bxslider">
            <?php query_posts('post_type=slider'); ?>
            <?php if(have_posts()): while(have_posts()):the_post(); ?>
            <?php $slideImg = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
            <li><img src="<?php echo $slideImg;?>"></li>
            <?php endwhile; endif; endif; wp_reset_query(); ?>


        </ul>
        </section>

    <div class="columns">
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
        <div class="content box-3">
            <h6>COURRIER du jeudi</h6>

            <?php query_posts('cat=2&showposts=5'); ?>

            <?php if(have_posts()): while(have_posts()):the_post(); ?>
            <p><a href="<?php the_permalink();?>"><?php the_title();?> <i class="fa fa-arrow-right"></i></a></p>

            <?php endwhile; ?>

            <a href="<?php echo get_category_link(2);?>" class="read-more">Read More</a>
            <?php endif; wp_reset_query(); ?>
        </div>

        <div class="content box-1 arrows">
            <h6>Avis Important</h6>

            <?php query_posts('cat=3&showposts=1'); ?>

            <?php if(have_posts()): while(have_posts()):the_post(); ?>
            <p><a href="<?php the_permalink();?>"><?php the_title();?> <i class="fa fa-arrow-right"></i></a></p>
            <?php the_content(); ?>
            <?php endwhile; ?>

            <a href="<?php echo get_category_link(3);?>" class="read-more">Read More</a>
            <?php endif; wp_reset_query(); ?>

        </div>
    </div>

    <div class="video-container">
        <?php query_posts('post_type=page&p=217&showposts=1');?>
        <?php if(have_posts()): while(have_posts()):the_post(); ?>
        <div class="content-2">
            <?php the_title('<h6>','</h6>');?>
            <?php the_content();?>
        </div>
        <?php endwhile; endif; wp_reset_query(); ?>

        <div class="content-2">
            <img src="<?php randomImage(); ?>">
        </div>

        <?php query_posts('post_type=page&p=1632&showposts=1');?>
        <?php if(have_posts()): while(have_posts()):the_post(); ?>
        <div class="content-2">
            <?php the_content();?>

            <!--div class="video-icon">
<a href=" http://www.youtube.com/embed/SKa6rKXJf_s" rel="prettyPhoto"><img src="<?php bloginfo('template_url');?>/dist/images/video-icon.png"></a>
</div-->

        </div>
        <?php endwhile; endif; wp_reset_query(); ?>
    </div>

    <?php get_footer(); ?>
