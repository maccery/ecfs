<section>
    <div class="spacer">
    </div>
    <div class="row">
        <?= $item_name ?>
        <br>
        <?= $description ?>
    </div>
    <hr>
    <div class="row">
        <form method="post" action="/auction/do_bid">
            <input type="hidden" name="items-id" value="<?= $id ?>">
            Email: <input type="text" name="email"><br>
            Bid amount (&pound;): <input type="text" name="bid-amount">

            <p><small>
                    By clicking confirm bid, I understand that I am bound to payment should my bid be successful. I understand that all lots will go to live auction on 14th March at ECFs
            </small></p>
            <p><b>You will need to confirm a link in your email before the bid is valid.</b></p>
            <input type="submit" value="Confirm bid">
        </form>
    </div>
</section>