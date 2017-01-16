jQuery.fn.slideFadeToggle  = function(speed, easing, callback) {
        return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
};
jQuery(document).ready(function () {	
	
jQuery("ul#main-menu").on('mouseenter', 'li', function() {
			var $this    = jQuery(this),
				$subMenu = $this.children('ul');
			if( $subMenu.length ) $this.addClass('hover');
			$subMenu.hide().stop(true, true).slideFadeToggle(200);
		}).on('mouseleave', 'li', function() {
			jQuery(this).removeClass('hover').children('ul').stop(true, true).slideFadeToggle(200);
		});

jQuery('#main-menu li ul').mouseenter(function(){
		jQuery(this).parent().find("a").slice(0,1).addClass("active");
	});
	jQuery('#main-menu li ul').mouseleave(function(){
		jQuery(this).parent().find("a").slice(0,1).removeClass("active");
	});
	
jQuery('#main-menu li ul ul').mouseenter(function(){
		jQuery(this).parent().find("a").slice(0,1).removeClass("active");
	});
	
});

