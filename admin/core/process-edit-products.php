<?php
	$id_products = addslashes($_GET['id-products']);

	$name = addslashes($_POST['name']);
	$price = addslashes($_POST['price']);
	$id_cate = addslashes($_POST['id_cate']);
	$detail = addslashes($_POST['detail']);
	$hide = addslashes($_POST['hide']);

	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
	if ($conn->connect_error) 
	{ 
		die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
	}
	$result = $conn->query("SELECT * FROM products p INNER JOIN categories c ON p.id_cate=c.id WHERE p.id = {$id_products}");

	$uploadOk=1;

    if ($_FILES["fileToUpload"]["name"] == NULL)
	{
		if ($result->num_rows > 0) 
	    {
	        while($row = $result->fetch_assoc()) 
	        {
	        	$img = $row['img'];
	        }
	    }
	}
	else
	{
		//get datetime and hash with md5()
		$d = date('Y-m-d H:i:s');
		$d = md5($d);
		//upload image file
		if ($_FILES["fileToUpload"]["name"] == NULL)
		{
			print "<script language='JavaScript'>alert('Chưa chọn hình ảnh!');</script>";
		    print "<meta http-equiv='refresh' content='0; index.php?thread=new-products'>";
		    exit;
		}

		$target_dir="images/products/";
		//$target_file=$target_dir.basename($_FILES["fileToUpload"]["name"]);
		$target_file = $target_dir.$d.basename($_FILES["fileToUpload"]["name"]);
		$img = $d.basename($_FILES["fileToUpload"]["name"]);
		
		$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if file already exists
		if (file_exists($target_file)) 
		{
		    print "<script language='JavaScript'>alert('File ảnh sản phẩm đã tồn tại!');</script>";
		    print "<meta http-equiv='refresh' content='0; index.php?thread=new-products'>";
		}
		//upload file
		if (!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
		    $uploadOk=0;
	}

	// update db
	@$a = mysql_query("UPDATE products SET name = '{$name}', price = '{$price}', id_cate = '{$id_cate}', detail = '{$detail}', img = '{$img}', hide = '{$hide}' WHERE id = {$id_products}");

	if ($a && $uploadOk)
	{
		echo "<script language='JavaScript'> alert('Sửa thông tin sản phẩm thành công!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=products-list'>";
	}
	else
	{
		echo "<script language='JavaScript'> alert('Đã có lỗi xảy ra, vui lòng thử lại sau!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=products-list'>";
	}
?>