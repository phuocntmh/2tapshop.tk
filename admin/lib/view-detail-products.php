<?php
	$id_products = addslashes($_GET['id-products']);

	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
	//mysqli_set_charset($conn,"utf8");
	if ($conn->connect_error) 
	{ 
		die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
	}
	$result = $conn->query("SELECT @idsp:=p.id, @tensp:=p.name, price, img, @tl:=c.name, detail FROM products p INNER JOIN categories c ON p.id_cate=c.id WHERE p.id = {$id_products} ORDER BY p.id DESC");
?>

<div class="row" style="margin-top: 10px; margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">
	<div class="col-md-3">
		<?php
			include("admin/lib/left-menu.php");
		?>
	</div>
	<div class="col-md-9">
		<div class="panel panel-primary">
			<div class="panel-heading">Thông tin sản phẩm</div>
			<div class="panel-body">
				<?php
          			if ($result->num_rows > 0) 
          			{
            			while($row = $result->fetch_assoc()) 
            			{
            	?>
            				<form class="form-horizontal" action="?thread=process-add-products" method="POST" enctype="multipart/form-data">
			          <div class="form-group">
			            <label class="control-label col-sm-3">Tên sản phẩm:</label>
			            <div class="col-sm-9">
			                <input class="form-control" type="text" name="name" value="<?php echo $row['@tensp:=p.name']; ?>" autofocus required disabled> 
			            </div>
			          </div>

			          <div class="form-group">
			            <label class="control-label col-sm-3">Giá tiền:</label>
			            <div class="col-sm-9">
			                <input class="form-control" type="number" name="price" value="<?php echo $row['price']; ?>" required disabled>
			            </div>
			          </div>

			          <div class="form-group">
			            <label class="control-label col-sm-3">Thể loại:</label>
			            <div class="col-sm-9">
			                  <input class="form-control" type="text" name="price" value="<?php echo $row['@tl:=c.name']; ?>" required disabled>
			            </div>
			          </div>

			          <div class="form-group">
			            <label class="control-label col-sm-3">Chi tiết:</label>
			            <div class="col-sm-9">
			              	<textarea name="detail" required disabled><?php echo $row['detail']; ?></textarea>
							<script>
								CKEDITOR.replace( 'detail' );
							</script>
			            </div>
			          </div>

			          <div class="form-group">
			            <label class="control-label col-sm-3">Hình ảnh:</label>
			            <div class="col-sm-9">
			              <img src="images/products/<?php echo $row['img']; ?>" width="400">
			            </div>
			          </div>

			          <div class="form-group">
			            <label class="control-label col-sm-3">Trạng thái:</label>
			            <div class="col-sm-9">
			              <?php
			              	if ($row['hide'] == 0) echo "Hiện";
			              	else echo "Ẩn";
			              ?>
			            </div>
			          </div>
			        </form>
            	<?php
            			}
            		}
        		?>
        	<div class="col-sm-offset-3 col-sm-9">
              <div class="col-sm-9">
                <button class="btn btn-info" onclick="window.location.href='?thread=products-list'"><span class="glyphicon glyphicon-repeat"></span> Quay về</button>
                <button class="btn btn-warning" onclick="window.location.href='?thread=edit-products&id-products=<?php echo $id_products; ?>'"><span class="glyphicon glyphicon-pencil"></span> Sửa</button>
              </div>
            </div>
			</div>
		</div>
	</div>
</div>