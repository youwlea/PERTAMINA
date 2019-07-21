<?php
	include "koneksi_data.php";
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Dinas Komunikasi dan Informatika</title>
	<!--Custom CSS -->
	<link rel="stylesheet" href="../dist/css/style.css">
	<!--Datatables CSS -->
	<link rel="stylesheet" href="../dist/dataTables/dataTables.bootstrap4.min.css" />
	<!-- Font Awesome JS -->
	<script defer src="bootstrap/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
	<script defer src="bootstrap/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    
</head>

<body>
	<div>
		<h3>Pengaduan</h3>

		<a style=
		"width: 30px;
		height: 30px;
		text-align: center;
		padding: 6px 0;
		font-size: 15px;
  		line-height: 1.428571429;
  		border-radius: 15px;"
  		href="../report/reportlaporan.php" target="_blank" class="btn btn-warning"><i class="fas fa-print"></i></a>

  		<br>
  		<br>

		<table class="table table-bordered" id="laporan">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">No Tiket</th>
					<th scope="col">Tanggal</th>
					<th scope="col">Nama</th>
					<th scope="col">Status</th>
					<th scope="col">Action</th>
				</tr>
			</thead>

			<tbody>
				<?php $nomor =1; ?>
				<?php
					$query = mysqli_query($db, "SELECT * FROM pengaduan" );
					while ($data = mysqli_fetch_array($query)){
				?>
				<tr>
					<td data-header="No"><?php echo $nomor; ?></td>
					<td data-header="No Tiket"><?php echo $data['no_tiket']; ?></td>
					<td data-header="Tanggal"><?php echo date('d F Y', strtotime($data['tanggal'])); ?></td>
					<td data-header="Nama"><?php echo $data['fullname']; ?></td>
					<td data-header="Status"><?php echo $data['status']; ?></td>
					<td data-header="Action">
						<a href="home.php?halaman=detaillaporan&id_laporan=<?php echo $data['id_laporan'];?>" class="btn-info btn">Detail</a>
					</td>
				</tr>
				<?php $nomor++; ?>
				<?php } ?>
			</tbody>
		</table>


	</div>

	<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="bootstrap/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="bootstrap/js/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

    <script src="../dist/dataTables/datatables.min.js"></script>

    <script type="text/javascript">
    	$(document).ready( function () {
    	$('#laporan').DataTable();
		} );
    </script>
</body>

</html>