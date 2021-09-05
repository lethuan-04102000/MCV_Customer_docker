<h2>Cập nhật thông tin khách hàng</h2>
<form method="post" action="./index.php?page=edituser">
  <input type="hidden" name="id" value="<?php echo $user->id; ?>"/>
  <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" value="<?php echo $user->name; ?>" class="form-control"/>
  </div>
  <div class="form-group">
      <label>UserName</label>
      <textarea name="username" class="form-control"><?php echo $user->username; ?></textarea>
  </div>
  <div class="form-group">
      <label>Email</label>
      <textarea name="email" class="form-control"><?php echo $user->email; ?></textarea>
  </div>
  <div class="form-group">
      <label>Password</label>
      <textarea name="password" class="form-control"><?php echo $user->password; ?></textarea>
  </div>
  <div class="form-group">
      <label>Avatar</label>
      <textarea name="avatar" class="form-control"><?php echo $user->avatar; ?></textarea>
  </div>
  <div class="form-group">
      <input type="submit" value="Update" class="btn btn-primary"/>
      <a href="index.php" class="btn btn-default">Cancel</a>
  </div>
</form>