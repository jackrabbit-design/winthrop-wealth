/* ========================================================================= */
/* BE SURE TO COMMENT CODE/IDENTIFY PER PLUGIN CALL */
/* ========================================================================= */
new WOW().init();
jQuery(function($) {



	_visibleSearch();
	_mobilemenu();
	_sliderHeight();
	// openFirstPanel();
	_teamDesktop();
	_accordians();
	social();
	landingTabs();
	loadMore();
	$('.video-thumb').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});
	

	$.stellar({horizontalScrolling: false,responsive: true });
	
	
	$('section.main .cornerstones li').on('click',function(){
		//$(this).toggleClass('active');

		$(this).removeClass('active');
        $(this).addClass('active').siblings('.active').removeClass('active');

		//alert('all your base are belong to us');
	});
// class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-pager=".banner-pager" data-cycle-swipe=true data-cycle-swipe-fx=scrollHorz data-cycle-slides=">li" data-cycle-timeout="0" data-cycle-pager-template="<span></span>"




	$('#blog-slider').cycle({
		slides: '> div',
		pager: '.cycle-pager',
		swipe: true,
		//autoHeight: true,
		pagerTemplate: '<span></span>'
	}).cycle('pause');

	$('#homeSlider').cycle({
		slides: '> li',
		fx: 'fade',
		timeout: 12000,
		pager: '.banner-pager',
		autoHeight: 'container',
		pauseOnHover: true,
		swipe: true,
		pagerTemplate: '<span></span>'
	}).on('cycle-after', function(event,opts){
		$('.cycle-slide').removeClass('active')
		$('.cycle-slide.cycle-slide-active').addClass('active')
	});
	
	if ($('.we-are .box img').isOnScreen() === true){
		$('.we-are .box').addClass('go');
	} else {}
	// $('.blog-filter ul li a').on('click', function(e){
	// 	e.preventDefault();
	// 	var $content = $('.query-results');
	// 	var $myLink = $(this).attr('href');
	// 	$($content).addClass('loading');
	// 	$.post($myLink+'', function(data){
 //                var $new_content = $('.query-results').append(data).find($content).html();
 //                $($content).html($new_content); // Append the new content
 //            },'html').done(function(){
 //                $($content).removeClass('loading');
               
 //            });
                
    
	// });


});


$(document).scroll(function() {
	if ($('.block').isOnScreen() === true) {
		$('.animated .animated-row .block').addClass('go');
		$('.loader').addClass('go');
		
		} else {
		// $(this).removeClass('go');
		
		
	}
	
	if ($('.we-are .box img').isOnScreen() === true){
		$('.we-are .box').addClass('go');
	} else {}
	
	


        var nm = $("html").scrollTop();
        var nw = $("body").scrollTop();
        var n = (nm > nw ? nm : nw);

        // $('#element').css({
        //     'webkitTransform' : 'translate3d(0, ' + n + 'px, 0)',
        //     'MozTransform'    : 'translate3d(0, ' + n + 'px, 0)',
        //     'msTransform'     : 'translateY('     + n + 'px)',
        //     'OTransform'      : 'translate3d(0, ' + n + 'px, 0)',
        //     'transform'       : 'translate3d(0, ' + n + 'px, 0)',
        // });

        // if transform3d isn't available, use top over background-position
      	 if ($(window).width() > 980) {
      		$('.inner-header').css('background-position-y', -Math.ceil(n/6) + 'px');
   		 }
        //$('.banner-img').css('background-position-y', -Math.ceil(n/6) + 'px');
});

function _visibleSearch() {
	$('#search-icon').click(function() {
		$(this).toggleClass('active');
		$('.search-input-wrap').fadeToggle('fast');
		$('.search-input-wrap input').focus();
	});
}

