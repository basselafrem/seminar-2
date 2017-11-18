<?php

include 'fragments/header.php';
?>
<div class="form">
    <h1>Error</h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        echo "Welcome! You are logged in.";
        //header( "location: index.php" );
    endif;
    ?>
    </p>     
    <a href="index.php"><button />Home</button></a>
</div>

<?php
include_once 'fragments/footer.php';
?>

