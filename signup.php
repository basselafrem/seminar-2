<?php
include_once 'fragments/header.php';
?>


<div class="contentt">
    <h2>Signup</h2>
    <form class="signup-form" action="register.php" method="POST">
        <input type="text" name="first" placeholder="First Name">
        <input type="text" name="last" placeholder="Last Name">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="uid" placeholder="User Name">
        <input type="password" name="pwd" placeholder="Password">
        <button class='btn' type="submit" name="submitSignup">Signup</button> 
    </form>
    
</div>



<?php
include_once 'fragments/footer.php';
?>

