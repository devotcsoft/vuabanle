<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Quản lý vua bán lẻ</title>
    <link rel="icon" type="image/ico" href="<?php echo base_url().'public/libs';?>/favicon.ico"/>
    <link href="<?php echo base_url().'public/back-end/';?>css/stylesheets.css" rel="stylesheet" type="text/css" />
    <link rel='stylesheet' type='text/css' href='<?php echo base_url().'public/back-end/';?>css/fullcalendar.print.css' media='print' />
    <script type='text/javascript' src='<?php echo base_url().'public/';?>libs/jquery.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url().'public/';?>libs/jquery-ui.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url().'public/back-end/';?>js/actions.js'></script>
    <script type='text/javascript' src='<?php echo base_url().'public/';?>libs/jquery.validate.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url().'public/';?>libs/localization/messages_vi.js'></script>
    <script type='text/javascript' src='<?php echo base_url().'public/';?>libs/library.js'></script>
    <!-- 
    <script type='text/javascript' src='<?php echo base_url().'public/';?>libs/ckeditor/ckeditor.js'></script>
     -->
     <script type='text/javascript' src='<?php echo base_url('assets/libs/ckeditor/ckeditor.js');?>'></script>
    <script type='text/javascript' src='<?php echo base_url().'public/';?>libs/ckfinder/ckfinder.js'></script>
    <script src="<?= base_url('public')?>/libs/jquery.colorpicker.js"></script>
    <link href="<?= base_url('public')?>/libs/jquery.colorpicker.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<script type="text/javascript">
function BrowseServer( startupPath, functionData )
{
	// You can use the "CKFinder" class to render CKFinder in a page:
	var finder = new CKFinder();

	// The path for the installation of CKFinder (default = "/ckfinder/").
	finder.basePath = '../';

	//Startup path in a form: "Type:/path/to/directory/"
	//finder.startupPath = startupPath;
	finder.startupPath = 'upload:/adv/';

	// Name of a function which is called when a file is selected in CKFinder.
	finder.selectActionFunction = SetFileField;

	// Additional data to be passed to the selectActionFunction in a second argument.
	// We'll use this feature to pass the Id of a field that will be updated.
	finder.selectActionData = functionData;

	// Name of a function which is called when a thumbnail is selected in CKFinder.
	finder.selectThumbnailActionFunction = ShowThumbnails;

	// Launch CKFinder
	finder.popup();
}

// This is a sample function which is called when a file is selected in CKFinder.
function SetFileField( fileUrl, data )
{
	document.getElementById( data["selectActionData"] ).value = fileUrl;
}

// This is a sample function which is called when a thumbnail is selected in CKFinder.
function ShowThumbnails( fileUrl, data )
{
	// this = CKFinderAPI
	var sFileName = this.getSelectedFile().name;
	document.getElementById( 'thumbnails' ).innerHTML +=
			'<div class="thumb">' +
				'<img src="' + fileUrl + '" />' +
				'<div class="caption">' +
					'<a href="' + data["fileUrl"] + '" target="_blank">' + sFileName + '</a> (' + data["fileSize"] + 'KB)' +
				'</div>' +
			'</div>';

	document.getElementById( 'preview' ).style.display = "";
	// It is not required to return any value.
	// When false is returned, CKFinder will not close automatically.
	return false;
}
	</script>