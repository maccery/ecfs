<div class="text-center"><img src="/assets/img/blog/elephant2.png" width="150">
</div>
<h2>Why we're great</h2>
<div>
    <p><?php _e('Categories'); ?></p>
    <ul class="list list-unstyled">
        <?php wp_list_cats(); ?>
    </ul>
    <p><?php _e('Archives'); ?></p>
    <ul class="list-unstyled list">
        <?php wp_get_archives('type=monthly'); ?>
    </ul>
</div>
