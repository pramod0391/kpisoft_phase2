<?php
/**
 * Template Name: Whitepaper Ebook
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
			<div><?php echo get_field('banner_text',false,false); ?></div>
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
		</a> / <?php } ?><b>E Books & Whitepapers</b>
</div>
</section>
<section id="events_webinars">
	<div class="row events_sec">
		<div class="events_filter">
			<p class="Filter_head">Filter by</p>
			<div class="event_drop">
				<select id="wp_eb" class="upcoming_events selectParent">
					<option value="all">All</option>
					<option value="whitepapers">Whitepapers</option>
					<option value="ebooks">E books</option>
				</select>
				<select id="Topic" class="event_topic">
					<option value="all">All</option>
					<?php
					$ebooks_whitepaper = array('post_type' => array('ebooks','whitepapers'),'post_status' => 'publish','posts_per_page' => -1,'orderby' => 'date','order' => 'DESC');
	      			$ebooks_whitepaper_loop = new WP_Query( $ebooks_whitepaper );
					$allcats = array();
	      			while ( $ebooks_whitepaper_loop->have_posts() ) : $ebooks_whitepaper_loop->the_post();?>
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
      			</select>
      			<?php 
      			
   				//$category_args = array('taxonomy' => 'category','orderby' => 'name','order'   => 'ASC');
				//$cats = get_categories($category_args); ?>
				<!-- <select id="Topic" class="event_topic">
					<option value="all">All</option> -->
				<?php
				//foreach($cats as $cat) { ?>
		   			<!-- <a href="<?php echo get_category_link( $cat->term_id ) ?>"> -->
		           		<!-- <option value="<?php echo $cat->name; ?>"><?php echo $cat->name; ?></option> -->
		      		<!-- </a> -->
				<?php
				  //}
				?>
				</select>
			</div>
			
   			
   			
		</div>
		<div class="row wp_ebook_data_row">
			<?php
		      $ebooks_whitepaper = array('post_type' => array('ebooks','whitepapers'),'post_status' => 'publish','posts_per_page' => -1,'orderby' => 'date','order' => 'DESC');
		      $ebooks_whitepaper_loop = new WP_Query( $ebooks_whitepaper ); 
		        
		      while ( $ebooks_whitepaper_loop->have_posts() ) : $ebooks_whitepaper_loop->the_post();?>
		         <?php //echo get_post_type(); ?>
		         <div class="col-md-4 col-sm-4 col-12 events_filter-wrap">
		            <?php 
		            $post_thumbnail = get_the_post_thumbnail_url();
		            if($post_thumbnail){?>
		            	<a class="download_wp" data-toggle="modal" data-target="#download-pop" data-href="<?php echo get_field('whitepaper_pdf'); ?>">
		               		<img src="<?php echo $post_thumbnail; ?>">
		               	</a>
		            <?php
		            }else{ ?>
		            	<a class="download_wp" data-toggle="modal" data-target="#download-pop" data-href="<?php echo get_field('whitepaper_pdf'); ?>">
		               		<img class="imgh1" src="<?php echo get_stylesheet_directory_uri(); ?>/images/default.png">
		               	</a>
		            <?php
		            }
		            ?>

		            <div class="event_details">
		            	<a class="download_wp" data-toggle="modal" data-target="#download-pop" data-href="<?php echo get_field('whitepaper_pdf'); ?>">
							<div class="ebooks_name_head"><?php echo get_the_title(); ?></div>
						</a>
						<a class="download_wp" data-toggle="modal" data-target="#download-pop" data-href="<?php echo get_field('whitepaper_pdf'); ?>">
							<div class="event_desc ebook_text_height"><?php echo get_the_excerpt(); ?></div>
						</a>
						<a class="download_wp" data-toggle="modal" data-target="#download-pop" data-href="<?php echo get_field('whitepaper_pdf'); ?>">Download Now<span class="glyphicon glyphicon-chevron-right glyphicon_size"></span></a>
					</div>
		         </div>
		      <?php 
		      endwhile; wp_reset_postdata();
		      ?>
		  </div>
	</div>
</section>
<section>
   <!-- <div class="modal" id="Read-pop"> -->
   <div class="modal" id="download-pop">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
             <h4 class="modal-title">Fill your details here to download</h4>
             <button type="button" class="close" data-dismiss="modal">&times;</button>
           </div>
           <div class="modal-body">
               <div class="whitepaper_download_form">
                  <?php echo do_shortcode('[contact-form-7 id="1629" title="WhitePaper Download"]'); ?>
               </div>
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
           </div>
         </div>
       </div>
     </div>
</section>

<?php get_footer(); ?>