<?php snippet('header') ?>

<section class="hero-slides wrapper-large" >

<?php if ($page->images()->isNotEmpty()) : ?>
    <?php foreach ($page->images()->sortBy('sort', 'desc')->filterBy('filename', '*=', 'project-') as $image) : ?>
        <div class="slide">
            <?= $image->crop(900, 600)  ?>
            <?php if($image->credit()->isNotEmpty()): ?>
            <p class="credit"><span>© </span><?= $image->credit() ?></p>
            <?php endif ?>
        </div>
    <?php endforeach ?>
<?php endif ?>

</section>



<main class="wrapper wrapper-large">

    


    <!-- Text Editor -->
    <section class="wrapper-medium stack-medium">
        <?= $page->text()->toBlocks() ?>
    </section>




</main>


<?php snippet('footer') ?>

