<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ultrabootstrap
 */

?>
		<!-- Tab to top scrolling -->
		<div class="scroll-top-wrapper"> <span class="scroll-top-inner">
  			<i class="fa fa-2x fa-angle-up"></i>
    		</span>
    	</div> 
		<section id="footers">
		<div class="footers">
        <div class="row">
            <?php dynamic_sidebar( 'footer-logo' ); ?>
            <div class="footer_content_wrapper row">
            	<div class="col-md-5 col-sm-5 col-xs-12 footer_address">
            		<?php dynamic_sidebar( 'footer-1' ); ?>
            	</div>            
            	<div class="col-md-7 col-sm-7 col-xs-12 footer_menu_container_wrapper">
            		<div class="row">
            			<div class="col-md-4 col-sm-4 col-xs-12 footer_menu_first">
            				<?php dynamic_sidebar( 'footer-2' ); ?>
            			</div>
            			<div class="col-md-4 col-sm-4 col-xs-12 footer_menu_second">
            				<?php dynamic_sidebar( 'footer-3' ); ?>
            			</div>
            			<div class="col-md-4 col-sm-4 col-xs-12 footer_menu_third">
            				<?php dynamic_sidebar( 'footer-4' ); ?>
            			</div>
            		</div>
            	</div> 
            </div>      
        </div>
        <div class="copy_rights row">
            <?php dynamic_sidebar( 'footer-copy_rights' ); ?>
        </div>
    </div>
		</section>
		<?php wp_footer(); ?>
	</body>
</html>