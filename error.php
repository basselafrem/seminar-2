<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
 
</head>
<body>
<div class="form">
    <h1>Error</h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        echo "Somthing went wrong";
        //header( "location: index.php" );
    endif;
    ?>
    </p>     
    <a href="index.php"><button />Home</button></a>
</div>
</body>
</html>

