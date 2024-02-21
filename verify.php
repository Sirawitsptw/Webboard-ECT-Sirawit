<?php
 session_start();
 if(isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>


    <?php
    $login = $_POST['login'];
    $pass = $_POST['password'];
        if($login == 'admin' && $pass == 'ad1234'){
            $_SESSION["username"] = "admin";
            $_SESSION["role"] = "a";
            $_SESSION["id"] = session_id();
            header("location:index.php");
            die();
            //echo "ยินดีต้อนรับคุณ $login <br>";
        }
        else if($login == 'member' && $pass == 'mem1234'){
            $_SESSION["username"] = "member";
            $_SESSION["role"] = "m";
            $_SESSION["id"] = session_id();
            header("location:index.php");
            die();
            //echo "ยินดีต้อนรับคุณ $login <br>";
        }
        else{
            $_SESSION['error'] = 'error';
            header("location:login.php");
            die();
            //echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
        }
    ?>
</body>
</html>