<?php
/*
Plugin Name: Ignore Code
Plugin URI: http://mattsaul.com/ignore-code
Description: Causes the visual editor to ignore code within the ignore_code shortcode
Version: 1.0
Author: Matt Saul
Author URI: http://mattsaul.com/
*/

add_shortcode('ignore_code', 'ignore_code_funciton');

// passthrough short code
function ignore_code_funciton($atts, $content = null) {
return $content;
}



// configures tinyMCE to not touch the code within this shortcode as well as <?php and insert_php ones
function ignore_code_funciton_tinymce($in)
{
	
$in['protect'] = "[
/\<\?php[\s\S]*?\?\>/g,
/\[insert_php\][\s\S]*?\[\/insert_php\]/g,
/\[ignore_code\][\s\S]*?\[\/ignore_code\]/g
]";


return $in;
}
add_action('tiny_mce_before_init', 'ignore_code_funciton_tinymce' );
 // tiny_mce_before_init can only be fired once which is why this may screw compatability with other plugins


?>