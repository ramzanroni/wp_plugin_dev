<?php
/*
Plugin Name: Post to QRcode
Plugin URL:
Description: QR Code form any Wordpress Post
Version: 1.0
Author: Roni
Author URI: ramzan.xyz
License: GPLv2 or later
Text Domain: posts-to-qrcode
Domain Path: /languages/
*/
// function wordcount_activation_hook(){

// }
// register_activation_hook(__FILE__, 'wordcount_activation_hook');

// function wordcount_deactivation_hook(){
     
// }
// register_deactivation_hook(__FILE__,'wordcount_deactivation_hook');

function qrcode_load_textdomain(){
    load_plugin_textdomain('posts-to-qrcode', false, dirname(__FILE__).'/languages');
}
add_action('plugin_loaded', 'qrcode_load_textdomain');
function pqrc_display_qr_code($content){
    $current_post_id=get_the_ID();
    $current_post_url=urlencode(get_the_permalink($current_post_id));
    $current_post_title=get_the_title($current_post_id);
    $image_src=sprintf('https://api.qrserver.com/v1/create-qr-code/?size=185x185&ecc=L&qzone=1&data=%s',$current_post_url);
    $content .=sprintf("<img src='%s'>",  $image_src);
    return $content;

}
add_filter('the_content', 'pqrc_display_qr_code');