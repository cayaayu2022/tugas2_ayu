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
    </style>
</head>
<body>
<h3>Tambah Golongan</h3>
<form action="<?php echo URL; ?>/golongan/simpan" method="post">
            <p>Kode Golongan</p>
            <input type="text" name="gol_kode" required>
            <p>Nama Golongan</p>
            <input type="text" name="gol_nama" required>
            <input type="submit" name="btn_simpan" class="btn_simpan" value="Simpan">
</form>
</body>
</html>