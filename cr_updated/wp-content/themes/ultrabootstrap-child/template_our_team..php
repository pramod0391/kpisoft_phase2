<?php
/**
 * Template Name: Team Page 
 * The template used for displaying fullwidth page content in Team page
 *
 * @package ultrabootstrap
 */
get_header(); ?>
<style type="text/css">
	

</style>

<section id="about_banner">
	<div class="row" id="page_banner">
		<img src="<?php echo get_field('banner_image_desktop'); ?>" class="desktop_img">
		<img src="<?php echo get_field('banner_image_mobile'); ?>" class="mobile_img">
		<div class="about_banner_text">
			<?php echo get_field('banner_text'); ?>
			<div class="meet">
				<div class="abt_after_banner_left_desc our_team_text" ><?php echo get_field('banner_short_description'); ?></div>
			</div>
		</div>		
	</div>
</section>

<div class="row breadcrumbs">
	<a href="<?php echo site_url(); ?>">Home</a> / About / <b>Our Team</b>
</div>
<section id="team_gallery">
	<div class="row">
		<div class="col-md-12"><div class="location middle pl-0 glimpse_head">Our glimpses of energy</div></div>
		<div class="col-md-4 pl-0 gallery_col">
			<img class="team1" src="<?php echo get_stylesheet_directory_uri(); ?>/images/team1.png">
		</div>
		<div class="col-md-3 pl-0 gallery_col">
			<img class="pl-0 team2" src="<?php echo get_stylesheet_directory_uri(); ?>/images/team2.png">
			<img class="team2" src="<?php echo get_stylesheet_directory_uri(); ?>/images/team4.png">
		</div>
		<div class="col-md-5 pl-0 gallery_col">
			<img class="pl-0 team2" src="<?php echo get_stylesheet_directory_uri(); ?>/images/team3.png">
			<div class="row">
				<div class="col-md-5 pl-0">
				    	<img class="team2" src="<?php echo get_stylesheet_directory_uri(); ?>/images/team5.png">
				</div>
				<div class="col-md-7 pl-0 bottom_img">
					<img class="team2" src="<?php echo get_stylesheet_directory_uri(); ?>/images/team6.png">
				</div>
			</div>
		</div>
	</div>
</section>
<section class="Cocreating inspire">
	<div class="row  approch23">
		<div class="inspire1">
			<div class="col-md-12 insimg"><div class="solutionstxt middle paddingbot2 ">Co-creating true value</div></div>
			<div class="col-md-2 insimg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/speed.png"><div class="topspace2 solutionstxt1 creating_text">We thrive on speed  deliver promises
			on time</div></div>
			<div class="col-md-2 insimg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/passion.png"><div class="topspace2 solutionstxt1 creating_text">We have passion for excellence @
			global scale</div></div>
			<div class="col-md-2 insimg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cultivate.png"><div class="topspace2 solutionstxt1 creating_text">We cultivate  always
				act in high self-
			awareness</div></div>
			<div class="col-md-2 insimg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/care.png"><div class="topspace2 solutionstxt1 creating_text">We care for
			our people</div></div>
			<div class="col-md-2 insimg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/belive.png"><div class="topspace2 solutionstxt1 creating_text">We believe good leadership is the heart of our organisation</div></div>
			<div class="col-md-2 insimg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/critique.png"><div class="topspace2 solutionstxt1 creating_text">We critique self
				first  everything
			else next.</div></div>

			<div class="col-md-12 commitment-subtext insimg"><div class="topspace2 solutionstxt1 commitment-title">The importance of inclusion is key to triumph together.</div><div class="topspace2 solutionstxt1 commitment-para">Our&nbsp; commitment&nbsp;to the&nbsp;Women&nbsp;Empowerment Principles, anchored by UN&nbsp;Women&nbsp;and UN Global 	Compact,&nbsp;ensures good things come to all people, regardless of gender as well as race, colour, national origin, disability, age, genetic or medical history.</div></div>
		</div>

		
	</div>
