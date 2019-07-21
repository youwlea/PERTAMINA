<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Diskominfo </title>

</head>
<body>
 
	<center>
 
		<h2>DATA PENGGUNA HELPDESK</h2>
		<h4>Dinas Komunikasi dan Informatika Sumatera Selatan </h4>
 
	</center>
 
	<?php
	$db = mysqli_connect('localhost', 'root', '', 'kominfo');
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th scope="col" width="1%">No</th>
			<th scope="col">ID</th>
			<th scope="col">Username</th>
			<th scope="col">Nama</th>
			<th scope="col">Email</th>
			<th scope="col">User Type</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($db,"SELECT * FROM users");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['id'];  ?></td>
			<td><?php echo $data['username'];  ?></td>
			<td><?php echo $data['fullname'];  ?></td>
			<td><?php echo $data['email'];  ?></td>
			<td><?php echo $data['user_type'];  ?></td>


		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>