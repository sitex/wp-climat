<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 */
?>
	
		</div>
		
		<!-- Begin footer -->
		<div id="footer">
			<div class="border30 footer"></div>
		
			<?php
				$pp_footer_display_sidebar = get_option('pp_footer_display_sidebar');
			
				if(!empty($pp_footer_display_sidebar))
				{
					$pp_footer_style = get_option('pp_footer_style');
					$footer_class = '';
					
					switch($pp_footer_style)
					{
						case 1:
							$footer_class = 'one';
						break;
						case 2:
							$footer_class = 'two';
						break;
						case 3:
							$footer_class = 'three';
						break;
						case 4:
							$footer_class = 'four';
						break;
						default:
							$footer_class = 'four';
						break;
					}
					
			?>
			<ul class="sidebar_widget <?php echo $footer_class; ?>">
				<?php dynamic_sidebar('Footer Sidebar'); ?>
			</ul>
			
			<br class="clear"/><br/>
			<?php
				}
			?>
			
			<div id="copyright">
			<div style="width:960px;margin:auto">
				<div style="float:left;width:540px;margin-top:17px">
					<?php 	
					    wp_nav_menu( 
					        	array( 
					        		'menu_id'			=> 'footer_menu',
					        		'menu_class'		=> 'footer_nav',
					        		'theme_location' 	=> 'footer-menu',
					        	) 
					    ); 
					?>
				</div>
				
				<div class="copy" style="float:right;width:300px;text-align:right;margin-top:17px">
					<a href="/">euroclimat.kz</a>
				</div>
				<div style="clear:both;"></div>
				<?php include TEMPLATEPATH . '/info.php' ?>
			</div>
			</div>
			
		</div>
		<!-- End footer -->
	
	<div><div>
	</div>
		

</div></div>

<?php
/**
 *	Setup Counters
 **/
if (!is_admin_bar_showing()) {
	// no counters for admin
	include (TEMPLATEPATH . "/yandex-metrika.php");
	include (TEMPLATEPATH . "/google-analytic.php");
}
?>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
