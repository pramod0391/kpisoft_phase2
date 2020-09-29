<?php
   /**
    * Template Name: Contact Page 
    * The template used for displaying fullwidth page content in Contact page
    *
    * @package ultrabootstrap
    */
   get_header(); ?>
<div class="col-md-12 col-sm-12 col-xs-12 banner cont_mar_top" id="page_banner">
   <div class="backimg">
      <img class="desktop" src="<?php echo get_field('banner_image_desktop'); ?>">
      
   </div>
   <div class="mob yellowimg">
      <div class="banner_heading set mob ">
         <p class="requesttxt"><strong><?php echo get_field('banner_text',false,false); ?></strong></p>
            <img class="girl" src="<?php echo get_field('banner_image_mobile'); ?>">
      </div>

   </div>

   <div class="col-md-6 col-sm-6 col-xs-12 contact_form_wrapper">
      <div class="text">
         <div class="performancetextsol text1 desktop"><?php echo get_field('banner_text',false,false); ?></div>
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
<div class="row_c"></div>
<div class="row breadcrumbs">
	<a href="<?php echo site_url(); ?>">Home</a> / <b>Contact Us</b>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 location">
   <div class="container1 ">
      <div class="col-md-6 col-sm-6 col-xs-12 txtalign">
         <div><?php echo get_field('request_demo_after_banner_section_heading'); ?></div>
         <div class="believe contact_desc">
            <?php echo get_field('request_demo_after_banner_description'); ?>
         </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 txtalign display_contact">
         <img class="wid pull-right imgcont" src="<?php echo get_stylesheet_directory_uri();?>/images/rectangle1561.png">
      </div>
   </div>
</div>
<div class="row_c"></div>
<div class="col-md-12 col-sm-12 col-xs-12">
   <div class="container1 ">
      <div class="row12 txtalign">
         <div class="col-md-12 col-sm-12 col-XS-12">
            <div class="regional regional1 paddingbot padlefrit"><?php echo get_field('regional_headquarters_heading'); ?></div>
         </div>
      </div>
      <div class="row txtalign">
         <?php while( have_rows('headquarters_data') ) : the_row(); ?>
            <div class="col-md-3 col-sm-3 col-xs-12 location_sec">
               <img class="wid" src="<?php echo get_sub_field('headquarter_map'); ?>">
               <div class="contlocation1  ">
                  <span class="text1"><?php echo get_sub_field('headquarter_region'); ?></span><br>
                  <span class="text2"><?php echo get_sub_field('headquarter_city'); ?></span><br>
                  <span class="contlocation"><?php echo get_sub_field('headquarter_address'); ?><a href="tel:<?php echo get_sub_field('headquarter_contact_number'); ?>">Tel: <?php echo get_sub_field('headquarter_contact_number'); ?></a></span>
               </div>
            </div>
         <?php endwhile; ?>
         
         <!-- <div class="col-md-3 col-sm-3 col-xs-12 location_sec">
            <img class="wid" src="<?php echo get_stylesheet_directory_uri();?>/images/asia.png">
            <p class="contlocation1">
               <span class="text1">Asia Pacific</span><br>
               <span class="text2">Singapore</span><br>
               <span class="contlocation">1 Raffles Place,<br> #02-01 One Raffles Place Mall,<br> Singapore 048616<br> <a href="tel:+65 3138 1767">Tel: +65 3138 1767</a></span><br>
            </p>
         </div> -->
      </div>
   </div>
</div>
<div class="row_c"></div>
<div class="col-md-12 col-sm-12 col-xs-12" >
   <div class="container1 innovaton_sec container2">
      <div class="row12 txtalign">
         <div class="col-md-12 col-sm-12 col-sm-12">
            <div class="regional regional2 padlefrit regional_sec"><?php echo get_field('innovation_center_section_heading'); ?></div>
         </div>
      </div>
      <?php while( have_rows('innovation_center_location') ) : the_row(); ?>
            <div class="col-md-6 col-sm-6 col-xs-12 txtalign align-top">
               <div class="col-md-4 col-sm-6 col-xs-12 ">
                  <img class="yellowimg imageborder" src="<?php echo get_sub_field('innovation_center_location_image');?>">
               </div>
               <div class="col-md-8 col-sm-6 col-xs-12 "><div class="contlocation1">
                     <span class="text1"><?php echo get_sub_field('innovation_center_city_name');?> </span>
                     <span class="contlocation"><?php echo get_sub_field('innovation_center_address');?>
                     <a href="tel:<?php echo get_sub_field('innovation_center_contact_number');?>">Tel: <?php echo get_sub_field('innovation_center_contact_number');?></a></span>
                  </div>
               </div>        
            </div>
      <?php endwhile; ?>
   </div>
