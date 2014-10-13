<section id="events">
    <article>
        <div class="cover">
            <img src="/assets/img/events/eventsdrawing.png" class="img-responsive">
        </div>
        <div class="row">
            <h1>Events</h1>
        </div>
        <? foreach($event_views as $event_view): ?>
        <?= $event_view ?>
        <? endforeach ?>
    </article>
</section>
