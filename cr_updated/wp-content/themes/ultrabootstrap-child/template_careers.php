<?php
/**
 * Template Name: Careers
 * The template used for displaying fullwidth page content in Team page
 *
 * @package ultrabootstrap
 */
get_header(); ?>
<style type="text/css">
	/*#team_gallery,.inspire1{width: 83%;margin: auto;}
	.paddingbot2{padding-bottom: 15px;}
	.inspire1 p{text-align: center;margin: auto;padding:0px 0px 54px;}
	.insimg{text-align: center;padding: 0;}
	.containerteam {
		color: #000000;
		display: block;
		margin: auto;
		border-radius: 15px;
  		position: relative;
  		width: 95%;
 		background-color: #ffda00;
}
#team_gallery22 p{text-align: left;padding-bottom: 10px;}

.name span {color: #808080;font-weight:normal;padding-bottom: 100px;}
.name{width: 95%;margin: auto;}
.imageteam {
  display: block;
  height: auto;
}
.overlay {
	border-radius: 15px;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #ffda00;
}

.approch23{padding-bottom: 100px;
padding-top: 35px;}

.containerteam:hover .overlay {
  opacity: 1;
}
.approch12{padding-bottom: 63px;padding-top: 52px;}
.meet p{color: #000000;}
.textteam {
  
  position: absolute;
  padding: 13px 17px;
 
  text-align: center;
}*/
</style>
<section id="about_banner">
	<div class="row" id="page_banner">
		<img src="http://zensciences.com/kpisoft/wp-content/themes/ultrabootstrap-child/images/career-Banner.png" class="desktop_img">
		<img src="http://zensciences.com/kpisoft/wp-content/themes/ultrabootstrap-child/images/career-mob-banner.png" class="mobile_img">
		<div class="about_banner_text">
			<div><strong>Join the</strong><br>
			Entomo team</div>
			<div class="meet">
				<div class="abt_after_banner_left_desc" ><?php echo get_field('banner_short_description'); ?></div>
			</div>
		</div>		
	</div>
</section>
<section>
	<div class="row breadcrumbs_sec">
	<a href="http://zensciences.com/kpisoft">Home</a> / <b>Careers</b>
</div>
</section>
<section id="career_form">
	<div class="career_form_sec">
		<div class="job_title">
			<label>What<br><span>job title, keywords, or company</span></label>
			<input type="text" name="job_title">
			<img src="http://zensciences.com/kpisoft/wp-content/themes/ultrabootstrap-child/images/search_icon.png">
		</div>
		<div class="job_title">
			<label>Where<br><span>city, state, or pin code</span></label>
			<input type="text" name="job_title">
			<img src="http://zensciences.com/kpisoft/wp-content/themes/ultrabootstrap-child/images/map_icon.png">
		</div>
		<div class="find_cta">
			<a href="">Find Jobs</a><span>or</span>
		</div>
		<div class="position_cta">
			<a href="">See Open Position</a>
		</div>
	</div>
	<div class="top_right_rect">
		<img src="http://zensciences.com/kpisoft/wp-content/themes/ultrabootstrap-child/images/side_rect.png">
	</div>
</section>
<section class="Cocreating inspire">
	<div class="row  approch23">
		<div class="inspire1">
			<div class="col-md-12 insimg">
				<div class="solutionstxt middle paddingbot2 true_value">Creating true value for ourselves, customers and partners</div>
			</div>
			<div class="col-md-2 insimg">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/speed.png">
				<div class="topspace2 solutionstxt1 customer_values">We thrive on speed  deliver promises
			on time</div>
			</div>
			<div class="col-md-2 insimg">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/passion.png">
				<div class="topspace2 solutionstxt1 customer_values">We have passion for excellence @
			global scale</div>
			</div>
			<div class="col-md-2 insimg">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cultivate.png">
				<div class="topspace2 solutionstxt1 customer_values">We cultivate  always act in high self-
			awareness</div>
			</div>
			<div class="col-md-2 insimg">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/care.png">
				<div class="topspace2 solutionstxt1 customer_values">We care for
			our people</div>
			</div>
			<div class="col-md-2 insimg">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/belive.png">
				<div class="topspace2 solutionstxt1 customer_values">We believe good leadership is the heart of our organisation</div>
			</div>
			<div class="col-md-2 insimg">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/critique.png">
				<div class="topspace2 solutionstxt1 customer_values">We critique self first  everything
			else next.</div>
			</div>
		</div>
		
	</div>
