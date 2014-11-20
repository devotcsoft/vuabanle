// JavaScript Document

function generateSlug(str){
	str = str.replace(/^\s+|\s+$/g, '');
	var from = "ÁÀẠẢÃĂẮẰẶẲẴÂẤẦẬẨẪáàạảãăắằặẳẵâấầậẩẫóòọỏõÓÒỌỎÕôốồộổỗÔỐỒỘỔỖơớờợởỡƠỚỜỢỞỠéèẹẻẽÉÈẸẺẼêếềệểễÊẾỀỆỂỄúùụủũÚÙỤỦŨưứừựửữƯỨỪỰỬỮíìịỉĩÍÌỊỈĨýỳỵỷỹÝỲỴỶỸĐđÑñÇç·/_,:;";
	var to   = "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaooooooooooooooooooooooooooooooooooeeeeeeeeeeeeeeeeeeeeeeuuuuuuuuuuuuuuuuuuuuuuiiiiiiiiiiyyyyyyyyyyddnncc------";
	
	for (var i = 0, l = from.length ; i < l; i++) {
		str = str.replace(new RegExp(from[i], "g"), to[i]);
	}
	str = str.replace(/[^a-zA-Z0-9 -]/g, '').replace(/\s+/g, '-').toLowerCase();
	str = str.replace(/(-+)/g,'-');
	return str;
}
 var is_change_act_confirm = new Array('Bạn thực sự muốn thực hiện lệnh \'Thay đổi\'?','Lệnh \'Thay đổi\' đã được thực hiện','Vì một lý do nào đó lệnh \'Thay đổi\' đã không được thực hiện');
   
 function ShowOrHideEx(id, show) {
    var item = null;

    if (document.getElementById) {
      item = document.getElementById(id);
    } else if (document.all) {
      item = document.all[id];
    } else if (document.layers){
      item = document.layers[id];
    }
    if (item && item.style) {
      item.style.display = show ? "" : "none";
    }
  }
  function xfInsertText(text, element_id) {
    var item = null;
    if (document.getElementById) {
      item = document.getElementById(element_id);
    } else if (document.all) {
      item = document.all[element_id];
    } else if (document.layers){
      item = document.layers[element_id];
    }
    if (item) {
      item.focus();
      item.value = item.value + " " + text;
      item.focus();
    }
  }
  function onCategoryChange(value) {
  }
/*
 * function preview(){document.getElementById('short_story').value =
 * tinyMCE.get('short_story').getContent();
 * document.getElementById('full_story').value =
 * tinyMCE.get('full_story').getContent();if(document.addnews.short_story.value == '' ||
 * document.addnews.title.value == ''){ alert('The article must have a title and
 * description.'); } else{
 * dd=window.open('','prv','height=400,width=750,resizable=1,scrollbars=1')
 * document.addnews.mod.value='preview';document.addnews.target='prv'
 * document.addnews.submit();dd.focus()
 * setTimeout("document.addnews.mod.value='addnews';document.addnews.target='_self'",500) } }
 */
   // / onload=focus;function focus(){document.forms[0].title.focus();}

	function auto_keywords ( key )
	{
		var ajax = new dle_ajax();
		ajax.onShow ('');

		var wysiwyg = 'yes';

		if (wysiwyg == "yes") {
			var short_txt = ajax.encodeVAR( tinyMCE.get('short_story').getContent() );
			var varsString = "short_txt=" + short_txt;
			ajax.setVar("full_txt", ajax.encodeVAR( tinyMCE.get('full_story').getContent() ));
		} else {
			var short_txt = ajax.encodeVAR( document.getElementById('short_story').value );
			var varsString = "short_txt=" + short_txt;
			ajax.setVar("full_txt", ajax.encodeVAR( document.getElementById('full_story').value ));
		}
		ajax.setVar("key", key);
		ajax.requestFile = "engine/ajax/keywords.php";

		if (key == 1) { ajax.element = 'autodescr'; }
		else { ajax.element = 'keywords';}

		ajax.method = 'POST';
		ajax.sendAJAX(varsString);

		return false;
	}

	function find_relates ( )
	{
		var ajax = new dle_ajax();

		var title = ajax.encodeVAR( document.getElementById('title').value );
		var varsString = "title=" + title;

		ajax.onShow ('');
		ajax.requestFile = 'engine/ajax/find_relates.php';
		ajax.method = 'POST';
		ajax.element = 'related_news';
		ajax.sendAJAX(varsString);

		return false;

	};
	
	
	
	
	
	
	
	function checkResize(){
}

