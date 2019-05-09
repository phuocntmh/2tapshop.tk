<?php
	$id_carts = addslashes($_GET['id-carts']);

	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
	if ($conn->connect_error) 
	{ 
		die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
	}
	$result = $conn->query("SELECT @madh := c.id, @tenkh := u.name, @idp := p.id, days, @tensp := p.name, size, nums, @tt := c.nums*p.price, status, phone, price, email, address  from carts c, users u, products p WHERE c.id_users=u.id AND c.id_products=p.id AND c.id = '{$id_carts}'");
?>

<div class="row" style="margin-top: 10px; margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">
	<div class="col-md-3">
		<?php
			include("admin/lib/left-menu.php");
		?>
	</div>
	<div class="col-md-9">
		<div class="panel panel-primary">
			<div class="panel-heading">Thông tin đơn hàng</div>
			<div class="panel-body">
				<?php
          			if ($result->num_rows > 0) 
          			{
            			while($row = $result->fetch_assoc()) 
            			{
            	?>
            				<div class="row" style="margin-left: 10px;">
                      <div class="col-md-2" style="font-weight: bold;">Mã đơn hàng: </div>
                      <div class="col-md-10"><?php echo $row['@madh := c.id']; ?></div>

                      <div class="col-md-2" style="font-weight: bold;">Tên khách hàng: </div>
                      <div class="col-md-10"><?php echo $row['@tenkh := u.name']; ?></div>

                      <div class="col-md-2" style="font-weight: bold;">Số điện thoại: </div>
                      <div class="col-md-10"><?php echo $row['phone']; ?></div>

                      <div class="col-md-2" style="font-weight: bold;">Mã sản phẩm: </div>
                      <div class="col-md-10" style="color: red; font-weight: bold;"><?php echo $row['@idp := p.id']; ?></div>

                      <div class="col-md-2" style="font-weight: bold;">Tên sản phẩm: </div>
                      <div class="col-md-10"><?php echo $row['@tensp := p.name']; ?></div>

                      <div class="col-md-2" style="font-weight: bold;">Size: </div>
                      <div class="col-md-10"><?php echo $row['size']; ?></div>

                      <div class="col-md-2" style="font-weight: bold;">Số lượng: </div>
                      <div class="col-md-10"><?php echo $row['nums']; ?></div>

                       <div class="col-md-2" style="font-weight: bold;">Đơn giá: </div>
                      <div class="col-md-10"><?php echo number_format($row['price']); ?> đ</div>

                      <div class="col-md-2" style="font-weight: bold;">Thành tiền: </div>
                      <div class="col-md-10" style="color: blue; font-weight: bold;"><?php echo number_format($row['@tt := c.nums*p.price']); ?> đ</div>

                      <div class="col-md-2" style="font-weight: bold;">Trạng thái: </div>
                      <div class="col-md-10" style="font-weight: bold; color: green"><i><?php echo $row['status']; ?></i></div>

                      <div class="col-md-2" style="font-weight: bold;">Email: </div>
                      <div class="col-md-10"><?php echo $row['email']; ?></div>

                      <div class="col-md-2" style="font-weight: bold;">Địa chỉ giao hàng: </div>
                      <div class="col-md-10"><?php echo $row['address']; ?></div>

                      <div class="col-md-offset-2 col-md-10" style="margin-top: 20px;">
                        <button class="btn btn-info" onclick="window.location.href='?thread=carts-list'"><span class="glyphicon glyphicon-arrow-left"></span> Đóng</button>
                        <button class="btn btn-warning" onclick="window.location.href='?thread=on-ship&id-carts=<?php echo $row['@madh := c.id']; ?>'"><span class="glyphicon glyphicon-plane"></span> Đang giao hàng</button>
                        <button class="btn btn-success" onclick="window.location.href='?thread=finished&id-carts=<?php echo $row['@madh := c.id']; ?>'"><span class="glyphicon glyphicon-ok"></span> Đã giao hàng</button>
                        <button type="button" class="btn btn-danger" onclick="if (confirm('Bạn có chắc chắn xoá mục này không?')) window.location.href='?thread=delete-carts-ad&id-carts=<?php echo $row['@madh := c.id']; ?>'"><span class="glyphicon glyphicon-remove"></span> Xoá đơn hàng</button>
                      </div>
                    </div>
            	<?php
            			}
            		}
        		?>
			</div>
		</div>
	</div>
</div>