<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package under2
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head >
		<title>CKEK</title>

		<meta charset="utf-8">
  	<meta name="viewport" content="initial-scale=1.0">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" href="https://ckek.ru/wp-content/themes/under2/style.css">
		
		<link rel="stylesheet" href="http://ckek.ru/wp-content/themes/under2/style.css">
		
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/css/fontello.css">

		<link href="https://fonts.googleapis.com/css?family=Roboto:100&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">

		
	  
	  






</head >
<?php wp_head(); ?>

<body  <?php body_class(); ?> >