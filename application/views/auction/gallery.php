
<ul>
    <? foreach($images as $image): ?>
        <li class="img" style="background-image: url('/assets/img/auction/<?= $image->image_url ?>');">
            <a href="/assets/img/auction/<?= $image->image_url ?>" data-lightbox="example-1"><div class="holder"></div></a>
        </li>
    <? endforeach ?>
</ul>
<script src="/assets/js/lightbox.min.js"></script>