<?php
include_once 'fragments/header.php';
?>


<div >
   
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        echo "Somthing went wrong";
       
    endif;
    ?>
    </p>     
    <a href="index.php"><button class="btn">Home</button></a>
</div>

<?php
include_once 'fragments/footer.php';
?>

