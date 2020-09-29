<?php
/**
 * Template Name: Casestudy Page 
 * The template used for displaying fullwidth page content in Casestudy page
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

<div class="row_c"></div>

<div class="row breadcrumbs">
	<a href="<?php echo site_url(); ?>">Home</a> / <?php if ( $post->post_parent ) { ?><a href="<?php echo get_permalink( $post->post_parent ); ?>" ><?php echo get_the_title( $post->post_parent ); ?>		
		</a> / <?php } ?><b>Success Stories</b>
</div>
<div class="row_c"></div>
<div class="col-md-12 col-sm-12 col-xs-12" >
<!-- 	<div class="row breadcrumbs">
	<a href="<?php echo site_url(); ?>">Home</a> / Resources / <b>Success Stories</b>
	</div> -->
	<div class="democratized casestudy">
		<?php 
		$cs = new WP_Query(array('post_type' => 'casestudy','post_status' => 'publish','posts_per_page' => 6,'order' => 'ASC'));
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
                    <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                </div>
                <a href="<?php echo get_the_permalink(); ?>" class="know"> Know more<span class="glyphicon glyphicon-chevron-right"></span></a>
                  
			</div>
		<?php
		endwhile;
		wp_reset_postdata(); 
		?>
	</div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12"><img class="imgleft1"  src="<?php echo get_stylesheet_directory_uri();?>/images/quatercircle.png">
</div>
<div class="col-md-12 col-sm-12 col-xs-12 ">
	<div class="backimg">
		<img class="desktop" src="<?php echo get_stylesheet_directory_uri();?>/images/evolving.png">
		<img class="mob" src="<?php echo get_stylesheet_directory_uri();?>/images/evolvemob.png">
	</div>
	
	<div class="container3a brings ">
		<div class="tomorrow">Evolving enterprises of tomorrow<br><span class="today">What brings you here today?</span>
		</div>
	</div>
	<div class="container3">		
		<div class="col-md-6 col-sm-6 col-xs-12 pull-left1">
			<span class="Engage1">Want to deliver automated<br> insights to your team</span><br><br>
			<a class="btn2" href="<?php echo site_url(); ?>/request-demo">Let’s get started <span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12 pull-left1">
			<span class="Engage1">Need to transform performance<br> management system </span><br><br>
			<a class="btn2" href="<?php echo site_url(); ?>/contact">Make the switch <span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
	</div>
</div>		
<?php get_footer(); ?>