function findPosY(obj)
{
	var curtop = 0;
	var printstring = '';
	if (obj.offsetParent)
	{
		while (obj.offsetParent)
		{
			curtop += obj.offsetTop
			obj = obj.offsetParent;
		}
	}
	else if (obj.y)
		curtop += obj.y;
	return curtop;
}

function findPosX(obj)
{
	var curleft = 0;
	if (obj.offsetParent)
	{
		while (obj.offsetParent)
		{
			curleft += obj.offsetLeft
			obj = obj.offsetParent;
		}
	}
	else if (obj.x)
		curleft += obj.x;
	return curleft;
}

function addToFavorites(){
	if (window.external){
		window.external.Addfavorite('http://www.businesstravelvietnam.com','KienThanh Home Page');
	}
	else{
		alert('You are using a browser that does not support adding Favorites by script, please add it manually');
	}
}

function OpenChat(url){
		uploader = window.open(url,"upload","toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=800,height=800,left = 200,top = 100");
}	

function doUploadPic(url){
	uploader = window.open(url,"upload","toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=400,height=130,left = 0,top = 0");
}

function doUploadPic2(url){
	uploader = window.open(url,"upload","toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300,left = 0,top = 0");
}

function preview(id,dir){
	var img = document.getElementById(id).value;
	if(img!="")
	{
		var path = dir + document.getElementById(id).value;
		
		// alert(path);
		uploader = window.open(path,"upload","toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=500,height=300,left = 0,top = 0");
	
	}
	else
	{
		alert("Please input image!");
	}
}

function addRoomType(url){
	uploader = window.open(url,"upload","toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=600,height=400,left = 200,top = 100");
}	
function OpenWindow(url){
	uploader = window.open(url,"upload","toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=600,height=400,left = 200,top = 100");
}	
function OpenWindowM(url){
	uploader = window.open(url,"upload","toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=600,height=650,left = 200,top = 100");
}
function OpenWindowAdmin(url){
	uploader = window.open(url,"upload","toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=1,width=550,height=650,left = 200,top = 100");
}		

function docheck(status,from_)
{
	var alen=document.frmList.elements.length;
	alen=(alen>5)?document.frmList.chkid.length:0;
	if (alen>0)
	{
		for(var i=0;i<alen;i++)
		document.frmList.chkid[i].checked=status;
	}
	else
	{
		document.frmList.chkid.checked=status;
	}
	if(from_>0)
		document.frmList.chkall.checked=status;
	}



function docheckone()
{
	var alen=document.frmList.elements.length;
	var isChecked=true;
	alen=(alen>4)?document.frmList.chkid.length:0;
	if (alen>0)
	{
		for(var i=0;i<alen;i++)
			if(document.frmList.chkid[i].checked==false)
				isChecked=false;
	}else
	{
		if(document.frmList.chkid.checked==false)
			isChecked=false;
	}				
	document.frmList.chkall.checked=isChecked;
}
function calculatechon()
{			
	var strchon="";
	var alen=document.frmList.elements.length;				
	alen=(alen>5)?document.frmList.chkid.length:0;
	if (alen>0)
	{
		for(var i=0;i<alen;i++)
			if(document.frmList.chkid[i].checked==true)
				strchon+=document.frmList.chkid[i].value+",";
	}else
	{
		if(document.frmList.chkid.checked==true)
			strchon=document.frmList.chkid.value;
	}
	document.frmList.chon.value=strchon;
}
 function Search(){
	 var alen=document.frmList.elements.length;
	if(document.frmList.KeyWord.value == ""){
			alert("Nhap tu khoa muon tim kiem");
			document.frmList.KeyWord.focus();
			return false
	}else {
		
		// return true;
		document.frmList.submit();
	}
	
}  
function checkInput()
{
	var alen=document.frmList.elements.length;
	var isChecked=false;
	alen=(alen>5)?document.frmList.chkid.length:0;
	if (alen>0)
	{
		for(var i=0;i<alen;i++)
			if(document.frmList.chkid[i].checked==true)
				isChecked=true;
	}else
	{
		if(document.frmList.chkid.checked==true)
			isChecked=true;
	}
	if (!isChecked)											
		alert("Please select admin to delete!");
	else
	{
		calculatechon();
		msg = "Are you sure do Delete?\n";
		choice = confirm(msg);
		if(choice != true)	isChecked=false;
	}
	return isChecked;
} 

