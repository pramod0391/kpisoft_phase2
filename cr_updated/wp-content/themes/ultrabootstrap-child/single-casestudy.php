<?php
/**
 * The template for displaying all single Casestudy posts.
 *
 * @package ultrabootstrap
 */

get_header(); ?>
<style type="text/css">
	

</style>
<section id="casedetails_banner">
	<div class="row" id="page_banner">
		<img src="<?php echo get_field('banner_image_desktop'); ?>" class="desktop_img">
		<img src="<?php echo get_field('banner_image_mobile'); ?>" class="mobile_img">
		<div class="about_banner_text">
			<?php echo get_field('banner_text') ?>
		</div>
	</div>
</section>
<div class="row breadcrumbs">
	<a href="<?php echo site_url(); ?>">Home</a> / <a href="<?php echo site_url(); ?>/success-stories">Success Stories</a>
</div>

<section id="cs_after_banner">
	<div class="row">		
		<div class="col-md-6 col-sm-6 col-xs-12  casedetails abt_after_banner_left_desc">
			<?php echo get_field('case_study_deatill_after_banner_left_text'); ?>
			<img  src="<?php echo get_the_post_thumbnail_url();?>">
			<div class="cs_left_after_image">
				<?php echo get_field('case_study_deatill_after_banner_left_text_after_image'); ?>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12 casedetails abt_after_banner_left_desc">
			<?php echo get_field('case_study_deatill_after_banner_right_text'); ?>
			<?php $blue_text = get_field('case_study_deatill_after_banner_right_blue_text'); 
			if($blue_text){?>
				<div class="impact"><strong><?php echo $blue_text; ?></strong></div>
			<?php
			}
			?>
		</div>
	</div>
</section>
<div class="bottomborder"></div>

<section id="other_cs">
	<div class="democratized casestudy row">
		<p class="location">Other success stories</p>
		<?php
		$c_post = get_the_ID();
		$cs = new WP_Query(array('post_type' => 'casestudy','post_status' => 'publish','posts_per_page' => 3,'order' => 'ASC','post__not_in' => array($c_post) ));
		while ( $cs->have_posts() ) : $cs->the_post(); ?>
			<div class="col-md-4 col-sm-4 col-xs-12 paddingbot centercase">
				<a href="<?php echo get_the_permalink(); ?>">
					<img  src="<?php echo get_the_post_thumbnail_url();?>">
				</a>
				<div class="cs_category">
					<?php $cat = get_the_category(); 
						foreach ($cat as $cname) {
							echo $cname->cat_name;
						}
					?>
				</div>
				<div class="cases case1">
					<a href="<?php echo get_the_permalink(); ?>">
						<?php echo get_the_title(); ?>
					</a>
				</div>
				<a class="know" href="<?php echo get_the_permalink(); ?>">Know more <span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		<?php
		endwhile;
		wp_reset_postdata(); 
		?>		
	</div>
</section>

<div class="col-md-12 col-sm-12 col-xs-12 ">
	<div class="backimg">
		<img class="desktop" src="<?php echo get_stylesheet_directory_uri();?>/images/evolving.png">
		<img class="mob" src="<?php echo get_stylesheet_directory_uri();?>/images/evolvemob.png">
	</div>
	
	<div class="container3a brings ">
		<div class="tomorrow"> Evolving enterprises of tomorrow<br><span class="today">What brings you here today?</span>
		</div>
	</div>
	<div class="container3">
		<div class="col-md-6 col-sm-6 col-xs-12 pull-left1">
			<span class="Engage1">Want to deliver automated<br> insights to your team?</span><br><br>
			<a class="btn2" href="<?php echo site_url(); ?>/request-demo">Let’s get started <span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12 pull-left1">
			<span class="Engage1">Need to transform performance<br> management system </span><br><br>
			<a class="btn2" href="<?php echo site_url(); ?>/contact">Make the switch <span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
	</div>
</div>	



<?php get_footer(); ?>