<?php
    session_start();
    include "./../../../assets/server/connection.php";

    $id = $_SESSION["id"];
    $listID = $_GET["listID"];

    $sqlListDone = "UPDATE list SET isDone='Yes' WHERE id='$id' AND listID='$listID'";
    $result = mysqli_query($con, $sqlListDone);

    if($result){
        mysqli_close($con);
        header("Location: ./../../list.php?addList=done");
        exit();
    }
?>