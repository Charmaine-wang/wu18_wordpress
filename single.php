<?php get_header(); ?>

<?php if (have_posts()): ?>

<div class="row">
    <?php while (have_posts()): the_post(); ?>
   <div class="col">
     <h2><?php the_title(); ?></h2>
   </div>        
        <?php the_content(); ?>

    <?php endwhile; ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>