@charset "UTF-8";
/* CSS Document */

.bbcode_container {
	margin:20px;
	margin-top:5px;
	display:block;
}

.bbcode_container .bbcode_desc {
	margin-bottom:2px;
	font-size:11px;
}
/*text-align should alwais be LTR for the CODE blocks*/
.bbcode_container div.bbcode_code,
.bbcode_container pre.bbcode_code {
	margin:0;
	padding:6px;
	border:1px inset;
	text-align:left;
	overflow:scroll;
	direction:ltr;
	background:#202020 none   ;
	font-size:12px;	
}

.bbcode_container code.bbcode_code {
	margin:0;
	text-align:left;
	direction:ltr;
	font-size:12px;	
}

.bbcode_container code.bbcode_code code {
	white-space:nowrap;
}

.bbcode_container div.bbcode_quote {
	margin:0 10px;
	margin-bottom: 10px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	background: #202020 none   ;
	border-radius: 5px;
	border: 1px solid #000;
	font: italic  normal 13px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	position: relative;
	top: 0;
}

.bbcode_container .bbcode_quote_container {
	background: transparent url(images/Seamus/misc/quote-left.png) no-repeat  left;
	display:block;
	width: 9px;
	height: 13px;
	position: absolute;
	top: 5;
	left: -9px;
}

.bbcode_quote div.quote_container {
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	padding: 5px 10px 5px 10px;
}

.bbcode_quote .bbcode_postedby img {
	position: relative;
	top: 1px;
}

.bbcode_container div.bbcode_quote.printable {
	background:none;
	border:none;
}

.bbcode_container div.bbcode_quote div.message {
	/*font-style:italic;*/
	padding:8px 0px;
}

/* fix the bug where li's in quotes are floated */
.bbcode_container div.bbcode_quote div.message ol>li, .bbcode_container div.bbcode_quote div.message ul>li{
	float: none;
}

/* from components.css */
.bbcode_postedby {
	font:   normal 12px Tahoma,Calibri,Verdana,Geneva,sans-serif;
}

.bbcode_postedby img {
	margin:0;
}

.texteditor textarea.cke_source {
	padding:0 1px 0 1px;
}

.texteditor.content .cke_skin_kama textarea.cke_source,
.texteditor textarea {
	color: #222222;
	font:    13px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	white-space:pre-wrap;
	background: #000 none   ;
}

.texteditor.forum .cke_skin_kama textarea.cke_source,
.texteditor.forum textarea {
	color: #222222;
	font:    13px Verdana,Arial,Tahoma,Calibri,Geneva,sans-serif;
	white-space:pre-wrap;
	background: #000 none   ;
}


.editor_smiliebox {
	float:right;
	width:75px;
	height:200px;
	_background-color:#000;
	_border:solid 1px #202020;
	padding:0 3px 3px 3px;
}

.editor_smiliebox .blocksubhead {
	padding:0;
	font-size:11px;
	font-weight:normal;
	text-align:center;
	border:solid 1px #202020;
	border-width:1px 0;
}

.editor_smiliebox ul.smiliebox {
	height:190px;
	overflow:hidden;
}

.editor_smiliebox ul.smiliebox li {
	float:left;
	height:20px;
	width:20px;
	margin:2px;
	overflow:hidden;
	position:relative;
	text-align:center;
}

.editor_smiliebox ul.smiliebox li div.table {
	display:table;
	height:100%;
	margin:auto;
	/* IE8 needs the following, see https://connect.microsoft.com/IE/feedback/ViewFeedback.aspx?FeedbackID=425785#tabs */
	table-layout:fixed;
	width:20px;
}

.editor_smiliebox ul.smiliebox li div.tablecell {
	display:table-cell;
	vertical-align:middle;
}

.editor_smiliebox ul.smiliebox li img {
	height:auto;
	max-width:20px;
	width:auto !important;
	cursor: pointer;
}

.editor_smiliebox div.moresmilies {
	text-align:center;
	font-size:11px;
}

.editor_textbox_container {
	width:100%;
	float:left;
	margin:0;
}

.editor_textbox_container.smilie {
	margin-right:-165px;
}

.editor_textbox_smilie {
	margin-right:85px;
}

/* dropdown button */
.cke_skin_kama_container {
	visibility:visible; 
	background: #FFFFFF; // no stylevar
}

.cke_skin_kama_container body {
	min-width: 0;
}

.attachment a {
	padding: 1px 0;
	border: 1px solid #ffffff;
	display: block;
}

.attachment a:hover {
	padding: 1px 0;
	border-color: #316ac5;
	background-color: #dff1ff;
}


.editorpopupbody {
	padding: 5px;
	min-width: 200px;
	max-height:250px;
	overflow-y:auto;
	overflow-x:hidden;
}


.editorpopupbody li.attachment {
	white-space:nowrap;
}

.editorpopupbody div.attach_insert_all {
	cursor: pointer;
	background-color:#000;
	padding: 2px;
}

.cke_skin_kama .cke_panel.cke_attach {
	width:250px;
	height:auto;
}

.cke_skin_kama span.cke_browser_webkit,.cke_skin_kama span.cke_browser_gecko18 {
   outline: none !important;
}

/* attachment click */
.previewthumbactive {
	position: absolute;
	background: url('images/Seamus/misc/pencil.png') no-repeat top left;
	cursor: pointer;
	border:1px solid red;
	margin:0;
	z-index: 10;
}

img.previewthumb.active {
	cursor: pointer;
	border:1px solid red;
	margin:0;
}

/* ie8 width fix */
.cke_browser_ie8 .cke_editor {
	display: block !important;
}

/* disabled background override */
.cke_button .cke_disabled:hover {
	background-color: transparent !important;
}

/* icons */
.cke_skin_kama span:not(.cke_browser_ie) .cke_button .cke_icon {
	background: url('images/Seamus/editor/sprite.png') no-repeat top left;
}

.cke_skin_kama .cke_browser_ie .cke_button .cke_icon {
	position: relative;
	overflow: hidden;
	width: 16px;
	height: 16px
}

.cke_skin_kama .cke_browser_ie .cke_button .cke_icon_image {
	position: absolute;
	width: 2498px;
	height: 60px;
	background: url('images/Seamus/editor/sprite.png') no-repeat top left;
}

.cke_skin_kama .cke_browser_ie .cke_button .cke_icon_image.custom {
	background: none;
}

.cke_skin_kama .cke_browser_ie .cke_button a.cke_disabled .cke_icon {
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale');
}

.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button a.cke_disabled .cke_icon {
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale');
}

.cke_skin_kama .cke_browser_ie .cke_button a.cke_on .cke_icon_image {
	top: 0px;
}

.cke_skin_kama .cke_browser_ie .cke_button a.cke_off .cke_icon_image {
	top: -20px;
}

.cke_skin_kama .cke_browser_ie .cke_button a.cke_disabled .cke_icon_image {
	top: -40px;
	filter: ;
}

/* VBIV-11809 */
.cke_skin_kama .cke_browser_ie .cke_button .cke_button_textcolor .cke_buttonarrow {
	filter: ;
}

.cke_skin_kama .cke_browser_ie .cke_button .cke_buttonarrow {
	position:relative;
	top:-4px;
}

