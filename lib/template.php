<?php

/**
 *
 * Get wp_audio_shortcode from ACF Field
 *
 */

 function getPodcastAudio () {
   $audio = get_field('podcast_audio');
   $url = $audio['url'];
   $attr = array(
     'src'      => $url,
     'loop'     => 'false',
     'autoplay' => 'false',
     'preload' => 'true'
     );
   echo wp_audio_shortcode( $attr );
 }