</section>
<section id="positions">
	<div class="row open_positions">
		<div class="col-sm-9 col-md-9 col-xs-12 position_head_wrap">
			<div class="position_head">
				<div>Open Positions</div>
			</div>
		</div>
		<div class="col-sm-3 col-md-3 col-xs-12 position_head_wrap">
			<div class="resume_upload">
					<a href="">Upload your resume<span class="glyphicon glyphicon-chevron-right"></span><br>
					<span>(for intelligent career match)</span></a>
			</div>
		</div>
	</div>
	<div class="row position_details_sec">
		<div class="col-sm-4 col-md-4 col-xs-12 position_details_wrap">
			<div class="position_details">
				<div class="positions_detail_head">Digital Strategy Consultant</div>
				<div class="opening_location">Houston, Tx, Usa<br> 3 To 7 Years</div>
				<a class="position_know" href="">Know more<span class="glyphicon glyphicon-chevron-right glyphicon_size"></span></a>
			</div>
		</div>
		<div class="col-sm-4 col-md-4 col-xs-12 position_details_wrap">
			<div class="position_details">
				<div class="positions_detail_head">Senior Hr Consultant</div>
				<div class="opening_location">Q Sentral, Jalan Stesen Sentral 2, Kuala Lumpur Sentral, Kuala Lumpur, Federal Territory Of Kuala Lumpur, Malaysia</div>
				<a class="position_know" href="">Know more<span class="glyphicon glyphicon-chevron-right glyphicon_size"></span></a>
			</div>
		</div>
		<div class="col-sm-4 col-md-4 col-xs-12 position_details_wrap">
			<div class="position_details">
				<div class="positions_detail_head">Principal Consultant Intern - Summer 2020</div>
				<div class="opening_location">Houston, Tx, Usa<br> Above 1 Years</div>
				<a class="position_know" href="">Know more<span class="glyphicon glyphicon-chevron-right glyphicon_size"></span></a>
			</div>
		</div>
		<div class="col-sm-4 col-md-4 col-xs-12 position_details_wrap">
			<div class="position_details">
				<div class="positions_detail_head">Inside Sales Representative Intern</div>
				<div class="opening_location">Houston, Tx, Usa<br> 1 To 3 Years</div>
				<a class="position_know" href="">Know more<span class="glyphicon glyphicon-chevron-right glyphicon_size"></span></a>
			</div>
		</div>
		<div class="col-sm-4 col-md-4 col-xs-12 position_details_wrap">
			<div class="position_details">
				<div class="positions_detail_head">Customer Success Officer</div>
				<div class="opening_location">Kuala Lumpur, Malaysia<br> 1 To 3 Years</div>
				<a class="position_know" href="">Know more<span class="glyphicon glyphicon-chevron-right glyphicon_size"></span></a>
			</div>
		</div>
		<div class="col-sm-4 col-md-4 col-xs-12 position_details_wrap">
			<div class="position_details">
				<div class="positions_detail_head">Inside Sales Consultant</div>
				<div class="opening_location">Kuala Lumpur, Malaysia<br> 2 To 3 Years</div>
				<a class="position_know" href="">Know more<span class="glyphicon glyphicon-chevron-right glyphicon_size"></span></a>
			</div>
		</div>
	</div>
	<div class="top_right_img">
		<img src="http://zensciences.com/kpisoft/wp-content/themes/ultrabootstrap-child/images/Rectangle_side.png">
	</div>
	<div class="bottom_img">
		<img src="http://zensciences.com/kpisoft/wp-content/themes/ultrabootstrap-child/images/substraction.png">
	</div>
	<div class="bottom_right_img">
		<img src="http://zensciences.com/kpisoft/wp-content/themes/ultrabootstrap-child/images/Quarter_Circle.png">
	</div>
</section>
<?php get_footer(); ?>