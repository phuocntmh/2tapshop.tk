<?php
	$id_subscribes = addslashes($_GET['id-subscribes']);

	@$a = mysql_query("DELETE FROM subscribes WHERE id = {$id_subscribes}");

	if ($a)
	{
		echo "<script language='JavaScript'> alert('Xoá đăng ký nhận tin thành công!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=subscribes-list'>";
	}
	else
	{
		echo "<script language='JavaScript'> alert('Oops! Đã có lỗi xảy ra, bạn thử lại nhé!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=subscribes-list'>";
	}
?>