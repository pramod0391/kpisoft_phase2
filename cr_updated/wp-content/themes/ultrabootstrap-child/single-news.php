<?php
/**
 * The template for displaying all single News posts.
 *
 * @package ultrabootstrap
 */
get_header(); ?>
      <div class="row breadcrumbs_blog mt1 ">
         <a href="<?php echo site_url(); ?>">Home</a> / <a href="<?php echo site_url(); ?>/resource">Resources</a> / <a href="<?php echo site_url(); ?>/news-press-releases/"> News </a> / <b> <?php echo get_the_title(); ?> </b>
      </div>

      <section id="news_desription">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">
               <div class="col-md-8 col-sm-7 col-xs-12">
                  <div class="row">
                     <div class="icons">
                        <span class="labels">
                           <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/person.png" class="iconimg">
                           <div>&nbsp;&nbsp;<?php echo get_the_author(); ?></div>
                        </span>
                     </div>
                     <div class="icons1">
                        <span class="labels">
                           <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/calender.png" class="iconimg">
                           <div>&nbsp;&nbsp;<?php echo get_the_date('F j, Y'); ?></div>
                        </span>
                     </div>
                     <?php
                     $total_comments = get_comments_number();
                     if($total_comments > '0'){?>
                        <div class="icons2">
                           <span class="labels">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/msg.png" class="iconimg">
                              <div>&nbsp;&nbsp;<?php echo get_comments_number(); ?></div>
                           </span>
                        </div>
                     <?php
                     }
                     ?>
                     
                  </div>
                  <p class="location newslorem"><?php echo get_the_title(); ?></p>
                  <div class="des_news">
                     <strong><?php echo get_the_date('F j, Y'); ?>:</strong> 
                     <?php  echo get_the_content(); ?>
                  </div>
                  <a href="<?php echo site_url(); ?>/resources/news-press-releases/">
                     <button class="newsdesriptionbutton"><span class="glyphicon glyphicon-chevron-left"></span>Back</button>
                  </a>
               </div>
               <div class="col-md-4 col-sm-5 col-xs-12">
                  <div class="blog_subscribe_from news_subscribe">
                     <?php
                     echo do_shortcode('[contact-form-7 id="2137" title="Blog Subscribe"]');
                     ?>
                  </div>
                  <div class="newsformhead">
                     <div>Discover how kpisoft can help you achieve your objectives</div>
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/recn.png">
                  </div>
                  <div class="news_formdetails">
                     <?php
                     echo do_shortcode('[contact-form-7 id="2423" title="News Details Form"]');
                     ?>
                  </div>
               </div>
            </div>          
         </div>
      </section>

      <section id="prefooterimage">
         <div class="col-md-12 col-sm-12 col-xs-12 ">
            <div class="col-md-7 col-sm-7 col-xs-12 footrimg1">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/substraction.png">
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12 footrimg">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/qurcir.png">
            </div>
         </div>
      </section>
<?php get_footer(); ?>