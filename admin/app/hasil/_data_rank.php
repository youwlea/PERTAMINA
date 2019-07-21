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
$data_hasil = json_decode($_POST['hasil'], true);

usort($data_hasil, function($a, $b) {
    if ($a['rank'] == $b['rank']) return 0;
    return ($b['rank'] > $a['rank']) ? 1 : -1;
});
?>



<table class="table table-hover table-striped table-bordered" id="table_rank">

    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama Keagenan</th>
            <th>Hasil</th>
            <th>Kriteria</th>
						<th>Status</th>
    </thead>
    <tbody>
        <?php if (count($data_hasil) > 0): ?>
            <?php foreach ($data_hasil as $key => $data): ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?php echo date('j-n-Y');; ?></td>
                    <td><?= $data['nama_perusahaan'] ?></td>
                    <td class="text-center"><?= isset($data['rank']) ? $data['rank'] : '-'?></td>
                    <td class="text-center"><?php
										$db = mysqli_connect('localhost', 'root', '', 'pertamina');
                    $h = $data['rank'];

$getdata = mysqli_query($db, "SELECT * FROM tbl_keagenan");
while($row = mysqli_fetch_array($getdata)){}

                    if ($h < "0.70"  $row['id'] < 100)
										 {
                      echo "Tidak Layak Diperpanjang";
											mysqli_query ($db, "UPDATE tbl_keagenan SET status = 'Tidak Layak Diperpanjang' WHERE id = '" . $row['id']. "'");

                    } else {
											echo "Layak Diperpanjang";
										$status = 'Layak Diperpanjang';
										mysqli_query ($db, "UPDATE tbl_keagenan SET status = 'Layak Diperpanjang' WHERE id = '" . $row['id']. "'");
										}

                    ?>

                    </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr class="text-center">
                <td colspan="3">Data Tidak Ditemukan</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
<center>
            <a href="../admin/app/hasil/cetak.php" class="btn btn-danger">Cetak</a> <br/><br/>
	    </center>

	</div>
</div>
