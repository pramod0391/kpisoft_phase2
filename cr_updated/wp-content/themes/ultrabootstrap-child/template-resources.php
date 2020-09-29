<?php
/**  
    * Template Name: Resources   
    * The template used for displaying fullwidth page content in Blog page   
    *
    * @package ultrabootstrap   
    */
   
get_header(); ?>
<div class="col-md-12 col-sm-12 col-xs-12 banner Resource-background">
   <div class="row12">
      <div class="col-md-6 col-sm-6 col-xs-12 request1">
         <div class="container1 performanceleftimg request_demo_sec">
            <div class="row1 ">
              <div class=" performancetextsol">
                  <div class="event_banner_text">
                    Resources
                  </div>
<!--                  <div class="banner_heading set mob">
                    <p class="requesttxt  "><strong>Resources</strong></p>
                 </div> -->
              </div>
           </div>
        </div>
     </div>
   </div>
 </div>

<div class="row_c"></div>
<div class="row breadcrumbs">
   <a href="<?php echo site_url(); ?>">Home</a> / <b> Resources / </b>
</div>
<section id="ebook">
   <div class="row ">
      <div class="col-md-12 col-sm-12 col-xs-12 abt_after_banner_left_desc">
         <div class="col-md-6 col-sm-6 col-xs-6 padding-head">
            <div class="location"><?php echo get_field('ebooks_whitepaper_section_heading'); ?></div>
         </div>
         <div class="col-md-6 col-sm-6 col-xs-6 "><a href="<?php echo site_url(); ?>/whitepaper-e-book/" class="view txtcnt">View All</a></div>
      </div>

      <?php
      $ebooks_whitepaper = array('post_type' => array('ebooks','whitepapers'),'post_status' => 'publish','posts_per_page' => 3,'orderby' => 'date','order' => 'DESC');
      $ebooks_whitepaper_loop = new WP_Query( $ebooks_whitepaper ); 
        
      while ( $ebooks_whitepaper_loop->have_posts() ) : $ebooks_whitepaper_loop->the_post();?>
         <?php //echo get_post_type(); ?>
         <div class="col-md-4 col-sm-4 col-xs-12 resorce">
            <?php 
            $post_thumbnail = get_the_post_thumbnail_url();
            if($post_thumbnail){?>
              <a class="download_wp" data-toggle="modal" data-target="#download-pop" data-href="<?php echo get_field('whitepaper_pdf'); ?>">
                <img src="<?php echo $post_thumbnail; ?>">
             </a>
            <?php
            }else{ ?>
               <a class="know knowblog download_wp" data-toggle="modal" data-target="#download-pop" data-href="<?php echo get_field('whitepaper_pdf'); ?>">
                  <img class="imgh1" src="<?php echo get_stylesheet_directory_uri(); ?>/images/default.png">
               </a>
            <?php
            }
            ?>            
            <div class="ebook today rightalign ">
               <a class="download_wp" data-toggle="modal" data-target="#download-pop" data-href="<?php echo get_field('whitepaper_pdf'); ?>">
                  <div class="impact resstrong desc"><strong><?php echo get_the_title(); ?></strong></div>
               </a>
               <div class="abt_after_banner_left_desc ">
                  <a class="download_wp" data-toggle="modal" data-target="#download-pop" data-href="<?php echo get_field('whitepaper_pdf'); ?>">
                     <div class="hetblog abttxt"><?php echo get_the_excerpt(); ?></div>
                  </a>
                  <a class="know knowblog download_wp" data-toggle="modal" data-target="#download-pop" data-href="<?php echo get_field('whitepaper_pdf'); ?>">Download Now <span class="glyphicon glyphicon-chevron-right"></span></a>
               </div>
            </div>
         </div>
      <?php 
      endwhile; wp_reset_postdata();
      ?>
   </div>
