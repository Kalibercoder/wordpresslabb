<?php
/*
Template Name: undersida4
Description: En textspalt med bild och text till vänster
*/

get_header(); ?>

<?php get_template_part('nav'); ?>

<main class="container">
    <div class="content-wrapper">
        <div class="image-container">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large', array('class' => 'centered-img')); ?>
            <?php endif; ?>
        </div>
           <div class="page-content-text-left">
            <?php
            while (have_posts()) :
                the_post();
                ?>
                <h1 class="page-title"><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <?php
            endwhile;
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
