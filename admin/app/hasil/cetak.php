<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">


</head>
<body>

	<center>

		<h2>DATA KEAGENAN</h2>
		<h4>Perpanjangan Kontrak Keagenan Elpiji </h4>

	</center>

 	<?php
 	$db = mysqli_connect('localhost', 'root', '', 'pertamina');
 	?>

 	<table border="1" style="width: 100%">
 		<tr>
 			<th scope="col" width="1%">No</th>
 			<th scope="col">Tanggal</th>
 			<th scope="col">Nama Keagenan</th>

 			<th scope="col">Status</th>
 		</tr>
 		<?php
 		$no = 1;
 		$sql = mysqli_query($db,"SELECT * FROM tbl_keagenan");
 		while($data = mysqli_fetch_array($sql)){
 		?>
 		<tr>
 			<td><?php echo $no++; ?></td>
 			<td><?php echo date('d F Y'); ?></td>
 			<td><?php echo $data['nama_perusahaan']; ?></td>



 		</tr>
		<?php
		}
		?>
</table>
<script>
	//window.print();
</script>

</body>
</html>
