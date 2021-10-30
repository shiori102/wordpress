<?php

if ( ! defined 'ABSPATH' ) ) exit;

// class className {
//     function __construct(){
//         add_action("enqueue_block_editor_assets", array($this, "adminAssets"));
//     }

//     function adminAssets() {
//         wp_enqueue_script('ournewblocktype', plugin_dir_url(__FILE__) . 'build/index.js', array('wp-blocks', 'wp-element'));
//     }
// }

//using a wp function and using php to dynamically change the content on the page without having to manually update on the wordpress site
class className {
    function __construct(){
        add_action("init", array($this, "adminAssets"));
    }

    function adminAssets() {
        wp_register_script('ournewblocktype', plugin_dir_url(__FILE__) . 'build/index.js', array('wp-blocks', 'wp-element'));
        register_block_type('ourplugin/pluginName', array(
            'editor_script'=> 'ournewblocktype',
            'render_callback' =>array($this, 'theHTML')
        ));
    }

    function theHTML($attributes){
        // return '<p>Today the sky is' . $attributes['skyColor'] . 'and the grass is ' . $attributes['grassColor'] . '.</p>';
        //ob stands for output buffer
        //this is another way of using php without having to concatenate
        ob_start(); ?>
        <h3>Today the sky is <?php echo esc_html($attributes['skyColor']) ?> and the grass is <?php esc_html($attributes['grassColor'])?>!!!</h3>
        <?php return ob_get_clean();
    }
}

$className = new className();