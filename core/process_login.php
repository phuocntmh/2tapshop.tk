<?php
	$username = addslashes($_POST["username"]);
	$password = md5(addslashes($_POST["password"]));
	
	$sql_query = @mysql_query("SELECT * from users WHERE username='{$username}'");

	$member = @mysql_fetch_array( $sql_query );

	if ( @mysql_num_rows( $sql_query ) <= 0 )
	{
		echo "<script language='JavaScript'> alert('Tài khoản không hợp lệ!'); </script>";
		echo "<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
		exit;
	}

	if ($password != $member['password'])
	{
		echo "<script language='JavaScript'> alert('Mật khẩu không đúng!'); </script>";
		echo "<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
		exit;
	}

	$_SESSION['id'] = $member['id'];
	$_SESSION['username'] = $member['username'];
	$_SESSION['role'] = $member['role'];

	echo "<script language='JavaScript'> alert('Bạn đã đăng nhập thành công!'); </script>";
	echo "<script language='JavaScript'> history.go(-1); </script>";
?>