/*
*
* Author: @Nelly Mntolo
* 
*/
(function( $ ){
  "use strict";

$(".keep-clean").animsition({
    inClass: 'fade-in',
    outClass: 'fade-out',
    inDuration: 1500,
    outDuration: 800,
    linkElement: '.animsition-link',
    loading: true,
    loadingParentElement: 'html',
    loadingClass: 'our-loader',
    loadingInner: '<div data-loader="ball-scale"></div>',
    timeout: false,
    timeoutCountdown: 5000,
    onLoadEvent: true,
    browser: [ 'animation-duration', '-webkit-animation-duration'],
    overlay : false,
    overlayClass : 'animsition-overlay-slide',
    overlayParentElement : 'html',
    transition: function(url){ window.location.href = url; }
});
// $('body').contextmenu(function() {
//     return false;
// });
addEventListener("load", function() {
		setTimeout(hideURLbar, 0); 
}, false);
function hideURLbar(){
		window.scrollTo(0,1); 
}
$(function() {
		var loc = window.location.href; // returns the full URL
  	if(/ /.test(loc)) {
    	$('.lays_menu__list li').removeClass('active');
    	$('.lays_menu__list li.home_class').addClass('active');
  	}
  	if(/About/.test(loc)) {
    	$('.lays_menu__list li').removeClass('active');
    	$('.lays_menu__list li.about_class').addClass('active');
  	}
  	if(/Services/.test(loc)) {
    	$('.lays_menu__list li').removeClass('active');
    	$('.lays_menu__list li.services_class').addClass('active');
  	}
  	if(/Gallery/.test(loc)) {
    	$('.lays_menu__list li').removeClass('active');
    	$('.lays_menu__list li.gallery_class').addClass('active');
  	}
  	if(/Contact/.test(loc)) {
    	$('.lays_menu__list li').removeClass('active');
    	$('.lays_menu__list li.contact_class').addClass('active');
  	}
});
if( $('.cd-bg-video-wrapper').length > 0 ) {
		var videoWrapper = $('.cd-bg-video-wrapper'),
			mq = window.getComputedStyle(document.querySelector('.cd-bg-video-wrapper'), '::after').getPropertyValue('content').replace(/"/g, "").replace(/'/g, "");
		if( mq == 'desktop' ) {
			// we are not on a mobile device 
			var	videoUrl = videoWrapper.data('video'),
				video = $('<video loop autoplay="true" muted="true"><source src="'+videoUrl+'.mp4" type="video/mp4" /><source src="'+videoUrl+'.webm" type="video/webm" /></video>');
			video.appendTo(videoWrapper);
			video.get(0).play();
		}
}
const shareData = {
	  title: 'Juliet Gardens',
	  text: 'Learn About Our Business',
	  url: 'https://www.julietgardens.com'
}
const btn = document.querySelector('.share');
const resultPara = document.querySelector('.result');
btn.addEventListener('click', async () => {
	  try {
	    await navigator.share(shareData);
	    resultPara.textContent = 'Website Shared Successfully';
	  } catch (err) {
	    resultPara.textContent = `Error: ${err}`;
	  }
});
var defaults = {
		containerID: 'toTop', // fading element id
		containerHoverID: 'toTopHover', // fading element hover id
		scrollSpeed: 1200,
		easingType: 'linear'
};
$().UItoTop({ easingType: 'easeOutQuart' });
$('.masiko_lays_head').each(function(index, element) {
    var heading = $(element), word_array, last_word, first_part;
    word_array = heading.html().split(/\s+/);
    last_word = word_array.pop();
    first_part = word_array.join(' ');
    heading.html([first_part, ' <span>', last_word, '</span>'].join(''));
});
$(function() {			
		initDropDowns($("div.shy-menu"));
});
function initDropDowns(allMenus) {
		allMenus.children(".shy-menu-hamburger").on("click", function() {
			var thisTrigger = jQuery(this),
				thisMenu = thisTrigger.parent(),
				thisPanel = thisTrigger.next();
			if (thisMenu.hasClass("is-open")) {
				thisMenu.removeClass("is-open");
			} else {
				allMenus.removeClass("is-open");	
				thisMenu.addClass("is-open");
				thisPanel.on("click", function(e) {
					e.stopPropagation();
				});
			}			
			return false;
		});
}
$(".scroll").click(function(event){		
	event.preventDefault();
	$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
}); 
var xss_cssRule =
"color: rgb(255, 255, 255);" +
"font-size: 100px;" +
"font-weight: bold;" +
"text-shadow: 5px 5px 10px rgba(164, 221, 37,100);" +
"filter: dropshadow(color=rgba(164, 221, 37,100), offx=1, offy=1);";
setTimeout(console.log.bind(console,'%cJuliet-Gardens', xss_cssRule), 0);




// new ntofontofo(document,120,12)
function ntofontofo(target, speed, smooth) {
	if (target === document)
		target = (document.scrollingElement 
              || document.documentElement 
              || document.body.parentNode 
              || document.body)    
	var moving = false
	var pos = target.scrollTop
  var frame = target === document.body 
              && document.documentElement 
              ? document.documentElement 
              : target
	target.addEventListener('mousewheel', scrolled, { passive: false })
	target.addEventListener('DOMMouseScroll', scrolled, { passive: false })
	function scrolled(e) {
		e.preventDefault();
		var delta = normalizeWheelDelta(e)
		pos += -delta * speed
		pos = Math.max(0, Math.min(pos, target.scrollHeight - frame.clientHeight))
		if (!moving) update()
	}
	function normalizeWheelDelta(e){
		if(e.detail){
			if(e.wheelDelta)
				return e.wheelDelta/e.detail/40 * (e.detail>0 ? 1 : -1)
			else
				return -e.detail/3
		}else
			return e.wheelDelta/120
	}
	function update() {
		moving = true    
		var delta = (pos - target.scrollTop) / smooth    
		target.scrollTop += delta    
		if (Math.abs(delta) > 0.5)
			requestFrame(update)
		else
			moving = false
	}
	var requestFrame = function() { 
		return (
			window.requestAnimationFrame ||
			window.webkitRequestAnimationFrame ||
			window.mozRequestAnimationFrame ||
			window.oRequestAnimationFrame ||
			window.msRequestAnimationFrame ||
			function(func) {
				window.setTimeout(func, 1000 / 50);
			}
		);
	}()
}
})( jQuery );