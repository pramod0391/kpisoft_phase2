<?php 
define('WP_USE_THEMES', false);  
require_once('../../../wp-load.php');
//include_once('../wp-content/plugins/ultimate-fields/ultimate-fields.php');

$post_type = $_POST['post_type'];
$wp_topic = $_POST['wp_topic'];
$cat_id = get_cat_ID($wp_topic);
if($post_type == "all" && $wp_topic == 'all'){
	$ebooks_whitepaper = array('post_type' => array('ebooks','whitepapers'),'post_status' => 'publish','posts_per_page' => -1,'orderby' => 'date','order' => 'DESC');
}elseif ($post_type != "all" && $wp_topic == "all") {
	$ebooks_whitepaper = array('post_type' => array($post_type),'post_status' => 'publish','posts_per_page' => -1,'orderby' => 'date','order' => 'DESC',);
}else{
	$ebooks_whitepaper = array('post_type' => array($post_type),'post_status' => 'publish','posts_per_page' => -1,'orderby' => 'date','order' => 'DESC','tax_query' => [
        ['taxonomy' => 'category','terms' => $cat_id,'include_children' => false],],);
}
$ebooks_whitepaper_loop = new WP_Query( $ebooks_whitepaper ); 
if ( $ebooks_whitepaper_loop->have_posts() ) : 
	while ( $ebooks_whitepaper_loop->have_posts() ) : $ebooks_whitepaper_loop->the_post();?>
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
						<h5 class="ebooks_name_head"><?php echo get_the_title(); ?></h5>
					</a>
					<a class="download_wp" data-toggle="modal" data-target="#download-pop" data-href="<?php echo get_field('whitepaper_pdf'); ?>">
						<p class="event_desc"><?php echo get_the_excerpt(); ?></p>
					</a>
					<a class="download_wp" data-toggle="modal" data-target="#download-pop" data-href="<?php echo get_field('whitepaper_pdf'); ?>">Download Now<span class="glyphicon glyphicon-chevron-right glyphicon_size"></span></a>
				</div>
		</div>
	<?php endwhile;
else :
    echo '<p class="no_data">No <b>'. $post_type .'</b> Found with <b>'. $wp_topic .'</b> Topic</p>';
endif;