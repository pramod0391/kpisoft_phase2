<?php
/**
 * Template Name: Solutions Details Page 
 * The template used for displaying fullwidth page content in Solutions Details page
 *
 * @package ultrabootstrap
 */

get_header(); ?>
<section id="about_banner">
	<div class="row" id="page_banner">
		<?php $mobile_banner =  get_field('banner_image_mobile'); ?>
		<img src="<?php echo get_field('banner_image_desktop'); ?>" class="<?php if($mobile_banner)?>desktop_img">
		<?php if($mobile_banner) ?>
		<img src="<?php echo get_field('banner_image_mobile'); ?>" class="mobile_img">

		<div class="solution_banner_text">
			<?php echo get_field('banner_text',false,false); ?>
			<?php $banner_cta = get_field('banner_cta'); 
			if($banner_cta){ ?>
				<div class="sol-btn">
					<a href="<?php echo get_field('banner_cta_link'); ?>"><?php echo $banner_cta; ?>&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
			<?php
			}
			?>
		</div>	
	</div>
</section>
<section id="solution_breadcrumb">
	<div class="row breadcrumbs_sec">
	<a href="<?php echo site_url(); ?>">Home</a> / <a href="<?php echo get_the_permalink($post->post_parent); ?>"><?php echo get_the_title($post->post_parent); ?></a> / <b><?php echo get_the_title(); ?></b>
</div>
</section>
<section id="remote_team">
	<div class="row remote_team_sec">
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="remote_img_wrap">
				<img src="<?php echo get_field('solution_details_after_banner_left_image'); ?>" alt="kpisoft">
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="remote_details_wrap">
				<div class="remote_details_heading">
					<?php echo get_field('solution_details_after_banner_right_heading',false,false); ?>
				</div>
				<div class="remote_details_description">
					<?php echo get_field('solution_details_after_banner_right_description'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom_right_img">
		<img src="<?php echo get_stylesheet_directory_uri();?>/images/Quarter_Circle.png">
	</div>
</section>
<section id="remote_adv">
	<div class="row remote_adv_sec">
		<?php while( have_rows( 'solution_details_advantages' ) ): the_row() ?>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<div class="remote_adv_desc">
					<div class="adv_icon_wrap">
						<div class="adv_icon"></div>
					</div>
					<div class="remote_adv_heading">
						<?php echo get_sub_field('solution_details_advantage_heading',false,false);?>
					</div>
					<div class="remote_adv_description">
						<?php echo get_sub_field('solution_details_advantage_description');?>
					</div>					
				</div>
			</div>
		<?php endwhile; ?>
	</div>
</section>
<section id="solution_goals">
	<?php 
	$solution_loop = 1;
	while( have_rows( 'solutions_section_4' ) ): the_row() ?>
		<div class="row goals_sec <?php if($solution_loop %2 == 0) echo "swap_alt"; ?>">
			<div class="col-sm-6 col-xs-12 col-md-6">
				<div class="performance_details">
					<div class="golas_title">
						<?php echo get_sub_field('solutions_section_4_title');?>
					</div>
					<div class="golas_desc">
						<?php echo get_sub_field('solutions_section_4_description');?>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12 col-md-6">
				<div class="performance_img_wrap">
					<img src="<?php echo get_sub_field('solutions_section_4_image');?>">
				</div>
			</div>
		</div>
	<?php $solution_loop++; endwhile; ?>	
</section>

<section id="Team_work">
	<img src="<?php echo get_field('solutions_details_section_5_background_image') ?>" alt="KPISoft">
	<div class="team_work_sec">
		<div class="team_work_heading">
			<?php echo get_field('solutions_details_section_5_heading',false,false) ?>
		</div>
		<div class="team_work_description">
			<?php echo get_field('solutions_details_section_5_description',false,false) ?>
		</div>
		<button>
			<a href="<?php echo get_field('solutions_details_section_5_cta_link'); ?>">
				<?php echo get_field('solutions_details_section_5_cta'); ?>&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</button>	
	</div>
</section>

<section>
	<div class="col-md-12 col-sm-12 col-xs-12 evol">	
        <div class="backimg background_margin">		
            <img class="desktop margin_image"  src="<?php echo get_stylesheet_directory_uri();?>/images/economic.png">		
            <img class="mob heightimg"  src="<?php echo get_stylesheet_directory_uri();?>/images/reportmob.png">	
        </div>	
        <div class="container3a">		
            <div class="row">			
                <p class="Looking solution_detail_ins"><?php echo get_field('solution_casestudy_section_heading',false,false); ?></p>			
                <p class="Look disnone"><?php echo get_field('solution_casestudy_section_description',false,false); ?></p>	
                <?php   
                $wp_loop = 1;                  
                $cs_id = get_field('solution_select_casestudy');
                    foreach ($cs_id as $value) { ?>
                        <div class="col-md-6 col-sm-6 col-xs-12 <?php if($wp_loop == '1') echo 'left'; else echo 'right'; ?> ecnomic_sec1">
                            <div class="first experience_margin">
                                <img class="image1" src="<?php echo get_the_post_thumbnail_url($value); ?>">
                                <div class="r_cs_text_wrapper">  
                                    <p class="sec sol_yellow_bg"><?php echo get_the_title($value); ?>
                                    <br><br><a href="<?php echo get_the_permalink($value); ?>" class="Get"> Get the full story<span class="glyphicon glyphicon-chevron-right"></span></a> 
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php $wp_loop++;
                    }
                ?>
            </div>			
        </div>
    </div>
</section>

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
					<div class="solutionstxt set">						
						<p><?php echo get_field('pre_footer_section_heading',false,false); ?></p>					
					</div>					
					<div class="solutionstxt2">
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
