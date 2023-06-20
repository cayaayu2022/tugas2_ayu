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
    </style>
</head>
<body>
<h3>Tambah User</h3>
<form action="<?php echo URL; ?>/user/simpan" method="post">
            <p>Nama User</p>
            <input type="text" name="user_nama" required>
            <p>Password</p>
            <input type="password" name="user_password" required>
            <p>Alamat</p>
            <textarea style="padding-left:10px;" name="user_alamat" id="" cols="53" rows="5" required></textarea>
            <p>No Hp</p>
            <input type="number" name="user_hp" required>
            <p>Email</p>
            <input type="text" name="user_email" required>
            <p>Pos</p>
            <input type="text" name="user_pos" required>
            <p>Role</p>
            <input type="text" name="user_role" required>
            <p>User Aktif</p>
            <input type="text"name="user_aktif" required>
            <input type="submit" name="btn_simpan" class="btn_simpan" value="Simpan">
</form>
</body>
</html>