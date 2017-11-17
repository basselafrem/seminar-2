<?php

include 'header.php';
?>
<div class="form">
    <h1>Error</h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        echo "<h3>Thank you for signing up</h3>";
       echo "<h3>Please log in</h3>";
        //header( "location: index.php" );
    endif;
    ?>
    </p>     
    <a href="index.php"><button />Home</button></a>
</div>

<?php
include_once 'footer.php';
?>

