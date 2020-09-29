<?php
/**
 * The template for displaying all single posts.
 *
 * @package ultrabootstrap
 */
get_header(); ?>

<section id="about_banner">
   <div class="row" id="page_banner">
	   <?php $current_post_thumbnail = get_the_post_thumbnail_url(); 
	   if($current_post_thumbnail){ ?>
	    <img src="<?php echo $current_post_thumbnail; ?>" class="blog_detail_banner">  
	   <?php
		}else{ ?>
	   <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/default.png" class="blog_detail_banner">
	   <?php
		}
	   ?>
      
      <div class="blog_bannerbdetails">
         <div class="blog_heading "><strong><?php echo get_the_title(); ?></strong></div>
         <!-- <p class="text31 ">
            3 min read
         </p> -->
      </div>
   </div>
</section>

<div class="row_c"></div>

<div class="row breadcrumbsdet ">
   <a href="<?php echo site_url(); ?>">Home</a> / <b> <a href="<?php echo site_url(); ?>/resource">Resources</a> /  Blogs </b>
</div>

<section id="blog_afterdetails">
   <div class="rt row">
      <div class="col-md-8 col-sm-8 col-xs-12 space blog paddingbot3 blogdetpaleft">
         <div class="abt_after_banner_left_desc abttxt">
            <?php  echo get_the_content(); ?>
            <div class="current_post_categories">
               <?php $cat = get_the_category(); ?>
               <ul class="blog_cats">
                  <?php
                  foreach ($cat as $cname) { ?>
                     <li>
                        <a href="<?php echo get_category_link( $cname->term_id ); ?>" class="blog_cat"><?php echo $cname->cat_name; ?></a>
                     </li> 
                  <?php
                  }?>
               </ul>
            </div>
               <div class="fit">
                  <hr>
               </div>
               <div class="padbotstr"><strong>Share this article</strong></div>
               <div class="thanks_logos desktop">
                  <a target="_blank" href="https://www.facebook.com/sharer.php?s=100&p[url]=<?php echo get_the_permalink(); ?>&p[images][0]=<?php echo get_the_post_thumbnail_url(); ?>&p[title]=<?php echo get_the_title(); ?>&p[summary]=<?php echo get_the_excerpt(); ?>" title="Share on Facebook" class="space">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blogfb.svg" alt="Facebook">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </a>
                 <!--  <a href="" class="space">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blogins.png" alt="Instagram">
                  </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                  <a target="_blank" href="https://twitter.com/share?url=<?php echo get_the_permalink(); ?>&via=&hashtags=<?php echo get_the_title(); ?>&text=<?php echo get_the_excerpt(); ?>" title="Share on Twitter" class="space">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blogtwt.png" alt="Twitter">
                  </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a target="_blank" href="https://www.linkedin.com/shareArticle?url=<?php echo get_the_permalink(); ?>&title=<?php echo get_the_title(); ?>" title="Share on Linkedin" class="space">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blogin.svg" alt="LinkedIn">
                  </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               </div>
            </div>
            <a href="<?php echo site_url(); ?>/resources/blog" class="btn1 spacebtn"> 
               <span class="glyphicon glyphicon-chevron-left"></span>  Back
            </a>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 space ">
         <div class="thank_sec">
            <div class="thanks_para">
               <span class="follow privacybold">Follow Us</span>
               <div class="thanks_logo">
                  <a href="https://www.linkedin.com/company/kpisoft" target="_blank">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lcn_ln.png">
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
               <!-- <hr class="bot"> -->
               <?php $categories = get_categories( array('orderby'=>'rand','order'=> 'ASC','number' => '5') ); ?>
               <ul class="posttxt">
                  <?php
                  shuffle($categories);
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
                         <img src="<?php echo $recent_post_thumbnail; ?>"  width="90" height="50" >
                     <?php
                     }else{ ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/default.png" width="90" height="50" >
                     <?php
                     }
                     ?>
                     <div  class="posttxt2"><?php echo get_the_title(); ?></div>
                     <a class="know knowblog " href="<?php echo get_the_permalink(); ?>">Read more <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <!--  <hr class="bot"> -->
                  </div>
               <?php endwhile; ?>
            </div>
         </div>
      </div>
</section>
<section>
   <div class="col-md-12 col-sm-12 col-xs-12 ">
   <div class="backimg">
      <img class="desktop" src="<?php echo get_field('pre_footer_desktop_image',417); ?>" alt="KPISOFT">
      <img class="mob" src="<?php echo get_field('pre_footer_mobile_image',417); ?>" alt="KPISOFT">
   </div>  
   <div class="container3a brings">
      <div class="tomorrow"><?php echo get_field('pre_footer_section_heading',417,false,false); ?><br><span class="today"><?php echo get_field('pre_footer_section_description',417,false,false); ?></span>
      </div>
   </div>
   <div class="container3">
      <div class="col-md-6 col-sm-6 col-xs-12 pull-left1">
         <span class="Engage1"><?php echo get_field('pre_footer_left_heading',417,false,false); ?></span><br><br>
         <a class="btn2" href="<?php echo get_field('pre_footer_left_cta_link',417); ?>"><?php echo get_field('pre_footer_left_cta',417); ?> <span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 pull-left1">
         <span class="Engage1"><?php echo get_field('pre_footer_right_heading',417,false,false); ?></span><br><br>
         <a class="btn2" href="<?php echo get_field('pre_footer_right_cta_link',417); ?>"><?php echo get_field('pre_footer_right_cta',417); ?> <span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>
   </div>
</div>
</section>
<?php get_footer(); ?>