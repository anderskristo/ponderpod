<?php

/**
 *
 * Get wp_audio_shortcode from ACF Field
 *
 */

 function getPodcastAudio () {
   // TODO: Fix freekin link bug (gets broken)
   // + The url makes it break, fixes when going live
   $audio = get_field('podcast_audio');
   $url = $audio['url'];
   $attr = array(
     'src'      => 'http://dev.ponderpod.se/wp-content/uploads/2015/05/Ben-Howard-London.mp3',
     'loop'     => 'false',
     'autoplay' => 'false',
     'preload' => 'true'
     );
   echo wp_audio_shortcode( $attr );
 }
