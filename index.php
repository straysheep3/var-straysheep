<?php get_header(); ?>
  <div class="row">
    <div class="small-12 medium-8 large-9 column index">
      <div class="row article" id="article">
        <?php if (have_posts()) :
          while (have_posts()) : the_post();
        ?>
        <div class="small-12 medium-6 large-4 column article-masonry">
          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="callout">
              <?php
                $cat = get_the_category();
                $cat = $cat[0]; {
                  echo '<h2 class="' . $cat->category_nicename . '">';
                }
              ?>
                <a href="<?php the_permalink(); ?>">
                  <?php
                    if ( mb_strlen( $post->post_title ) > 40 ) {
                      $title = mb_substr( $post->post_title ,0 , 40);
                      echo $title. '...';
                    } else {
                      echo $post->post_title;
                    }
                  ?>
                </a>
              </h2>
                <?php the_content('Read more'); ?>
                <hr>
                <ul class="menu">
                  <li><?php the_category(','); ?></li>
                </ul>
              </div>
          </div>
        </div>
        <?php endwhile;
          else :
        ?>
        <div class="small-12 medium-6 large-4 column">
          <h2>記事はありません。</h2>
          <p>お探しの記事はみつかりませんでした。</p>
        </div>
        <?php endif; ?>
        <hr>
        <!-- pagination -->
          <?php if ( $wp_query -> max_num_pages > 1 ) : ?>
          <div class="small-12 column">
            <ul class="pagination text-center" role="navigation" aria-label="Pagination">
              <li class="pagination-previous"><?php previous_posts_link('Next Page') ?></li>
              <li class="pagination-next"><?php next_posts_link('Previous Page'); ?></li>
            </ul>
          </div>
          <?php endif; ?>

      </div>
    </div>
  <!-- /.small-12 medium-9 large-10 column -->
  <?php get_sidebar(); ?>
<?php get_footer(); ?>
