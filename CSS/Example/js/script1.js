$(document).ready(function(){
    $(".mainMenu > li").mouseover(function(){
        $(".subMenu").stop().slideDown(200);
    });
    $(".mainMenu li").mouseout(function(){
        $(".subMenu").stop().slideUp(200);
    });

    var now = 0;

    start();
    function start(){
        $("slide").eq(0).siblings().css("margin-top","-500px")
        setInterval(function(){slide();},3000)
    }
    function slide(){
        now = now == 2 ? 0 : now+= 1;
        $('.slide').eq(now-1).css('margin-top','-500px');
        $('.slide').eq(now).css('margin-top','0');
    }

    $(".galleryTab").click(function(){
        $(".noticeTab").addClass("tabBg");
        $(".galleryTab").removeClass("tabBg");
        $(".noticeArea").hide();
        $(".galleryArea").show();
    });
    $(".noticeTab").click(function(){
        $(".galleryTab").addClass("tabBg");
        $(".noticeTab").removeClass("tabBg");
        $(".noticeArea").show();
        $(".galleryArea").hide();
    });
});