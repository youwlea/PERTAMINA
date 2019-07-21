<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title></title>
	<!-- Our Custom CSS -->
	<link rel="stylesheet" href="../dist/css/style.css">
	<!-- Font Awesome JS -->
	<script defer src="bootstrap/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
	<script defer src="bootstrap/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<body>
	<div id="isi">
	<h3 class="text-info">Input Data</h3>
	<form action="add.php" method="post">		
		<table class="table table-borderless">
			<tr>
				<td><input class="form-control" type="text" name="username" placeholder="Enter Username" required></td>					
			</tr>	
			<tr>
				<td><input class="form-control" type="email" name="email" placeholder="Enter Email Address" required></td>					
			</tr>	
			<tr>
				<td><input class="form-control" type="text" name="fullname" placeholder="Enter Full Name" required></td>					
			</tr>
			<tr>
				<td>
                        <select name="user_type" class="form-control">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
				</td>					
			</tr>
			<tr>
				<td><input class="form-control" type="password" name="password" placeholder="Enter Password" required></td>					
			</tr>	
			<tr>
				<td>
					<input class="btn btn-primary" type="submit" value="Simpan">
					<a href="home.php?halaman=admin" class="btn btn-primary"> <i class="fas fa-undo-alt"></i>
                    <span>Back</span></a>
				</td>					
			</tr>				
		</table>
	</form>
	</div>

	<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="bootstrap/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="bootstrap/js/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
</body>
</html>