<?php snippet('header') ?>



<main class="default stack-medium wrapper wrapper-large">
<h1><?= $page->title() ?></h1>
    <?= $page->text()->toBlocks() ?>
</main>
<?php snippet('footer') ?>
