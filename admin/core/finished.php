<?php
	$id_carts = addslashes($_GET['id-carts']);

	$status = "Đã giao hàng";

	@$a = mysql_query("UPDATE carts SET status = '{$status}' WHERE id = '{$id_carts}'");

	if ($a)
	{
		echo"<meta http-equiv='refresh' content='0; index.php?thread=carts-list'>";
	}
	else
	{
		echo "<script language='JavaScript'> alert('Oops! Đã có lỗi xảy ra, bạn thử lại nhé!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=carts-list'>";
	}
?>