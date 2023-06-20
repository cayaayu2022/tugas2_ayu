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
        .btn_simpan{
            margin-top:30px;
            border:0px;
            height:35px;
            border-radius:50px;
            background-color:#1A6ED8;
            color:white;
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
        .radio{
            height:15px;
            width: 15px;
            display: inline-block;
            border:1px solid gray;
            border-radius:3px;
            padding-left:10px;
        }
    </style>
</head>
<body>
<h3>Tambah Pelanggan</h3>
<form action="<?php echo URL; ?>/pelanggan/simpan" method="post">
            <p>No Pelanggan</p>
            <input type="text" name="pel_no" required>
            <p>Nama Pelanggan</p>
            <input type="text" name="pel_nama" required>
            <p>Alamat</p>
            <textarea style="padding-left:10px;" name="pel_alamat" id="" cols="53" rows="5" required></textarea>
            <p>No Hp</p>
            <input type="text" name="pel_hp" required>
            <p>Ktp Pelanggan</p>
            <input type="text" name="pel_ktp" required>
            <p>Seri Pelanggan</p>
            <input type="text" name="pel_seri" required>
            <p>Meteran Pelanggan</p>
            <input type="text" name="pel_meteran" required>
            <p>Pelanggan Aktif</p>
            <input class="radio" type="radio" name="pel_aktif" value="Y" required>Ya
            <input class="radio" type="radio" name="pel_aktif" value="N" required>Tidak
            <p>Nama Golongan</p>
            <select name="pel_id_gol" id="" required>
            <option value="">- Pilih -</option>
            <?php foreach ($data['data_gol'] as $row) { ?>
                <option required value="<?= $row['gol_id'] ?>"><?php echo $row['gol_nama']; ?></option>
            <?php } ?>
            </select>
            <p>Nama user</p>
            <select name="pel_id_user" id="" required>
                <option value="">- Pilih -</option>
        <?php foreach ($data['data_user'] as $row) { ?>
            <option required value="<?= $row['user_id'] ?>"><?php echo $row['user_nama']; ?></option>
        <?php } ?>
            </select>
            <input type="submit" class="btn_simpan" name="btn_simpan" value="Simpan">
</form>
</body>
</html>