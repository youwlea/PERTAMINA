<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php 
    include "koneksi_data.php";
    $id_laporan = $_GET['id_laporan'];
    $query_mysql = mysqli_query($db,"SELECT * FROM pengaduan WHERE id_laporan='$id_laporan'")or die(mysqli_error());
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysql)){
        ?>
        <form action="updatelaporan.php" method="post">    
            <table class="table table-borderless">
                <tr>
                    <td>
                        <a href="home.php?halaman=detaillaporan&id_laporan=<?php echo $data['id_laporan'];?>" class="btn btn-primary"> <i class="fas fa-undo-alt"></i>
                        <span>Back</span></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nama</label>
                        <input type="hidden" name="id_laporan" value="<?php echo $data['id_laporan'] ?>">
                        <input type="hidden" name="tanggal" value="<?php echo $data['tanggal'] ?>">
                        <input type="text" placeholder="Enter Nama" class="form-control" name="fullname" value="<?php echo $data['fullname'] ?>">
                    </td>                   
                </tr>   
                <tr>
                    <td>
                        <label>Email address</label>
                        <input type="email" placeholder="Enter Email Address" class="form-control" name="email" value="<?php echo $data['email'] ?>">
                    </td>                   
                </tr>   
                <tr>
                    <td>
                        <label>Departemen</label>
                      <select name="departemen" class="form-control" type="tel" required="required">
                        <option value="<?php echo $data['departemen'] ?>"></option>
                        <option value="Kepala Dinas">Kepala Dinas</option>
                        <option value="Sekretaris">Sekretaris</option>
                        <option value="Pengelolaan Informasi Publik">Pengelolaan Informasi Publik</option>
                        <option value="Pengelolaan Komunikasi Publik">Pengelolaan Komunikasi Publik</option>
                        <option value="Teknologi Informasi">Teknologi Informasi</option>
                        <option value="Layanan E-Government">Layanan E-Government</option>
                        <option value="Statistik">Statistik</option>
                      </select>
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <label>Problem/Case</label>
                        <input type="text" placeholder="Enter Problem/Case" class="form-control" name="problem" value="<?php echo $data['problem'] ?>">
                    </td>                   
                </tr>
                <tr>
                    <td>
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="<?php echo $data['status'] ?>"></option>
                            <option value="Pending">Pending</option>
                            <option value="Selesai">Selesai</option>
                        </select>
                    </td>                   
                </tr>   
                <tr>
                    <td><input type="submit" class="btn btn-primary" value="Simpan"></td>                   
                </tr>               
            </table>

        </form>
    <?php } ?>
</body>
</html>