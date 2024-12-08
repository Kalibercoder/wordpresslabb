<?php

/* 
Template Name: homepage
Description: homepage with img in middle
*/

get_header(); ?>

<?php get_template_part('nav'); ?>

<main class="container-home">
    <div class="content">
        <?php
        while (have_posts()) :
            the_post();
            ?>
            <h1 class="page-title"><?php the_title(); ?></h1>
            <div class="image-container">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large', array('class' => 'centered-img')); ?>
                <?php endif; ?>
            </div>
            <div class="page-content-home">
                <?php the_content(); ?>
            </div>
            <?php
        endwhile;
        ?>
    </div>
</main>

<?php get_footer(); ?>