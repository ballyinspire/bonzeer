<?php include_once("header.php")?>
    
	<?php include_once("connection.php")?>
	
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="cryptorio-forms cryptorio-forms-dark text-center pt-5 pb-5">
                    <div class="logo">
                        <img src="images/logo.png" alt="logo-image">
                    </div>
                    <h3 class="p-4">Register</h3>
                    <div class="cryptorio-main-form">
                        <form action="" class="text-left">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="txtemail" placeholder="Your email">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="txtpassword" placeholder="6-20 letters and numbers">
                            <label for="confirm-password">Confirm Password</label>
                            <input type="password" id="confirm-password" name="txtcpassword" placeholder="6-20 letters and numbers">
                            <div class="my-1">
                              <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="terms-agree">
                                <label class="custom-control-label" for="terms-agree">I agree to the terms of services</label>
                              </div>
                            </div>
                            <input type="submit" value="SignUp" class="crypt-button-red-full">
                        </form>
                        <p class="float-left"><a href="login.html">Log In</a></p>
                        <p class="float-right"><a href="forgot.php">Recover Password</a></p>
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