<?php 

function country_listing()
{
	Tonkk::country_details();
	echo 'task done';
	exit;
}
add_action('wp_ajax_country_list','country_listing');
add_action('wp_ajax_country_list','country_listing'); 




function ajax_login_init() {
	if ( ! is_user_logged_in()) {
		return;
	}

	wp_register_script('ajax-login-script', get_template_directory_uri().'/ajax-login-script.js',array('jquery'));
	wp_enqueue_script('ajax-login-script');
	wp_localize_script('ajax-login-script','ajax_login_object',array('ajaxurl' => admin_url('admin-ajax.php'),'redirecturl' => 'REDIRECT_URL_HERE','loadingmessage' => __('Sending user info, please wait...')));
}

add_action( 'wp_enqueue_scripts','ajax_login_init' );

add_action( 'wp_ajax_nopriv_ajaxlogin','ajax_login' );

function ajax_login(){
  //nonce-field is created on page
	check_ajax_referer('ajax-login-nonce','security');
  //CODE
	die();
}


// 
// require '_inc/ims_ca_functions.php';

// add_action('admin_enqueue_scripts', 'admin_scripts');

// function admin_scripts(){

//     wp_enqueue_script( 
//         'ims_ca_core', 
//         plugin_dir_url( __FILE__ ) . '_assets/ims_ca_core.js', 
//         array(), 
//         '1.0.0', 
//         false
//     );
//     wp_localize_script( 
//         'ims_ca_core', 
//         'ims_ca_rest', 
//         array(
//             'rest_url' => get_site_url().'/wp-json',
//             'nonce' => wp_create_nonce( 'wp_rest' ),
//             'ajaxurl' => admin_url('admin-ajax.php')
//     ) );  
// }

// add_action('wp_ajax_ims_ca_test-ajax', 'imsCAAjaxRequest');
// add_action('wp_ajax_nopriv_ims_ca_add_to_term', 'imsCAAjaxRequest');