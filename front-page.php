<?php get_header(); ?>
<div class="blue darken-4">
    <!-- Family Leader -->
    <img
      src="<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'\img\showcase.jpg'); ?>"
      alt="Family"
      class="leader-img responsive-img z-depth-2 blue"
    />

    <!-- Hero -->
    <div class="row blue darken-4">
      <div class="container sr2">
        
          <h5
          class="mobile-header center amber-text text-darken-2 bold"
        >
        <?php bloginfo('name'); ?>
        </h5>
        <h6 class="white-text center bold">
          <?php echo get_theme_mod('showcase_heading', 'Serving the Catholic Community for Over 30 Years'); ?>
        </h6>
      </div>
    </div>

    <!-- Call now -->
    <div class="row scrollspy" id='contact'>
      <div class="col s6 offset-s3 center py-15">
        <a href='<?php echo get_theme_mod('btn_url', 'tel:+1-877-549-1212'); ?>' class="btn call-btn green darken-1 waves-effect waves-light z-depth-3 sr3">
        <?php echo get_theme_mod('showcase_cta', 'Call Now '); ?>
        <nobr class="bold"><?php echo get_theme_mod('showcase_blue', '877-549-1212'); ?>
        </nobr> 
        </a>
      </div>
    </div>
</div>

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