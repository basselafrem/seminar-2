<?php
session_start();
include 'databases/dbh.php';
include 'databases/comdbh1.php';
include 'databases/comdbh2.php';



    if(isset($_POST['pancakesSubmit'])){
        $uid = $_SESSION['u_uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        
        $sql1 = "INSERT INTO pancakescomments (uid, date, message) VALUES ('$uid','$date', '$message')";
        mysqli_query($db2, $sql1);
        header('Location: pancakesrecipe.php');
      
    }
    if(isset($_POST['meatballsSubmit'])){
        $uid = $_SESSION['u_uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        
        $sql1 = "INSERT INTO meatballscomments (uid, date, message) VALUES ('$uid','$date', '$message')";
        mysqli_query($db1, $sql1);
        header('Location: meatballsrecipe.php');
    }


