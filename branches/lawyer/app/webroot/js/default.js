$(function(){
    $("li.toshow").addClass("hide");
    $("#nav ul.subnav").addClass("hide");
    $("li.item").mouseover(function(event){
        $(this).find("li.hide").removeClass("hide");
        $(this).addClass("focus");
    });
    $("li.item").mouseout(function(event){
        $(this).find("li.toshow").addClass("hide");
        $(this).removeClass("focus");
    });
    $("li.toshow a").mouseover(function(event){
        $(this).addClass("highlight");
    });
    $("li.toshow a").mouseout(function(event){
        $(this).removeClass("highlight");
    });
    $("#nav a.click").toggle(function(event){
        $(this).parent().find('ul.subnav').removeClass("hide");
    },
    function(event){
        $(this).parent().find("ul.subnav").addClass("hide");
    });

});
