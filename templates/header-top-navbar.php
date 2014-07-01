<header class="banner navbar-top navbar-primary navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?php __('Toggle navigation', 'pebble' ); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>
<?php if ( is_home() ) { ?>
<section class="banner masthead" role="banner">
    <figure>
      <img src="<?php header_image() ?>" alt="" class="header-image" />
    <!--   <a class="brand" href="<?php echo home_url('/') ?>"><?php bloginfo('name'); ?></a> -->
  </figure>
</section>
<?php }
