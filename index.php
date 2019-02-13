<?php get_header(); ?>

<?php if (have_posts()): ?>

<div class="row">
    <?php while (have_posts()): the_post(); ?>
   <div class="col">
     <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
   </div>        
        <?php the_excerpt(); ?>

    <?php endwhile; ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>