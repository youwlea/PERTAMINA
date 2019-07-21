<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	include "koneksi_data.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($db,"SELECT * FROM users WHERE id='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
		?>
		<form action="update.php" method="post">
			<table class="table table-borderless">
				<tr>
					<td>
						<a href="home.php?halaman=admin" class="btn btn-primary"> <i class="fas fa-undo-alt"></i>
                    	<span>Back</span></a>
					</td>
				</tr>
				<tr>
					<td>
						<label>Username</label>
						<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
						<input type="text" placeholder="Enter Username" class="form-control" name="username" value="<?php echo $data['username'] ?>" required>
					</td>					
				</tr>	
				<tr>
					<td>
						<label>Email address</label>
						<input type="email" placeholder="Enter Email Address" class="form-control" name="email" value="<?php echo $data['email'] ?>" required>
					</td>					
				</tr>	
				<tr>
					<td>
						<label>Full Name</label>
						<input type="text" placeholder="Enter Full Name" class="form-control" name="fullname" value="<?php echo $data['fullname'] ?>" required>
					</td>					
				</tr>
				<tr>
					<td>
						<label>User Type</label>
                        <select name="user_type" class="form-control">
                        	<option value="<?php echo $data['user_type'] ?>"></option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
					</td>					
				</tr>
				<tr>
					<td>
						<label>Password</label>
						<input type="password" placeholder="Enter Password" class="form-control" name="password" value="<?php echo $data['password'] ?>" required>
					</td>					
				</tr>	
				<tr>
					<td><input type="submit" class="btn btn-primary" value="Simpan"></td>					
				</tr>				
			</table>

		</form>
	<?php } ?>
</body>
</html>