<?php
/*
Template Name: undersida4
Description: En textspalt med bild och text till vänster
*/

get_header(); ?>

<?php get_template_part('nav'); ?>

<main class="container-undersida4">
    <div class="content-wrapper-undersida4">
        
        <div class="image-container-undersida4">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large', array('class' => 'centered-img-undersida4')); ?>
            <?php endif; ?>
        </div>
        <div class="page-content-text-left-undersida4">
            <?php
            while (have_posts()) :
                the_post();
                ?>
                <h1 class="page-title-undersida4"><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <?php
            endwhile;
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>