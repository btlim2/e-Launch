<?php
 session_start();
 if(isset($_SESSION['username'])){
    //点击“Log Out”,则转到logOut页面进行注销
    //echo '<a href="logOut.php"> Log Out('.$_SESSION['username'].')</a>';
    //echo '<button> Log Out('.$_SESSION['username'].')</button>';
    $message = 'Logou Successful!';
    echo "<script type='text/javascript'> alert('$message') </script>";
    session_destroy();

}
?>