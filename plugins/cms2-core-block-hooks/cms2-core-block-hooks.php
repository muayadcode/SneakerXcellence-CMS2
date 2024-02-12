<?php

/*
*Plugin Name: CMS2 Core Block Hooks
*/


function cms2_enqueue_block_editor_assets() {
    wp_enqueue_script(
    'cms2-core-block-hooks',
        plugins_url( 'plugin.js', __FILE__ ),
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
        filemtime( plugin_dir_path( __FILE__ ) . '/plugin.js' )
    );
}
add_action( 'enqueue_block_editor_assets', 'cms2_enqueue_block_editor_assets' );