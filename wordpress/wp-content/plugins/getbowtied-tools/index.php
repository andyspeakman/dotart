<?php
/*
Plugin Name: GetBowtied Tools
Plugin URI: http://www.getbowtied.com/
Description: A simple helper that enables you to install the plugins coming with your GetBowtied theme, import demo content and set up automatic updates.
Author: GetBowtied
Author URI: http://www.getbowtied.com
Version: 1.0.1
Text Domain: getbowtied
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

if( ! class_exists( 'Getbowtied_Admin_Pages' ) ) {
	$theme = wp_get_theme();
	$theme_slug = $theme->template;
	if ($theme->parent()):
		$theme_name = $theme->parent()->get('Name');
	else:
		$theme_name = $theme->get('Name');
	endif;

	if ( ('Merchandiser' !== $theme_name) && ('Mr. Tailor' !== $theme_name) && ('Shopkeeper' !== $theme_name) && ('The Retailer' !== $theme_name) ) {
		return;
	}


	register_activation_hook(__FILE__, 'getbowtied_plugin_activate');
	add_action('admin_init', 'getbowtied_plugin_redirect');

	function getbowtied_plugin_activate() 
	{
		add_option('getbowtied_plugin_do_activation_redirect', true);
	}

	function getbowtied_plugin_redirect() 
	{
		if (get_option('getbowtied_plugin_do_activation_redirect', false)) 
		{
		   delete_option('getbowtied_plugin_do_activation_redirect');
		   if(!isset($_GET['activate-multi']))
		   {
		       wp_redirect(admin_url("admin.php?page=getbowtied_theme"));
		   }
		}
	}


	define( 'GETBOWTIED_TOOLS_PATH', plugin_dir_path( __FILE__ ) );
	define( 'GETBOWTIED_TOOLS_URL', trailingslashit( plugins_url() ) . trailingslashit( 'getbowtied-tools' ));
	if (!defined("THEME_NAME")):
	define( 'THEME_NAME', $theme_name );
	endif;
	if (!defined("THEME_SLUG")):
	define( 'THEME_SLUG', $theme_slug );
	endif;

	require_once GETBOWTIED_TOOLS_PATH.'pages/global/settings.php';
	require_once GETBOWTIED_TOOLS_PATH.'functions/importer.php';
	require_once GETBOWTIED_TOOLS_PATH.'functions/getbowtied-tgm/class-tgm-plugin-activation.php';
	require_once GETBOWTIED_TOOLS_PATH.'functions/getbowtied-tgm/plugins.php';
	if( ! class_exists( 'Getbowtied_Admin_Pages' ) ) {
		
		class Getbowtied_Admin_Pages {		
			
			protected $settings;

			// =============================================================================
			// Construct
			// =============================================================================

			function __construct() {	

				global $getbowtied_settings;

				$this->settings = $getbowtied_settings;
				add_action( 'register_sidebar', 		array( $this, 'getbowtied_theme_admin_init' ) );
				add_action( 'admin_menu', 				array( $this, 'getbowtied_theme_admin_menu' ) );
				add_action( 'admin_menu', 				array( $this, 'getbowtied_theme_admin_submenu_registration' ) );
				add_action( 'admin_menu', 				array( $this, 'getbowtied_theme_admin_submenu_plugins' ) );
				add_action( 'admin_menu',				array( $this, 'getbowtied_theme_admin_submenu_demos' ) );
				add_action( 'admin_menu', 				array( $this, 'getbowtied_edit_admin_menus' ) );
				add_action( 'admin_init', 				array( $this, 'getbowtied_theme_update') );
				add_action( 'after_switch_theme', 		array( $this, 'getbowtied_activation_redirect' ) );
				add_action( 'admin_notices', 			array( $this, 'getbowtied_admin_notices' ) );
				add_action( 'admin_notices', 			array( $this, 'update_notice' ) );
				add_action( 'admin_enqueue_scripts', 	array( $this, 'getbowtied_theme_admin_pages' ) );

				if (THEME_SLUG == 'theretailer')
				{
					if (get_option("getbowtied_the_retailer_license_expired"))
					{
						update_option("getbowtied_".THEME_SLUG."_license_expired", get_option("getbowtied_the_retailer_license_expired"));
						update_option("getbowtied_the_retailer_license_expired", '');
					}

					if (get_option("getbowtied_the_retailer_license"))
					{
						update_option("getbowtied_".THEME_SLUG."_license",  get_option("getbowtied_the_retailer_license"));
						update_option("getbowtied_the_retailer_license", '');
					}
				}

				if (THEME_SLUG == 'mrtailor')
				{
					if (get_option("getbowtied_mr_tailor_license_expired"))
					{
						update_option("getbowtied_".THEME_SLUG."_license_expired", get_option("getbowtied_mr_tailor_license_expired"));
						update_option("getbowtied_mr_tailor_license_expired", '');
					}

					if (get_option("getbowtied_mr_tailor_license"))
					{
						update_option("getbowtied_".THEME_SLUG."_license",  get_option("getbowtied_mr_tailor_license"));
						update_option("getbowtied_mr_tailor_license", '');
					}
				}

				if (!get_option("getbowtied_".THEME_SLUG."_license_expired"))
				{
					update_option("getbowtied_".THEME_SLUG."_license_expired", 0);
				}
			}

			function settings()
			{
				return $this->settings;
			}
		
			// =============================================================================
			// Menus
			// =============================================================================

			function getbowtied_theme_admin_menu() {			
				$getbowtied_menu_welcome = add_menu_page(
					getbowtied_theme_name(),
					getbowtied_theme_name(),
					'administrator',
					'getbowtied_theme',
					array( $this, 'getbowtied_theme_welcome_page' ),
					'',
					3
				);
			}

			function getbowtied_theme_admin_submenu_registration() {
				$getbowtied_submenu_welcome = add_submenu_page(
					'getbowtied_theme',
					__( 'Product Activation', 'getbowtied' ),
					__( 'Product Activation', 'getbowtied' ),
					'administrator',
					'getbowtied_theme_registration',
					array( $this, 'getbowtied_theme_registration_page' )
				);
			}

			function getbowtied_theme_admin_submenu_plugins() {	
				$getbowtied_submenu_plugins = add_submenu_page(
					'getbowtied_theme',
					__( 'Plugins', 'getbowtied' ),
					__( 'Plugins', 'getbowtied' ),
					'administrator',
					'getbowtied_theme_plugins',
					array( $this, 'getbowtied_theme_plugins_page' )
				);
			}

			function getbowtied_theme_admin_submenu_demos() {				
				$getbowtied_submenu_demos = add_submenu_page(
					'getbowtied_theme',
					__( 'Demo', 'getbowtied' ),
					__( 'Demo', 'getbowtied' ),
					'administrator',
					'getbowtied_theme_demos',
					array( $this, 'getbowtied_theme_demos_page' )
				);
			}

			function getbowtied_theme_admin_submenu_help_center() {					
				$getbowtied_submenu_help_center = add_submenu_page(
					'getbowtied_theme',
					__( 'Help Center', 'getbowtied' ),
					__( 'Help Center', 'getbowtied' ),
					'administrator',
					'getbowtied_theme_help_center',
					array( $this, 'getbowtied_theme_help_center_page' )
				);
			}

			function getbowtied_admin_menu() {						
				$getbowtied_welcome = add_submenu_page(
					'getbowtied_theme',
					__( 'Get Bowtied', 'getbowtied' ),
					__( 'Get Bowtied', 'getbowtied' ),
					'administrator',
					'getbowtied',
					array( $this, 'getbowtied_welcome_page' )
				);
			}


			// =============================================================================
			// Pages
			// =============================================================================

			function getbowtied_theme_welcome_page() 
			{
				require_once GETBOWTIED_TOOLS_PATH.'pages/welcome_theme.php';
			}

			function getbowtied_theme_registration_page()
			{
				require_once GETBOWTIED_TOOLS_PATH.'pages/registration.php';
			}

			function getbowtied_theme_plugins_page()
			{
				require_once GETBOWTIED_TOOLS_PATH.'pages/plugins.php';
			}

			function getbowtied_theme_demos_page()
			{
				require_once GETBOWTIED_TOOLS_PATH.'pages/demos.php';
			}

			function getbowtied_theme_help_center_page()
			{
				require_once GETBOWTIED_TOOLS_PATH.'pages/help-center.php';
			}

			function getbowtied_welcome_page() 
			{
				require_once GETBOWTIED_TOOLS_PATH.'pages/welcome.php';
			}


			// =============================================================================
			// Styles / Scripts
			// =============================================================================

			function getbowtied_theme_admin_pages() {
				wp_enqueue_style(	"getbowtied_theme_admin_css",				GETBOWTIED_TOOLS_URL. "css/styles.css", 	false, null, "all" );
				wp_enqueue_script(	"getbowtied_theme_demos_js", 				GETBOWTIED_TOOLS_URL. "js/scripts.js", 	array(), false, null );			
			}

			// =============================================================================
			// Plug-ins
			// =============================================================================

			function getbowtied_theme_plugin_links( $item ) 
			{
				if ( ! function_exists( 'get_plugins' ) ) {
					require_once ABSPATH . 'wp-admin/includes/plugin.php';
				}
				$installed_plugins = get_plugins();

				$item['sanitized_plugin'] = $item['name'];

				// We have a repo plugin
				if ( ! $item['version'] ) {
					$item['version'] = TGM_Plugin_Activation::$instance->does_plugin_have_update( $item['slug'] );
				}

				/** We need to display the 'Install' hover link */
				if ( ! isset( $installed_plugins[$item['file_path']] ) ) {
					$actions = array(
						'install' => sprintf(
							'<a href="%1$s" class="button button-primary" title="Install %2$s">Install</a>',
							esc_url( wp_nonce_url(
								add_query_arg(
									array(
										'page'          => urlencode( TGM_Plugin_Activation::$instance->menu ),
										'plugin'        => urlencode( $item['slug'] ),
										'plugin_name'   => urlencode( $item['sanitized_plugin'] ),
										'plugin_source' => urlencode( $item['source'] ),
										'tgmpa-install' => 'install-plugin',
										'return_url'    => network_admin_url( 'admin.php?page=getbowtied_theme_plugins' )
									),
									TGM_Plugin_Activation::$instance->get_tgmpa_url()
								),
								'tgmpa-install',
								'tgmpa-nonce'
							) ),
							$item['sanitized_plugin']
						),
					);
				}
				/** We need to display the 'Activate' hover link */
				elseif ( is_plugin_inactive( $item['file_path'] ) ) {
					$actions = array(
						'activate' => sprintf(
							'<a href="%1$s" class="button button-primary" title="Activate %2$s">Activate</a>',
							esc_url( add_query_arg(
								array(
									'plugin'               => urlencode( $item['slug'] ),
									'plugin_name'          => urlencode( $item['sanitized_plugin'] ),
									'plugin_source'        => urlencode( $item['source'] ),
									'getbowtied-activate'       => 'activate-plugin',
									'getbowtied-activate-nonce' => wp_create_nonce( 'getbowtied-activate' ),
								),
								admin_url( 'admin.php?page=getbowtied_theme_plugins' )
							) ),
							$item['sanitized_plugin']
						),
					);
				}
				/** We need to display the 'Update' hover link */
				elseif ( version_compare( $installed_plugins[$item['file_path']]['Version'], $item['version'], '<' ) ) {
					$actions = array(
						'update' => sprintf(
							'<a href="%1$s" class="button button-primary" title="Install %2$s">Update</a>',
							wp_nonce_url(
								add_query_arg(
									array(
										'page'          => urlencode( TGM_Plugin_Activation::$instance->menu ),
										'plugin'        => urlencode( $item['slug'] ),

										'tgmpa-update'  => 'update-plugin',
										'plugin_source' => urlencode( $item['source'] ),
										'version'       => urlencode( $item['version'] ),
										'return_url'    => network_admin_url( 'admin.php?page=getbowtied_theme_plugins' )
									),
									TGM_Plugin_Activation::$instance->get_tgmpa_url()
								),
								'tgmpa-update',
								'tgmpa-nonce'
							),
							$item['sanitized_plugin']
						),
					);
				} elseif ( is_plugin_active( $item['file_path'] ) ) {
					$actions = array(
						'deactivate' => sprintf(
							'<a href="%1$s" class="button button-primary" title="Deactivate %2$s">Deactivate</a>',
							esc_url( add_query_arg(
								array(
									'plugin'                 => urlencode( $item['slug'] ),
									'plugin_name'            => urlencode( $item['sanitized_plugin'] ),
									'plugin_source'          => urlencode( $item['source'] ),
									'getbowtied-deactivate'       => 'deactivate-plugin',
									'getbowtied-deactivate-nonce' => wp_create_nonce( 'getbowtied-deactivate' ),
								),
								admin_url( 'admin.php?page=getbowtied_theme_plugins' )
							) ),
							$item['sanitized_plugin']
						),
					);
				}

				return $actions;
			}

			// =============================================================================
			// Theme Updater
			// =============================================================================

			function getbowtied_theme_update() 
			{
				global $wp_filesystem;

					if (get_option("getbowtied_".THEME_SLUG."_license") && (get_option("getbowtied_".THEME_SLUG."_license_expired") == 0))
					{
						$license_key = get_option("getbowtied_".THEME_SLUG."_license");
					}
					else
					{
						$license_key = '';
					}
					
					require_once( GETBOWTIED_TOOLS_PATH . 'functions/_class-updater.php' );
					
					$theme_update = new GetBowtiedUpdater( $license_key );
			
					// if (get_option("getbowtied_".THEME_SLUG."_license_expired") == 1 )
					// {
					// 	add_action( 'admin_notices', array(&$this, 'expired_notice') );
					// }
			}

			function getbowtied_admin_notices() {

				$remote_ver = get_option("getbowtied_".THEME_SLUG."_remote_ver") ? get_option("getbowtied_".THEME_SLUG."_remote_ver") : $this->getbowtied_theme_version();
				$local_ver = $this->getbowtied_theme_version();

				if(!version_compare($local_ver, $remote_ver, '<'))
			    {
					if ( (!get_option("getbowtied_".THEME_SLUG."_license") && ( get_option("getbowtied_".THEME_SLUG."_license_expired") == 0 ) )
						|| (get_option("getbowtied_".THEME_SLUG."_license") && ( get_option("getbowtied_".THEME_SLUG."_license_expired") == 1 )) ){
						
						if( function_exists('wp_get_theme') ) {
							$theme_name = '<strong>'. wp_get_theme() .'</strong>';
						}

						if ( ! isset($_COOKIE["notice_product_key"]) || $_COOKIE["notice_product_key"] != "1" ) {
							echo '<div class="notice is-dismissible error getbowtied_admin_notices notice_product_key">
							<p>' . $theme_name . ' - Enter your product key to start receiving automatic updates and support. Go to <a href="' . admin_url( 'admin.php?page=getbowtied_theme_registration' ) . '">Product Activation</a>.</p>
							</div>';
						}

					}
				}
			}

			function validate_license($license_key)
			{
				if (empty($license_key))
				{
					return FALSE;
				}
				else
				{
					// $api_url = "http://local.dev/dashboard/api/api_listener.php";
					$api_url = "http://my.getbowtied.com/api/api_listener.php";
					$theme = wp_get_theme();
					// die(THEME_NAME);

					$args = array(
									'method' => 'POST',
									'timeout' => 30,
									'body' => array( 'l' => $license_key,  'd' => get_site_url(), 't' => THEME_NAME )
							);
					
					$response = wp_remote_post( $api_url, $args );

					if ( is_wp_error( $response ) ) {
					    $error_message = $response->get_error_message();
					    $request_msg = 'Something went wrong:'.$error_message.'. Please try again!';
					} else {
					  	$rsp = json_decode($response['body']);
					  	$request_msg = '';
					  	// print_r($rsp);
					  	// die();
					  	
					  	switch ($rsp->status)
					  	{
					  		case '0':
					  		$request_msg = 'Something went wrong. Please try again!';
					  		break;

					  		case '1':
					  		update_option("getbowtied_".THEME_SLUG."_license", $license_key);
					  		update_option("getbowtied_".THEME_SLUG."_license_expired", 0);
					  		break;

					  		case '2':
					  		$request_msg = 'The product key you entered is not valid.';
					  		break;

					  		case '3':
					  		$request_msg = '<strong>Site URL mismatch:</strong><br/>';
					  		$request_msg .= 'Your actual URL is: <strong>'.get_site_url().'</strong><br/>';
					  		$request_msg .= 'so please <a href="http://my.getbowtied.com" target="_blank">generate a new key</a> using this one.';
					  		break;

					  	}

					  	// echo '<h2>'.$request_msg.'</h2>';
					}

				 	return $request_msg;

				}
			}
			
			function update_notice()
			{
				$remote_ver = get_option("getbowtied_".THEME_SLUG."_remote_ver") ? get_option("getbowtied_".THEME_SLUG."_remote_ver") : $this->getbowtied_theme_version();
				$local_ver = $this->getbowtied_theme_version();

			    if(version_compare($local_ver, $remote_ver, '<'))
			    {
					if( function_exists('wp_get_theme') ) {
						$theme_name = '<strong>'. wp_get_theme(get_template()) .'</strong>';
					}

					if ( ( !get_option("getbowtied_".THEME_SLUG."_license") && ( get_option("getbowtied_".THEME_SLUG."_license_expired") == 0 ) )
					|| (get_option("getbowtied_".THEME_SLUG."_license") && ( get_option("getbowtied_".THEME_SLUG."_license_expired") == 1 )) ) {

						echo '<div class="notice is-dismissible error getbowtied_admin_notices">
						<p>There is an update available for the ' . $theme_name . ' theme. Go to <a href="' . admin_url( 'admin.php?page=getbowtied_theme_registration' ) . '">Product Activation</a> to enable theme updates.</p>
						</div>';

					}

					if ( get_option("getbowtied_".THEME_SLUG."_license") && ( get_option("getbowtied_".THEME_SLUG."_license_expired") == 0 ) ) {

					echo '<div class="notice is-dismissible error getbowtied_admin_notices">
					<p>There is an update available for the ' . $theme_name . ' theme. <a href="' . admin_url() . 'update-core.php">Update now</a>.</p>
					</div>';

					}
			    }
			}

			// =============================================================================
			// Admin Redirect
			// =============================================================================

			function getbowtied_activation_redirect(){
				if ( current_user_can( 'edit_theme_options' ) ) {
					header('Location:'.admin_url().'admin.php?page=getbowtied_theme');
				}
			}

			// =============================================================================
			// Admin Init
			// =============================================================================

			function getbowtied_theme_admin_init() {

				if ( isset( $_GET['getbowtied-deactivate'] ) && $_GET['getbowtied-deactivate'] == 'deactivate-plugin' ) {
					
					check_admin_referer( 'getbowtied-deactivate', 'getbowtied-deactivate-nonce' );

					if ( ! function_exists( 'get_plugins' ) ) {
						require_once ABSPATH . 'wp-admin/includes/plugin.php';
					}

					$plugins = get_plugins();

					foreach ( $plugins as $plugin_name => $plugin ) {
						if ( $plugin['Name'] == $_GET['plugin_name'] ) {
								deactivate_plugins( $plugin_name );
						}
					}

				} 

				if ( isset( $_GET['getbowtied-activate'] ) && $_GET['getbowtied-activate'] == 'activate-plugin' ) {
					
					check_admin_referer( 'getbowtied-activate', 'getbowtied-activate-nonce' );

					if ( ! function_exists( 'get_plugins' ) ) {
						require_once ABSPATH . 'wp-admin/includes/plugin.php';
					}

					$plugins = get_plugins();

					foreach ( $plugins as $plugin_name => $plugin ) {
						if ( $plugin['Name'] == $_GET['plugin_name'] ) {
							activate_plugin( $plugin_name );
						}
					}

				}

			}

			
			// =============================================================================
			// Edit Menus
			// =============================================================================

			function getbowtied_edit_admin_menus() {
				global $submenu;
				$submenu['getbowtied_theme'][0][0] = __( 'Welcome', 'getbowtied' );
			}

			
			// =============================================================================
			// Let to num
			// =============================================================================

			function let_to_num( $size ) {
				$l   = substr( $size, -1 );
				$ret = substr( $size, 0, -1 );
				switch ( strtoupper( $l ) ) {
					case 'P':
						$ret *= 1024;
					case 'T':
						$ret *= 1024;
					case 'G':
						$ret *= 1024;
					case 'M':
						$ret *= 1024;
					case 'K':
						$ret *= 1024;
				}
				return $ret;
			}

			function getbowtied_theme_version() {
				$getbowtied_theme = wp_get_theme();
				if($getbowtied_theme->parent()):
					return $getbowtied_theme->parent()->get('Version');
				else:
					return $getbowtied_theme->get('Version');
				endif;
			}

		}
		
		new Getbowtied_Admin_Pages;
	}
}