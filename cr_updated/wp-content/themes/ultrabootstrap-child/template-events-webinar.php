<?php
/**
 * Template Name: Events Webinar
 * The template used for displaying fullwidth page content in Blog page
 *
 * @package ultrabootstrap
 */
get_header(); ?>
<section id="event_banner">
	<div class="event_banner_sec">
		<img class="desktop_sh" src="<?php echo get_field('banner_image_desktop'); ?>">
		<img class="mobile_sh" src="<?php echo get_field('banner_image_mobile'); ?>">
		<div class="event_banner_text">
			<?php echo get_field('banner_text',false,false); ?>
		</div>
		<?php 
		$banner_desc = get_field('banner_short_description');
		if($banner_desc){ ?>
			<div class="event_banner_desc">
				<?php echo $banner_desc; ?>
			</div>
		<?php 
		}
		?>
	</div>
</section>

<section>
	<div class="row breadcrumbs_sec">
		<a href="<?php echo site_url(); ?>">Home</a> / <?php if ( $post->post_parent ) { ?><a href="<?php echo get_permalink( $post->post_parent ); ?>" ><?php echo get_the_title( $post->post_parent ); ?>		
		</a> / <?php } ?><b>Events & Webinars</b>
</div>
 
</section>
<section id="highlights">
	<div class="row highlights_sec">
		<div class="highlights_head">
			Highlight of the Month
		</div>
		<?php 
		$highlight_post_id = get_field('select_event_&_webinar');
		foreach ($highlight_post_id as $post_id ) { ?>
			<div class="col-sm-6 col-md-6 col-12 event_highlights_wrap">
				<div class="col-sm-4 col-sm-4 col-md-4 event_img_wrap">
					<a href="<?php echo get_the_permalink($post_id); ?>">
						<img src="<?php echo get_the_post_thumbnail_url($post_id); ?>">
					</a>
				</div>
				<div class="col-sm-8 col-sm-8 col-md-8 event_details_wrap">
					<div class="event_details">
						<?php $event_cta = get_field('event_cta',$post_id); ?>
						<div class="borbotenv"><?php echo get_post_type($post_id);?><br>
						<span><?php echo get_field('event_date_time',$post_id,false,false); ?> | <?php echo get_field('event_location',$post_id); ?></span></div>
						<a href="<?php echo get_the_permalink($post_id); ?>">
							<div class="event_detailshead"><?php echo get_the_title($post_id); ?></div>
						</a>
						<a href="<?php echo get_the_permalink($post_id); ?>">
							<div class="event_desc"><?php echo get_the_excerpt($post_id); ?></div>
						</a>
						<?php 
							if(get_post_type() == 'events' && get_field('event_link',$post_id)){ 
								if($event_cta){
								?>
									<a href="<?php echo get_field('event_link',$post_id); ?>">
										<?php echo $event_cta; ?><span class="glyphicon glyphicon-chevron-right glyphicon_size"></span>
									</a>
								<?php } ?>
							<?php
							}else{ 
								$web_date = get_field('select_event_start_date',$post_id);
								$web_date_format = str_replace('/', '-', $web_date);

								$web_date_com = strtotime($web_date_format);
								$current_date = strtotime(date("d-m-Y"));?>
									<a href="<?php echo get_the_permalink($post_id); ?>">
									<?php
									if($web_date_com >= $current_date)echo "Reserve Your Spot";else echo "Watch Webinar"; ?><span class="glyphicon glyphicon-chevron-right glyphicon_size"></span>
								</a>								
							<?php
							}
							?>
					</div>
				</div>
			</div>
		<?php
		}
		?>
	</div>
