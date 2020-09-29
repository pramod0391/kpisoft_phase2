<?php
/**
 * Template Name: Products Page 
 * The template used for displaying fullwidth page content in Products page
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
	<a href="<?php echo site_url(); ?>">Home</a> / <b>Products</b> / <b>Platform</b>
</div>

<div class="row center success_sec">	
	<div class="location">
		<div class="middle"><?php echo get_field('platform_after_banner_section_heading',false,false); ?></div>	
		<div class="believe1 middle"><?php echo get_field('platform_after_banner_section_description',false,false); ?></div>
	</div>
	<div class="row product_link">
		<?php
		$loop=1;
		while( have_rows('platform_tabs') ) : the_row(); ?>
			<a href="#<?php echo strtolower(get_sub_field('detailed_info_heading')); ?>" class="<?php if($loop == "1") echo "performace_btn"; ?><?php if($loop %2 == "0" && $loop %4 != "0") echo "eng_btn"; ?><?php if($loop %3 == "0") echo "insights_btn"; ?><?php if($loop %4 == "0") echo "action_btn"; ?> desktop">
				<?php echo get_sub_field('detailed_info_heading'); ?>
			</a>
		<?php $loop++; endwhile; ?>
		<!-- <a href="#performace" class="performace_btn desktop">Performance</a>
		<a href="#engagement" class="eng_btn desktop">Engagement</a>
		<a href="#insights" class="insights_btn desktop">Insights</a>
		<a href="#action" class="action_btn desktop">Action</a> -->
		
		<?php
		$m_loop=1;
		while( have_rows('platform_tabs') ) : the_row(); ?>

			<a href="#mob_<?php echo strtolower(get_sub_field('detailed_info_heading')); ?>" class="<?php if($m_loop == "1") echo "performace_btn"; ?><?php if($m_loop %2 == "0" && $m_loop %4 != "0") echo "eng_btn"; ?><?php if($m_loop %3 == "0") echo "insights_btn"; ?><?php if($m_loop %4 == "0") echo "action_btn"; ?> mobile_sh">
				<?php echo get_sub_field('detailed_info_heading'); ?>
			</a>
		<?php $m_loop++; endwhile; ?>
		<!-- <a href="#mob_performace" class="performace_btn mobile_sh">Performance</a>
		<a href="#mob_engagement" class="eng_btn mobile_sh">Engagement</a>
		<a href="#mob_insights" class="insights_btn mobile_sh">Insights</a>
		<a href="#mob_action" class="action_btn mobile_sh">Action</a> -->
	</div>   
	<img  src="<?php echo get_stylesheet_directory_uri();?>/images/diagram.png">
</div>

<div class="row inspire mob topproduct1 margin_top_product">	
	<div class="container1">
	<?php //$products_loop = 1;
	while( have_rows('platform_tabs') ) : the_row(); ?>	
		<div class="row12" id="mob_<?php echo strtolower(get_sub_field('detailed_info_heading')); ?>">			
			<div class="col-md-6 col-sm-6 col-xs-12 topproduct">		
				<div class="Engage" id="performance"><strong><?php echo get_sub_field('detailed_info_heading',false,false); ?></strong></div>		
				<!-- <p class="solutionstxt2 ">Create actionable strategy maps, set goals, and make it easier to provide and receive feedback. </p>	 -->	
			</div>			
			<div class="col-md-6 col-sm-6 col-xs-12">				
				<div class="row">					
					<img  src="<?php echo get_sub_field('detailed_info_image'); ?>" alt="Platform">				
				</div>			
			</div>			
			<div class="col-md-6 col-sm-6 col-xs-12 solutionstxt2">						
				<?php echo get_sub_field('detailed_info_description'); ?>
			</div>		
		</div>	
	<div class="row_c"></div>
	<?php endwhile; ?>
		
		
		<!-- <div class="row12" id="mob_engagement">						
			<div class="col-md-6 col-sm-6 col-xs-12 topproduct">				
				<p class="Engage"><strong>Engagement</strong></p>				
				<p class="solutionstxt2">Foster a culture where purpose-driven engagement leads to exponential value creation.</p>							
			</div>			
			<div class="col-md-6 col-sm-6 col-xs-12">
				<img  src="<?php echo get_stylesheet_directory_uri();?>/images/mob_imgeng.png">
			</div>			
			<div class="col-md-6 col-sm-6 col-xs-12">								
				<ul>					
					<li>Promote peer feedback and team communications</li>					
					<li>Conduct wellbeing surveys</li>					
					<li>Gamify behaviors, recognize and reward, and drive healthy competition with leaderboards </li>
				</ul>			
			</div>		
		</div>	 -->
		<!-- <div class="row_c"></div> -->
		<!-- <div class="row12" id="mob_insights">			
			<div class="col-md-6 col-sm-6 col-xs-12 topproduct">				
				<p class="Engage"><strong>Insights</strong></p>			
				<p class="solutionstxt2">Get complete visibility on performance drivers across the organization. Prepare for the future with applied intelligence. </p>						
			</div>			
			<div class="col-md-6 col-sm-6 col-xs-12">
				<img  src="<?php echo get_stylesheet_directory_uri();?>/images/mob_imginsight.png">
			</div>			
			<div class="col-md-6 col-sm-6 col-xs-12">								
				<ul>					
					<li>Deliver hyper-personalized automated insights</li>					
					<li>Design and share custom dashboards</li>					
					<li>Build unique Machine Learning models</li>				
				</ul>			
			</div>		
		</div>	 -->	
		<!-- <div class="row_c"></div> -->
		<!-- <div class="row12" id="mob_action">						
			<div class="col-md-6 col-sm-6 col-xs-12 topproduct">				
				<p class="Engage"><strong>Action</strong></p>				
				<p class="solutionstxt2">Make it as easy as possible to manage – empower teams and individuals to focus on the work that truly matters.</p>							
			</div>			
			<div class="col-md-6 col-sm-6 col-xs-12">
				<img  src="<?php echo get_stylesheet_directory_uri();?>/images/mob_imgaction.png">
			</div>			
			<div class="col-md-6 col-sm-6 col-xs-12 margin_list">								
				<ul>					
					<li>Manage project teams and collective and individual priorities with ease</li>			
					<li>Create and assign tasks</li>					
					<li>Provide task, project and feedback on outcomes</li>					
					<li>Generate actionable reports and set reminders</li>				
				</ul>			
			</div>		
		</div>	 -->
		<!-- <div class="row_c"></div> -->
	</div>
</div>

<div class="row inspire desktop">	
	<div class="container1">
	<?php $products_loop = 1;
	while( have_rows('platform_tabs') ) : the_row(); ?>	
		<div class="row12 <?php if($products_loop %2 == "0") echo "swap_alt"; ?>" id="<?php echo strtolower(get_sub_field('detailed_info_heading')); ?>">			
			<div class="col-md-6 col-sm-6 col-xs-12 margin_product">				
				<div class="Engage"><strong><?php echo get_sub_field('detailed_info_heading',false,false); ?></strong></div>
				<div class="solutionstxt2">
					<?php echo get_sub_field('detailed_info_description'); ?>
				</div>
			</div>			
			<div class="col-md-6 col-sm-6 col-xs-12">				
				<div class="row">					
					<img  src="<?php echo get_sub_field('detailed_info_image'); ?>" alt="Platform">				
				</div>			
			</div>		
		</div>	
	<?php $products_loop++; endwhile; ?>
		<!-- <div class="row12" id="performace">			
			<div class="col-md-6 col-sm-6 col-xs-12 margin_product">				
				<p class="Engage"><strong>Performance</strong></p>				
				<p class="solutionstxt2 ">Create actionable strategy maps, set goals, and make it easier to provide and receive feedback. </p>			
				<ul>					
					<li>Check company scorecard and track goal</li>					
					<li>Choose your model – OKR, KPIs, KRA</li>					
					<li>Simplify performance appraisals</li>					
					<li>Provide 360 developmental feedback</li>				
				</ul>			
			</div>			
			<div class="col-md-6 col-sm-6 col-xs-12">				
				<div class="row">					
					<img  src="<?php echo get_stylesheet_directory_uri();?>/images/imgper.png">				
				</div>			
			</div>		
		</div>	 -->	
		<!-- <div class="row12" id="engagement">			
			<div class="col-md-6 col-sm-6 col-xs-12">
				<img  src="<?php echo get_stylesheet_directory_uri();?>/images/imgeng.png">
			</div>			
			<div class="col-md-6 col-sm-6 col-xs-12">				
				<p class="Engage"><strong>Engagement</strong></p>				
				<p class="solutionstxt2">Foster a culture where purpose-driven engagement leads to exponential value creation.</p>				
				<ul>					
					<li>Promote peer feedback and team communications </li>					
					<li>Conduct wellbeing surveys</li>					
					<li>Gamify behaviors, recognize and reward, and drive healthy competition with leaderboards </li>				
				</ul>			
			</div>					
		</div>	 -->			
		<!-- <div class="row12" id="insights">			
			<div class="col-md-6 col-sm-6 col-xs-12 margin_product">				
				<p class="Engage"><strong>Insights</strong></p>			
				<p class="solutionstxt2">Get complete visibility on performance drivers across the organization. Prepare for the future with applied intelligence. </p>			
				<ul>					
					<li>Deliver hyper-personalized automated insights</li>					
					<li>Design and share custom dashboards</li>					
					<li>Build unique Machine Learning models</li>				
				</ul>			
			</div>			
			<div class="col-md-6 col-sm-6 col-xs-12">
				<img  src="<?php echo get_stylesheet_directory_uri();?>/images/imginsight.png">
			</div>		
		</div>	 -->	
		<!-- <div class="row12" id="action">			
			<div class="col-md-6 col-sm-6 col-xs-12">
				<img  src="<?php echo get_stylesheet_directory_uri();?>/images/imgaction.png">
			</div>			
			<div class="col-md-6 col-sm-6 col-xs-12">				
				<p class="Engage"><strong>Action</strong></p>				
				<p class="solutionstxt2">Make it as easy as possible to manage – empower teams and individuals to focus on the work that truly matters.</p>			
				<ul>					
					<li>Manage project teams and collective and individual priorities with ease</li>					<li>Create and assign tasks</li>					
					<li>Provide task, project and feedback on outcomes</li>					
					<li>Generate actionable reports and set reminders</li>				
				</ul>			
			</div>		
		</div> -->	
	</div>
</div>

<div class="row productmulti">	
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

<section id="pro_book_demo">
    <h2 class="solutionstxt text-center"><?php echo get_field('pre_footer_section_heading',false,false); ?></h2>
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