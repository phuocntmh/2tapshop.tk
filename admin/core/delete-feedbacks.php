<?php
	$id_feedbacks = addslashes($_GET['id-feedbacks']);

	@$a = mysql_query("DELETE FROM feedbacks WHERE id = {$id_feedbacks}");

	if ($a)
	{
		echo "<script language='JavaScript'> alert('Xoá phản hồi thành công!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=feedback-list'>";
	}
	else
	{
		echo "<script language='JavaScript'> alert('Oops! Đã có lỗi xảy ra, bạn thử lại nhé!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=feedback-list'>";
	}
?>