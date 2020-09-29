<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ultrabootstrap
 */

get_header(); ?>
<section id="event_banner">
   <div class="event_banner_sec">
      <img class="desktop_sh" src="<?php echo get_field('banner_image_desktop',267); ?>">
      <img class="mobile_sh" src="<?php echo get_field('banner_image_mobile',267); ?>">
      <div class="event_banner_text">
         <h2><?php echo get_the_archive_title(); ?></h2>
      </div>
   </div>
</section>

<section id="blog_after">
   <div class="rt row">
        <div class="col-md-8 col-sm-8 col-xs-12 space ">
          <?php         
               $blogs_loop = new WP_Query( $blogs );         
                while ( have_posts() ) : the_post();?>
                  <div class="single_blog row">
                     <div class="col-md-4 col-sm-4 col-xs-12 space">
                        <?php $post_thumbnail = get_the_post_thumbnail_url();
                           if($post_thumbnail){?>
                             <img class=" imgblogmain" src="<?php echo $post_thumbnail; ?>" height="151">
                           <?php
                           }else{ ?>
                              <img class=" imgblogmain " src="<?php echo get_stylesheet_directory_uri(); ?>/images/default.png">
                           <?php
                           }
                        ?>            
                     </div>
                     <div class="col-md-8 col-sm-8 col-xs-12 space2">
                        <p class="impacts desc"><strong><?php echo get_the_title(); ?></strong></p>
                        <div class="abt_after_banner_left_desc abttxts">
                           <p class="het"><?php echo get_the_excerpt(); ?></p>
                           <p class="author">
                              by <?php echo get_the_author(); ?> on <?php echo get_the_date('M d, Y'); ?><!-- <strong> 3 min read</strong> -->
                              <br><a class="know knowblog" href="<?php echo get_the_permalink(); ?>">Read more <span class="glyphicon glyphicon-chevron-right"></span></a>
                           </p>
                        </div>
                     </div>
                     <hr class="bot">
                  </div>
          <?php endwhile;  wp_reset_postdata(); ?>
          <div class="category_pagination"><?php the_posts_navigation(); ?></div>
       </div>
       <div class="col-md-4 col-sm-4 col-xs-12 space ">
          <div class="thank_sec">
             <p class=" thanks_paras">
                <span class="follow privacybold">Follow Us</span>
             <div class="thanks_logo paddingbot3b">
                <img  src="<?php echo get_stylesheet_directory_uri(); ?>/images/lcn_ln.png">
             </div>
             <div class="blog_subscribe_from news_subscribe">
                <?php
                 echo do_shortcode('[contact-form-7 id="2137" title="Blog Subscribe"]');
                ?>
              </div>
             </p>
          </div>
          <div class="blogright" >
            <?php $category = get_category( get_query_var( 'cat' ) ); $carchive_cat_id = $category->cat_ID; ?>
             <p class="post space">Post by topic</p>
            <!--  <hr class="bot"> -->
             <?php $categories = get_categories( array('orderby'=>'rand','order'=> 'ASC','number' => '5') ); ?>
             <ul class="posttxt">
                <?php
                   shuffle ($categories);
                   foreach( $categories as $category ) {?>
                <li>
                    <?php 
                        if($category->term_id == $carchive_cat_id){ echo "<b>"; }?>
                       <a href="<?php echo get_category_link( $category->term_id )?>">
                       <?php echo $category->name; ?><?php echo ' ('.$category->count.')'; ?>
                       </a>
                    <?php 
                        if($category->term_id == $carchive_cat_id){ echo "</b>"; }?>
                </li>
                <?php
                   }
                   ?>
             </ul>
          </div>
          <div class="blogright" >
             <p class="post space">Recent post</p>
             <!-- <hr class="bot"> -->
             <?php 
                $blogs = array('post_type' => 'post','post_status' => 'publish','posts_per_page' => 3,'order' => 'ASC');
                $blogs_loop = new WP_Query( $blogs );         
                while ( $blogs_loop->have_posts() ) : $blogs_loop->the_post();?>
             <div class="thumbnail1">
                <?php $recent_post_thumbnail = get_the_post_thumbnail_url(); 
                   if($recent_post_thumbnail){ ?>
                <img src="<?php echo $recent_post_thumbnail; ?>"  width="90" height="50" >
                <?php
                   }else{ ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/default.png" width="90" height="50" >
                <?php
                   }
                   ?>
                <p  class="posttxt2"><?php echo get_the_title(); ?></p>
                <a class="know knowblog " href="<?php echo get_the_permalink(); ?>">Read more <span class="glyphicon glyphicon-chevron-right"></span></a>
                <!-- <hr class="bot"> -->
             </div>
             <?php endwhile; ?>
          </div>
       </div>
</section>
<?php get_footer(); ?>
