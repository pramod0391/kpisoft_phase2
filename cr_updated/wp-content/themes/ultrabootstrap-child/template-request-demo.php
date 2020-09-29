<?php
/**
 * Template Name: Request Demo
 * The template used for displaying fullwidth page content in Demo page
 *
 * @package ultrabootstrap
 */
get_header(); ?>
<div class="col-md-12 col-sm-12 col-xs-12 banner yellowimgs" id="page_banner">
   <div class="row12">
      <div class="col-md-6 col-sm-6 col-xs-12 request">
      <div class=" request_demo_sec">
         <div class="row1 ">
            <div class="performancetextsol">
               <div class="banner_heading set desktop">
                  <div class="performancetextsol ">
                     <?php echo get_field('banner_text',false,false); ?></div>
               </div>
               <div class="banner_heading set mob">
                  <div class="requesttxt  "><?php echo get_field('banner_text',false,false); ?></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-md-6 col-sm-6 col-xs-12 contact_form_wrapper requesttop">
      <div class="text">
         <div class="contact_form">
            <!--[if lte IE 8]>
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
            <![endif]-->
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
            <script>
            hbspt.forms.create({
                portalId: "1750400",
                formId: "ff08e657-2d89-4ca6-96b7-5861fa34c887"
            });
            </script>
            <?php //echo do_shortcode('[contact-form-7 id="76" title="Contact Us Form"]'); ?>
            
         </div>
      </div>
   </div>
   </div> 
   
</div>

<div class="row_c"></div>

<div class="row breadcrumbs">
   <a href="<?php echo site_url(); ?>">Home</a> / <b>Request Demo </b>
</div>

<div class=" col-md-12 col-sm-12 col-xs-12 paddingbot">
   <!-- <div class="container1 "> -->
   <div class="row request_demo_content">
      <div class="row12">
         <div class="col-md-6 col-sm-6 col-xs-12 ">
            <div class="location demo_head"><?php echo get_field('request_demo_after_banner_section_heading'); ?></div>
            <div class="demo_after_banner_desc ">
               <?php echo get_field('request_demo_after_banner_description'); ?>
            </div>
              <!--  <ul class="believe paddingbot  ">
                  <li>How to create a well-defined and aligned goals culture </li>
                  <li>How to drive performance behaviors  </li>
                  <li>How to ensure the achievement of goals with timely, personalized insights </li>
                  <li>How to better engage your teams with continuous feedback </li>
                  <li>How to empower people to perform, learn and grow</li>
               </ul>
            <p class=" reqbelive">With KPISOFT, we’re changing the way enterprises and teams approach performance.</p> -->
         </div>
         <div class="col-md-6 col-sm-6 col-xs-12 txtalign requesttop desktop">
            <img class=" pull-right imgreq" src="<?php echo get_stylesheet_directory_uri();?>/images/rectangle1561.png">
         </div>
      </div>
   </div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 global_sec">
   <img class=" img3" src="<?php echo get_stylesheet_directory_uri();?>/images/rombus1.png">
   <div class="row request_demo_content">
      <div class="location centercase demo_head"><?php echo get_field('customer_logos_section_heading'); ?></div>
      <div class="row images logo_slide logo_slide1">
         <?php    if( have_rows('customer_logos') ):
                     while( have_rows('customer_logos') ) : the_row(); ?>
                        <div class="single_logo">
                           <img src="<?php echo get_sub_field('customer_logo'); ?>" alt="Customer Logo">
                        </div>
      <?php          endwhile; 
                  endif;
      ?>
      </div>
      
   </div>
</div>

<?php get_footer(); ?>