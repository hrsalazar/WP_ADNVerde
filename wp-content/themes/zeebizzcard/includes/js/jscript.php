<?php 
	
add_action('wp_head', 'themezee_include_jscript');
function themezee_include_jscript() {

	// Select Slider Modus
	$options = get_option('themezee_options');
	if(isset($options['themeZee_show_slider']) and $options['themeZee_show_slider'] == 'true') {
		switch($options['themeZee_slider_mode']) {
			case 0:
				$return = "<script type=\"text/javascript\">
				//<![CDATA[
					// Horizontal Slider
					jQuery(document).ready(function($) {
						$('#slideshow')
							.cycle({
							fx: 'scrollHorz',
							speed: 1000,
							next: '#slide_next',
							prev: '#slide_prev',
							timeout: 13000
						});
					});
				//]]>
				</script>";

			break;
			case 1:
				$return = "<script type=\"text/javascript\">
				//<![CDATA[
					// Dropdown Slider
					jQuery(document).ready(function($) {
						$('#slideshow')
							.cycle({
							fx:     'scrollVert',
							speed: 1000,
							next: '#slide_next',
							prev: '#slide_prev',
							timeout: 12000
						});
					});
				//]]>
				</script>";

			break;
			case 2:
				$return = "<script type=\"text/javascript\">
				//<![CDATA[
					// Fade Slider
					jQuery(document).ready(function($) {
						$('#slideshow')
							.cycle({
							fx: 'fade',
							speed: 600,
							next: '#slide_next',
							prev: '#slide_prev',
							timeout: 12000
						});
					});
				//]]>
				</script>";

			break;
			default:
				$return = "<script type=\"text/javascript\">
				//<![CDATA[
					// Horizontal Slider
					jQuery(document).ready(function($) {
						$('#slideshow')
							.cycle({
							fx: 'scrollHorz',
							speed: 1000,
							next: '#slide_next',
							prev: '#slide_prev',
							timeout: 12000
						});
					});
				//]]>
				</script>";
			break;
		}
		
		/* Slide Menu
			Slide Effeckts
				show - show(500) 
				slide - slideDown(500)
				fade - show().css({opacity:0}).animate({opacity:1},500)
				diagonal - animate({width:'show',height:'show'},500)
				left - animate({width:'show'},500)
				slidefade - animate({height:'show',opacity:1})
		*/
		$return .= "<script type=\"text/javascript\">
				//<![CDATA[
					jQuery(document).ready(function($) {
						$('#nav ul').css({display: 'none'}); // Opera Fix
						$('#nav li').hover(function(){
							$(this).find('ul:first').css({visibility: 'visible',display: 'none'}).slideDown(350);
						},function(){
							$(this).find('ul:first').css({visibility: 'hidden'});
						});
					});
				//]]>
				</script>";
		
		echo $return;
	}
}
?>