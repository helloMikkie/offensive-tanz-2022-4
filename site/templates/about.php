<?php snippet('header') ?>

<main>
    <!-- Header -->
    <section class="hero-slides wrapper-large " style="background-image: url('<?= url('assets/img/bg-slides-c.svg') ?>'">
        <?php foreach ($page->images()->filterBy('filename', '*=', 'project-')->sortBy('sort', 'asc') as $image) : ?>
            <div class="slide">
                <?= $image->crop(1200, 800)  ?>
                <?php if($image->credit()->isNotEmpty()): ?>
                <p class="credit"><span>© </span><?= $image->credit() ?></p>
            <?php endif ?>
            </div>
        <?php endforeach ?>
    </section>

    <!-- Content -->

    <section class="stack-medium wrapper wrapper-large">

        <?= $page->about()->toBlocks() ?>
    </section>
    <section class="stack-medium wrapper wrapper-large">
        <?= $page->partners()->toBlocks() ?>

        <section class="stack-medium event-list">
            <?php snippet('partner-header') ?>
        </section>
    </section>

    <section class="stack-medium wrapper wrapper-large">
        <?= $page->mission()->toBlocks() ?>
    </section>

    <section class="stack-medium wrapper wrapper-large">
        <?= $page->sponsors()->toBlocks() ?>



<?php 
    /*
    <div class="switcher">
        <div>
            <?php foreach ($page->images()->filterBy('extension', 'svg')->sortBy('sort', 'asc') as $image) : ?>
                <a href="<?= $image->link() ?>" target="_blank">
                    <?= svg($image) ?>
                </a>
            <?php endforeach ?>
        </div>
    </div>
    */
?>


    <div class="switcher container ">
        <div>
            <a href="http://www.tanzpakt.de/home/" target="_blank"><?= svg('assets/img/logo-tanzpakt-bkm.svg') ?></a>
            <div class="wrapper_neuland">
                <a href="https://www.bundesregierung.de/breg-de/bundesregierung/staatsministerin-fuer-kultur-und-medien/neustart-kultur-startet-1767056" target="_blank"><?= svg('assets/img/logo-neustart.svg') ?></a>
                <a href="https://www.berlin.de/sen/kultur/" target="_blank"><?= svg('assets/img/logo-senat.svg') ?></a>
            </div>
            
        </div>
    </div>
    </section>
</main>

<?php snippet('footer') ?>