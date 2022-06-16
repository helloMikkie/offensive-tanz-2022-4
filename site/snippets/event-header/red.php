


<section class="tanzkomplizen">
    <article class="stack-small card-content">
        <p><?= t($page->label()->value(), ucfirst($page->label()->html())) ?></p>
        <h2 class="text-tanzkomplizen"><?= $page->title() ?></h2>
        <p><?= $page->author() ?></p>
        <p>
        <?php if ($page->date()->isNotEmpty()) : ?>
            <span class="text-tanzkomplizen"><?= getFormattedDate($page->date()) ?></span> –
         <?php endif ?>
        
        <span class="text-tanzkomplizen"><?= getFormattedDate($page->end_date()) ?></span>
        </p>
        
         <p><?= $page->location() ?></p>
    </article>
</section>
