<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>

<!-- TODO: Post header with cover background and some basic info about the post also audio player -->
<div class="post-header" style="background-image: url('<?php echo $image[0]; ?>')">
  <div class="container">

    <div class="post-meta">

      <span class="date"><?php the_time('F j, Y'); ?></span>
      <h1><?php the_title(); ?></h1>
    </div>


    <div class="podcast-player">
      <?php getPodcastAudio(); ?>
    </div>

  </div>
</div>

<!-- Display content for post -->

<div class="container">
  <?php while (have_posts()) : the_post(); ?>
    <article class="single-post single-podcast">

      <?php the_content(); ?>
      <a class="hidden" href="<?php echo get_field('podcast_audio'); ?>"></a>

      <div class="disqus-comments">
          <div id="disqus_thread"></div>
          <script type="text/javascript">
              /* * * CONFIGURATION VARIABLES * * */
              var disqus_shortname = 'ponderpod';

              /* * * DON'T EDIT BELOW THIS LINE * * */
              (function() {
                  var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                  dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
              })();
          </script>
          <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
      </div>

    </article>
  <?php endwhile; ?>
</div>
