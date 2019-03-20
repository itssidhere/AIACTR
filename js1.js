alert("helloworld")

$('.notice').hover(function(){
    $(this).toggleClass('xyz');
    
});
if($(window).width()>500){
    $('.nav-link').hoverIntent(function(){
        $(this).trigger('click');
    
});
}