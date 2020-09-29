<?php
/**
 * Template Name: Home Page 
 * The template used for displaying fullwidth page content in Home page
 *
 * @package ultrabootstrap
 */

get_header(); ?>
<div class="col-md-12 col-sm-12 col-xs-12" id="page_banner">
	<div class="backimg">
		<img class="desktop" src="<?php echo get_field('home_banner_image_desktop'); ?>" alt="Enterprise Performance Management Software">
		<img class="mob " src="<?php echo get_field('home_banner_image_mobile'); ?>">
	</div>
	<div class="col-md-8 col-sm-8 col-xs-8 align">
		<div class="container1 performanceleftimg">
		<div class="row1">
			<div class=" performancetextsol">
				<div class="banner_heading set">
					<?php echo get_field('home_banner_heading'); ?>
				</div>
				<div class="text3">
					<?php echo get_field('home_banner_description'); ?>
				</div>
					<a href="<?php echo get_field('home_banner_first_link_'); ?>" class="btn1"> 
						<?php echo get_field('home_banner_first_link_name'); ?> <span class="glyphicon glyphicon-chevron-right"></span></a>
					<a href="<?php echo get_field('home_banner_second_link_'); ?>" class="know desktop"> <?php echo get_field('home_banner_second_link__name'); ?><span class="glyphicon glyphicon-chevron-right"></span></a>
					<a href="<?php echo get_field('home_banner_second_link_'); ?>" class="know mob"><br> <?php echo get_field('home_banner_second_link__name'); ?><span class="glyphicon glyphicon-chevron-right"></span></a>	
			</div>
		</div>		
	</div>
	</div>
</div>

<div class="row_c"></div>

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

