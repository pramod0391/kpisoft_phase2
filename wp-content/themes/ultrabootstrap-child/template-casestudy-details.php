<?php
/**
 * Template Name: Case Study Details
 * The template used for displaying fullwidth page content in CS Deatils page
 *
 * @package ultrabootstrap
 */
get_header(); ?>
<style type="text/css">
	.casedetails{color: #4d4d4d;}
	.impact{color: #0064bf;}
	.bottomborder{border-bottom: 1px solid #ccc;}
</style>
<section id="casedetails_banner">
	<div class="row" id="page_banner">
		<img class="desktop"src="<?php echo get_stylesheet_directory_uri();?>/images/img_successstories.png">
		<!-- <img class="mob"src="<?php echo get_stylesheet_directory_uri();?>/images/thanku.png"> -->
		<!-- <img src="<?php echo get_field('banner_image_desktop'); ?>" class="desktop_img">
		<img src="<?php echo get_field('banner_image_mobile'); ?>" class="mobile_img"> -->
		<div class="about_banner_text">
			<p><strong>Transforming <br> employee engagement <br> for over </strong> 60 business <br> units for this ‘fastest- <br>growing’ conglomerate</p>
		</div>
	</div>
</section>
<div class="row breadcrumbs">
	<a href="<?php echo site_url(); ?>">Home</a> / <b>Transforming employee…</b>
</div>
<section id="about3_secret">
	<div class="row ">
		
		<div class="col-md-6 col-sm-6 col-xs-12  casedetails">
			<p class="Engage"><strong>Overview</strong></p>
			<div class="abt_after_banner_left_desc"><p>This client is one of the largest and fastest-growing publicly-listed companies in Indonesia. The company is engaged in the business of trading sector of mining products and affiliated services, among others.</p>

			<p>With more than 60 business units, it is engaged in multiple lines of businesses ranging from coal production and trading to logistics, construction, renewable energy as well as financial, property management, investment, banking, insurance and fintech. The company was awarded “100 Fastest Growing Companies” for its ability to maintain sustainability and rapid growth.</p></div>
			<img src="<?php echo get_stylesheet_directory_uri();?>/images/coursedetailsimg.png">
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12 casedetails">
			<p class="Engage"><strong>Problem</strong></p>
			<div class="abt_after_banner_left_desc"><p>As the company continued to expand rapidly, it encountered difficulties, particularly collaborating more effectively, and monitoring its operations and performance more effectively.</p></div>

			<p class="Engage"><strong>Solution</strong></p>
			<div class="abt_after_banner_left_desc"><p>entomo helped the organisation measure employee performance through an online scorecard system. The objective is to allow each employee to view their performance via their laptop or a mobile phone, and track their progress and achievements as well as get a clear understanding their job expectations. Similarly, the app also allows greater engagement between the Company and its employees as they can broadcast announcements, instant notifications as well as corporate social videos and events to the employees.</p>

			<p>entomo further embarked on creating online dashboards and critical insights for the Senior Management team to monitor key leading indicators of performance and to facilitate real-time decision making on operational issues. All these have been made possible through the mobile phone.</p></div>

			<p class="Engage"><strong>Impact</strong></p>
			<div class="abt_after_banner_left_desc"><p class="abt_after_banner_left_desc">Since the implementation of the platform, the company has been able to reduce attrition from 7% to less than 3%, increase profitability by up to 8-10% annually, as well as reduce overhead costs by 10%.</p>

			<p class="impact"><strong>With proper monitoring on its operations, the Management were able to make more informed decisions as well as rewarding performing employees.</strong></p></div>
		</div>
	</div>
</section>
<div class="bottomborder"></div>
<div class="col-md-12 col-sm-12 col-xs-12" >
<!-- 	<div class="row breadcrumbs">
	<a href="<?php echo site_url(); ?>">Home</a> / Resources / <b>Success Stories</b>
	</div> -->
	<div class="democratized casestudy ">
		<div class="row12 case_sec">
			<div class="col-md-4 col-sm-4 col-xs-12 paddingbot centercase"><img  src="<?php echo get_stylesheet_directory_uri();?>/images/telecom.png"><p class="cases case1">Democratized insights, gamification for accelerated productivity for 24,000-plus employees</p><br><a class="know">Know more ></a></div>
			
			<div class="col-md-4 col-sm-4 col-xs-12 paddingbot centercase"><img  src="<?php echo get_stylesheet_directory_uri();?>/images/insurance.png"><p class="cases case1">Single view, seamlessly integrated performance solution for over 10,000 insurance agents</p><br><a class="know">Know more ></a></div>

			<div class="col-md-4 col-sm-4 col-xs-12 paddingbot centercase"><img   src="<?php echo get_stylesheet_directory_uri();?>/images/general.png"><p class="cases case1">Performance turnaround for over 21,000 registered agents with regular ‘coach-ins’</p><br><a class="know">Know more ></a></div>
		</div>
		
	</div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 ">
	<div class="backimg">
		<img class="desktop" src="<?php echo get_stylesheet_directory_uri();?>/images/evolving.png">
		<img class="mob" src="<?php echo get_stylesheet_directory_uri();?>/images/evolvemob.png">
	</div>
	
	<div class="container3a brings ">
		<p class="tomorrow"> Evolving enterprises of tomorrow<br><span class="today">What brings you here today?</span>
		</p>
	</div>
	<div class="container3">
		<div class="col-md-6 col-sm-6 col-xs-12 pull-left1">
			<span class="Engage1">Want to deliver automated<br> insights to my team</span><br><br>
			<a class="btn2">Let’s get started ></a>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12 pull-left1">
			<span class="Engage1">Need to transform performance<br> management system </span><br><br>
			<a class="btn2">Make the switch ></a>
		</div>
	</div>
</div>	




<?php get_footer(); ?>