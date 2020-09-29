<?php
   /**
    * Template Name: Thank You Page 
    * The template used for displaying fullwidth page content in Thank you page
    *
    * @package ultrabootstrap
    */
   get_header(); ?>
<style type="text/css">
   .alignthank{position: absolute;top: 7%;left: 7.5%;}
   .thank{font-size: 30px;}
   .btn1 span{font-size: 11px;}
   .thanks_logos{margin-bottom: 1%;}
   .thankimg{width: 100%;}
   @media (max-width: 480px){.alignthank{left: 6%;}}
   @media (max-width: 1400px) and (min-width: 1201px){/*.alignthank{top: 23%;}*/}
</style>
<div class="col-md-12 col-sm-12 col-xs-12" id="page_banner">
   <div class="backimg">
      <img class="desktop "src="<?php echo get_stylesheet_directory_uri();?>/images/thanku.png">
   </div>
   <div class="mob  ">
      <img class=" girl thankimg" src="<?php echo get_stylesheet_directory_uri();?>/images/thankumob.png">
   </div>
   <div class="container1">
      <div class="row1">
         <div class=" performancetextsol alignthank thank_sec">
            <div class="desktop thanks_para"><span class="text1">Thank you</span><br><span class="text2"> 
               for reaching out to us. Our team will be in touch soon</span>
               <br>
               <span class="privacytxt privacybold">Follow Us</span>
            <div class="thanks_logos desktop">
               <a href="https://www.facebook.com/kpisoftinc/">
               <img src="<?php echo get_stylesheet_directory_uri();?>/images/fb.png">&nbsp;&nbsp;
               </a>
               <!-- <a href="">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/images/insta.png">
               </a>&nbsp;&nbsp; -->
               <a href="https://twitter.com/KPISOFT">
               <img src="<?php echo get_stylesheet_directory_uri();?>/images/twt.png">
               </a>&nbsp;
               <a href="https://www.linkedin.com/company/kpisoft/">
               <img src="<?php echo get_stylesheet_directory_uri();?>/images/ln.png">
               </a>&nbsp;&nbsp;
            </div>
            <a href="<?php echo site_url(); ?>" class="desktop">
            <span class="btn1">Return to home <span class="glyphicon glyphicon-chevron-right"></span></span>
            </a>
            </div>
          
         </div>
         <div class=" performancetextsol alignthank thank_sec">
            <div class="mob thanks_para"><span class="text1 thank">Thank you</span><br><span class="text2 thank"> 
               for reaching out to<br> us. Our team will be <br> in touch soon</span>
               <br>
              <span class="privacytxt privacybold">Follow Us</span><br>
              <div class="thanks_logos mob">
               <span><img src="<?php echo get_stylesheet_directory_uri();?>/images/fbmob.png">&nbsp;&nbsp;</span><!-- <span><img src="<?php echo get_stylesheet_directory_uri();?>/images/instamob.png">&nbsp;&nbsp;</span><br> --><span><img src="<?php echo get_stylesheet_directory_uri();?>/images/twtmob.png">&nbsp;</span><span><img src="<?php echo get_stylesheet_directory_uri();?>/images/lnmob.png">&nbsp;&nbsp;</span><br>
               <a href="<?php echo site_url(); ?>" class="btn1 "><span>Return to home<span> <span class="glyphicon glyphicon-chevron-right"></span>
               </a>
            </div>
               
               
            </div>
         </div>
      </div>
   </div>
</div>
<?php get_footer(); ?>