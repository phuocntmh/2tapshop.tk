<?php
	$id_users = addslashes($_GET['id-users']);

	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
	if ($conn->connect_error) 
	{ 
		die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
	}
	$result = $conn->query("SELECT * FROM users WHERE id = '{$id_users}'");
?>

<div class="row" style="margin-top: 10px; margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">
	<div class="col-md-3">
		<?php
			include("admin/lib/left-menu.php");
		?>
	</div>
	<div class="col-md-9">
		<div class="panel panel-primary">
			<div class="panel-heading">Thông tin người dùng</div>
			<div class="panel-body">
				<?php
          			if ($result->num_rows > 0) 
          			{
            			while($row = $result->fetch_assoc()) 
            			{
            	?>
            				<form class="form-horizontal" action="?thread=process-add-users" method="POST" onsubmit="return CheckData(this)">
          <div class="form-group">
            <label class="control-label col-sm-3">Tên đăng nhập:</label>
            <div class="col-sm-9">
              <div class="col-sm-9">
                <input class="form-control" type="text" name="username" value="<?php echo $row['username']; ?>" autofocus required disabled>  
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3">Mật khẩu:</label>
            <div class="col-sm-9">
              <div class="col-sm-9">
                <input class="form-control" type="password" name="password" value="<?php echo $row['password']; ?>" required disabled>  
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3">Họ và tên:</label>
            <div class="col-sm-9">
              <div class="col-sm-9">
                <input class="form-control" type="text" name="name" value="<?php echo $row['name']; ?>" required disabled>  
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3">Số điện thoại:</label>
            <div class="col-sm-9">
              <div class="col-sm-9">
                <input class="form-control" type="number" name="phone" value="<?php echo $row['phone']; ?>" pattern="\d+" required disabled>  
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3">Email:</label>
            <div class="col-sm-9">
              <div class="col-sm-9">
                <input class="form-control" type="email" name="email" value="<?php echo $row['email']; ?>" required disabled>  
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3">Địa chỉ:</label>
            <div class="col-sm-9">
              <div class="col-sm-9">
                <input class="form-control" type="email" name="email" value="<?php echo $row['address']; ?>" required disabled> 
              </div>
            </div>
          </div>
        </form>
            	<?php
            			}
            		}
        		?>
        	<div class="col-sm-offset-3 col-sm-9">
              <div class="col-sm-9">
                <button class="btn btn-info" onclick="window.location.href='?thread=users-list'"><span class="glyphicon glyphicon-repeat"></span> Quay về</button>
                <button class="btn btn-warning" onclick="if (confirm('Khi chỉnh sửa thông tin bạn phải nhập lại mật khẩu!')) window.location.href='?thread=edit-users&id-users=<?php echo $id_users; ?>'"><span class="glyphicon glyphicon-pencil"></span> Chỉnh sửa</button>
              </div>
            </div>
			</div>
		</div>
	</div>
</div>