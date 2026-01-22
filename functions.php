<? function theme_assets()
{
  // リセットCSS
  wp_enqueue_style(
    'theme-ress',
    'https://unpkg.com/ress@4.0.0/dist/ress.min.css'
  );

  // 他のCSS
  wp_enqueue_style(
    'theme-common',
    get_template_directory_uri() . '/css/common.css'
  );
  wp_enqueue_style(
    'theme-top',
    get_template_directory_uri() . '/css/top.css'
  );
  wp_enqueue_style(
    'theme-front-page',
    get_template_directory_uri() . '/css/front-page.css'
  );
  wp_enqueue_style(
    'theme-page',
    get_template_directory_uri() . '/css/page.css'
  );

  // JS
  wp_enqueue_script(
    'theme-main',
    get_template_directory_uri() . '/js/main.js',
    array('jquery'),
    null,
    true
  );
}
add_action('wp_enqueue_scripts', 'theme_assets');
