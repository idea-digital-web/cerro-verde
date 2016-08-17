<div class="site-footer__item">
	<h2>
	Nosotros
	</h2>
	<picture>
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-footer.png" >
	</picture>
	<p><?php bloginfo('description'); ?></p>
	<span class="cards hidden">
		<i class="fa fa-cc-visa fa-3x"></i>
		<i class="fa fa-cc-mastercard fa-3x"></i>
	</span>
</div>
<div class="site-footer__item">
	<h2>Categorías</h2>
	<?php wp_nav_menu(
			array(
			'theme_location' => 'primary',
			'container' => 'nav',
			'link_before'	=> '<i class="fa fa-angle-right"></i> ',
			'container_class' => 'site-footer__item--nav',
			'menu_class' => 'site-footer__item--nav-categories',
			'depth' => 1
			)
		);
	?>
</div>
<div class="site-footer__item">
	<h2>
	Mensaje Directo
	</h2>
	<!-- IdeaDigital -->
	<?php if (function_exists("add_formcraft_form")) { add_formcraft_form("[fc id='5'][/fc]"); } ?>
	<!-- Localhost -->
	<?php if (function_exists("add_formcraft_form")) { add_formcraft_form("[fc id='1'][/fc]"); } ?>
</div>
<div class="site-footer__item">
	<h2>
	Contáctenos
	</h2>
	<div class="site-footer__item--contact">
		<i class="fa fa-phone"></i>
		<span>0212.418.34.00</span>
	</div>
	<div class="site-footer__item--contact">
		<i class="fa fa-mobile"></i>
		<span>0412.989.55.76</span>
	</div>
	<div class="site-footer__item--contact">
		<i class="fa fa-whatsapp" aria-hidden="true"></i>
		<span>0412.231.22.00</span>
	</div>
	<div class="site-footer__item--contact">
		<i class="fa fa-envelope">ventas@cerroverdestore.com</i>
		
	</div>
</div>