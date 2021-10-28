<?php include_once("header.php")?>
    
    <?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['txtemail']);
      $mypassword = mysqli_real_escape_string($db,$_POST['txtpassword']); 
      
      $sql = "SELECT * FROM Registration WHERE Email = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         //$_SESSION['login_user'] = $myusername;
         
         header("location: user/exchange.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
	
	
	<div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="cryptorio-forms cryptorio-forms-dark text-center pt-5 pb-5">
                    <div class="logo">
                        <img src="images/logo.png" alt="logo-image">
                    </div>
                    <h3 class="p-4">Welcome To Login</h3>
                    <div class="cryptorio-main-form">
                        <form action="" class="text-left">
                            <label for="email">Account Name</label>
                            <input type="text" id="email" name="txtemail" placeholder="Your email">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="txtpassword" placeholder="Please Input Your Password">

                            <a href="user/exchange"><input type="submit" value="Log In" class="crypt-button-red-full"></a>
                        </form>
                        <p class="float-left"><a href="register.php">Sign Up</a></p>
                        <p class="float-right"><a href="forgot.php">Forgot Password</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

	<script src="amc/core.js"></script>
	<script src="amc/charts.js"></script>
	<script src="amc/dark.js"></script>
	<script src="amc/animated.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="bootstrap/js/bootstrap.bundle.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="js/main.js"></script>
	<script src="js/amc.js"></script>
	<script src="https://s3.tradingview.com/tv.js"></script>
</body>
</html>