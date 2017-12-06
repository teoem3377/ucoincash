<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "exact",
        elements : "noidung_vi, noidung_en,noidung1_vi, noidung1_en,noidung_ci",
		theme : "advanced",
		convert_urls : false,
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,imagemanager,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",
height:"250px",
    width:"100%",
	remove_script_host : false,

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",		
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>

<h3>Thông tin footer</h3>
<form name="frm" method="post" action="index.php?com=footer&act=save" enctype="multipart/form-data" class="nhaplieu">   
      <b>Nội dung</b><br/>
	<div>
	 <textarea name="noidung_vi" id="noidung_vi"><?=$item['noidung_vi']?></textarea></div><br/>
    
    <!--    <b>Nội dung (English)</b><br/>
	<div>
	 <textarea name="noidung_en" id="noidung_en"><?=$item['noidung_en']?></textarea></div>
     
     <b>Showroom</b><br/>
	<div>
	 <textarea name="noidung1_vi" id="noidung1_vi"><?=$item['noidung1_vi']?></textarea></div><br/>
    
      <b>Showroom (English)</b><br/>
	<div>
	 <textarea name="noidung1_en" id="noidung1_en"><?=$item['noidung1_en']?></textarea></div>
    
      <b>Nội dung (China)</b><br/>
	<div>
	 <textarea name="noidung_ci" id="noidung_ci"><?=$item['noidung_ci']?></textarea></div>-->
	<input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
	<input type="submit" value="Lưu" class="btn" />
	<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=footer&act=capnhat'" class="btn" />
</form>