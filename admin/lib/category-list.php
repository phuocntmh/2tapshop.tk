<?php
  $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
  //mysqli_set_charset($conn,"utf8");
  if ($conn->connect_error) 
  { 
    die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
  }
  $result = $conn->query("SELECT * FROM categories");
?>

<div class="row" style="margin-top: 10px; margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">
  <div class="col-md-3">
    <?php
      include("admin/lib/left-menu.php");
    ?>
  </div>
  <div class="col-md-9">
    <div class="panel panel-primary">
      <div class="panel-heading">Quản lý loại hàng</div>
      <div class="panel-body">
        <div style="margin-bottom: 5px;">
          <button class="btn btn-primary" data-toggle="modal" data-target="#ModalAddCategories"><span class="glyphicon glyphicon-plus"></span> Thêm</button>
        </div>
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th style="text-align: center;">STT</th>
                            <th style="text-align: center;">Tên thể loại</th>
                            <th style="text-align: center;">Vị trí</th>
                            <th style="text-align: center;">Ẩn/Hiện</th>
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
                                            <td style="text-align: center;"><?php echo $row['name']; ?></td>
                                            <td style="text-align: center;"><?php echo $row['order']; ?></td>
                                            <td style="text-align: center;"><?php if ($row['hide'] == 0) echo "Hiện"; else echo "Ẩn"; ?></td>
                                            <td style="text-align: center;">
                                              <button type="button" class="btn btn-warning" onclick="window.location.href='?thread=edit-categories&id-categories=<?php echo $row['id']; ?>'"><span class="glyphicon glyphicon-pencil"></span></button>
                                                  <span> | </span>
                                            <button type="button" class="btn btn-danger" onclick="if (confirm('Bạn có chắc chắn xoá mục này không?')) window.location.href='?thread=delete-categories&id-categories=<?php echo $row['id']; ?>'"><span class="glyphicon glyphicon-remove"></span></button>
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

<div id="ModalAddCategories" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thêm loại hàng</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="?thread=process-add-categories" method="POST" onsubmit="return CheckData(this)">
          <div class="form-group">
            <label class="control-label col-sm-3">Tên loại hàng:</label>
            <div class="col-sm-9">
              <div class="col-sm-9">
                <input class="form-control" type="text" name="name" placeholder="Nhập tên loại hàng" autofocus required>  
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3">Vị trí:</label>
            <div class="col-sm-9">
              <div class="col-sm-9">
                <input class="form-control" type="text" name="order" placeholder="Nhập vị trí" required>  
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3">Trạng thái:</label>
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
                <button class="btn btn-primary" type="submit">Thêm</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>