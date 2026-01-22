<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="header" id="header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/header_logo.svg" alt="サイト名">
        </a>
      </h1>
      <nav class="g-nav-area">
        <ul class="g__nav">
          <li><a href="<?php echo esc_url(home_url('/services/')); ?>">事業内容</a></li>
          <li><a href="#">施工実績</a></li>
          <li><a href="#">会社案内</a></li>
          <li><a href="#">採用情報</a></li>
          <li><a href="#">お問い合わせ</a></li>
        </ul>
      </nav>
      <!-- SP -->
      <button class="hamburger" aria-label="menu">
        <span></span><span></span><span></span>
      </button>
    </div>

  </header>