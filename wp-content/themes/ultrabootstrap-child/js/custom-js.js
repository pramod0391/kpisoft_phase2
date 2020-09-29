$=jQuery;
$(document).ready(function(){
  $('.plan_all_options i.fa').hover(function(){
    $(this).parent().find('.tooltip_info').fadeIn();
  },function(){
    $('.tooltip_info').fadeOut();
  });

  $('#nav-icon1').click(function(){
    $(this).toggleClass('open');
    $('.mega-menu-toggle').hide();
	$('#mega-menu-wrap-primary .mega-menu-toggle + #mega-menu-primary').show();
  });
  var top_header_text = $('.top_header_text').html();
  //alert(top_header_text);
  //var stylesheet_directory_uri = child_dir.templateUrl;
  var blue_right = stylesheet_directory_uri+'/images/blue_right_arrow.png';   
  var blue_left = stylesheet_directory_uri+'/images/blue_left_arrow.png'; 
  $('.logo_slide').slick({      
      autoplay: true,      
      slidesToShow: 6,
      slidesToScroll: 1,      
      responsive: [  
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        }
      },    
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 4,
        }
      },
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 5,
        }
      },
    ]
  });
	
  $('#menu-black_band-1').slick({      
      autoplay: true,      
      slidesToShow: 1,
      slidesToScroll: 1, 
	  speed: '1200',
	  dots: 'false',
	  arrows: 'false',
      autoplaySpeed: '3000',
  });

  cal_heights();

  $('.home_testimonial_slider').slick({ 
     accessibility: true,
     adaptiveHeight: true,
     centerMode: true,
     centerPadding: '0px',     
     autoplay: false,
     speed: '900',
     autoplaySpeed: '1800', 
     slidesToShow: 3,
     slidesToScroll: 1,
     arrows: true,
     nextArrow:"<img class='testimonial_slick slick_right_arrow' src='"+blue_right+"'>",
     prevArrow:'<img class="testimonial_slick slick_left_arrow" src="'+blue_left+'" alt="Blue Right Arrow">', 
     responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });

  if($(window).width() <= 1024){   
    $('.edition_slick').slick({ 
      centerMode: true,
      autoplay: true,
      speed: '1200',
      autoplaySpeed: '1500',
      slidesToScroll: 1, 
      responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          centerPadding: '7%',
        }
      },
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 2,
           centerPadding: '0',
        }
      }
    ]
    });
  }


  if($(".webinar_form").hasClass("upcoming_webinar")){
    document.getElementsByClassName('wpcf7-submit')[0].value = "Save your spot";
  }

});

$(window).scroll(function() {
    if ($(this).scrollTop() >= 300) { 
       $('nav').addClass('shadow');
    }else{
      $('nav').removeClass('shadow');
    }
});

var page_banner = $('#page_banner');
if (page_banner.length) {
  var distance = page_banner.offset().top;
}

$window = $(window);

$window.scroll(function() {
    if ( $window.scrollTop() >= distance ) {
       //$('.top_header_message,.header_sign_up').slideUp();       
    }
    else{
      //$('.top_header_message,.header_sign_up').slideDown();      
   }
});

$(window).on('load resize', function () { 
  cal_heights();
});

$('button#nav-icon1').click(function(){
  $('nav.navbar.navbar-default.navbar-fixed-top').toggleClass('menu-opened');
});


$('.whitepaper_download_form').submit(function() {
  document.addEventListener('wpcf7mailsent', function( event ) {
    var has_pdf = $('input.whitepaper_pdf').val();
    if(has_pdf){
      $('.wpcf7-response-output').hide();
      window.open(has_pdf);
      $('.modal').modal('hide');
    }else{
      location = '/thank-you/';
    }
  }, false );
});


$('.webinar_form .wpcf7-form').submit(function() {
  document.addEventListener('wpcf7mailsent', function( event ) {
    var video_link = $('.webinar_video_link').html();
    window.open(video_link, '_blank');
  }, false );
});