<div class="col-md-12 col-sm-12 col-xs-12 inspire desktop" >
	<div class="container1">
		<?php 
		$engage_sec_loop = 1;
		while( have_rows( 'home_purpose_engage_grid_section' ) ): the_row() ?>
			<div class="row marginbot <?php if($engage_sec_loop %2 == 0) echo "swap_alt"; ?>">
				<div class="col-md-6 col-sm-6 col-xs-12 inspireleft">
					<div class="backimg">
						<img class="mobbackimg" src="<?php echo get_sub_field('block_feature_background_iamge');?>">
					</div>
					<div class="frontimg">
						<img class="img1" src="<?php echo get_sub_field('block_feature_image');?>">
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 inspireleft">
					<img class="mobbackimg backimgwidth" src="<?php echo get_sub_field('block_feature_icon');?>">
					<div class="Engage"><?php echo get_sub_field('block_feature_title',false,false);?></div>
					<!-- <p class="purpose">Purpose</p> -->
					<hr>
					<?php echo get_sub_field('block_feature_description');?>
					<a href="<?php echo site_url(); ?>/products" class="know2">Know More <img class="mobbackimg backimgwidth" src="<?php echo get_stylesheet_directory_uri();?>/images/yellowarrow.png"></a>	
				</div>
			</div>
		<?php $engage_sec_loop++; endwhile; ?>
		<!-- <div class="row marginbot" >
			<div class="col-md-6 col-sm-6 col-xs-12 inspireleft">
				<div class="backimg"><img class="mobbackimg" src="<?php echo get_stylesheet_directory_uri();?>/images/angles.png"></div>
				<div class="frontimg"><img class="img1" src="<?php echo get_stylesheet_directory_uri();?>/images/mob1.png"></div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 inspireleft">
				<img class="mobbackimg backimgwidth" src="<?php echo get_stylesheet_directory_uri();?>/images/smallang.png">
				<p class="Engage">Engage with </p>
				<p class="purpose">Purpose</p>
				<hr>
				<ul>
					<li>Determine success for everyone in the organization with clarity of purpose</li>
					<li>Create a well-defined and aligned goals culture that is purpose-driven</li>
					<li>Combine purpose and goals to set the stage for continuous performance management</li>
				</ul>
				<a href="<?php echo site_url(); ?>/products" class="know2">Know More <img class="mobbackimg backimgwidth" src="<?php echo get_stylesheet_directory_uri();?>/images/yellowarrow.png"></a>	
			</div>
		</div> -->
		<!-- <div class="row marginbot" >
			<div class="col-md-6 col-sm-6 col-xs-12 inspireleft engage_with">
				<img class="mobbackimg backimgwidth" src="<?php echo get_stylesheet_directory_uri();?>/images/empoer_through_brightness.svg">
				<p class="Engage">Empower through </p>
				<p class="purpose">Insights</p>
				<hr>
				<ul class="purpose_list">
					<li>Give meaning to engagement with relevant context</li>
					<li>Provide context through hyper-personalized insights</li>
					<li>Use behavioral sciences to nudge people in the right direction</li>
					<li>Create a culture of continuous performance management</li>
				</ul>
				<a href="<?php echo site_url(); ?>/products" class="know2">Know More <img class="mobbackimg backimgwidth" src="<?php echo get_stylesheet_directory_uri();?>/images/yellowarrow.png"></a>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 inspireleft" >
				
				<div class="backimg">
					<img class="mobbackimg mobbackimg1" src="<?php echo get_stylesheet_directory_uri();?>/images/insight.png">
				</div>
				<div class="frontimg frontimg1">
					<img class="img1" src="<?php echo get_stylesheet_directory_uri();?>/images/mob2.png">
				</div>
			</div>
		</div> -->
		<!-- <div class="row marginbot1" >
			<div class="col-md-6 col-sm-6 col-xs-12 inspireleft inspireleft2" >		
				<div class="backimg"><img class="mobbackimg mobbackimg2" src="<?php echo get_stylesheet_directory_uri();?>/images/growth.png"></div>
				<div class="frontimg frontimg2"><img class="img1" src="<?php echo get_stylesheet_directory_uri();?>/images/mob3.png"></div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 inspireleft">
				<img class="mobbackimg backimgwidth " src="<?php echo get_stylesheet_directory_uri();?>/images/shpgrowth.png">
				<p class="Engage">Enable personal </p>
				<p class="purpose">Growth</p>
				<hr>
				<ul>
					<li>Empower people to perform, learn, and grow</li>
					<li>Invest in people to thrive and accelerate your organization’s growth</li>
					<li>Foster innovation and build the right capability to be future-ready</li>
				</ul>
				<a href="<?php echo site_url(); ?>/products" class="know2">Know More <img class="mobbackimg backimgwidth " src="<?php echo get_stylesheet_directory_uri();?>/images/yellowarrow.png"></a>
			</div>
		</div> -->
	</div>
</div>

