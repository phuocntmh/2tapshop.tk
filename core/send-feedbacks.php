<?php
	$subject = addslashes($_POST['subject']);
	$content = addslashes($_POST['content']);
	$status = "Đã nhận thông tin";

	@$a = mysql_query("INSERT INTO feedbacks (id, subject, content, status) VALUES (NULL, '{$subject}', '{$content}', '{$status}')");

	if ($a)
	{
		echo "<script language='JavaScript'> alert('Cảm ơn bạn đã phản hồi với chúng tôi! Chúng tôi sẽ ghi nhận ý kiến của bạn! Trân trọng!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=contact'>";
	}
	else
	{
		echo "<script language='JavaScript'> alert('Oops! Đã có lỗi xảy ra, bạn thử lại nhé!'); </script>";
		echo"<meta http-equiv='refresh' content='0; index.php?thread=contact'>";
	}
?>