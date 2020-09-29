<?php
/**
 * The template for displaying all single Webinars posts.
 *
  * @package ultrabootstrap
 */
get_header(); ?>
<div class="row breadcrumbs_blog mt1 ">
     <a href="<?php echo site_url(); ?>">Home</a> / <a href="<?php echo site_url(); ?>/resource">Resources</a> / <a href="<?php echo site_url(); ?>/events-webinar/"> Webinar </a> / <b> <?php echo get_the_title(); ?> </b>
  </div>
<section id="events_details">
	<div class="row events_details_sec">
		<div class="col-12 col-sm-7 col-md-8">
			<div class="events_details_wrap">
				<div><?php echo get_the_title(); ?></div>
				<div class="event_date"><?php echo get_field('event_date_time',false,false);?> <?php echo get_field('event_location'); ?></div>
				<div class="events_desc"><?php echo get_the_content(); ?></div>
				<?php 
				$webinar_video = get_field('event_link');
				if($webinar_video){ ?>
					<p class="hide webinar_video_link"><?php echo $webinar_video; ?></p>
					<!-- <iframe width="560" height="315" src="<?php echo $webinar_video; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
				<?php
				}
				?>
				<?php
				$web_date = get_field('select_event_start_date');
				$web_date_format = str_replace('/', '-', $web_date);

				$web_date_com = strtotime($web_date_format);
				$current_date = strtotime(date("d-m-Y"));
				?>

				<div class="share">
					<div>Share this <?php echo get_post_type(); ?></div>
					<div class="social_icons">
						<a target="_blank" href="https://www.facebook.com/sharer.php?s=100&p[url]=<?php echo get_the_permalink(); ?>&p[images][0]=<?php echo get_the_post_thumbnail_url(); ?>&p[title]=<?php echo get_the_title(); ?>&p[summary]=<?php echo get_the_excerpt(); ?>" title="Share on Facebook" class="space">
                     		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blogfb.svg" alt="Facebook">
                  		</a>

	                  	<a target="_blank" href="https://twitter.com/share?url=<?php echo get_the_permalink(); ?>&via=&hashtags=<?php echo get_the_title(); ?>&text=<?php echo get_the_excerpt(); ?>" title="Share on Twitter" class="space">
	                     	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blogtwt.png" alt="Twitter">
	                  	</a>
                  		<a target="_blank" href="https://www.linkedin.com/shareArticle?url=<?php echo get_the_permalink(); ?>&title=<?php echo get_the_title(); ?>" title="Share on Linkedin" class="space">
                     		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blogin.svg" alt="LinkedIn">
                  		</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-12 col-sm-5 col-md-4 submit_form_wrap">

			<div class="event_form_sec">
				<div class="webinar_form <?php if($web_date_com >= $current_date)echo "upcoming_webinar";?>">
					<?php echo do_shortcode('[contact-form-7 id="2985" title="Webinar Form"]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>


<section>
   <div class="col-md-12 col-sm-12 col-xs-12 ">
	   <div class="backimg">
	      <img class="desktop" src="<?php echo get_field('pre_footer_desktop_image',417); ?>" alt="KPISOFT">
	      <img class="mob" src="<?php echo get_field('pre_footer_mobile_image',417); ?>" alt="KPISOFT">
	   </div>  
	   <div class="container3a brings">
	      <p class="tomorrow"><?php echo get_field('pre_footer_section_heading',417,false,false); ?><br><span class="today"><?php echo get_field('pre_footer_section_description',417,false,false); ?></span>
	      </p>
	   </div>
	   <div class="container3">
	      <div class="col-md-6 col-sm-6 col-xs-12 pull-left1">
	         <span class="Engage1"><?php echo get_field('pre_footer_left_heading',417,false,false); ?></span><br><br>
	         <a class="btn2" href="<?php echo get_field('pre_footer_left_cta_link',417); ?>"><?php echo get_field('pre_footer_left_cta',417); ?> <span class="glyphicon glyphicon-chevron-right"></span></a>
	      </div>
	      <div class="col-md-6 col-sm-6 col-xs-12 pull-left1">
	         <span class="Engage1"><?php echo get_field('pre_footer_right_heading',417,false,false); ?></span><br><br>
	         <a class="btn2" href="<?php echo get_field('pre_footer_right_cta_link',417); ?>"><?php echo get_field('pre_footer_right_cta',417); ?> <span class="glyphicon glyphicon-chevron-right"></span></a>
	      </div>
	   </div>
	</div>
</section>



<?php get_footer(); ?>