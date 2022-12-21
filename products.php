<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AR | Design With Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https:unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--header -->
 <?php
    include 'includes/header_menu.php';
    include 'includes/check-if-added.php';
?>
<!--header ends -->

<div class="container" style="margin-top:65px">
    <!--jumbutron start-->
    <div class="jumbotron text-center">
        <h1>Welcome to AR!</h1>
        <p>Buy Design With Us</p>
    </div>
    <!--jumbutron ends-->

    <!--breadcrumb start-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Products</li>
        </ol>
    </nav>
    <!--breadcrumb end-->
    <hr/>
    <!--menu list-->
    <div class="row text-center" id="3D">
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/product/cherry.png" alt="" class="img-fluid pb-1" >
                <div class="figure-caption">
                    <h6>Donuts | Cherry</h6>
                    <h6>Price : Rp 120.000</h6>

                    <?php 
                        if (!isset($_SESSION['email'])) {
                    ?>

                    <p>
                        <a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a>
                    </p>

                    <?php
                        } 
                        else {
                            if (check_if_added_to_cart(1)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } 
                            else {
                    ?>
                        
                    <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a><p>
                        
                    <?php
                            }
                        }
                    ?>

                </div>
            </div>
        </div>

        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/product/caramel.png" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Donuts | Caramel</h6>
                    <h6>Price : Rp 128.000</h6>
                    
                    <?php 
                        if (!isset($_SESSION['email'])) {
                    ?>

                    <p>
                        <a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a>
                    </p>
                    
                    <?php
                        } 
                        else {
                            if (check_if_added_to_cart(2)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } 
                            else {
                    ?>
                        
                    <p>
                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a>
                    </p>
                    
                    <?php
                            }
                        }
                    ?>

                </div>
            </div>
        </div>

        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/product/cinnamon.png" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Donuts | Cinnamon</h6>
                    <h6>Price : Rp 125.000</h6>

                    <?php 
                        if (!isset($_SESSION['email'])) {
                    ?>

                    <p>
                        <a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a>
                    </p>
                    
                    <?php
                        } else {
                            if (check_if_added_to_cart(3)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } 
                            else {
                    ?>

                    <p>
                        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a>
                    </p>

                    <?php
                            }
                        }
                    ?>

                </div>
            </div>
        </div>

        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/product/lemon.png" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Donuts | Lemon</h6>
                    <h6>Price : Rp 123.000</h6>

                    <?php 
                        if (!isset($_SESSION['email'])) {
                    ?>
                    
                    <p>
                        <a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a>
                    </p>
                    
                    <?php
                        } 
                        else {
                            if (check_if_added_to_cart(4)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } 
                            else {
                    ?>
                        
                    <p>
                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a>
                    </p>
                        
                    <?php
                            }
                        }
                    ?>

                </div>
            </div>
        </div>
    </div>

    <div class="row text-center" id="3D">
        <div class="col-md-3 col-6 py-3" >
            <div class="card">
                <img src="images/product/lime.png" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Donuts | Lime</h6>
                    <h6>Price : Rp 125.000</h6>

                    <?php 
                        if (!isset($_SESSION['email'])) {
                    ?>

                    <p>
                        <a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a>
                    </p>
                    
                    <?php
                        } 
                        else {
                            if (check_if_added_to_cart(5)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } 
                            else {
                    ?>
                        
                    <p>
                        <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a>
                    </p>

                    <?php
                            }
                        }
                    ?>

                </div>
            </div>
        </div>

        <div class="col-md-3 col-6 py-3">
            <div class="card">
                <img src="images/product/milkCoco.png" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Donuts | Milk Coco</h6>
                    <h6>Price : Rp 128.000</h6>

                    <?php 
                        if (!isset($_SESSION['email'])) {
                    ?>
                    
                    <p>
                        <a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a>
                    </p>
                    
                    <?php
                        } 
                        else {
                            if (check_if_added_to_cart(6)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } 
                            else {
                    ?>
                        
                    <p>
                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a>
                    </p>
                        
                    <?php
                            }
                        }
                    ?>

                </div>
            </div>
        </div>

        <div class="col-md-3 col-6 py-3">
            <div class="card">
                <img src="images/product/pinapple.png" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Donuts | Pinapple</h6>
                    <h6>Price : Rp 122.000</h6>
                        
                    <?php 
                        if (!isset($_SESSION['email'])) {
                    ?>

                    <p>
                        <a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a>
                    </p>
                    
                    <?php
                        } 
                        else {
                            if (check_if_added_to_cart(7)) {
                                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } 
                            else {
                    ?>
                    
                    <p>
                        <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a>
                    </p>
                    
                    <?php
                            }   
                        }
                    ?>

                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="images/product/object1.png" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Cube</h6>
                        <h6>Price : Rp 80.000</h6>

                        <?php 
                            if (!isset($_SESSION['email'])) {
                        ?>

                        <p>
                            <a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a>
                        </p>

                        <?php
                            } 
                            else {
                                if (check_if_added_to_cart(8)) {
                                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                                }   
                                else {
                        ?>
                        
                        <p>
                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a>
                        </p>
                        
                        <?php
                                }
                            }
                        ?>

                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center" id="animation" >
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <video controls autoplay  class="img-fluid pb-1">
                        <source src="images/product/Bitcoin.mp4" type="video/mp4">
                    </video>
                    <div class="figure-caption">
                        <h6>Bitcoin</h6>
                        <h6>Price : Rp 170.000</h6>
                            
                        <?php 
                            if (!isset($_SESSION['email'])) {
                        ?>
                    
                        <p>
                            <a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a>
                        </p>
                    
                        <?php
                            } 
                            else {
                                if (check_if_added_to_cart(9)) {
                                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                                } 
                                else {
                        ?>

                        <p>
                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a>
                        </p>

                        <?php
                                }
                            }
                        ?>

                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <video controls autoplay  class="img-fluid pb-1">
                        <source src="images/product/Planet.mp4" type="video/mp4">
                    </video>
                    <div class="figure-caption">
                        <h6>Planet</h6>
                        <h6>Price : Rp 100.000</h6>
    
                        <?php 
                            if (!isset($_SESSION['email'])) {
                        ?>
                    
                        <p>
                            <a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a>
                        </p>
                    
                        <?php
                            } 
                            else {
                                if (check_if_added_to_cart(10)) {
                                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                                } 
                                else {
                        ?>
                        
                        <p>
                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a>
                        </p>
                     
                        <?php
                                }
                            }
                        ?>

                    </div>
                </div>
            </div>
        
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <video controls autoplay  class="img-fluid pb-1">
                        <source src="images/product/Robot.mp4" type="video/mp4">
                    </video>
                    <div class="figure-caption">
                        <h6>Robot</h6>
                        <h6>Price : Rp 150.000</h6>
                
                        <?php 
                            if (!isset($_SESSION['email'])) {
                        ?>
                    
                        <p>
                            <a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a>
                        </p>
                    
                        <?php
                            } 
                            else {
                                if (check_if_added_to_cart(11)) {
                                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                                } 
                                else {
                        ?>
                    
                        <p>
                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a>
                        </p>
                    
                        <?php
                                }
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <video controls autoplay  class="img-fluid pb-1">
                        <source src="images/product/blackCube.mp4" type="video/mp4">
                    </video>
                    <div class="figure-caption">
                        <h6>Black Cube</h6>
                        <h6>Price : Rp 170.000</h6>
                    
                        <?php 
                            if (!isset($_SESSION['email'])) {
                        ?>
                    
                        <p>
                            <a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a>
                        </p>
                    
                        <?php
                            } 
                            else {
                                if (check_if_added_to_cart(12)) {
                                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                            } 
                            else {
                        ?>
                    
                        <p>
                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a>
                        </p>
                   
                        <?php
                                }
                            }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    
        <div class="row text-center" id="animation">
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <video controls autoplay  class="img-fluid pb-1">
                        <source src="images/product/christmas.mp4" type="video/mp4">
                    </video>
                    <div class="figure-caption">
                        <h6>Christmas</h6>
                        <h6>Price : Rp 190.000</h6>
                    
                        <?php 
                            if (!isset($_SESSION['email'])) {
                        ?>

                        <p>
                            <a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a>
                        </p>

                        <?php
                            } 
                            else {
                                if (check_if_added_to_cart(13)) {
                                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                                } 
                                else {
                        ?>
                    
                        <p> 
                            <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a>
                        </p>
                    
                        <?php
                                }
                            }
                        ?>
                    
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <video controls autoplay  class="img-fluid pb-1">
                        <source src="images/product/digitalWorld.mp4" type="video/mp4">
                    </video>
                    <div class="figure-caption">
                        <h6>Digital World</h6>
                        <h6>Price : Rp 195.000</h6>

                        <?php 
                            if (!isset($_SESSION['email'])) {
                        ?>
                    
                        <p>
                            <a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a>
                        </p>

                        <?php
                            } 
                            else {
                                if (check_if_added_to_cart(14)) {
                                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                                } 
                                else {
                        ?>
                    
                        <p>
                            <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a>
                        </p>
                    
                        <?php
                                }
                            }
                        ?>

                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <video controls autoplay class="img-fluid pb-1">
                        <source src="images/product/graveyard.mp4" type="video/mp4">
                    </video>
                    <div class="figure-caption">
                        <h6>Graveyard</h6>
                        <h6>Price : Rp 150.000</h6>

                        <?php 
                            if (!isset($_SESSION['email'])) {
                        ?>

                        <p>
                            <a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a>
                        </p>
                    
                        <?php
                            } 
                            else {
                                if (check_if_added_to_cart(15)) {
                                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                                } 
                                else {
                        ?>
                    
                        <p>
                            <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a>
                        </p>
                   
                        <?php
                                }
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <video controls autoplay  class="img-fluid pb-1">
                        <source src="images/product/virtualCity.mp4" type="video/mp4">
                    </video>
                    <div class="figure-caption">
                        <h6>Virtual City</h6>
                        <h6>Price : Rp 198.000</h6>
                        
                        <?php 
                            if (!isset($_SESSION['email'])) {
                        ?>
                    
                        <p>
                            <a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a>
                        </p>
                    
                        <?php
                            } 
                            else {
                                if (check_if_added_to_cart(16)) {
                                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                                } 
                                else {
                        ?>

                        <p> 
                            <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a>
                        </p>
                        
                        <?php
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--menu list ends-->

    <!-- review start -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold">Review</h2>

    <div class="container">
        <div class="swiper swiper-review">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/user.jpeg" width="100px" height="100px">
                        <h6 class="m-0 ms-2 ml-4">Diki</h6>
                    </div>
                    <p>Love this website 💖 <br> Thanks for providing a lot of design that I can purchase for my <strong>FINAL PROJECT</strong></p>
                    <div class="rating">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/user.jpeg" width="100px" height="100px">
                        <h6 class="m-0 ms-2 ml-4">Dwi</h6>
                    </div>
                    <p>Love this website 💖 <br> Thanks for providing a lot of design that I can purchase for my <strong>FINAL PROJECT</strong></p>
                    <div class="rating">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/user.jpeg" width="100px" height="100px">
                        <h6 class="m-0 ms-2 ml-4">Diro</h6>
                    </div>
                    <p>Love this website 💖 <br> Thanks for providing a lot of design that I can purchase for my <strong>FINAL PROJECT</strong></p>
                    <div class="rating">
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- review ends -->
      
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
    });

    var swiper = new Swiper(document.querySelector('.swiper-review'), {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
        },
        pagination: {
        el: ".swiper-pagination",
        },
        breakpoints: {
        320: {
            slidesPerView: 1,
        },
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
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