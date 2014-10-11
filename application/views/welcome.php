<script type="text/javascript">
    (function($) {
        $(function() { //on DOM ready
            $("#scroller").simplyScroll();
        });
    })(jQuery);
</script>
<style>
    .img {
        position: relative;
        float: left;
        width: 600px;
        height: 600px;
        background-position: 50% 50%;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<ul class="list list-unstyled list-inline" id="scroller">
    <? foreach($photos as $photo): ?>
    <li class="img" style="background-image:url('<?= $photo->source ?>');"></li>
    <? endforeach ?>
</ul>