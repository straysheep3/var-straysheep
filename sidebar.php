<div class="small-12 medium-4 large-3 column sidebar">
  <div class="callout">
    <ul class="menu vertical">
      <li class="menu-text">SOCIAL
        <ul class="menu">
          <li><a href="https://github.com/straysheep3"><i class="fa fa-github-alt fa-2x" aria-hidden="true"></i></a></li>
          <li><a href="https://twitter.com/var_straysheep"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
          <li><a href="https://jp.pinterest.com/straysheep3/"><i class="fa fa-pinterest fa-2x" aria-hidden="true"></i></a></li>
        </ul>
      </li>
    </ul>
    <hr>
    <ul class="menu vertical">
      <li class="menu-text">RSS
        <ul class="menu">
          <li><a href=""><i class="fa fa-get-pocket fa-2x" aria-hidden="true"></i></a></li>
          <li><a href=""><i class="fa fa-rss fa-2x" aria-hidden="true"></i></a></li>
        </ul>
      </li>
    </ul>
    <hr>
    <?php
      if ( is_active_sidebar( 'sidebar-1' ) ) : dynamic_sidebar( 'sidebar-1' );
      else:
    ?>
    <div class="widget">
      <h2>No Widget</h2>
      <p>ウィジットは設定されていません。</p>
    </div>
    <?php endif; ?>
  </div>
</div>
<!-- /.small-12 medium-3 large-2 column -->
