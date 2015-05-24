<li>
    <time class="pp-time"><span><?php the_time('j/n/y') ?></span> <span><?php the_time(); ?></span></time>
    <div class="pp-label">
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_content(); ?></p>
    </div>
</li>