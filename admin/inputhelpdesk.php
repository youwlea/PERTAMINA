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

  <!-- Plugin Alert -->
  <script src="../dist/sweetalert/jquery.min.js"></script>
  <script src="../dist/sweetalert/sweetalert2.min.js"></script>
  <link href="../dist/sweetalert/sweetalert2.css" rel="stylesheet">

</head>
<body>
    <?php 

          // Koneksi ke database
          $db = mysqli_connect('localhost', 'root', '', 'kominfo');

          if (isset($_POST["kirimbtn"])) 
          {
          // MENERIMA INPUTAN DARI FORM
          $kategori = $_POST['kategori'];
          $judul = $_POST['judul'];
          $isi = $_POST['isi'];
          $tanggal = date("y-m-d");

          //Mengirim Data inputan ke Database pengaduan
          mysqli_query($db,"INSERT INTO helpdesk (kategori,judul,isi,tanggal) VALUES ('$kategori','$judul','$isi','$tanggal')");

          //Alert
          echo "<script>swal('Done!','Kiriman Berhasisl Di Post','success');</script>";

          }
    ?>
	<div>
    <a href="home.php?halaman=datahelpdesk" class="btn btn-primary"> <i class="fas fa-undo-alt"></i>
                    <span>Back</span></a>
    <br>
    <br>
	<form method="post">
      <div class="form-group">
        <label>Kategori</label>
        <select name="kategori" class="form-control" required>
          <option value="jaringan">Jaringan</option>
          <option value="software">Software</option>
          <option value="hardware">Hardware</option>
        </select>
      </div>
  		<div class="form-group">
    		<label for="exampleInputEmail1">Judul</label>
        	<input type="text" name="judul" class="form-control" required>
  		</div>
  		<div class="form-group">
    		<textarea name="isi"  class="ckeditor" required></textarea>
  		</div>
  			<button type="submit" class="btn btn-primary" name="kirimbtn">Submit</button>
	</form>

	</div>

	<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="bootstrap/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="bootstrap/js/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- CKeditor -->
    <script type="text/javascript" src="../dist/ckeditor/ckeditor.js"></script>
</body>

</html>