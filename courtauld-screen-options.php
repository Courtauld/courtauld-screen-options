<?php

/*
   Plugin Name: Default Screen Options
   Plugin URI: https://github.com/Courtauld/courtauld-screen-options
   Description: When any new user is registered this plugin runs and sets their default viewing options. This way we don't have to worry about Screen Options and dragging and dropping widgets around.
   Version: 1.0
   Author: Jacob Charles Wilson
   Author URI: https://jclwilson.github.io
   License: GPL2
   */

function set_user_metaboxes($user_id) {

    // order
    $meta_key = 'meta-box-order_post';
    $meta_value = array(
        'side' => 'submitdiv,formatdiv,categorydiv',
        'normal' => 'postexcerpt,postimagediv,trackbacksdiv,tagsdiv-post_tag,postcustom,commentstatusdiv,commentsdiv,slugdiv,authordiv',
        'advanced' => 'revisionsdiv',
    );
    update_user_meta( $user_id, $meta_key, $meta_value );

    // hiddens
    $meta_key = 'metaboxhidden_post';
    $meta_value = array('trackbacksdiv','commentstatusdiv','commentsdiv','slugdiv','authordiv');
    update_user_meta( $user_id, $meta_key, $meta_value );

}
add_action('user_register', 'set_user_metaboxes');

?>
