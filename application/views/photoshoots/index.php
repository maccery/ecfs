<section id="photoshoots">
    <article>
        <div class="row">
            <div class="col-md-3">
                <ul class="list list-unstyled">
                <? foreach($albums as $album): ?>
                    <li><a href="/photoshoots/view/<?= $album->id ?>"><?= $album->name ?></a></li>
                <? endforeach ?>
                </ul>
            </div>
            <div class="col-md-9">
                <?= $photos ?>
            </div>
        </div>
    </article>
</section>
