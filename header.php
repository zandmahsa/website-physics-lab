<!DOCTYPE html>
<html lang='fa' dir='rtl'>

<head>
    <?php load_theme_textdomain('zand_physics',get_template_directory().'/lang'); ?>
    <meta charset="utf-8" />
    <meta name='viewport' content='width=device-width , initial-scale=1 ,maximum-scale=1,user-scalable=no'>
    <title><?php bloginfo("name"); wp_title(); ?></title>
    
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
    
    <!--[if IE]><script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script><![endif]-->

<?php wp_head(); ?>
</head>

<body>
    <div class="masthead" role="navigation">

        <a href="<?php bloginfo("url"); ?>"><div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-qomuni.png" alt="" title="" /></div></a>

        <div class="main_masthead">
            <div class="login">
                <?php wp_nav_menu( array( 'theme_location' => 'login-menu' ,"container"=>"" ) ); ?>
            </div>

            <div class="search" role="search" >
                 <form action="<?php bloginfo("home") ?>" method="get">
                    <input type="text" name="s" value="<?php _e('جستجوی کلمه ی مورد نظر','zand_physics'); ?>" placeholder="جستجوی کلمه ی مورد نظر" onfocus="this.placeholder = ''" onblur="this.placeholder = 'جستجوی کلمه ی مورد نظر'">
                </form>
            </div>

            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ,"container"=>"" ) ); ?>


        </div>

    </div>