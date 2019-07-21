<?php
		include 'proses_riwayat.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Dinas Komunikasi dan Informatika</title>
	<!-- Our Custom CSS -->
	<link rel="stylesheet" href="../dist/css/style.css">
	<!-- Font Awesome JS -->
	<script defer src="bootstrap/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
	<script defer src="bootstrap/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>No Tiket</th>
				<th>Problem</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$nomor = 1;
			$query = mysqli_query($db,"SELECT * FROM pengaduan WHERE email='$email'");
			while ($data = $query->fetch_assoc()) {
			?>
			<tr>
				<td data-header="No"><?php echo $nomor; ?></td>
				<td data-header="Tanggal"><?php echo $data['tanggal']; ?></td>
				<td data-header="No Tiket"><?php echo $data['no_tiket'] ?></td>
				<td data-header="Problem"><?php echo $data['problem'] ?></td>
				<td data-header="Status"><?php echo $data['status'] ?></td>
			</tr>
		<?php $nomor++; ?>
		<?php } ?>
		</tbody>
		
	</table>

	<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="bootstrap/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="bootstrap/js/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
</body>
</html>