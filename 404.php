<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>estra magazine</title>
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>

<body>
  <?php get_header(); ?>
  <div class="eyecatch single-eyecatch page-eyecatch">
    <img src="<?php echo get_template_directory_uri(); ?>/img/sorry.jpg" alt="no-img" />
    <div class="page-title">
      <h1 class="page-title__h1 page-title__404">404</h1>
    </div>
  </div>
  <?php get_footer(); ?>
</body>

</html>