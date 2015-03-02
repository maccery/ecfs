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
                        <a href="/auction/bid/<?= $item->id ?>"><h3><?= $item->item_name ?></h3>
                        <p><img style="border: 1px solid grey;" width="250" src="/assets/img/auction/<?= $item->image_url ?>"></p>
                        <p><a href="/auction/bid/<?= $item->id ?>"><button class="btn btn-primary">Bid</button></a></p>
                        <p class="well"><?= $item->description ?></p>
                    </td>
                </tr>
            <? endforeach; ?>
            </table>
        </div>
    </article>
</section>