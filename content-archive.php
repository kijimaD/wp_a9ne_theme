<div class="card border-0">
  <h2 class="card-title" style="font-weight:900">
    <a href="<?php the_permalink();?>" class="card-title text-dark">
      <?php the_title(); ?>
    </a>
  </h2>
  <div class="card-body pt-0">
    <small class="card-text btn btn-light btn-sm">タグ1</small>
    <small class="card-text btn btn-light btn-sm">タグ2</small>
    <small class="card-text"><time pubdate="pubdate" datetime="<?php the_time('Y-m-d'); ?>" class="entry-date">
        <?php the_time(get_option('date_format')); ?></time>
    </small>
    <p class="card-text my-3">
      <?php the_excerpt();?>
    </p>
    <a href="<?php the_permalink();?>" class="btn btn-outline-success">本文を読む</a>
  </div>
</div>
