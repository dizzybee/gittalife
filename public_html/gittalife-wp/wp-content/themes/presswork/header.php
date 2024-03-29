<?php
/**
 * The template for displaying the header.
 *
 * Displays all of the <head> section and everything up till <ul id="main-wrapper">
 * Includes all the action blocks for the header.
 *
 * @since PressWork 1.0
 */
 ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!--[if IE]><![endif]-->
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); if(is_front_page()) { echo ' | '; bloginfo('description'); } if ( $paged > 1 ) { echo (' | Page '); echo $paged; } ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php pw_header_css(); ?>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php $favicon = pw_theme_option('favicon'); if(!empty($favicon)) echo '<link rel="shortcut icon" type="image/x-icon" href="'.$favicon.'" />'."\n"; ?>
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40167778-1', 'massagetherapyperth.com.au');
  ga('send', 'pageview');

</script>
</head>

<!--[if lt IE 7 ]> <body <?php body_class("ie6"); ?>> <![endif]-->
<!--[if IE 7 ]>    <body <?php body_class("ie7"); ?>> <![endif]-->
<!--[if IE 8 ]>    <body <?php body_class("ie8"); ?>> <![endif]-->
<!--[if IE 9 ]>    <body <?php body_class("ie9"); ?>> <![endif<]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body <?php body_class(); ?>> <!--<![endif]-->

<?php pw_actionCall('pw_body_top'); ?>
<div id="body-wrapper" class="clearfix">
    <header id="header-main" role="banner"> <!-- begin header -->
		<?php pw_actionBlock('pw_header'); ?>
    </header> <!-- end header -->
    <ul id="main-wrapper">
	