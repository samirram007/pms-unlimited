
$(document).ready(function(){
    
		$('.close').each(function () {
    
				$(this).click(function(){
				
						$(this).parent().parent().parent().addClass('hidden');
				});
		});
});

$(".g12").click(function(){
	$('.large-view').addClass('hidden');
    $('.gf12').removeClass('hidden');
});

$(".g11").click(function(){
	$('.large-view').addClass('hidden');
    $('.gf11').removeClass('hidden');
});

$(".g10").click(function(){
	$('.large-view').addClass('hidden');
    $('.gf10').removeClass('hidden');
});

$(".g09").click(function(){
	$('.large-view').addClass('hidden');
    $('.gf09').removeClass('hidden');
});

$(".g08").click(function(){
	$('.large-view').addClass('hidden');
    $('.gf08').removeClass('hidden');
});

$(".g07").click(function(){
	$('.large-view').addClass('hidden');
    $('.gf07').removeClass('hidden');
});

$(".g06").click(function(){
	$('.large-view').addClass('hidden');
    $('.gf06').removeClass('hidden');
});

$(".g05").click(function(){
	$('.large-view').addClass('hidden');
    $('.gf05').removeClass('hidden');
});

$(".g04").click(function(){
	$('.large-view').addClass('hidden');
    $('.gf04').removeClass('hidden');
});

$(".g03").click(function(){
	$('.large-view').addClass('hidden');
    $('.gf03').removeClass('hidden');
});

$(".g02").click(function(){
	$('.large-view').addClass('hidden');
    $('.gf02').removeClass('hidden');
});

$(".g01").click(function(){
	$('.large-view').addClass('hidden');
    $('.gf01').removeClass('hidden');
});

$('.carousel').carousel({
  interval: 3500
})