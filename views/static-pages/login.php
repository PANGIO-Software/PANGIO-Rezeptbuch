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
        <link rel="stylesheet" href="<?= base_url('assets/css/static-pages.css') ?>" />
        <script src="https://kit.fontawesome.com/cba80a8d38.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <main>
            <div class="login-wrapper">
                <h1 class="title">
                    <?= esc(LANG->projectName) ?>
                </h1>

                <form action="<?= base_url('login') ?>" method="post" class="login-form">
                    <div class="input-wrapper">
                        <label for="username">
                            <?= esc(LANG->users->attributes->username) ?>
                            <span class="required">*</span>
                        </label>

                        <input type="text" name="username" id="username" placeholder="<?= esc(LANG->users->attributes->username) ?>" required />
                    </div>

                    <div class="input-wrapper">
                        <label for="password">
                            <?= esc(LANG->users->attributes->password) ?>
                            <span class="required">*</span>
                        </label>

                        <input type="password" name="password" id="password" placeholder="<?= esc(LANG->users->attributes->password) ?>" required />
                    </div>

                    <div class="input-wrapper button-wrapper">
                        <button type="submit" class="btn btn-blue">
                            <?= esc(LANG->actions->login) ?>
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </body>
</html>