</div>
<div class="row_c"></div>
<div class="col-md-12 col-sm-12 col-xs-12 innovaton_sec1">
   <div class="other_location_sec container2">
      <div class="row12 txtalign container1 ">
         <div class="col-md-12 col-sm-12 col-sm-12">
            <div class="regional padlefrit regional_sec"><?php echo get_field('contact_other_locations_sec_heading'); ?></div>
         </div>
      </div>
      <div class="row">
         <?php while( have_rows('other_locations') ) : the_row(); ?>
            <div class="col-md-4 col-sm-4 col-xs-12 middle">
               <img class="yellowimg imageborder other_loc_sec" src="<?php echo get_sub_field('other_location_image');?>">
               <div class="contlocation1 locationcontain">
                  <span class="text2 "><?php echo get_sub_field('other_location_city_name');?> <br><a href="tel:<?php echo get_sub_field('other_location_contact_number');?>">Tel: <?php echo get_sub_field('other_location_contact_number');?></a></span>
               </div>
            </div>
         <?php endwhile; ?>
         
         <!-- <div class="col-md-4 col-sm-4 col-xs-12">
            <img class="yellowimg" src="<?php echo get_stylesheet_directory_uri();?>/images/square.png">
            <p class="contlocation1">
               <span class="text2">Jakarta <br><a href="tel:+62 8034 924 8340 330">Tel: +62 8034 924 8340 330</a></span>
            </p>
         </div>
         <div class="col-md-4 col-sm-4 col-xs-12">
            <img class="yellowimg" src="<?php echo get_stylesheet_directory_uri();?>/images/jose.png">
            <p class="contlocation1">
               <span class="text2">Manila <br><a href="tel:+1800 131 20023">Tel: +1800 131 20023</a></span>
            </p>
         </div> -->
      </div>
   
   <!-- <div class="row12">
      <div class="col-md-4 col-sm-4 col-xs-12">
         <img class="yellowimg" src="<?php echo get_stylesheet_directory_uri();?>/images/liberty.png">
         <p class="contlocation1">
            <span class="text2">New York <br><a href="tel:+1 (800) 947 8211">Tel: +1 (800) 947 8211</a></span>
         </p>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
         <img class="yellowimg" src="<?php echo get_stylesheet_directory_uri();?>/images/houston.png">
         <p class="contlocation1">
            <span class="text2">Houston <br><a href="">Tel: +1 (800) 947 8211</a></span>
         </p>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
         <img class="yellowimg" src="<?php echo get_stylesheet_directory_uri();?>/images/tokyo.png">
         <p class="contlocation1">
            <span class="text2">Tokyo <br><a href="tel:+81 6633868087">Tel: +81 6633868087</a></span>
         </p>
      </div>
   </div> -->
   <!-- <div class="row12">
      <div class="col-md-4 col-sm-4 col-xs-12">
         <img class="yellowimg" src="<?php echo get_stylesheet_directory_uri();?>/images/hongkong.png">
         <p class="contlocation1">
            <span class="text2">Hong Kong <br><a href="tel:+852 800 969 133">Tel: +852 800 969 133</a></span>
         </p>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
         <img class="yellowimg" src="<?php echo get_stylesheet_directory_uri();?>/images/abudabhi.png">
         <p class="contlocation1">
            <span class="text2">Abu Dhabi <br><a href="tel:+971 4399 52 53">Tel: +971 4399 52 53</a></span>
         </p>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
         <img class="yellowimg" src="<?php echo get_stylesheet_directory_uri();?>/images/bangkok.png">
         <p class="contlocation1">
            <span class="text2">Bangkok <br><a href="tel:+66 1800 019 265">Tel: +66 1800 019 265</a></span>
         </p>
      </div>
   </div> -->
</div>
<div class="row_c"></div>
<div class="col-md-12 col-sm-12 col-xs-12 display_contact">
   <div class="col-md-7 col-sm-7 col-xs-7"><img class="imgleft"  src="<?php echo get_stylesheet_directory_uri();?>/images/quatercircle.png"></div>
   <div class="col-md-5 col-sm-5 col-xs-5 contfotright"><img  src="<?php echo get_stylesheet_directory_uri();?>/images/substraction.png"></div>
</div>




</div>
<?php get_footer(); ?>