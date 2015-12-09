<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=10" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


	<?php
	if ( !is_front_page() && !is_home() ) {
	echo "<script src=\"https://connectormwi.dev.laterpaytest.net/dev/app-en-us.js\" async charset=\"utf-8\"></script>";
	}
	?>


	<meta property="laterpay:connector:appearance:purchase_overlay:show_payment_methods" content="false">
	<meta property="laterpay:connector:appearance:purchase_overlay:logo_url" content="http://46.101.155.217/wp-content/themes/vantage/images/logo.png">
	<meta property="laterpay:connector:appearance:purchase_overlay:primary_color" content="#0a526f">
	<meta property="laterpay:connector:appearance:purchase_overlay:show_single_item_purchase_list" content="false">


	<meta property="laterpay:connector:translations:advantage:heading" content="Tobi's site is financed by ads.">
	<meta property="laterpay:connector:translations:advantage:allow_ads_heading" content="Allow ads">
	<meta property="laterpay:connector:translations:advantage:no_ads_heading" content="Use ad-free">
	<meta property="laterpay:connector:appearance:advantage_overlay:logo_url" content="http://46.101.155.217/wp-content/themes/vantage/images/logo.png">


	<?php
	if ( has_term( 'paid_picture', 'post_tag', $post ) ) {
	echo "<meta property=\"laterpay:connector:translations:purchase_button:label_with_price\" content=\"Watch Now for %s and Pay Later\">";
	echo "<meta property=\"laterpay:connector:translations:purchase_overlay:heading\" content=\"Watch Now\">";
	}

	if ( has_term( 'paid_article', 'post_tag', $post ) ) {
	echo "<meta property=\"laterpay:connector:translations:purchase_button:label_with_price\" content=\"Read Now for %s and Pay Later\">";
	echo "<meta property=\"laterpay:connector:translations:purchase_overlay:heading\" content=\"Continue Reading\">";
	}
	?>


	<meta property="laterpay:connector:translations:purchase_overlay:notes_text" content="You register and pay once your LaterPay invoice reached 5€">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action('vantage_before_page_wrapper') ?>

<div id="page-wrapper">

	<?php do_action( 'vantage_before_masthead' ); ?>

	<?php get_template_part( 'parts/masthead', apply_filters( 'vantage_masthead_type', siteorigin_setting( 'layout_masthead' ) ) ); ?>

	<?php do_action( 'vantage_after_masthead' ); ?>

	<?php vantage_render_slider() ?>

	<?php do_action( 'vantage_before_main_container' ); ?>

	<div id="main" class="site-main">
		<div class="full-container">
			<?php do_action( 'vantage_main_top' ); ?>
