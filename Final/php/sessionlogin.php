<?php
session_start();
if(isset($_SESSION['user_id'])){

    //$message = $_SESSION['user_id'];
    $message = 'Login Successful!';
    echo "<script type='text/javascript'> alert('$message') </script>";
}

?>