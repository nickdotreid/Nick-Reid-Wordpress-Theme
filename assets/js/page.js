jQuery(document).ready(function(){
	jQuery('body').addClass('js');
	jQuery('#footer').appendTo("body");
	jQuery("#wrapper").append('<br class="cb" />');
	jQuery(window).resize(function(){
		jQuery('body').removeClass('full');
		if(jQuery(this).width()>Number(jQuery('body').css('min-width').replace('px',''))){
			jQuery('body').addClass('full');
			header_height = jQuery("#header").height() + Number(jQuery('#header').css('margin-bottom').replace('px',''))
			header_width = jQuery("#header").width() + Number(jQuery('#header').css('margin-right').replace('px',''))
			if(header_height > jQuery("#main").height()){
//				jQuery("#main").height(header_height);
			}
			if(!jQuery('body').hasClass('home')){
				jQuery('#header').css('left',jQuery('#container').offset().left+"px");
				jQuery("#container").css('padding-top',header_height+"px");
				jQuery("#content h1.entry-title,#content h1.page-title").width(jQuery("#container").width() - header_width).css("position","absolute").css("top","0px").css("left",header_width+"px").height(header_height).wrapInner("<span />")
			}
			if(jQuery('#container').hasClass('portfolio')){
				jQuery("#content").appendTo("#header")
			}
			jQuery(".preview .thumbnail").each(function(){
				thumbnail = jQuery(this);
				preview = thumbnail.parents(".preview:first");
				preview.addClass("hoverable");
				preview.width(thumbnail.width());
				jQuery('.entry-summary',preview).css('margin-top',jQuery('.entry-header',preview).height()+"px");
			})
			jQuery('body').delegate('.preview','mouseenter',function(){
				jQuery(".thumbnail",jQuery(this)).css('opacity',0.2);
			}).delegate('.preview','mouseleave',function(){
				jQuery(".thumbnail",jQuery(this)).css('opacity',1);
			})
		}
	}).resize();
});