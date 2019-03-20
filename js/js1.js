
$('.notice').hover(function(){
    $(this).toggleClass('xyz');
    
});
if($(window).width()>500){
    $('.nav-link').hoverIntent(function(){
        $(this).trigger('click');
    
});	
}
$(window).resize(function(){
	if($(window).width()<1500){
		$(document).unbind('scroll');
		var $nav = $(".fixed-top");
		var $navimg = $(".navbar-brand")
		$nav.removeClass('scrolled');
		$navimg.removeClass('dis');
	}
	else{
//		$(document).bind('scroll');
		$(document).scroll(function () {
    			var $nav = $(".fixed-top");
				var $navimg = $(".navbar-brand");
				$nav.toggleClass('scrolled',$(this).scrollTop() > $nav.height())
				$navimg.toggleClass('dis',$(this).scrollTop() > $nav.height());
  				});
	}
});

if($(window).width()>=1500){
				$(document).scroll(function () {
    			var $nav = $(".fixed-top");
				var $navimg = $(".navbar-brand");
				$nav.toggleClass('scrolled',$(this).scrollTop() > $nav.height());
				$navimg.toggleClass('dis',$(this).scrollTop() > $nav.height());
  				});
			}
