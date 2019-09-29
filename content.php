<!-- <h2 class="display-4" style="font-weight:900;">
  <?php the_title(); ?>
</h2> -->
<small class="card-text btn btn-light btn-sm">タグ1</small>
<small class="card-text btn btn-light btn-sm">タグ2</small>
<small class="card-text"><time pubdate="pubdate" datetime="<?php the_time('Y-m-d'); ?>" class="entry-date">
    <?php the_time(get_option('date_format')); ?></time>
</small>
<p>
  <?php the_content();?>
  <?php
  if (is_single()) :
  ?>
  <hr>
  <div id="content_date_author">
    <ul class="list-inline text-right">
      <li class="list-inline-item">
        <time pubdate="pubdate" datetime"<?php the_time('Y-m-d'); ?>" class="entry-date">
          <small class="text-muted">
            <?php the_time(get_option('date_format')); ?></small>
        </time>
      </li>
      <li class="list-inline-item">
        <small class="text-muted">
          <?php the_author_posts_link(); ?></small>
      </li>
    </ul>
  </div>
  <?php
endif;
?>
</p>
