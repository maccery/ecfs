<section>
    <div class="spacer">
    </div>
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/auction">Auction</a></li>
            <li><a href="/auction/bid/<?= $item->id ?>"><?= $item->item_name ?></a></li>
            <li>Bid failed</li>
        </ol>

        <h2>We couldn't confirm your bid</h2>

        <p><?= $message ?></p>
    </div>
</section>