			<div id="footer">
				<?php 
					$options = get_option('themezee_options');
					if ( isset($options['themeZee_general_footer']) and $options['themeZee_general_footer'] <> "" ) { 
						echo wp_kses_post($options['themeZee_general_footer']); } 
				?>
				<div class="credit_link"><a href="<?php echo THEMEZEE_INFO; ?>"><?php _e('WordPress BizzCard Theme', 'themezee_lang'); ?></a></div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	