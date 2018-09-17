/* Author: 

*/
function openSearch() {
	document.getElementById("myOverlay").style.display = "block";
	document.getElementById("myOverlay").style.opacity = "1";
	document.getElementById("myOverlay").style.zIndex = "9999999999999999";
}

function closeSearch() {
	document.getElementById("myOverlay").style.opacity = "0";
	document.getElementById("myOverlay").style.zIndex = "0";
}

(function($) {
	function openSearch() {
		$("#myOverlay").css("display","block");
	}

	function closeSearch() {
		$("#myOverlay").css("display","none");
	}

	$('.bxslider').bxSlider();
	if( $(".container.menu").length ) { 
		$(window).on('scroll', function () {
			var top = $(window).scrollTop(),
			divBottom = $('.container.menu').offset().top + $('.container.menu').outerHeight();
			if (divBottom > top) {
				$('.scrolled_nav').css('display','none');
				$('.scrolled_nav').removeClass('slideInDown');
				// $('.scrolled_nav').css('position','relative');
			} else {
				// $('.scrolled_nav').css('position','fixed');
				$('.scrolled_nav').css('display','block');
				$('.scrolled_nav').addClass('slideInDown');
			}
		});
	}

	$(window).on('scroll', function () {
		var top = $(window).scrollTop(),
		divBottom = $('header.inner_page').offset().top + $('header.inner_page').outerHeight();
		if (divBottom > top) {
			$('.scrolled_nav').css('position','absolute');
			$('.scrolled_nav').css('top','155px');
			$('.scrolled_nav').css('background','rgba(6,48,72,.95)');
			$('.scrolled_nav').css('box-shadow','none');
			$('.scrolled_nav').css('-webkit-box-shadow','none');
			$('.scrolled_nav').css('-moz-box-shadow','none');
			$('.scrolled_nav').addClass('not-sticky');
			$('.scrolled_nav').removeClass('slideInDown');
			$('.sub_level_nav').css('position','absolute');
			$('.sub_level_nav').css('top','240px');
			$('.sub_level_nav').removeClass('slideInDown');
			$('.sub_level_nav').css('box-shadow','none');
			$('.sub_level_nav').css('-webkit-box-shadow','none');
			$('.sub_level_nav').css('-moz-box-shadow','none');
			$('.sub_level_nav').css('z-index','9');
			
		} else {
			$('.scrolled_nav').css('position','fixed');
			$('.scrolled_nav').css('top','0');
			$('.scrolled_nav').css('background','#063048');
			$('.scrolled_nav').css('box-shadow','0 1px 16px 0px #000');
			$('.scrolled_nav').css('-webkit-box-shadow','0 1px 16px 0px #000');
			$('.scrolled_nav').css('-moz-box-shadow','0 1px 16px 0px #000');
			$('.scrolled_nav').css('z-index','999');
			$('.scrolled_nav').removeClass('not-sticky');
			$('.scrolled_nav').addClass('slideInDown');
			$('.sub_level_nav').css('position','fixed');
			$('.sub_level_nav').css('top','60px');
			$('.sub_level_nav').addClass('slideInDown');
			$('.sub_level_nav').css('box-shadow','rgba(0, 0, 0, 0.6) 0px 8px 16px -8px');
			$('.sub_level_nav').css('-webkit-box-shadow','rgba(0, 0, 0, 0.6) 0px 8px 16px -8px');
			$('.sub_level_nav').css('-moz-box-shadow','rgba(0, 0, 0, 0.6) 0px 8px 16px -8px');
			$('.sub_level_nav').css('z-index','999');
		}
	});

	new WOW({offset: 160 }).init();
	$("a.dropdown-toggle-top-menu").click(function(){
		var name_of_menu = $(this).text();
		var to_find = "ul."+name_of_menu;
		var back = $('li.dl-back a')
		var top_menu = $('.mobile_menu .container-fluid .navbar-collapse');
		if($('.mobile_menu .container-fluid .navbar-collapse').find(to_find).length !== 0){
			$(to_find).css('display','block');
			$('ul.mobile_top_menu').css('display','none');
			back.text(name_of_menu);
		}
	});
// 	$('li.dl-back a').on('click', function(e) {
// 		$('ul.mobile_top_menu').css('display','block');
// 		$(this).parent().parent().css('display','none');
// 	});

$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
	if (!$(this).next().hasClass('show')) {
		$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
	}
	var $subMenu = $(this).next(".dropdown-menu");
	$subMenu.toggleClass('show');
	$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
		$('.dropdown-submenu .show').removeClass("show");
		console.log($('.dropdown-submenu').parent());
	});
	return false;
});

$('.btn-toggle').click(function() {
	$(this).find('.btn').toggleClass('active');  

	if ($(this).find('.btn-primary').length>0) {
		$(this).find('.btn').toggleClass('btn-primary');
	}
	$(this).find('.btn').toggleClass('btn-default');

});

$('#accordion .panel-heading a').click(function() {
	if ($('header #accordion .panel .in')[0]) {
		$('.container.menu').show();
	} else {
		$('.container.menu').hide();
	}
});

$('.mobile_menu button.navbar-toggle').click(function() {
	// $('.mobile_menu #myNavbar').toggleClass('slideInRight slideOutRight');
	if ($('.mobile_menu #myNavbar').is(':hidden')){
		$('.mobile_menu #myNavbar').addClass('slideInRight');
		$('.mobile_menu #myNavbar').removeClass('slideOutRight');
	}
	else {
		$('.mobile_menu #myNavbar').removeClass('slideInRight');
		$('.mobile_menu #myNavbar').addClass('slideOutRight');
	}
});

console.log($('.sub_level_nav ul.nav li.dropdown'))
$('.sub_level_nav ul.nav li.dropdown').hover(function() {
	$(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(200);
	$(this).addClass('open');
	$(this).addClass('active');
}, function() {
	$(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(200);
	$(this).removeClass('open');
	$(this).removeClass('active');
});

if( $('.sub_level_nav').length ) 
{
	$('.two_column.container').css('padding-top','150px');
}
else {
	$('.two_column.container').css('padding-top','75px');
}

})(jQuery); //( function($) {















