<?php

/*
*Plugin Name: CMS2 Core Block Hooks
*/


function myguten_enqueue() {
    wp_enqueue_script(
        'myguten-script',
        plugins_url( 'myguten.js', __FILE__ ),
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
        filemtime( plugin_dir_path( __FILE__ ) . '/myguten.js' )
    );
}
add_action( 'enqueue_block_editor_assets', 'myguten_enqueue' );