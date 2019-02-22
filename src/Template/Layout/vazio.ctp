<!DOCTYPE html>
<html>
<head>

    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="3 days">
    <meta name="theme-color" content="#07549c">

    <title>
        <?= $this->fetch('title') ?> | <?= $configuracoes['site_name'] ?>
    </title>

    <meta name="description" content="<?= $configuracoes['site_details'] ?>" />
    <meta name="keywords" content="<?= $configuracoes['site_tags'] ?>" />
    <meta name="author" content="SBA">

    <?= $this->Html->meta('icon') ?>

    <script src="https://content.jwplatform.com/libraries/uBEiAc4f.js"></script>

    <?= $this->Html->css('materialize.css') ?>
    <?= $this->Html->css('style.min.css') ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <?= $this->Html->css('https://fonts.googleapis.com/icon?family=Material+Icons') ?>

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

</head>
<body>

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

    <script>
        (function(w,d,t,u,n,a,m){w['MauticTrackingObject']=n;
            w[n]=w[n]||function(){(w[n].q=w[n].q||[]).push(arguments)},a=d.createElement(t),
            m=d.getElementsByTagName(t)[0];a.async=1;a.src=u;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://mautic.sba1.com/index.php/mtc.js','mt');

        mt('send', 'pageview');
    </script>​

    <?= $this->Html->script('jquery-3.3.1.min.js') ?>
    <?= $this->Html->script('materialize.min.js') ?>
    <?= $this->Html->script('jquery.simpleWeather.min.js') ?>
    <?= $this->Html->script('plugins.js') ?>

</body>
</html>
