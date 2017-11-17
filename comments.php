<?php

function setComments($conn, $db){
    if(isset($_POST['commentSubmit'])){
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        
        $sql1 = "INSERT INTO $db (uid, date, message) VALUES ('$uid','$date', '$message')";
         mysqli_query($conn, $sql1);
    }

}
function getComments($conn, $db){
    $sql = "SELECT * FROM $db";
    $result = mysqli_query($conn,$sql);
        
    while($row = $result->fetch_assoc()){
        echo "<div><p>";
            echo $row['uid']."<br>";
            echo $row['date']."<br>";
            echo nl2br($row['message']);
       echo "</p>
                <form method='POST' action='".deletComments($conn,$db)."'>
                    <input type='hidden' name='cid' value='".$row['cid']."'>
                    <button name='commentDelete'>Delete</button>
                </form>
              </div>";
    }
}


function deletComments($conn, $db){
    if(isset($_POST['commentDelete'])){
        $cid = $_POST['cid'];
        
        $sql = "DELETE FROM $db WHERE cid='$cid'";
        $result = mysqli_query($conn,$sql);
        header('Location:' .$_SERVER['PHP_SELF']);
        
    }
}
function getLogin($conn){
    
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    
    $sql = "SELECT * FROM users WHERE uid='$uid' AND pwd='$pwd'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)> 0){
        $_SESSION['id'] = $row['id'];
        header("Location: welcome.php");
        exit();
    }
else{
    header("Location : error.php");
    exit();
}
}
function userLogout(){
    if(isset($_POST['submitLogout'])){
        session_start();
        session_destroy();
        header("Location : index.php");
        exit();
    }
}