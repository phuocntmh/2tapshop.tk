<?php
	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
	//mysqli_set_charset($conn,"utf8");
	if ($conn->connect_error) 
	{ 
		die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
	}
	$result = $conn->query("SELECT * FROM subscribes");
?>

<div class="row" style="margin-top: 10px; margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">
	<div class="col-md-3">
		<?php
			include("admin/lib/left-menu.php");
		?>
	</div>
	<div class="col-md-9">
		<div class="panel panel-primary">
			<div class="panel-heading">Quản lý đăng ký nhận tin</div>
			<div class="panel-body">
				<div style="margin-bottom: 5px;">
					
				</div>
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th style="text-align: center;">STT</th>
                            <th style="text-align: center;">Email</th>
                            <th style="text-align: center;">Trạng thái</th>
                            <th style="text-align: center;">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        	$i=1;
          					if ($result->num_rows > 0) 
          					{
            					while($row = $result->fetch_assoc()) 
            					{
        				?>
		                                    <tr class="odd gradeX">
		                                        <td style="text-align: center;"><?php echo $i++; ?></td>
		                                        <td style="text-align: center;"><?php echo $row['email']; ?></td>
		                                        <td style="text-align: center;"><?php echo $row['status']; ?></td>
		                                        <td style="text-align: center;">
		                                        	<button type="button" class="btn btn-success" onclick="window.location.href='?thread=edit-subscribes&id-subscribes=<?php echo $row['id']; ?>'"><span class="glyphicon glyphicon-ok"></span></button>
				                                        	<span> | </span>
				                                    <button type="button" class="btn btn-danger" onclick="if (confirm('Bạn có chắc chắn xoá mục này không?')) window.location.href='?thread=delete-subscribes&id-subscribes=<?php echo $row['id']; ?>'"><span class="glyphicon glyphicon-remove"></span></button>
		                                        </td>
		                                    </tr>
                        <?php
            					}
          					}
        				?>
                    </tbody>
                </table>
			</div>
		</div>
	</div>
</div>