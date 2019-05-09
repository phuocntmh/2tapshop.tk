<?php
  if(!isset($_GET["thread"]))
  {
    $_GET["thread"]='homepage';
  }
  
  switch($_GET["thread"])
  {
    case "homepage":
    {
      include_once("lib/homepage.php");
      break;
    }

    case "cell-phone":
    {
      include_once("lib/cell-phone.php");
      break;
    }

    case "tablet":
    {
      include_once("lib/tablet.php");
      break;
    }

    case "accessories":
    {
      include_once("lib/accessories.php");
      break;
    }

    case "return-label":
    {
      include_once("lib/return-label.php");
      break;
    }

    case "promotion":
    {
      include_once("lib/promotion.php");
      break;
    }

    case "contact":
    {
      include_once("lib/contact.php");
      break;
    }
      
      case "process_login":
      {
        include_once("core/process_login.php");
        break;
      }

      case "logout":
      {
        include_once("core/logout.php");
        break;
      }

      case "process_signin":
      {
        include_once("core/process_signin.php");
        break;
      }

      case "send-subscribes":
      {
        include_once("core/send-subscribes.php");
        break;
      }

      case "send-feedbacks":
      {
        include_once("core/send-feedbacks.php");
        break;
      }

      case "search":
      {
        include_once("core/search.php");
        break;
      }

      case "view_detail":
      {
        include_once("lib/view_detail.php");
        break;
      }

      case "add-carts":
      {
        include_once("core/add-carts.php");
        break;
      }

      case "carts":
      {
        include_once("lib/carts.php");
        break;
      }

      case "delete-carts":
      {
        include_once("core/delete-carts.php");
        break;
      }

      case "delete-all-carts":
      {
        include_once("core/delete-all-carts.php");
        break;
      }

      /*admin */

      case "admincp":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/lib/admincp.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "users-list":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/lib/users-list.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "admin-list":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/lib/admin-list.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "category-list":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/lib/category-list.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "products-list":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/lib/products-list.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "carts-list":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/lib/carts-list.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "feedback-list":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/lib/feedback-list.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "subscribes-list":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/lib/subscribes-list.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "process-add-users":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/core/process-add-users.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "delete-users":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/core/delete-users.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "view-detail-users":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/lib/view-detail-users.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "edit-users":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/lib/edit-users.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "process-edit-users":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/core/process-edit-users.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "process-add-admin":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/core/process-add-admin.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "view-detail-admin":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/lib/view-detail-admin.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "edit-admin":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/lib/edit-admin.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "process-edit-admin":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/core/process-edit-admin.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "delete-admin":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/core/delete-admin.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "process-add-categories":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/core/process-add-categories.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "delete-categories":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/core/delete-categories.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "edit-categories":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/lib/edit-categories.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "process-edit-categories":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/core/process-edit-categories.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "edit-subscribes":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/lib/edit-subscribes.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "delete-subscribes":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/core/delete-subscribes.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "view-detail-feedbacks":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/lib/view-detail-feedbacks.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "edit-feedbacks":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/lib/edit-feedbacks.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "delete-feedbacks":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/core/delete-feedbacks.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "on-ship":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/core/on-ship.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "finished":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/core/finished.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "delete-carts-ad":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/core/delete-carts.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "view-detail-carts-ad":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/lib/view-detail-carts.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "new-products":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/lib/new-products.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "process-add-products":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/core/process-add-products.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "view-detail-products":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/lib/view-detail-products.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "edit-products":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/lib/edit-products.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "process-edit-products":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/core/process-edit-products.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }

      case "delete-products":
      {
        if ($_SESSION['role'] == 1)
        {
          include_once("admin/core/delete-products.php");  
        }
        else
        {
          echo "<script language='JavaScript'> alert('Bạn không có quyền truy cập trang này!'); </script>";
          echo"<meta http-equiv='refresh' content='0; index.php?thread=homepage'>";
        }
        break;
      }
  }
?>