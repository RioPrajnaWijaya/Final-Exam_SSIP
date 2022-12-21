<?php
    require ("includes/config.php");
    session_start();

    // check cookie 
    if( isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        // get email from id 
        $result = mysqli_query($con, "SELECT email_id FROM users WHERE id = $id");
        $row = mysqli_fetch_assoc($result);

        // check cookie and email 
        if( $key === hash('sha256', $row['email_id']) ) {
            $_SESSION['login'] = true;
        }

    }


    $email=$_POST['lemail'];
    $email=mysqli_real_escape_string($con,$email);

    $password=$_POST['lpassword'];
    $password=mysqli_real_escape_string($con,$password);
    $password=md5($password);

    $query="SELECT id,email_id,password from users where email_id='".$email."' and  password='".$password."'";
    $result=mysqli_query($con,$query);
    $num=mysqli_num_rows($result);

    // Login as Admin
    // Email : admin@gmail.com
    // Password : admin
    if ($email == 'admin@gmail.com' && $password == md5('admin')) {
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = '0';
        
        header('location:admin.php');
    }

    else if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);
    
        $_SESSION['email'] = $row['email_id'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['user_id'] = $row['id'];
        
        // check remember me 
        if (isset($_POST['remember'])) {
            // make cookie 
            setcookie('id', $row['id'], time() + 3600);
            setcookie('key', hash('sha256', $row['email_id']), time() + 3600);
        }

        
        header('location:products.php');
    }
    
    else {
        $m = "Please enter the correct E-mail and Password 😡";
        header('location: index.php?errorl='.$m);
    }

?>