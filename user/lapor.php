<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Keagenan Elpiji</title>
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

        <!-- Plugin Alert -->
        <script src="../dist/sweetalert/jquery.min.js"></script>
        <script src="../dist/sweetalert/sweetalert2.min.js"></script>




				<?php

				$db = mysqli_connect('localhost', 'root', '', 'pertamina');

				if (isset($_POST["simpan"])){

				$nama_agen = $_POST['nama_agen'];
				$apbu = $_POST['apbu'];
				$pengesahan = $_POST['pengesahan'];
				$izin_keagenan = $_POST['izin_keagenan'];
				$ktp = $_POST['ktp'];
				$bank = $_POST['bank'];
				$npwp = $_POST['npwp'];
				$siup = $_POST['siup'];
				$tdp = $_POST['tdp'];
				$ho = $_POST['ho'];
				$skdp = $_POST['skdp'];
				$imb = $_POST['imb'];
				$sertifikat = $_POST['sertifikat'];
				$skck = $_POST['skck'];
				$kontrak = $_POST['kontrak'];
				$pangkalan = $_POST['pangkalan'];
				$pernyataan = $_POST['pernyataan'];
				$pkp = $_POST['pkp'];
				$situ = $_POST['situ'];

				mysqli_query($db,"INSERT INTO administrasi (nama_agen,apbu,pengesahan,izin_keagenan,ktp,bank,npwp,siup,tdp,ho,skdp,imb,sertifikat,skck,kontrak,pangkalan,pernyataan,pkp,situ)
				VALUES ('$nama_agen','$apbu','$pengesahan','$izin_keagenan','$ktp','$bank','$npwp','$siup','$tdp','$ho','$skdp','$imb','$sertifikat','$skck','$kontrak','$pangkalan','$pernyataan','$pkp','$situ')");

				echo "<script>swal('Terimakasih!','Data Administrasi Anda Sudah Kami Terima','success');</script>";

				}
				?>


</head>
<body>
 <form method="POST">

			 <label class="control-label" for="inputnama">Nama Perusahaan / Agen LPG</label>

				 <input type="text" class="form-control" required="required" name="nama_agen" placeholder="Nama Perusahaan / Agen Elpiji">

  <table>
   <tr>
    <td width="50px"valign="top">Berkas Administrasi</td>
    <td valign="top">


			    </div>
			  </div>
				<div class="checkbox">
												<input type="hidden" name="apbu" value="Tidak Ada" />
												<input type="checkbox" name="apbu" value="Ada" />Akta Pendirian Badan Usaha <br />

												<input type="hidden" name="pengesahan" value="Tidak Ada" />
												<input type="checkbox" name="pengesahan" value="Ada" />Pengesahan dari Depkum & HAM <br />

												<input type="hidden" name="izin_keagenan" value="Tidak Ada" />
												<input type="checkbox" name="izin_keagenan" value="Ada" />Ijin Definitif  Keagenan <br />

												<input type="hidden" name="ktp" value="Tidak Ada" />
												<input type="checkbox" name="ktp" value="Ada" />KTP Direktur / Komisaris <br />

												<input type="hidden" name="bank" value="Tidak Ada" />
												<input type="checkbox" name="bank" value="Ada" />Surat Referensi Bank <br />

												<input type="hidden" name="npwp" value="Tidak Ada" />
												<input type="checkbox" name="npwp" value="Ada" />N P W P<br />

												<input type="hidden" name="siup" value="Tidak Ada" />
												<input type="checkbox" name="siup" value="Ada" />SIUP (Surat Izin Usaha Perdagangan) <br />

												<input type="hidden" name="tdp" value="Tidak Ada" />
												<input type="checkbox" name="tdp" value="Ada" />TDP (Tanda Daftar Perusahaan) <br />

												<input type="hidden" name="ho" value="Tidak Ada" />
												<input type="checkbox" name="ho" value="Ada" />HO (Izin Gangguan) <br />

												<input type="hidden" name="situ" value="Tidak Ada" />
												<input type="checkbox" name="situ" value="Ada" />SITU (Surat Izin Tempat Usaha) <br />

												<input type="hidden" name="skdp" value="Tidak Ada" />
												<input type="checkbox" name="skdp" value="Ada" />Surat Keterangan Domisili Perusahaan <br />

												<input type="hidden" name="imb" value="Tidak Ada" />
												<input type="checkbox" name="imb" value="Ada" />Surat IMB (Izin Mendirikan Bangunan) <br />

												<input type="hidden" name="sertifikat" value="Tidak Ada" />
												<input type="checkbox" name="sertifikat" value="Ada" />Foto Copy Sertifikat Tanah Gudang dan Kantor <br />

												<input type="hidden" name="skck" value="Tidak Ada" />
												<input type="checkbox" name="skck" value="Ada" />SKCK (Surat Keterangan Catatan Kepolisian) <br />

												<input type="hidden" name="pkp" value="Tidak Ada" />
												<input type="checkbox" name="pkp" value="Ada" />Surat Keterangan PKP/Non PKP <br />

												<input type="hidden" name="pangkalan" value="Tidak Ada" />
												<input type="checkbox" name="pangkalan" value="Ada" />Daftar Pangkalan dan Volume Pangkalan <br />

												<input type="hidden" name="kontrak" value="Tidak Ada" />
												<input type="checkbox" name="kontrak" value="Ada" />Kontrak dengan Outlet/Pangkalan <br />

												<input type="hidden" name="pernyataan" value="Tidak Ada" />
												<input type="checkbox" name="pernyataan" value="Ada" />Surat Pernyataan <br />



    </td>
   </tr>
   <tr>
    <td width="60px"valign="top"></td>
    <td valign="top">
		</div>
			<button type="submit" class="btn btn-primary" name="simpan">Submit</button>
</form>
    </td>
   </tr>
  </table>
 </form>




 </table>
 <!-- jQuery CDN - Slim version (=without AJAX) -->
		<script src="bootstrap/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<!-- Popper.JS -->
		<script src="bootstrap/js/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
</body>
</html>






</body>

</html>
