<?php
	$id_users = addslashes($_GET['id-users']);

	@$a = mysql_query("DELETE FROM users WHERE id = {$id_users}");

	if ($a)
	{
		echo "<script language='JavaScript'> alert('Xoá người dùng thành công!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=users-list'>";
	}
	else
	{
		echo "<script language='JavaScript'> alert('Oops! Đã có lỗi xảy ra, bạn thử lại nhé!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=users-list'>";
	}
?>