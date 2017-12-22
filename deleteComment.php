<?php
include  'databases/comdbh1.php';
include  'databases/comdbh2.php';

//function deletComments($conn, $db){
    if(isset($_POST['pancakesDelete'])){
        $cid = $_POST['cid'];
        
        $sql = "DELETE FROM pancakescomments WHERE cid='$cid'";
        $result = mysqli_query($db2,$sql);
        header('Location: pancakesrecipe.php');
        
    }

 if(isset($_POST['meatballsDelete'])){
        $cid = $_POST['cid'];
        
        $sql = "DELETE FROM meatballscomments WHERE cid='$cid'";
        $result = mysqli_query($db1,$sql);
        header('Location: meatballsrecipe.php');
        
    }
