<?php
	$id_users = $_SESSION['id'];

	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
	mysqli_set_charset($conn,"utf8");
	if ($conn->connect_error) 
	{ 
		die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
	}
	$result = $conn->query("SELECT * FROM `carts` WHERE id_users={$id_users}");
    $tongtien=0;
?>

<div class="row" style="margin-top: 10px; margin-left: 5px; margin-right: 5px;">
 	<div class="col-md-9">
		<div class="panel panel-success">
      		<div class="panel-heading">GIỎ HÀNG CỦA: <?php echo $_SESSION['username']; ?></div>
      		<div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th style="text-align: center;">STT</th>
                            <th style="text-align: center;">Tên sản phẩm</th>
                            <th style="text-align: center;">Ngày mua</th>
                            <th style="text-align: center;">Màu sắc</th>
                            <th style="text-align: center;">Số lượng</th>
                            <th style="text-align: center;">Đơn giá</th>
                            <th style="text-align: center;">Thành tiền</th>
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
            						$id_products = $row['id_products'];
            						$result1 = $conn->query("SELECT * FROM `products` WHERE id={$id_products}");
            						if ($result1->num_rows > 0) 
          							{
            							while($row1 = $result1->fetch_assoc()) 
            							{
                                            $tongtien+=$row1['price'];
        				?>
		                                    <tr class="odd gradeX">
		                                        <td style="text-align: center;"><?php echo $i++; ?></td>
		                                        <td><?php echo $row1['name']; ?></td>
		                                        <td style="text-align: center;"><?php echo $row['days']; ?></td>
		                                        <td style="text-align: center;"><?php echo $row['size']; ?></td>
		                                        <td style="text-align: center;"><?php echo $row['nums']; ?></td>
		                                        <td><?php echo number_format($row1['price']); ?> VNĐ</td>
		                                        <td class="center"><?php echo number_format($row['nums'] * $row1['price']); ?> VNĐ</td>
		                                        <td style="text-align: center;">
		                                        	<?php
		                                        		if ($row['nums'] > 1)
		                                        		{
		                                        	?>
		                                        			<button type="button" class="btn btn-warning" onclick="if (confirm('Bạn có chắc chắn xoá mục này không?')) window.location.href='?thread=delete-carts&id_carts=<?php echo $row['id']; ?>'">Xoá</button>
				                                        	<span> | </span>
				                                        	<button type="button" class="btn btn-danger" onclick="if (confirm('Bạn có chắc chắn xoá mục này không?')) window.location.href='?thread=delete-all-carts&id_carts=<?php echo $row['id']; ?>'">Xoá hết</button>
				                                    <?php
		                                        		}
		                                        		else
		                                        		{
		                                        	?>
		                                        			<button type="button" class="btn btn-warning" onclick="if (confirm('Bạn có chắc chắn xoá mục này không?')) window.location.href='?thread=delete-all-carts&id_carts=<?php echo $row['id']; ?>'">Xoá</button>
		                                        	<?php

		                                        		}
		                                        	?>
		                                        	
		                                        </td>
		                                    </tr>
                        <?php
            							}
            						}
            					}
          					}
        				?>
                    </tbody>
                </table>
                <div class="pull-right" style="font-weight: bold; color: red; font-size: 15px; margin-top: 20px;">
                    Tổng cộng: <?php echo number_format($tongtien); ?> VNĐ
                </div>
                <div style="clear: both; height: 10px;"></div>
                <div class="row">
                    <div class="col-md-7">
                        <label>1. Chọn phương thức giao hàng</label>
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#cod" aria-controls="info" role="tab" data-toggle="tab">Trả tiền khi nhận hàng</a></li>

                                <li role="presentation"><a href="#online" aria-controls="report" role="tab" data-toggle="tab">Thanh toán trực tuyến</a></li>
                            </ul>

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="cod">
                                    <div style="height: 10px;"></div>
                                    <p style="margin-left: 10px;">- Nhân viên giao hàng sẽ sớm liên lạc với bạn để xác nhận.</p>
                                    <p style="margin-left: 10px;">- Vui lòng chọn nút hoàn thành đơn hàng để tiếp tục.</p>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="online">
                                    <div style="height: 10px;"></div>
                                    <p style="margin-left: 10px;">- Chọn nút thanh toán với Ngân Lượng để tiến hành thanh toán.</p>
                                    <p style="margin-left: 10px;">- 2TAP Shop sẽ xác nhận đơn hàng khi bạn thanh toán thành công.</p>
                                    <p style="margin-left: 10px;">- Sau khi thanh toán thành công, chọn nút hoàn tất đơn hàng.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label>2. Thanh toán với Ngân Lượng</label>
                        <div style="text-align: center; margin-top: 10px;">
                            <a target="_blank" href="https://www.nganluong.vn/button_payment.php?receiver=hongphuoc123456@gmail.com&product_name=2tapshop&price=<?php echo $tongtien; ?>&return_url=?thread=check-out-success&comments=success"><img src="https://www.nganluong.vn/css/newhome/img/button/safe-pay-2.png"border="0" /></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label>3. Hoàn tất</label>
                        <button class="btn btn-danger" style="margin: 30px;" onclick="checkout()"><i class="fa fa-futbol-o fa-spin"></i> Xác nhận</button>
                    </div>
                </div>
                
      		</div>
  		</div>
  	</div>
    
    <div class="col-md-3">
        <?php
        	include("lib/right-menu.php");
        ?>
    </div>
</div>

<script type="text/javascript">
    function checkout(){
        alert("Bạn đã hoàn tất đơn hàng. Nhân viên của chúng tôi sẽ liên hệ lại với bạn để xác nhận. Xin cảm ơn!");
    }
</script>