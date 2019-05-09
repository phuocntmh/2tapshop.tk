<?php
	$id_product = addslashes($_GET['id_product']);

	$size = addslashes($_POST['size']);
	$quantity = addslashes($_POST['quantity']);
	$id_users = $_SESSION['id'];
	$days = date("Y-m-d");
	$status = "Đã nhận đơn hàng";

	// kiem tra san pham da co1 trong gio hang chua
	// cung ma hang
	if (mysql_num_rows(mysql_query("SELECT * FROM `carts` WHERE id_products='{$id_product}' AND id_users='{$id_users}'")) > 0)
	{
		//cung size
		if (mysql_num_rows(mysql_query("SELECT * FROM `carts` WHERE id_products='{$id_product}' AND id_users='{$id_users}' AND size='{$size}'")) > 0)
		{
			$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
			$result = $conn->query("SELECT * FROM `carts` WHERE id_products='{$id_product}' AND id_users='{$id_users}' AND size='{$size}'");
			if ($result->num_rows > 0) 
          	{
            	while($row = $result->fetch_assoc()) 
            	{
            		$id_carts = $row['id'];
            		$nums_new = $row['nums'] + $quantity;
            	}
            }
            @$a = mysql_query("UPDATE carts SET nums = '{$nums_new}' WHERE id = {$id_carts}");
            if ($a)
			{
				echo "<script language='JavaScript'> alert('Đã thêm vào giỏ hàng thành công!'); </script>";
				echo "<script language='JavaScript'> history.go(-1); </script>";
			}
			else
			{
				echo "<script language='JavaScript'> alert('Oops! Đã có lỗi xảy ra, bạn thử lại nhé!'); </script>";
				echo "<script language='JavaScript'> history.go(-1); </script>";
			}
		}
		//khac size
		else
		{
			@$a = mysql_query("INSERT INTO carts (id, id_users, days, id_products, size, nums, status) VALUES (NULL, '{$id_users}', '{$days}', '{$id_product}', '{$size}', '{$quantity}', '{$status}')");

			if ($a)
			{
				echo "<script language='JavaScript'> alert('Đã thêm vào giỏ hàng thành công!'); </script>";
				echo "<script language='JavaScript'> history.go(-1); </script>";
			}
			else
			{
				echo "<script language='JavaScript'> alert('Oops! Đã có lỗi xảy ra, bạn thử lại nhé!'); </script>";
				echo "<script language='JavaScript'> history.go(-1); </script>";
			}
		}
	}
	//khac ma hang
	else
	{
		@$a = mysql_query("INSERT INTO carts (id, id_users, days, id_products, size, nums, status) VALUES (NULL, '{$id_users}', '{$days}', '{$id_product}', '{$size}', '{$quantity}', '{$status}')");

		if ($a)
		{
			echo "<script language='JavaScript'> alert('Đã thêm vào giỏ hàng thành công!'); </script>";
			echo "<script language='JavaScript'> history.go(-1); </script>";
		}
		else
		{
			echo "<script language='JavaScript'> alert('Oops! Đã có lỗi xảy ra, bạn thử lại nhé!'); </script>";
			echo "<script language='JavaScript'> history.go(-1); </script>";
		}
	}
?>