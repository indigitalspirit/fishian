<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fishian
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'fishian' ); ?></a> -->

	<header class="header">
		<div class="header__top-bar">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-9">
						
							<div class="header__top-bar-left">
								<div class="phone">
									<span class="icon">
										<img src="<?php echo get_template_directory_uri() . '/img/icons/phone.png';?>"/>
									</span>
									<span class="text">
										<a href="tel:+79215244781">+79215244781</a>
									</span>
								</div>
								<div class="email">
									<span class="icon">
										<img src="<?php echo get_template_directory_uri() . '/img/icons/mail.png';?>"/>
									</span>
									<span class="text">
										<a href="mailto:admin@fishian.ru">admin@fishian.ru</a>
									</span>						
								</div>
								<div class="shedule">
									<span class="icon">
										<img src="<?php echo get_template_directory_uri() . '/img/icons/shedule.png';?>"/>
									</span>
									<span class="text">
									Пн. - Сб. | 9:00 - 19:00
									</span>
								</div>
							</div>
					</div>
					<div class="col-12 col-md-3">
						<div class="header__top-bar-right">
							<div class="socials">
								<span class="icon">
									<img src="<?php echo get_template_directory_uri() . '/img/icons/insta.png';?>"/>
								</span>
								<span class="icon">
									<img src="<?php echo get_template_directory_uri() . '/img/icons/vk.png';?>"/>
								</span>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
		<div class="header__menu-bar">
			<div class="container">
				<div class="row">
					<div class="col-12">

						<nav class="navbar navbar-expand-lg">
						<?php
							// получаем ссылку на логотип
							$custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); 
							// выводим
							//echo $custom_logo__url[0]; 
						?>
							<a class="navbar-brand" href="#">
								<img src="<?php echo $custom_logo__url[0];?>" alt="Логотип">
							</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>

							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
										'menu_class'      => 'navbar-nav mr-auto', 
										// 'menu_id'         => '',
										// 'echo'            => true,
										// 'fallback_cb'     => 'wp_page_menu',
										// 'before'          => '',
										// 'after'           => '',
										// 'link_before'     => '',
										// 'link_after'      => '',
										'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									)
								);
								?>
								<!-- <ul class="navbar-nav mr-auto">
									<li class="nav-item active">
										<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Link</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Disabled</a>
									</li>
									
									<li class="nav-item">
										<a class="nav-link" href="#">Disabled</a>
									</li>
								</ul> -->
								<!-- <form class="form-inline my-2 my-lg-0">
									<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
									<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
								</form> -->

								<div class="navbar-icons">
									<div class="icon icon-circled">
										<img src="<?php echo get_template_directory_uri() . '/img/icons/search.png';?>" alt="Поиск">
									</div>
									<div class="icon icon-circled">
										<img src="<?php echo get_template_directory_uri() . '/img/icons/cart.png';?>" alt="Корзина">
									</div>
								</div>

							</div>
						</nav>
						
					</div>
				</div>
			</div>
		</div>	
		<div class="header__title-bar">
			<h1 class="main-title">
						<?php the_title(); ?>
			</h1>
			<div class="breadcrumbs">
				<a href="">Главная</a> / <a href="">Доставка и оплата</a>
			</div>
		</div>
	</header>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$fishian_description = get_bloginfo( 'description', 'display' );
			if ( $fishian_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $fishian_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'fishian' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

