<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title></title>
	<!-- Bootstrap CSS CDN -->
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<!-- Our Custom CSS -->
	<link rel="stylesheet" href="../dist/css/style.css">
	<!-- Font Awesome JS -->
	<script defer src="bootstrap/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
	<script defer src="bootstrap/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- Plugin Alert -->
      <script src="../dist/sweetalert/jquery.min.js"></script>
      <script src="../dist/sweetalert/sweetalert2.min.js"></script>
      <link href="../dist/sweetalert/sweetalert2.css" rel="stylesheet">
</head>
<body>
	<?php
	$id_hp = $_GET['id_hp'];
    $query_mysql = mysqli_query($db,"SELECT * FROM helpdesk WHERE id_hp='$id_hp'")or die(mysqli_error());
    $data = $query_mysql->fetch_assoc();
    ?>

    <a href="home_user.php?halaman=helpdesk" class="btn btn-primary"> <i class="fas fa-undo-alt"></i>
                    <span>Back</span></a>

	<h1 class="display-4"><?php echo $data['judul']?></h1>
	<span><?php echo $data['kategori']?></span>


    		<p class="lead">
    			<p class="isi"><br>
    				<?php echo $data['isi']; ?></p>
    		</p>

</body>

    <!-- Plugin Alert -->
    <script src="../dist/sweetalert/jquery.min.js"></script>
    <script src="../dist/sweetalert/sweetalert2.min.js"></script>
	<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="bootstrap/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="bootstrap/js/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="../bootstrap/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</html>