.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button a.cke_disabled .cke_icon_image {
	top: -40px;
	filter: ;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_openAttachmentWindow .cke_icon {
	background-position: 0 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_openAttachmentWindow .cke_icon_image {
	left: 0px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_enhancedsource .cke_icon
{
	background-position: -1597px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_enhancedsource .cke_icon_image
{
	left: -1597px;
}
.cke_skin_kama .cke_button_enhancedsource .cke_label
{
	/* This displays the "source" text next to the source button!*/
	/*display: inline !important;*/
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_pastetext .cke_icon
{
	background-position: -2480px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_pastetext .cke_icon_image
{
	left: -2480px;
}
.cke_skin_kama span:not(.cke_browser_ie) .cke_button_pastefromword .cke_icon
{
	background-position: -2430px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_pastefromword .cke_icon_image
{
	left: -2430px;
}
.cke_skin_kama span:not(.cke_browser_ie) .cke_button_removeFormat .cke_icon
{
	background-position: -1447px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_removeFormat .cke_icon_image
{
	left: -1447px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_bold .cke_icon
{
	background-position: -50px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_bold .cke_icon_image
{
	left: -50px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_italic .cke_icon
{
	background-position: -897px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_italic .cke_icon_image
{
	left: -897px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_underline .cke_icon
{
	background-position: -2247px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_underline .cke_icon_image
{
	left: -2247px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_subscript .cke_icon
{
	background-position: -2147px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_subscript .cke_icon_image
{
	left: -2147px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_superscript .cke_icon
{
	background-position: -2197px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_superscript .cke_icon_image
{
	left: -2197px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_table .cke_icon
{
	background-position: -2047px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_table .cke_icon_image
{
	left: -2047px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbTableProperties .cke_icon
{
	background-position: -1797px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbTableProperties .cke_icon_image
{
	left: -1797px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_tableDelete .cke_icon
{
	background-position: -1847px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_tableDelete .cke_icon_image
{
	left: -1847px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbRowInsertBefore .cke_icon
{
	background-position: -1997px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbRowInsertBefore .cke_icon_image
{
	left: -1997px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbRowInsertAfter .cke_icon
{
	background-position: -1947px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbRowInsertAfter .cke_icon_image
{
	left: -1947px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbRowDelete .cke_icon
{
	background-position: -1897px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbRowDelete .cke_icon_image
{
	left: -1897px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbColumnInsertBefore .cke_icon
{
	background-position: -1747px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbColumnInsertBefore .cke_icon_image
{
	left: -1747px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbColumnInsertAfter .cke_icon
{
	background-position: -1697px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbColumnInsertAfter .cke_icon_image
{
	left: -1697px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbColumnDelete .cke_icon
{
	background-position: -1647px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbColumnDelete .cke_icon_image
{
	left: -1647px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_horizontalrule .cke_icon
{
	background-position: -2097px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_horizontalrule .cke_icon_image
{
	left: -2097px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_smiley .cke_icon
{
	background-position: -1497px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_smiley .cke_icon_image
{
	left: -1497px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_iespell .cke_icon
{
	background-position: -1547px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_iespell .cke_icon_image
{
	left: -1547px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_link .cke_icon
{
	background-position: -300px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_link .cke_icon_image
{
	left: -300px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_Email .cke_icon
{
	background-position: -401px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_Email .cke_icon_image
{
	left: -401px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_unlink .cke_icon
{
	background-position: -2346px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_unlink .cke_icon_image
{
	left: -2346px;
}
.cke_skin_kama span:not(.cke_browser_ie) .cke_button_image .cke_icon, .cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbimage .cke_icon
{
	background-position: -747px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_image .cke_icon_image, .cke_skin_kama .cke_browser_ie .cke_button_vbimage .cke_icon_image
{
	left: -747px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_videotag .cke_icon
{
	background-position: -2397px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_videotag .cke_icon_image
{
	left: -2397px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_Quote .cke_icon
{
	background-position: -1347px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_Quote .cke_icon_image
{
	left: -1347px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_Code .cke_icon
{
	background-position: -151px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_Code .cke_icon_image
{
	left: -151px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_Html .cke_icon
{
	background-position: -451px 0; 
}
.cke_skin_kama .cke_browser_ie .cke_button_Html .cke_icon_image
{
	left: -451px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_Php .cke_icon
{
	background-position: -1297px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_Php .cke_icon_image
{
	left: -1297px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_PageBreak .cke_icon
{
	background-position: -1147px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_PageBreak .cke_icon_image
{
	left: -1147px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_PreviewBreak .cke_icon
{
	background-position: -100px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_PreviewBreak .cke_icon_image
{
	left: -100px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_textcolor .cke_icon
{
	background-position: -201px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_textcolor .cke_icon_image
{
	left: -201px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_undo .cke_icon
{
	background-position: -2297px 0; 
}
.cke_skin_kama .cke_browser_ie .cke_button_undo .cke_icon_image
{
	left: -2297px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_undo .cke_icon
{
	background-position: -1397px 0;
}
.cke_skin_kama .cke_rtl .cke_browser_ie .cke_button_undo .cke_icon_image
{
	left: -1397px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_redo .cke_icon
{
	background-position: -1397px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_redo .cke_icon_image
{
	left: -1397px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_redo .cke_icon
{
	background-position: -2297px 0; 
}
.cke_skin_kama .cke_rtl .cke_browser_ie .cke_button_redo .cke_icon_image
{
	left: -2297px;
}

.cke_skin_kama .cke_rtl .cke_rcombo {
	float:right;
}

.cke_skin_kama .cke_browser_ie6 .cke_rtl .cke_rcombo,
.cke_skin_kama .cke_browser_ie7 .cke_rtl .cke_rcombo  {
	float:none;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_numberedlist .cke_icon
{
	background-position: -797px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_numberedlist .cke_icon_image
{
	left: -797px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_bulletedlist .cke_icon
{
	background-position: -847px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_bulletedlist .cke_icon_image
{
	left: -847px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_outdent .cke_icon
{
	background-position: -1097px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_outdent .cke_icon_image
{
	left: -1097px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_indent .cke_icon
{
	background-position: -697px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_indent .cke_icon_image
{
	left: -697px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_justifyleft .cke_icon
{
	background-position: -997px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_justifyleft .cke_icon_image
{
	left: -997px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_justifycenter .cke_icon
{
	background-position: -947px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_justifycenter .cke_icon_image
{
	left: -947px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_justifyright .cke_icon
{
	background-position: -1047px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_justifyright .cke_icon_image
{
	left: -1047px;
}

/* rtl icons */

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_undo .cke_icon
{
	background-position: -1397px 0;
}
.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button_undo .cke_icon_image
{
	left: -1397px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_redo .cke_icon
{
	background-position: -2297px 0; 
}
.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button_redo .cke_icon_image
{
	left: -2297px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_outdent .cke_icon
{
		background-position: -697px 0;
}
.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button_outdent .cke_icon_image
{
		left: -697px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_indent .cke_icon
{
		background-position: -1097px 0;
}
.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button_indent .cke_icon_image
{
		left: -1097px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_columnInsertBefore .cke_icon
{
	background-position: -1697px 0;
}
.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button_columnInsertBefore .cke_icon_image
{
	left: -1697px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_columnInsertAfter .cke_icon
{
	background-position: -1747px 0;
}
.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button_columnInsertAfter .cke_icon_image
{
	left: -1747px;
}

.cke_skin_kama .cke_dialog .cke_dialog_ui_labeled_label {
	float:none;
}

.cke_skin_kama .cke_dialog input[type="file"] {
	border:1px inset;
}

.cke_skin_kama div.cke_bottom_restore_autosave {
	position:relative;
}

.cke_skin_kama div.cke_bottom_restore_autosave .cke_toolgroup {
	height:18px;
	position:absolute;
	top:4px;
	padding:0 3px 0 0;
}

.cke_skin_kama div.cke_bottom_restore_autosave a.restoretext {
	cursor:pointer;
	height:12px;
	background-image:none
}

.cke_skin_kama div.as_ind_container {
	position:relative;
}

.cke_skin_kama div.as_ind_container div {
	background-color:#202020;
	right:0;
	position:absolute;
	padding:2px;
	top:-12px;
	font-weight:bold;
}

.cke_skin_kama .cke_toolbox {
	margin-bottom: 5px;
}

/* VBIV-11874 Override CSS so that textarea popup resizes with the dialog */
.cke_skin_kama .cke_dialog .cke_dialog_ui_textarea.cke_pastetext {
	width:auto;
	height:auto;
}

/* Turn off focus outline on mac */
.cke_dialog_tab:focus {
	outline:none;
}

/* Allow size combo to adjust a bit horizontally */
.cke_skin_kama .cke_fontSize span.cke_text {
	max-width:60px;
	min-width:25px;
	width:auto;
	_width:25px;
}


.cke_skin_kama .cke_editor .cke_rcombo a,
.cke_skin_kama .cke_editor .cke_toolgroup {
	background:  url(clientscript/ckeditor/skins/kama/images/sprites.png) repeat-x 0px -500px;
}

.cke_skin_kama .cke_editor .cke_rcombo a:hover,
.cke_skin_kama .cke_editor .cke_rcombo a:focus,
.cke_skin_kama .cke_editor .cke_rcombo a:active,
.cke_skin_kama .cke_editor .cke_button a:hover,
.cke_skin_kama .cke_editor .cke_button a:focus,
.cke_skin_kama .cke_editor .cke_button a:active {
	background-color: #202020;
}


.cke_skin_kama .cke_editor .cke_button a.cke_on {
	background-color: #1a1a1a;
}

.cke_skin_kama .cke_editor .cke_button a.cke_on:hover,
.cke_skin_kama .cke_editor .cke_button a.cke_on:focus,
.cke_skin_kama .cke_editor .cke_button a.cke_on:active {
	background-color: #202020;
}

.cke_skin_kama .cke_editor .cke_button a.cke_disabled * {
	opacity: .3;
}

.cke_skin_kama .cke_editor .cke_button a,
.cke_skin_kama .cke_editor .cke_button a.cke_off {
	opacity: .7;
}

.cke_skin_kama .cke_wrapper.cke_ltr,
.cke_skin_kama .cke_wrapper.cke_rtl {
	background: #777 url(clientscript/ckeditor/skins/kama/images/sprites.png) repeat-x 0px -1950px;
}

.cke_skin_kama .cke_dialog_body .cke_dialog_contents {
	background: #000 none   ;
}

.cke_skin_kama .cke_dialog_contents .cke_dialog_contents {
	background-color: #000000;
	border-top: #000 1px solid;
	border-right: #000 1px solid;
	border-left: #000 1px solid;
}

.cke_skin_kama .cke_dialog_title {
	color: #000000;
}

.cke_skin_kama .cke_dialog_body .cke_dialog_tabs a.cke_dialog_tab {
	background-color: #000;
	color: #000000;	
}

.cke_skin_kama .cke_dialog_body .cke_dialog_tabs a.cke_dialog_tab_selected {
	background-color: #000000;
	color: #000000;	
}

.cke_skin_kama .cke_dialog_body .cke_dialog_tabs a.cke_dialog_tab:hover {
	background-color: #777;
	color: #000000;
}

.cke_skin_kama .cke_dialog_contents .cke_dialog_footer {
	background-color: #000000;
	border-top: #000 1px solid;
	border-right: #000 1px solid;
	border-left: #000 1px solid;
}

.cke_skin_kama .cke_dialog .cke_dialog_body {
	background: #000 none   ;
}

.cke_skin_kama .cke_dialog_body .cke_dialog_title {
	border-bottom: #000000 1px solid;
}

.cke_skin_kama .cke_dialog_contents *, .cke_skin_kama .cke_dialog_contents a:hover, .cke_skin_kama .cke_dialog_contents a:link, .cke_skin_kama .cke_dialog_contents a:visited, .cke_skin_kama .cke_dialog_contents a:active {
	color: #000000;
}

.cke_skin_kama .cke_dialog .cke_dialog_body a.cke_dialog_close_button {
	background-image:none;
	top:10px;
}

.cke_skin_kama .cke_dialog_body .cke_dialog_close_button span {
	display:inline;
	font-weight:bold;
	font-size:10px;
	padding:0 2px 0 2px;
	border:1px solid #000000;
	color: #000000;
	cursor:pointer;
	display: inline-block; 
	vertical-align: bottom;
}

.cke_skin_kama .cke_dialog_body .cke_dialog_close_button span:hover {
	background-color:#000000;
	color: #000;
}

.cke_skin_kama .cke_dialog .cke_dialog_body .cke_dark_background {
	background-color: #000000;
}

.cke_skin_kama .cke_dialog_body a.cke_smile img,
.cke_skin_kama .cke_dialog_body a.cke_smile:focus img,
.cke_skin_kama .cke_dialog_body a.cke_smile:active img,
.cke_skin_kama .cke_dialog_body a.cke_smile:hover img {
	border:0;
	padding:2px;
}

.cke_skin_kama .cke_dialog .cke_dialog_body .cke_dialog_ui_input_text,
.cke_skin_kama .cke_dialog .cke_dialog_body .cke_dialog_ui_input_select,
.cke_skin_kama .cke_dialog .cke_dialog_body .cke_dialog_ui_input_textarea {
	color:#000000;
}

.cke_skin_kama .cke_dialog div.cke_disabled .cke_dialog_ui_labeled_content * {
	background-color:#CCCCCC;
}

.cke_skin_kama .cke_dialog .smiley_page {
	overflow:auto;
}

.cke_skin_kama .cke_dialog .smiley_category {
	padding:5px;
}


/* CSS Document */
.popupmenu {
	*z-index:999;
	position: relative;
}

.popupmenu a.popupctrl {
	background-image:url(images/Seamus/misc/black_downward_arrow.png);
	background-position:right center;
	background-repeat:no-repeat;
	padding-right:15px;
	_padding-right:25px;
}

.popupmenu a.popupctrl.nogadget {
	padding-right:0;
	background-image:none;
}

.popupgroup .popupmenu a.popupctrl {
	font-size:11px;
	padding:2px 4px;
	border: 0;
	background-color:transparent;
	text-decoration:none;
	padding-right:15px;
	margin-left:5px;
}

.popupgroup .popupmenu:hover a.popupctrl {
	border:0;
	background-color:transparent;
}

/* see PopupMenu.set_control_style() */
.popupgroup .popupmenu {
	float:left;
}

.blockfoot .popupctrl {
	text-decoration:none;
	padding:2px 6px;
	padding-right:15px;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
	border-radius:0px;
}

.blockhead .popupctrl {
	color: #ffffff;
}

.blockhead .popupctrl:hover {
	color: #ffffff;
}

.popupbody {
	font:   normal 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	color: #ccc;
	padding:2px;
	background:#202020 none repeat-x  ;
	border: 1px solid #000000;
	position:absolute;
	z-index:1000;
	top:1.5em;
	left:0;
	display:none;
	min-width:200px;
}

.popupmenu:hover ul.popuphover {
	display:block;
}

.popupbody li {
	border-top:solid 1px #202020;
}

.popupbody > li:first-child {
	border-top:none;
}

.popupbody li a,
.popupbody li label {
	display:block;
	color: #ccc;
	background:#1a1a1a none   ;
	padding:6.235px 10px;
	text-decoration:none;
	text-align:left;
	white-space:nowrap;
}

.popupbody li > a:hover,
.popupbody li > label:hover {
	color:#ccc;
	background:#000 none   ;
}

.memberaction_body.popupbody li a:hover {
	color:#ccc;
	background-color:#000;
}

/* vbmenu_hilite and vbmenu_option are for the ajax popup menus (tags) */

.popupbody li.vbmenu_hilite a {
	color:#ccc;
	background:#000 none   ;
}

.popupbody li.vbmenu_option > a:hover {
	color:#ccc;
	background:#000 none   ;
}

.popupbody li.vbmenu_hilite, li.vbmenu_option {
	float: none;
	display:list-item;
	width: 100%;
}

.popupbody li input.searchbox {
	width:180px;
	padding:0px;
	font-size:13px;
	font-style:italic;
	color:#fff;
}

.popupbody li input.searchbox:focus {
	font-style:normal;
	color:#c0c0c0;
}

.popupbody li.formsubmit {
	text-align:right;
	padding:0px;
	background:#202020 none repeat-x  ;
}

.popupbody li.formsubmit .submitoptions {
	float:left;
	text-align:left;
}

.popupbody li.formsubmit .submitoptions label {
	display:block;
}

.popupbody li.formsubmit.jumptopage > label {
	display:inline;
	background:none;
}

.popupbody li.formsubmit input[type="submit"],
.popupbody li.formsubmit input[type="reset"],
.popupbody li.formsubmit input[type="button"] {
	font:12px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	padding:2px;
	padding-bottom:1px;
}

.popupbody li.formsubmit input[type="submit"]:hover,
.popupbody li.formsubmit input[type="reset"]:hover,
.popupbody li.formsubmit input[type="button"]:hover {
	color:#fff;
}

.blockhead .popupmenu,
.blocksubhead .popupmenu {
	display:block;
	float: right;
	clear: left;
	text-transform: none;
}

/* MEMBER ACTION DROP-DOWN */
.memberaction.popupmenu {
	position: relative;
	top: 0;
	display: inline-block;
}
.postdetails .memberaction.popupmenu {
	position: static; /* Opera 10.10 Fix */
}
.memberaction.popupmenu a.popupctrl {
	background: none;
	padding: 0;
}
.memberaction_body.popupbody {
	width: 280px;
	background: #1a1a1a;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	-moz-box-shadow: 0px 4px 7px #000;
	-webkit-box-shadow: 0px 4px 7px #000;
	box-shadow: 0px 4px 7px #000;
}
.memberaction_body.popupbody li {
	border: none;
	width: 140px;
}
.memberaction_body.popupbody li.left {
	float: left;
	clear: left;
}
.memberaction_body.popupbody li.right {
	float: right;
	clear: right;
}

.memberaction_body.popupbody li .siteicon_profile { 
	background:url(images/Seamus/site_icons/profile.png) left 2px no-repeat; 
}
.memberaction_body.popupbody li .siteicon_forum { 
	background:url(images/Seamus/site_icons/forum.png) left 2px no-repeat; 
}
.memberaction_body.popupbody li .siteicon_message { 
	background:url(images/Seamus/site_icons/message.png) left 2px no-repeat; 
}
.memberaction_body.popupbody li .siteicon_blog { 
	background:url(images/Seamus/site_icons/blog.png) left 2px no-repeat; 
}
.memberaction_body.popupbody li .siteicon_homepage { 
	background:url(images/Seamus/site_icons/homepage.png) left 2px no-repeat; 
}
.memberaction_body.popupbody li .siteicon_article { 
	background:url(images/Seamus/site_icons/article.png) left 2px no-repeat; 
}
.memberaction_body.popupbody li .siteicon_add { 
	background:url(images/Seamus/site_icons/add.png) left 2px no-repeat; 
}
.memberaction_body.popupbody li .siteicon_email { 
	background:url(images/Seamus/site_icons/email.png) left 2px no-repeat; 
}

.memberaction_body.popupbody li > a {
	padding: 4px;
	padding-left:20px;
}
.memberaction_body.popupbody hr {
	float: left;
	height: 96px;
	width: 0;
	display: inline;
}

.popupbody li.formsubmit .submitoptions label, 
.popupbody li.formsubmit .advancedsearchlink a {
	background:transparent;
	color: #ccc;
}

/*
Copyright (c) 2009, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.7.0
*/
html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,button,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var,optgroup{font-style:inherit;font-weight:inherit;}del,ins{text-decoration:none;}li{list-style:none;}caption,th{text-align: left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;}sup{vertical-align:baseline;}sub{vertical-align:baseline;}legend{color:#000;}input,button,textarea,select,optgroup,option{font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;}input,button,textarea,select{*font-size:100%;}body{font:13px/1.231 arial,helvetica,clean,sans-serif;*font-size:small;*font:x-small;}select,input,button,textarea,button{font:99% arial,helvetica,clean,sans-serif;}table{font-size:inherit;font:100%;}pre,code,kbd,samp,tt{font-family:monospace;*font-size:108%;line-height:100%;}


/* CSS Document */

/*THIS*/

html {
	background:#131313 none   ;
	
}

/* REVERSE SOME YUI RESET STUFF */
em {}
strong {}

/* BASIC PAGE ELEMENTS */

body {
	width:auto;
	min-width:650px;
	max-width:auto;
	margin: 0px auto 0px auto;
	font-size:13px;
	color:#c0c0c0;
	line-height:1.230;
}

a:active, a:focus {
	outline: 0;
}

body a {
	color:#fff;
	text-decoration:none;
}
body a:hover,
body a:hover .time,
body a:hover .shade,
body a:hover .understate {
	color:#fff;
	text-decoration:underline;
}

body a.understate,
body a .understate {
	color:inherit;
	text-decoration:none;
	*clear:expression(style.color = parentNode.currentStyle.color, style.clear = "none", 0);
}

.body_wrapper {
	padding: 10px 20px 10px 20px;
	background: transparent none   ;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}

input,
textarea,
button,
select {
	font-family:Tahoma, Calibri, Verdana, Geneva, sans-serif;
}

.button {
	padding: 2.5px 5px;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	border:1px solid #000000;
	color:#fff;
	background:#202020 url(images/Seamus/buttons/newbtn_middle.png) repeat-x top left;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
	border-radius:0px;
}

.button:hover {
	background: #000000 url(images/Seamus/buttons/newbtn_middle.png) repeat-x  ;
	color: #fff;
}
body,
legend {
	font-family:Tahoma, Calibri, Verdana, Geneva, sans-serif;
}

.shade {
	color:#fff;
}

.time {
	color:#c0c0c0;
}

.nocss_label {
	display:none;
}

.normal {
	font-size:13px;
	font-weight:normal;
}

/* BLOCK STUFF */

.block {
	clear:both;
}

.blockhead {
	font:  normal 12px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	color:#ffffff;
	background:#1a1a1a url(images/Seamus/gradients/back2.png) repeat-x top left;
	_background-image: none;
	padding:4px 10px 4px 10px;
	border:1px solid #000000;
	-moz-border-radius-topright: 5px;
	-moz-border-radius-topleft: 5px;
	-webkit-border-top-right-radius: 5px;
	-webkit-border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	border-top-left-radius: 5px;
}

.blockhead h2 {
	font-weight:bold;
}

.blockhead a { color:#ffffff; }
.blockhead a:hover { color:#ffffff; }

.blockhead img {
	margin-bottom: -4px;
}

.blocksubhead {
	font:  normal 12px ;
	color:#ccc;
	background:#131313 none repeat-x  ;
	padding:4px 10px 4px 10px;
	border-top:0px solid #000000;
}



.blocksubhead img {
	vertical-align:middle;
}

.blocksubhead a { color:#fff; text-decoration:none; }
.blocksubhead a:hover { color:#ccc; }

.blockhead_info, .blocksubhead_info {
	float:right;
	font-weight:normal;
}

/*.blockhead + */.blockbody { /* not sure why I had this .blockhead + .blockbody selector... need to look out for breakage */
	background:#1a1a1a none no-repeat  ;
	padding-left:0px;
	padding-right:0px;
}

.blockrow {
	background:#1a1a1a none   ;
	padding:5px 10px 5px 10px;
	border:  ;
	color:;
	font:    ;
}

.blockrow a { color:; }
.blockrow a:hover { color:; }

.blockfoot, .blocksubfoot {
	display:block;
	clear:both;
	background:#131313 none   ;
	padding:5px 0px 5px 0px;
	border:0  #000000;
	color:;
	font:    ;

}

.blockfoot a { color:; }
.blockfoot a:hover { color:; }

.blockfootpad {
	clear:both;
	padding:5px 0px 5px 0px;
}

.blocksubfoot {
	text-align:right;
}
/* END BLOCK STUFF */

/* WYSIWYG */
.wysiwyg_block {
	margin-bottom: 10px;
}

.wysiwyg_block .formcontrols .blockrow {
	border-top: 0;
}

/* CSS TABLE STUFF */
.table { display:table; table-layout:fixed; }
.thead { width:100%; padding:0; display: table-row; }
.tr    { display:table-row; }
.td    { display:table-cell; }

/* PAGINATION LINKS */

.pagination span {
	display: block;
	float: left;
	clear: right;
}

.pagination span a {
	font:  normal 13px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	border: 1px solid #000000;
	height: 15.99px;
	padding: 2px 4px;
	margin-left: 1px;
	background:#1a1a1a none   ;
	text-decoration:none;
	color: #c0c0c0;
}

.pagination span a:hover {
	border: 1px solid #202020;
}

.pagination span.prev_next a, .pagination span.first_last a {
	position: relative;
	top: -2px;
}

.pagination span.prev_next a img, .pagination span.first_last a img {
	position: relative;
	display: inline;
	top: 3px;
}
.pagination dt.label {
	display:none;
}

.pagination span.selected a {
	background: #202020 url(images/Seamus/buttons/newbtn_middle.png)   ;
	color: #ffffff;
	border: 1px solid #000000;
	height: 15.99px;
	font-weight:bold;
	padding: 2px 4px;
	margin-left: 1px;
}

.pagination .separator,
.pagination .elipsis {
	background: none;
	border: 0;
}

.pagination .separator:hover {
	border: 0;
}

.pagination li.jumptopage {
	text-align:center;
}


.pagination span a.popupctrl {
	height: 15.99px;
	background: #1a1a1a url(images/Seamus/misc/black_downward_arrow.png) no-repeat center left;
	padding-right: 4px;
	padding-left: 18px;
}

.pagination .popupmenu:hover a.popupctrl {
	border: 1px solid #202020;
	color: #c0c0c0;
}

/* TEXT CONTROLS */

.cke_skin_kama .cke_dialog_contents a.cke_dialog_ui_button_ok,
.cke_skin_kama .cke_dialog_contents a.cke_dialog_ui_button_cancel,
.textcontrols a,
a.textcontrol {
	position:relative;
	padding: 3px 5px;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	line-height: 1.230;
	text-decoration:none;
	border: 1px solid #000000;
	color: #fff;
	background:#202020 url(images/Seamus/buttons/newbtn_middle.png) repeat-x top left;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
	border-radius:0px;
}

.cke_skin_kama .cke_dialog_footer_buttons span.cke_dialog_ui_button {
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	color: #fff;
}

.textcontrols a img,
a.textcontrol img {
	position:absolute;
	bottom:2px;
	left:-2px;
}

.textcontrols a:hover img,
a:hover.textcontrol img {
	position: absolute;
	bottom:2px;
	left:-2px;
}

.textcontrols a:hover,
a:hover.textcontrol {
	background:#000000 url(images/Seamus/buttons/newbtn_middle.png) repeat-x  ;
	text-decoration:none;
	color: #fff;
}

.textcontrols a:hover,
a:hover.textcontrol {
	text-decoration:none;
}

.blockhead a.textcontrol {
	float:right;
	font:  bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	margin-top: -4.5px;
	text-transform: none;
}

.blockhead a.textcontrol:hover {
	color: #fff;
}

/* FORUMJUMP (navpopup) */

.navpopupmenu {
	text-align:right;
	float: right;
	display:block;
	padding: 0;
	padding-top: 3px;
	clear: left;
	margin-left: 10px;
	font-size: 12px;
	margin-top: 0;
}

* html .navpopupmenu.popupmenu.nohovermenu a.textcontrol, .navpopupmenu a.textcontrol, .navpopupmenu a.popupctrl, .navpopupmenu.popupmenu.nohovermenu a.textcontrol, .navpopupmenu.popupmenu.nohovermenu a.popupctrl {
	text-decoration:none;
	color: #fff;
	border: 1px solid #000000;
	background: #202020 url(images/Seamus/buttons/newbtn_middle.png) repeat-x top left;
	_background-image: none;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	padding: 3.3333333333333px 6.6666666666667px;
	-moz-border-radius: 0px;
	-webkit-border-radius: 0px;
	border-radius: 0px;
}

.navpopupmenu a.textcontrol:hover, .navpopupmenu a.popupctrl:hover, .navpopupmenu.popupmenu.nohovermenu a.textcontrol:hover, .navpopupmenu.popupmenu.nohovermenu a.popupctrl:hover {
        background: #000000 url(images/Seamus/buttons/newbtn_middle.png) repeat-x  ;
        color: #fff;
        _background-image: none;
}

.navpopupmenu .popupctrl .ctrlcontainer {
	background: transparent url(images/Seamus/misc/black_downward_arrow.png) no-repeat center left;
	padding-left: 15px;
	white-space:nowrap;
}

.navpopupbody {
	width:auto;
	max-height:350px;
	text-align:left;
	*overflow:auto;
	overflow-y:scroll;
	left:auto;
	right:0;
}

.navpopupbody li {
	overflow:hidden;
	min-width: 200px;
}

.navpopupbody li.optionlabel {
	text-align:center;
	font-weight:bold;
	color: #ccc;
}

/**
* Not pretty, but it works...
*/
.navpopupbody .d1  a, option.d1  { text-indent:20px; }
.navpopupbody .d2  a, option.d2  { text-indent:40px; }
.navpopupbody .d3  a, option.d3  { text-indent:60px; }
.navpopupbody .d4  a, option.d4  { text-indent:80px; }
.navpopupbody .d5  a, option.d5  { text-indent:100px; }
.navpopupbody .d6  a, option.d6  { text-indent:120px; }
.navpopupbody .d7  a, option.d7  { text-indent:140px; }
.navpopupbody .d8  a, option.d8  { text-indent:160px; }
.navpopupbody .d9  a, option.d9  { text-indent:180px; }
.navpopupbody .d10 a, option.d10 { text-indent:200px; }
.navpopupbody .d11 a, option.d11 { text-indent:220px; }
.navpopupbody .d12 a, option.d12 { text-indent:240px; }
.navpopupbody .d13 a, option.d13 { text-indent:260px; }
.navpopupbody .d14 a, option.d14 { text-indent:280px; }
.navpopupbody .d15 a, option.d15 { text-indent:300px; }
.navpopupbody .d16 a, option.d16 { text-indent:320px; }
.navpopupbody .d17 a, option.d17 { text-indent:340px; }
.navpopupbody .d18 a, option.d18 { text-indent:360px; }
.navpopupbody .d19 a, option.d19 { text-indent:380px; }
.navpopupbody .d20 a, option.d20 { text-indent:400px; }

/* LEFT / RIGHT DT+DD */

dl.stats.totals {
	float:right;
	padding:5px;
}

dl.stats dt {
	display:inline;
	color:#fff;
}
dl.stats dt:after {
	content:":";
}
dl.stats dd {
	display:inline;
}

/* BLOCK STATS */
dl.statsblock dt {
	display:block;
	float:left;
	clear:left;
	width:25%;
}

dl.statsblock dd {
	display:block;
	float:left;
	margin-left:10px;
}

/* LIGHT-TABS */

dl.tabslight {
	border-bottom:solid 1px #202020;
	padding-left:20px;
	margin-bottom:1em;
	height:26;
	margin-top:15px;
}

dl.tabslight dt {
	display:none;
}

dl.tabslight dd {
	float:left;
}

dl.tabslight dd a {
	font-size:11px;
	font-weight:bold;
	color:#c0c0c0;
	text-decoration:none;
	text-align:center;

	padding:0 10px;
	min-width:55px;
	height:25px;
	line-height:25px;
	display:block;

	border:1px solid #000000;
	background-color:#131313;

	margin-left:-1px;
	margin-bottom:-1px;

	-moz-border-radius-topleft:5px;
	-moz-border-radius-topright:11px;
	-webkit-border-top-left-radius:3px;
	-webkit-border-top-right-radius:11px;
	border-top-left-radius:3px;
	border-top-right-radius:11px;
}

html>/**/body dl.tabslight dd.selected a,
html>/**/body dl.tabslight dd.selected a:hover {
	position:relative;
	border-bottom: 1px solid transparent;
	background:#202020 none   ;
}
* dl.tabslight dd.selected a, * dl.tabslight dd.selected a:hover {
	border-bottom: 1px solid transparent;
	background:#202020 none   ;
}

dl.tabslight dd a:hover {
	color:#fff;
	background:#202020 none   ;
}

/* COLUMN SORT LINKS */

.columnsort a,
.columnsort span {
	display:block;
	text-decoration:none;
	white-space:nowrap;
	text-align: left;
}

.columnsort a:hover {
	background-color:#000;
	text-decoration:none;
	color:inherit;
}

tr.columnsort th {
	white-space:nowrap;
}

/* MISC */

div.collapse {
	position:relative;
}

a.collapse {
	float:right;
	right:10px;
	top:20px;
	position:absolute;
}

.blockhead a.collapse {
	top: 10px;
}

#forumrules {
	margin-bottom: 10px;
	border-bottom: 1px solid #000;
	border-left: 1px solid #000;
	border-right: 1px solid #000;
	border-top: 1px solid #1a1a1a;
	background: #1a1a1a url(images/Seamus/gradients/grey-up.png) repeat-x  ;
}

#forumrules ul.youcandoblock {
	float:left;
	width:55%;
	overflow:hidden;
	margin: 0 10px 10px 0;
}

#forumrules ul.bbcodeblock {
	float:right;
	width:42%;
	text-align:right;
	overflow:hidden;
}

#forumrules .rules_link {
	margin-top: 10px;
	width: 42%;
	padding-left: 55%;
}

.errorblock ul.blockrow.error > li {
	border-bottom:solid 1px #000000;
	padding-bottom:10px;
	margin-bottom:10px;
}

.errorblock ul.blockrow.error li:last-child {
	border-bottom:none;
	padding-bottom:0;
	margin-bottom:0;
}

blockquote.preview {
	font:   13px Tahoma,Calibri,Verdana,Geneva,sans-serif;
}

blockquote.preview ul, blockquote.preview ol, blockquote.preview dl {
	margin:0 40px;
}

blockquote.preview.forumcontent {
	font:   13px Verdana,Arial,Tahoma,Calibri,Geneva,sans-serif;
}

blockquote.preview .bbcode_container div.bbcode_code,
blockquote.preview .bbcode_container pre.bbcode_code {
	margin:0;
	padding:6px;
	border:1px inset;
	text-align:left;
	overflow:auto;
	direction:ltr;
	background:#202020 none   ;
	font-size:12px;
}

blockquote.preview .bbcode_container code.bbcode_code {
	margin:0;
	text-align:left;
	direction:ltr;
	font-size:12px;
}

blockquote.preview .bbcode_container code.bbcode_code code {
	white-space:nowrap;
}

blockquote.preview fieldset.postattachlist {
	background:#1a1a1a none   ;
	border-top:solid 1px #000000;
	padding-bottom:1em;
}

blockquote.preview .bbcode_container div.bbcode_quote {
	margin:0 10px;
	margin-bottom: 10px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	background: #202020 none   ;
	border-radius: 5px;
	border: 1px solid #000;
	font: italic  normal 13px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	position: relative;
	top: 0;
}


blockquote.preview .bbcode_container .bbcode_quote_container {
	background: transparent url(images/Seamus/misc/quote-left.png) no-repeat  left;
	display:block;
	width: 9px;
	height: 13px;
	position: absolute;
	top: 5;
	left: -9px;
}

blockquote.preview .bbcode_quote div.quote_container {
	border-top: 1px solid #1a1a1a;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	padding: 5px 10px 5px 10px;
}

.attachments {
	border: 1px solid #000000;
	background: #202020 none   ;
	margin: 20px 30px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	padding: 5px 10px 5px 10px;
	font-size: 12px;
}

.attachments fieldset {
	margin: 5px 0;
}

.attachments img.inlineimg {
	position: relative;
	top: 2px;
}


blockquote.preview .signature {
	margin-top:1.5em;
	border-top:1px solid #000;
	padding-top:0.5em;
}

.commalist li {
	display:inline-block;
}

.standard_error {
	max-width:600px;
	margin:0 auto;
	padding:4em 0 6em;
}

.hidden {
	display: none !important;
}

/* Auto-clearing of floats */
.floatcontainer:after,
.formcontrols .blockrow:after,
dl.stats:after {
	content:".";
	display:block;
	height:0;
	clear:both;
	visibility:hidden;
}
.floatcontainer,
.formcontrols .blockrow,
dl.stats {
	display:inline-block;
	font-weight:normal;
}
/* IE-Mac hide \*/
* html .floatcontainer,
.formcontrols .blockrow,
dl.stats {
	height:1%;
}
.floatcontainer,
.formcontrols .blockrow,
dl.stats {
	display:block;
}
.floatcontainer.hidden {
	display:none;
}
/* End IE-Mac hide */


/* INLINEMOD */

#inlinemod_formctrls {
	float:right;
}

#inlinemod_formctrls .popupctrl {
	top: -5px;
	position: inherit;
	text-decoration:none;
	background: #202020 url(images/Seamus/buttons/newbtn_middle.png) repeat-x top left;
	padding-right: 0;
	color: #fff;
	border: 1px solid #000000;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	float: left;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
	border-radius:0px;
}

#inlinemod_formctrls a.popupctrl:hover {
	background: #000000 url(images/Seamus/buttons/newbtn_middle.png) repeat-x  ;
	color: #fff;
}

#inlinemod_formctrls a.popupctrl span.ctrlcontainer {
	display:inline-block;
	background: transparent url(images/Seamus/misc/black_downward_arrow.png) no-repeat center left;
	padding-top: 3.3333333333333px;
	padding-right: 5px;
	padding-bottom: 3.3333333333333px;
	padding-left: 15px;
	font-size: 11px;
	float: left;
}

#inlinemod_formctrls .popupbody {
	left:auto;
	right:0px;
}


/* FORUM DISABLED */
div.forum_disabled {
	text-align:center;
	color:red;
	background-color:white;
	padding:10px;
	font-size:20px;
}

/**
* UN-RESET
*
* These definitions are designed to undo the effects of YUI Reset, but only when contained within a *.reset element.
* Code is based on YUI Base
*/

/*
Copyright (c) 2009, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.7.0
*/
/**
 * YUI Base
 * @module base
 * @namespace yui-
 * @requires reset, fonts
*/

.restore body {
	/* For breathing room between content and viewport. */
	margin:10px;
}

.restore h1 {
	/* 18px via YUI Fonts CSS foundation. */
	font-size: 138.5%;
}

.restore h2 {
	/* 16px via YUI Fonts CSS foundation. */
	font-size: 123.1%;
}

.restore h3 {
	/* 14px via YUI Fonts CSS foundation. */
	font-size: 108%;
}

.restore h1,
.restore h2,
.restore h3 {
	/* Top & bottom margin based on font size. */
	margin: 1em 0;
}

.restore h1,
.restore h2,
.restore h3,
.restore h4,
.restore h5,
.restore h6,
.restore strong,
.restore dt {
	/* Bringing boldness back to headers and the strong element. */
	font-weight: bold;
}
.restore optgroup {
	font-weight:normal;
}

.restore abbr,
.restore acronym {
	/* Indicating to users that more info is available. */
	border-bottom: 1px dotted #000;
	cursor: help;
}

.restore em {
	/* Bringing italics back to the em element. */
	font-style: italic;
}

.restore del {
	/* Striking deleted phrases. */
	text-decoration: line-through;
}

.restore blockquote,
.restore ul,
.restore ol,
.restore dl {
	/* Giving blockquotes and lists room to breath. */
	margin: 1em;
}

.restore ol,
.restore ul,
.restore dl {
	/* Bringing lists on to the page with breathing room. */
	margin-left: 2em;
}

.restore ol > li,
.restore ol.decimal > li {
	list-style:decimal outside;
}

.restore ol.upper-roman > li {
	list-style:upper-roman outside;
}

.restore ol.lower-roman > li {
	list-style:lower-roman outside;
}

.restore ol.upper-alpha > li {
	list-style:upper-alpha outside;
}

.restore ol.lower-alpha > li {
	list-style:lower-alpha outside;
}

.restore ul > li {
	/* Giving UL's LIs generated disc markers. */
	list-style: disc outside;
}

.restore dl dd {
	/* Giving UL's LIs generated numbers. */
	margin-left: 1em;
}

.restore th,
.restore td {
	/* Borders and padding to make the table readable. */
	border: 1px solid #000000;
	padding: 0.5em;
}

.restore th {
	/* Distinguishing table headers from data cells. */
	font-weight: bold;
	text-align: center;
}

.restore caption {
	/* Coordinated margin to match cell's padding. */
	margin-bottom: .5em;
	/* Centered so it doesn't blend in to other content. */
	text-align: center;
}

.restore sup {
	/* to preserve line-height and selector appearance */
	vertical-align: super;
}

.restore sub {
	/* to preserve line-height and selector appearance */
	vertical-align: sub;
}

.restore p,
.restore fieldset,
.restore table,
.restore pre {
	/* So things don't run into each other. */
	margin-bottom: 1em;
}
/* Opera requires 1px of passing to render with contemporary native chrome */
.restore button,
.restore input[type="checkbox"],
.restore input[type="radio"],
.restore input[type="reset"],
.restore input[type="submit"] {
	padding:1px;
}

.restore li > p {
	margin-bottom: 0em;
}

.unread {
	font-weight:bold;
}

/* Cloud tags */
li.tag {
	display:inline;
	margin-right:5px;
}

li.tag label.mine {
	font-weight:bold;
}

li.tag a {
	text-decoration:none;
}

li.taglevel1 {
	font-size:9px;
}

li.taglevel2 {
	font-size:12px;
}

li.taglevel3 {
	font-size:15px;
}

li.taglevel4 {
	font-size:18px;
}

li.taglevel5 {
	font-size: 21px;
}

li.tag.option {
	padding:10px;
}

/* Tag Controls */
/* Tagging Controls */

#thread_tags_list input#tag_add_input {
	display:block;
	width:90%;
	margin-top:2px;
	margin-bottom:0.5em;
}

#thread_tags_list  .description {
	color:#fff;
}

#thread_tags_list  .actionbuttons {
	text-align:right;
	margin-bottom:1em;
}

#tag_edit_list {
	list-style:none;
	margin:0;
	padding:0;
}

#tag_edit_list li {
	float:left;
	display:block;
	width:100px;
}

#tag_edit_list li.mine {
	font-weight:bold;
}

/* We don't use class="inlineimg" in vB4
img.inlineimg {
	padding:0 10px;
}
*/


/* Social Bookmarks */

#social_bookmarks_list li {
	display:block;
	float:left;
	padding-left:10px;
}

/* Imagereg */
#imagereg {
	vertical-align:middle;
	margin-bottom:5px;
}


#wol_navpopup.navpopupmenu {
	margin-bottom:6px;
}
.navlinks {
	background: #1a1a1a none   ;
	border-top: 1px solid #000000;
	padding: 10px 0;
	text-align: center;
	color: #5d5d5d;
	font-size: 13px;
        margin-top: 20px;
        margin-bottom: 20px;
width:100%;
clear:both;
}

.clear, .cleardiv {
	clear: both;
}

#ajax_post_errors {
	position:absolute;
	width:420px;
	z-index:500;
	padding:2px;
	background-color:#FFFFFF;
	-moz-border-radius-topright:5px;
	-moz-border-radius-topleft:5px;
	-webkit-border-top-right-radius:5px;
	-webkit-border-top-left-radius:5px;
	border-top-right-radius:5px;
	border-top-left-radius:5px;
}

#ajax_post_errors .blockrow {
	border-bottom:1px solid #000000;
	border-left:1px solid #000000;
	border-right:1px solid #000000;
}
#ajax_post_errors .blockfoot {
	text-align:center;
}

#ajax_post_errors_message ol {
	margin:1em;
	margin-left:2em;
}

#ajax_post_errors_message ol.numeric li,
#ajax_post_errors_message ol li {
	list-style-image:none;
	list-style-position:outside;
	list-style-type:decimal;
}

.highlight {
	color: #fff;
	background: #202020 none   ;
}

/* Facebook Section */
label#fb_pulishlabel {
	font-size:12px;
	font-weight: normal;
	margin-right: 10px;
	vertical-align: middle;
}

#fb_likeframe {
	border: none;
	overflow: hidden;
	height: 27px;
	width: 260px;
	vertical-align: text-bottom;
}
#pagetitle #fb_likeframe {
	float: right;
}
.blogbit #fb_likeframe {
	margin-top: 7px;
}

/* Fix for Facebook Connect rtl scrollbar */


#recaptcha_area {
	direction:ltr;
	display:inline;
}

#recaptcha_widget_div {
	float:left;
}

.member_blockrow .error 
{ 
        padding:4px 10px 4px 10px; 
}  

div.cms_table {
	overflow:auto;
	overflow-y:hidden;
	padding:1px;
}

table.cms_table_grid,
table.wysiwyg_cms_table_grid {
	border-collapse: collapse;
	margin-bottom:0;
}

td.cms_table_grid_td,
td.wysiwyg_cms_table_grid_td {
	border: 3px solid #000000;
}

table.cms_table_outer_border,
table.wysiwyg_cms_table_outer_border {
	border-collapse: collapse;
	border: 3px solid #000000;
}

td.cms_table_td,
td.cms_table_outer_border_td {
	border:none;
}

.content img {
	max-width: 100%;
}

#uploadprogress_container li { 
color: #fff !important;
border-bottom: 1px solid #000 !important;
background-color: #484747 !important;
}

.cke_panel_listItem a:hover,
.cke_panel_listItem a:focus,
.cke_panel_listItem a:active {
background-color: #1a1a1a !important;
border-color: #000 !important;
}

.activitystream  .blockbody {
margin-top: -9px;
}

.newactivity a, .newactivity > span, .moreactivity a, .moreactivity span {
color: #eee !important;
}


/* CSS Document */

/**
* CHROME: HEADER, NAVBAR, BREADCRUMB, FOOTER
*/

/*************************************************/
/* HEADER */

.above_body {
	background:#010101 url(images/Seamus/misc/gaming-banner12.jpg) no-repeat top center;
	margin: 0px 0px 10px 0px;
	padding: 0px 0px 0px 0px;
	-moz-border-radius-bottomleft:5px;
	-moz-border-radius-bottomright:5px;
	-webkit-border-bottom-left-radius:5px;
	-webkit-border-bottom-right-radius:5px;
	border-bottom-left-radius:5px;
	border-bottom-right-radius:5px;
}

.doc_header {
	border:  ;
	color:#fff;
	font:normal normal normal 11px Arial, Tahoma, Calibri, Verdana, Geneva, sans-serif;
	position:relative;
	min-height:35px;
}
.doc_header a { color:; }
.doc_header a:hover { color:; }
.doc_header hr { display: none; }
.logo-image {
        float: left;
        clear: right;
        min-height: 2em;
        height: auto !important;
        padding: 0 0 0 0;
}

.toplinks {
	position:absolute;
	right:20px;
	top:0;
	color:#ffffff;
	font: normal normal normal 11px Arial, Tahoma, Calibri, Verdana, Geneva, sans-serif;
	text-align:right;
	background: none   ;
}

.toplinks ul.isuser li#fb_headerbox.hidden,
.toplinks ul.nouser li#fb_headerbox.hidden {
	display: none;
}
.toplinks ul.isuser li#fb_headerbox a,
.toplinks ul.nouser li#fb_headerbox a {
	padding-top: 0;
	background: none;
	cursor: pointer;
}
	li#fb_headerbox a#fb_link {
		position: relative;
	}
	li#fb_headerbox a#fb_link #fb_squarepic{
		position:absolute;
		right:-6px;
		top:5px;
		z-index:1;
		border:1px solid #B3CCE7;
		padding:1px;
	}
	li#fb_headerbox a#fb_link #fb_icon{
		position:absolute;
		right:10px;
		top:1px;
		z-index:2;
	}

.toplinks ul.isuser, .toplinks ul.nouser {
	display:block;
	float: right;
	clear: left;
	list-style: none;
}

.toplinks ul.isuser li {
	display:inline;
	position: relative; 
	color: #fff;
	float: right;
	clear: left;
	padding-right: 10px;
        background:;
}

.toplinks ul.isuser .popupbody li {
	display:block;
	float: none;
	clear: none;
	padding:0;
	margin:0;
}

.toplinks ul.isuser li.welcomelink {
	display: block;
	float: right;
	clear: left;
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 4px;
	color: #FFFFFF;
}

.toplinks ul.isuser li.logoutlink {
	top: 0;
}

.toplinks ul.isuser li a {
	display: block;
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 4px;
	font-weight:bold;
	color:#ffffff;
}

.toplinks ul.isuser li li a {
	float: none;
	margin-left: 0;
}

.toplinks ul.isuser li.welcomelink a {
	display:inline;
	float: none;
	clear: none;
	margin-left: 0;
}

.toplinks ul.isuser li a:hover {
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 4px;
	background: rgb(102, 102, 102);
	color:rgb(255, 255, 255);
}

.toplinks ul.nouser li {
	display:inline;
}

.toplinks ul.nouser li a {
	display: block;
	float: right;
	clear: left;
	color:#ffffff;
	position: relative;
	padding: 6px 10px 0 10px;
	background: rgb(102, 102, 102);
	-moz-border-radius-bottomleft: 5px;
	-webkit-border-bottom-left-radius: 5px;
	border-bottom-left-radius: 5px;
	-moz-border-radius-bottomright:5px;
	-webkit-border-bottom-right-radius:5px;
	border-bottom-right-radius:5px;
	height:20px;
	font-weight:bold;
	font-size:12px;
	margin-right: 10px;
}

.toplinks ul.nouser li a:hover {
	background: rgb(102, 102, 102);
	color:rgb(255, 255, 255);
}

.toplinks ul.isuser li.popupmenu, .toplinks ul.isuser .notifications, .toplinks ul.isuser .nonotifications  {
	color: #FFF;
	position: relative;
}

.toplinks ul.isuser li.popupmenu ul li {
	position: relative;
	top: 0;
	margin: 0;
	text-align: left;
}

.toplinks ul.isuser .notifications .popupbody {
	background: #282727;
	border: 1px solid #282727; /* makes it look consistent with the popup background */
}

.toplinks ul.isuser .notifications .popupbody li a{
	color: #FFF;
	background:#1a1a1a none   ;
	padding: 0 5px;
	font-weight: normal;
	border-top:1px solid #282727; /* makes it look consistent with the popup background */
	text-align: left;
	padding-left: 30px;
	line-height: 26px;
}

.toplinks ul.isuser .notifications .popupbody li a span {
	position: absolute;
	line-height: 26px;
	left: 5px;
}

.toplinks ul.isuser .notifications .popupbody li a:hover {
	color: #FFF;
	background:#000 none   ;
	text-decoration: underline;
}

.toplinks form {
	min-width: 220px;
	display:block;
	margin-right: 10px;
	text-align: left;
	float: right;
	clear: left;
}

.toplinks .logindetails {
	padding: 0 10px;
	text-align: center;
	background: rgb(102, 102, 102);
	-moz-border-radius-bottomleft: 5px;
	-webkit-border-bottom-left-radius: 5px;
	border-bottom-left-radius: 5px;
	-moz-border-radius-bottomright:5px;
	-webkit-border-bottom-right-radius:5px;
	border-bottom-right-radius:5px;
	height:26px;
}

.toplinks form input {
	margin: 3px 0 0;
	vertical-align: baseline;
	font-size: 11px;
	padding: 1px;
	border: 0;
}

.toplinks form input.textbox {
	color: #fff;
}

.toplinks form input.default-value {
	color: #fff;
}

.toplinks .remember {
	margin: -3.3333333333333px 0 0 20px;
	font-size: 10px;
	color: #FFFFFF;
}

.toplinks .remember input {
	vertical-align: baseline;
}

.toplinks ul.isuser .notifications .popupbody li{
	border-top:1px solid #282727;
}

.cb_cookieuser_navbar{
	position: relative;
	top: 2px;
}

.notifications a.popupctrl:link, .notifications a.popupctrl:visited,
.toplinks a:link, .toplinks a:visited {
	color: #ffffff;
	text-decoration:none;
}

.notifications {
	font-size:11px;
	color: #ffffff;
	-moz-border-radius-bottomleft: 5px;
	-webkit-border-bottom-left-radius: 5px;
	border-bottom-left-radius: 5px;
	-moz-border-radius-bottomright: 5px;
	-webkit-border-bottom-right-radius: 5px;
	border-bottom-right-radius: 5px;

}

.notifications a {
	text-decoration:none;
}

.notifications .popupbody {
	color:#FFF;
	background: #1a1a1a none   ;
}

.header hr,
.header h2 {
	display:none;
}

/*************************************************/
/* NAVBAR */

.navbar {
	position:relative;
	height: 68px;
	background:#131313 url(images/Seamus/gradients/navback.png) repeat-x bottom left;
	margin:0px 0px 0px 0px;
	color:rgb(255, 255, 255);
	font:   11px Arial, Calibri, Verdana, Geneva, sans-serif;
	border:0px solid #000000;
	-moz-border-radius-bottomleft:5px;
	-moz-border-radius-bottomright:5px;
	-webkit-border-bottom-left-radius:5px;
	-webkit-border-bottom-right-radius:5px;
	border-bottom-left-radius:5px;
	border-bottom-right-radius:5px;
}
.navbar a { color:rgb(255, 255, 255); }
.navbar a:hover { color:rgb(255, 255, 255); }

.navtabs {
	background:#282727 url(images/Seamus/gradients/back4.png) repeat-x top left;
	padding: 0px 0px 0px 20px;
	height: 34px;
}

.navtabs li:first-child {
	border-left: 0  transparent;
}

.navtabs ul {
/*	height: 26px; */
	position:absolute;
	top:34px;
	left:0px;
	width:100%;
	border-top:0  transparent;
	-moz-border-radius-bottomleft:5px;
	-moz-border-radius-bottomright:5px;
	-webkit-border-bottom-left-radius:5px;
	-webkit-border-bottom-right-radius:5px;
	border-bottom-left-radius:5px;
	border-bottom-right-radius:5px;
	margin-right:-80px;
/* This is to fix RTL menu issue under Opera */
	direction:ltr;
}

.navtabs li {
	float:left;
	border-right: 0  transparent;
}

.navtabs ul li:first-child {
	margin-left: 20px;
	border-left: 0;
}

#navtabs .popupmenu ul li:first-child {
	margin-left: 0px;
}

.navtabs ul li {
	border-right: 0;
	position: relative;
}

.navtabs li a {
	height:34px;
	line-height:34px;
	padding:0 10px;
}

.navtabs li a.navtab {
	border-top: 0  transparent;
	border-left: 0  transparent;
	display:block;
	background:#282727 url(images/Seamus/gradients/back4.png) repeat-x top left;
	min-width:60px;
	width:auto !important;
	width:60px;
	text-align:center;
	color: #ffffff;
	font:  bold 12px Arial, Calibri, Verdana, Geneva, sans-serif;
	text-decoration:none;
	line-height:34px;
}

.navtabs li a.navtab:hover {
	background: url(images/Seamus/gradients/navselect.png) no-repeat center top 0 -0;
	color:#1a1a1a;
}

.navtabs li.selected {
	height:34px;
	color:#1a1a1a;
}

.navtabs li.selected a.navtab {
	color:#1a1a1a;
	background: url(images/Seamus/gradients/navselect.png) no-repeat center top;
	position:relative;
	top:-0;
	padding-top:0;
	z-index:10;
}

.navtabs li.selected li a,
.navbar_advanced_search li a {
	text-decoration:none;
	font:   11px Arial, Calibri, Verdana, Geneva, sans-serif;
	line-height: 34px;
}

.navtabs li.selected li a {
	color:rgb(255, 255, 255);
	padding:2px 5px;
}

.navtabs li.selected ul.popupbody a {
    line-height: 26px;
}

.navbar_advanced_search li {
	height: 34px;
	display:block;
	clear:both;
}

.navbar_advanced_search li a {
	color:rgb(255, 255, 255);
}

.navbar_advanced_search li a:hover {
	color:rgb(255, 255, 255);
	text-decoration:underline;
}

.navtabs li.selected li a:hover {
	color:rgb(255, 255, 255);
	text-decoration:underline;
}

.navtabs li.selected .popupbody li a {
	text-indent: 0;
	color: #FFF;
	background: #1a1a1a none   ;
	padding:0px 10px;
}

.navtabs li.selected .popupbody li a:hover {
	color: #FFF;
	background: #000 none   ;
}

.navtabs li.selected li a.popupctrl {
	-moz-border-radius:3px;
	-webkit-border-radius:3px;	
	border-radius:3px;
	border:solid 0 transparent;
	background:transparent url(images/Seamus/misc/arrow.png) no-repeat right center;
	padding-right:15px;
	color: rgb(255, 255, 255);
}

.toplinks .notifications a.popupctrl {	
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 15px;
	background: rgb(102, 102, 102) url(images/Seamus/misc/arrow.png) right center no-repeat ;
	-moz-border-radius-bottomleft: 5px;
	-moz-border-radius-bottomright: 5px;
	-webkit-border-bottom-right-radius:5px;
	-webkit-border-bottom-left-radius: 5px;
	border-bottom-right-radius:5px;
	border-bottom-left-radius: 5px;
}

.toplinks .nonotifications a.popupctrl {
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 15px;
	background: transparent url(images/Seamus/misc/arrow.png) no-repeat right center;
}

.toplinks .notifications a.popupctrl:hover, .toplinks .nonotifications a.popupctrl:hover, .toplinks .nonotifications a.popupctrl.active , .toplinks .notifications a.popupctrl.active{
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 15px;
	background: rgb(102, 102, 102) url(images/Seamus/misc/arrow.png) no-repeat right center;
}

.toplinks .notifications a.popupctrl:hover {
	padding-top: 3px;
}

.navtabs li.selected li:hover a.popupctrl {
	border-color:#131313;
	background-color:#282727;
	text-decoration:none;
}

.navtabs li.selected li:hover a.popupctrl.active,
.navtabs li.selected li a.popupctrl.active {
	border-color:#282727;
	background-color:#282727;
	color:rgb(255, 255, 255);
	border-radius: 3px 3px 0px 0px;
	text-decoration:none;
}

.navtabs .popupbody {
	border: 1px solid #282727;
	background: #282727;
	width: auto;
}

.navtabs .popupbody li {
	float:none;
	border-top: 1px solid #282727;
}

#navtabs .popupmenu ul, #navtabs .popupmenu ul li a {
	height: auto;
}

.nonotifications div.popupbody {
	min-width: 170px;
	width: auto !important;
	width: 170px;
	background: #282727;
	border: 1px solid #282727;
}

.nonotifications .popupbody p {
	color: #FFF;
	background: #1a1a1a none   ;
	text-align: left;
	border-top: 1px solid #282727;
	padding: 0;
	text-indent: 5px;
	line-height: 34px;
	display:block;
}

.toplinks .nonotifications .popupbody a {
	color: #FFF;
	background: #1a1a1a none   ;
	float: none;
	clear: none;
	padding: 0 5px;
	margin-left: 0;
	text-align: left;
	line-height: 26px;
}

.toplinks .nonotifications .popupbody a:hover {
	color: #FFF;
	background:#000 none   ;
	text-decoration: underline;
	padding: 0 5px;
}

.globalsearch {
	position:absolute;
	width:180px;
	right: 20px;
	top: 0px;
	float: right;
	clear: left;
	text-align:right;
	line-height: 1.0em;
	display:block;
}

.navbar_search {
	position:relative;
	width: 179;
	right: -21px;
	display:block;
}

.navbar_search input {
	font-size: 11px;
	vertical-align:middle;
	padding: 1px;
	border:1px solid #202020;
}

.globalsearch .textboxcontainer {
	height: 34px;
	border-left:0  transparent;
	display:inline-block;
	float: left;
	text-align:center;
}

.globalsearch .textboxcontainer span {
	border-top: 0  transparent;
	border-left: 0  transparent;
	display: inline-block;
	height: 30px;
	padding-left: 2px;
	padding-right: 2px;
	padding-top: 3px;
	margin-bottom: 1px;
	width: 147px;
}

.globalsearch input.textbox {
	width: 120px;
}

.toplinks form input.loginbutton {
	font-size: 11px;
	padding: 0 5px;
	border:solid 1px #000000;
}

.globalsearch .buttoncontainer {
	height: 34px;
	border-left:0  transparent;
	display:inline-block;
	border-right:0  transparent;
	width: 25px;
	overflow: hidden;
	float: right;
}

.globalsearch .buttoncontainer span{
	border-top: 0  transparent;
	border-left: 0  transparent;
	height: 31px;
	padding-left: 4px;
	padding-top: 6.5px;
	display:inline-block;
}

.globalsearch .searchbutton {
	border: 0;
	padding: 0;
	width: 22px;
	margin-top: -2px;
	margin-left: -2px;
}

/*************************************************/
/* BREADCRUMB */

.breadcrumb .navbit {
	float:left;
	background-image:url(images/Seamus/misc/navbit-arrow-right.png);
	background-position:right center;
	background-repeat:no-repeat;
	padding-right:10px;
	padding-left:3px;
}

.breadcrumb .navbit:first-child {
	padding-left:0;
}

.breadcrumb .navbit.lastnavbit {
	background: transparent;
}

.breadcrumb .navbit.lastnavbit span {
	float:left;
	background: transparent;
	padding-right:10px;
	padding-left:3px;
}

.breadcrumb .navbit > a, .breadcrumb .lastnavbit > span {
	display:block;
	padding:2px 4px;
	float:left;
	background-color:transparent;
	border:1px solid transparent;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;	
	border-radius:5px;	
}

.breadcrumb .navbit a {
	text-decoration:none;
}

.breadcrumb hr {
	display:none;
}

/*************************************************/
/* PAGE TITLE */
	
#pagetitle {
	padding:0px 0px 0px 0px;
	clear:both;
	padding-top: 5px;
	background: none   ;
	border:  ;
}
#pagetitle a { color:; }
#pagetitle a:hover { color:; }

#pagetitle h1 {
	color: #fff;
	font:normal normal bold 14px Tahoma, Calibri, Verdana, Geneva, sans-serif;
}

#pagetitle .description {
	color: inherit;
	font-size: 11.05px;
}

/*************************************************/
/* NEW CONTENT LINK */
.newcontent_textcontrol {
	background: rgb(51, 51, 51) url(images/buttons/newbtn_middle.png) repeat-x left top;
	_background-image: none;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border-radius: 10px;
	-moz-box-shadow: 0 3px 8px #000;
	-webkit-box-shadow: 0 3px 8px #000;
	box-shadow: 0 3px 8px #000;
	font:   normal 14px Arial, sans-serif;
	color: rgb(255, 255, 255);
	padding: 4px 15px 4px 15px;
	border: 0  ;
	display:block;
	float: left;
	clear: right;
}

.newcontent_textcontrol span {
	font:  normal 14px Arial, sans-serif;
	font-size:15px;
	font-weight:bold;
	display:inline;
}

.newcontent_textcontrol:hover {
	background: #202020 url(images/Seamus/buttons/newbtn_middle.png) repeat-x left top;
	color: #fff;
	text-decoration: none;
}


/*************************************************/
/* FOOTER */

.footer {
	clear:both;
	margin-top:15px;
	text-align:right;
	display:block;
	/*width: 100%; VBIV-10173*/

	-moz-box-shadow: -2px 2px 2px #000;
	-webkit-box-shadow: -2px 2px 2px #000;
	box-shadow: -2px 2px 2px #000;

	background: url(images/Seamus/gradients/back3.png) repeat-x top left;
	padding:5px 0px 5px 0px;
	border:1px solid #000;
	color:;
	font:  normal 13px Tahoma, Calibri, Verdana, Geneva, sans-serif;
}
.footer a { color:rgb(255, 255, 255); }
.footer a:hover { color:rgb(255, 255, 255); }


.footer_copyright,
.footer_morecopyright {
	padding-bottom:5px;
	color:#ccc;
	font:  normal 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	margin-top: 10px;
	text-align:center;
	display:block;
}

.footer_time {
	color:#ccc;
	font:  normal 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	padding-top:10px;
	text-align:center;
}

.footer_select {
	float:left;
	text-align:left;
	margin-left: 10px;
	margin-top: 0;
}

.footer_links {
	margin-right: 10px;
	margin-top: 2px;
}

.footer_links li {
	display:inline;
	margin-left:5px;
}

.below_body .time {
	color: #fff;
}

.notices {
	background: transparent;
	margin: 5px 0;
}

.notices li {
	background: #434343 none   ;
	font-size: 12px;
	color: #c0c0c0;
	padding:5px 10px;
	margin-bottom:5px;

	-moz-box-shadow: -2px 2px 2px ;
	-webkit-box-shadow: -2px 2px 2px ;
	box-shadow: -2px 2px 2px ;

	text-align: left;
	clear:both;
}

.breadcrumb .navbithome {
	float: left;
	padding: 3.5px 0;
}
/* end styles for template: navbar */

/*************************************************/
/* ADS GLOBAL */
.ad_global_header {
}
#ad_global_header1 {
	float:left;
	clear:right;
	padding:0 0 0 0;
	margin:0 0 0 0;
}
#ad_global_header2 {
	float:left;
	padding:0 0 0 0;
	margin:0 0 0 0;
}
#ad_global_below_navbar {
	width:100%;
	padding:0 0 0 0;
	margin:0 0 0 0;
}
#ad_global_above_footer {
	width:100%;
	padding:0 0 0 0;
	margin:0 0 0 0;
	text-align:left;
	clear:both;
}
#ad_board_below_whats_going_on {
	width:100%;
	padding:0 0 0 0;
	margin:0 0 0 0;
	text-align:left;
}
#ad_thread_first_post_content {
	float:right;
	margin:0 0 0 0;
}
#ad_thread_last_post_content {
	float:right;
	margin:0 0 0 0;
	z-index: 1000;
}
.google_adsense_footer {
	clear:both;
}


/* CSS Document */

/* Use border box for form elements */
.formcontrols input,select,textarea {
	box-sizing:border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing:border-box;
}
.formcontrols input.textbox {
	height:25px;
	*height:12px;
}
.formcontrols .blocksubhead {
	font-weight:bold;
}

.vbform .blockhead {
	margin-top:2em;
}

.vbform .blockhead:first-child {
	margin-top:0;
}
.settings_form_top_border {
	border-top: 1px solid #000000;
}
.blockbody.settings_form_border {
	border-right: 1px solid #000000;
	border-left: 1px solid #000000;
	border-bottom: 1px solid #000000;
}
.vbform {
	clear:both;
	width:auto;
	max-width:100%;
	_width:100%;
	margin:0 auto 2em;
}

.formcontrols {
	border-right: 1px solid #000000;
	border-left: 1px solid #000000;
	border-bottom: 1px solid #000000;
}

.formcontrols .blockrow {
	background:#1a1a1a none   ;
	border-top:solid 1px #000000;
	padding:10px 5px;
}

/* div.section is needed to resolve IE7 percentage width bug */
.formcontrols .section {
	padding:0 15px;
}

.formcontrols > *:first-child,
.formcontrols .blocksubhead + .blockrow,
.formcontrols .section .blockrow:first-child {
	border-top:none;
}

/* BASIC CONTROL STYLING */

.button {
	padding:2px 2px;
}

.button:hover {
	color:#fff;
}

.button[type="reset"]:hover {
	color:#fff;
}

.textbox, textarea, select {
	font:  normal 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	color:#fff;
	background:#000 none   ;
	border:1px solid #202020;
	padding:4px;
	outline:0;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
}

.textbox[disabled],
textarea[disabled] {
	font-style:italic;
	color:#fff;
}

.formcontrols .blockrow input.textbox:focus,
.formcontrols .blockrow textarea:focus {
	background: #4b4b4b none   ;
}

/* INPUT / SELECT / TEXTAREA / GROUP */

form .rightcol {
	display:block;
	margin-left:212px;
	max-width:496px;
	*margin-left:0;
	float:none;
}

.blockbody.formcontrols .blockrow .rightcol * {
	margin-left:0;
	width:auto;
}

.blockbody.formcontrols .blockrow .rightcol .primary {
	width:50%;
}
.blockbody.formcontrols .blockrow .rightcol textarea.primary {
	width:70%;
}
.blockbody.formcontrols .blockrow .rightcol .description {
	width:auto;
}

.formcontrols .blockrow .primary {
	width:248px;
}
.formcontrols .blockrow .primary.full {
	max-width:100%;
	width:496px;
	float:left;
}

.formcontrols .blockrow .group {
	width:100%;
}

.formcontrols .blockrow .group li {
	margin-top:5px;
}
.formcontrols .blockrow .group li:first-child {
	margin-top:0;
}
.formcontrols .blockrow .group .textbox {
	width:248px;
}

.formcontrols .blockrow .primary.center {

}

.formcontrols .blockrow .primary.center img.icon {
	border:1px solid #000000;
}

.formcontrols .blockrow .titleprefix {
	float:left;
	margin-right:0.5em;
}

.formcontrols .blockrow * .group {
	width:auto;
	float:none;
}

.formcontrols .blockrow input.textbox[size] {
	width:auto;
}

.editor_textbox textarea {
	width:500px;
	max-width:98%;
	min-width:98%;
	height:200px;
	float:none;
}

.editor_textbox textarea, #ie8#fix {
	width:98%;
}

.formcontrols .blockrow input.numeric,
.formcontrols .blockrow select.numeric {
	text-align:right;
}

/* LABELS */

.formcontrols .blockrow label,
.formcontrols .blockrow .group.multifield label,
.formcontrols .blockrow .groupoption label {
	display:block;
	margin-bottom:2px;
}

.formcontrols .blockrow label {
	width:212px;
	float:left;
	font-size:13px;

}
.formcontrols .blockrow label.full {
	width:auto;
	float:none;
	font-weight:bold;
}

.formcontrols .blockrow label.floatlabel {
	margin-left: 10px;

}

.formcontrols .blockrow * label {
	/* undoes the above two rules */
	display:block;
	margin-bottom:auto;
	width:auto;
	float:none;
}

.formcontrols .blockrow .group li label,
.formcontrols .blockrow .group dt label {
	width:212px;
	float:left;
}

.formcontrols .blockrow .group.full li label,
.formcontrols .blockrow .group.full dt label {
	width:auto;
}



.formcontrols .blockrow .label {
	margin-bottom:8px;

}

.formcontrols .blockrow.singlecheck label {
	float:left;
}

.formcontrols fieldset.blockrow legend {
	margin:0;
	font-size:13px;
	font-weight:bold;
	padding-bottom:10px\9; /*IE Hack*/
}

/* DESCRIPTIONS */

.formcontrols .blockrow .description {
	color:#fff;
	font-size:11px;
	max-width:496px;
	margin-left:212px;
	overflow:hidden;
	line-height:150%;
	margin-bottom:5px;
}

.formcontrols .blockrow .group.multifield + .description {
	padding-top:1.3em;
}

.blockrow.texteditor .description {
	float:none;
	width:auto;
	margin-top:2px;
}

.formcontrols .blockrow .group.numeric + .description {
	/* descriptions to the right of numeric groups */
}

.formcontrols .blockrow .singledescription {
	display:block;
	clear:left;
	margin-bottom:10px;
}

/* CHECKBOX / RADIO EXCLUSIVE GROUPS */

.formcontrols .blockrow .group.checkradio {
	width:auto;
}

.formcontrols .blockrow .group.checkradio li label {
	float:none;
}

.formcontrols .blockrow .group.checkradio.full {
	width:100%;
}


.formcontrols .blockrow .group.checkradio.partial {
	width:212px;
}

.formcontrols .blockrow .group.checkradio.horizontal {
	height:30px;
}
.formcontrols .blockrow .group.checkradio.horizontal li label {
	float:left;
	padding-right:10px;
}

.formcontrols .blockrow .group.checkradio > li {
	margin-bottom:0.5em; /* maybe questionable */
}

/* MULTI-FIELD GROUPS (dd, mm, yyyy fields etc.) */

.formcontrols .blockrow .group.multifield li {
	float:left;
	margin-right:1em;
	margin-top:0;
}

/* Display multi-field controls vertically */
.formcontrols .blockrow .group.multifield.stacked li {
	float:none;
	margin-top:2px;
}

.formcontrols .blockrow .group.multifield label {
	margin-bottom:2px;
	display:block;
	float:none;
	width:auto;
}

.formcontrols .blockrow .group.multifield select,
.formcontrols .blockrow .group.multifield input.textbox {
	float:none;
}

/* NUMERIC GROUP (rgb color etc.) */

.formcontrols .blockrow .group.numeric {
	width:auto;
	*width:24%;
	max-width:212px;
	margin-right:2%;
}

.formcontrols .blockrow .group.numeric li {
	clear:both;
}

.formcontrols .blockrow .group.numeric label {
	float:left;
	margin-top:1px;
}

.formcontrols .blockrow .group.numeric input.textbox {
	float:right;
	text-align:right;
	margin-left:20px;
	margin-bottom:2px;
}

.formcontrols .blockrow .group.numeric .description {
	clear:both;
	text-align:right;
	margin:auto;
	margin-bottom:0.2em;
}

/* NUMERIC INPUT */

.formcontrols .blockrow input.textbox.numeric {
	text-align:right;
}

/* ACTION BUTTONS */

.formcontrols input.button,
.actionbuttons {
	max-width:100%;
}

.blockfoot.actionbuttons.redirect_button {
	background-color:transparent;
	padding-top:5px;
}
.blockfoot.actionbuttons.redirect_button  .group {
	padding-right: 0px;
}
.actionbuttons .group {
	float:none;
	text-align:right;
	padding: 0 10px 0 10px;
}

.vbform .actionbuttons .group {
	margin:0 auto;
	width:auto;
	max-width:100%;
	_width:100%;
}

.actionbuttons .small_text_buttons, .actionbuttons .small_text_buttons input.button {
    padding-left:10px;
    padding-right:10px;
}


.actionbuttons .group .button {
   	cursor:pointer;
	padding: 2.5px 5px;
	font:   bold 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	border:1px solid #000000;
	color:#fff;
	background:#202020 url(images/Seamus/buttons/newbtn_middle.png) repeat-x top left;
}

.actionbuttons .group .button:hover {
	background: #000000 url(images/Seamus/buttons/newbtn_middle.png) repeat-x  ;
	color: #fff;
}

/* *** SPECIAL ITEMS *** */

/* POST ICONS */

.formcontrols .blockrow #posticon_preview {
	width:16px;
	height:16px;
	margin-left:10px;
}

.formcontrols .blockrow.posticons table {
	max-width:100%;
	width:496px;
}

.formcontrols .blockrow.posticons td {
	padding:2px;
}

/* RATING SELECT */

.formcontrols .blockrow select.rating option {
	background-image:url(images/Seamus/rating/rating-15_3.png);
	background-repeat:no-repeat;
	background-position:left center;
	padding-left:85px
}

/* DEP GROUPS */
.formcontrols .blockrow dl.dep_group dd, .formcontrols .blockrow .dep_group .deps {
	margin-left:1.5em;
	margin-top:0.5em;
	margin-bottom:0.2em;
}

.formcontrols .blockrow dl.dep_group dd dl.dep_group {
	/*margin-top:1em;*/ /* Handles the margin above sub-dependent controls, remove? */
}

input[type="submit"][disabled]#blog_deletebtn:active, input[type="submit"][disabled]#blog_deletebtn {
	color:graytext;
}

/* ATTACH FILES */

.formcontrols .blockrow .group.attachments li {
	margin-bottom:0.5em;
}

.formcontrols .blockrow .group.attachments li img {
	vertical-align:middle;
}

/* Upper / Lower comparison and IM FIELDS (AIM, Skype...) */

.formcontrols .group.upperlower li,
.formcontrols .group.imfields li {
	width:45%;
	padding-bottom:0.3em;
}

.formcontrols .group.upperlower li input.textbox,
.formcontrols .group.imfields li input.textbox,
.formcontrols .group.imfields li select {
	width:100%;
}

.formcontrols .group.imfields li select {
	margin-bottom:-0.3em;
}

/* Group of text controls */
.groupcontrols {
	text-align:right;
	clear:both;
	margin-bottom:5px;	
}

.groupcontrols .textcontrol {
	margin-left:10px;
	margin-top:0;
	display:inline-block;
}

/* Single Button */
.formcontrols .blockrow.singlebutton .button {
}

/* IE7 Float Fix */
.formcontrols .groupoption {
	display:block;
	clear:left;
}

/* DEBUG */
.group.radio,
.group.checkbox {
	background:#4b4b4b none   ;
}

/* NEWEVENT.php TEMP */
.formcontrols .blockrow .group.checkradio .daycheckboxes li {
	float:left;
	padding-right:1em;
	padding-top:0.5em;
}

/*For the search, not worth creating a new css file*/
.savepreferences {
	float:left;text-align:left;width:49.5%;
}

/* Facebook Stuff */
.formcontrols #fbregbox.blockrow.hidden {
	visibility: hidden;
}

/* Fix for item 37360 */
#tag_list_cell .formcontrols .blockrow .group li label, #tag_list_cell .formcontrols .blockrow .group dt label { width: auto; }
#tag_edit_list li { clear: right; width: auto; margin-right: 10px;}
#tag_list_cell .formcontrols .blockrow .group li { margin-top: 0; }


.picker-holder
{
	display:block;
	text-align:center;
	margin:auto;
	top: 20px;
	background-color: #ffffff;
}


.picker{
	background-color: #aaaaaa;
	background: -moz-linear-gradient(#eeeeee,#999999);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(white), to(#aaaaaa) ); 
	display:block;
}


.lightgraybackground{
	background-color: #ffffff;
	background: -moz-linear-gradient(#ffffff,#cccccc);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(#ffffff), to(#cccccc) ); 
}


.centerbar
{
	position: absolute;
	width:2px;
	left: 50%;
}

.hbar
{
	height:2px;
	text-align:center;
	display:block;
	width:100%;
	margin-bottom: 4px;
}


.alert_box
{
	text-align:center;
	display:block;
	position:absolute;
	color: #222222;
	background-color: #aaaaaa;
	background: -moz-linear-gradient(#ffffff, #888888);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(#ffffff), to(#888888) );
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border-radius: 10px;
	border: #000000 2px solid;
	z-index: 10;
}
.alert_box .hd
{
	text-align:center;
	display:none;
	color: #ffffff;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border-radius: 10px;
}

.alert_box .bd
{
	color: #222222;
	background: -moz-linear-gradient(#ffffff, #888888);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(#ffffff), to(#888888) );
	-moz-border-radius-topleft: 10px;
	-moz-border-radius-topright: 10px;
	-webkit-border-radius-topleft: 10px;
	-webkit-border-radius-topright: 10px;
}

.alert_box .ft
{
	text-align: right;
	background: -moz-linear-gradient(#888888, #000000);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(#888888), to(#000000) );
}

.alert_box .ft input.btn {
	display:none;
	padding-top: 4px;
	padding-bottom: 4px;
	text-align: center;
	margin: 4px 10px 4px 10px;
	color: #ffffff;
	background: -moz-linear-gradient(#888888, #000000);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(#888888), to(#000000) );
	border: 1px #ffffff solid;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	float: right;
	font-weight:bold;
}


.ok_button {
	display:none;
	padding-top: 4px;
	padding-bottom: 4px;
	text-align: center;
	width:80px;
	margin: 4px 10px 4px 10px;
	color: #ffffff;
	background: -moz-linear-gradient(#888888, #000000);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(#888888), to(#000000) );
	border: 1px #ffffff solid;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	float: right;
	font-weight:bold;
}

.attach_popup
{
	display: none;
	border: 1px #000000 solid;
	margin: 0px;
	padding: 0px;
	background-color: #aaaaaa;
	-moz-border-radius: 5px;
	border-radius: 5px;
}


.assetpicker_body
{
	display:block;
	width: 100%;
	background-color: #bbbbbb;
	background: -moz-linear-gradient(#ffffff,#999999);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(white), to(#aaaaaa) );
	padding: 5px;
}
.transparent
{
	background-color: transparent;

}

.grey_select_item
{
	background-color: #eeeeee;

}

.tall_select
{
	height: 30px;
}