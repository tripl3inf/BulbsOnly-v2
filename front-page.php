<?php while (have_posts()) : the_post(); ?>

  <!--  begin carousel -->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/carousel_img1.jpg" alt=""/>

        <div class="carousel-caption">
        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div class="badge-bar">
    <div class="badge">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/shipping.svg" alt=""/>
      <h4>We Ship Anywhere!</h4>
    </div>

    <div class="badge">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/support.svg" alt=""/>
      <h4>Best Customer & Tech Support!</h4>
    </div>

    <div class="badge">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/lowest.svg" alt=""/>
      <h4>Lowest Prices!</h4>
    </div>
  </div>


  <div class="brand-bar">

    <div class="brand">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo_sylvania.png" alt=""/>
    </div>


    <div class="brand">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo_satco.png" alt=""/>
    </div>

    <div class="brand">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo_philips.png" alt=""/>
    </div>

    <div class="brand">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo_halco.png" alt=""/>
    </div>

    <div class="brand">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo_ge.png" alt=""/>
    </div>

    <div class="brand">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo_bulbrite.png" alt=""/>
    </div>

  </div>

  <?php //get_template_part('templates/page', 'header'); ?>
  <?php //get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?>
