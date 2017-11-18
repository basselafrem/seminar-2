<?php
session_start();

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
    if(isset($_SESSION['u_id'])){
}
    $sql = "SELECT * FROM $db";
    $result = mysqli_query($conn,$sql);
        
    while($row = $result->fetch_assoc()){
           echo "<div>";
            echo ($row['uid']."<br>");
            echo $row['date']."<br>";
            echo nl2br($row['message']);
            if($_SESSION['u_id'] == $row['user_id']){
           echo "<form method='POST' action='".deletComments($conn,$db)."'>";
              echo "<input type='hidden' name='cid' value='".$row['cid']."'>";
                 echo "<button  name='commentDelete'>Delete</button>";
                echo "</form>";
              
             echo" </div>";
            }
        
            
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

