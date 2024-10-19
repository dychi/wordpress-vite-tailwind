<?php

function disable_admin_bar()
{
  add_filter('show_admin_bar', '__return_false');
}

add_action('init', 'disable_admin_bar');


function get_theme_image_path($filePath = ''): string
{
  // 後ろのパスは要調整
  return get_template_directory_uri() . '/assets/images/' . $filePath;
}

// Viteでビルドしたものを有効化
function enqueue_vite_bundle()
{
  wp_enqueue_script('vite-bundle', get_template_directory_uri() . '/dist/main.js', array(), '1.0.0', true);
  wp_enqueue_style('vite-style', get_template_directory_uri() . '/dist/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_vite_bundle');

// GSAPを有効化
// The proper way to enqueue GSAP script in WordPress
// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
function theme_gsap_script()
{
  // The core GSAP library
  wp_enqueue_script('gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), false, true);
  // ScrollTrigger - with gsap.js passed as a dependency
  wp_enqueue_script('gsap-st', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array('gsap-js'), false, true);
}
add_action('wp_enqueue_scripts', 'theme_gsap_script');
