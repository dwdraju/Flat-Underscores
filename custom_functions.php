<?php
/**
 * Extension of functions.php with Custom Functions.
 */

function enqueue_styles_scripts() {

    //register srcipts: wp_register_script( $handle, $src, $deps, $ver, $in_footer ); 
    wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js','', '', 'true');
    wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', '', '', 'true');
    wp_register_script( 'prettyPhoto-js', get_template_directory_uri() . '/assets/js/jquery.prettyPhoto.js', '', '', 'true');
    wp_register_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', '', '', 'true');

    //enqueue script: wp_enqueue_script($handle);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js');
    wp_enqueue_script('prettyPhoto-js');
    wp_enqueue_script('main-js');

    //register styles: wp_register_style( $handle, $src, $deps, $ver, $media );    
    wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css','','', 'all' );
    wp_register_style( 'fontawesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css','','', 'all' );
    wp_register_style( 'prettyPhoto-css', get_template_directory_uri() . '/assets/css/prettyPhoto.css','','', 'all' );
    wp_register_style( 'animate-css', get_template_directory_uri() . '/assets/css/animate.css','','', 'all' );
    wp_register_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css','','', 'all' );
    wp_register_style( 'style', get_template_directory_uri() . '/style.css','','', 'all' );


    //enqueue styles: wp_enqueue_style($handle);	
    wp_enqueue_style('bootstrap-css');
    wp_enqueue_style('fontawesome-css');    
    wp_enqueue_style('prettyPhoto-css');
    wp_enqueue_style('animate-css');
    wp_enqueue_style('main-css');
    wp_enqueue_style('style');

    
} 
add_action( 'wp_enqueue_scripts', 'enqueue_styles_scripts' );

/**
 * Add Respond.js for IE
 */
if( !function_exists('fu_ie_scripts')) {
    function fu_ie_scripts() {
        echo '<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->';
        echo ' <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->';
        echo ' <!--[if lt IE 9]>';
        echo '<script src="'.get_template_directory_uri().'/js/html5shiv.js"></script>';
        echo '<script src="'.get_template_directory_uri().'/js/respond.min.js"></script>';
        echo ' <![endif]-->';
    }
    add_action('wp_head', 'fu_ie_scripts');
} // end if

// Extension of nav menus
register_nav_menus( array(
    'footer-menu'   => __( 'Footer Menu', 'flat-underscores' ),   
    'social'        => __( 'Social Links Menu', 'flat-underscores' ),
    'company'       => __('Company Links Menu','flat-underscores'),
    ) );
// Remove ACF Pro plugin update notification
function filter_plugin_updates( $value ) {
    unset( $value->response['acf-pro/acf.php'] );
    return $value;
}
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );
?>