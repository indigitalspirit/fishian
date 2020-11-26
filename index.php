<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fishian
 */

get_header();
?>

	<section class="section main-page__new-vehicles">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-label">
						<span>
						эксклюзивно
						</span>
					
					</div>
					<div class="section-title section-title_white">
					ЗАГОЛОВОК АКЦИИ
					</div>
				</div>
				<div class="col-12"></div>
			</div>
		</div>
	</section>

	<section class="section main-page__new-vehicles">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-label">
						<span>
						новинки
						</span>
					
					</div>
					<div class="section-title section-title_white">
					новые поступления
					</div>
				</div>
				<div class="col-12"></div>
			</div>
		</div>
	</section>

	<section class="section main-page__vehicles">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-label">
					<span>
					популярное
					</span>
					
					</div>
					<div class="section-title">
					СТАНКИ МАРКИ m
					</div>
				</div>
				<div class="col-12"></div>
			</div>
		</div>
	</section>

	<section class="section main-page__about">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-label">
					<span>
					FISHIAN
					</span>
					
					</div>
					<div class="section-title">
					О нас
					</div>
				</div>
				<div class="col-12"></div>
			</div>
		</div>
	</section>



	<section class="section main-page__blog">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-label">
					<span>
					блог
					</span>
					
					</div>
					<div class="section-title">
					Новости
					</div>
				</div>
				<div class="col-12"></div>
			</div>
		</div>
	</section>



	<section class="section main-page__dealers">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-label">
					<span>
					МАГАЗИНЫ
					</span>
					
					</div>
					<div class="section-title section-title_white">
					Наши представители
					</div>
				</div>
				<div class="col-12"></div>
			</div>
		</div>
	</section>

	<section class="section main-page__form">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-label">
						<span>
						ЗАЯВКА
						</span>
					
					</div>
					<div class="section-title">
					ОСТАЛИСЬ ВОПРОСЫ?
					</div>
				</div>
				<div class="col-12"></div>
			</div>
		</div>
	</section>

	<!-- <main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main> -->
	<!-- #main -->

<?php
//get_sidebar();
get_footer();
