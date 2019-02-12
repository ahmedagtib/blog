$(function(){
  'use strict'
 var w=$(window).width();
 console.log(w);

  var upper=$('.upper-bar').innerHeight();
  var nav=$('.navbar').innerHeight();
   var h=$(window).height();
   var slider=h-(upper+nav)+17;
  $('.slider,.carousel-item').height(slider);
   $(window).scroll(function(){
   	var scl=$('.scroll-top');
        if($(window).scrollTop() >= 1000){
        	if(scl.is(':hidden')){
                scl.fadeIn(400);
        	 }
          }else{
          	scl.fadeOut(400);
          }

     });

  $('.scroll-top').click(function(event){
     event.preventDefault();
    $('html,body').animate({
        scrollTop:0
      },1000);
    
   });



});

///loding screen

   $(window).on('load', function(){ 
    $("body").css("overflow","auto");
    $(".load-s .spinner").fadeOut(500,function(){
    
      $(this).parent().fadeOut(500,function(){
          $(this).remove();
      });
    });

   });
    $(function () {
    new WOW().init();
});
