<?php
	$id_product = addslashes($_GET['id_product']);

	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
  	//mysqli_set_charset($conn,"utf8");
  	if ($conn->connect_error) 
  	{ 
    	die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
  	}
  	$result = $conn->query("SELECT * FROM products WHERE id = {$id_product}");
?>

<div class="col-md-9" style="margin-top: 25px;">
	<?php
        if ($result->num_rows > 0) 
        {
           	while($row = $result->fetch_assoc()) 
            {
    ?>
    			<div class="row">
    				<div class="col-md-3" style="margin-left: auto; margin-right: auto;">
    					<img src="images/products/<?php echo $row['img'] ?>" width="175%" height="auto">
    				</div>
    				<div class="col-md-2"></div>
    				<div class="col-md-7">
    					<h3 style="font-weight: bold;">Tên SP: <font face="Tahoma" style="color: red;"><?php echo $row['name']; ?></font> <img src="images/km.gif" width="15%"></h3>

    					<div><font size="4" style="color: green">Giá bán: <?php echo number_format($row['price']); ?> VNĐ.</font> <del><?php echo number_format($row['price'] + 0.25*$row['price']); ?> VNĐ</del></div>

    					<form class="form-horizontal" action="?thread=add-carts&id_product=<?php echo $row['id']; ?>" method="POST" style="margin-top: 30px;">
	    					<div class="form-group">
	    						<label class="col-md-3" style="text-align: center;">Chọn màu sắc: </label>
	    						<div class="col-md-9">
	    							<select name="size" class="form-control" style="width: 35%">
	    								<option>Đỏ</option>
	    								<option>Trắng</option>
	    								<option>Đen</option>
	    								<option>Xanh dương</option>
	    							</select>
	    						</div>
	    					</div>

	    					<div class="form-group">
	    						<label class="col-md-3" style="text-align: center;">Chọn số lượng: </label>
	    						<div class="col-md-9">
	    							<input class="form-control" type="number" name="quantity" min="1" max="5" style="width: 35%" value="1">
	    						</div>
	    					</div>

	    					<?php
	    						if ($_SESSION['id'] != 0)
	    						{
	    					?>
	    							<div class="form-group">
			    						<button class="btn btn-success" type="submit" style="margin-left: 20px;"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
			    					</div>
			    			<?php
								}
							?>	    							
	    				</form>
	    				<?php
	    					if ($_SESSION['id'] == 0)
	    					{
	    				?>
	    						<div class="form-group">
			    					<button class="btn btn-danger" type="button" data-toggle="modal" data-target="#ModalLogin1"><i class="fa fa fa-life-bouy fa-spin"></i> Đăng nhập để mua hàng</button>
			    				</div>
			    		<?php
	    					}
	    				?>

	    				<div>
	    					<div class="fb-like" data-href="https://www.facebook.com/olympicithutech" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
	    					<div style="height: 10px;"></div>
	    					<div class="fb-save" data-uri="https://www.facebook.com/olympicithutech" data-size="large"></div>
	    					<g:plusone></g:plusone>
	    				</div>
    				</div>
    			</div>

    			<div class="row" style="margin-left: 30px; margin-top: 10px;">
					<ul class="nav nav-tabs" role="tablist">
					    <li role="presentation" class="active"><a href="#info" aria-controls="info" role="tab" data-toggle="tab">Thông tin SP</a></li>

					    <li role="presentation"><a href="#report" aria-controls="report" role="tab" data-toggle="tab">Đánh giá</a></li>

					    <li role="presentation"><a href="#warranty" aria-controls="warranty" role="tab" data-toggle="tab">Bảo hành</a></li>
					</ul>

					<div class="tab-content">
				        <div role="tabpanel" class="tab-pane active" id="info">
				        	<div style="height: 10px;"></div>
				        	<p><?php echo $row['detail']; ?></p>
				        </div>

				        <div role="tabpanel" class="tab-pane" id="report">
				        	<div style="height: 10px;"></div>
				        	<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="5"></div>
				        </div>

				        <div role="tabpanel" class="tab-pane" id="warranty">
				        	<div style="height: 10px;"></div>
				        	<ul>
				        		<li>Tất cả sản phẩm tại cửa hàng đều được bảo hành trong thời gian 3 tháng 1 đổi 1 nếu có lỗi.</li>
				        		<li>Ngoài ra, chúng tôi còn bảo hành trọn đời tất cả các sản phẩm nếu có lỗi về keo như nứt keo, bung keo,...</li>
				        		<li>Thời gian đổi trả: trong vòng 1 ngày tính từ ngày mua.</li>
				        	</ul>	
				        	<p style="color: blue;">Cảm ơn quý khách đã ghé thăm cửa hàng. Trân trọng!</p>
				        </div>
				    </div>
    			</div>
	<?php
            }
        }
    ?>
</div>

<div class="col-md-3" style="margin-top: 20px;">
	<?php
		include("lib/right-menu.php");
	?>
</div>

<div id="ModalLogin1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Đăng nhập hệ thống</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="?thread=process_login" method="POST">
          <div class="form-group">
            <label class="control-label col-sm-3">Tên đăng nhập:</label>
            <div class="col-sm-9">
              <div class="col-sm-9">
                <input class="form-control" type="text" name="username" placeholder="Nhập tên đăng nhập" autofocus required>  
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3">Mật khẩu:</label>
            <div class="col-sm-9">
              <div class="col-sm-9">
                <input class="form-control" type="password" name="password" placeholder="Nhập mật khẩu" required>  
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <div class="col-sm-9">
                <button class="btn btn-primary" type="submit">Đăng nhập</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>