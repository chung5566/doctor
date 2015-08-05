$(document).ready(function(){


/* 首頁連結圖片 */
$('.tab4s-himg').addClass('tab4s-addHide');
$('.tab4s-himg').addClass('tab4s-addCSS1');
$('.tab4s').each(function(){
	$(this).mouseover(function(){
		$(this).find('.tab4s-tit').stop().fadeOut(500);
		$(this).find('.tab4s-img').stop().animate({top:'-100'}, 300);
		$(this).find('.tab4s-img').addClass('tab4s-addCSS2');
		$(this).find('.tab4s-himg').removeClass('tab4s-addHide');
	});
	$(this).mouseout(function(){
		$(this).find('.tab4s-tit').stop().fadeIn(500);
		$(this).find('.tab4s-img').stop().animate({top:'0'}, 300);
		$(this).find('.tab4s-img').removeClass('tab4s-addCSS2');
		$(this).find('.tab4s-himg').addClass('tab4s-addHide');
	});
});
$('#logintext').click(function(){
	$('#loginani').animate({top:"500px"}); 
});
$('#signin').click(function(){
	$('#loginani').animate({top:"-500px"}); 
});

$('#selectneed1btn').click(function(){
	$('#selectneed1').hide(2000);
	$('#selectneed2').show(2000);
});






});