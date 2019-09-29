<!-- <h2 class="display-4" style="font-weight:900;">
  <?php the_title(); ?>
</h2> -->
<small class="card-text btn btn-light btn-sm">タグ1</small>
<small class="card-text btn btn-light btn-sm">タグ2</small>
<small class="card-text"><time pubdate="pubdate" datetime="<?php the_time('Y-m-d'); ?>" class="entry-date">
    <?php the_time(get_option('date_format')); ?></time>
</small>
      <a href="<?php the_permalink(); ?>" class="post-link">
        <?php the_post_thumbnail(
    'medium',
    array(
'alt' => the_title_attribute('echo=0'),
'title' => the_title_attribute('echo=0'),
'class' => 'card-img',
)
); ?>
      </a>
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

  <!-- ページ間ナビゲーション -->
  <?php
if (is_single()) :
?>
  <div class="container mb-5">
    <div class="row">
      <div class="col-md-6 text-left">
        <?php next_post_link('%link', '%title<i class="fas fa-chevron-left fa-2x float-left text-secondary"></i>', true); ?>
      </div>
      <div class="col-md-6 text-right">
        <?php previous_post_link('%link', '%title<i class="fas fa-chevron-right fa-2x float-right text-secondary"></i>', true); ?>
      </div>
    </div>
  </div>
  <?php
endif;
?>
  <!-- ページ間ナビゲーション -->
