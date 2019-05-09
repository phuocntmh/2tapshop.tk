<?php
	$id_subscribes = addslashes($_GET['id-subscribes']);

	$status = "Đã xử lý thông tin.";

	@$a = mysql_query("UPDATE subscribes SET status = '{$status}' WHERE id = '{$id_subscribes}'");

	if ($a)
	{
		echo"<meta http-equiv='refresh' content='0; index.php?thread=subscribes-list'>";
	}
	else
	{
		echo "<script language='JavaScript'> alert('Oops! Đã có lỗi xảy ra, bạn thử lại nhé!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=subscribes-list'>";
	}
?>