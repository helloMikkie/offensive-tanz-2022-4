<section>
    <ul class="stack-small event-info event-info-purple">
        <?php snippet('event-dates/event-info') ?>

</section>


<?php if ($page->scedule()->isNotEmpty()) : ?>
    <section class="stack-medium">
        <h2><?= t('termine') ?></h2>
        <div class="cluster cluster-small">
            <div>
                <?php foreach ($page->scedule()->toStructure()->limit(10) as $termin) : ?>
                    <p class="event-dates bg-purple">
                        <?= getFormattedDate($termin->datum()) ?>, <?= $termin->zeit()->time('g') ?> <?= t('uhr') ?>
                    </p>
                <?php endforeach ?>
            </div>
        </div>
    </section>
<?php endif ?>