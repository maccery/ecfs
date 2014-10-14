<section id="photoshoots">
    <article>
        <div class="row" style="padding-top: 130px;">
            <div class="col-md-3">
                <ul class="list list-unstyled">
                <? foreach($albums as $album): ?>
                    <? if (strstr($album->name, '//')): ?>
                    <li><a href="/photoshoots/view/<?= $album->id ?>"><?= $album->name ?></a></li>
                        <? endif?>
                <? endforeach ?>
                </ul>
            </div>
            <div class="col-md-9">
                <?= $photos ?>
            </div>
        </div>
    </article>
</section>
