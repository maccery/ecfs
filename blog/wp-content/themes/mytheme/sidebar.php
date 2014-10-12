<div class="text-center">
    <p><?php _e('Categories'); ?></p>
    <ul class="list list-unstyled">
        <?php wp_list_cats(); ?>
    </ul>
    <p><?php _e('Archives'); ?></p>
    <ul class="list-unstyled list">
        <?php wp_get_archives('type=monthly'); ?>
    </ul>
</div>
