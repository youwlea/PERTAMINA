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
	<div>
    <?php 
    $id_hp = $_GET['id_hp'];
    $query_mysql = mysqli_query($db,"SELECT * FROM helpdesk WHERE id_hp='$id_hp'")or die(mysqli_error());
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysql)){
    ?>
  <form action="update_helpdesk.php" method="post">
      <table class="table table-borderless">
        <tr>
          <td>
            <a href="home.php?halaman=datahelpdesk" class="btn btn-primary"> <i class="fas fa-undo-alt"></i>
                      <span>Back</span></a>
          </td>
        </tr>
        <tr>
          <td>
            <label>Kategori</label>
            <select name="kategori" class="form-control" required>
              <option value="jaringan">Jaringan</option>
              <option value="software">Software</option>
              <option value="hardware">Hardware</option>
            </select>
          </td>         
        </tr> 
        <tr>
          <td>
            <label name="judul">Judul</label>
            <input type="text" name="judul" class="form-control" value="<?php echo $data['judul'] ?>" required>
            <input type="hidden" name="id_hp" value="<?php echo $data['id_hp'] ?>">
            <input type="hidden" name="tanggal" value="<?php echo $data['tanggal'] ?>">
          </td>         
        </tr> 
        <tr>
          <td>
            <textarea type="text" name="isi"  class="ckeditor" required><?php echo $data['isi']; ?></textarea>
          </td>         
        </tr>
        <tr>
          <td><input type="submit" class="btn btn-primary" value="Simpan"></td>         
        </tr>       
      </table>

    </form>
  <?php } ?>

	</div>

	<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="bootstrap/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="bootstrap/js/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- CKeditor -->
    <script type="text/javascript" src="../dist/ckeditor/ckeditor.js"></script>
</body>

</html>