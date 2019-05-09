<div>
  <nav class="navbar navbar-inverse navbar-fixed-top" style="border-color: #cd1818;">
    <div class="container-fluid" style="background-color: #cd1818;">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" style="color: #fff; margin-top: 8px; border: none;" href="?thread=homepage"><img src="images/logo.png" width="100%" style="margin-top: 7px;"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <div class="col-sm-6 col-md-3" style="float: left;">
          <ul class="nav navbar-nav navbar-left">
            <li>
              <form class="navbar-form" action="?thread=search" method="POST" style="border: none;">
                <div class="input-group">
                  <input type="text" class="form-control" name="keyword" placeholder="Nhập tên điện thoại, phụ kiện,..." autofocus required>
                  <div class="input-group-btn">
                    <button class="btn btn-info" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                  </div>
                </div>
              </form>
              <div style="margin-left: 15px; margin-right: 15px; color: #fff">
                <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2">
                  2TAP Shop - Nhà bán lẻ hàng đầu về điện thoại và phụ kiện
                </marquee>
              </div>
            </li>
          </ul>
        </div>

      <ul class="nav navbar-nav" style="text-transform: uppercase;">
        <li>
          <a href="?thread=cell-phone">
            <div style="text-align: center; font-size: 33px;"><i class="fa fa-mobile-phone"></i></div>
            <div style="text-align: center;">ĐIỆN THOẠI</div>
          </a>
        </li>

        <li>
          <a href="?thread=tablet">
            <div style="text-align: center; font-size: 33px;"><i class="fa fa-tablet"></i></div>
            <div style="text-align: center;">TABLET</div>
          </a>
        </li>

        <li>
          <a href="?thread=accessories">
            <div style="text-align: center; font-size: 33px;"><i class="fa fa-headphones"></i></div>
            <div style="text-align: center;">PHỤ KIỆN</div>
          </a>
        </li>

        <li><a href="?thread=return-label">
          <div style="text-align: center; font-size: 33px;"><i class="fa fa-undo"></i></div>
          <div style="text-align: center;">ĐỔI TRẢ</div>
        </a></li>

        <li><a href="?thread=promotion">
          <div style="text-align: center; font-size: 33px;"><i class="fa fa-gift"></i></div>
          <div style="text-align: center;">KHUYẾN MÃI</div>
        </a></li>

        <?php
          if ($_SESSION['id'] != 0)
          {
        ?>
            <li><a href="?thread=carts">
              <div style="text-align: center; font-size: 33px;"><i class="fa fa-shopping-cart"></i></div>
              <div style="text-align: center;">GIỎ HÀNG</div>
            </a></li>
        <?php
          }
        ?>
        
        <!-- <li><a href="?thread=new-arrival">Mới về</a></li>
        <li><a href="?thread=men-fashion">Giày nam</a></li>
        <li><a href="?thread=women-fashion">Giày nữ</a></li>
        <li><a href="?thread=accessories">Phụ kiện</a></li>
        <li><a href="?thread=contact">Giới thiệu</a></li> -->
        <!-- <?php
          if ($_SESSION['id'] != 0)
          {
        ?>
            <li><a href="?thread=carts"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
        <?php
          }
        ?>
        <?php
          if ($_SESSION['id'] != 0 && $_SESSION['role'] == 1)
          {
        ?>
            <li><a href="?thread=admincp"><span class="glyphicon glyphicon-cog"></span></a></li>
        <?php
          }
        ?> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
          if ($_SESSION['id'] != 0)
          {
        ?>
            <li><a href="#">
              <div style="text-align: center; font-size: 20px;"><i class="fa fa-user"></i></div>
              <div style="text-align: center;"><?php echo $_SESSION['username']; ?></div>
            </a></li>
            <li><a href="?thread=logout">
              <div style="text-align: center; font-size: 20px;"><i class="fa fa-sign-out"></i></div>
              <div style="text-align: center;">Thoát</div>
            </a></li>
            <?php
              if ($_SESSION['role'] == 1)
              {
            ?>
                <div style="text-align: center; color: #fff;">
                  <a href="?thread=admincp" target="_blank" style="color: #fff;">Quản lý cửa hàng</a>
                </div>
            <?php
              }
            ?>
        <?php
          }
          else
          {
        ?>
            <li><a href="#" data-toggle="modal" data-target="#ModalRegister">
              <div style="text-align: center; font-size: 20px;"><i class="fa fa-pencil"></i></div>
              <div style="text-align: center;">Đăng ký</div>
            </a></li>
            <li><a href="#" data-toggle="modal" data-target="#ModalLogin">
              <div style="text-align: center; font-size: 20px;"><i class="fa fa-user"></i></div>
              <div style="text-align: center;">Đăng nhập</div>
            </a></li>
        <?php
          }
        ?>
        






        <!-- <?php
          if ($_SESSION['id'] != 0)
          {
        ?>
            <li><a href=""><span class="glyphicon glyphicon-user"></span> Xin chào: <?php echo $_SESSION['username']; ?></a></li>
            <li><a href="?thread=logout"><span class="glyphicon glyphicon-log-out"></span> Thoát</a></li>
        <?php
          }
          else
          {
        ?>
            <li><a href="#" data-toggle="modal" data-target="#ModalRegister"><span class="glyphicon glyphicon-user"></span> Đăng ký</a></li>
            <li><a href="#" data-toggle="modal" data-target="#ModalLogin"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
        <?php
          }
        ?>
         -->


      </ul>
    </div>
  </div>
