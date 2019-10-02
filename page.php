<?php get_header(); ?>

<!-- 左サイドバー -->
<div class="col-lg-2">
<?php get_template_part('left-sidebar'); ?>
</div>
<!-- /左サイドバー -->

<!-- 空間 -->
<div class="col-lg-1">
</div>
<!-- /空間 -->

<!-- 本文 -->
<div class="col-lg-7">
  <?php
if (have_posts()) :
  while (have_posts()):
    the_post();
    get_template_part('content');
  endwhile;
  endif;
  ?>

  <!-- ペジネーション -->
  <nav class="mx-auto">
  </nav>
  <!-- /ペジネーション -->

</div>

<!-- /本文 -->

<!-- 未定・右 -->
<div class="col-lg-3">
</div>
<!-- /未定・右 -->

</div>
</div>
<?php get_footer(); ?>
