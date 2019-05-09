<?php
	$username = addslashes($_POST['username']);
	$password = md5(addslashes($_POST['password']));
	$name = addslashes($_POST['name']);
	$phone = addslashes($_POST['phone']);
	$email = addslashes($_POST['email']);
	$address = addslashes($_POST['address']);
	$role = 0;

	//check if username is exist
	if (mysql_num_rows(mysql_query("SELECT username FROM users WHERE username='{$username}'")) > 0)
	{
		echo "<script language='JavaScript'> alert('Tài khoản này đã được dùng. Vui lòng chọn tài khoản khác!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=users-list'>";
	 	exit;
	}

	//insert into db
	@$a = mysql_query("INSERT INTO users (id, username, password, name, phone, email, address, role) VALUES (NULL, '{$username}', '{$password}', '{$name}', '{$phone}', '{$email}', '{$address}', {$role})");
	if ($a)
	{
		echo "<script language='JavaScript'> alert('Thêm người dùng thành công!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=users-list'>";
	}
	else
	{
		echo "<script language='JavaScript'> alert('Đã có lỗi xảy ra, vui lòng thử lại sau!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=users-list'>";
	}
?>