// $(document).ready(function() {
// 	var nav = $('#nav');
// 	var nit = {
// 		top: nav.offset().top - parseInt(nav.css('margin-top'), 10),
// 		left: nav.offset().left - parseInt(nav.css('margin-left'), 10),
// 	}
// 	
// 	$(window).scroll(function() {
// 		var wt = $(window).scrollTop()
// 		console.log(wt > nit.top);
// 		if (wt > nit.top) {
// 			nav.css({
// 				'position': 'fixed',
// 				'top': '0px'
// 			});
// 		} else {
// 			nav.css({
// 				'position': 'static',
// 				'top': 'auto'
// 			});
// 		}
// 	});
// });

// Navigation Jiggle
$(document).ready(function() {
	var nav = $('#nav');
	
	var animproperties = {
		duration: 100,
		easing: 'linear',
		queue: false
	}
	
	$('#nav a').hover(function(e) {
		var w = 116;
		var newstyle = {
			'width': w+'px',
			'margin-right': 116/2-w/2+'px'
		};
		
		$(this).next().animate(newstyle, animproperties);
		$(this).prev().animate(newstyle, animproperties);
	}, function(e) {
		var w = 0;
		var newstyle = {
			'width': w+'px',
			'margin-right': 116/2-w/2+'px'
		};
				
		$(this).next().animate(newstyle, animproperties);
		$(this).prev().animate(newstyle, animproperties);
	});
});

// Up Arrow
$(document).ready(function() {
	var uparrow = $('#uparrow').hide();
	var h = uparrow.height();
	function mv(b) { uparrow.css({ 'bottom': b }) };
	
	uparrow.click(function() {
		$('html,body').animate({scrollTop: '0px'});
	});
	
	function uparrowMaintain() {
		var t = $(document).scrollTop()
		t/5 < h ? mv(t/5-h) : mv(0);
		$('#container').width() + 120 < $(window).width() ? uparrow.show() : uparrow.hide();
	}
	$(window).scroll(function() {uparrowMaintain()});
	$(window).resize(function() {uparrowMaintain()});
	
	function uplinkMaintain() {
	  var ul = $('#footer .uplink');
	  if ($(window).height() < $(document).height()) {
	    ul.stop(true).animate({opacity: 1}, 500)
		} else {
	    ul.stop(true).animate({opacity: 0}, 500);
	  }
	}
	uplinkMaintain();
  $(window).resize(function() {uplinkMaintain()});
	
	$('#footer .uplink').click(function() {
		$('html,body').animate({scrollTop: '0px'});
	});
});

// analytics
$(document).ready(function(){
	// segment.io
  var analytics=analytics||[];(function(){var e=["identify","track","trackLink","trackForm","trackClick","trackSubmit","page","pageview","ab","alias","ready","group"],t=function(e){return function(){analytics.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var n=0;n<e.length;n++)analytics[e[n]]=t(e[n])})(),analytics.load=function(e){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src=("https:"===document.location.protocol?"https://":"http://")+"d2dq2ahtl5zl1z.cloudfront.net/analytics.js/v1/"+e+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(t,n)};
  analytics.load("7mozv6a5jy");

	setTimeout(function(){
		analytics.track('Waited two seconds', {
			pathname        : location.pathname
		});
	}, 2000)
});
