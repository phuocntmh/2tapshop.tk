<?php
  $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
  if ($conn->connect_error) 
  { 
    die("Không thể kết nối CSDL. Code: " . $conn->connect_error); 
  }
  $result = $conn->query("SELECT * FROM products ORDER by id DESC LIMIT 0,6");
  $result1 = $conn->query("SELECT * FROM products WHERE id_cate = 3 ORDER by id DESC LIMIT 0,6");
?>

<div style="text-align: center;">
  <a href="?thread=cell-phone"><img src="images/topsite.png" width="97%" height="50%" style="margin-top: 10px; margin-left: auto; margin-right: auto;"></a>
</div>

<!-- slider -->
<div class="row" style="margin-top: 10px; margin-left: 5px; margin-right: 5px;">
  <div class="col-md-8">
    <?php
      include("lib/slider.php");
    ?>
  </div>

  <div class="col-md-4">
    <a href="?thread=accessories"><img src="images/col3.png" width="100%" style="margin-bottom: 10px;"></a>
    <a href="?thread=cell-phone"><img src="images/col3-1.jpg" width="100%" style="margin-bottom: 10px;"></a>
    <a href="?thread=tablet"><img src="images/hinh3.jpeg" width="100%" style="margin-bottom: 10px;"></a>
  </div>
</div>

<div style="text-align: center;">
  <a href="?thread=promotion"><img src="images/topsite1.png" width="97%" height="50%" style="margin-top: 10px; margin-left: auto; margin-right: auto;"></a>
</div>

<!-- content -->
<div class="row" style="margin-top: 10px; margin-left: 5px; margin-right: 5px;">
<div class="col-md-9">
  <div class="panel panel-info">
        <div class="panel-heading" style="font-weight: bold;">SẢN PHẨM MỚI VỀ</div>
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
                        <span class="product-new-top">Mới</span>
                      </div>
                      <div class="item-info-product">
                        <h4>
                          <a href="?thread=view_detail&id_product=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
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

    <div class="panel panel-info">
        <div class="panel-heading" style="font-weight: bold;">PHỤ KIỆN MỚI</div>
        <div class="panel-body">
        <?php
          if ($result1->num_rows > 0) 
          {
            while($row1 = $result1->fetch_assoc()) 
            {
        ?>
                <div class="col-md-4 product-men">
                  <div class="product-shoe-info shoe">
                    <div class="men-pro-item">
                      <div class="men-thumb-item">
                        <img src="images/products/<?php echo $row1['img']; ?>" alt="">
                        <div class="men-cart-pro">
                          <div class="inner-men-cart-pro">
                            <a href="?thread=view_detail&id_product=<?php echo $row1['id']; ?>" class="link-product-add-cart">Chi tiết</a>
                          </div>
                        </div>
                        <span class="product-new-top">Mới</span>
                      </div>
                      <div class="item-info-product">
                        <h4>
                          <a href="?thread=view_detail&id_product=<?php echo $row1['id']; ?>"><?php echo $row1['name']; ?></a>
                        </h4>
                        <div class="info-product-price">
                          <div class="grid_meta">
                            <div class="product_price">
                              <div class="grid-price ">
                                <span class="money "><?php echo $row1['price']; ?> VNĐ</span>
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

<div id="myModalAds" class="modal fade" role="dialog" style="text-align: center;">
      <div class="modal-dialog" style="background-color: transparent !important;">
      <a href="#" target="_blank"><img src="images/pop-up.png" height="555"></a>
      </div>
  </div>

  