function cal_heights(){ 	
 
  var get_header = $('nav').height();
  var header_height = get_header - 27;
  $('body').css("margin-top",header_height);header_height
  var abt_exp_sol = $('section#abt_explore_solutions .row').height();
  var set_height_exp_sol = abt_exp_sol + 100;
  $('#abt_explore_solutions > img').height(set_height_exp_sol);

  var gal_col1 = '434';
  var gal_col2_img = parseInt(gal_col1)/2;
  var gal_col1_img = parseInt(gal_col1)+15;

  $('.team2').height(gal_col2_img);
  $('.team1').height(gal_col1_img);

  var heights = $(".cases").map(function ()
    {
        return $(this).height();
    }).get();
  maxHeight = Math.max.apply(null, heights);

  var team_ent_col = 0;
  $(".edition_packs_row .single_col").each(function(){
     if ($(this).height() > team_ent_col) { 
          team_ent_col = $(this).height(); 
      }
  });
  $(".edition_packs_row .single_col").height(team_ent_col);

   var footer_address_widget = 0;
   $(".footer_address .widget").each(function(){
     if ($(this).height() > footer_address_widget) { 
          footer_address_widget = $(this).height(); 
      }
  });
  $(".footer_address .widget").height(footer_address_widget);

  var seperate_jira_sec = team_ent_col - 15;
  $('.performance_col .single_col,.insights_col .single_col,.premium_col .single_col').height(seperate_jira_sec);

  var packs_main_heading = 0;
  $(".packs_main_heading").each(function(){
     if ($(this).height() > packs_main_heading) { 
          packs_main_heading = $(this).height(); 
      }
  });
  $(".packs_main_heading,.packs_heading").height(packs_main_heading);

  var r_ebook_title = 0;
  $(".ebook .impact").each(function(){
     if ($(this).height() > r_ebook_title) { 
          r_ebook_title = $(this).height(); 
      }
  });
  $(".ebook .impact").height(r_ebook_title);

  var r_ebook_desc = 0;
  $(".hetblog").each(function(){
     if ($(this).height() > r_ebook_desc) { 
          r_ebook_desc = $(this).height(); 
      }
  });
  $(".hetblog").height(r_ebook_desc);

  var resevents_title = 0;
  $(".resevents .min-height-head").each(function(){
     if ($(this).height() > resevents_title) { 
          resevents_title = $(this).height(); 
      }
  });
  $(".min-height-head").height(resevents_title);

  var r_cs_title = 0;
  $('.resorce .abt-min-height').each(function(){
     if ($(this).height() > r_cs_title) { 
          r_cs_title = $(this).height(); 
      }
  });
  $(".resorce .abt-min-height").height(r_cs_title);

  var r_blog_desc = 0;
  $('.resorce .blog_text_desc').each(function(){
     if ($(this).height() > r_blog_desc) { 
          r_blog_desc = $(this).height(); 
      }
  });
  $(".resorce .blog_text_desc").height(r_blog_desc);

  var ebooks_name_head = 0;
  $('.events_filter-wrap .ebooks_name_head').each(function(){
     if ($(this).height() > ebooks_name_head) { 
          ebooks_name_head = $(this).height(); 
      }
  });
  $(".events_filter-wrap .ebooks_name_head").height(ebooks_name_head);

  var event_desc = 0;
  $('.events_filter-wrap .event_desc').each(function(){
     if ($(this).height() > event_desc) { 
          event_desc = $(this).height(); 
      }
  });
  $(".events_filter-wrap .event_desc").height(event_desc);

  var ew_events_name_head = 0;
  $(".events_name_head").each(function(){
     if ($(this).height() > ew_events_name_head) { 
          ew_events_name_head = $(this).height(); 
      }
  });
  $(".events_name_head").height(ew_events_name_head);

  var event_desc_para = 0;
  $(".event_desc_para").each(function(){
     if ($(this).height() > event_desc_para) { 
          event_desc_para = $(this).height(); 
      }
  });
  $(".event_desc_para").height(event_desc_para);

  var hm_event_detailshead = 0;
  $(".event_detailshead").each(function(){
     if ($(this).height() > hm_event_detailshead) { 
          hm_event_detailshead = $(this).height(); 
      }
  });
  $(".event_detailshead").height(hm_event_detailshead);

  var hm_event_desc = 0;
  $(".event_desc").each(function(){
     if ($(this).height() > hm_event_desc) { 
          hm_event_desc = $(this).height(); 
      }
  });
  $(".event_detailshead").height(hm_event_desc);

  var event_highlights_wrap_img = 0

  $(".event_highlights_wrap").each(function(){
     if ($(this).height() > event_highlights_wrap_img) { 
          event_highlights_wrap_img = $(this).height(); 
      }
  });
  $(".event_highlights_wrap img").height(event_highlights_wrap_img);
  
//   $('.home_testimonial_slider').on('setPosition', function () {
// 	  $(this).find('.slick-slide').height('auto');
// 	  var slickTrack = $(this).find('.slick-track');
// 	  var slickTrackHeight = $(slickTrack).height();
// 	  $(this).find('.slick-slide').css('height', slickTrackHeight + 'px');
//   });
	
  var sol_cs_yellow_bg_sec = 0;
  $(".sol_yellow_bg").each(function(){
     if ($(this).height() > sol_cs_yellow_bg_sec) { 
          sol_cs_yellow_bg_sec = $(this).height(); 
      }
  });
  $(".sol_yellow_bg").height(sol_cs_yellow_bg_sec);

  var success_stories_title_height = 0;
  $(".success_stories_title_height").each(function(){
     if ($(this).height() > success_stories_title_height) { 
          success_stories_title_height = $(this).height(); 
      }
  });
  $(".success_stories_title_height").height(success_stories_title_height);

  var we_grid = $('.events_filter-wrap:first-child').height();
  $('.events_filter-wrap').height(we_grid);

  var sales_force = $('.jira_sale_force_wrap').height();
  $('.connectors_col').height(sales_force);
}

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top -= 100
        }, 500);
        return false;
      }
    }
  });
});

$(document).on("change", 'select#wp_eb,select#Topic', function (e) {
    e.preventDefault();
    var post_type = $('select#wp_eb').val();
    var wp_topic = $('select#Topic').val();
    $.ajax({
        type: "POST",
        url: stylesheet_directory_uri+"/whitepaper_ebook_filter.php",
        data: {'post_type': post_type,'wp_topic': wp_topic },
        success: function (data) {
          //$('html, body').animate({scrollTop: $("#events_webinars").offset().top}, 2000);
          $('.wp_ebook_data_row').html(data);
          cal_heights();
        }
    });
});

$(document).on("change", '.events_filter select', function (e) {
    e.preventDefault();
    var event_upcoming = $('select#upcoming').val();
    var event_post_type = $('select#events_list').val();
    var event_location = $('select.event_location').val();
    var event_topic = $('select#event_Topic').val();
    $.ajax({
        type: "POST",
        url: stylesheet_directory_uri+"/events_webinar_filter.php",
        data: {'event_post_type': event_post_type,'event_topic': event_topic,'event_upcoming':event_upcoming,'event_location':event_location },
        success: function (data) {
          $('.event_webinar_data').html(data);
          cal_heights();
        }
    });
});

$('.download_wp').click(function(){
   $(".whitepaper_download_form form").trigger("reset");
   $('.whitepaper_download_form .wpcf7-response-output').hide();
  var wp_pdf = $(this).data('href');
  $('input.whitepaper_pdf').val(wp_pdf);
});
