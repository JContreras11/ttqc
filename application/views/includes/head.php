<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <!-- Author Meta -->
  <meta name="author" content="TTQC">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="#blog">

  <meta property="og:image" content="<?= base_url() ?>uploads/ttq5.png" />

  <!-- meta character set -->
  <meta charset="UTF-8">


  <?php if (isset($data)): ?>

    <?php foreach ($data as $k => $v): ?>

    <meta property="og:title" content="<?= $v->tit_blog ?>" />
    <meta property="og:url" content="<?= base_url() ?>entrada/<?= $v->url_blog ?>" />
    <meta property="og:type" content="article">
    <meta property="og:image" content="<?= base_url() ?>uploads/<?= $v->img_blog ?>" />
    <meta property="og:description" content="<?= strip_tags($v->min_des_blog) ?>" />


    <?php endforeach; ?>

  <?php endif; ?>


  <!-- Site Title -->
  <title>TTQC</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?= base_url() ?>assets/img/favicon/site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">




    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/linearicons.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/propios.css">
    <script src="<?= base_url() ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138133553-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-138133553-1');
    </script>


    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5cbbe652f3971d0012e24636&product=inline-share-buttons' async='async'></script>


  </head>
  <body>
