<?php
	$id_feedbacks = addslashes($_GET['id-feedbacks']);

	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);
	if ($conn->connect_error) 
	{ 
		die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
	}
	$result = $conn->query("SELECT * FROM feedbacks WHERE id = '{$id_feedbacks}'");
?>

<div class="row" style="margin-top: 10px; margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">
	<div class="col-md-3">
		<?php
			include("admin/lib/left-menu.php");
		?>
	</div>
	<div class="col-md-9">
		<div class="panel panel-primary">
			<div class="panel-heading">Thông tin phản hồi</div>
			<div class="panel-body">
				<?php
          			if ($result->num_rows > 0) 
          			{
            			while($row = $result->fetch_assoc()) 
            			{
            	?>
            				<form class="form-horizontal" action="?thread=process-add-users" method="POST">
          <div class="form-group">
            <label class="control-label col-sm-3">Chủ đề:</label>
            <div class="col-sm-9">
              <div class="col-sm-9">
                <input class="form-control" type="text" name="subject" value="<?php echo $row['subject']; ?>" autofocus required disabled>  
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3">Trạng thái: </label>
            <div class="col-sm-9">
              <div class="col-sm-9">
                <input class="form-control" type="text" name="status" value="<?php echo $row['status']; ?>" pattern="\d+" required disabled>  
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3">Nội dung:</label>
            <div class="col-sm-9">
              <div class="col-sm-9">
                <?php
                  echo "";
                  echo $row['content'];
                  echo "";
                ?>
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
                <button class="btn btn-info" onclick="window.location.href='?thread=feedback-list'"><span class="glyphicon glyphicon-repeat"></span> Quay về</button>
                <button class="btn btn-success" onclick="window.location.href='?thread=edit-feedbacks&id-feedbacks=<?php echo $id_feedbacks; ?>'"><span class="glyphicon glyphicon-ok"></span> Đã xem</button>
              </div>
            </div>
			</div>
		</div>
	</div>
</div>