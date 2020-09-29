<?php 
define('WP_USE_THEMES', false);  
require_once('../../../wp-load.php');
wp_reset_postdata();
$event_upcoming = $_POST['event_upcoming'];
$post_type = $_POST['event_post_type'];
$event_location = $_POST['event_location'];
$wp_topic = $_POST['event_topic'];

$cat_id = get_cat_ID($wp_topic);
if(($event_upcoming == "all" && $post_type == "all" && $wp_topic == "all" && $event_location == "all") || ($wp_topic == "all" && $post_type == "all" && $event_location != "all") || ($event_upcoming != "all" && $post_type == "all") ){
	$ebooks_whitepaper = array('post_type' => array('webinars','events'),'post_status' => 'publish','posts_per_page' => -1,'orderby' => 'date','order' => 'DESC');
}else if($wp_topic == "all" && $post_type != "all"){ 
	$ebooks_whitepaper = array('post_type' => array($post_type),'post_status' => 'publish','posts_per_page' => -1,'orderby' => 'date','order' => 'DESC');
}else if($wp_topic != "all" && $post_type == "all"){ 
	$ebooks_whitepaper = array('post_type' => array('webinars','events'),'post_status' => 'publish','posts_per_page' => -1,'orderby' => 'date','order' => 'DESC','tax_query' => [
        ['taxonomy' => 'category','terms' => $cat_id,'include_children' => false]],);
}
else{
	$ebooks_whitepaper = array('post_type' => array($post_type),'post_status' => 'publish','posts_per_page' => -1,'orderby' => 'date','order' => 'DESC','tax_query' => [
        ['taxonomy' => 'category','terms' => $cat_id,'include_children' => false]],);
}
$ebooks_whitepaper_loop = new WP_Query( $ebooks_whitepaper ); 
if ( $ebooks_whitepaper_loop->have_posts() ) : 
	while ( $ebooks_whitepaper_loop->have_posts() ) : $ebooks_whitepaper_loop->the_post();?>
		<!-- <div class="col-md-4 col-sm-4 col-12 events_filter-wrap"> -->
			<?php
			$evn_date = get_field('select_event_start_date');
			$evn_date_format = str_replace('/', '-', $evn_date);
			$event_date = strtotime($evn_date_format);

	        $today = strtotime(date("d-m-Y"));
	        $ev_loc = get_field('event_location');
	        if($event_upcoming == "all"){ ?>
	        	<div class="col-md-4 col-sm-6 col-12 events_filter-wrap">
					<?php
					$post_thumbnail = get_the_post_thumbnail_url();
		            if($post_thumbnail){?>
		            	<a href="<?php echo get_the_permalink(); ?>">
		               		<img src="<?php echo $post_thumbnail; ?>">
		               	</a>
		            <?php
		            }else{ ?>
		            	<a href="<?php echo get_the_permalink(); ?>">
		               		<img class="imgh1" src="<?php echo get_stylesheet_directory_uri(); ?>/images/default.png">
		               	</a>
		            <?php 
		            }
		            ?>
		            <div class="event_details">
						<p class="event_top_head"><?php echo get_post_type(); ?><br>
						<span><?php echo get_field('event_date_time',false,false); ?> |  <?php echo get_field('event_location'); ?></span></p>
						<a href="<?php echo get_the_permalink(); ?>">
							<h5 class="events_name_head"><?php echo get_the_title(); ?></h5>
						</a>
						<a href="<?php echo get_the_permalink(); ?>">
							<p class="event_desc_para"><?php echo get_the_excerpt(); ?></p>
						</a>
						<?php 
							if(get_post_type() == 'events' && get_field('event_link')){ 
								if($event_cta){
								?>
									<a href="<?php echo get_field('event_link'); ?>">
										<?php echo $event_cta; ?><span class="glyphicon glyphicon-chevron-right glyphicon_size"></span>
									</a>
								<?php } ?>
							<?php
							}else{ 
								$web_date = get_field('select_event_start_date');
								$web_date_format = str_replace('/', '-', $web_date);

								$web_date_com = strtotime($web_date_format);
								$current_date = strtotime(date("d-m-Y"));?>
									<a href="<?php echo get_the_permalink(); ?>">
									<?php
									if($web_date_com >= $current_date)echo "Reserve Your Spot";else echo "Watch Webinar"; ?><span class="glyphicon glyphicon-chevron-right glyphicon_size"></span>
								</a>								
							<?php
							}
						?>
					</div>
				</div>
			<?php
	        }  
			else if($event_upcoming == "upcoming"){
				if ($event_date > $today ){ ?>
					<div class="col-md-4 col-sm-6 col-12 events_filter-wrap">
						<?php
						$post_thumbnail = get_the_post_thumbnail_url();
			            if($post_thumbnail){?>
			            	<a href="<?php echo get_the_permalink(); ?>">
			               		<img src="<?php echo $post_thumbnail; ?>">
			               	</a>
			            <?php
			            }else{ ?>
			            	<a href="<?php echo get_the_permalink(); ?>">
			               		<img class="imgh1" src="<?php echo get_stylesheet_directory_uri(); ?>/images/default.png">
			               	</a>
			            <?php 
			            }
			            ?>
			            <div class="event_details">
							<p class="event_top_head"><?php echo get_post_type(); ?><br>
							<span><?php echo get_field('event_date_time',false,false); ?> |  <?php echo get_field('event_location'); ?></span></p>
							<a href="<?php echo get_the_permalink(); ?>">
								<h5 class="events_name_head"><?php echo get_the_title(); ?></h5>
							</a>
							<a href="<?php echo get_the_permalink(); ?>">
								<p class="event_desc_para"><?php echo get_the_excerpt(); ?></p>
							</a>
							<?php 
								if(get_post_type() == 'events' && get_field('event_link')){ 
									if($event_cta){
									?>
										<a href="<?php echo get_field('event_link'); ?>">
											<?php echo $event_cta; ?><span class="glyphicon glyphicon-chevron-right glyphicon_size"></span>
										</a>
									<?php } ?>
								<?php
								}else{ 
									$web_date = get_field('select_event_start_date');
									$web_date_format = str_replace('/', '-', $web_date);

									$web_date_com = strtotime($web_date_format);
									$current_date = strtotime(date("d-m-Y"));?>
										<a href="<?php echo get_the_permalink(); ?>">
										<?php
										if($web_date_com >= $current_date)echo "Reserve Your Spot";else echo "Watch Webinar"; ?><span class="glyphicon glyphicon-chevron-right glyphicon_size"></span>
									</a>								
								<?php
								}
							?>
						</div>
					</div>
				<?php
				}
			}else if($event_upcoming == "recent"){
				if ($event_date < $today ){ ?>
					<div class="col-md-4 col-sm-6 col-12 events_filter-wrap">
						<?php
						$post_thumbnail = get_the_post_thumbnail_url();
			            if($post_thumbnail){?>
			            	<a href="<?php echo get_the_permalink(); ?>">
			               		<img src="<?php echo $post_thumbnail; ?>">
			               	</a>
			            <?php
			            }else{ ?>
			            	<a href="<?php echo get_the_permalink(); ?>">
			               		<img class="imgh1" src="<?php echo get_stylesheet_directory_uri(); ?>/images/default.png">
			               	</a>
			            <?php 
			            }
			            ?>
			            <div class="event_details">
							<p class="event_top_head"><?php echo get_post_type(); ?><br>
							<span><?php echo get_field('event_date_time',false,false); ?> |  <?php echo get_field('event_location'); ?></span></p>
							<a href="<?php echo get_the_permalink(); ?>">
								<h5 class="events_name_head"><?php echo get_the_title(); ?></h5>
							</a>
							<a href="<?php echo get_the_permalink(); ?>">
								<p class="event_desc_para"><?php echo get_the_excerpt(); ?></p>
							</a>
							<?php 
								if(get_post_type() == 'events' && get_field('event_link')){ 
									if($event_cta){
									?>
										<a href="<?php echo get_field('event_link'); ?>">
											<?php echo $event_cta; ?><span class="glyphicon glyphicon-chevron-right glyphicon_size"></span>
										</a>
									<?php } ?>
								<?php
								}else{ 
									$web_date = get_field('select_event_start_date');
									$web_date_format = str_replace('/', '-', $web_date);

									$web_date_com = strtotime($web_date_format);
									$current_date = strtotime(date("d-m-Y"));?>
										<a href="<?php echo get_the_permalink(); ?>">
										<?php
										if($web_date_com >= $current_date)echo "Reserve Your Spot";else echo "Watch Webinar"; ?><span class="glyphicon glyphicon-chevron-right glyphicon_size"></span>
									</a>								
								<?php
								}
							?>
						</div>
					</div>
				<?php
				}
			}else{
				echo "No Data";
			}
	        ?>
		<!-- </div> -->
	<?php endwhile;
else :
    echo '<p class="no_data">No <b>'. $post_type .'</b> Found with <b>'. $wp_topic .'</b> Topic</p>';
endif;