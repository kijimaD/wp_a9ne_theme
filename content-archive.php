<div class="card border-0">
  <h2 class="card-title mb-0" style="font-weight:900">
    <a href="<?php the_permalink();?>" class="card-title text-dark">
      <?php the_title(); ?>
    </a>
  </h2>
  <div class="card-body pt-0 pl-0 pb-4">
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
    <p class="card-text">
      <?php the_excerpt();?>
    </p>
    <a href="<?php the_permalink();?>" class="btn btn-outline-success">本文を読む</a>
  </div>
</div>
