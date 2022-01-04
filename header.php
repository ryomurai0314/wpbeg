<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- <title>index | wpbeg-static</title> -->
<meta name="description" content="WordPress theme development static data for beginners">
<meta name="keywords" content="WordPress, Theme, development">
<!-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/earlyaccess/mplus1p.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Sacramento&amp;amp;subset=latin-ext">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css">
<link rel="stylesheet" href="css/wpbeg.css"> -->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/common/ico/favicon.ico">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
    <h1 class="header__ttl"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?><span class="header__ttl__sub">static</span></a></h1>
    <p class="header__descrition"><?php bloginfo( 'description' ); ?></p>
    <?php get_search_form(); ?>
    <?php wp_nav_menu(); ?>
</header>