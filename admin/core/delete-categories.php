<?php
	$id_categories = addslashes($_GET['id-categories']);

	@$a = mysql_query("DELETE FROM categories WHERE id = {$id_categories}");

	if ($a)
	{
		echo "<script language='JavaScript'> alert('Xoá loại SP thành công!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=category-list'>";
	}
	else
	{
		echo "<script language='JavaScript'> alert('Oops! Đã có lỗi xảy ra, bạn thử lại nhé!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=category-list'>";
	}
?>