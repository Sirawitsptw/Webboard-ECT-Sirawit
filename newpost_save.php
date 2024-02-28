<?php
    session_start();
    $topic = $_POST['topic'];
    $comment = $_POST['comment'];
    $cate = $_POST['category'];
    $user = $_SESSION['user_id'];

    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
    $sql = "INSERT INTO post (title , content , post_date , cat_id , user_id) 
            VALUES ('$topic' , '$comment' , NOW() , '$cate' , '$user')";
    $conn->exec($sql);
    $conn = null;
    header("location:index.php");
    die();
?>