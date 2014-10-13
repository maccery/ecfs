<section id="our-story">
    <article>
        <div class="row">
            <div class="col-md-3">
                <ul class="list list-unstyled" >
                <? foreach($albums as $album): ?>
                    <li><a href="/photoshoots/view/<?= $album->id ?>"><?= $album->name ?></a></li>
                <? endforeach ?>
                </ul>
            </div>
            <div class="col-md-6">
                <?= $photos ?>
            </div>
        </div>
    </article>
</section>
