<?php
/*
Plugin Name: Word Count
Plugin URL:
Description: Word Count form any Wordpress Post
Version: 1.0
Author: Roni
Author URI: ramzan.xyz
License: GPLv2 or later
Text Domain: word-count
Domain Path: /languages/
*/
function wordcount_activation_hook(){

}
register_activation_hook(__FILE__, 'wordcount_activation_hook');

function wordcount_deactivation_hook(){
     
}
register_deactivation_hook(__FILE__,'wordcount_deactivation_hook');

function wordcount_load_textdomain(){
    load_plugin_textdomain('word-count', false, dirname(__FILE__).'/languages');
}
add_action('plugin_loaded', 'wordcount_load_textdomain');

function wordcount_count($content){
    $striped_content=strip_tags($content);
    $word_no=str_word_count($striped_content);
    $lavel=__('Total Number of Word: ', 'word-count');
    $content .=sprintf('<h1> %s: %s</h1>', $lavel, $word_no);
    return $content;
}
add_filter('the_content', 'wordcount_count');


function word_count_reading_time($content){
    $striped_content=strip_tags($content);
    $word_no=str_word_count($striped_content);
    $reading_min=floor($word_no/200);
    $reading_sec=floor($word_no%200/(200/60));
    $lavel=__("Total reading time: ",'word-count');
    $content .=sprintf('<h1> %s: %s min %s sec</h1>', $lavel, $reading_min, $reading_sec);
    return $content;
}
add_filter('the_content', 'word_count_reading_time');