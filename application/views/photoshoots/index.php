<section id="our-story">
    <article>
        <div class="row">
            <h1>Photoshoots</h1>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <ul class="list list-unstyled">
                <? foreach($albums as $album): ?>
                    <li><?= $album->name ?></li>
                <? endforeach ?>
                </ul>
            </div>
            <div class="col-sm-9">

                <?= $photos ?>
            </div>
        </div>
    </article>
</section>
