<?php 
	$id_products = addslashes($_GET['id-products']);

	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
	//mysqli_set_charset($conn,"utf8");
	if ($conn->connect_error) 
	{ 
		die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
	}
	$result = $conn->query("SELECT @idsp:=p.id, @tensp:=p.name, price, img, @tl:=c.name, detail FROM products p INNER JOIN categories c ON p.id_cate=c.id WHERE p.id = {$id_products}");
	$result1 = $conn->query("SELECT * FROM categories");
?>

<div class="row" style="margin-top: 10px; margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">
	<div class="col-md-3">
		<?php
			include("admin/lib/left-menu.php");
		?>
	</div>
	<div class="col-md-9">
		<div class="panel panel-primary">
			<div class="panel-heading">Chỉnh sửa thông tin sản phẩm</div>
			<div class="panel-body">
				<?php
          			if ($result->num_rows > 0) 
          			{
            			while($row = $result->fetch_assoc()) 
            			{
            	?>
            				<form class="form-horizontal" action="?thread=process-edit-products&id-products=<?php echo $id_products; ?>" method="POST" enctype="multipart/form-data">
			          <div class="form-group">
			            <label class="control-label col-sm-3">Tên sản phẩm:</label>
			            <div class="col-sm-9">
			                <input class="form-control" type="text" name="name" value="<?php echo $row['@tensp:=p.name'] ?>" autofocus required> 
			            </div>
			          </div>

			          <div class="form-group">
			            <label class="control-label col-sm-3">Giá tiền:</label>
			            <div class="col-sm-9">
			                <input class="form-control" type="number" name="price" value="<?php echo $row['price'] ?>" required>  
			            </div>
			          </div>

			          <div class="form-group">
			            <label class="control-label col-sm-3">Thể loại:</label>
			            <div class="col-sm-9">
			                  <select class="form-control" name="id_cate">
			                  	<?php
			                  		if ($result1->num_rows > 0) 
			          				{
			            				while($row1 = $result1->fetch_assoc()) 
			            				{
			            		?>
			            					<option value="<?php echo $row1['id']; ?>"><?php echo $row1['name']; ?></option>
			            		<?php
			            				}
			            			}
			                  	?>
			                  </select>
			            </div>
			          </div>

			          <div class="form-group">
			            <label class="control-label col-sm-3">Chi tiết:</label>
			            <div class="col-sm-9">
			              	<textarea name="detail" required>
			              		<?php 
			              			echo "";
			              			echo $row['detail'];
			              			echo "";
			              		?>
			              	</textarea>
							<script>
								CKEDITOR.replace( 'detail' );
							</script>
			            </div>
			          </div>

			          <div class="form-group">
			            <label class="control-label col-sm-3">Hình ảnh:</label>
			            <div class="col-sm-9">
			              <input type="file" name="fileToUpload" id="img">
			            </div>
			          </div>

			          <div class="form-group">
			            <label class="control-label col-sm-3">Trạng thái:</label>
			            <div class="col-sm-9">
			              <select class="form-control" name="hide">
			              	<option value="0">Hiện</option>
			              	<option value="1">Ẩn</option>
			              </select>
			            </div>
			          </div>

			          <div class="form-group">
			            <div class="col-sm-offset-3 col-sm-9">
			              <div class="col-sm-9">
			                <button class="btn btn-info" type="submit">Lưu lại</button>
			              </div>
			            </div>
			          </div>
			        </form>
            	<?php
            			}
            		}
        		?>
			</div>
		</div>
	</div>
</div>