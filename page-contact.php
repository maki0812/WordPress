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
  <?php
  /*
Template Name: お問い合わせ
*/
  ?>
  <?php get_header(); ?>
  <div class="contact">
    <form class="form" method="post">
      <?php echo do_shortcode('[contact-form-7 id="41" title="お問い合わせフォーム"]'); ?>
    </form>
  </div>
  <?php get_footer(); ?>
</body>

</html>