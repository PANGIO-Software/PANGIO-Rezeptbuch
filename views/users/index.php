<?php
/**
 * @var array $elements
 * @var string $title
 */
?>

<h1 class="title">
    <?= esc($title) ?>
</h1>

<div class="search-wrapper">
    <form action="<?= base_url('users') ?>" method="post" class="search-form">
        <div class="input-wrapper">
            <input type="search" name="search" id="search" placeholder="<?= esc(LANG->actions->search) ?>" required />
        </div>

        <div class="input-wrapper">
            <button type="submit" class="btn btn-blue">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
    </form>

    <a href="<?= base_url('users') ?>" class="btn btn-blue">
        <i class="fa-solid fa-arrows-rotate"></i>
    </a>

    <a href="<?= base_url('create-user') ?>" class="btn btn-blue">
        <i class="fa-solid fa-plus"></i>
    </a>
</div>
