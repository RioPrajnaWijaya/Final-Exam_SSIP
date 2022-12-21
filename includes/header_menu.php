<!--Navbar start-->
<nav class="navbar fixed-top navbar-expand-sm navbar-dark" style="background-color:black">
  <div class="container">
    <a href="index.php" class="navbar-brand">AR | Design With Us</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="nav navbar-nav">
        <li class="nav-item dropdown">
          <a href="" class="nav-link dropdown-toggle" id="navbar-drop" data-toggle="dropdown">
            Products
          </a>
          <div class="dropdown-menu">
            <a href="products.php#3D" class="dropdown-item">3D Design</a>
              <a href="products.php#animation" class="dropdown-item">Animation</a>
          </div>
        </li>

        <?php
          if (isset($_SESSION['email'])) {
        ?>

        <li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
        
        <?php
          } 
        ?>
        
        <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
      </ul>
                    
      <?php
        if (isset($_SESSION['email'])) {
      ?>
                      
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a  class="nav-link " data-placement="bottom" data-toggle="popover" data-trigger="hover" data-content="<?php echo $_SESSION['email'] ?>">
            <i class="fa fa-user-circle "></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a href="" class="nav-link dropdown-toggle" id="navbar-drop" data-toggle="dropdown">
            <div class="dropdown-menu">
              <span class="dropdown-item">Email</span>
              <span class="dropdown-item"><?php echo $_SESSION['email'] ?></span>
              <a href="logout_script.php" class="dropdown-item"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
          </a>
        </li>
      </ul>
                    
      <?php
        } else {
      ?>
        
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item "><a href="#signup" class="nav-link"data-toggle="modal" ><i class="fa fa-user"></i> Sign Up</a></li>
        <li class="nav-item "><a href="#login" class="nav-link" data-toggle="modal"><i class="fa fa-sign-in"></i> Login</a></li>
      </ul>
      
      <?php 
        }
      ?>
    
      </div>
    </div>
  </div>
</nav>

<!--Navbar Ends-->
<!--Login Start-->

<div class="modal fade" id="login" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"style="background-color:rgba(255,255,255,0.95)">

      <div class="modal-header">
        <h5 class="modal-title">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="login_script.php" method="post">
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control"  name="lemail" placeholder="Enter email" required>
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd"  name="lpassword" placeholder="Password" required>
          </div>
          <div class="form-check">
            <input type="checkbox" name="remember" id="remember" class="form-check-input">
            <label for="checkbox" class="form-check-label">Remember me</label>
          </div>
          <button type="submit" class="btn btn-secondary btn-block" name="Submit">Login</button>
        </form>
        <a href="#">Forgot password?</a>
      </div>

      <div class="modal-footer">
        <p class="mr-auto">New User? <a href="#signup" data-toggle="modal" data-dismiss="modal" >Sign Up</a></p>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
      </div>
    </div>
  </div>
</div>

<!--Login Ends-->
<!--Signup Start-->
<div class="modal fade" id="signup">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color:rgba(255,255,255,0.95)">

      <div class="modal-header">
        <h5 class="modal-title">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="signup_script.php" method="post">
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control"  name="eMail" placeholder="Enter email" required>
            
            <?php 
              if(isset($_GET['error'])) { 
                echo "<span class='text-danger'>".$_GET['error']."</span>";
              } 
            ?>
          
          </div>
                
          <div class="form-group">
            <label for="pswd">Password:</label>
            <input type="password" class="form-control" id="pswd" name="password" placeholder="Password" required>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="validation1">First Name</label>
              <input type="text" class="form-control" id="validation1" name="firstName" placeholder="First Name" required>
            </div>
            <div class="form-group col-md-6">
              <label for="validation2">Last Name</label>
              <input type="text" class="form-control" id="validation2" name="lastName" placeholder="Last Name">
            </div>
          </div>
                
          <div class="form-check">
            <input type="checkbox" class="form-check-input" required>
            <label for="checkbox" class="form-check-label">Agree to terms and conditions</label>
          </div>
          <button type="submit" class="btn btn-primary btn-block" name="Submit">Sign Up</button>
        </form>
      </div>
            
      <div class="modal-footer">
        <p class="mr-auto">Already registered?<a href="#login"  data-toggle="modal" data-dismiss="modal"> Login</a></p>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
      </div>
    </div>
  </div>
</div>
<!--Signup Ends-->