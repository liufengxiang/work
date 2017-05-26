/**
 * Created by lenovo on 2017/4/1.
 */

$(function(){


    (function(){$(".cyy-leftbox .catname a").click(function(){
        $(".cyy-leftbox .catname").find("a").removeClass("now").end();
        $(this).addClass("now");
    })})();


    function getIframeHeight(){


        $("#iframe").load(function(){
            $(this).height(function(){
                return $(this).contents().find("body").height()+30;
            })
        })
    }
    getIframeHeight();
	
	//列表选中项
	$("div.right .box").click(function(){
					$("div.right .box").removeClass("change").find(".boxsmall").css({display:"none"})
					$(this).parentsUntil("box").find(".boxsmall").eq($(this).index()).css({display:"block"});
					$(this).addClass("change");	

	})			    
    
    
    
    
    
    
})
