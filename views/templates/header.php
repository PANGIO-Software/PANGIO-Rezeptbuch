<?php
/**
 * @var string $title
 */
?>

<!DOCTYPE HTML>
<html lang="de">
    <head>
        <title><?= esc($title) ?></title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/favicon" href="<?= base_url('assets/images/favicon.png') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/css/application.css') ?>" />
        <script src="https://kit.fontawesome.com/cba80a8d38.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/js/navigation.js') ?>"></script>
        <script>
            const baseURL = '<?= base_url() ?>';
            const lang = JSON.parse('<?= array_to_json(LANG) ?>');
        </script>
    </head>
    <body>
        <header>
            <a href="javascript:Navigation.toggleNavigation()" class="menu-bars">
                <i class="fa-solid fa-bars"></i>
            </a>

            <a href="javascript:void(0)" class="user">
                <i class="fa-solid fa-user"></i>
            </a>

            <a href="<?= base_url('logout') ?>" class="logout">
                <i class="fa-solid fa-right-from-bracket"></i>
            </a>

            <nav id="navigation">
                <a href="javascript:void(0)">
                    <?= esc(LANG->navigation->recipes) ?>
                </a>

                <a href="javascript:void(0)">
                    <?= esc(LANG->navigation->categories) ?>
                </a>

                <a href="<?= base_url('users') ?>">
                    <?= esc(LANG->navigation->users) ?>
                </a>

                <p class="copyright">
                    <?= esc(LANG->general->copyright) ?>
                </p>
            </nav>
        </header>
        <main>