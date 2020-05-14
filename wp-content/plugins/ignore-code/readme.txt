=== Ignore Code ===
Contributors: mattsaul
Donate link: http://mattsaul.com/donate
Tags: tinyMCE, visual editor, source code, code, validation, php, JavaScript
Requires at least: 3.5.1
Tested up to: 4.7.2
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Causes the visual editor to ignore code within the ignore_code shortcode.  Great at keeping advanced HTML, 
JavaScript, or PHP code intact.


== Description ==

Wherever you have code you don’t want the visual editor to touch use the **[ignore_code]** shortcode.
This version also supports the [insert_php] and <?php tags, though for the PHP tag you will have to
start the first line with  <?php // >   With latter two codes you will have to separately install
plugins to get the dynamic PHP insertion functionality.

== Installation ==

Installation is easy.

1. Upload the plugin files to the `/wp-content/plugins/ignore-code` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. There are no settings at this time but you can modify the source code to make it support more shortcodes.


== Frequently Asked Questions ==

= Does this work with other plugins that call tiny_mce_before_init =

I tested it along side TinyMCE Advanced and they both seemed to work.  However calling this in functions.php
section of your theme may override the plugin's functions.

= It's not working on long pieces of code =

This is the first version so it may not work with extremely large sections of code.

= My code is still coming out wrong after I update the post =

Ignore Code only stops code from being modified on the client side in the visual editor.  It does not do anything
on the server side.  For that you need to do something like remove_filter('the_content', 'wpautop');

= My code is not showing up in the visual editor anymore =

That's the down side of this plugin, it causes the visual editor to ignore the code entirely so it won't be 
represented as anything on there.

= My CSS is still getting mangled =

You can use this plugin in conjunction with Preserved HTML Editor Markup Plus to work with even more code.  However
read that plugin's documentation closely as installing it can modify the way your website looks.

= It killed my website! =

Because this is the first version, it is highly recommended you have FTP and database access to your website in case
you need to uninstall this plugin manually if it crashed your website.  This precaution is a good one to take for
every plugin.


== Screenshots ==

1. This is some code between the ignore_code shortcode

== Changelog ==

= 1.0 =
* Initial version with readme.

== Upgrade Notice ==

= 1.0 =
No upgrades at this time



