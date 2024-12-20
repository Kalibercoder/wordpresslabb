
<?php
/*
Template Name: undersida3
En textspalt över hela sidans innehållsbredd
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
            <div class="page-content-text-wide">
                <?php the_content(); ?>
            </div>
            <div class="image-container">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large', array('class' => 'centered-img')); ?>
                <?php endif; ?>
            </div>
            <?php
        endwhile;
        ?>
    </div>
</main>

<?php get_footer(); ?>


