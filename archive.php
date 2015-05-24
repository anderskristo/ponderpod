<div class="container">
    <div class="podcasts-archive">
        <?php get_template_part('templates/page', 'header'); ?>
        <ul class="podcast-timeline">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('templates/content', 'podcasts'); ?>
            <?php endwhile; ?>
        </ul>
    </div>
</div>
