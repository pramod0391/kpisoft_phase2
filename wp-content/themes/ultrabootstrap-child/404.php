<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package ultrabootstrap
 */

get_header(); ?>
<div class="col-md-12 col-sm-12 col-xs-12" id="page_banner">
   <div class="backimg">
      <img class="desktop"src="<?php echo get_stylesheet_directory_uri();?>/images/error.png">
      <img class=" mob " src="<?php echo get_stylesheet_directory_uri();?>/images/errormob.png">
   </div>
   
</div>
<div class="col-md-12 col-sm-12 col-xs-12 " >
   <div class="container">
      <p class="regional middle">We can’t seem to find the page you’re looking for<br><br>
      	<a href="<?php echo site_url(); ?>"><span class="btn1">Return to home <span class="glyphicon glyphicon-chevron-right"></span></span></a>
      	</p>

<?php get_footer(); ?>