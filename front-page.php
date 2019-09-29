<?php get_header(); ?>
<!-- 未定・左 -->
<div class="col-lg-2">
</div>
<!-- /未定・左 -->

<!-- 本文 -->
<div class="col-lg-7">
  <?php
$args = array(
  'posts_per_page' => 5
);
$posts = get_posts($args);
foreach ($posts as $post):
  setup_postdata($post);
  get_template_part('content-archive');
endforeach;
wp_reset_postdata();
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
