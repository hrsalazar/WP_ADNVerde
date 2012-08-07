<!DOCTYPE html><!-- HTML 5 -->
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<title><?php bloginfo('name'); if(is_home() || is_front_page()) { echo ' - '; bloginfo('description'); } else { wp_title(); } ?></title>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">
	
	<div id="wrap">
		<div id="contentwrap">
		
			<div id="navi">
				<?php 
				// Get Main Navigation out of Theme Options
					wp_nav_menu(array('theme_location' => 'main_navi', 'container' => false, 'menu_id' => 'nav', 'echo' => true, 'fallback_cb' => 'themezee_default_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'depth' => 0));
				?>
			</div>
			<div class="clear"></div>
			
	
	