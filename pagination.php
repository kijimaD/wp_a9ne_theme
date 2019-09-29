<!-- ペジネーション -->
<nav class="mx-auto" style="width:200px;">
  <?php
    if (function_exists('page_navi')) :
      page_navi('edge_type=link&elm_class=pagination&li_class=page-item&current_class=border-bottom border-success&current_format=<a class="page-link border-0"><span class=sr-only"">%d</span></a>');
    endif;
    ?>
</nav>
<!-- /ペジネーション -->
