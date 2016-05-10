<!doctype html>
<html class="no-js" lang="ja">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css">
    <?php wp_deregister_script('jquery'); ?>
    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="off-canvas-wrapper">
      <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

        <!-- off-canvas title bar for 'small' screen -->
        <div class="title-bar" data-responsive-toggle="widemenu" data-hide-for="medium">
          <div class="title-bar-left">
            <span class="title-bar-title"><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></span>
          </div>
          <div class="title-bar-right">
            <button class="menu-icon" type="button" data-open="offCanvasRight"></button>
          </div>
        </div>

        <!-- off-canvas right menu -->
        <div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">
          <ul class="vertical dropdown menu" data-dropdown-menu>
            <li><a href="right_item_1">Right item 1</a></li>
            <li><a href="right_item_2">Right item 2</a></li>
            <li><a href="right_item_3">Right item 3</a></li>
          </ul>
        </div>


        <!-- original content goes in this container -->
        <div class="off-canvas-content" data-off-canvas-content>
          <div id="particles-js"></div>

          <div class="row expanded header show-for-medium">
            <div class="small-12 column" >
              <h1 class="text-center"><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
            </div>
          </div>
          <!-- /.row header-->

          <div class="row expanded g-nav">
            <div class="small-12 column">
              <div class="menu-centered g-nav">
                <ul class="menu">
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Link</a></li>
                </ul>
              </div>

            </div>
            <hr>
          </div>
