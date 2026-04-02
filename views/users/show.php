<?php
/**
 * @var array $element
 * @var string $title
 */
?>

<h1 class="title">
    <?= esc($title) ?>
</h1>

<div class="page-action-wrapper">
    <a href="<?= base_url('update-user/') . $element['id'] ?>" class="btn btn-blue">
        <?= esc(LANG->actions->edit) ?>
    </a>

    <a href="javascript:Navigation.confirmDeletion('delete-user', <?= $element['id'] ?>)" class="btn btn-red">
        <?= esc(LANG->actions->delete) ?>
    </a>
</div>

<form action="<?= base_url('create-user') ?>" method="post" class="default-form">
    <div class="input-wrapper">
        <label for="username">
            <?= esc(LANG->users->attributes->username) ?>
            <span class="required">*</span>
        </label>

        <input type="text" name="username" id="username" value="<?= esc($element['username']) ?>" disabled />
    </div>

    <div class="input-wrapper">
        <label for="administrator">
            <?= esc(LANG->users->attributes->administrator) ?>
        </label>

        <select name="administrator" id="administrator" disabled>
            <option value="0" <?= !$element['administrator'] ? 'selected' : '' ?>><?= esc(LANG->general->no) ?></option>
            <option value="1" <?= $element['administrator'] ? 'selected' : '' ?>><?= esc(LANG->general->yes) ?></option>
        </select>
    </div>

    <div class="input-wrapper button-wrapper">
        <a href="<?= base_url('users') ?>" class="btn btn-blue">
            <?= esc(LANG->actions->back) ?>
        </a>
    </div>
</form>