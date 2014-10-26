<ul class="list list-inline list-unstyled">
    <? foreach($sources as $source): ?>
        <li class="img" style="background-image: url('<?= $source ?>');">
            <a href="<?= $source ?>" data-lightbox="example-1"><div class="holder"></div></a>
        </li>
    <? endforeach ?>
</ul>
<script src="/assets/js/lightbox.min.js"></script>