<?php
	$id_categories = addslashes($_GET['id-categories']);

	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
	if ($conn->connect_error) 
	{ 
		die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
	}
	$result = $conn->query("SELECT * FROM categories WHERE id = '{$id_categories}'");
?>

<div class="row" style="margin-top: 10px; margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">
	<div class="col-md-3">
		<?php
			include("admin/lib/left-menu.php");
		?>
	</div>
	<div class="col-md-9">
		<div class="panel panel-primary">
			<div class="panel-heading">Chỉnh sửa thông tin loại sản phẩm</div>
			<div class="panel-body">
				<?php
          			if ($result->num_rows > 0) 
          			{
            			while($row = $result->fetch_assoc()) 
            			{
            	?>
            				<form class="form-horizontal" action="?thread=process-edit-categories&id-categories=<?php echo $id_categories; ?>" method="POST">
          <div class="form-group">
            <label class="control-label col-sm-3">Tên loại hàng:</label>
            <div class="col-sm-9">
              <div class="col-sm-9">
                <input class="form-control" type="text" name="name" value="<?php echo $row['name']; ?>" autofocus required>  
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3">Vị trí:</label>
            <div class="col-sm-9">
              <div class="col-sm-9">
                <input class="form-control" type="text" name="order" value="<?php echo $row['order']; ?>" required >  
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3">Ẩn/Hiện:</label>
            <div class="col-sm-9">
              <div class="col-sm-9">
                <select class="form-control" name="hide">
                  <option value="0">Hiện</option>
                  <option value="1">Ẩn</option>
                </select>   
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <div class="col-sm-9">
                <button class="btn btn-primary" type="submit">Lưu lại</button>
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