<?php
	$id_feedbacks = addslashes($_GET['id-feedbacks']);

	$status = "Đã xử lý thông tin.";

	@$a = mysql_query("UPDATE feedbacks SET status = '{$status}' WHERE id = '{$id_feedbacks}'");

	if ($a)
	{
		echo"<meta http-equiv='refresh' content='0; index.php?thread=feedback-list'>";
	}
	else
	{
		echo "<script language='JavaScript'> alert('Oops! Đã có lỗi xảy ra, bạn thử lại nhé!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=feedback-list'>";
	}
?>