</section>
<section id="events_webinars">
	<div class="row events_sec">
		<div class="events_filter">
			<p class="Filter_head">Filter by</p>
			<div class="event_drop">
				<select id="upcoming" class="upcoming_events selectParent">
					<option value="all">All</option>
					<option value="upcoming">Upcoming</option>
					<option value="recent">Previous</option>					
				</select>

				<select id="events_list" class="events_lists">
					<option value="all">All</option>
					<option value="events">Events</option>
					<option value="webinars">Webinars</option>					
				</select>

				<select id="Location" class="event_location">
					<option value="all">All Location</option>
					<?php
					$event_location = array('post_type' => array('webinars','events'),'post_status' => 'publish','posts_per_page' => -1,'orderby' => 'date','order' => 'DESC');
	      			$event_location_loop = new WP_Query( $event_location ); 
	      			$allevents = array();       
	      			while ( $event_location_loop->have_posts() ) : $event_location_loop->the_post(); 
	      				$allevents[] = get_field('event_location');
					endwhile; 
					$allevents_unique = array_unique($allevents);
					foreach ($allevents_unique as $location) { ?>
						<option value="<?php echo $location; ?>"><?php echo $location; ?></option>
					<?php
					}
					wp_reset_postdata(); ?>
				</select>

				<select id="event_Topic" class="event_topic">
					<option value="all">All</option>
					<?php
						$evnts_webinar = array('post_type' => array('events','webinars'),'post_status' => 'publish','posts_per_page' => -1,'orderby' => 'date','order' => 'DESC');
	      				$evnts_webinar_loop = new WP_Query( $evnts_webinar );
						$allcats = array();
	      				while ( $evnts_webinar_loop->have_posts() ) : $evnts_webinar_loop->the_post();?>
			      			<?php 
			      			$cats = get_the_category();
			      			
			      			foreach($cats as $cat) { 
			      				$allcats[] = $cat->name;	      			
			      			}	      			
			      			endwhile; 
	      				$unique_data = array_unique($allcats);
		      			foreach($unique_data as $cat) { ?>
						    <option value="<?php echo $cat; ?>"><?php echo $cat; ?></option>
						<?php
						}
		      			?>
					<?php
					//$category_args = array('taxonomy' => 'category','orderby' => 'name','order'   => 'ASC');
					//$cats = get_categories($category_args);
					//foreach($cats as $cat) { ?>
			           <!-- 	<option value="<?php echo $cat->name; ?>"><?php echo $cat->name; ?></option> -->
					<?php
					  //}
					?>
				</select>
			</div>
		</div>
		<div class="event_webinar_data row">
			<?php
		    $events_webinar = array('post_type' => array('events','webinars'),'post_status' => 'publish','posts_per_page' => 8,'meta_key' => 'event_date_time','orderby' => 'meta_value','order' => 'ASC');
		    $events_webinar_loop = new WP_Query( $events_webinar ); 
		   	$total_posts = $events_webinar_loop->post_count;
		   	$center_position = round($total_posts/2)+1;
		   	$event_webinar_loop = 1;
		    while ( $events_webinar_loop->have_posts() ) : $events_webinar_loop->the_post();?>
		    	<?php 
		    	if($event_webinar_loop == $center_position){ ?>
		    		<div class="col-md-4 col-sm-6 col-12 events_filter-wrap">
						<div class="webinar_submit">
							<div>Stay up to date</div>
							<div class="caption_para">never miss an event or a webinar</div>
							<div class="webinar_form_sec">
								<?php echo do_shortcode('[contact-form-7 id="2442" title="Stay up to date"]'); ?>
							</div>
							<div class="terms_text">By submitting this form, you confirm that you have read and agree to the <u>Terms of Service</u> and <u>Privacy Policy</u>.</div>
						</div>
					</div>
				<?php
		    	}
		    	?>
		    	<div class="col-md-4 col-sm-6 col-12 events_filter-wrap">
		    		<a href="<?php echo get_the_permalink(); ?>">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>">
					</a>
					<div class="event_details">
						<div class="event_top_head borbotenv"><?php echo get_post_type(); ?><br>
						<span><?php echo get_field('event_date_time',false,false); ?>   <?php echo get_field('event_location'); ?></span></div>
						<a href="<?php echo get_the_permalink(); ?>">
							<div class="events_name_head"><?php echo get_the_title(); ?></div>
						</a>
						<a href="<?php echo get_the_permalink(); ?>">
							<div class="event_desc_para"><?php echo get_the_excerpt(); ?></div>
						</a>
						<?php
						if(get_post_type() == 'events'){ 
								if($event_cta && get_field('event_link')){
								?>
									<a href="<?php echo get_field('event_link'); ?>">
										<?php echo $event_cta; ?><span class="glyphicon glyphicon-chevron-right glyphicon_size"></span>
									</a>
								<?php }else{ ?>
									<a href="<?php echo get_the_permalink(); ?>">
										<?php echo $event_cta; ?><span class="glyphicon glyphicon-chevron-right glyphicon_size"></span>
									</a>
								<?php
								} ?>
							<?php
						}else{ 
							$web_date = get_field('select_event_start_date');
							$web_date_format = str_replace('/', '-', $web_date);

							$web_date_com = strtotime($web_date_format);
							$current_date = strtotime(date("d-m-Y"));?>
							<a href="<?php echo get_the_permalink(); ?>">
								<?php
								if($web_date_com >= $current_date){ echo "Reserve Your Spot";}else{ echo "Watch Webinar"; }?><span class="glyphicon glyphicon-chevron-right glyphicon_size"></span>
							</a>								
						<?php
						}
						?>
					</div>
				</div>
		  	<?php $event_webinar_loop++; endwhile;  wp_reset_postdata(); ?>
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
			<p class="tomorrow"><?php echo get_field('pre_footer_section_heading',false,false); ?><br><span class="today"><?php echo get_field('pre_footer_section_description',false,false); ?></span>
			</p>
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

<?php  get_footer(); ?>

