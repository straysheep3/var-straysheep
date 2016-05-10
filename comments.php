<section class="comment">
  <h3 id="comments">COMMENT</h3>
  <?php if(have_comments()) : ?>
  <article class="media-object">
    <ol>
      <?php wp_list_comments('avator_size=55'); ?>
    </ol>
  <?php endif; ?>
  </article>
</section>

<?php $args = array(
  'title_reply' => 'Leave a Reply',
  'label_submit' => '送信する。',
  );
 comment_form($args); ?>
