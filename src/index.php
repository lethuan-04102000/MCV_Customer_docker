<?php
require "model/DBConnection.php";
require "model/CustomerDB.php";
require "model/Customer.php";
require "controller/CustomerController.php";


use \Controller\CustomerController;
?>
<?php 
include './model/config.php';

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Thêm mới khách hàng</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<div class="container">
 
    <img src="./upload/thuan.jpg" alt="">
    <a href="updateuser.php">Cập nhật ảnh đại diện</a>
    <?php echo 
    "<h1>  Admin " . $_SESSION['username'] .   " </h1>";
    
    ?>
    <a href="logout.php">Đăng xuất </a> 
    
  <div class="navbar navbar-default">
      <a class="navbar-brand" href="index.php">Trang chủ</a>
  </div>

    <div class= "timkiem">
        <button class="btn"><a href="./view/timkiem.php">Tìm Kiếm Khách Hàng</a></button>
        <button class="btn"><a href="./view/guikhuyenmai.php">Gửi Thông Tin Khuyến Mãi</a></button>
    </div>
  <?php
  $controller = new CustomerController();
  $page = isset($_REQUEST['page'])? $_REQUEST['page'] : NULL;
  switch ($page){
    case 'add':
        $controller->add();
        break;
    case 'delete':
        $controller->delete();
        break;
    case 'edit':
        $controller->update();
        break;
    case 'seachcusotmer':
        $controller->search();
        break;
    default:
        $controller->index();
        break;
  }
  ?>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>