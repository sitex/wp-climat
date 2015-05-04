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
				
				<div style="float:right;width:300px;text-align:right;margin-top:17px">
					<?php
						/**
						 * Get footer text
						 */
					
						$pp_footer_text = get_option('pp_footer_text');
					
						if(empty($pp_footer_text))
						{
							$pp_footer_text = 'Copyright © 2011 by Peerapong.';
						}
						
						echo stripslashes(html_entity_decode($pp_footer_text));
					?>
				</div>
			</div>
			</div>
			
			<!-- Yandex.Metrika counter -->
			<script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter29067895 = new Ya.Metrika({id:29067895, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/29067895" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
			<!-- /Yandex.Metrika counter -->
		</div>
		<!-- End footer -->
	
	<div><div>
	</div>
		

<?php
		/**
    	*	Setup Google Analyric Code
    	**/
    	include (TEMPLATEPATH . "/google-analytic.php");
?>

</div></div>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
