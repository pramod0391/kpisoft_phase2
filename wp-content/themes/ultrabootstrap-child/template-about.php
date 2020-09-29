<?php
/**
 * Template Name: About Page 
 * The template used for displaying fullwidth page content in About page
 *
 * @package ultrabootstrap
 */
get_header(); ?>

<section id="about_banner">
	<div class="row" id="page_banner">
		<img src="<?php echo get_field('banner_image_desktop'); ?>" class="desktop_img">
		<img src="<?php echo get_field('banner_image_mobile'); ?>" class="mobile_img">
		<div class="about_banner_text">
			<?php echo get_field('banner_text'); ?>
		</div>
	</div>
</section>

<div class="row breadcrumbs">
	<a href="<?php echo site_url(); ?>">Home</a> / <b>About</b> / <b>About Us</b>
</div>

<section id="about_after_banner">
	<div class="row">
		<div class="col-md-5 col-sm-5 col-xs-12 pl about_after_banner_left">
			<div class="abt_after_banner_left_heading">
				<?php echo get_field('about_after_banner_left_heading'); ?>
			</div>
			<div class="abt_after_banner_left_desc">
				<?php echo get_field('about_after_banner_left_description'); ?>
			</div>
		</div>
		<div class="col-md-7 col-sm-7 col-xs-12 about_after_banner_right">
			<img src="<?php echo get_field('about_after_banner_right_image'); ?>" alt="About Us">
		</div>
	</div>	
</section>

<section id="about3_secret">
	<div class="row">
		<div class="col-md-7 col-sm-7 col-xs-12 pl about_after_banner_right desktop">
			<img class="desktop" src="<?php echo get_field('secretsauce_left_image'); ?>" alt="About Us">
		</div>
		<div class="col-md-5 col-sm-5 col-xs-12 about_after_banner_left">
			<div class="abt_after_banner_left_heading">
				<?php echo get_field('secretsauce_right_heading'); ?>
				<img class="mobile_sh" src="<?php echo get_field('secretsauce_left_image'); ?>" alt="About Us">
			</div>
			<div class="abt_after_banner_left_desc">
				<?php echo get_field('secretsauce_right_description'); ?>
			</div>
		</div>		
	</div>
	<div class="row">
		
		<div class="col-md-3 col-sm-4 col-xs-12 about3_info_block">
			<p>Become a purpose-led organization</p>
		</div>

		<div class="col-md-1 col-sm-1 col-xs-12 desktop_img"></div>
		
		<div class="col-md-3 col-sm-4 col-xs-12 about3_info_block">
			<p>Apply intelligence across all processes and verticals</p>
		</div>
		<div class="col-md-1 col-sm-1 col-xs-12 desktop_img"></div>
		<div class="col-md-3 col-sm-4 col-xs-12 about3_info_block">
			<p>Empower people to perform, learn and grow</p>
		</div>
		
	</div>
</section>

<section id="abt_explore_solutions">
	<img src="<?php echo get_field('about_explore_solution_background_image'); ?>" alt="Explore Solutions">
	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-12 abt_explore_solution_heading">
			<img class="yellow_border" src="<?php echo get_stylesheet_directory_uri(); ?>/images/yellow_borders.svg" alt="Yellow Borders">
			<?php echo get_field('about_explore_solution_heading'); ?>
		</div>
		<div class="col-md-8 col-sm-8 col-xs-12 abt_explore_solution_description">
			<?php echo get_field('about_explore_solution_description'); ?>
			<a href="<?php echo get_field('about_explore_solution_cta_link'); ?>">
				<button><?php echo get_field('about_explore_solution_cta_name'); ?><span class="glyphicon glyphicon-chevron-right"></span></button>
			</a>
		</div>
	</div>
</section>

<section id="about_leadership">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/abt_leadership_top_right_bg.svg" class="abt_leadership_bg-right">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/abt_leadership_bottom_left_bg.svg" class="abt_leadership_bg-left">
	<div class="row">
		<!-- <div class="col-md-2 col-sm-2 col-xs-12 desktop_img">
		</div> -->
		<div class="col-md-6 col-sm-6 col-xs-12 abt_leadership_img">
			<img class="our_team_img" src="<?php echo get_field('about_leadership_image'); ?>" alt="About Leadership">
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12 abt_leadership_text">
			<div class="abt_leadership_heading">
				<?php echo get_field('about_leadership_right_heading'); ?>
			</div>
			<div class="abt_leadership_description">
				<?php echo get_field('about_leadership_right_description'); ?>
			</div>
			<a href="<?php echo get_field('about_leadership_right_cta_link'); ?>">
				<button><?php echo get_field('about_leadership_right_cta'); ?><img src="<?php echo get_stylesheet_directory_uri();?>/images/whitearrow.png"></button>
			</a>
		</div>
		<!-- <div class="col-md-2 col-sm-2 col-xs-12 desktop_img">
		</div> -->
	</div>
</section>


<section id="about_join_us">
	<div class="row">
		<img src="<?php echo get_field('abous_us_join_team_background_image'); ?>" alt="About Join Us">
		<div class="about_join_us_text">
			<div class="about_join_us_heading">
				<?php echo get_field('abous_us_join_team_heading'); ?>
			</div>
			<div class="about_join_us_description">
				<?php echo get_field('abous_us_join_team_description'); ?>
			</div>
			<a href="<?php echo get_field('abous_us_join_team_cta_link'); ?>">
				<!-- <button> -->
					<?php echo get_field('abous_us_join_team_cta_name'); ?>
					<!-- <img src="<?php echo get_stylesheet_directory_uri();?>/images/blackarrow.png"> -->
				<!-- </button> -->
			</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
