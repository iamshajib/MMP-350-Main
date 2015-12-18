<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package final
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_enqueue_script("jquery"); ?>

<?php wp_head(); ?>

<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/yourScript.js">
</script>

</head>

<body <?php body_class(); ?>>
<div id="page-wrap" class="group">
	<a href="#" id="home-link">Home</a>

		<div id="header">
			<h1><a href="#">Save The Green</a></h1>
			<p>Est. 2015</p>
		</div>


