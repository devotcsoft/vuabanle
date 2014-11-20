// Login Form
$(function() {
    var button = $('#loginButton');
    var box = $('#loginBox');
    var form = $('#loginForm');
    button.removeAttr('href');
    button.mouseup(function(login) {
        box.toggle();
        button.toggleClass('active');
    });
    form.mouseup(function() { 
        return false;
    });
    $(this).mouseup(function(login) {
        if(!($(login.target).parent('#loginButton').length > 0)) {
            button.removeClass('active');
            box.hide();
        }
    });
});


/******** Fancy Light Box*********/
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();
			
			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});
		});

/************ Magnifying Popup ***************/
	$(document).ready(function() {
		$('.popup-vimeo').magnificPopup({
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
	
			fixedContentPos: false
		});
	});

/***** Scrolling Script ****************/
				jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
function GetID(){
	var IDstring = '';
	var count = 0;
	$('.check_cat').filter(':checked').each(function() {
		itemID = $(this).val();
		if(IDstring)
		{
			IDstring = IDstring + ',' + itemID;
		}else{
			IDstring =  itemID;
		}
		count++;
	});
	if (IDstring == '') {
		alert('Bạn chưa chọn mục quan tâm');
		return false;
	}
	
	var msg = 'Bạn chắc chắn muốn xóa mục này';
	if(count > 1){
		msg = 'Bạn chắc chắn muốn xóa các mục này';
	}
	
	if (confirm) {
		$('#id_list').val(IDstring);
		$('#form-account-edit').submit();
		return true;
	}
	
	return false;
}