</section>
<section id="team_gallery22">
	<div class="row inspire1 ">
		<div class="col-md-12 approch12 found_head">
			<div class="location  paddingbot2 ">
				<?php echo get_field('founding_team_section_heading'); ?>
			</div>
		</div>
		 <?php 
            if( have_rows('founding_team') ): ?>
            	<div class="row">
            	<?php
                    while( have_rows('founding_team') ) : the_row(); ?>
                    	<div class="col-md-4 col-sm-12 col-xs-12  paddingbot2">
							<div class="containerteam">
								<img src="<?php echo get_sub_field('founder_image');?>" class="imageteam">
								<div class="overlay">
									<div class="textteam ">
										<?php echo get_sub_field('about_founder');?>
										<!-- <p class="abt_after_banner_left_desc">Dr. Finian Tan founded Vickers Venture Partners in 2005 with four partners. He is currently based in Singapore.</p>

										<p class="abt_after_banner_left_desc">Before starting Vickers, Finian was a Managing Director at Draper Fisher Jurvetson. During his time there, he acted as the founding partner of its Asia Pacific Operations.</p>

										<p class="abt_after_banner_left_desc">Through this role, Dr. Finian discovered Baidu, and helped lead all the investment rounds into it, remaining its largest backer until its IPO. </p> -->
									</div>
								</div>
							</div>
							<div class="name contlocation1">
								<div class="text1 pull-left"><?php echo get_sub_field('founder_name');?><br><span ><?php echo get_sub_field('founder_designation');?></span></div>
								<span class="text3 pull-right">
									<a target="_blank" href="<?php echo get_sub_field('founder_profile_url');?>">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lcn_lln.png" class="imageteam">
									</a>
								</span>
							</div>
						</div>
					<?php endwhile;?>
                </div>
            <?php
            endif;
            ?>	
		<div class="row">
			<!-- <div class="col-md-4 col-sm-12 col-xs-12  paddingbot2">
				<div class="containerteam">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/finian.png" class="imageteam">
					<div class="overlay">
						<div class="textteam ">
							<p class="abt_after_banner_left_desc">Dr. Finian Tan founded Vickers Venture Partners in 2005 with four partners. He is currently based in Singapore.</p>

							<p class="abt_after_banner_left_desc">Before starting Vickers, Finian was a Managing Director at Draper Fisher Jurvetson. During his time there, he acted as the founding partner of its Asia Pacific Operations.</p>

							<p class="abt_after_banner_left_desc">Through this role, Dr. Finian discovered Baidu, and helped lead all the investment rounds into it, remaining its largest backer until its IPO. </p>
						</div>
					</div>
				</div>
				<div class="name contlocation1">
					<p class="text1 pull-left">Dr. Finian Tan<br><span >Chairman</span></p>
					<span class="text3 pull-right">
						<a href="https://www.linkedin.com/in/dr-finian-tan-58188888/">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lcn_lln.png" class="imageteam">
						</a>
					</span>
				</div>
			</div> -->
			<!-- <div class="col-md-4 col-sm-12 col-xs-12  paddingbot2">
				<div class="containerteam">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ravee.png" class="imageteam">
						<div class="overlay">
							<div class="textteam"><p class="abt_after_banner_left_desc">Having led performance improvement programs in number of multinationals and governments across the globe, Ravee is passionate about helping organizations perform better.</p>
								<p class="abt_after_banner_left_desc">His leadership career and deep research in the subject of performance management for the past two decades has shaped a revolutionary cloud app in the domain of business performance management, which is now emerging in the market via KPISOFT.</p></div>
						</div>
					</div>
					<div class="name contlocation1"><p class="text1 pull-left">Ravee Ramamoothie<br><span >Founder & Group CEO</span></p>
					<span class="text3 pull-right">
						<a href="https://www.linkedin.com/in/ravee-ramamoothie-3b756b24/">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lcn_lln.png" class="imageteam">
						</a>
					</span></div>
					
			</div> -->
			<!-- <div class="col-md-4 col-sm-12 col-xs-12  paddingbot2">
				<div class="containerteam">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/naveen.png" class="imageteam">
						<div class="overlay">
							<div class="textteam">
								<p class="abt_after_banner_left_desc">
							Technology and business development executive with strategic and tactical expertise in business intelligence, product and solution engineering, and client partnerships.</p>
								<p class="abt_after_banner_left_desc">In his multifaceted leadership role, Naveen contributes extensively to critical business decisions for KPISOFT as it scales and expands globally.</p></div>
						</div>
					</div>
					<div class="name contlocation1"><p class="text1 pull-left">Naveen Deshpande<br><span >Co Founder & Group COO</span></p>
					<span class="text3 pull-right">
						<a href="https://www.linkedin.com/in/pande85/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lcn_lln.png" class="imageteam"></a></span>
						</div>
			</div> -->
		</div>
		
	</div>
</section>
<section>
   <div class="col-md-12 col-sm-12 col-xs-12 ">
   <div class="backimg">
      <img class="desktop" src="<?php echo get_field('pre_footer_desktop_image'); ?>" alt="KPISOFT">
      <img class="mob" src="<?php echo get_field('pre_footer_mobile_image'); ?>" alt="KPISOFT">
   </div>
   
   <div class="container3a brings ">
      <div class="tomorrow"><?php echo get_field('pre_footer_section_heading',false,false); ?><br><span class="today"><?php echo get_field('pre_footer_section_description',false,false); ?></span>
      </div>
   </div>
   <div class="container3">      
      <div class="col-md-6 col-sm-6 col-xs-12 pull-left1">
         <span class="Engage1"><?php echo get_field('pre_footer_left_heading',false,false); ?></span><br><br>
         <a class="btn2" href="<?php echo get_field('pre_footer_left_cta_link'); ?>"><?php echo get_field('pre_footer_left_cta'); ?> <span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 pull-left1">
         <span class="Engage1"><?php echo get_field('pre_footer_right_heading',false,false); ?></span><br><br>
         <a class="btn2" href="<?php echo get_field('pre_footer_right_cta_link'); ?>"><?php echo get_field('pre_footer_right_cta'); ?> <span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>
   </div>
</div>
</section>
<?php get_footer(); ?>