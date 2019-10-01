<?php get_header(); ?>

<!-- 未定・左 -->
<div class="col-lg-2">
  <div class="card sticky-top mt-2 border-0 bg-light" style="width: 10rem;">
    <img src="<?php bloginfo('template_url'); ?>/images/face.jpg" class="img-thumbnail rounded-circle border-0" alt="">
    <div class="card-body">
      <h5 class="card-title"></h5>
      <p class="">
        貴島 大悟</br>
        <small>WEB開発者</small>
      </p>
      <div>
        <p>
          <i class="fas fa-map-marker-alt fa-fw"></i> 鹿児島市<br>
          <i class="fab fa-linkedin-in fa-fw"></i> LinkedIn<br>
          <i class="fab fa-twitter fa-fw"></i> Twitter<br>
          <i class="fab fa-github fa-fw"></i> Github<br>
        </p>
      </div>
    </div>
  </div>
</div>
<!-- /未定・左 -->

<div class="col-lg-1">
</div>
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
<div class="col-lg-2">
</div>
<!-- /未定・右 -->

</div>
</div>
<?php get_footer(); ?>
