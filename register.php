<?php
ob_start();

if(null !==filter_input(INPUT_POST,'submitSignup')){
    include 'databases/dbh.php';
    
    $first = mysqli_real_escape_string($conn,filter_input(INPUT_POST,'first'));
    $last = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'last'));
    $email = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'email'));
    $uid = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'uid'));
    $pwd = mysqli_real_escape_string($conn, filter_input(INPUT_POST,'pwd'));
    
    //Error handlers
    //Check for empty fields
    if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
        
        header("Location: error.php?signup=empty");
        
        
   }else{
        //Check if input charachters are valid
            if(!preg_match("/^[a-zA-Z]*$/", $first) || preg_match("/^[a-z][A-Z]*$/", $last)){
        
                    header("Location: error.php?signup=invalid");
                    
            }else{
                //check if email is valid
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    header("Location: error.php?signup=emailinvalid");
                    
          
                }else{
                    $sql = "SELECT * FROM users WHERE user_uid='$uid'";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    
                    if($resultCheck > 0){
                        header("Location: error.php?sipgnup=usertaken");
                        
         
                    }
                    else{
                        //hashing the password
                        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                        //Insert the user into the database
                        $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
                        mysqli_query($conn,$sql);
                        mysqli_close($conn);
                        header("Location: signupLogin.php? signup=success");
                        
                    }
                }
            }
                    
    }
    
    
    
    
}else{
    header("Location: error.php?error=tryagain");
    
}