<div class="row_c"></div>
<div class="col-md-12 col-sm-12 col-xs-12 inspire mob topproduct1" >
	<div class="container1 engage_sec1">
		<div class="marginbot row" >
			<div class="col-md-6 col-sm-6 col-xs-12 inspireleft" >
				<div class="row1 engage_sec">
					<div class="col-md-3 col-sm-3 col-x-3 insleft"><img class="backimgwidth" src="<?php echo get_stylesheet_directory_uri();?>/images/smallang.png"></div>
					<div class="col-md-3 col-sm-3 col-x-3"><div class="Engage">Engage with</div><div class="purpose">Purpose </div></div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 inspireleft" >
					<div class="frontimg"><img class="img1" src="<?php echo get_stylesheet_directory_uri();?>/images/mob1.png"></div>
				</div>
				
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 inspireleft">
				<ul>
					<li>Determine success for everyone in the organization with clarity of purpose</li>
					<li>Create a well-defined and aligned goals culture to be purpose-driven</li>
					<li>Combine purpose and goals - set the stage for continuous performance management</li>
					<a class="know2 pull-left">Know More <img class="mobbackimg backimgwidth" src="<?php echo get_stylesheet_directory_uri();?>/images/yellowarrow.png"></a>
				</ul>
			</div>
		</div>
		<div class="marginbot row">
			<div class="col-md-6 col-sm-6 col-xs-12 inspireleft  mobile_border mobile_top" >
				<div class="row1 engage_sec">
					<div class="col-md-3 col-sm-3 col-x-3 insleft"><img class="backimgwidth" src="<?php echo get_stylesheet_directory_uri();?>/images/smallang.png"></div>
					<div class="col-md-3 col-sm-3 col-x-3"><div class="Engage">Empower through </div><div class="purpose">Insights</div> </div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 inspireleft" >
					<div class="frontimg"><img class="img1" src="<?php echo get_stylesheet_directory_uri();?>/images/mob2.png"></div>
				</div>
			</div>
			
			<div class="col-md-6 col-sm-6 col-xs-12 inspireleft ">
				<ul>
					<li>Give meaning to engagement with relevant context</li>
					<li>Provide context through hyper-personalized insights</li>
					<li>Use behavioral sciences to nudge people in the right direction</li>
					<li>Create a culture of continuous performance management</li>
					<a href="<?php echo site_url(); ?>/products" class="know2 pull-left">Know More <img class="mobbackimg backimgwidth" src="<?php echo get_stylesheet_directory_uri();?>/images/yellowarrow.png"></a>
				</ul>
				
			</div>
			
		</div>
		<div class="marginbot row">
			<div class="col-md-6 col-sm-6 col-xs-12 inspireleft mobile_border mobile_top" >
				<div class="row1 engage_sec">
					<div class="col-md-3 col-sm-3 col-x-3 insleft"><img class="backimgwidth" src="<?php echo get_stylesheet_directory_uri();?>/images/shpgrowth.png"></div>
					<div class="col-md-3 col-sm-3 col-x-3"><div class="Engage">Enable personal</div><div class="purpose">Growth</div> </div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 inspireleft" >
				<div class="frontimg"><img class="img1" src="<?php echo get_stylesheet_directory_uri();?>/images/mob3.png"></div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 inspireleft">
			
				<ul>
					<li>Empower people to perform, learn, and grow</li>
					<li>Invest in people to thrive and accelerate your organization’s growth</li>
					<li>Foster innovation and build the right capability to be future-ready</li>
					<a href="<?php echo site_url(); ?>/products" class="know2 pull-left">Know More <img class="mobbackimg backimgwidth" src="<?php echo get_stylesheet_directory_uri();?>/images/yellowarrow.png"></a>
				</ul>
			</div>
		</div>
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
		<!-- <div class="single_testimonial">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mukesh.png" align="Testimonial Image">
			<p class="testimonial_name">Mukesh Dhawan</p>
			<p class="testimonial_des">CEO, Zurich Malaysia</p>
			<div class="testimonial_description">
				“We’re beating the market quarter on quarter. KPISOFT has taken us to the next level of engagement with a substantial increase in the number of active agents and revenue.”
			</div>
		</div> -->
		<!-- <div class="single_testimonial">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dumansi.png" align="Testimonial Image">
			<p class="testimonial_name">Dumasi M M Samosir</p>
			<p class="testimonial_des">Director at PT. Asuransi Sinarmas</p>
			<div class="testimonial_description">
				“Data is now accessible to every person across the organization – even to the lowest level. This is the beauty of ‘democratization of data.’ Our agency team achieved 31% growth in terms of gross return premium with KPISOFT.”
			</div>
		</div> -->
		<!-- <div class="single_testimonial">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mochtar.png" align="Testimonial Image">
			<p class="testimonial_name">Mochtar Suhadi</p>
			<p class="testimonial_des">Chief Organization & Development Officer,<br>Sinarmas Mining</p>
			<div class="testimonial_description">
				“The daily feed of key insights and intuitive dashboards at our fingertips has greatly improved our decision making process, our performance and made us more efficient.”
			</div>
		</div> -->
		<!-- <div class="single_testimonial">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Nasri.png" align="Testimonial Image">
			<p class="testimonial_name">Nasri Mohamed</p>
			<p class="testimonial_des">Ex Vice President, Telekom Malaysia</p>
			<div class="testimonial_description">
				“KPISOFT enabled a 31% productivity increase for our 7000 plus front-liners with a cost reduction of 14%, placing TM in the top quartile of telcos globally.”
			</div>
		</div> -->
	</div>	