function loadFCK(id)
{
	var oFCKeditor = new FCKeditor( id ) ;
	oFCKeditor.BasePath	= '../FCKeditor/' ;
	// oFCKeditor.Width = 600;
	oFCKeditor.Height = 250;
// oFCKeditor.ImageBrowserURL = mcImageManager.open('frAdd',id);
	oFCKeditor.ReplaceTextarea() ;
}
function loadFCK_Fix(id){
	var oFCKeditor = new FCKeditor( id ) ;
	oFCKeditor.BasePath	= '../FCKeditor/' ;
	// oFCKeditor.Width = 600;
	oFCKeditor.Height = 100;
// oFCKeditor.ImageBrowserURL = mcImageManager.open('frAdd',id);
	oFCKeditor.ReplaceTextarea() ;
}
function loadFCK_Basic(id)
{
	var oFCKeditor = new FCKeditor( id ) ;
	oFCKeditor.BasePath	= '../FCKeditor/' ;
	oFCKeditor.ToolbarSet = 'Basic';
	// oFCKeditor.Width = 600;
	oFCKeditor.Height = 100;
// oFCKeditor.ImageBrowserURL = mcImageManager.open('frAdd',id);
	oFCKeditor.ReplaceTextarea() ;
}

function backpage(){
	history.go(-1)	
}

function setFile(elementId,theWidth,theHeight)
	{
		var theTop=(screen.height/2)-(theHeight/2);
		var theLeft=(screen.width/2)-(theWidth/2);
		var features='height='+theHeight+',width='+theWidth+',top='+theTop+',left='+theLeft+",scrollbars=yes";
		var linkopen = '../FCKeditor/editor/plugins/ajaxfilemanager/ajaxfilemanager.php?editor=form&view=thumbnail&elementId='+elementId;

		var win = window.open(linkopen, 'FileImageManager',features);		
		return false;
	}
	
	$(document).ready(function(){
		
		$('#addAct').click(function(){
			changeShow()
		})
		$('#editAct').click(function(){
			changeShow()
		})
		
		$('#langen').click(function(){
			 changerLang(2);
		})
		$('#langvi').click(function(){
			 changerLang(1);
		})
		$('#langfr').click(function(){
			 changerLang(3);
		})
		function changerLang(id){
			$('#langID').val(id);
			document.frmlang.submit();
		}
		
	/*
	 * $('#newsImage').change(function(){ changerImage() })
	 */
		setTimeout(function(){
			  changerImage()
		},1000);
		function changerImage(){
			if( $('#newsImage').val()){
			var img = $('#newsImage').val();	
			
			$('#imageshow').attr("src", "../"+img);
			}
		}
		function changeShow(){
			if(document.getElementById('checkShow')){
				if(document.getElementById('checkShow').checked == true){
						document.getElementById('ShowHome').value=1
				}else{
					document.getElementById('ShowHome').value=2
				}
			// alert(document.getElementById('ShowHome').value);
			}
			
			if(document.getElementById('checkTieudiem')){
				if(document.getElementById('checkTieudiem').checked == true){
						document.getElementById('tieudiemID').value=1
				}else{
					document.getElementById('tieudiemID').value=2
				}
				// alert(document.getElementById('tieudiemID').value);
			}
			if(document.getElementById('checkactivies')){
				if(document.getElementById('checkactivies').checked == true){
						document.getElementById('activies').value=1
				}else{
					document.getElementById('activies').value=2
				}
				// alert(document.getElementById('tieudiemID').value);
			}
			if(document.getElementById('checkguide')){
				if(document.getElementById('checkguide').checked == true){
						document.getElementById('travelguide').value=1
				}else{
					document.getElementById('travelguide').value=2
				}
				// alert(document.getElementById('tieudiemID').value);
			}
		}
	})
	
	function addEvent() {
		
	  var ni = document.getElementById('list');
	  var numi = document.getElementById('theValue');
	  var num = (document.getElementById("theValue").value -1)+ 2;
	  numi.value = num;
	  var divIdName = "my"+num+"Div";
	  var newdiv = document.createElement('div');
	  newdiv.setAttribute("id",divIdName);
	  newdiv.innerHTML = "<input type=\"text\" class=\"input\" size=\"60\" name=\"newsThumbImage[]\" id='newsThumbImage"+ num +"'/>&nbsp;<button onclick=\"return setFile('newsThumbImage"+ num +"','900','600');\" class=\"button\">Browse</button>&nbsp;<a href=\"javascript:;\" onclick=\"removeElement(\'"+divIdName+"\')\"  class=\"button\" > Delete </a>";
	  ni.appendChild(newdiv);
}



