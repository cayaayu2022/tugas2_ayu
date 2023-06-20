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
        p{
            font-size:15px;
            font-family:;
        }
    </style>
</head>
<body>
<h3>Edit Golongan</h3>
<form action="<?php echo URL; ?>/golongan/update" method="post">
            <input type="hidden" name="gol_id"value="<?php echo $data['row']['gol_id']; ?>">
            <p>Kode Golongan</p>
            <input type="text" name="gol_kode"value="<?php echo $data['row']['gol_kode']; ?>" required>
            <p>Nama Golongan</p>
            <input type="text" name="gol_nama"value="<?php echo $data['row']['gol_nama']; ?>" required>
            <input type="submit" name="btn_update" class="btn_update" value="Update">
</form>
</body>
</html>