<?php
	session_start();

	// Koneksi ke database
	$db = mysqli_connect('localhost', 'root', '', 'pertamina');

	// variable declaration
	$username = "";
	$email    = "";
	$fullname = "";
	$errors   = array();

	// call the register() function if register_btn is clicked
	if (isset($_POST['register_btn'])) {
		register();
	}

	// call the login() function if register_btn is clicked
	if (isset($_POST['login_btn'])) {
		login();
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: ../index.php");
	}

	// REGISTER USER
	function register(){
		global $db, $errors;

		// receive all input values from the form
		$username    =  e($_POST['username']);
		$fullname    =  e($_POST['fullname']);
		$email       =  e($_POST['email']);
		$password_1  =  e($_POST['password_1']);
		$password_2  =  e($_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($fullname)) {
			array_push($errors, "Username is required");
		}
		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password_1)) {
			array_push($errors, "Password is required");
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		$CheckSQL = "SELECT * FROM users WHERE email='$email'";
		$check = mysqli_fetch_array(mysqli_query($db,$CheckSQL));

		if (isset($check)) {
			array_push($errors, "<script>alert('Email Already Exist, Please Try Again !!!');history.go(-1);</script>");
		}else{
		// register user jika tidak ada error
		if (count($errors) == 0) {
			$password = $password_1;

			if (isset($_POST['user_type'])) {
				$user_type = e($_POST['user_type']);
				$query = "INSERT INTO users (username, fullname, email, user_type, password)
						  VALUES('$username', '$fullname', '$email', '$user_type', '$password')";
				mysqli_query($db, $query);
				$_SESSION['success']  = "New user successfully created!!";
				header('location: user/home_user.php');
			}else{
				$query = "INSERT INTO users (username, fullname, email, user_type, password)
						  VALUES('$username', '$fullname', '$email', 'user', '$password')";
				mysqli_query($db, $query);

				// mengambil id dari pembuatan user
				$logged_in_user_id = mysqli_insert_id($db);

				$_SESSION['user'] = getUserById($logged_in_user_id); // menaruh logged in user ke session
				$_SESSION['success']  = "You are now logged in";
				header('location: user/home_user.php');
			}

		}
		}

	}

	// mengembalikan user array dari id nya
	function getUserById($id){
		global $db;
		$query = "SELECT * FROM users WHERE id=" . $id;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	// LOGIN USER
	function login(){
		global $db, $username, $errors;

		// mengambil form values
		$username = e($_POST['username']);
		$password = e($_POST['password']);

		// memastikan form di isi dengan benar
		if (empty($username)) {
			array_push($errors, "Isi Username");
		}
		if (empty($password)) {
			array_push($errors, "Isi Password");
		}

		// jika login tidak ada error
		if (count($errors) == 0) {

			$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { // user found
				// mengecek jika akun user atau admin
				$logged_in_user = mysqli_fetch_assoc($results);
				if ($logged_in_user['user_type'] == 'admin') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('location: admin/index.php');
				}else{
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";

					header('location: admin/index.php');
				}
			}else {
				array_push($errors, "<script>alert('Wrong username/password combination');history.go(-1);</script>");
			}
		}
		if (count($errors) == 0) {

			$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { // user found
				// mengecek jika akun user atau admin
				$logged_in_user = mysqli_fetch_assoc($results);
				if ($logged_in_user['user_type'] == 'manajer') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('location: manajer/index.php');
				}else{
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";

					header('location: admin/index.php');
				}
			}else {
				array_push($errors, "<script>alert('Wrong username/password combination');history.go(-1);</script>");
			}
		}
	}

	function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}

	function isAdmin()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
			return true;
		}else{
			return false;
		}
	}

	// escape string
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}

?>
