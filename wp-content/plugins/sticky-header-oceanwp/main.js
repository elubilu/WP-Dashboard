jQuery(document).ready(function($){
    
    var orginal_height = typeof(orginal_height==='undefined') || $('body').hasClass('fixed_sticky_active')==false ? $('#site-logo-inner').height() : orginal_height;
    $(window).scroll(function(){
        sticky_header_oceanwp();
    });
	sticky_header_oceanwp();
	
	function sticky_header_oceanwp(){		
	    
	    var style = typeof(sticky_header_style) !== 'undefined' && sticky_header_style == 'shrink' ? 'shrink' : 'float';

    		var site_header = $('#site-header');
    		var wpadmin_height = $('#wpadminbar').css('position') == 'fixed' && $('#wpadminbar').height() > 0 ? $('#wpadminbar').height() : 0;
    		var top_bars = $('#wpadminbar').css('position') == 'fixed' ? $('#top-bar-wrap').height() : $('#top-bar-wrap').height() + $('#wpadminbar').height();
    		var header_status = $(window).scrollTop() >= top_bars;
    		var header_padding = site_header.height();
	        
    	    if (style == 'float'){

    		
    		if (!header_status){
    			site_header.css({
    				'position': 'relative',
    				'top': '0',
    			});
    			site_header.next().css('margin-top', '0');
    		}else{
    			site_header.css({
    				'position': 'fixed',
    				'top': wpadmin_height,
    				'width': '100%',
    				'z-index': '99999',
    			});
    			site_header.next().css('margin-top', header_padding);
    		}	
	    }
	    
	    if (style == 'shrink'){
	        
    		if (!header_status){
    			site_header.css({
    				'position': 'relative',
    				'top': '0',
    			});
                $('body').removeClass('fixed_sticky_active');
    			site_header.next().css('margin-top', '0');
    		}else{
    			site_header.css({
    				'position': 'fixed',
    				'top': wpadmin_height,
    				'width': '100%',
    				'z-index': '99999',
    			});
    			site_header.next().css('margin-top', header_padding);
                $('body').addClass('fixed_sticky_active');
    		}	
	    }
	    
	}
	
	$(window).resize(function(){
	    $('body').removeClass('fixed_sticky_active');
	    sticky_header_oceanwp();
	});
	
});