
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>
<article <?php post_class('featured'); ?> style="background-image: url('<?php echo $image[0]; ?>')">
  <div class="container">
    <div class="inside-article">
      <span class="latest-podcast">Senaste podcasten</span>
      <header>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </header>      
    </div>
  </div>
</article>
