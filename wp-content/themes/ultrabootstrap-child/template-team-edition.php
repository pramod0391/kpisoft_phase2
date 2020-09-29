<?php
/**
 * Template Name: Team Edition Page 
 * The template used for displaying fullwidth page content in Team Edition page
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
	<a href="<?php echo site_url(); ?>">Home</a> / <a href="<?php echo site_url(); ?>/about-us">Products</a> / <b>Pre-Configured Editions</b>
</div>

<div class="row_c"></div>

<section id="team_edition_packs">
	<div class="row edition_packs_row">
		<div class="col-md-2 col-sm-2 col-xs-12 packs_col pl-0 desktop">
			<div class="single_col">
				<div class="packs_heading">Packs</div>

				<div class="plan_type"><b>STARTER</b> <br>Up to 18 Users</div>
				<div class="plan_type"><b>TEAM</b> <br>19 to 100 users</div>
				<div class="plan_type"><b>ENTERPRISE</b> <br>Above 100 users</div>

				<div class="features_verticle">Features</div>
			</div>
		</div>
		<div class="edition_slick">
			<div class="col-md-3 col-sm-3 col-xs-12 performance_col">
				<div class="single_col">
					<div class="packs_main_heading">Everyday Performance</div>
					<div class="packs_data">
						<div class="mobile_sh plan_type"><b>STARTER</b> <br>Up to 18 Users</div>
						<div class="plan_amt_wrap">
							<span><b class="plan_amt">$180</b>/month</span> <a href="https://ind01.safelinks.protection.outlook.com/?url=https%3A%2F%2Fdigital.kpisoft.com%2Fdigital-account%2F%23%2Fregister%3FplanId%3DP-37254136DP8012510L4P57IA&data=02%7C01%7Crimin.dutt%40kpisoft.com%7C89f36bd2dbd54c7941d908d833b2dfc1%7C4e7fc100a3ca4172939429dbfec53920%7C0%7C0%7C637316190630685045&sdata=lXkC5E6SM5%2BvftVCpsJzqzG4aTKuqTC2OWB8IpdsT9Y%3D&reserved=0" target="_blank"><button>Get started</button></a>
						</div>
					</div>
					<div class="packs_data">
						<div class="mobile_sh plan_type"><b>TEAM</b> <br>Up to 100 users</div>
						<div class="plan_amt_wrap">
							<span><b class="plan_amt">$10</b>PUPM*</span> <a href="https://ind01.safelinks.protection.outlook.com/?url=https%3A%2F%2Fdigital.kpisoft.com%2Fdigital-account%2F%23%2Fregister%3FplanId%3DP-37254136DP8012510L4P57IA&data=02%7C01%7Crimin.dutt%40kpisoft.com%7C89f36bd2dbd54c7941d908d833b2dfc1%7C4e7fc100a3ca4172939429dbfec53920%7C0%7C0%7C637316190630685045&sdata=lXkC5E6SM5%2BvftVCpsJzqzG4aTKuqTC2OWB8IpdsT9Y%3D&reserved=0" target="_blank"><button>Get started</button></a>
						</div>
					</div>
					<div class="pack_call_us">
						<div class="mobile_sh plan_type"><b>ENTERPRISE</b> <br>Above 100 users</div>
						<div class="plan_amt_wrap">
							<!-- <i class="fa fa-phone" aria-hidden="true"></i>  --><a href="<?php echo site_url(); ?>/request-demo">Talk to Us</a>
						</div>
					</div>
					<div class="plan_all_options">
						<ul>
							<li>Strategy Map <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									Deploy tailor-made strategy maps, built around the balanced scorecard methodology, to get a consolidated view of your roadmap on a single page. Armed with the right insights, give your team a big picture perspective, and prioritize their tasks to seamlessly align with your business objectives.
								</div>
							</li>

							<li>Performance Programs <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									Set up your custom performance program to align with Organization's objective and directions and empower employees to align their goals with the organizational objectives with Intelligent Automated Alignment Engine
								</div>
							</li>

							<li>Objective Key Results <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									Set clear objectives to enhance agility in the organization and empower employees to align their goals with the organizational objectives. This module also comes with a KPI library to accelerate the KPI definition process and allows employees as well as managers to measure performance against the defined targets.
								</div>
							</li>

							<li>Key Performance Indicator <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									Set clear objectives to enhance agility in the organization and empower employees to align their goals with the organizational objectives. This module also comes with a KPI library to accelerate the KPI definition process and allows employees as well as managers to measure performance against the defined targets.
								</div>
							</li>

							<li>360<sup>0</sup> Feedback <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									Capture feedback from your managers, peers, subordinates, and customers for a single-pane view of every employee’s performance, skills, and behavior. Then analyze the feedback and share insights with employees to accelerate their personal development.
								</div>
							</li>

							<li>Employee Scorecards <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									Track every KPI, milestone, target, achievement, and competition status with an easily accessible, visually appealing scorecard. Proactively identify and predict where employees may need additional support. Enable managers to ensure the team is on track throughout the review cycle and nudge them to meet their targets.
								</div>
							</li>

							<li>Ratings and Calibration <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									Improve employee performance assessments and standardize rating scores across the organization using our unique performance calibration methodology. And take things a step further, with comparative analyses of employee strengths and weaknesses, to better align their goals with yours.
								</div>
							</li>

							<li>Employee Hub <i class="fa fa-info-circle" aria-hidden="true" ></i>
								<div class="tooltip_info">
									Help your employees plan their tasks and meet their goals while keeping them familiarized with evolving project details. By categorizing information into informational and actionable data, the easy-to-use Employee Hub makes for more organized employees.
								</div>
							</li>

							<li>Announcements <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									Maintain a strategic record of one-on-one conversations between managers and team members to better track individual needs, performance, and progress.
								</div>
							</li>

							<!-- <li>Check In <i class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" title="Info" data-placement="right"></i></li>

							<li>Call In <i class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" title="Info" data-placement="right"></i></li>

							<li>Meet In <i class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" title="Info" data-placement="right"></i></li>

							<li>Coach in <i class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" title="Info" data-placement="right"></i></li>

							<li>Task Management <i class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" title="Info" data-placement="right"></i></li>

							<li>Dashboards <i class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" title="Info" data-placement="right"></i></li>

							<li>Insights and Nudges <i class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" title="Info" data-placement="right"></i></li>

							<li>Missions <i class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" title="Info" data-placement="right"></i></li> -->
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-3 col-xs-12 insights_col">
				<div class="single_col">
					<div class="packs_main_heading">Everyday Insights</div>
					<div class="packs_data">
						<div class="mobile_sh plan_type"><b>STARTER</b> <br>Up to 18 Users</div>
						<div class="plan_amt_wrap">
							<span><b class="plan_amt">$180</b>/month</span> <a href="https://ind01.safelinks.protection.outlook.com/?url=https%3A%2F%2Fdigital.kpisoft.com%2Fdigital-account%2F%23%2Fregister%3FplanId%3DP-6SY504392M286134GL4P64PQ&data=02%7C01%7Crimin.dutt%40kpisoft.com%7C89f36bd2dbd54c7941d908d833b2dfc1%7C4e7fc100a3ca4172939429dbfec53920%7C0%7C0%7C637316190630685045&sdata=j%2BhZ4LcpQGiXqE0he5Dh57oRggTS9TqX0s0OtFl6SSM%3D&reserved=0" target="_blank"><button>Get started</button></a>
						</div>
					</div>
					<div class="packs_data">
						<div class="mobile_sh plan_type"><b>TEAM</b> <br>19 to 100 Users</div>
						<div class="plan_amt_wrap">
							<span><b class="plan_amt">$10</b>PUPM*</span> <a href="https://ind01.safelinks.protection.outlook.com/?url=https%3A%2F%2Fdigital.kpisoft.com%2Fdigital-account%2F%23%2Fregister%3FplanId%3DP-6SY504392M286134GL4P64PQ&data=02%7C01%7Crimin.dutt%40kpisoft.com%7C89f36bd2dbd54c7941d908d833b2dfc1%7C4e7fc100a3ca4172939429dbfec53920%7C0%7C0%7C637316190630685045&sdata=j%2BhZ4LcpQGiXqE0he5Dh57oRggTS9TqX0s0OtFl6SSM%3D&reserved=0" target="_blank"><button>Get started</button></a>
						</div>
					</div>
					<div class="pack_call_us">
						<div class="mobile_sh plan_type"><b>ENTERPRISE</b> <br>Above 100 Users</div>
						<div class="plan_amt_wrap">
							<!-- <i class="fa fa-phone" aria-hidden="true"></i> --> <a href="<?php echo site_url(); ?>/request-demo">Talk to Us</a>
						</div>
					</div>
					<div class="plan_all_options">
						<ul>
							<li>Dashboards <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									<p>Our unified display connects the disconnected data sets between different functions to create a single concise view</p>
									<p>Access near-time information with the Dashboards which are linked to a data source which gets constantly updated</p>
									<p>Understand the dynamism of business data with access from coarse grained view of data (high-level view) to fine grained view (low level view)</p>
								</div>
							</li>

							<li>Out-of-the-box visualizations, themes, and personalization options <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									<p>Your BI visuals just got better with our creative visualizations, themes, and personalization options</p>
									<p>Create diverse types of visualizations under one single dashboard or multiple dashboards with the same data source</p>
								</div>
							</li>

							<li>Insight based Task Creation <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									<p>Are you tired of manually comparing and analyzing the status of any project ? Our BI enabled system automates the efforts and minimize the burden.</p>
									<p>Increase Your Customer Confidence and Trust by managing and tracking each business activity and prompt sharing of reports</p>
								</div>
							</li>

							<li>Prescriptive Insights delivery <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									<p>We use evidence-based data to empower you in making the best decisions, enriching intuition with information and translating it into insight</p>
									<p>We use our self-service statistical modelling engine to institutionalize the application of data science and research capability with zero dependency on data scientist</p>
									<p>We democratize access, availability affordability and ability to act on recommendations</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12 premium_col">
				<div class="single_col">
					<div class="packs_main_heading">Everyday Performance - Premium</div>
					<div class="packs_data">
						<div class="mobile_sh plan_type"><b>STARTER</b> <br>Up to 18 Users</div>
						<div class="plan_amt_wrap">
							<span><b class="plan_amt">$360</b>/month</span> <a href="https://ind01.safelinks.protection.outlook.com/?url=https%3A%2F%2Fdigital.kpisoft.com%2Fdigital-account%2F%23%2Fregister%3FplanId%3DP-0SL50273UD4562347L4P647I&data=02%7C01%7Crimin.dutt%40kpisoft.com%7C89f36bd2dbd54c7941d908d833b2dfc1%7C4e7fc100a3ca4172939429dbfec53920%7C0%7C0%7C637316190630695033&sdata=n3Pfv4ot265PrtoWxczbjtquS3FgSpo0%2BsyLq5G9BOA%3D&reserved=0" target="_blank"><button>Get started</button></a>
						</div>
					</div>
					<div class="packs_data">
						<div class="mobile_sh plan_type"><b>TEAM</b> <br>19 to 100 Users</div>
						<div class="plan_amt_wrap">
							<span><b class="plan_amt">$20</b>PUPM*</span> <a href="https://ind01.safelinks.protection.outlook.com/?url=https%3A%2F%2Fdigital.kpisoft.com%2Fdigital-account%2F%23%2Fregister%3FplanId%3DP-0SL50273UD4562347L4P647I&data=02%7C01%7Crimin.dutt%40kpisoft.com%7C89f36bd2dbd54c7941d908d833b2dfc1%7C4e7fc100a3ca4172939429dbfec53920%7C0%7C0%7C637316190630695033&sdata=n3Pfv4ot265PrtoWxczbjtquS3FgSpo0%2BsyLq5G9BOA%3D&reserved=0" target="_blank"><button>Get started</button></a>
						</div>
					</div>
					<div class="pack_call_us">
						<div class="mobile_sh plan_type"><b>ENTERPRISE</b> <br>Above 100 Users</div>
						<div class="plan_amt_wrap">
							<!-- <i class="fa fa-phone" aria-hidden="true"></i> --> <a href="<?php echo site_url(); ?>/request-demo">Talk to Us</a>
						</div>
					</div>
					<div class="plan_all_options">
						<ul>
							<li>Strategy Map <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									Deploy tailor-made strategy maps, built around the balanced scorecard methodology, to get a consolidated view of your roadmap on a single page. Armed with the right insights, give your team a big picture perspective, and prioritize their tasks to seamlessly align with your business objectives.
								</div>
							</li>

							<li>Performance Programs <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									Set up your custom performance program to align with Organization's objective and directions and empower employees to align their goals with the organizational objectives with Intelligent Automated Alignment Engine
								</div>
							</li>

							<li>Objective Key Results <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									Set clear objectives to enhance agility in the organization and empower employees to align their goals with the organizational objectives. This module also comes with a KPI library to accelerate the KPI definition process and allows employees as well as managers to measure performance against the defined targets.
								</div>
							</li>

							<li>Key Performance Indicator <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									Set clear objectives to enhance agility in the organization and empower employees to align their goals with the organizational objectives. This module also comes with a KPI library to accelerate the KPI definition process and allows employees as well as managers to measure performance against the defined targets.
								</div>
							</li>

							<li>360<sup>0</sup> Feedback <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									Capture feedback from your managers, peers, subordinates, and customers for a single-pane view of every employee’s performance, skills, and behavior. Then analyze the feedback and share insights with employees to accelerate their personal development.
								</div>
							</li>

							<li>Employee Scorecards <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									Track every KPI, milestone, target, achievement, and competition status with an easily accessible, visually appealing scorecard. Proactively identify and predict where employees may need additional support. Enable managers to ensure the team is on track throughout the review cycle and nudge them to meet their targets.
								</div>
							</li>

							<li>Ratings and Calibration <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									Improve employee performance assessments and standardize rating scores across the organization using our unique performance calibration methodology. And take things a step further, with comparative analyses of employee strengths and weaknesses, to better align their goals with yours.
								</div>
							</li>

							<li>Employee Hub <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									Help your employees plan their tasks and meet their goals while keeping them familiarized with evolving project details. By categorizing information into informational and actionable data, the easy-to-use Employee Hub makes for more organized employees.
								</div>
							</li>

							<li>Announcements <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									Help your employees plan their tasks and meet their goals while keeping them familiarized with evolving project details. By categorizing information into informational and actionable data, the easy-to-use Employee Hub makes for more organized employees.
								</div>
							</li>

							<li>Check In <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									Maintain a strategic record of one-on-one conversations between managers and team members to better track individual needs, performance, and progress.
								</div>
							</li>

							<li>Call In <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									Enable your teams to do quick call Ins directly from the system  to connect faster with your best customers, and maintain record for future conversations 
								</div>
							</li>

							<li>Meet In <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									Formulate new sales strategies and realign existing ones, with a record of all leads and sales efforts on a single platform. Once you’ve optimized your plan, leverage our in-app, direct lead-calling features to connect faster with your best customers.
								</div>
							</li>

							<li>Coach in <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									Enable managers to coach employees in their span or in different teams on various topics including projects they are working on, and record conversations in the tool.
								</div>
							</li>

							<li>Task Management <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									Help your employees plan their tasks aligned to KPIs and meet their goals while keeping them familiarized with evolving project details. Allow managers to rate employees on task completions and nudge them for faster action 
								</div>
							</li>

							<li>Dashboards <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									<p>Our unified display connects the disconnected data sets between different functions to create a single concise view</p>
									<p>Access near-time information with the Dashboards which are linked to a data source which gets constantly updated
									</p>
									<p>Understand the dynamism of business data with access from coarse grained view of data (high-level view) to fine grained view (low level view)</p>
								</div>
							</li>

							<li>Insights and Nudges <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									<p>Are you tired of manually comparing and analyzing the status of any project ? Our BI enabled system automates the efforts and minimize the burden.</p>
									<p>Increase Your Customer Confidence and Trust by managing and tracking each business activity and prompt sharing of reports</p>
								</div>
							</li>

							<li>Missions <i class="fa fa-info-circle" aria-hidden="true"></i>
								<div class="tooltip_info">
									Bring your teams together to work on a common goal. Enhance collaboration with the ability to create mission, stages and assigned tasks to your teams.
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row edition_packs_row connector_wrap desktop">
		<div class="col-md-2 col-sm-2 col-xs-12 con_col pl-0">
			<div class="connectors_col">
				Connectors
			</div>
		</div>
		<div class="col-md-9 col-sm-10 col-xs-12 jira_col pl-0">
			<div class="jira_sale_force_wrap">
				<img class="jira_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/jira.png">
				<img class="sales_force_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sales_force.png">
			</div>
		</div>
	</div>
	<div class="row edition_packs_row text-right packs_conditions">
		<div class="col-md-11 col-sm-12 col-xs-12">
			*PUPM- Per user per month
		</div>
	</div>
</section>

<div class="col-md-12 col-sm-12 col-xs-12 slider_sec" >	
	<div class=" txtcent"><?php echo get_field('customer_logos_section_heading'); ?></div>
	<div class="row images logo_slide">
		<?php 	if( have_rows('customer_logos') ):
                    while( have_rows('customer_logos') ) : the_row(); ?>
						<div class="single_logo">
							<img src="<?php echo get_sub_field('customer_logo'); ?>" alt="Customer Logo">
						</div>
		<?php 		endwhile; 
				endif;
		?>
	</div>
</div>

<div class="row_c"></div>

<section id="home_testimonial">
	<?php $testimonials_section_heading = get_field('testimonials_section_heading'); 
	if($testimonials_section_heading){ ?>
		<h2 class="text-center"><?php echo $testimonials_section_heading; ?></h2>
	<?php
	}
	?>
	<div class="row home_testimonial_slider">
		<?php 
		$testimonial_id = get_field('select_testimonials');
		foreach ($testimonial_id as $t_value) { ?>
			<div class="single_testimonial">
				<img src="<?php echo get_the_post_thumbnail_url($t_value); ?>" align="Testimonial Image">
				<p class="testimonial_name"><?php echo get_the_title($t_value); ?></p>
				<p class="testimonial_des"><?php echo get_the_excerpt($t_value); ?></p>
				<div class="testimonial_description">
					<?php echo  get_post_field('post_content', $t_value); ?>
				</div>
			</div>
		<?php			
		}
		?>
	</div>	
</section>

<div class="row productmulti" id="team_edition">	
	<div class="container1">
		<div class="row12">
			<?php
			while( have_rows('platform_product_options') ) : the_row(); ?>
				<div class=" col-md-4 col-sm-4 col-xs-12 topspace3">
					<div class="multi_para"><?php echo get_sub_field('platform_product_title',false,false); ?></div>
					<?php $product_desc =  get_sub_field('platform_product_description',false,false);
					if($product_desc){ ?>
						<div class="contlocation"><?php echo $product_desc; ?></div>
					<?php
					}
					?>
				</div>	
			<?php endwhile; ?>
		</div>
	</div>    
</div>

<div class="row_c">

<div class="row pro_book_demo" style="max-width: 100%;margin-top: 0;">	
	<div class="backimg">		
		<img class="desktop" src="<?php echo get_field('pre_footer_image');?>">		
		<img class="mob " src="<?php echo get_stylesheet_directory_uri();?>/images/ladymob.png"> 	
	</div>	
	<div class="col-md-12 col-sm-12 col-xs-12 align2">		
		<div class="container3a performanceleftimg">			
			<div class="row1">				
				<div class="kpisof Middle  align_center">					
					<div class="solutionstxt set paddingbot">						
						<p><?php echo get_field('pre_footer_section_heading',false,false); ?></p>					
					</div>					
					<div class="solutionstxt2  ">
						<p><?php echo get_field('pre_footer_left_heading',false,false); ?></p>
						<a href="<?php echo get_field('pre_footer_left_cta_link'); ?>" class="btn3 align_center"><?php echo get_field('pre_footer_left_cta',false,false); ?>
							<img src="<?php echo get_stylesheet_directory_uri();?>/images/blackarrow.png">
						</a>
					</div>
				</div>			
			</div>		
		</div>	
	</div>
</div>
<?php get_footer(); ?>
