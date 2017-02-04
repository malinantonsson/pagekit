<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $view->render('head') ?>
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
            Alphabet
            </a>
            
            <!-- Render menu position -->
            <nav id="main-navigation" class="nav nav_wrapper" <?= $params['navbar_sticky'] ? ' data-uk-sticky' : '' ?> role="navigation">
                <?php if ($view->menu()->exists('main')) : ?>
                    <?= $view->menu('main', 'menu-navbar.php') ?>
                <?php endif ?>
            </nav>
        </header>

        <?php if ($view->position()->exists('top')) : ?>
        <div id="top" class="tm-top">
            <div class="uk-container uk-container-center">

                <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                    <?= $view->position('top', 'position-grid.php') ?>
                </section>

            </div>
        </div>
        <?php endif ?>

        

        <!-- Render widget position -->
        <?php if ($view->position()->exists('sidebar')) : ?>
            <?= $view->position('sidebar') ?>
        <?php endif; ?>

        <!-- Render content -->
        <?= $view->render('content') ?>

        <!-- Insert code before the closing body tag  -->
        <?= $view->render('footer') ?>

    </body>
</html>
