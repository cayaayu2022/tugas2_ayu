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
<h2>Pelanggan</h2>
<a href="<?php echo URL; ?>/pelanggan/input" class="btn">Tambah Pelanggan</a>
<table>
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NO HP</th>
            <th>KTP PELANGGAN</th>
            <th>ID USERS</th>
            <th>ID GOLONGAN</th>
            <th>OPSI</th>
      </tr>
      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['pel_no']; ?></td>
                  <td><?php echo $row['pel_nama']; ?></td>
                  <td><?php echo $row['pel_alamat']; ?></td>
                  <td><?php echo $row['pel_hp']; ?></td>
                  <td><?php echo $row['pel_ktp']; ?></td>
                  <td><?php echo $row['pel_id_user']; ?></td>
                  <td><?php echo $row['pel_id_gol']; ?></td>
                        <td>
                              <a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>"><img class="icon" src="<?php echo AST; ?>/img/editing.png" alt=""></a>
                              <a href="<?php echo URL; ?>/pelanggan/delete/<?php echo $row['pel_id']; ?>"><img class="icon" src="<?php echo AST; ?>/img/delete.png" alt=""></a>
                        </td>
            </tr>
      <?php } ?>
</table>
</body>
</html>