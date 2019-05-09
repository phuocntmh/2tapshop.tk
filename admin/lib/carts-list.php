<?php
	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
	//mysqli_set_charset($conn,"utf8");
	if ($conn->connect_error) 
	{ 
		die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
	}
	$result = $conn->query("SELECT @madh := c.id, @tenkh := u.name, @idp := p.id, days, @tensp := p.name, size, nums, @tt := c.nums*p.price, status, phone  from carts c, users u, products p WHERE c.id_users=u.id AND c.id_products=p.id");
?>

<div class="row" style="margin-top: 10px; margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">
	<div class="col-md-3">
		<?php
			include("admin/lib/left-menu.php");
		?>
	</div>
	<div class="col-md-9">
		<div class="panel panel-primary">
			<div class="panel-heading">Quản lý đặt hàng</div>
			<div class="panel-body">
				<div style="margin-bottom: 5px;">
					
				</div>
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th style="text-align: center;">STT</th>
                            <th style="text-align: center;">Mã đơn hàng</th>
                            <th style="text-align: center;">Tên khách</th>
                            <th style="text-align: center;">Số điện thoại</th>
                            <th style="text-align: center;">Ngày đặt</th>
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
		                                        <td style="text-align: center;"><?php echo $row['@madh := c.id']; ?></td>
		                                        <td style="text-align: center;"><?php echo $row['@tenkh := u.name']; ?></td>
		                                        <td style="text-align: center;"><?php echo $row['phone']; ?></td>
		                                        <td style="text-align: center;"><?php echo $row['days']; ?></td>
		                                        <td style="text-align: center;"><?php echo $row['status']; ?></td>
		                                        <td style="text-align: center;">
		                                        	<button type="button" class="btn btn-info" onclick="window.location.href='?thread=view-detail-carts-ad&id-carts=<?php echo $row['@madh := c.id']; ?>'"><span class="glyphicon glyphicon-fullscreen"></span></button>
		                                        	<span> | </span>
		                                        	<button type="button" class="btn btn-warning" onclick="window.location.href='?thread=on-ship&id-carts=<?php echo $row['@madh := c.id']; ?>'"><span class="glyphicon glyphicon-plane"></span></button>
		                                        	<span> | </span>
		                                        	<button type="button" class="btn btn-success" onclick="window.location.href='?thread=finished&id-carts=<?php echo $row['@madh := c.id']; ?>'"><span class="glyphicon glyphicon-ok"></span></button>
				                                        	<span> | </span>
				                                    <button type="button" class="btn btn-danger" onclick="if (confirm('Bạn có chắc chắn xoá mục này không?')) window.location.href='?thread=delete-carts-ad&id-carts=<?php echo $row['@madh := c.id']; ?>'"><span class="glyphicon glyphicon-remove"></span></button>
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