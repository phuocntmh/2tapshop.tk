<?php
	$id_users = addslashes($_GET['id-admin']);

	$username = addslashes($_POST['username']);
	$password = md5(addslashes($_POST['password']));
	$name = addslashes($_POST['name']);
	$phone = addslashes($_POST['phone']);
	$email = addslashes($_POST['email']);
	$address = addslashes($_POST['address']);
	$role = 1;

	

	//update
	@$a = mysql_query("UPDATE users SET password = '{$password}', name = '{$name}', phone = '{$phone}', email = '{$email}', address = '{$address}', role = {$role} WHERE id = {$id_users}");
	if ($a)
	{
		echo "<script language='JavaScript'> alert('Cập nhật thông tin quản trị viên thành công!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=admin-list'>";
	}
	else
	{
		echo "<script language='JavaScript'> alert('Đã có lỗi xảy ra, vui lòng thử lại sau!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=admin-list'>";
	}
?>