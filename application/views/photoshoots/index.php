<section id="our-story">
    <article>
        <div class="row">
            <h1>Photoshoots</h1>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <ul class="list list-unstyled">
                <? foreach($albums as $album): ?>
                    <? if(strpos($album->name, 'shoot')): ?>
                    <li><a href="/photoshoots/view/<?= $album->id ?>"><?= $album->name ?></a></li>
                        <? endif ?>
                <? endforeach ?>
                </ul>
            </div>
            <div class="col-sm-9">
                <?= $photos ?>
            </div>
        </div>
    </article>
</section>
