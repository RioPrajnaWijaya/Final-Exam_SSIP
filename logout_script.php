<?php
    session_start();
    session_unset(); 
    session_destroy(); 

    // set cookie dengan id dan value yang kosong('')
    // cookie will be reset after user log out
    setcookie('id', '', time() - 3600);
    setcookie('key', '', time() - 3600);
    
    header('location:index.php');
?>