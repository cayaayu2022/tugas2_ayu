<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
        p{
            font-weight:bold;
        }
        form{
            margin-left:100px;
            border-radius:50px;
            padding-left:200px;
            margin-bottom:100px;
        }
        input{
            height:25px;
            width: 400px;
            border:1px solid gray;
            border-radius:3px;
            padding-left:10px;
        }
        text-area{
            border:1px solid gray;
            border-radius:3px;
        }
        .btn_update{
            margin-top:30px;
            border:0px;
            height:35px;
            border-radius:50px;
            background-color:#fbc531;
            font-weight: bold;
        }
        p{
            font-size:15px;
            font-family:;
        }
        select{
            display: block;
            height:25px;
            width: 410px;
            border:1px solid gray;
            border-radius:3px;
            padding-left:10px;
        }
    </style>
</head>
<body>
<h3>Edit pelanggan</h3>
<form action="<?php echo URL; ?>/pelanggan/update" method="post">
    <input type="hidden" name="pel_id"value="<?php echo $data['row']['pel_id']; ?>">
            <p>No Pelanggan</p>
            <td><input type="text" name="pel_no" value="<?php echo $data['row']['pel_no']; ?>" required>
            <p>Nama Pelanggan</p>
            <td><input type="text" name="pel_nama"value="<?php echo $data['row']['pel_nama']; ?>" required>
            <p>Alamat</p>
            <textarea style="padding-left:10px;" name="pel_alamat" id="" cols="53" rows="5" required><?php echo $data['row']['pel_alamat']; ?></textarea>
            <p>No Hp</p>
            <input type="text" name="pel_hp" value="<?php echo $data['row']['pel_hp']; ?>" required>
            <p>Ktp Pelanggan</p>
            <input type="text" name="pel_ktp" value="<?php echo $data['row']['pel_ktp']; ?>" required>
            <p>Seri pelanggan</p>
            <td><input type="text" name="pel_seri" value="<?php echo $data['row']['pel_seri']; ?>" required>
            <p>Meteran pelanggan</p>
            <input type="text" name="pel_meteran" value="<?php echo $data['row']['pel_meteran']; ?>"required>
            <p>Pelanggan Aktif</p>
            <input type="text" name="pel_aktif" value="<?php echo $data['row']['pel_aktif']; ?>" required>
            <p>Nama Golongan</p>
            <select name="pel_id_gol" id=""required>
            <?php foreach ($data['data_gol'] as $row) { ?>
                <option required value="<?= $row['gol_id'] ?>"><?php echo $row['gol_nama']; ?></option>
            <?php } ?>
            </select>
            <p>Nama User</p>
            <select name="pel_id_user" id="" required>
        <?php foreach ($data['data_user'] as $row) { ?>
            <option  required value="<?= $row['user_id'] ?>"><?php echo $row['user_nama']; ?></option>
        <?php } ?>
            </select>
            <input type="submit" name="btn_update" class="btn_update" value="Update">
</form>
</body>
</html>