<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CT_Custom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php require get_template_directory()  . '/custom_fonts.php';?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="w-100 text-center ">
		<div class="d-flex justify-content-around align-items-center top-c">
			<div class="px-3 call-us"><span>CALL US NOW!</span> <span><a class="telaction" href="tel:385.154.11.28.35">385.154.11.28.35</a></span></div>
			<div class="px-3">
				<?php if(!is_user_logged_in()):?>
				<a href="<?=site_url('/wp-login.php')?>" class="login-a px-1" style="color:#be3622;">LOGIN</a>
				<a href="<?=site_url('/wp-login.php?action=register')?>" class="signup-a px-1 text-white">SIGNUP</a>
				<?php else:?>
				<a href="<?=admin_url('profile.php')?>" class="login-a px-1" style="color:#be3622;">MY PROFILE</a>
				<a href="<?=site_url('/wp-login.php?action=logout')?>" class="signup-a px-1">LOGOUT</a>
				<?php endif;?>
			</div>
		</div>
	</div>
	
	<header id="masthead" class="site-header mb-4">
		<div class="">

		<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
			<div class="container-fluid justify-content-center">
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">		
				</a>
				<span class="navbar-text">
						<?php
							the_custom_logo();
							if ( is_front_page() && is_home() ) :
								//bloginfo( 'name' ); 
							else :
								//bloginfo( 'name' ); 
							endif;
							?>
				</span>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container' => 'ul',
						) );
						?>
				</div>
			</div>
		</nav>
		</div>
	</header><!-- #masthead -->

	<nav class="navbar navbar-expand-lg navbar-light bg-white">
	<div class="container-fluid">
		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
			<span>Home</span>
			</li>
			<?php if(!is_home()):?>
			<li class="breadcrumb-item">
			<span><?php echo get_post()->post_type;?></span>
			</li>
			<li class="breadcrumb-item active" aria-current="page">
			<strong><?php echo get_the_title();?></strong>
			</li>
			<?php else:?>
				<li class="breadcrumb-item"></li>
			<?php endif;?>
		</ol>
		</nav>
	</div>
	</nav>

	<div id="content" class="site-content container">
