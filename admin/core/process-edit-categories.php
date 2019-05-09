<?php
	$id_categories = addslashes($_GET['id-categories']);

	$name = addslashes($_POST['name']);
	$order = addslashes($_POST['order']);
	$hide = addslashes($_POST['hide']);

	//update
	@$a = mysql_query("UPDATE `phuocstore`.`categories` SET `name` = '{$name}', `order` = '{$order}', `hide` = '{$hide}' WHERE `categories`.`id` = {$id_categories}");
	if ($a)
	{
		echo "<script language='JavaScript'> alert('Cập nhật thông tin loại SP thành công!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=category-list'>";
	}
	else
	{
		echo "<script language='JavaScript'> alert('Đã có lỗi xảy ra, vui lòng thử lại sau!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=category-list'>";
	}
?>