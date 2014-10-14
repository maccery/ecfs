<ul class="list list-inline list-unstyled">
    <? foreach($sources as $source): ?>
        <li>
            <a  href="<?= $source ?>" data-lightbox="example-1">
                <img style="border: 1px solid grey;" width="150" class="img-responsive" src="<?= $source ?>" alt="image-1" />
            </a>
        </li>
    <? endforeach ?>
</ul>

<script src="/assets/js/lightbox.min.js"></script>