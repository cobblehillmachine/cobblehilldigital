<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/adaptive.css" />
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/js/modal/reveal.css">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- javascript -->	
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/cycle.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/scripts.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/infieldlabel.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/fitvids.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/modal/reveal.js"></script>

<script type="text/javascript" src="//use.typekit.net/ysp2tzm.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="header" class="clear-block">
  <div id="logo">
  <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo( 'template_directory' ); ?>/images/cobble-hill-logo.gif"></a>
  </div><!-- logo -->
  <div id="navigation" class="clear-block" role="navigation">
    <div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'skeleton' ); ?>"><?php _e( 'Skip to content', 'skeleton' ); ?></a></div>
    <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
  </div><!-- #navigation -->
</div><!-- #header -->
