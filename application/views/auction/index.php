<section>
    <article>
        <div class="spacer">
        </div>
        <div class="row">
            <h1>Auction</h1>
        </div>
        <div class="row">
            <table class="table">
            <? foreach($items as $item): ?>
                <tr>
                    <td>
                        <b><?= $item->item_name ?></b><br>
                        <?= $item->description ?>
                    </td>
                    <td><img src="/img/auction/<?= $item->image_url ?>"></td>
                    <td><a href="/auction/bid/<?= $item->id ?>">Bid</a></td>
                </tr>
            <? endforeach; ?>
            </table>
        </div>
    </article>
</section>