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
            font-weight:bold;
        }
        p{
            font-size:15px;
            font-family:;
        }
    </style>
</head>
<body>
<h3>Edit User</h3>
<form action="<?php echo URL; ?>/user/update" method="post">
    <input type="hidden" name="user_id"value="<?php echo $data['row']['user_id']; ?>" >
            <p>Nama User</p>
            <input type="text" name="user_nama"value="<?php echo $data['row']['user_nama']; ?>" required>
            <p>Password</p>
            <input type="text" name="user_password"value="<?php echo $data['row']['user_password']; ?>"required>
            <p>Alamat</p>
            <textarea  style="padding-left:10px;" name="user_alamat" id="" cols="53" rows="5" required><?php echo $data['row']['user_alamat']; ?></textarea>
            <p>No Hp</p>
            <input type="text" name="user_hp" value="<?php echo $data['row']['user_hp']; ?>" required>
            <p>Email</p>
            <input type="text" name="user_email"value="<?php echo $data['row']['user_email']; ?>" required>
            <p>Pos</p>
            <input type="text" name="user_pos"value="<?php echo $data['row']['user_pos']; ?>"required>
            <p>Role</p>
            <input type="text" name="user_role"value="<?php echo $data['row']['user_role']; ?>"required>
            <p>User Aktif</p>
            <input type="text"name="user_aktif"value="<?php echo $data['row']['user_aktif']; ?>"required>
            <td><input type="submit" name="btn_update" class="btn_update" value="Update"></td>
</form>
</body>
</html>