</section>
<section id="events" class="resevents">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 abt_after_banner_left_desc ">
         <div class="col-md-6 col-sm-6 col-xs-8 padding-head">
            <div class="location"><?php echo get_field('events_webinar_section_heading'); ?></div>
         </div>
         <div class="col-md-6 col-sm-6 col-xs-4 "><a href="<?php echo site_url(); ?>/events-webinar/" class="view txtcnt">View All</a></div>
      </div>
      <?php
      $events = array('post_type' => array('events','webinars'),'post_status' => 'publish','posts_per_page' => 2,'orderby' => 'date','order' => 'DESC');
      $events_loop = new WP_Query( $events );        
      while ( $events_loop->have_posts() ) : $events_loop->the_post();?>
         <div class="col-md-6 col-sm-6 col-xs-12 event padzero ">
            <div class="col-md-4 col-sm-4 col-xs-12 padzero ">
               <a href="<?php echo get_the_permalink(); ?>">
                  <img class="imgh" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Events">
               </a>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12 space3 rightalign ">
               <a href="<?php echo get_the_permalink(); ?>">
                  <div class="eventweb ">
                     <strong><?php echo get_post_type(); ?></strong><br><?php echo get_field('event_date_time',false,false); ?> |  <?php echo get_field('event_location'); ?>
                  </div>
               </a>
               <div class="horizline"></div>
               <a href="<?php echo get_the_permalink(); ?>">
                  <div class=" today impact rightalign desc min-height-head">
                     <strong class="eventcolor"><?php echo get_the_title(); ?></strong>
                  </div>
               </a>
               <div class="abt_after_banner_left_desc ">
                  <a href="<?php echo get_the_permalink(); ?>">
                     <div class=" het1 abttxt"><?php echo get_the_excerpt(); ?></div>
                  </a>
                  <?php 
                  $event_link = get_field('event_link');
                  //if($event_link){ ?>
                    <!--  <a class="know knowblog" href="<?php echo $event_link; ?>"> -->
                  <?php
                  //}else{ ?>
                      <a class="know knowblog" href="<?php echo get_the_permalink(); ?>">
                  <?php
                 // }
                  ?>
                 <?php echo get_field('event_cta'); ?> <span class="glyphicon glyphicon-chevron-right"></span></a>
               </div>
            </div>
         </div>
      <?php endwhile; wp_reset_postdata(); ?>
   </div>
</section>
<section id="stories">
   <div class="row ">
      <div class="col-md-12 col-sm-12 col-xs-12 abt_after_banner_left_desc">
         <div class="col-md-6 col-sm-6 col-xs-8 padding-head">
            <div class="location"><?php echo get_field('success_stories_heading'); ?></div>
         </div>
         <div class="col-md-6 col-sm-6 col-xs-4"><a href="<?php echo site_url(); ?>/success-stories/" class="view txtcnt">View All</a></div>
      </div>
      <?php
      $success_stories = array('post_type' => 'casestudy','post_status' => 'publish',
        'posts_per_page' => 3,'order' => 'DESC');
      $success_stories_loop = new WP_Query( $success_stories ); 
        
      while ( $success_stories_loop->have_posts() ) : $success_stories_loop->the_post();?>
         <div class="col-md-4 col-sm-4 col-xs-12 resorce ">
            <div class="firstres experience_margin" >
               <a href="<?php echo get_the_permalink(); ?>">
                  <img class="imgh1" src="<?php echo get_the_post_thumbnail_url(); ?>">
               </a>
               <div class="cs_category">
                  <?php $cat = get_the_category(); 
                  foreach ($cat as $cname) {
                     echo $cname->cat_name;
                  }
               ?></div>
               <div class="r_cs_text_wrapper">
                  <a href="<?php echo get_the_permalink(); ?>">      
                     <div class="sec abttxt success_stories_title_height"><?php echo get_the_title(); ?></div>
                  </a>
                  <div class="sec abttxt">
                     <a href="<?php echo get_the_permalink(); ?>" class="Get "> Get the full story<span class="glyphicon glyphicon-chevron-right"></span></a>
                  </div>
               </div>
            </div>
         </div>
      <?php
      endwhile;
      wp_reset_postdata(); 
      ?>
   </div>
