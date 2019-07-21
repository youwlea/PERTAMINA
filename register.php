<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>Dinas Komunikasi dan Informatika</title>

	<!-- Bootstrap core CSS -->
    <link href="style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="style/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="style/css/freelancer.min.css" rel="stylesheet">



</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger">Keagenan Elpiji</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <br>
    <br>
	<section class="bg-info text-white mb-0" id="register">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">Daftar</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-6 mx-auto">
            <form method="post" action="register.php">
				<?php echo display_error(); ?>

            <div class="form-group">
    			<label>Username</label>
				<input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda" required value="<?php echo $username; ?>">
			</div>
			<div class="form-group">
    			<label>Nama Lengkap</label>
				<input type="text" name="fullname" class="form-control" placeholder="Masukkan Nama Lengkap Anda" required value="<?php echo $fullname; ?>">
			</div>
			<div class="form-group">
    			<label>Email</label>
				<input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda" required value="<?php echo $email; ?>">
			</div>
			<div class="form-group">
    			<label>Password</label>
				<input type="password" class="form-control" placeholder="Masukkan Password Anda" required name="password_1">
			</div>
			<div class="form-group">
    			<label>Konfirmasi password</label>
				<input type="password" class="form-control" placeholder="Konfirmasi Password Anda" required name="password_2">
			</div>

			<div class="input-group">
			<button type="submit" class="btn" name="register_btn">Daftar</button>
			</div>
			<p>
				Sudah Menjadi Member? <a style="color: black;" href="index.php">Masuk</a>
			</p>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Copyright -->
    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; PT. Pertamina (Persero) Marketing Opertaion Region III 2019</small>
      </div>
    </div>

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
