/****************Materialize Initialization***************************/
(function($){
  $(function(){
    $('.button-collapse').sideNav();
    $('.parallax').parallax();
	
	if ($('.banner').length) { // Checks if widget div exists (Index only)
      $.ajax({
        url: "https://api.github.com/repos/CodeLarva/Front_end/commits/master",
        dataType: "json",
        success: function (data) {
		var window_width = $(window).width();
		  var name = data.author.login
				date = jQuery.timeago(data.commit.author.date);
          if (window_width < 1120) {
            sha = sha.substring(0,7);
          }
		  $('.banner').find('.name').html(name).attr('href', data.author.html_url);
		  $('.banner').find('.date').html(date);
        }
      });
    }
	
  }); // end of document ready
})(jQuery); // end of jQuery name space
/******************Scroll to top initialization************************/
jQuery(document).ready(function() {
    var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });
    
    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});
/********************Page bottom detect and alert*********************/
$(window).scroll(function() {
   if($(window).scrollTop() + $(window).height() == $(document).height()) {
       //alert("bottom!");
	   preloader.on();
   }
   else{
	   preloader.off();
   }
});
/*****************scroll to div**********************************/
jQuery('#down').click(function(e) {
    jQuery('html,body').animate({ scrollTop: jQuery(this.hash).offset().top}, 1000);
    return false;
    e.preventDefault();
 });
 jQuery('#nav_read').click(function(e) {
    jQuery('html,body').animate({ scrollTop: jQuery(this.hash).offset().top}, 1000);
    return false;
    e.preventDefault();
 });
  jQuery('#about').click(function(e) {
    jQuery('html,body').animate({ scrollTop: jQuery(this.hash).offset().top}, 1000);
    return false;
    e.preventDefault();
 });
   jQuery('#home').click(function(e) {
    jQuery('html,body').animate({ scrollTop: jQuery(this.hash).offset().top}, 1000);
    return false;
    e.preventDefault();
 });
 jQuery('#contact').click(function(e) {
    jQuery('html,body').animate({ scrollTop: jQuery(this.hash).offset().top-63}, 1000);
    return false;
    e.preventDefault();
 });