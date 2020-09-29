<?php

/**

 * The template for displaying all single Event posts.

 *

 * @package ultrabootstrap

 */



get_header(); ?>

<section id="events_details">

	<div class="row events_details_sec">

		<div class="col-12 col-sm-7 col-md-8">

			<div class="events_details_wrap">

				<div><?php echo get_the_title(); ?></div>

				<div class="event_date"><?php echo get_field('event_date_time',false,false);?> <?php echo get_field('event_location'); ?></div>

				<div class="events_desc"><?php echo get_the_content(); ?></div>

				<!-- <h5>Agenda</h5>

				<ul class="events_details_list_desc">

					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>

					<li>consectetur adipiscing elit, sed do</li>

					<li>consectetur adipiscing elit, sed do</li>

					<li>voluptate velit esse cillum dolore eu fugiat nulla pariatur</li>

				</ul>

				<h5>Cost</h5>

				<p class="events_desc">$200 USD per attendee</p>

				<h5>Cost includes</h5>

				<ul class="events_details_list">

					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>

					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>

					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>

					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>

				</ul> -->

				

				<!-- <div class="speakers">

					<h5>Speakers</h5>

					<div class="speakers_wrap">

						<div class="speaker_details">

							<img src="/kpisoft/wp-content/themes/ultrabootstrap-child/images/event-3.png">

							<p><b>Iustin Covaci</b><br><span>Chief Strategist at ABC</span></p>

						</div>

						<div class="speaker_details">

							<img src="/kpisoft/wp-content/themes/ultrabootstrap-child/images/event-3.png">

							<p><b>Grant Barnes</b>

							<br><span>Director of Virtual Reality at ABC</span></p>

						</div>

					</div>

				</div> -->

				<div class="share">

					<h5>Share this event</h5>

					<div class="social_icons">

						<a target="_blank" href="https://www.facebook.com/sharer.php?s=100&p[url]=<?php echo get_the_permalink(); ?>&p[images][0]=<?php echo get_the_post_thumbnail_url(); ?>&p[title]=<?php echo get_the_title(); ?>&p[summary]=<?php echo get_the_excerpt(); ?>" title="Share on Facebook" class="space">

                     		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blogfb.svg" alt="Facebook">

                  		</a>

	                  	<a target="_blank" href="https://twitter.com/share?url=<?php echo get_the_permalink(); ?>&via=&hashtags=<?php echo get_the_title(); ?>&text=<?php echo get_the_excerpt(); ?>" title="Share on Twitter" class="space">

	                     	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blogtwt.png" alt="Twitter">

	                  	</a>

                  		<a target="_blank" href="https://www.linkedin.com/shareArticle?url=<?php echo get_the_permalink(); ?>&title=<?php echo get_the_title(); ?>" title="Share on Linkedin" class="space">

                     		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blogin.svg" alt="LinkedIn">

                  		</a>

					</div>

				</div>

			</div>

		</div>

		<div class="col-12 col-sm-5 col-md-4 submit_form_wrap">

			<div class="event_form_sec">

				<form>

					<div class="form_head">

						<p>You are just a step away to reserve your spot</p>

					</div>

					<div class="form_div">

						<input type="text" name="fullname" placeholder="Full Name">

					</div>

					<div class="form_div">

						<input type="text" name="email" placeholder="Email*">

					</div>

					<div class="form_div">

						<input type="text" name="phone" placeholder="Phone*">

					</div>

					<div class="form_div">

 						<select id="Country">

 							<option>Country</option>

 						</select>

					</div>

					<div class="form_div">

						<input type="text" name="job_function" placeholder="Job Function*">

					</div>

					<div class="form_div">

						<input type="text" name="company" placeholder="Company*">

					</div>

					<div class="form_div">

 						<select id="Company_size" name="company-size">

 							<option>Company size</option>

 						</select>

					</div>

					<div class="form_btn">

 						<button class="event_register" value="submit">RSVP now</button>

					</div>

					<p class="privacy_policy">By submitting I confirm that I have read and agree to the <u>Privacy Statement</u></p>

				</form>

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