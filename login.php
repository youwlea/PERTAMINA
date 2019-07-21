<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PT. Pertamina (Persero) Marketing Opertaion Region III</title>

    <!-- Bootstrap core CSS -->
    <link href="style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="style/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="style/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="style/css/freelancer.min.css" rel="stylesheet">

</head>
<body>

    <!-- Log in Section -->
    <section class="bg-success text-white mb-0" id="login">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">Login</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <br>
            <form method="post" action="login.php">
              <?php echo display_error(); ?>

            <div class="form-group">
    			<label for="exampleInputEmail1">Username</label>
    			<input type="text" name="username" class="form-control" placeholder="Enter Username" required>
			</div>
			<div class="form-group">
    			<label for="exampleInputEmail1">Password</label>
    			<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
			</div>

			<div class="form-group">
				<button type="submit" class="btn" name="login_btn">Login</button>
			</div>
			
            </form>
            <br>
          </div>
        </div>
      </div>
    </section>

	<!-- Bootstrap core JavaScript -->
    <script src="style/vendor/jquery/jquery.min.js"></script>
    <script src="style/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="style/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="style/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="style/js/jqBootstrapValidation.js"></script>
    <script src="style/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="style/js/freelancer.min.js"></script>
</body>
</html>
