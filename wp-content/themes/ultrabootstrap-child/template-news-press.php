<?php
/**
 * Template Name: News & Press
 * The template used for displaying fullwidth page content in Blog page
 *
 * @package ultrabootstrap
 */

get_header(); ?>

<section id="about_banner">
  <div class="row" id="page_banner">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/newspressban .png" class="desktop_img">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/career-mob-banner.png" class="mobile_img">
    <div class="about_banner_text txtnorm">
       <strong>KPISOFT</strong><br>newsroom  
    </div>
  </div>
</section>
<div class="row_c"></div>
<div class="row breadcrumbs mt1">
   <a href="<?php echo site_url(); ?>">Home</a> / <a href="<?php echo site_url(); ?>/resource">Resources</a> / <b> Newsroom</b>  
</div>

<section class="newspressroomdesfilter">
  <div class="col-md-12 col-sm-12 col-xs-12"> 
    <div class="news_form">
      <div class="form-group2">
        <select name="news" id="news" class="newsfilter">
          <option value="volvo">Filter</option>
          <option value="saab">Filter2</option>
        </select>
      </div>
    </div>
  </div>
</section>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Newsroom')" id="defaultOpen">Newsroom</button>
  <button class="tablinks" onclick="openCity(event, 'Pressreleases')">Press Releases</button>
 
</div>

<section class="newspressroomdes2 tabcontent" id="Newsroom">
  <?php 
  $news = array('post_type' => array('news'),'post_status' => 'publish','posts_per_page' => 5,'orderby' => 'date','order' => 'DESC');
  $news_loop = new WP_Query($news);
  while ( $news_loop->have_posts() ) : $news_loop->the_post();?>

      <div class="col-md-12 col-sm-12 col-xs-12 newsbox">
        <div class=" midcent" >
          <?php 
              $news_thumbnail = get_the_post_thumbnail_url();
              if($news_thumbnail){?>
                  <a href="<?php echo get_the_permalink(); ?>">
                    <img class="newsboximg" src="<?php echo $news_thumbnail; ?>" alt="News">
                  </a>
              <?php
              }else{ ?>
                  <a href="<?php echo get_the_permalink(); ?>">
                    <img class="imgh1" src="<?php echo get_stylesheet_directory_uri(); ?>/images/default.png" alt="News">
                  </a>
              <?php
              }
           ?>           
           <div class="date dis"><?php echo get_the_date('M d, Y'); ?></div>
        </div>

        <div class="rtd " >
           <div class="hr"></div>
           <div class="rtnews">
              <a href="<?php echo get_the_permalink(); ?>">
                <div class="newshead vlpaddings"><?php echo get_the_title(); ?></div>
              </a>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rombus1.png">
          </div>
           <div class="vinews"></div>
            <a href="<?php echo get_the_permalink(); ?>">
              <div class="newsdesc vlpaddings"><?php echo get_the_excerpt(); ?></div>
            </a>
            <a href="<?php echo get_the_permalink(); ?>" class="read vlpaddings dis">Read more  <span class="glyphicon glyphicon-chevron-right"></span></a>         
        </div>
     </div>

  <?php endwhile;wp_reset_postdata();?>

</section>

<section class="newspressroomdes2 tabcontent" id="Pressreleases">
   <?php 
    $press = array('post_type' => array('pressrelease'),'post_status' => 'publish','posts_per_page' => 5,'orderby' => 'date','order' => 'DESC');
    $press_loop = new WP_Query($press);
  while ( $press_loop->have_posts() ) : $press_loop->the_post();?>
      <div class="col-md-12 col-sm-12 col-xs-12 newsbox">
        <div class="rtnews">
          <a href="<?php echo get_the_permalink(); ?>">
            <div class="newshead vlpadding"><?php echo get_the_title(); ?></div>
          </a>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rombus1.png"></div>
          
          <a href="<?php echo get_the_permalink(); ?>">  
            <div class="newsdesc vlpadding"><?php echo get_the_excerpt(); ?></div>
          </a>
          <a href="<?php echo get_the_permalink(); ?>" class="read vlpadding">Read more  <span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>
  <?php endwhile; wp_reset_postdata(); ?>
</section>
<!-- <img src="quater.png" > -->

<div class="col-md-12 col-sm-12 col-xs-12" > <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quater.png" class="circleimg"></div>

<div class="col-md-12 col-sm-12 col-xs-12 blank" >;
</div>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>
<?php  get_footer(); ?>



