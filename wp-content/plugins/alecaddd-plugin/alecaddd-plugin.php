<?php

/**
 * @package AlecadddPlugin
 */
/*
Plugin Name: Alecaddd Plugin
Plugin URI: http://ramzan.xyz
Description: This is my first attempt an writting a custom Plugin for this amazing tutorial serise.
Version: 1.0.0
Author: Alecaddd Plugin Ramzan
Author URI: http://ramzan.xyz
License: GPLv2 or later
Text Domain: alecaddd-plugin
*/

// 1st Method 
// if ( ! defined('ABSPATH')) {
//     die;
// }


// 2nd Method 
defined('ABSPATH') or die('Hey, You cannot access this file');


// 3rd method 
// if (! function_exists('add_action')) {
//     echo 'Hey, You cannot access this file';
//     exit;
// }

class AlecadddPlugin
{
    function alecadddPlugin_activated(){
       // generated a CPT
       // flush rewrite rules
    }
    function alecadddPlugin_deacticated(){
       // flush rewrite rules
    }
    function alecadddPlugin_uninstall(){
            //delete CPT
            // delete all the plugin data form DB
    }
}
if(class_exists('AlecadddPlugin')){
    $alecadddPlugin=new AlecadddPlugin();
}

// activation 
register_activation_hook(__FILE__, array($alecadddPlugin, 'alecadddPlugin_activated'));
// deactivation
register_deactivation_hook(__FILE__, array($alecadddPlugin, 'alecadddPlugin_deacticated'));