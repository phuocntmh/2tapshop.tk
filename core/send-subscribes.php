<?php
	$email = addslashes($_POST['email']);
	$status = "Đã nhận thông tin.";

	@$a = mysql_query("INSERT INTO subscribes (id, email, status) VALUES (NULL, '{$email}', '{$status}')");

	if ($a)
	{
		echo "<script language='JavaScript'> alert('Gửi thông tin thành công! Cảm ơn bạn!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
	}
	else
	{
		echo "<script language='JavaScript'> alert('Oops! Đã có lỗi xảy ra, bạn thử lại nhé!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
	}
?>