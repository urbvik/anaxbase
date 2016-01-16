<?php
/**
 * Config-file for Urbax. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define Urbax paths.
 *
 */
define('URBAX_INSTALL_PATH', __DIR__ . "/..");
define('URBAX_THEME_PATH', URBAX_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(URBAX_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the Urbax variable.
 *
 */
$urbax = array();
 
 
/**
 * Site wide settings.
 *
 */
$urbax['lang']         = 'sv';
$urbax['title_append'] = ' | Urbax';


/**
 * Theme related settings.
 *
 */
$urbax['stylesheets'] = array('css/style.css');
$urbax['stylesheets'][]="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,300,600";
$urbax['favicon']    = 'favicon.ico';


/**
 * Settings for JavaScript.
 *
 */
$urbax['modernizr'] = 'js/modernizr.js';
$urbax['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$urbax['jquery'] = null; // To disable jQuery
$urbax['javascript_include'] = array();
//$urbax['javascript_include'] = array('js/main.js'); // To add extra javascript files
//$urbax['javascript_include'][] = 'js/main.js';
//$urbax['javascript_include'][] = 'js/other.js';
$urbax['javascript_include'][] = 'js/slideshow.js';

/**
 * Google analytics.
 *
 */
$urbax['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analyti
       
