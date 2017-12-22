<?php



function pancakesComments($dbh, $db){
    if(isset($_SESSION['u_id'])){
}
    $sql = "SELECT * FROM $db";
    $result = mysqli_query($dbh,$sql);
        
    while($row = $result->fetch_assoc()){
            echo "<div class='commentBox'><h3>";
            echo $row['uid']."</h3><br><p>";
            echo $row['date']."<br>";
            echo  nl2br($row['message']);
            if($_SESSION['u_uid'] == $row['uid']){
            echo "<form method='POST' action='deleteComment.php'>";
            echo "<input type='hidden' name='cid' value='".$row['cid']."'>";
            echo "<button class='btn' name='pancakesDelete'>Delete</button>";
            echo "</form>";
            } 
            echo" </p></div>";    
    }
}
function meatballsComments($dbh, $db){
    if(isset($_SESSION['u_id'])){
}
    $sql = "SELECT * FROM $db";
    $result = mysqli_query($dbh,$sql);
        
    while($row = $result->fetch_assoc()){
            echo "<div class='commentBox'><h3>";
            echo $row['uid']."</h3><br><p>";
            echo $row['date']."<br>";
            echo  nl2br($row['message']);
            if($_SESSION['u_uid'] == $row['uid']){
            echo "<form method='POST' action='deleteComment.php'>";
            echo "<input type='hidden' name='cid' value='".$row['cid']."'>";
            echo "<button class='btn' name='meatballsDelete'>Delete</button>";
            echo "</form>";
            } 
            echo" </p></div>";    
    }
}