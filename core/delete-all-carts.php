<?php
	$id_carts = addslashes($_GET['id_carts']);

	@$a = mysql_query("DELETE FROM carts WHERE id = {$id_carts}");

	if ($a)
	{
		echo "<script language='JavaScript'> alert('Xoá sản phẩm thành công!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=carts'>";
	}
	else
	{
		echo "<script language='JavaScript'> alert('Oops! Đã có lỗi xảy ra, bạn thử lại nhé!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=carts'>";
	}
?>