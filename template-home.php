<?php
/**
 * Template Name: Home
 */
?>

<?php

  query_posts( array( 'post_type' => 'podcasts', 'showposts' => 1) );
  if ( have_posts() ) : while ( have_posts() ) : the_post();
      get_template_part('templates/content', 'featured');
  endwhile;endif; wp_reset_query();

  query_posts( array( 'post_type' => 'podcasts', 'showposts' => 9, 'offset' => 1) ); ?>
  <div class="container article-list">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php getPodcasts(); ?>
    <?php endwhile;endif; wp_reset_query() ?>
  </div>
