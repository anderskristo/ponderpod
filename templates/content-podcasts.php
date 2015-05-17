<article <?php post_class('clearfix'); ?>>
  <div class="featured-image">
    <?php if ( has_post_thumbnail() ) {
      the_post_thumbnail(array(300, 300));
     } else {
       // Default image here
     }?>
  </div>
  <div class="inside-article">
    <header>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>
  </div>
</article>