<section id="events">
    <article>
        <div class="cover">
            <img src="/assets/img/events/eventsdrawing.png" style="width:100%;" class="img-responsive">
        </div>
        <div class="row">
            <h1>Events</h1>
        </div>
        <? if ($event_views): ?>
        <? foreach($event_views as $event_view): ?>
        <?= $event_view ?>
        <? endforeach ?>
        <? else: ?>
        <div class="row">
            <p>Next: Ticket Launch Party, details tbc</p>
        </div>
        <? endif ?>
    </article>
</section>
