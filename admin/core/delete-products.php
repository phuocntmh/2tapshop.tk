<?php
	$id_products = addslashes($_GET['id-products']);

	$sql_query = @mysql_query("SELECT * FROM products WHERE id={$id_products}");
	$b = @mysql_fetch_array($sql_query);
	$link = $b['img'];
	$target_dir="images/products/";
	$target_file = $target_dir.$link;
	unlink($target_file);

	@$a = mysql_query("DELETE FROM products WHERE id = {$id_products}");

	if ($a)
	{
		echo "<script language='JavaScript'> alert('Xoá sản phẩm thành công!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=products-list'>";
	}
	else
	{
		echo "<script language='JavaScript'> alert('Oops! Đã có lỗi xảy ra, bạn thử lại nhé!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=products-list'>";
	}
?>