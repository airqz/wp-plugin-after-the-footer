<?php
/**
 * The simple ♥ Plugin.
 */

/**
 * Plugin Name: Say made with ♥
 * Description: Text after the footer (Made with ♥) - Plugins to WordPress!
 * Author:      airqz
 * Version:     0.0.1
 * License:     GPLv2 or later (license.txt)
 */

// Hook the 'wp_footer' action hook, add the function named 'mfp_Add_Text' to it
add_action("wp_footer", "mfp_Add_Text");
 
// Define 'mfp_Add_Text'
function mfp_Add_Text()
{
  echo "<h6 style='color: black;'>Made with ♥ </h6>";
}