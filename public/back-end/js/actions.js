$(document).ready(function(){
    $(".header_menu .list_icon").click(function(){
        
        var menu = $("body > .menu");
        
        if(menu.is(":visible"))
            menu.fadeOut(200);
        else
            menu.fadeIn(300);
        
        return false;
    });
    
    if($(".adminControl").hasClass('active')){
        $('.admin').fadeIn(300);
    }
    
    
    $(".adminControl").click(function(){
        
        if($(this).hasClass('active')){
            
            $.cookies.set('b_Admin_visibility','hidden');
            
            $('.admin').fadeOut(200);
            
            $(this).removeClass('active');
            
        }else{
            
            $.cookies.set('b_Admin_visibility','visible');
            
            $('.admin').fadeIn(300);
            
            $(this).addClass('active');
        }
        
    });
    
    
    $(".navigation .openable > a").click(function(){
        var par = $(this).parent('.openable');
        var sub = par.find("ul");

        if(sub.is(':visible')){
            par.find('.popup').hide();
            par.removeClass('active');            
        }else{
            par.addClass('active');            
        }
        
        return false;
    });
    
    $(".jbtn").button();
    
    $(".alert").click(function(){
        $(this).fadeOut(300, function(){            
                $(this).remove();            
        });
    });
    
    $(".buttons li > a").click(function(){
        
        var parent   = $(this).parent();
        
        if(parent.find(".dd-list").length > 0){
        
            var dropdown = parent.find(".dd-list");

            if(dropdown.is(":visible")){
                dropdown.hide();
                parent.removeClass('active');
            }else{
                dropdown.show();
                parent.addClass('active');
            }

            return false;
            
        }
        
    });

    $(".link_navPopMessages").click(function(){
        if($("#navPopMessages").is(":visible")){
            $("#navPopMessages").fadeOut(200);
        }else{
            $("#navPopMessages").fadeIn(300);
        }
        return false;
    });
    
    $(".link_bcPopupList").click(function(){
        if($("#bcPopupList").is(":visible")){
            $("#bcPopupList").fadeOut(200);
        }else{
            $("#bcPopupList").fadeIn(300);
        }
        return false;
    });    
    
    $(".link_bcPopupSearch").click(function(){
        if($("#bcPopupSearch").is(":visible")){
            $("#bcPopupSearch").fadeOut(200);
        }else{
            $("#bcPopupSearch").fadeIn(300);
        }
        return false;
    });        
    
    $("input[name=checkall]").click(function(){
        if(!$(this).is(':checked'))
            $(this).parents('table').find('.checker span').removeClass('checked').find('input[type=checkbox]').attr('checked',false);
        else
            $(this).parents('table').find('.checker span').addClass('checked').find('input[type=checkbox]').attr('checked',true);
    }); 
    
    $(".check_cat").click(function(){
        if(!$(this).is(':checked')) {
        	$(this).attr('checked',false);
        	$(this).parent().removeClass('checked');
        }
        else {
        	$(this).attr('checked',true);
    		$(this).parent().addClass('checked');
        }
    }); 
    if($(".wysiwyg").length > 0){
        editor = $(".wysiwyg").cleditor({width:"100%", height:"100%"})[0].focus(); 
        if($(".wysiwyg").length > 0) editor.refresh();
    } 
    
    if($(".wysiwyg_cate").length > 0){
        editor = $(".wysiwyg_cate").cleditor({width:"100%", height:"100%"})[0].focus(); 
        if($(".wysiwyg_cate").length > 0) editor.refresh();
    } 
    
    if($("#wysiwyg_career").length > 0){
        editor = $("#wysiwyg_career").cleditor({width:"100%", height:"100%"})[0].focus(); 
        if($("#wysiwyg_career").length > 0) editor.refresh();
    } 
    
    gallery();
    thumbs();
    headInfo();
});

$(document).resize(function(){
    
    if($("body > .content").css('margin-left') == '220px'){
        if($("body > .menu").is(':hidden'))
            $("body > .menu").show();
    }
    
    gallery();
    thumbs();
    headInfo();
});

function headInfo(){
    var block = $(".headInfo .input-append");
    var input = block.find("input[type=text]");
    var button = block.find("button");
    
    input.width(block.width()-button.width()-44);
    
}

function thumbs(){

    var w_block = $(".block.thumbs").width()-20;
    var w_item  = $(".block.thumbs .thumbnail").width()+10;
    
    var c_items = Math.floor(w_block/w_item);
    
    var m_items = Math.floor( (w_block-w_item*c_items)/(c_items*2) );    
    
    $(".block.thumbs .thumbnail").css('margin',m_items);

}

function gallery(){
    
    var w_block = $(".block.gallery").width()-20;
    var w_item  = $(".block.gallery a").width();
    
    var c_items = Math.floor(w_block/w_item);
    
    var m_items = Math.round( (w_block-w_item*c_items)/(c_items*2) );    
    
    $(".block.gallery a").css('margin',m_items);
}


function delAllCate(){
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
		alert('Bạn chưa chọn mục cần xóa');
		return false;
	}
	
	var msg = 'Bạn chắc chắn muốn xóa mục này';
	if(count > 1){
		msg = 'Bạn chắc chắn muốn xóa các mục này';
	}
	
	if (confirm(msg)) {
		$('#id_list').val(IDstring);
		$('#formListCate').submit();
		return true;
	}
	
	return false;
}

function search_item(module) {
	var keyword = $.trim($('#keyword').val());
	var r = /^([^#$*&%!'])+$/;
	if(!r.test(keyword) || keyword.length < 3) {
		alert('từ tìm kiếm phải dài hơn 3 kí tự');
		$('#keyword').focus();
		return false;
	}
	window.location = module + "/?keyword=" + keyword;
}