</section>

<section id="download_report">
<div class="col-md-12 col-sm-12 col-xs-12 evol " >
	<div class="backimg">
		<img class="desktop"  src="<?php echo get_stylesheet_directory_uri();?>/images/economic.png">
		<img class="mob heightimg"  src="<?php echo get_stylesheet_directory_uri();?>/images/reportmob.png">
	</div>
	<div class="container3a download_sec">
		<div class="row">
			<div class="kpisof"><?php echo get_field('home_whitepaper_section_heading',false,false); ?></div>
			<?php 
			$wp_loop = 1;
			$whitepaper_id = get_field('home_select_whitepaper');
				foreach ($whitepaper_id as $value) { ?>
					<div class="col-md-6 col-sm-6 col-xs-12 <?php if($wp_loop == '1') echo 'left'; else echo 'right'; ?> ecnomic_sec1">
						<div class="first" >
							<img class="image1" src="<?php echo get_the_post_thumbnail_url($value); ?>">
							<div class="r_cs_text_wrapper">  
								<div class="sec"><?php echo get_the_title($value); ?><br><br>
									<a target="_blank" data-toggle="modal" data-target="#download-pop" data-href="<?php echo get_field('whitepaper_pdf',$value); ?>" class="download_wp know download_link"> Download the report  <img src="<?php echo get_stylesheet_directory_uri();?>/images/downloadarrow.png"></a>
								</div>
							</div>
						</div>
					</div>

				<?php $wp_loop++;	
				}
			?>
			<!-- <div class="col-md-6 col-sm-6 col-xs-12 left ecnomic_sec1">
				<div class="first" >
					<img class="image1" src="<?php echo get_stylesheet_directory_uri();?>/images/report1.png">
					<p class="sec">Fortune 500 insurer sees up to 32.8% increase in annual insurance premiums in a 3-year period.
					<br><br><a target="_blank" href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/TEI Case Study - Fortune 500 Insurer.pdf" class="know download_link"> Download the report  <img src="<?php echo get_stylesheet_directory_uri();?>/images/downloadarrow.png"></a>
					</p>
				</div>
			</div> -->

			<!-- <div class="col-md-6 col-sm-6 col-xs-12 right ecnomic_sec2">
				<div class="first" >
					<img class="image1" src="<?php echo get_stylesheet_directory_uri();?>/images/inspiration2.png">
					<p class="sec">Large government entity reaps benefits of over $26.8 million and ROI of 103% in a 3-year period.
					<br><br><a target="_blank" href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/TEI Case Study - Government Entity.pdf" class="know download_link"> Download the report  <img src="<?php echo get_stylesheet_directory_uri();?>/images/downloadarrow.png"></a>
					</p>
				</div>
				
			</div> -->

			<!-- <div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12  ">
					<p class="text kpisoftext">*KPISOFT is now rebranded as entomo</p>
				</div>
			</div> -->
		</div>
		<!-- <div class="row kpisoftext">
			<div class="col-md-12 col-sm-12 col-xs-12  ">
				<p class="rebrand">*KPISOFT is now rebranded as entomo</p>
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

<section>
	<div class="modal" id="download-pop">
	    <div class="modal-dialog">
	      <div class="modal-content">
	        <div class="modal-header">
	          <h4 class="modal-title">Fill your details here to download</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        <div class="modal-body">
	          	<div class="whitepaper_download_form">
	          		<!--[if lte IE 8]>
	          			<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
	          		<![endif]-->
	          		<!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
	          		<script>
	          		  	hbspt.forms.create({
	          		    	portalId: "1750400",
	          		    	formId: "f5d6e574-8805-44d7-a619-147200264d9c"
	          			});
	          		</script> -->
	          		<?php echo do_shortcode('[contact-form-7 id="1629" title="WhitePaper Download"]'); ?>
	          	</div>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
</section>
			
<?php get_footer(); ?>