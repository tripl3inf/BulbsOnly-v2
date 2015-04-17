<?php use Roots\Sage\Nav\NavWalker; ?>

<header class="container banner " role="banner">

  <div class="navbar navbar-default navbar-static-top">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/bulbsonly_logo.svg" alt=""/>
      </a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <img id="badge_specialize" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/bulbsonly_seal.png" alt=""/>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new NavWalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </nav>


  </div>

</header>
