<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="favicon.png">
	<title>2TAP PHONE - Điện thoại, Phụ kiện chính hãng giá tốt nhất</title>

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/shop.css" type="text/css" media="screen" property="" />
  	<link href="css/style7.css" rel="stylesheet" type="text/css" media="all" />
  	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
  	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
      rel="stylesheet">
  	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

	<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />

	<meta name="keyword" content="dien thoai, phu kien, tablet, gia tot nhat, ban le dien thoai, samsung, apple, sony, nokia, oppo, smartphone, điện thoại, cửa hàng bán điện thoại">
	<meta name="author" content="Vo Hong Linh An, Nguyen Trong Minh Hong Phuoc, Bui Trung Tinh, Nguyen Duc Thy Tuan">
	<meta name="copyright" content="2tapshop.tk">
	<meta name="description" content="Cửa hàng bán điện thoại và phụ kiện hàng đầu tại Tp. Hồ Chí Minh" />

	<link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
	<link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

	<script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
</head>
<body>
	<?php
		session_start();
  		header('Content-Type: text/html; charset=UTF-8');
		require_once("core/mysql.php");
	?>

	<div class="container" style="width: 100%;">
		<div class="row" style="margin-bottom: 90px;">
			<?php
				include("lib/header.php");
			?>	
		</div>
		<div style="clear: both;"></div>

		<div class="row">
			<?php
				include("lib/content.php");
			?>	
		</div>
		<div style="clear: both;"></div>

		<div class="row">
			<?php
				include("lib/footer.php");
			?>
		</div>
		<div style="clear: both;"></div>
	</div>
	
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript">
  $(document).ready(function ()
  {
    //$("#myModalAds").modal('show'); 
  })  
</script>

	<script type="text/javascript">(function(t,e){var r=function(t){try{var r=e.head||e.getElementsByTagName("head")[0];a=e.createElement("script");a.setAttribute("type","text/javascript");a.setAttribute("src",t);r.appendChild(a);}catch(t){}};t.CollectId = "5bac810e9e54b04c7a35af04";r("https://collectcdn.com/launcher.js");})(window,document);</script>

	<script> window._peq = window._peq || []; window._peq.push(["init"]); </script>
	<script src="https://clientcdn.pushengage.com/core/f3a6fd4e8a1a6cb63c96063ed7f619e9.js" async></script>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0&appId=378364479306045&autoLogAppEvents=1';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<script type="application/x-javascript">
	    addEventListener("load", function () {
	      setTimeout(hideURLbar, 0);
	    }, false);

	    function hideURLbar() {
	      window.scrollTo(0, 1);
	    }
  	</script>

  	<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
    
    <script>
     $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>
</html>