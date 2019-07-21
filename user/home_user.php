<!-- memeanggil fungsi login -->
<?php
	include('../functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../index.php');
	}
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Keagenan Elpiji Wilayah Jawa Barat</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../dist/css/style.css">
    <!-- Font Awesome JS -->
    <script defer src="bootstrap/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="bootstrap/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <script href="../dist/dataTables/datatables.min.css" rel="stylesheet"></script>

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img class="images" src="../images/admin_profile.png"> <i class="text-dark"><?php echo ucfirst($_SESSION['user']['user_type']); ?></i></img>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="home_user.php?halaman=lapor"><i class="fas fa-share-square"></i> <span>Perpanjangan Kontrak</span></a>

                <li>
                    <a href="home_user.php?halaman=akun"><i class="fas fa-user"></i> <span>Akun</span></a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="#" class="account"><?php echo ucfirst($_SESSION['user']['username']); ?></a>
                </li>
                <li>
                    <a href="home_user.php?logout='1'" class="article">Log Out</a>
                </li>
            </ul>
        </nav>

        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <img class="images" src="../style/img/profile.png" style="width: 60px; height: 60px;">
                </div>
            </nav>

            <!-- Bagian Konten -->
		<section class="content">
			<div class="inner">
				<?php
				if (isset($_GET['halaman']))
				{
					if ($_GET['halaman']=="lapor")
					{
						include 'lapor.php';
					}
					elseif ($_GET['halaman']=="riwayat")
					{
						include 'riwayat.php';
					}
                    elseif ($_GET['halaman']=="akun")
                    {
                        include 'info_akun.php';
                    }
                    elseif ($_GET['halaman']=="helpdesk") {
                        include 'helpdesk.php';
                    }
                    elseif ($_GET['halaman']=="helpdesk_detail") {
                        include 'helpdesk_detail.php';
                    }
				}
				else
				{
					include 'helpdesk.php';
				}
				?>
			</div>
		</section>

        </div>

</div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="user/bootstrap/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="user/bootstrap/js/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="user/bootstrap/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script src="../dist/dataTables/datatables.min.js"></script>
    <script src="../dist/dataTables/jquery-3.3.1.js"></script>
    <script src="../dist/dataTables/jquery.dataTables.min.js"></script>
    <script src="../dist/dataTables/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>
