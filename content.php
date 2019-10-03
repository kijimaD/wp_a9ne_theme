<h2 class="display-4" style="font-weight:900;">
  <?php the_title(); ?>
</h2>
<?php
        $cats = get_the_category();
        foreach ($cats as $cat) {
            $catid = $cat->cat_ID;
            $link = get_category_link($catid); ?>
<a href="<?php echo $link; ?>" class="text-secondary  btn btn-light btn-sm">
  <small class="card-text">
    <?php echo $cat->cat_name; ?>
  </small>
</a>
<?php
        }?>
<small class="card-text"><time pubdate="pubdate" datetime="<?php the_time('Y-m-d'); ?>" class="entry-date">
    <?php the_time(get_option('date_format')); ?></time>
</small>

<a href="<?php the_permalink(); ?>" class="post-link">
  <?php the_post_thumbnail(
                'header_image',
                array(
'alt' => the_title_attribute('echo=0'),
'title' => the_title_attribute('echo=0'),
'class' => 'card-img img-thumbnail',
)
); ?>
</a>
<div id="content">
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
</div>

<!-- ページ間ナビゲーション -->
<?php
if (is_single()) :
?>
<div class="container mb-5">
  <div class="row">
    <div class="col-md-6 text-left mx-0 pr-1">
      <small>＜ 次の記事</small>
      <?php next_post_link('%link', '%title', true); ?>
    </div>
    <div class="col-md-6 text-right mx-0 pl-1">
      <small>前の記事 ＞</small>
      <?php previous_post_link('%link', '%title', true); ?>
    </div>
  </div>
</div>
<?php
endif;
?>
<!-- ページ間ナビゲーション -->