</section>
<div class="resevents">
   <section id="recentblogs">
      <div class="row ">
         <div class="col-md-12 col-sm-12 col-xs-12 abt_after_banner_left_desc">
            <div class="col-md-6 col-sm-6 col-xs-8 padding-head">
               <div class="location"><?php echo get_field('blogs_heading'); ?></div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-4 "><a href="<?php echo site_url(); ?>/blog" class="view txtcnt">View All</a></div>
         </div>
         <?php
         $blogs = array('post_type' => 'post','post_status' => 'publish','posts_per_page' => 3,'order' => 'DESC');
         $blogs_loop = new WP_Query( $blogs );         
         while ( $blogs_loop->have_posts() ) : $blogs_loop->the_post();?>
            <div class="col-md-4 col-sm-4 col-xs-12 resorce ">
               <?php $post_thumbnail = get_the_post_thumbnail_url();
               if($post_thumbnail){?>
                  <a href="<?php echo get_the_permalink(); ?>"> 
                     <img class="imgh1" src="<?php echo $post_thumbnail; ?>">
                  </a>
               <?php
               }else{ ?>
                  <a href="<?php echo get_the_permalink(); ?>"> 
                     <img class="imgh1" src="<?php echo get_stylesheet_directory_uri(); ?>/images/default.png">
                  </a>
               <?php
               }
               ?>
               <div class="ebook today rightalign blog">
                  <a href="<?php echo get_the_permalink(); ?>"> 
                     <div class="impact resstrong desc"><strong><?php echo get_the_title(); ?></strong></div>
                  </a>
                  <div class="abt_after_banner_left_desc">
                     <a href="<?php echo get_the_permalink(); ?>"> 
                        <div class="abttxt blog_text_desc" ><?php echo get_the_excerpt(); ?></div>
                     </a>
                     <div class="authorblog">by <?php echo get_the_author(); ?> on <?php echo get_the_date('M d, Y'); ?></div>
                     <a class="know knowblog" href="<?php echo get_the_permalink(); ?>">Read more <span class="glyphicon glyphicon-chevron-right"></span></a>
                  </div>
               </div>
            </div>
         <?php endwhile; wp_reset_postdata(); ?>
      </div>
   </section>
