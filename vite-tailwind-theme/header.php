<!doctype html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/dist/vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body>
  <header class="w-full p-5">
    <div>
      <p>Header</p>
    </div>
  </header>
  <div id="app"></div>