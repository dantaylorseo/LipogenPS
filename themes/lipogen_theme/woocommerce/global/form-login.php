<?php
/**
 * Login form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( is_user_logged_in() ) 
	return;
?>
<form method="post" class="login" <?php if ( $hidden ) echo 'style="display:none;"'; ?>>

	<?php do_action( 'woocommerce_login_form_start' ); ?>

	<?php if ( $message ) echo wpautop( wptexturize( $message ) ); ?>

	<div class="form-group form-row-first">
		<label for="username"><?php _e( 'Username or email', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input type="text" class="input-text form-control" name="username" id="username" />
	</div>
	<div class="form-group form-row-last">
		<label for="password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input class="input-text form-control" type="password" name="password" id="password" />
	</div>
	<div class="clear"></div>

	<?php do_action( 'woocommerce_login_form' ); ?>

	<div class="form-group">
		<?php wp_nonce_field( 'woocommerce-login' ); ?>
		<button type="submit" class="button btn btn-default" name="login"><?php _e( 'Continue', 'woocommerce' ); ?> <span class="fa fa-chevron-right"></span></button>
		<input type="hidden" name="redirect" value="<?php echo esc_url( $redirect ) ?>" />
		
	</div>
    <div class="form-group">
		<div class="checkbox">
          <label>
            <input name="rememberme" type="checkbox" id="rememberme" value="forever">
            <?php _e( 'Remember me', 'woocommerce' ); ?>
          </label>
        </div>
	</div>
	<p class="lost_password">
		<a href="<?php echo esc_url( wc_lostpassword_url() ); ?>"><?php _e( 'Lost your password?', 'woocommerce' ); ?></a>
	</p>

	<div class="clear"></div>

	<?php do_action( 'woocommerce_login_form_end' ); ?>

</form>