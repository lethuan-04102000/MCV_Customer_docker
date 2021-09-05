<?php
if(isset($message)){
  echo "<p class='alert-info'>$message</p>";
}
?>

<div class="col-12 col-md-12">
  <div class="row">
      <div class="col-12">
          <h1>Thêm mới khách hàng</h1>
      </div>
      <div class="col-12">
          <form method="post" enctype="multipart/form-data">
              <div class="form-group">
                  <label>Tên </label>
                  <input type="text" class="form-control" name="name"  placeholder="Nhập tên" required>
              </div>
              <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username" placeholder="Nhập username" required>
              </div>
              <div class="form-group">
                  <label>email</label>
                  <input type="email" class="form-control" name="email" placeholder="Nhập mail" required>
              </div>
              <div class="form-group">
                  <label>password</label>
                  <input type="password" class="form-control" name="password" placeholder="Nhập password" required>
              </div>
              <div class="form-group">
                  <label>avatar</label>
                  <input type="file" class="form-control" name="avatar" placeholder="chọn avatar" required>
              </div>
              <button type="submit" class="btn btn-primary">Thêm mới</button>
              <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
          </form>       
     </div>   
   </div> 
</div> 