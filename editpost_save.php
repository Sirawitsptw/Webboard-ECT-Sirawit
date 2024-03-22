<?php
    session_start();
    $topic = $_GET['topic'];    
    $comm = $_GET['comment'];

    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
    
    $_SESSION['add_edit'] = "success";
    $sql = "SELECT * FROM post";
        foreach($conn->query($sql) as $row){
            $sql = "UPDATE post SET title = '$topic' , content = '$comm' WHERE post.id = $row[0]";
            $conn->exec($sql);
            header("location:editpost.php?id=$row[0]");
            die();
        }
    $conn = null;
?>