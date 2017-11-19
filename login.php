<?php
session_start();
ob_start();
?>


<?php
if(isset($_POST['submitLogin'])){
    include_once 'databases/dbh.php' ;
  
    
    $uid = mysqli_real_escape_string($conn, $_POST['u_uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['u_pwd']);
    
    //Error handlers
    //Check if input are empty
    if(empty($uid) || empty($pwd)){
        header("Location: index.php?login=emptyfields");
        exit();
        
    }else{
          $sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid' AND user_pwd='$pwd'";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);
          
       //If numbers of rows retrived is less than 1, no user found
        if($resultCheck < 1){
            
           header("Location: error.php?error=nouserfound");  
           exit();
        
        }else{ 
            if($row = mysqli_fetch_assoc($result)){
                //dehashing the password 
                $hashedPwdCheck = password_verify($pwd,$row['user_pwd']);
            if($hashedPwdCheck == false){
                header("Location: error.php?password=wrong");
                exit();
            }else if($hashedPwdCheck === true){
               
                $_SESSION['u_id'] = $row['user_id'];
                $_SESSION['u_first'] = $row['user_first'];
                $_SESSION['u_last'] = $row['user_last'];
                $_SESSION['u_email'] = $row['user_email'];
                $_SESSION['u_uid'] = $row['user_uid'];
               
                header("Location: welcome.php");
                exit();
                   
              
            }
            }
        }
    
    }   
    }else{
        header("Location: index.php?login=error");
        exit();
    }
