<h3>Hình ảnh</h3>

<form name="frm" method="post" action="index.php?com=khuyenmai&act=save_photo&id=<?=$_REQUEST['id'];?>&idc=<?=$_REQUEST['idc']?>" enctype="multipart/form-data" class="nhaplieu">	
	<b>&nbsp;</b> 
    
        <img src="<?=_upload_khuyenmai.$item['photo']?>" width="100" />
    
    <br />
	<b>Màu </b> <input type="file" name="file" /> <strong> .jpg|.png|.gif|.JPG|.jpeg|.JPEG|.PNG|.Jpg _Width: 150px  </strong><br />
	
 <br />
	<b>Link: </b> <input name="mota" value="<?=$item['mota']?>" type="text" size="40"   />	
	<br />
	   <!--<br />
     <b>Vị trí:</b> <select name="vitri" id="vitri">    	
        <option value="1" <?php if($item['vitri']==1) echo selected ?>>Chạy bên trái</option>
        <option value="2" <?php if($item['vitri']==2) echo selected ?>>Chạy bên phải</option>       
    </select><br/><br/>

    -->
	<b>Số thứ tự </b> <input type="text" name="stt" value="<?=$item['stt']?>" style="width:30px" readonly="readonly" />	<br />
	<b>Hiển thị</b> <input type="checkbox" name="hienthi" <?=$item['hienthi'] ? 'checked="checked"' : ""?> /> <br /><br />
	
	<input type="hidden" name="id" value="<?=$item['id']?>" />
	<input type="submit" value="Lưu" class="btn" />
	<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=khuyenmai&act=man_photo'" class="btn" />
</form>