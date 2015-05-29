<?php
    if( is_user_logged_in()) {
        $marginTop = '32px';
    } else {
        $marginTop = '0px';
    }
?>
<header id="header" class="banner" role="banner" style="margin-top: <?php echo $marginTop; ?>">
  <div class="container">
    <a class="logo" href="<?= esc_url(home_url('/')); ?>">
        <img src="<?php bloginfo('template_directory') ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>" width="150" />
    </a>
    <nav class="navigation" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation']);
      endif;
      ?>
    </nav>
  </div>
</header>
