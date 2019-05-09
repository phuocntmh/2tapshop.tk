<?php
	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
	//mysqli_set_charset($conn,"utf8");
	if ($conn->connect_error) 
	{ 
		die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
	}
	$result = $conn->query("SELECT @idsp:=p.id, @tensp:=p.name, price, img, @tl:=c.name FROM products p INNER JOIN categories c ON p.id_cate=c.id ORDER BY p.id DESC");
	$result1 = $conn->query("SELECT name FROM categories");
?>

<div class="row" style="margin-top: 10px; margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">
	<div class="col-md-3">
		<?php
			include("admin/lib/left-menu.php");
		?>
	</div>
	<div class="col-md-9">
		<div class="panel panel-primary">
			<div class="panel-heading">Quản lý sản phẩm</div>
			<div class="panel-body">
				<div style="margin-bottom: 5px;">
					<button class="btn btn-primary" onclick="window.location.href='?thread=new-products'"><span class="glyphicon glyphicon-plus"></span> Thêm</button>
				</div>
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th style="text-align: center;">STT</th>
                            <th style="text-align: center;">Tên SP</th>
                            <th style="text-align: center;">Mã SP</th>
                            <th style="text-align: center;">Giá tiền</th>
                            <th style="text-align: center;">Hình ảnh</th>
                            <th style="text-align: center;">Thể loại</th>
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
		                                        <td style="text-align: center;"><?php echo $row['@tensp:=p.name']; ?></td>
		                                        <td style="text-align: center;"><?php echo $row['@idsp:=p.id']; ?></td>
		                                        <td style="text-align: center;"><?php echo number_format($row['price']); ?> đ</td>
		                                        <td style="text-align: center;">
		                                        	<img src="images/products/<?php echo $row['img']; ?>" width="100">
		                                        </td>
		                                        <td style="text-align: center;"><?php echo $row['@tl:=c.name']; ?></td>
		                                        <td style="text-align: center;">
		                                        	<button type="button" class="btn btn-success" onclick="window.location.href='?thread=view-detail-products&id-products=<?php echo $row['@idsp:=p.id']; ?>'"><span class="glyphicon glyphicon-fullscreen"></span></button>
				                                        	<span> | </span>
		                                        	<button type="button" class="btn btn-warning" onclick="window.location.href='?thread=edit-products&id-products=<?php echo $row['@idsp:=p.id']; ?>'"><span class="glyphicon glyphicon-pencil"></span></button>
				                                        	<span> | </span>
				                                    <button type="button" class="btn btn-danger" onclick="if (confirm('Bạn có chắc chắn xoá mục này không?')) window.location.href='?thread=delete-products&id-products=<?php echo $row['@idsp:=p.id']; ?>'"><span class="glyphicon glyphicon-remove"></span></button>
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
