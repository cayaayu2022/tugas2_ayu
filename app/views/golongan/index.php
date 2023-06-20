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
<h2>Golongan</h2>
<a href="<?php echo URL; ?>/golongan/input" class="btn">Tambah Golongan</a>
<table>
      <tr>
            <th>NO</th>
            <th>KODE GOLONGAN</th>
            <th>NAMA GOLONGAN</th>
            <th>OPSI</th>
      </tr>
      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['gol_id']; ?></td>
                  <td><?php echo $row['gol_kode']; ?></td>
                  <td><?php echo $row['gol_nama']; ?></td>
                  <td>
                        <a href="<?php echo URL; ?>/Golongan/edit/<?php echo $row['gol_id']; ?>"><img class="icon" src="<?php echo AST; ?>/img/editing.png" alt=""></a>
                        <a href="<?php echo URL; ?>/Golongan/delete/<?php echo $row['gol_id']; ?>"><img class="icon" src="<?php echo AST; ?>/img/delete.png" alt=""></a>
                  </td>
            </tr>
      <?php } ?>
</table>
</body>
</html>