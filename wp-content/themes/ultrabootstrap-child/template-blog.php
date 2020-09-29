<?php
   /**
    * Template Name: Blog
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
<div class="row_c"></div>
<div class="row breadcrumbs_blog">
   <a href="<?php echo site_url(); ?>">Home</a> / <a href="<?php echo site_url(); ?>/resource">Resources</a> /  Blogs 
</div>
<section id="blog_after">
   <div class=" rt row ">
   <div class="col-md-8 col-sm-8 col-xs-12 space ">
      <?php
         $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
               $blogs = array('post_type' => 'post','post_status' => 'publish','posts_per_page' => 5,'order' => 'DESC','paged' => $paged);
                $blogs_loop = new WP_Query( $blogs );         
                while ( $blogs_loop->have_posts() ) : $blogs_loop->the_post();?>
                  <div class="single_blog row">
                     <div class="col-md-4 col-sm-4 col-xs-12 space">
                        <?php $post_thumbnail = get_the_post_thumbnail_url();
                           if($post_thumbnail){?>
                            <a href="<?php echo get_the_permalink(); ?>">
                              <img class=" imgblogmain" src="<?php echo $post_thumbnail; ?>">
                            </a>
                           <?php
                           }else{ ?>
                            <a href="<?php echo get_the_permalink(); ?>">
                              <img class="imgblogmain" src="<?php echo get_stylesheet_directory_uri(); ?>/images/default.png">
                            </a>
                           <?php
                           }
                        ?>            
                     </div>
                     <div class="col-md-8 col-sm-8 col-xs-12 space2">
                      <a href="<?php echo get_the_permalink(); ?>">
                        <div class="impacts desc"><strong><?php echo get_the_title(); ?></strong></div>
                      </a>
                        <div class="abt_after_banner_left_desc abttxts">
                           <a href="<?php echo get_the_permalink(); ?>">
                            <div class="het"><?php echo get_the_excerpt(); ?></div>
                          </a>
                           <div class="author">
                              by <?php echo get_the_author(); ?> on <?php echo get_the_date('M d, Y'); ?><!-- <strong> 3 min read</strong> -->
                              <br><a class="know knowblog" href="<?php echo get_the_permalink(); ?>">Read more <span class="glyphicon glyphicon-chevron-right"></span></a>
                           </div>
                        </div>
                     </div>
                     <hr class="bot">
                  </div>
      <?php endwhile; 
         $total_pages = $blogs_loop->max_num_pages;
         echo "<div class='post_pagination'>";
         if ($total_pages > 1){
          $current_page = max(1, get_query_var('paged'));
          echo paginate_links(array(
              'base' => get_pagenum_link(1) . '%_%',
              'format' => 'page/%#%',
              'current' => $current_page,
              'total' => $total_pages,
              'prev_text'    => __('« Prev'),
              'next_text'    => __('Next »'),
          ));
         }
         echo "</div>";
         wp_reset_postdata(); ?>
   </div>
   <div class="col-md-4 col-sm-4 col-xs-12 space ">
      <div class="thank_sec">
         <div class=" thanks_paras">
            <span class="follow privacybold">Follow Us</span>
         <div class="thanks_logo paddingbot3b">
          <a href="https://www.linkedin.com/company/kpisoft">
            <img  src="<?php echo get_stylesheet_directory_uri(); ?>/images/lcn_ln.png">
          </a>
         </div>
         <div class="blog_subscribe_from">
            <?php
            echo do_shortcode('[contact-form-7 id="2137" title="Blog Subscribe"]');
            ?>
         </div>
         </div>
      </div>
      <div class="blogright" >
         <div class="post space">Post by topic</div>
        <!--  <hr class="bot"> -->
         <?php $categories = get_categories( array('orderby'=>'rand','order'=> 'ASC','number' => '5') ); ?>
         <ul class="posttxt">
            <?php
               shuffle ($categories);
               foreach( $categories as $category ) {?>
            <li>
               <a href="<?php echo get_category_link( $category->term_id )?>">
               <?php echo $category->name; ?><?php echo ' ('.$category->count.')'; ?>
               </a>
            </li>
            <?php
               }
               ?>
         </ul>
      </div>
      <div class="blogright" >
         <div class="post space">Recent post</div>
         <!-- <hr class="bot"> -->
         <?php 
            $blogs = array('post_type' => 'post','post_status' => 'publish','posts_per_page' => 3,'order' => 'ASC');
            $blogs_loop = new WP_Query( $blogs );         
            while ( $blogs_loop->have_posts() ) : $blogs_loop->the_post();?>
         <div class="thumbnail1">
            <?php $recent_post_thumbnail = get_the_post_thumbnail_url(); 
               if($recent_post_thumbnail){ ?>
                <a href="<?php echo get_the_permalink(); ?>">
                  <img src="<?php echo $recent_post_thumbnail; ?>"  width="90" height="50">
                </a>
            <?php
               }else{ ?>
                <a href="<?php echo get_the_permalink(); ?>">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/default.png" width="90" height="50">
                </a>
            <?php
               }
               ?>
            <a href="<?php echo get_the_permalink(); ?>">
              <div class="posttxt2"><?php echo get_the_title(); ?></div>
            </a>
            <a class="know knowblog " href="<?php echo get_the_permalink(); ?>">Read more <span class="glyphicon glyphicon-chevron-right"></span></a>
            <!-- <hr class="bot"> -->
         </div>
         <?php endwhile; ?>
      </div>
   </div>
</section>
<?php  get_footer(); ?>