<?php
/**
 * @var string $title
 */
?>

<h1 class="title">
    <?= esc($title) ?>
</h1>

<form action="<?= base_url('create-user') ?>" method="post" class="default-form">
    <div class="input-wrapper">
        <label for="username">
            <?= esc(LANG->users->attributes->username) ?>
            <span class="required">*</span>
        </label>

        <input type="text" name="username" id="username" placeholder="<?= esc(LANG->users->attributes->username) ?>" maxlength="255" required />
    </div>

    <div class="input-wrapper">
        <label for="password">
            <?= esc(LANG->users->attributes->password) ?>
            <span class="required">*</span>
        </label>

        <input type="password" name="password" id="password" placeholder="<?= esc(LANG->users->attributes->password) ?>" maxlength="255" required />
    </div>

    <div class="input-wrapper">
        <label for="administrator">
            <?= esc(LANG->users->attributes->administrator) ?>
        </label>

        <select name="administrator" id="administrator">
            <option value="0"><?= esc(LANG->general->no) ?></option>
            <option value="1"><?= esc(LANG->general->yes) ?></option>
        </select>
    </div>

    <div class="input-wrapper button-wrapper">
        <button type="submit" class="btn btn-blue">
            <?= esc(LANG->actions->save) ?>
        </button>

        <a href="<?= base_url('users') ?>" class="btn btn-red">
            <?= esc(LANG->actions->cancel) ?>
        </a>
    </div>
</form>