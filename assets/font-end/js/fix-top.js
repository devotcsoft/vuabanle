/**
 * Created by tranngoclam1909 on 9/8/14.
 */
function fixDiv1() {
    var $top = $('#header');
    if ($(window).scrollTop() > 133)
        $top.css({'position': 'fixed', 'top': '0px','z-index':'999999','width':'100%','height':'57px','box-shadow':'0px 1px 2px rgba(0, 0, 0, 0.2)'});
    else
        $top.css({'position': 'relative', 'top': '','z-index':'999999','width':'100%','height':'75px','box-shadow':'none'});
}
$(window).scroll(fixDiv1);
fixDiv1();

function fixDiv2() {
    var $logo1 = $('#logo-images');
    if ($(window).scrollTop() > 133)
        $logo1.css({'padding':'5px 0px 0px 0px'});
    else
        $logo1.css({'padding':'14px 0px 0px 0px'});
}
$(window).scroll(fixDiv2);
fixDiv2();

function fixDiv3() {
    var $logo = $('#logo-images');
    if ($(window).scrollTop() > 405)
        $logo.css({'height':'0px'});
    else
        $logo.css({'height':'47px'});
}
$(window).scroll(fixDiv3);
fixDiv3();

function fixDiv4() {
    var $search = $('#search-form');
    if ($(window).scrollTop() > 133)
        $search.css({'margin-top':'-10px'});
    else
        $search.css({'margin-top':'0px'});
}
$(window).scroll(fixDiv4);
fixDiv4();

function fixDiv5() {
    var $login = $('#login');
    if ($(window).scrollTop() > 133)
        $login.css({'margin-top':'5px'});
    else
        $login.css({'margin-top':'20px'});
}
$(window).scroll(fixDiv5);
fixDiv5();

function fixDiv6() {
    var $shoppingcart = $('#shopping-cart');
    if ($(window).scrollTop() > 133)
        $shoppingcart.css({'margin-top':'5px'});
    else
        $shoppingcart.css({'margin-top':'20px'});
}
$(window).scroll(fixDiv6);
fixDiv6();

function fixDiv7() {
    var $mainmenu = $('#main-menu');
    if ($(window).scrollTop() > 405){
        $mainmenu.css({'position': 'fixed', 'top': '10px','z-index':'999999','width':'220px','height':'0px'});
        $('#title-menu').addClass('title-top');
    }

    else
        $mainmenu.css({'position': 'absolute', 'top': '22px','z-index':'99','width':'220px','height':'auto'});
}
$(window).scroll(fixDiv7);
fixDiv7();

function fixDiv8() {
    var $menucontent = $('#main-menu-content');
    if ($(window).scrollTop() > 405)
        $menucontent.css({'display':'none'});
    else
        $menucontent.css({'display':'block'});
}
$(window).scroll(fixDiv8);
fixDiv8();

$(document).ready(function(){
    var div2 = $("#main-menu-content");
    $("div#title-menu").mouseenter(function(){
        div2.css({display:"block"});
        return false;
    });

    $("div#div1").mouseout(function(){
        div2.css({display:"none"});
    });
});

function fixDiv9() {
    if ($(window).scrollTop() > 405) {
        $("#main-menu-content").mouseenter(function () {
            $("#main-menu-content").show();
        });

        $("#main-menu-content").mouseleave(function () {
            $("#main-menu-content").hide();
        });

        return false;
    }

    else{
        $("#main-menu-content").mouseenter(function () {
            $("#main-menu-content").show();
        });

        $("#main-menu-content").mouseleave(function () {
            $("#main-menu-content").show();

        });

        return false;
    }
}
$(window).scroll(fixDiv9);
fixDiv9();