/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.filebrowserBrowseUrl = '/public/libs/ckfinder/ckfinder.html';
//	config.filebrowserImageBrowseUrl = '/public/libs/ckfinder/ckfinder.html?type=upload';
//	config.filebrowserFlashBrowseUrl = '/public/libs/ckfinder/ckfinder.html?type=Flash';
//	config.filebrowserUploadUrl = '/public/libs/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
//	config.filebrowserImageUploadUrl = '/public/libs/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
//	config.filebrowserFlashUploadUrl = '/public/libs/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
	config.extraPlugins = 'youtube';
	//SkinPath :  '/skins/office2003/'; 
};
