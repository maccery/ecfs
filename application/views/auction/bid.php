<section>
    <div class="spacer">
    </div>
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/auction">Auction</a></li>
            <li><a href="/auction/bid/<?= $item->id ?>"><?= $item->item_name ?></a></li>
        </ol>

        <h2><?= $item->item_name ?></h2>

        <p class="well"><?= $item->description ?></p>
    </div>
    <div class="row text-center">
        <?= $image_gallery ?>
    </div>
    <hr>
    <div class="row">
        <p class="well">
            <b>You will need to confirm a link in your email before the bid is valid.</b><br>
            <small>
                By clicking confirm bid, I understand that I am bound to payment should my bid be successful. I
                understand that all lots will go to live auction on 14th March at ECFS
            </small>
        </p>

        <form method="post" action="/auction/do_bid/<?= $item->id ?>">

            <div class="form-group form-inline">
                <div class="form-group">
                    <label class="sr-only" for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                </div>
                <label class="sr-only" for="exampleInputAmount">Amount (in pounds)</label>
                <div class="input-group">

                    <div class="input-group-addon">&pound;</div>
                    <input type="text" class="form-control" id="bid-amount" name="bid-amount" placeholder="Amount">
                </div>
            </div>
            <div class="form-group">
                <p><button class="btn btn-primary" type="submit">Confirm bid</button></p>
                    </div>
        </form>
    </div>
</section>