<?php
// memanggil fungsi koneksi
	include('koneksi_data.php');
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
	<!--Datatables CSS -->
	<link rel="stylesheet" href="../dist/dataTables/dataTables.bootstrap4.min.css" />
	<!-- Font Awesome JS -->
	<script defer src="bootstrap/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
	<script defer src="bootstrap/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

	<!-- Plugin Alert -->
  <script src="../dist/sweetalert/jquery.min.js"></script>
  <script src="../dist/sweetalert/sweetalert2.min.js"></script>
  <link href="../dist/sweetalert/sweetalert2.css" rel="stylesheet">
</head>

<body>
	<center>
		<h3 class="text-info">Data Solusi</h3>
	</center>
	<!-- button tambah -->
	<a style=
		"width: 30px;
		height: 30px;
		text-align: center;
		padding: 6px 0;
		font-size: 15px;
  		line-height: 1.428571429;
  		border-radius: 15px;"
  		href="home.php?halaman=inputhelpdesk" class="btn btn-warning"><i class="fas fa-plus"></i></a>
<br>
<br>
<!-- table-->
<table class="table table-bordered" id="admin">
	<thead>
		<tr>
			<th scope="col">No</th>
			<th>Judul</th>
			<th>Kategori</th>
			<th>Action</th>
		</tr>
	</thead>

	<tbody >
		<?php $nomor =1; ?>
		<?php
			$db = mysqli_connect('localhost', 'root', '', 'kominfo');
			// memanggil data di table user
			$query = mysqli_query ($db, "SELECT * FROM helpdesk");
			while($data = mysqli_fetch_array($query)){
		?>
		<tr>
			<td data-header="No"><?php echo $nomor; ?></td>
			<td data-header="Judul"><?php echo $data['judul'];  ?></td>
			<td data-header="Kategori"><?php echo $data['kategori'];  ?></td>
			<td data-header="Action">
				<button class="btn-danger btn" onclick="konfirmasiDulu()">Hapus</button>
				<script>
					function konfirmasiDulu(){
						var getLink = "home.php?halaman=hapushelpdesk&id_hp=<?php echo $data['id_hp'];?>";

						swal({
							  title: 'Are you sure?',
							  text: "You won't be able to revert this!",
							  type: 'warning',
							  showCancelButton: true,
							  confirmButtonColor: '#3085d6',
							  cancelButtonColor: '#d33',
							  confirmButtonText: 'Yes, delete it!'
							}).then((result) => {
							  if (result.value) {
							    window.location.href = getLink
							  }
							})
					}
				</script>
				<a href="home.php?halaman=edithelpdesk&id_hp=<?php echo $data['id_hp'];?>" class="btn-warning btn">Edit</a>
			</td>
		</tr>
	<?php $nomor++; ?>
	<?php } ?>
	</tbody>
</table>
		<!-- Plugin Alert -->
        <script src="../dist/sweetalert/jquery.min.js"></script>
        <script src="../dist/sweetalert/sweetalert2.min.js"></script>

	<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="bootstrap/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="bootstrap/js/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

    <script src="../dist/dataTables/datatables.min.js"></script>
    <!-- JavaScript datatables untuk sort dan pencarian-->
    <script type="text/javascript">
    	$(document).ready( function () {
    	$('#admin').DataTable();
		} );
    </script>
</body>
</html>