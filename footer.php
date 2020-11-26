<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fishian
 */

?>

	<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<?php 
					// $about_shop_description = get_option( 'raduga10_footer_info_field');

					// $shop_phone = get_option( 'raduga10_phone_field');

					// $shop_shedule = get_option( 'raduga10_shedule_field');

					// $shop_address = get_option( 'raduga10_address_field');

					// $shop_mail = get_option( 'raduga10_mail_field');

					// $shop_whatsapp = get_option( 'raduga10_whatsapp_field');
					// $shop_vk = get_option( 'raduga10_vk_field');

				?>
						
				
				<?php if ( is_active_sidebar('footer-logo') ) : ?>
				
					<!--=======  widget-logo block  =======-->
					
						<?php dynamic_sidebar('footer-logo'); ?>																
					<!--=======  End of widget-logo block  =======-->
						
				<?php endif; ?>

				
			
			</div>
			<div class="col-md-6">
				<div class="widget-blocks_group">

					<?php if ( is_active_sidebar('footer-1') ) : ?>
						<!--=======  widget block  =======-->
						
							<?php dynamic_sidebar('footer-1'); ?>																
						<!--=======  End of widget block  =======-->
					<?php endif; ?>

					<?php if ( is_active_sidebar('footer-2') ) : ?>
						<!--=======  widget block  =======-->
						
							<?php dynamic_sidebar('footer-2'); ?>																
						<!--=======  End of widget block  =======-->
					<?php endif; ?>

					<?php if ( is_active_sidebar('footer-3') ) : ?>
						<!--=======  widget block  =======-->
						
							<?php dynamic_sidebar('footer-3'); ?>																
						<!--=======  End of widget block  =======-->
					<?php endif; ?>

				</div>

				

			</div>
			<div class="col-md-3">
				<?php //if ( is_active_sidebar('footer-contacts') ) : ?>
					<!--=======  widget block  =======-->
				<div class="widget-block">
				<?php 
					$about_shop_description = get_option( 'fishian_footer_info_field');

					$shop_phone = get_option( 'fishian_phone_field');

					$shop_shedule = get_option( 'fishian_shedule_field');

					$shop_address = get_option( 'fishian_address_field');

					$shop_mail = get_option( 'fishian_mail_field');

					$shop_whatsapp = get_option( 'fishian_whatsapp_field');
					$shop_vk = get_option( 'fishian_vk_field');

				?>
				<ul class="footer-contacts">
						<li>
							<!-- <p> -->
								<!-- <i class="icon ion-md-alarm"></i>  -->
								<i class="fa fa-phone"></i> 
								<!-- <span class="support-no"> -->
									<a href="tel:<?php echo $shop_phone;?>"><?php echo $shop_phone;?></a>
								<!-- </span> -->
							</p>
						</li>
						<li>
							<!-- <p> -->
								<i class="icon ion-md-alarm"></i> 
								<!-- <i class="fa fa-phone"></i>  -->
								<span class="support-no">
								<?php echo $shop_shedule;?>
								</span>
							</p>
						</li>
						<li>
							<!-- <p> -->
								<!-- <i class="icon ion-md-alarm"></i>  -->
								<i class="fa fa-map-marker" aria-hidden="true"></i>
								<!-- <span class="support-no"> -->
								<a href="/contacts"><?php echo $shop_address;?></a>
								<!-- </span> -->
							</p>
						</li>
						<li>
							<!-- <p> -->
								<!-- <i class="icon ion-md-alarm"></i>  -->
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<!-- <span class="support-no"> -->
									<a href="mailto:<?php echo $shop_mail;?>"><?php echo $shop_mail;?></a>
								<!-- </span> -->
							</p>
						</li>
					</ul>
					
				</div> 
					
					
						<?php //dynamic_sidebar('footer-3'); ?>																
					<!--=======  End of widget block  =======-->
				<?php //endif; ?>
			</div>
		</div>
		
	</div>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'fishian' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'fishian' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'fishian' ), 'fishian', '<a href="https://anastasia-pavlova.com/">Anastasia Pavlova</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
