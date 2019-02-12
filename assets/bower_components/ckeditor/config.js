/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function (config) {
	config.height = 100;
	config.language = 'pt-br';
	config.toolbarGroups = [
		{name: 'document', groups: ['mode', 'document', 'doctools']},
		{name: 'clipboard', groups: ['clipboard', 'undo']},
		{name: 'editing', groups: ['find', 'selection', 'editing']},
		{name: 'forms', groups: ['forms']},
		{name: 'insert', groups: ['insert']},
		'/',
		{name: 'styles', groups: ['styles']},
		{name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
		{name: 'colors', groups: ['colors']},
		{name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']},
		{name: 'links', groups: ['links']},
		{name: 'tools', groups: ['tools']},
		{name: 'others', groups: ['others']},
		{name: 'about', groups: ['about']}
	];
	config.removeButtons = 'Source,Save,NewPage,Preview,Print,Templates,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,CreateDiv,Language,BidiRtl,BidiLtr,Anchor,Image,Flash,PageBreak,Iframe,Styles,Format,Maximize,ShowBlocks,About,CopyFormatting,Unlink,Link';
};
