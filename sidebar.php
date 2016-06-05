    <div id="sidebar">
    
    <div id="sub-navigation">
    <?php my_subnavigation(); ?>
    </div>
    <hr>
    <?php if (get_post_meta($post->ID, 'Quote', true)) : ?>
        <blockquote><?php echo get_post_meta($post->ID, 'Quote', true); ?></blockquote>
    <?php endif; ?>
    <hr>
    <div id="dynamic-sidebar">
    <?php dynamic_sidebar(); ?>
    </div>
    
    </div>
    