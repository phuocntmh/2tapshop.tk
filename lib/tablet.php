<?php
  $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
  //mysqli_set_charset($conn,"utf8");
  if ($conn->connect_error) 
  { 
    die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
  }
  $result = $conn->query("SELECT * FROM `products` WHERE id_cate = 2");
?>

<div class="row" style="margin-top: 10px; margin-left: 5px; margin-right: 5px;">
  <div class="col-md-9">
    <div style="margin-bottom: 10px; text-align: center;">
  <img src="images/tablet.png" width="100%">  
</div>

<div class="panel panel-info">
      <div class="panel-heading" style="font-weight: bold;">MÁY TÍNH BẢNG - TABLET</div>
      <div class="panel-body">
        <?php
          if ($result->num_rows > 0) 
          {
            while($row = $result->fetch_assoc()) 
            {
        ?>
                <div class="col-md-4 product-men">
                  <div class="product-shoe-info shoe">
                    <div class="men-pro-item">
                      <div class="men-thumb-item">
                        <img src="images/products/<?php echo $row['img']; ?>" alt="">
                        <div class="men-cart-pro">
                          <div class="inner-men-cart-pro">
                            <a href="?thread=view_detail&id_product=<?php echo $row['id']; ?>" class="link-product-add-cart">Chi tiết</a>
                          </div>
                        </div>
                        <span class="product-new-top">Còn hàng</span>
                      </div>
                      <div class="item-info-product">
                        <h4>
                          <a href="#"><?php echo $row['name']; ?></a>
                        </h4>
                        <div class="info-product-price">
                          <div class="grid_meta">
                            <div class="product_price">
                              <div class="grid-price ">
                                <span class="money "><?php echo $row['price']; ?> VNĐ</span>
                              </div>
                            </div>
                            <ul class="stars">
                              <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                            </ul>
                          </div>
                          <div class="shoe single-item hvr-outline-out">
                            <form action="#" method="post">
                              <input type="hidden" name="cmd" value="_cart">
                              <input type="hidden" name="add" value="1">
                              <input type="hidden" name="shoe_item" value="(SRV) Sneakers">
                              <input type="hidden" name="amount" value="375.00">
                              <button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                              <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                            </form>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
        <?php
            }
          }
        ?>
      </div>
  </div>
  </div>
  <div class="col-md-3">
    <?php
      include("lib/right-menu.php");
    ?>
  </div>
</div>

