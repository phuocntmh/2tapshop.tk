<?php
	$name =addslashes($_POST['name']);
	$order =addslashes($_POST['order']);
	$hide =addslashes($_POST['hide']);

	@$a = mysql_query("INSERT INTO `phuocstore`.`categories` (`id`, `name`, `order`, `hide`) VALUES (NULL, '{$name}', '{$order}', '{$hide}')");

	if ($a)
	{
		echo "<script language='JavaScript'> alert('Thêm loại SP thành công!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=category-list'>";
	}
	else
	{
		echo "<script language='JavaScript'> alert('Đã có lỗi xảy ra, vui lòng thử lại sau!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=category-list'>";
	}
?>