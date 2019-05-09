<?php
	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
	//mysqli_set_charset($conn,"utf8");
	if ($conn->connect_error) 
	{ 
		die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
	}
	$result = $conn->query("SELECT * FROM users WHERE role = 1");
?>

<div class="row" style="margin-top: 10px; margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">
	<div class="col-md-3">
		<?php
			include("admin/lib/left-menu.php");
		?>
	</div>
	<div class="col-md-9">
		<div class="panel panel-primary">
			<div class="panel-heading">Quản lý quản trị viên</div>
			<div class="panel-body">
				<div style="margin-bottom: 5px;">
					<button class="btn btn-primary" data-toggle="modal" data-target="#ModalRegister1"><span class="glyphicon glyphicon-plus"></span> Thêm</button>
				</div>
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th style="text-align: center;">STT</th>
                            <th style="text-align: center;">Tên đăng nhập</th>
                            <th style="text-align: center;">Họ và tên</th>
                            <th style="text-align: center;">SĐT</th>
                            <th style="text-align: center;">Email</th>
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
		                                        <td style="text-align: center;"><?php echo $row['username']; ?></td>
		                                        <td style="text-align: center;"><?php echo $row['name']; ?></td>
		                                        <td style="text-align: center;"><?php echo $row['phone']; ?></td>
		                                        <td style="text-align: center;"><?php echo $row['email']; ?></td>
		                                        <td style="text-align: center;">
		                                        	<button type="button" class="btn btn-success" onclick="window.location.href='?thread=view-detail-admin&id-admin=<?php echo $row['id']; ?>'"><span class="glyphicon glyphicon-fullscreen"></span></button>
				                                        	<span> | </span>
		                                        	<button type="button" class="btn btn-warning" onclick="if (confirm('Khi chỉnh sửa thông tin bạn phải nhập lại mật khẩu!')) window.location.href='?thread=edit-admin&id-admin=<?php echo $row['id']; ?>'"><span class="glyphicon glyphicon-pencil"></span></button>
				                                        	<span> | </span>
				                                    <button type="button" class="btn btn-danger" onclick="if (confirm('Bạn có chắc chắn xoá mục này không?')) window.location.href='?thread=delete-admin&id-admin=<?php echo $row['id']; ?>'"><span class="glyphicon glyphicon-remove"></span></button>
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

<div id="ModalRegister1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thêm quản trị viên</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="?thread=process-add-admin" method="POST" onsubmit="return CheckData(this)">
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
            <label class="control-label col-sm-3">Nhập lại:</label>
            <div class="col-sm-9">
              <div class="col-sm-9">
                <input class="form-control" type="password" name="re_password" placeholder="Nhập lại mật khẩu" required>  
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3">Họ và tên:</label>
            <div class="col-sm-9">
              <div class="col-sm-9">
                <input class="form-control" type="text" name="name" placeholder="Nhập họ và tên" required>  
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3">Số điện thoại:</label>
            <div class="col-sm-9">
              <div class="col-sm-9">
                <input class="form-control" type="number" name="phone" placeholder="Nhập số điện thoại" pattern="\d+" required>  
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3">Email:</label>
            <div class="col-sm-9">
              <div class="col-sm-9">
                <input class="form-control" type="email" name="email" placeholder="Nhập địa chỉ email" required>  
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3">Địa chỉ:</label>
            <div class="col-sm-9">
              <div class="col-sm-9">
                <textarea class="form-control" name="address" placeholder="Nhập địa chỉ" required></textarea> 
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <div class="col-sm-9">
                <button class="btn btn-primary" type="submit">Thêm</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>