</div>
<!-- /.row main-contents -->
<div class="row expanded footer">
  <div class="small-12 column">
    <p><small>©<?php bloginfo('name'); ?> 2016</small></p>

  </div>
</div>

</div>

<!-- close wrapper, no more content after this -->
</div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/what-input/what-input.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/foundation-sites/dist/foundation.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/masonry.js"></script>
<script>
$(window).load(function() {
  $('#article').masonry({
    itemSelector: '.article-masonry',
  });
});
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/particles.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/set.js"></script>
<?php wp_footer(); ?>
</body>
</html>