function _mobilemenu() {
	var menubox = $('.header-col-two'); //main menu wrap
	var menu_btn = $("#toggle_menu_btn"); // menu btn
	// toggle menu arrow 
	var dropDownicon = "theme-caret-down";
	var dropUpicon = "theme-caret-up";
	var arrowClass = dropDownicon + " dropdwn-btn";

	function hidesub_menu() {
		$('#main-nav ul li').each(function() {
			$(this).children("ul").hide().removeClass("active-submenu");
			$(this).children("span").addClass(dropDownicon).removeClass(dropUpicon);
		});
	}
	menu_btn.click(function(e) {
		$(this).toggleClass("active");
		hidesub_menu();
		e.stopImmediatePropagation();
		menubox.slideToggle();
		menubox.toggleClass('opened');
	});
	menubox.click(function(e) {
		e.stopImmediatePropagation();
	});
	$('html,body').click(function(e) {
		menu_btn.removeClass("active");
		if (menubox.hasClass('opened')) {
			hidesub_menu();
			menubox.removeClass('opened');
			menubox.slideToggle();
		}
	});
	//click inner links
	$("#main-nav ul li").each(function() {
		$(this).has("ul").addClass("current-menu-ancestor").append("<span class='dropdwn-btn'></span>");
		var sub_menu = $(this).children("ul");
		$(this).children('span').click(function(event) {
			var current_submenu = $(this).parent().children("ul");
			$(this).parent().toggleClass('active');
			var sub_menu = $(".current-menu-ancestor ul");
			$(".dropdwn-btn").addClass(dropDownicon).removeClass(dropUpicon);
			if (current_submenu.hasClass("active-submenu")) {
				$(this).removeClass(dropUpicon).addClass(dropDownicon);
				sub_menu.slideUp();
				sub_menu.removeClass("active-submenu");
			} else {
				$(this).removeClass(dropDownicon).addClass(dropUpicon);
				sub_menu.removeClass("active-submenu");
				$(this).parent().children("ul").addClass("active-submenu");
				sub_menu.slideUp();
				current_submenu.slideDown();
			}
		});
	});
}
$(window).resize(function() {
	if ($(window).innerWidth() > 767) {
		$('.header-col-two').removeAttr("style");
		$("#main-nav").removeAttr("style");
		$("#main-nav > ul > li > ul").removeAttr("style");
		
	}
	//_sliderHeight();
	$('#toggle_menu_btn.active').removeClass('active');
	$('.header-col-two').removeClass('opened');
	// /$('.header-col-two').slideUp();
	$('.team .full-bio').removeClass('open');
	$('.team > ul > li').removeClass('open');
});

function _sliderHeight() {
	var winHeight = $(window).height();
	var headerHeight = $('#header').height();
	//$('#slider li').height( winHeight - headerHeight );
}
$(".hm-carousel > ul").owlCarousel({
	items: 3,
	itemsCustom: false,
	itemsDesktop: [1199, 3],
	itemsDesktopSmall: [980, 2],
	itemsTablet: [768, 2],
	itemsTabletSmall: [742, 1],
	itemsMobile: [479, 1],
	singleItem: false,
	itemsScaleUp: false,
	mouseDrag: true,
	//Basic Speeds
	slideSpeed: 200,
	paginationSpeed: 800,
	rewindSpeed: 1000,
	//Autoplay
	autoPlay: true,
	stopOnHover: false,
	//Auto height
	autoHeight: true,
});
$('#how-slider').owlCarousel({
	items: 1,
	itemsDesktop: [1199,1],
	itemsDesktopSmall: [979,1],
	itemsTablet: [768,1],
	itemsMobile: [479,1],
	autoPlay: false,
	stopOnHover: false,
	navigation: true,
	navigationText: ["l", "r"],
	
	autoHeight: true
});

$('#how-we-tabs').responsiveTabs({
    startCollapsed: 'accordion'
});

function _accordians() {
	var allPanels = $('.accordion > dd').hide();
	// openFirstPanel();
	$('.accordion > dt > a').click(function() {

		$this = $(this);
		$that = $('.accordion dt a');
		$target = $this.parent().next();

		if ($target.hasClass('active')) {
			$target.removeClass('active').slideUp();
		} else {
			//allPanels.removeClass('active').slideUp();
			$target.addClass('active').slideDown();
		}
		if ($this.hasClass('active')) {
			$this.removeClass('active');
		} else {
			$that.removeClass('active');
			$this.addClass('active');
		}
		return false;
	});
}

