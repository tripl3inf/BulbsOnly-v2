<?php while (have_posts()) : the_post(); ?>

  <!--  begin carousel -->
  <section id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/carousel_img2.jpg" alt=""/>

        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/carousel_img3.jpg" alt=""/>

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
  </section>


  <section id=badge-bar>
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
  </section>


  <section id=brand-bar>
    <figure>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo_sylvania.png" alt=""/>
    </figure>
    <figure>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo_satco.png" alt=""/>
    </figure>
    <figure>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo_philips.png" alt=""/>
    </figure>
    <figure>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo_halco.png" alt=""/>
    </figure>
    <figure>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo_ge.png" alt=""/>
    </figure>
    <figure>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo_bulbrite.png" alt=""/>
    </figure>
    <figure>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo_energystar.png" alt=""/>
    </figure>
  </section>


  <section id=location-panel>
    <?php
    $theme_options = get_option('front_page_settings');
    $text_field = $theme_options['text'];
    $select_field = $theme_options['select'];
    $colorpicker_field = $theme_options['colorpicker'];
    $location_content = $theme_options['editable-location-panel'];
    ?>
    <h3>Visit Our Location!</h3>


    <article class="editable-content">
      <?php echo $location_content; ?>
    </article>

    <div class="map">
      <?php echo do_shortcode('[google_maps id="10"]') ?>
    </div>
  </section>


  <section id=contact-panel>
    <aside>
      <?php echo do_shortcode('[cscf-contact-form]') ?>
    </aside>

    <article>

    </article>

  </section>


  <?php //get_template_part('templates/page', 'header'); ?>
  <?php //get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?>
