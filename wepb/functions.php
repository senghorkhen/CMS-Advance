<?php
function add_feature(){
    //  use for put image
    add_theme_support('post-thumbnails');
}

    add_action('after_setup_theme', 'add_feature');
?>