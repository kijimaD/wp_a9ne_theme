<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="http://localhost/wordpress_bs_test/wp-content/themes/newa9ne_blog_theme/style.css" rel="stylesheet" />

  <!-- 追加CSS -->
  <link href="http://localhost/wordpress_bs_test/wp-content/themes/newa9ne_blog_theme/css/custom.css" type="text/css" rel="stylesheet" />

  <!-- fontawesome CDN -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

  <title>
    <?php bloginfo('name'); ?>
  </title>
  <?php wp_head();?>
</head>

<body>

  <!-- ヘッダー -->
  <header class="">

    <!-- ナビゲーションバー -->
    <nav class="navbar navbar-expand-md navbar-light sticky-top">
      <!-- サブコンポーネント -->
      <div class="container">
        <!-- ブランド -->
        <a class="navbar-brand" href="<?php echo home_url('/'); ?>" style="font-weight:900;">
          <?php bloginfo('name'); ?></a>
        <!-- 切り替えボタン -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!--  ナビゲーション -->
        <div class="collapse navbar-collapse" id="navbar-content">
          <!-- ナビゲーションメニュー -->
          <!-- 左側メニュー: トップページの各コンテンツへのリンク -->
          <ul class="navbar-nav mr-auto">

          </ul>

          <!-- 右側メニュー: Contactページへのリンク -->
          <ul class="navbar-nav py-3">
            <li class="nav-item mx-2">
              <a class="nav-link" href="<?php echo home_url('/'); ?>">WEB制作</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="<?php echo home_url('/'); ?>">お問い合わせ</a>
            </li>
            <!-- ドロップダウン -->
            <li class="nav-item dropdown mx-2">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                店舗情報
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo home_url('/'); ?>">情報</a>
                <a class="dropdown-item" href="<?php echo home_url('/'); ?>">アクセス</a>
              </div>
            </li>
            <!-- 検索バー -->
            <li class="nav-item">
              <button type="button" class="btn btn-outline-secondary border-0" data-toggle="modal" data-target="#modal01">
                <i class="fas fa-search"></i>
              </button>
            </li>

            <!-- /検索バー -->
          </ul>
          <!-- /ナビゲーションメニュー -->
        </div>
      </div>
      <!-- /サブコンポーネント -->
    </nav>
    <!-- /ナビゲーションバー -->
  </header>
  <!-- /ヘッダー -->

  <!-- 検索モーダル内 -->
  <div class="modal fade" id="modal01" tabindex="-1" role="dialog" aria-labelledby="modal01-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal01-label">サイト内検索</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">
          <form class="form-inline" action="http://localhost/wordpress_bs_test/" method="get">
            <input class="form-control" type="text" placeholder="検索" aria-label="Search" name="s">
            <button class="btn btn-outline-success" type=submit>
              <i class="fas fa-search"></i>
            </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
        </div>
      </div>
    </div>
  </div>
  <!-- 検索モーダル内 -->

  <body>
    <div class="container my-5">
      <div class="row">
