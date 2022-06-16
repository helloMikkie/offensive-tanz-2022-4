
<section class="theater_oN">
<article class="stack-small card-content">
        <p><?= t($page->label()->value(), ucfirst($page->label()->html())) ?></p>
        <h2 class="text-theater_oN"><?= $page->title() ?></h2>
        <p><?= $page->author() ?></p>
        <p>
        <?php if ($page->date()->isNotEmpty()) : ?>
            <span class="text-theater_oN"><?= getFormattedDate($page->date()) ?></span> –
         <?php endif ?>
        
        <span class="text-theater_oN"><?= getFormattedDate($page->end_date()) ?></span>
        </p>
        <p><?= $page->location() ?></p>
    </article>
</section>
