<?php
	$id_carts = addslashes($_GET['id_carts']);

	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
  	//mysqli_set_charset($conn,"utf8");
  	if ($conn->connect_error) 
  	{ 
    	die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
  	}

  	$result = $conn->query("SELECT * FROM `carts` WHERE id = {$id_carts}");
  	
  	if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
        	$old_nums = $row['nums'];
        }
    }

    $new_nums = $old_nums - 1;

	@$a = mysql_query("UPDATE carts SET nums = '{$new_nums}' WHERE id = {$id_carts}");

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