<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <style>
a .icon {
  width: 25px;
  text-align:center;
}
</style>
</head>
<body>
<h2>User</h2>
<a href="<?php echo URL; ?>/user/input" class="btn">Tambah User</a>
<table>
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>ALAMAT</th>
            <th>OPSI</th>
      </tr>
      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['user_id']; ?></td>
                  <td><?php echo $row['user_nama']; ?></td>
                  <td><?php echo $row['user_email']; ?></td>
                  <td><?php echo $row['user_password']; ?></td>
                  <td><?php echo $row['user_alamat']; ?></td>
                  <td>
                        <a href="<?php echo URL; ?>/user/edit/<?php echo $row['user_id']; ?>"><img class="icon" src="<?php echo AST; ?>/img/editing.png" alt=""></a>
                        <a href="<?php echo URL; ?>/user/delete/<?php echo $row['user_id']; ?>"><img class="icon" src="<?php echo AST; ?>/img/delete.png" alt=""></a>
                  </td>
            </tr>
      <?php } ?>
</table>
</body>
</html>