function removeElement(divNum) {
  var d = document.getElementById('list');
  var olddiv = document.getElementById(divNum);
  d.removeChild(olddiv);
}

		function addRow(tableID) {
			var table = document.getElementById(tableID);
			var col = new Array('checkbox[]','image_name[]','image_url[]');
			var sizetext =  new Array('','50','50');
			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);
			var cell = new Array();
			var element = new Array();
			for(i=0;i<3;i++){
				cell[i] = row.insertCell(i);
				element[i] = document.createElement("input");
				if(i==0){
					element[i].type = "checkbox";
				}else{
					element[i].type = "text";
					element[i].size = sizetext[i];	
					element[i].setAttribute("class","data1");
					var idname = col[i].replace('[]','');
					element[i].setAttribute("id",idname + "_" +  rowCount + 1);								
				}

				element[i].name = col[i];
				
				cell[i].appendChild(element[i]);			
			}
				var cell4 = row.insertCell(3);
           		var element4 = cE('span');
            	cA(element4,'class','button');
		        cA(element4,'onclick','return setFile("image_url_'+ rowCount + 1 + '","1000","600");');
        		cA(cell4,'width','15%');
	            element4.appendChild(document.createTextNode('Upload ảnh'));
    	        cell4.appendChild(element4);
		}
        
		
		
		function addRow_slider(tableID) {
			var table = document.getElementById(tableID);
			var col = new Array('checkbox[]','image_stt[]','image_name[]','imagelink[]','image_url[]');
			var sizetext =  new Array('','30','30','50','10');
			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);
			var cell = new Array();
			var element = new Array();
			for(i=0;i<5;i++){
				cell[i] = row.insertCell(i);
				element[i] = document.createElement("input");
				if(i==0){
					element[i].type = "checkbox";
				}else{
					element[i].type = "text";
				//	element[i].size = sizetext[i];	
					element[i].setAttribute("class","data1");
					var idname = col[i].replace('[]','');
					element[i].setAttribute("id",idname + "_" +  rowCount + 1);								
				}

				element[i].name = col[i];
				
				cell[i].appendChild(element[i]);			
			}
				var cell6 = row.insertCell(5);
           		var element6 = cE('span');
            	cA(element6,'class','button');
		        cA(element6,'onclick','return setFile("image_url_'+ rowCount + 1 + '","1000","600");');
        		cA(cell6,'width','15%');
	            element6.appendChild(document.createTextNode('Upload ảnh'));
    	        cell6.appendChild(element6);
		}
        
		
		function addRow2(tableID) {
			var table = document.getElementById(tableID);
			var col = new Array('checkbox[]','image_url[]');
			var sizetext =  new Array('','50');
			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);
			var cell = new Array();
			var element = new Array();
			for(i=0;i<2;i++){
				cell[i] = row.insertCell(i);
				element[i] = document.createElement("input");
				if(i==0){
					element[i].type = "checkbox";
				}else{
					element[i].type = "text";
					element[i].size = sizetext[i];	
					element[i].setAttribute("class","data1");
					var idname = col[i].replace('[]','');
					element[i].setAttribute("id",idname + "_" +  rowCount + 1);								
				}

				element[i].name = col[i];
				
				cell[i].appendChild(element[i]);			
			}
				var cell4 = row.insertCell(2);
           		var element4 = cE('span');
            	cA(element4,'class','button');
		        cA(element4,'onclick','return setFile("image_url_'+ rowCount + 1 + '","1000","600");');
        		cA(cell4,'width','15%');
	            element4.appendChild(document.createTextNode('Upload ảnh'));
    	        cell4.appendChild(element4);
		}
		

		function deleteRow(tableID) {
		  
			try {
			var table = document.getElementById(tableID);
			var rowCount = table.rows.length;
            
			for(var i=0; i<rowCount; i++) {
				var row = table.rows[i];
				var chkbox = row.cells[0].childNodes[0];
              // chkbox.type = "checkbox";
              // chkbox.name = "chk1";
                
             // alert(row.cells[0].childNodes[0].innerHTML)
				if(chkbox.checked == true ) {

					table.deleteRow(i);
					rowCount--;
					i--;
				}


			}
			}catch(e) {
				alert(e);
			}
		}
        

        
        function addImgRow(tableID){ 
            var table = document.getElementById(tableID);         
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
                    
            var cell1 = row.insertCell(0);
            var element1 = document.createElement("input");
            element1.type = "checkbox";
            // element1.style.vertical-align='middle';
            cA(cell1,'class','fix_td');
            cA(cell1,'align','center');
            cell1.appendChild(element1);
             
            // var cell2 = row.insertCell(1);
            // cell2.innerHTML = rowCount + 1;
            var cell2 = row.insertCell(1);
            var element2 = cE('input');
            cA(element2,'type','text');
            // cA(element2,'class','text-input');
            cA(element2,'size','30');
            cA(element2,'name','imgName[]');
            element2.style.width='80%';            
            cell2.appendChild(element2);
            
            var cell3 = row.insertCell(2);
            var element3 = cE('input');
            cA(element3,'type','text');
            cA(element3,'readonly','true');
            // cA(element3,'class','text-input');
            cA(element3,'size','60');
            cA(element3,'name','imgUrl[]');
            cA(element3,'id','imgUrl_'+ rowCount + 1);
            element3.style.width='80%';            
            cell3.appendChild(element3);
            
            var cell4 = row.insertCell(3);
            var element4 = cE('span');
            cA(element4,'class','button');
            cA(element4,'onclick','return setFile("imgUrl_'+ rowCount + 1 + '","1000","600");');
            // element4.style.width='90px';
            // element4.style.vertical-align='middle';
            cA(cell4,'width','15%');
            element4.appendChild(document.createTextNode('Upload ảnh'));
            cell4.appendChild(element4);
             
        }
        function cE(el){
    		this.obj = document.createElement(el);
    		return this.obj
        }
    	function cA(obj,att,val){
    		obj.setAttribute(att,val);
    		return
    	}
        /***********************************************************************
		 * *** Thuc hien check so option duoc phep chon ***
		 **********************************************************************/
     	function selectall_assigned_Intable(){
    		var form = document.frAdd;
    		for(var i = 0;i < form.elements['items[]'].length;i++){
    			form.elements['items[]'].options[i].selected = true;
    		}
    	}
        /***********************************************************************
		 * *** Thuc hien add option *****
		 **********************************************************************/
    	function AddInselect(){
    		var form = document.frAdd;
    		var fl = form.elements['intable[]'].length - 1;
    		var au = form.elements['items[]'].length - 1;
    		var itemsid = "x";
    		for (au; au > -1; au--){
    			itemsid = itemsid + "," + form.elements['items[]'].options[au].value + ",";
    		}
    		for (fl; fl > -1; fl--){
    			if (form.elements['intable[]'].options[fl].selected && itemsid.indexOf("," + form.elements['intable[]'].options[fl].value + ",") == -1) {
    				t = form.elements['items[]'].length;
    				opt = new Option(form.elements['intable[]'].options[fl].text, form.elements['intable[]'].options[fl].value);
    				form.elements['items[]'].options[t] = opt;
    				form.elements['items[]'].options[t].selected =true;
    			}
    	   }
    	}
        /***********************************************************************
		 * *** Thuc hien Xoa option da chon *****
		 **********************************************************************/
        function RemoveInselect () {
    		var form = document.frAdd;
    		fl = form.elements['items[]'].length - 1;
    		for (fl; fl > -1; fl--) {
    			if (form.elements['items[]'].options[fl].selected) {
    				form.elements['items[]'].options[fl] = null;
    			}
    		}
    	}        
$(document).ready(function(){                                                        
	$('#newsTitle').bind('change', function() {
		$('#seo_name').val(generateSlug($(this).val()));
	});
	var site_name = $('#site_name').val();
	$('#newsTitle').bind('change', function() {
		$('#metaTitle').val($(this).val() + ' :: ' + site_name);
	});
	$('#productName').bind('change', function() {
		$('#seo_name').val(generateSlug($(this).val()));
	});
	var site_name = $('#site_name').val();
	$('#productName').bind('change', function() {
		$('#metaTitle').val($(this).val() + ' :: ' + site_name);
	});
	
	
	$('#catName').bind('change', function() {
		$('#keypage').val(generateSlug($(this).val()));
	});
	$('#catName').bind('change', function() {
		$('#metaTitle').val($(this).val() + ' :: ' + site_name);
	});
	
});	
 
$(function() {                                    		
  function split( val ) {
	  return val.split( /,\s*/ );
  }
  function extractLast( term ) {
	  return split( term ).pop();
  }


});	
			

$(document).ready(function(){ 
	
	$('#catName').bind('change', function() {
		$('#keypage').val(generateSlug($(this).val()));
	});
	$('#productName').bind('change', function() {
		$('#keypage').val(generateSlug($(this).val()));
	});

});	