<h2>Cập nhật thông tin khách hàng</h2>
<form method="post" action="./index.php?page=edit">
  <input type="hidden" name="id" value="<?php echo $customer->id; ?>"/>
  <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" value="<?php echo $customer->name; ?>" class="form-control"/>
  </div>
  <div class="form-group">
      <label>Email</label>
      <textarea name="email" class="form-control"><?php echo $customer->email; ?></textarea>
  </div>
  <div class="form-group">
      <label>Số điện thoại</label>
      <textarea name="numberphone" class="form-control"><?php echo $customer->numberphone; ?></textarea>
  </div>

  <div class="form-group">
      <label>Address</label>
      <textarea name="address" class="form-control"><?php echo $customer->address; ?></textarea>
  </div>
  <div class="form-group">
      <label>ngày sinh</label>
      <textarea name="dateofbirth" class="form-control"><?php echo $customer->dateofbirth; ?></textarea>
  </div>
  <div class="form-group">
      <input type="submit" value="Update" class="btn btn-primary"/>
      <a href="index.php" class="btn btn-default">Cancel</a>
  </div>
</form>