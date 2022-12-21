<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Design | Buy Design With Us.</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="style.css">
</head>
<body style="margin-bottom:200px" id="bg">
    <!--Header-->
    <?php
        include 'includes/header_menu.php';
        include 'includes/check-if-added.php';
    ?>
    <!--Header ends-->
    <div id="content">
        <div class=" ">
            <div class="container" style="padding-top:300px">
                <div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 0.5rem;" >
                    <div class="text-center">
                        <h1>Welcome to AR!</h1>
                        <p>Buy Design With Us</p>
                    </div>
                    <a href="products.php" class="btn btn-warning btn-lg text-white">Buy Now</a>
                </div>
            </div>

        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
    $('[data-toggle="popover"]').popover();
    });
    $(document).ready(function() {

        if(window.location.href.indexOf('#login') != -1) {
            $('#login').modal('show');
        }

    });
</script>

<?php 
    if (isset($_GET['error'])) {
        $z = $_GET['error'];
        echo 
        "<script type='text/javascript'>
            $(document).ready(function(){
            $('#signup').modal('show');
            });
        </script>";
        echo 
        "<script type='text/javascript'>
            alert('" . $z . "')
        </script>";
    }
?>
    
<?php 
    if (isset($_GET['errorl'])) {
        $z = $_GET['errorl'];
        echo 
        "<script type='text/javascript'>
            $(document).ready(function(){
            $('#login').modal('show');
            });
        </script>";
        echo 
        "<script type='text/javascript'>
            alert('" . $z . "')
        </script>";
    }
?>

</html>