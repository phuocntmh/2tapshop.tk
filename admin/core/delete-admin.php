<?php
	$id_users = addslashes($_GET['id-admin']);

	@$a = mysql_query("DELETE FROM users WHERE id = {$id_users}");

	if ($a)
	{
		echo "<script language='JavaScript'> alert('Xoá quản trị viên thành công!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=admin-list'>";
	}
	else
	{
		echo "<script language='JavaScript'> alert('Oops! Đã có lỗi xảy ra, bạn thử lại nhé!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=admin-list'>";
	}
?>