</div>
<section id="newsandpress">
   <div class="row ">
      <div class="col-md-12 col-sm-12 col-xs-12 abt_after_banner_left_desc">
         <div class="col-md-6 col-sm-6 col-xs-8 padding-head">
            <div class="location"><?php echo get_field('news_&_press_releases_heading'); ?></div>
         </div>
         <div class="col-md-6 col-sm-6 col-xs-4 view-padding"><a href="<?php echo site_url(); ?>/news-press-releases/" class="view txtcnt">View All</a></div>
      </div>

      <?php
      $news_press = array('post_type' => array('news','pressrelease'),'post_status' => 'publish','posts_per_page' => 3,'orderby' => 'date','order' => 'DESC');
      $news_press_loop = new WP_Query( $news_press ); 
        
      while ( $news_press_loop->have_posts() ) : $news_press_loop->the_post();?>
         <?php //echo get_post_type(); ?>
            <div class="col-md-12 col-sm-12 col-xs-12 press ebook space3 padzero borderrad">
               <div class ="news">
                  <div class="col-md-3 col-sm-3 col-xs-3 newspress padzero ">
                     <div class="eventweb"><strong><?php echo get_post_type(); ?></strong></div>
                     <?php 
                        $news_press_post_thumbnail = get_the_post_thumbnail_url();
                        if($news_press_post_thumbnail){?>
                           <a href="<?php echo get_the_permalink(); ?>"> 
                              <img src="<?php echo $news_press_post_thumbnail; ?>">
                           </a>
                        <?php
                        }else{ ?>
                           <a href="<?php echo get_the_permalink(); ?>"> 
                              <img class="imgh1" src="<?php echo get_stylesheet_directory_uri(); ?>/images/default.png">
                           </a>
                        <?php
                        }
                     ?>
                     <div class="eventweb"><?php echo get_the_date('M d, Y'); ?></div>
                  </div>
                  <div class="col-md-9 col-sm-9 col-xs-9 space3 rightalign">
                     <div class="hr"></div>
                     <a href="<?php echo get_the_permalink(); ?>"> 
                        <div class=" today newshead rightalign desc  vlpadding"><strong ><?php echo get_the_title(); ?></strong></div>
                     </a>
                     <div class="abt_after_banner_left_desc">
                        <a href="<?php echo get_the_permalink(); ?>"> 
                           <div class=" het1 paddingbot vlpadding abttxt"><?php echo get_the_excerpt(); ?></div>
                        </a>
                        <div class="vl"></div>
                        <a class="know knowblog vlpadding" href="<?php echo get_the_permalink(); ?>">Read more<span class="glyphicon glyphicon-chevron-right"></span></a>
                     </div>
                  </div>
               </div>
            </div>
      <?php endwhile; wp_reset_postdata(); ?>
      <!-- <div class="col-md-12 col-sm-12 col-xs-12 press ebook space3 padzero borderrad">
         <div class ="news">
            <div class="col-md-3 col-sm-3 col-xs-12 newspress padzero ">
               <p class="eventweb"><strong>News</strong></p>
               <img class="imgh" src="http://zensciences.com/kpisoft/wp-content/themes/ultrabootstrap-child/images/articulate.png">
               <p class="eventweb">Sep 04, 2019</p>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12 space3 rightalign  ">
               <div class="hr"></div>
               <p class=" today impact  rightalign desc  vlpadding"><strong >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et lacus felis. Donec pharetra, sem et luctus tristique, quam velit convallis justo.</strong></p>
               <div class="abt_after_banner_left_desc  ">
                  <p class=" het1 paddingbot vlpadding abttxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et lacus felis. Donec pharetra, sem et luctus tristique, quam velit convallis justo, vestibulum placerat leo sem quis felis. Ut nec dolor tempus, malesuada turpis vel, congue lacus. </p>
                  <div class="vl"></div>
                  <a class="know knowblog  vlpadding" href="http://zensciences.com/entomo/blog/">Read more<span class="glyphicon glyphicon-chevron-right"></span></a>
               </div>
            </div>
         </div>
      </div> -->
      <!-- <div class="col-md-12 col-sm-12 col-xs-12  ebook space3 padzero borderrad">
         <div class ="news">
            <div class="col-md-3 col-sm-3 col-xs-12 newspress padzero ">
               <p class="eventweb"><strong>Press Release</strong></p>
               <img class="imgh" src="http://zensciences.com/kpisoft/wp-content/themes/ultrabootstrap-child/images/dailynews.png">
               <p class="eventweb">Sep 04, 2019</p>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12 space3 rightalign  ">
               <div class="hr"></div>
               <p class=" today  impact rightalign desc  vlpadding"><strong >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et lacus felis. Donec pharetra, sem et luctus tristique, quam velit convallis justo.</strong></p>
               <div class="abt_after_banner_left_desc  ">
                  <p class=" het1 paddingbot vlpadding abttxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et lacus felis. Donec pharetra, sem et luctus tristique, quam velit convallis justo, vestibulum placerat leo sem quis felis. Ut nec dolor tempus, malesuada turpis vel, congue lacus. </p>
                  <div class="vl"></div>
                  <a class="know knowblog  vlpadding" href="http://zensciences.com/entomo/blog/">Read more<span class="glyphicon glyphicon-chevron-right"></span></a>
               </div>
            </div>
         </div>
      </div> -->
   </div>
</section>
<section>
   <div class="col-md-12 col-sm-12 col-xs-12 ">
   <div class="backimg">
      <img class="desktop" src="<?php echo get_field('pre_footer_desktop_image'); ?>" alt="KPISOFT">
      <img class="mob" src="<?php echo get_field('pre_footer_mobile_image'); ?>" alt="KPISOFT">
   </div>
   
   <div class="container3a brings ">
      <div class="tomorrow"><?php echo get_field('pre_footer_section_heading',false,false); ?><br><span class="today"><?php echo get_field('pre_footer_section_description',false,false); ?></span>
      </div>
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
<?php  get_footer(); ?>