function _teamDesktop() {

	$('.team > ul > li').click(function() {
		var url = $(this).attr('data-url');
		console.log(url);
		if ($(url).hasClass('open')) {
			$(url).removeClass('open');
			$(this).children('.mobile-bio').slideToggle();	
		} else {
			$('.biography').jScrollPane();
			$(this).children('.mobile-bio').slideToggle();
	 		$('html, body').animate({ scrollTop: $('.inner-header').offset().top }, 500);
	 		$('.full-bio').removeClass('open');
	 		$(url).addClass('open');
	 		$('button.close-bio').click(function() {
					$(this).parent('.full-bio').removeClass('open');
					$('.team  ul  li').removeClass('open');
					//$(this).parent().parent().fadeOut(200);
					
				});
		}
		// var url = $(this).attr('data-url');
		// bio = $('.team .full-bio');
		// $(this).children('.mobile-bio').slideToggle();
		// if ($(this).hasClass('open')) {
		// 	$(this).removeClass('open');
		// } else {
		// 	$(this).removeClass('open');
		// 	$(this).addClass('open');
		// 	$('.loading').toggleClass('now');

		// 	 $('html, body').animate({
  //       		scrollTop: $("#team-bio").offset().top
  //   		}, 2000);

		// 	$('.full-bio').load('team-member/' + url + '/ #info', function() {
		// 		$(this).hide();
		// 		$(this).fadeIn(200);
		// 		$('.loading').toggleClass('now');
		// 		$('.biography').jScrollPane();
				// $('button.close-bio').click(function() {
				// 	$(this).parent().parent('.full-bio').removeClass('open');
				// 	$('.team  ul  li').removeClass('open');
				// 	$(this).parent().parent().fadeOut(200);
				// 	$(this).parent().parent().hide();
				// });
		// 	});
		// 	bio.addClass('open');
		// }
	});
	$('button.close-bio').click(function() {
		$(this).parent().parent('.full-bio').removeClass('open');
		$('.team  ul  li').removeClass('open');
	});
}

function loadMore() {
	// jquery.init.js
	/* Ajax load more Pagination */
	$('.loadmore a').on('click', function(e) {
		e.preventDefault();
		// $('.text_holder').append("<div class=\"loader\">&nbsp;</div>");
		$(this).parent().addClass('loading');
		var link = jQuery(this).attr('href');
		var $content = '.query-results';
		var $nav_wrap = '.loadmore';
		var $anchor = '.loadmore a';
		var $next_href = $($anchor).attr('href'); // Get URL for the next set of posts
		$.get(link + '', function(data) {
			var $timestamp = new Date().getTime();
			var $new_content = $($content, data).wrapInner('').html(); // Grab just the content
			// $('.blogPostsWrapper .loader').remove();
			$next_href = $($anchor, data).attr('href'); // Get the new href
			$('.query-results li:last-child').after($new_content); // Append the new content
			// $('#rtz-' + $timestamp).hide().fadeIn('slow'); // Animate load
			$('.loadmore a').attr('href', $next_href); // Change the next URL
			//$('.team li:last').remove(); // Remove the original navigation
			var nlink = $('.loadmore a').attr('href');
			if (nlink == link) {
				$('.loadmore a').hide(1);
			}
		}).done(function(data) {
			$('.loadmore.loading').removeClass('loading');
			// Other scripts called after loading finishes
		});
	});
}
// Social Icons

function social() {
	$('.social-icons').stick_in_parent({
		parent: 'section.main.blog'
	});
}
//Landing Tabs

function landingTabs() {
	$('#tabs > section').hide();
	$('#tabs > section:first').show();
	$('#tabs ul li:first').addClass('active');
	$('#tabs ul li a').click(function() {
		$('#tabs ul li').removeClass('active');
		$(this).parent().addClass('active');
		var currentTab = $(this).attr('href');
		$('#tabs > section').hide();
		$(currentTab).show();
		return false;
	});
}
	
$.fn.isOnScreen = function() {
	var win = $(window);
	var viewport = {
		top: win.scrollTop()
	};
	viewport.bottom = viewport.top + win.height();
	var bounds = this.offset();
	if(bounds){ 
	  	bounds.bottom = bounds.top + this.outerHeight() + 120;
	  	return (!(viewport.bottom < bounds.top || viewport.top > bounds.bottom));
	  }
};