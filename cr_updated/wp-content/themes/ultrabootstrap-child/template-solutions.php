<?php
/**
 * Template Name: Solutions Page 
 * The template used for displaying fullwidth page content in Solutions page
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
	<a href="<?php echo site_url(); ?>">Home</a> / <b>Solutions</b>
</div>

<div class="row perfomance_mgmt">			
	<div class="col-md-6 col-sm-6 col-xs-12 ">				
		<div class="location"><?php echo get_field('solutions_after_banner_heading',false,false); ?></div>				
		<div class="believe1"><?php echo get_field('solutions_after_banner_description',false,false); ?></div>			
	</div>			
	<div class="col-md-6 col-sm-6 col-xs-12 approach">
        <img class="desktop" src="<?php echo get_field('solutions_after_banner_image'); ?>">
        <img class="mob"  src="<?php echo get_field('solutions_after_banner_image_mobile'); ?>">			
    </div>		
</div>	
<!-- </div>
</div> -->
<div class="col-md-12 col-sm-12 col-xs-12 inspire" >	
        <div class="container1 approch solution_sec">		
            <div class="row">			
                <div class="col-md-12 col-sm-12 col-sm-12">
                    <div class="solutionstxt paddingbot"><?php echo get_field('solutions_section_heading',false,false); ?></div>
                </div>
                <?php 
                if( have_rows('solution_tumbnail_grid') ):
                    while( have_rows('solution_tumbnail_grid') ) : the_row(); ?>
                        <div class="col-md-3 col-sm-3 col-xs-12  paddingbot">               
                            <img class="imgwid"  src="<?php echo get_sub_field('solution_thumbnail_image');?>">             
                            <div class="topspace solutionstxthead"><?php echo get_sub_field('solution_heading',false,false); ?></div>
<!--                             <hr>
                            <div class="topspace2 solutionstxt1"><?php echo get_sub_field('solution_description',false,false); ?></div> -->
							<?php $page_link = get_sub_field('page_link'); ?>
                            <a href="<?php echo get_permalink($page_link); ?>" class="know2 know_more">Know more </a>          
                        </div>
                    <?php
                    endwhile;
                endif;
                ?>		
            </div>

            <!-- <div class="row our_solution_sec">			
                <div class="col-md-4 col-sm-4 col-xs-12  paddingbot">				
                    <img class="imgwid"  src="<?php echo get_stylesheet_directory_uri();?>/images/goalculture.png">				<p class="topspace solutionstxthead">Create a Goal Culture</p>
                    <hr>
                    <p class="topspace2 solutionstxt1">With increased visibility, accountability, and productivity, make everyday a purpose-driven workday.</p>
                    <a class="know2 know_more">Know more ></a>			
                </div>			
                <div class="col-md-4 col-sm-4 col-xs-12  paddingbot">				
                    <img  class="imgwid" src="<?php echo get_stylesheet_directory_uri();?>/images/align.png">				<p class="topspace solutionstxthead">Align Your Workforce</p>
                    <hr>
                    <p class="topspace2 solutionstxt1">Create synergy between your organization’s growth strategy, operational plan, and individual goals of employees.</p>
                    <a class="know2 know_more">Know more ></a>			
                </div>			
                <div class="col-md-4 col-sm-4 col-xs-12 width paddingbot">				
                    <img  class="imgwid" src="<?php echo get_stylesheet_directory_uri();?>/images/goal.png">				<p class="topspace solutionstxthead">Simplify Engagement </p>
                    <hr>
                    <p class="topspace2 solutionstxt1">Make it easier to facilitate conversations between individuals and across teams – and ensure that they are more contextual than ever before.</p><br>
                    <a class="know2 know_more">Know more ></a>			
                </div>		
            </div>	 -->	
            <!-- <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 paddingbot">				
                    <img  class="imgwid" src="<?php echo get_stylesheet_directory_uri();?>/images/drive.png">
                    <p class="topspace solutionstxthead">Drive Continuous<br>Performance Management </p><hr>
                    <p class="topspace2 solutionstxt1">Shift away from a conventional approach to annual reviews and embrace a more meaningful, continuous review and feedback model. </p><br>
                    <a class="know2 know_more">Know more ></a>			
                </div>

    			<div class="col-md-4 col-sm-4 col-xs-12 width paddingbot">				
                    <img  class="imgwid" src="<?php echo get_stylesheet_directory_uri();?>/images/culture.png">	
                    <p class="topspace solutionstxthead">Leverage Personalized Nudges</p><hr>
                    <p class="topspace2 solutionstxt1">Don’t just deliver information - provide insights to empower people with the information needed to perform better.</p><br>
                    <a class="know2 know_more">Know more ></a>			
                </div>					
            </div>	 -->	 	
        </div>	
            <div class="col-md-12 col-sm-12 col-xs-12 botimg">
                <img class="imgrit"  src="<?php echo get_stylesheet_directory_uri();?>/images/intersection.png">
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 evol">	
            <div class="backimg background_margin">		
                <img class="desktop margin_image"  src="<?php echo get_stylesheet_directory_uri();?>/images/economic.png">		
                <img class="mob heightimg"  src="<?php echo get_stylesheet_directory_uri();?>/images/reportmob.png">	
            </div>	
            <div class="container3a">		
                <div class="row">			
                    <div class="Looking"><?php echo get_field('solution_casestudy_section_heading',false,false); ?></div>			
                    <div class="Look disnone"><?php echo get_field('solution_casestudy_section_description',false,false); ?></div>	
                    <?php   
                    $wp_loop = 1;                  
                    $cs_id = get_field('solution_select_casestudy');
                        foreach ($cs_id as $value) { ?>
                            <div class="col-md-6 col-sm-6 col-xs-12 <?php if($wp_loop == '1') echo 'left'; else echo 'right'; ?> ecnomic_sec1">
                                <div class="first experience_margin">
                                    <img class="image1" src="<?php echo get_the_post_thumbnail_url($value); ?>">
                                    <div class="r_cs_text_wrapper">  
                                        <div class="sec sol_yellow_bg"><?php echo get_the_title($value); ?>
                                        <br><br><a href="<?php echo get_the_permalink($value); ?>" class="Get"> Get the full story<span class="glyphicon glyphicon-chevron-right"></span></a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php $wp_loop++;
                        }
                    ?>
                </div>			
            </div>
        </div>
        <div class="row_c"></div>
        <section id="pro_book_demo">
            <div class="solutionstxt text-center"><?php echo get_field('pre_footer_section_heading',false,false); ?></div>
            <div class="row pro_book_demo">
                <div class="col-md-4 col-sm-4 col-xs-12">   
                    <div class="solutionstxt2 disnone  ">
                        <p><?php echo get_field('pre_footer_left_heading',false,false); ?></p>
                        <a href="<?php echo get_field('pre_footer_left_cta_link'); ?>" class="btn3 align_center"><?php echo get_field('pre_footer_left_cta',false,false); ?>
                            <img src="<?php echo get_stylesheet_directory_uri();?>/images/blackarrow.png">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 mobile1">   
                    <div class="solutionstxt2 information_sol">
                        <p><?php echo get_field('pre_footer_right_heading',false,false); ?></p>
                        <a href="<?php echo get_field('pre_footer_right_cta_link'); ?>" class="btn3 align_center"><?php echo get_field('pre_footer_right_cta',false,false); ?>
                            <img src="<?php echo get_stylesheet_directory_uri();?>/images/blackarrow.png">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 information_text_wrapper">  
                    <img src="<?php echo get_field('pre_footer_image');?>" alt="Solutions">
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 desktop">   
                    <div class="solutionstxt2 disnone  ">
                        <p><?php echo get_field('pre_footer_right_heading',false,false); ?></p>
                        <a href="<?php echo get_field('pre_footer_right_cta_link'); ?>" class="btn3 align_center"><?php echo get_field('pre_footer_right_cta',false,false); ?> 
                            <img src="<?php echo get_stylesheet_directory_uri();?>/images/blackarrow.png">
                        </a>
                    </div>
                </div>      
            </div>      
        </section>

<?php get_footer(); ?>