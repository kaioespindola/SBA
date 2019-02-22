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

    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <?= $this->Html->css('admin/materialize.css') ?>
    <?= $this->Html->css('admin/admin.css') ?>
    <?= $this->Html->css('admin/DateTimePicker.css') ?>
    <?= $this->Html->css('admin/jquery.fancybox.css') ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <?= $this->Html->css('https://fonts.googleapis.com/icon?family=Material+Icons') ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <?= $this->Html->script('admin/ckeditor/ckeditor');?>
    <?= $this->Html->script('admin/jquery.min.js') ?>
    <?= $this->Html->script('admin/jquery.fancybox.js') ?>
    <?= $this->Html->script('admin/DateTimePicker.js') ?>

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

<!-- COMEÇO HEADER -->
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">

        <nav class="blue-grey darken-4">

            <div class="nav-wrapper">

                <h1 class="logo-wrapper">

                    <a href="<?= $configuracoes['site_url'] ?>admin" class="brand-logo darken-1 waves-effect waves-block waves-light">
                        <img src="<?= $configuracoes['site_url'] ?>/img/admin/logo.png" alt="SBA">
                    </a>

                    <span class="logo-text">SBA</span>
                </h1>

                </div>

            </nav>

        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

<div id="main">

    <div class="wrapper">

        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">

            <ul id="slide-out" class="side-nav fixed leftside-navigation">

                <li class="user-details blue-grey darken-4">

                    <div class="row">

                        <div class="col col s4 m4 l4">

                            <img src="<?= $configuracoes['site_url'] ?>img/admin/user.jpg" class="circle responsive-img valign profile-image">

                        </div>

                        <div class="col col s8 m8 l8">
                            <ul id="profile-dropdown" class="dropdown-content">
                                <li>
                                    <?= $this->Html->link('Deslogar',
                                        ['controller' => 'Login', 'action' => 'deslogar'])
                                    ?>
                                </li>
                            </ul>
                            <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">
                                <?=  $this->request->session()->read('Auth.User.name'); ?>
                                <i class="fa fa-angle-down right"></i>
                            </a>
                            <p class="user-roal"></p>
                        </div>

                    </div>

                </li>

	            <?php if($this->request->session()->read('Auth.User.role_id') == 1): ?>
	            <?= $this->element('Admin/Menu/admin') ?>
	            <?php endif; ?>

	            <?php if($this->request->session()->read('Auth.User.role_id') == 2): ?>
	            <?= $this->element('Admin/Menu/editor') ?>
	            <?php endif; ?>

	            <?php if($this->request->session()->read('Auth.User.role_id') == 3): ?>
	            <?= $this->element('Admin/Menu/redacao') ?>
	            <?php endif; ?>

	            <?php if($this->request->session()->read('Auth.User.role_id') == 4): ?>
	            <?= $this->element('Admin/Menu/leiloes') ?>
	            <?php endif; ?>

            </ul>

            <a href="#" data-activates="slide-out" class="sidebar-collapse btn btn-medium waves-effect waves-light blue-grey darken-4">
                <i class="fa fa-bars" ></i>
            </a>

        </aside>

        <!-- Início Conteúdo Site -->
        <section id="content">

            <div class="container">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="container">
                            <?= $this->Flash->render() ?>
                            <?= $this->fetch('content') ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

</div>

<footer>

</footer>

    <?= $this->Html->script('admin/materialize.js') ?>
    <?= $this->Html->script('admin/plugins.js') ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

</body>
</html>