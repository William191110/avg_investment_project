<?php require 'model/website_class.php';?>
<?php require 'controller/getData.php';?>
<?php require 'structures/header.acc.php'?>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-5 p-b-3">
				<form class="login100-form validate-form" action="signup.php" method="POST">
					<span class="login100-form-title p-b-40">
						Sign up
					</span>

					<div>
						<a href="#" class="btn-login-with bg1 m-b-5">
							<i class="fa fa-facebook-official"></i>
							Sign up with Facebook
						</a>

						<a href="#" class="btn-login-with bg2">
							<i class="fa fa-twitter"></i>
							Sign up with Twitter
						</a>
					</div>

					<div class="text-center p-t-55 p-b-30">
						<span class="txt1">
							Sign up with email
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter full name">
						<input class="input100" type="text" name="name" placeholder="Full name">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-20" data-validate = "Please enter email: ex@abc.xyz">
						<span class="btn-show-pass">
						</span>
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter contact">
						<input class="input100" type="text" name="contact" placeholder="Contact">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-20" data-validate = "Please enter location">
						<span class="btn-show-pass">
							
						</span>
						<input class="input100" type="text" name="location" placeholder="Location">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter gender">
						<input class="input100" type="text" name="gender" placeholder="Gender">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-20" data-validate = "Please enter password">
						<span class="btn-show-pass">
							<i class="fa fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="signup">
							Sign Up
						</button>
					</div>
					
					<div class="flex-col-c p-t-30">
						<span class="txt2 p-b-10">
							Already an account?
						</span>

						<a href="index.php" class="txt3 bo1 hov1">
							Login now
						</a>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	
	
	
<?php require 'structures/footer.acc.php';?>

</body>
</html>