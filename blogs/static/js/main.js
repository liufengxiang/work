$(function(){
	$(".cat li").click(function(e){
		$(this).find(".son").toggle(200);
	})
	$(".cat li .son a").click(function(e){
		e.stopPropagation();
	})
})
