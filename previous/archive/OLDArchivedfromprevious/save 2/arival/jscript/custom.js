jQuery.noConflict();
jQuery(document).ready(function(){


	/*
	  * FORM ***
	*/
	
	
	jQuery("#formMail").submit(function(){
		jQuery.ajax({
			type: "POST",
			url: "sendMail.php",
			data: jQuery(this).serialize(),
			success: function(response) {
				jQuery("#alert").ajaxComplete(function() {
					if(response == 'ok') {
						jQuery(this).html('<p>Your message has been sent. Thanks!</p>');
						jQuery("#name, #email, #subject, #message").val('');
						jQuery(this).stop().animate({
 							opacity: 1
 						}, 400, function(){
							interval = setInterval(hideAlert, 8000);
						});
					} else {
						jQuery(this).html(response);
						jQuery(this).stop().animate({
 							opacity: 1
 						}, 400, function(){
							interval = setInterval(hideAlert, 4000);
						});
					}
				});
			}
		});
		return false;
	});
	
	var hideAlert = function(){
		clearInterval(interval);
		jQuery("#alert").stop().animate({opacity:0}, 400);
	};


	/*
	  * MENU ***
	*/


	jQuery(function(){
		jQuery("ul.sf-menu").superfish();
	});


	/*
	  * SLIDES ***
	*/

	if (jQuery("#featured img").length > 1){
		jQuery("#featured_button_prev, #featured_button_next").css({display:"block"});
		jQuery("#featured").cycle({
			fx: 'fade',
    		next: '#featured_button_next', 
    		prev: '#featured_button_prev',
    		timeout: 5000
    	});
    	jQuery("#featured").css({zIndex:0});
    	jQuery("#featured_button_prev").css({zIndex:1});
		jQuery("#featured_button_next").css({zIndex:2});
	}
	
	jQuery("#slide").cycle({
		fx: 'fade',
    	next: '#slide_button_next', 
    	prev: '#slide_button_prev',
    	timeout: 9000
    });
    
    jQuery("#news_ticker ul").cycle({
		fx: 'fade',
   		timeout: 9000
    });
    
   	jQuery("#gallery").css({zIndex:0});
   	if (jQuery("#gallery img").length > 1){
    	jQuery("#gallery").cycle({
			fx: 'fade',
   			timeout: 5000
    	});
    }


	/*
	  * GALLERIES ***
	*/


	jQuery(".slide_items a, #galleries a").contents("img").hover(function(){
		jQuery(this).stop().animate({opacity:0.5}, 400);
	}, function() {
		jQuery(this).stop().animate({opacity:1}, 400);
	});
	
	jQuery("a[rel^='prettyPhoto']").prettyPhoto({
		"theme": 'light_square' /* light_rounded / dark_rounded / light_square / dark_square */																
	});
});