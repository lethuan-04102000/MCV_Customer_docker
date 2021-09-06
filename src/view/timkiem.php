<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Kiếm thông tin khách hàng</title>
    <style>
table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
}
th, td {
  background-color: #96D4D4;
}
</style>
</head>
<body>

    <br><br>
    <div>
            <?php
                $conn = mysqli_connect('db', 'root', 'mypassword', 'manage_customer');
                if(isset($_POST['search'])){
                    $searchkey=$_POST['search'];
                     $sql = "SELECT * FROM customer WHERE email LIKE '%$searchkey%' or  numberphone LIKE '%$searchkey%' ";
                }else 
                {
                    $sql = "SELECT * FROM customer";
                    $searchkey = "" ;
                    
                }
                $result = mysqli_query($conn,$sql);


            ?>
            <form action="" method ="post">
                <h3>Nhập email và số điện thoại của khách hàng bạn muốn tìm kiếm</h3>
                <div>
                    <input type="text" name="search" placeholder="Nhập từ khóa cần tìm kiếm" value="<?php echo $searchkey; ?> ">
                </div>  
                <div>
                    <button class="btn">Tìm kiếm</button>
                </div>
            </form>
    </div>
    <table style="width:100%">
        <h2 class="center">thông tin của khách hàng</h2>
            <tr>
                <th>id</th>
                <th>fullname</th> 
                <th>mailadrees</th>
                <th>phone number</th> 
                <td>address</td>
                <th>date of birth</th>
            </tr>
            <?php while($row = mysqli_fetch_object($result)) {

            ?>
            <tr>
                    <td> <?php echo $row->id?></td>
                    <td> <?php echo $row->name?></td>
                    <td> <?php echo $row->email?></td>
                    <td> <?php echo $row->	numberphone?></td>
                    <td> <?php echo $row->	address?></td>
                    <td> <?php echo $row->dateofbirth?></td>
            </tr>
                <?php } ?>
    </table>



</body>
</html>