<?php if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
} ?>
<div class="wrap-license" data-package_slug="<?php echo esc_attr( $package_slug ); ?>" id="<?php echo esc_attr( 'wrap_license_' . $package_id ); ?>" data-nonce="<?php echo esc_attr( wp_create_nonce( 'license_nonce' ) ); ?>">
	<p class="license-message<?php echo ( ! $show_license ) ? esc_attr( ' hidden' ) : ''; ?>">
		<span class="current-license-error hidden"></span> <span class="current-license-label"><?php esc_html_e( 'Current license key:', 'wp-package-updater' ); ?></span> <span class="current-license"><?php echo esc_html( $license ); ?></span>
		<input type="button" value="<?php esc_attr_e( 'Deactivate', 'wp-package-updater' ); ?>" class="button deactivate-license" />
	</p>
	<div class="license-change <?php if(!empty( $license)) echo 'hidden'; ?> ">
		<label><?php esc_html_e( 'License key:', 'wp-package-updater' ); ?></label> <input class="regular-text license" type="text" id="<?php echo esc_attr( 'license_key_' . $package_id ); ?>" value="<?php echo ( $show_license ) ? esc_html( $license ) : ''; ?>" >
		<input type="button" value="<?php esc_attr_e( 'Activate', 'wp-package-updater' ); ?>" class="button-primary activate-license me-3" />
	</div>
</div>

