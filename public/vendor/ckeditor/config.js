/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */
/*
CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'links' },
		{ name: 'insert' },
		{ name: 'forms' },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'others' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'styles' },
		{ name: 'colors' },
		{ name: 'about' }
	];

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';
};
*/

CKEDITOR.editorConfig = function( config ) {
	config.language = 'en';
	config.uiColor = '#f5f5f5';
	config.height = 300;
	config.toolbarCanCollapse = true;
	config.extraPlugins = 'imagebrowser,filebrowser';
	config.fullPage = false;
	// config.extraPlugins = 'widget';
	// config.extraPlugins = 'lineutils';
	// config.extraPlugins = 'tableresize';
	config.allowedContent = true;
	// config.skin = 'moono-dark';
	config.toolbarGroups = [
		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'links' },
		{ name: 'insert' },
		{ name: 'forms' },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'others' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'styles' },
		{ name: 'colors' }
		//{ name: 'about' }
		
	];
	// config.removeButtons = 'Scayt';
	//config.removeButtons = 'Source,Scayt,Table,Anchor,HorizontalRule,Indent';
	config.enterMode = CKEDITOR.ENTER_DIV;
	//config.filebrowserBrowseUrl = '/index.php?q=imce&app=ckeditor|url@txtUrl|width@txtWidth|height@txtHeight';
	//config.filebrowserImageBrowseUrl = '/index.php?q=imce&app=ckeditor|url@txtUrl|width@txtWidth|height@txtHeight';
	//config.filebrowserFlashBrowseUrl = '/index.php?q=imce&app=ckeditor|url@txtUrl|width@txtWidth|height@txtHeight';

	config.filebrowserUploadMethod = 'form';
	config.filebrowserBrowseUrl = '/public/uploads/file.php?type=Files';
	config.filebrowserUploadUrl = '/public/uploads/file.php?type=Files';

	// not sure
	config.filebrowserImageBrowseUrl = '/public/uploads/file.php?type=Images';
    config.filebrowserImageUploadUrl = '/public/uploads/file.php?type=Images';

    config.contentsCss = '//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css';

	//config.filebrowserBrowseUrl = '/browser/';
	//config.filebrowserImageBrowseUrl = '/browser';
	//config.filebrowserFlashBrowseUrl = '/browser';
	// config.filebrowserUploadUrl = '/browser/file.php';
	// config.extraPlugins = 'btbutton';
	//config.contentsCss = '/themes/greentheme/views/site/Assets/css/main.css';
	// config.extraPlugins = 'justify';
	// config.extraPlugins = 'lineheight';

	// config.extraPlugins = 'widget,lineutils,tableresize,btbutton,preview,justify,lineheight,panelbutton,colorbutton,language,timestamp,youtube,smiley,video,slideshow'; // no space, or it won't work
	// timestamp discontinued
	config.extraPlugins = 'widget,lineutils,tableresize,btbutton,preview,justify,lineheight,panelbutton,colorbutton,language,youtube,smiley,video,slideshow,wenzgmap'; // no space, or it won't work
	// editorplaceholder

 	//	Youtube
 	// config.youtube_width = '640';
 	// config.youtube_height = '480';
 	config.youtube_width = '500';
 	config.youtube_height = '500';
 	config.youtube_responsive = true;
 	config.youtube_related = false;
 	config.youtube_older = false;
 	config.youtube_privacy = false;
 	config.youtube_autoplay = false;
 	config.youtube_controls = false;
 	config.youtube_disabled_fields = ['txtEmbed', 'chkAutoplay']; // rest of them below

 	// List of UI elements:
		// txtEmbed
		// txtUrl
		// txtWidth
		// txtHeight
		// chkResponsive
		// chkNoEmbed
		// chkRelated
		// chkOlderCode
		// chkPrivacy
		// chkAutoplay
		// txtStartAt
		// chkControls
	config.removePlugins = 'elementspath';



// disable auto spell check config.scayt_autoStartup = false;
};
