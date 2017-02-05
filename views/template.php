<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $view->render('head') ?>
        <?php $view->style('normalize', 'theme:css/vendor/normalize.css') ?>
        <?php $view->style('theme', 'theme:css/theme.css') ?>
        <?php $view->script('theme', 'theme:js/theme.js') ?>
    </head>
    <body>

        <header class="header" role="banner">
            <a href="<?= $view->url()->get() ?>" class="header__logo">
                <?php if ($logo = $params['logo']) : ?>
                    <img src="<?= $this->escape($logo) ?>" alt="">
                <?php else : ?>
                    <?= $params['title'] ?>
                <?php endif ?>
            </a>
            
            <!-- Render menu position -->
            <nav id="main-navigation" class="nav nav_wrapper" <?= $params['navbar_sticky'] ? ' data-uk-sticky' : '' ?> role="navigation">
                <?php if ($view->menu()->exists('main')) : ?>
                    <?= $view->menu('main', 'menu-navbar.php') ?>
                <?php endif ?>
            </nav>
        </header>

        <main id="container" class="container wrapper" role="main">
            <div class="<?= $params['page_class'] ?>">
                <div class="grid-wrapper">

                    <!-- Render left sidebar -->
                    <?php if ($view->position()->exists('sidebar')) : ?>
                        <?= $view->position('sidebar', 'sidebar.php') ?>
                    <?php endif; ?>

                    <!-- Render content -->
                    <?= $view->render('content') ?>

                    <!-- Render right sidebar -->
                    <?php if ($view->position()->exists('sidebar-right')) : ?>
                        <?= $view->position('sidebar-right', 'sidebar-right.php') ?>
                    <?php endif; ?>
                </div>


            </div>
        </main>

       

       

        <!-- Insert code before the closing body tag  -->
        <?= $view->render('footer') ?>

    </body>
</html>
