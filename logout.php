<?php


if(isset($_POST['submitLogout'])){
    session_start();
    session_unset();
    session_destroy();
    header("location: index.php");
}
   
