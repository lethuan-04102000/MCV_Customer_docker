<h2>Danh sách khách hàng</h2>
<a href="./user.php?page=adduser">Thêm mới</a>
<table class="table">
  <thead>
  <tr>
      <th>STT</th>
      <th>Name</th>
      <th>username</th>
      <th>Email</th>
      <th>avatar</th>
  </tr>
  </thead>
  <tbody>
  <?php foreach ($users as $key => $user): ?>
  <tr>
      <td><?php echo ++$key ?></td>
      <td><?php echo $user->name ?></td>
      <td><?php echo $user->username ?></td>
      <td><?php echo $user->email	 ?></td>
      <td><?php echo $user->avatar	?></td>

      <td> <a href="./user.php?page=deleteuser&id=<?php echo $user->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
      <td> <a href="./user.php?page=edituser&id=<?php echo $user->id; ?>" class="btn btn-sm">Update</a></td>
  <?php endforeach; ?>
  </tbody>
</table>