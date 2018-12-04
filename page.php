<?php get_header(); ?>

<div class="container flow-text">
  <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
      <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
    <?php else : ?>
      <p><?php __('No Page Found') ?></p>
    <?php endif; ?>
    </div>

<?php get_footer(); ?>