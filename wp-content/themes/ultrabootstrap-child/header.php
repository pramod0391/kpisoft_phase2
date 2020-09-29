<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ultrabootstrap
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script type="application/ld+json">
	{
  		"@context": "http://schema.org",
  		"@type": "Organization",
  		"name" : "KPISOFT",
  		"url" : "https://www.kpisoft.com/",
  		"logo" : "https://www.kpisoft.com/wp-content/uploads/2020/04/kpisoft_logo.svg",
  		"telephone" : "+1 (800) 947 8211",
    		"address" : {
    		"@type": "PostalAddress",
    		"addressCountry": "United States",
    		"addressLocality": "Houston",
    		"addressRegion": "Texas",
    		"postalCode": "77056",
    		"streetAddress": "2700 Post Oak Blvd, 21st Floor"
  		},
  		"sameAs" : [
    		"https://www.facebook.com/kpisoftinc/",
    		"https://twitter.com/kpisoft/",
    		"https://www.linkedin.com/company/kpisoft"
		]
 	}
	</script>
	<!--scheme script end-->

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png">
	<!-- <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet"> -->
	<?php wp_head(); ?>
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PHBJ8TZ');</script>
	<!-- End Google Tag Manager -->
	
</head>


<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHBJ8TZ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
<script type="text/javascript">
var stylesheet_directory_uri = "<?php echo get_stylesheet_directory_uri(); ?>";
</script>
<header>	
<section class="logo-menu">
	<nav class="navbar navbar-default navbar-fixed-top">
		<?php 
		$args = array(
		    'menu' => 'black_band', // from top-ancestor of current page
		    'echo' => 0,  // true or 0
		    'theme_location' => '__fake', // fake value, to prevent display of 1st real menu
		    'fallback_cb' => false  // prevent display of 1st real menu
		);
		$menu = wp_nav_menu( $args );
		if ($menu){ ?>
			<div class="top_header_message">
				<?php 
					//$menu = wp_get_nav_menu_object("black_band");
					wp_nav_menu( array(
						'menu'              => 'black_band',
						'fallback_cb'       => 'ultrabootsrap_wp_bootstrap_navwalker::fallback',
						'walker'            => new ultrabootsrap_wp_bootstrap_navwalker())
					);
				?>
			</div>
		<?php
		}
		?>		

		<?php 
		$login_args = array(
		    'menu' => 'header_login_signup', 
		    'echo' => 0,
		    'theme_location' => '__fake',
		    'fallback_cb' => false 
		);
		$login_menu = wp_nav_menu( $login_args );
		if ($login_menu){ ?>
			<div class="row_header_sign_wp row">
				<div class="header_sign_up">
					<?php 
						wp_nav_menu( array(
							'menu'              => 'header_login_signup',
							'fallback_cb'       => 'ultrabootsrap_wp_bootstrap_navwalker::fallback',
							'walker'            => new ultrabootsrap_wp_bootstrap_navwalker())
						);
					?>
				</div>
			</div>
		<?php
		}
		?>

		<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				    	<button class="mobile_sh request_demo__head_button">
			      			<a href="<?php echo get_site_url(); ?>/request-demo">Request Demo</a>
				      	</button>
				      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" id="nav-icon1">
					        <!-- <span class="sr-only"><?php _e('Toggle navigation' , 'ultrabootstrap' ); ?></span> -->
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
				      	</button>
				      	
				      	<div class="logo-tag">
				      		
				      		<a href="<?php echo site_url(); ?>">
				      			<!-- <img width="202" height="48" src="<?php echo get_stylesheet_directory_uri(); ?>/images/entomo_black.svg"> -->
				      		</a>
				      			<?php if ( has_custom_logo()): the_custom_logo(); else: ?>
				      			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1 class="site-title" ><?php echo bloginfo( 'name' ); ?></h1>
				      			<h2 class="site-description" ><?php bloginfo('description'); ?></h2><?php endif; ?></a> 
				      			<!-- <button class="mobile_sh request_demo__head_button">
				      				<a href="<?php echo get_site_url(); ?>/request-demo">Request Demo</a>
				      			</button> -->
      					</div>

				    </div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<?php if (get_theme_mod('header_search_setting', 1)) : ?>

							<form  class="navbar-form navbar-right" role="search">
								<ul class="nav pull-right">
									<div class="main-search">
										<button class="btn btn-search" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
										<i class="fa fa-search"></i>
										</button>
										<div class="search-box collapse" id="collapseExample">
												<div class="well search-well">
												<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
													<input type="text" class="form-control" placeholder="<?php echo __('Search a Keyword','ultrabootstrap');?>" value="<?php echo get_search_query(); ?>" name="s">
												</form>
												</div>
										</div>
									</div>
								</ul>
							</form>

						<?php endif; ?>  							
						<?php
				            wp_nav_menu( array(
				                'menu'              => 'primary',
				                'theme_location'    => 'primary',
				                'depth'             => 8,
				                'container'         => 'div',
				                'menu_class'        => 'nav navbar-nav navbar-right',
				                'fallback_cb'       => 'ultrabootsrap_wp_bootstrap_navwalker::fallback',
				                'walker'            => new ultrabootsrap_wp_bootstrap_navwalker())
				            );
				        ?>
				    </div> <!-- /.end of collaspe navbar-collaspe -->
	</div> <!-- /.end of container -->
	</nav>
</section> <!-- /.end of section -->
</header>