</nav> 
</div>

<div id="ModalRegister" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Đăng ký thành viên</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="?thread=process_signin" method="POST" onsubmit="return CheckData(this)">
          <div class="form-group">
            <label class="control-label col-sm-3">Tên đăng nhập:</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="username" placeholder="Nhập tên đăng nhập" autofocus required> 
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3">Mật khẩu:</label>
            <div class="col-sm-9">
                <input class="form-control" type="password" name="password" placeholder="Nhập mật khẩu" required>  
            </div>
          </div>

           <div class="form-group">
            <label class="control-label col-sm-3">Nhập lại:</label>
            <div class="col-sm-9">
                <input class="form-control" type="password" name="re_password" placeholder="Nhập lại mật khẩu" required> 
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3">Họ và tên:</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="name" placeholder="Nhập họ và tên" required>  
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3">Số điện thoại:</label>
            <div class="col-sm-9">
                <input class="form-control" type="number" name="phone" placeholder="Nhập số điện thoại" pattern="\d+" required>  
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3">Email:</label>
            <div class="col-sm-9">
                <input class="form-control" type="email" name="email" placeholder="Nhập địa chỉ email" required>  
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-3">Địa chỉ:</label>
            <div class="col-sm-9">
                <textarea class="form-control" name="address" placeholder="Nhập địa chỉ" required></textarea> 
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <div class="col-sm-9">
                <button class="btn btn-primary" type="submit">Đăng ký</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>

<div id="ModalLogin" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content" >
      <div class="modal-body">
        <div class="login-form">
    <form action="?thread=process_login" method="post">
        <h2 class="text-center">Đăng nhập hệ thống</h2>   
        <div class="form-group">
          <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="username" placeholder="Nhập tên đăng nhập" required="required" autofocus>       
            </div>
        </div>
    <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" required="required">       
            </div>
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-danger login-btn btn-block">Đăng nhập</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Ghi nhớ tôi</label>
            <a href="#" class="pull-right" data-toggle="collapse" data-target="#forget">Quên mật khẩu?</a>
        </div>
        <div class="form-group">
                <div style="text-align: center; margin-top: 5px;">
                  <div id="forget" class="collapse" style="color: red; font-weight: bold;">
                    Mã đặt lại mật khẩu sẽ được cấp qua email của bạn. Vui lòng liên hệ SĐT: 034 891 3380 để được hỗ trợ.
                  </div>
                </div>
              </div>
    </form>
</div>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">
  function CheckData(form)
  {
    if (form.password.value.length < 6)
    {
      alert("Mật khẩu phải có ít nhất 6 ký tự!");
      return false;
    }

    if (form.password.value != form.re_password.value)
    {
      alert("Mật khẩu không trùng khớp!");
      return false;
    }

    if (form.phone.value.length < 10 || form.phone.value.length > 11)
    {
      alert("Số điện thoại không hợp lệ!");
      return false;
    }
    return true;
  }
</script>

<style type="text/css">
  .login-form {
    width: 100%;
  }
    .login-form form {        
      margin-bottom: 15px;
       
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .login-btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .input-group-addon .fa {
        font-size: 18px;
    }
    .login-btn {
        font-size: 15px;
        font-weight: bold;
    }
  .social-btn .btn {
    border: none;
        margin: 10px 3px 0;
        opacity: 1;
  }
    .social-btn .btn:hover {
        opacity: 0.9;
    }
  .social-btn .btn-primary {
        background: #507cc0;
    }
  .social-btn .btn-info {
    background: #64ccf1;
  }
  .social-btn .btn-danger {
    background: #df4930;
  }
    .or-seperator {
        margin-top: 20px;
        text-align: center;
        border-top: 1px solid #ccc;
    }
    .or-seperator i {
        padding: 0 10px;
        background: #f7f7f7;
        position: relative;
        top: -11px;
        z-index: 1;
    }   
</style>