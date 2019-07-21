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
 
		<h2>DATA PENGADUAN</h2>
		<h4>Dinas Komunikasi dan Informatika Sumatera Selatan </h4>
 
	</center>
 
	<?php
	$db = mysqli_connect('localhost', 'root', '', 'kominfo');
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th scope="col" width="1%">No</th>
			<th scope="col">No Tiket</th>
			<th scope="col">Tanggal</th>
			<th scope="col">Nama</th>
			<th scope="col">Email</th>
			<th scope="col">Departemen</th>
			<th scope="col">Problem</th>
			<th scope="col">Status</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($db,"SELECT * FROM pengaduan");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['no_tiket']; ?></td>
			<td><?php echo date('d F Y', strtotime($data['tanggal'])); ?></td>
			<td><?php echo $data['fullname']; ?></td>
			<td><?php echo $data['email']; ?></td>
			<td><?php echo $data['departemen']; ?></td>
			<td><?php echo $data['problem']; ?></td>
			<td><?php echo $data['status']; ?></td>


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