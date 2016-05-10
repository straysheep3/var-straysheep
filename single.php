<?php get_header(); ?>
  <div class="row">
    <?php if(have_posts()) :
      while(have_posts()) : the_post(); ?>
        <div class="small-12 medium-7 large-9 column post-page callout" id="post-<?php the_ID(); ?>">
          <article class="single">
            <div class="media-object stack-for-small">
              <div class="media-object-section">
                <img src= "http://placeimg.com/200/200/people">
              </div>
              <div class="media-object-section main-section">
                <h2><?php echo get_the_title(); ?></h2>

                <hr>

                <div class="menu-centered">
                  <ul class="menu">
                    <li><?php echo get_the_date(); ?></li>
                    <li><?php the_category(',') ?></a></li>
                    <li><?php the_tags('Tag:',','); ?></li>
                  </ul>
                </div>

                <hr>

                <div class="menu-centered">
                  <ul class="menu">
                    <li><a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-get-pocket fa-2x" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss fa-2x" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <?php the_content(); ?>
          </article>
          <?php endwhile;
            else: ?>
            <div>
              <h2>記事はありません。</h2>
              <p>お探しの記事は見つかりませんでした。</p>
            </div>
          <?php endif; ?>

              <hr>

              <ul class="pagination text-center" role="navigation" aria-label="Pagination">
                <?php if(get_next_post()): ?>
                <li><?php next_post_link('%link', '%title&ensp; <-Next Post'); ?></li>
                <?php endif;
                      if(get_previous_post()) : ?>
                <li><?php previous_post_link('%link', 'Previous Post->&ensp;%title'); ?></li>
              <?php endif; ?>
              </ul>

              <hr>
              <?php comments_template(); ?>
        </div>
        <!-- /.small-12 medium-9 large-10 column -->
  <?php get_sidebar(); ?>
<?php get_footer(); ?>
