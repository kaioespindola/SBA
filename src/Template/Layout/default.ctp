<?php 
if($_SERVER["HTTPS"] != "on") {
    header("Location: https://sba1.com". $_SERVER["REQUEST_URI"]);
   exit();
}
?>
<!DOCTYPE html>
<html>
<head>

    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="3 days">
    <meta name="theme-color" content="#1e2631">
    <meta name="google-site-verification" content="GmuWmCnQQ69fzQCn5x4U94QfTromB_HS_uu4fjAbigw" />

    <?php if(!empty($noticia->link)): ?>

        <?php
            $new_url = $noticia->link;
            header('Location: '.$new_url);
            exit()
        ?>

    <?php endif; ?>

    <title>
        <?= $this->fetch('title') ?> | <?= $configuracoes['site_name'] ?>
    </title>

    <meta name="description" content="<?= $configuracoes['site_details'] ?>" />
    <meta name="keywords" content="<?= $configuracoes['site_tags'] ?>" />
    <meta name="author" content="SBA">

    <?= $this->Html->meta('icon') ?>

    <script src="https://content.jwplatform.com/libraries/uBEiAc4f.js"></script>

    <?= $this->Html->css('style.min.css') ?>
    <?= $this->Html->css('swiper.min.css') ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://cdn.jwplayer.com/libraries/uBEiAc4f.js"></script>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-85766665-1', 'auto');
      ga('send', 'pageview');
    </script>

    <?php if(!empty($noticia)): ?>
        
    <?php 

    $thumbnail = $noticia->thumbnail;
    $link_thumb = explode("noticias/", $thumbnail);

    ?>

    <meta property="fb:app_id" content="533759830357197">
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?= $configuracoes["site_url"] ?>noticias/<?= $noticia->slug ?>">
    <meta property="og:title" content="<?= $noticia->name ?>">
    <meta property="og:site_name" content="SBA">
    <meta property="og:description" content="<?= $noticia->fina ?>">
    <meta property="og:image" content="https://sba1.com/arquivos/noticias/<?= $link_thumb[1] ?>">

    <?php endif; ?>

</head>
<body>

    <?= $this->element('header') ?>

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

    <?= $this->element('footer') ?>

    <?= $this->Html->script('swiper.min.js') ?>
    <?= $this->Html->script('script.min.js') ?>


</body>
</html>
