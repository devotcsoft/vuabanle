cookie_popup = (function() {
    if ($.cookie('cookie_popup') == undefined) {
        $('.cookie-popup-wrap').fadeIn(600);
        $.cookie('cookie_popup',true,{ expires: 0.003 }); //Thời gian cookie bị xóa. Giá trị expires là ngày
    };

    $('#closepopup').click(function (e) {
        e.preventDefault();
        $('.cookie-popup-wrap').fadeOut(600);
    });

    //if mask is clicked
    $('.mask').click(function () {
        $(this).hide();
        $('.cookie-popup-wrap').hide();
    });
});

setTimeout(function() {
    cookie_popup();
}, 5000);