<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <h1 style = "text-align: center;">Webboard KakKak</h1>
    <hr>
    <div style="text-align: center;">
    </div>
    <br>
    <div style="text-align: center;">
    <?php
    $login = $_POST['login'];
    $pass = $_POST['password'];
        if($login == 'admin' && $pass == 'ad1234'){
            echo "ยินดีต้อนรับ ADMIN";
        }
        else if($login == 'member' && $pass == 'mem1234'){
            echo "ยินดีต้อนรับ MEMBER";
        }
        else{
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
        }
    ?>
    <p style = "text-align: center;"><a href = "index.php" >กลับไปหน้าหลัก</a></p>
    </div>
</body>
</html>