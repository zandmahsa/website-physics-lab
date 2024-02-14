<?php
/*add_action('plugins_loaded', 'wan_load_textdomain');
function wan_load_textdomain() {
	load_plugin_textdomain( 'shakhes', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}
*/
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'منوی سایت' ),
      'login-menu' => __( 'منوی ورود' ),
	  'footer-menu' => __( 'پیوندهای سایت' )
      
    )
  );
}
add_action( 'init', 'register_my_menus' );



if ( function_exists( 'register_sidebar' ) ) {

    register_sidebar( array(
        'name'         =>"اخبار و اطلاعیه ها",
        'id'           => 'qomuninews',
        'description'  => " اخبار و اطلاعیه ها"
    ) );
    register_sidebar( array(
        'name'         =>"2اخبار و اطلاعیه ها",
        'id'           => 'qomuninews2',
        'description'  => " اخبار و اطلاعیه ها"
    ) );
	register_sidebar( array(
        'name'         =>"خبر",
        'id'           => 'news',
        'description'  => "خبر"
    ) );
	
	
}







function excerpt_readmore($more) {
        return '... ' . 'Read More' . '';
}
add_filter('excerpt_more', 'excerpt_readmore');

 ?>
