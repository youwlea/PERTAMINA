<?php
$db = new Db;
if ($_GET['act'] === 'edit') {
    $data = $db->selectQuery('tbl_keagenan')->where(['id' => $_GET['id']])->one();
}
?>

<form id="form_keagenan" class="mt-5">
    <?php if ($_GET['act'] === 'edit'): ?>
        <input type="hidden" name="id" id="id" value="<?= $data->id ?>" class="form-control">
    <?php endif; ?>
    <div class="container col-sm-8">
      <div class="form-group row">
          <label for="nama_perusahaan" class="col-sm-3 col-form-label">Nama Perusahaan / Agen</label>
          <div class="col-sm-9">
              <input type="text" name="nama_perusahaan" id="nama_perusahaaan" value="<?= isset($data->nama_perusahaan) ? $data->nama_perusahaan : '' ?>" class="form-control">
          </div>
      </div>
        <div class="form-group row">
            <label for="no_ktp" class="col-sm-3 col-form-label">NO. KTP</label>
            <div class="col-sm-9">
                <input type="text" name="no_ktp" id="no_ktp" value="<?= isset($data->no_ktp) ? $data->no_ktp : '' ?>" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama_pemilik" class="col-sm-3 col-form-label">Nama Direktur / Pemilik Perusahaan</label>
            <div class="col-sm-9">
                <input type="text" name="nama_pemilik" id="nama_pemilik" value="<?= isset($data->nama_pemilik) ? $data->nama_pemilik : '' ?>" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-3 col-form-label">Alamat Perusahaan</label>
            <div class="col-sm-9">
                <textarea class="form-control" rows="6" name="alamat" id="alamat"><?= isset($data->alamat) ? $data->alamat : '' ?></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-3 offset-sm-9">
                <button id="btn_submit_keagenan" class="btn btn-success float-right" style="text-transform: capitalize;"><?= $_GET['act'] === 'tambah' ? 'Tambah' : 'Update' ?></button>
            </div>
        </div>
    </div>
</form>

<script>
    $(function() {

        $("#btn_submit_keagenan").on("click", function(e) {
            e.preventDefault();
            let data = $("#form_keagenan")[0];
            let op = '<?= $_GET['act'] === 'tambah' ? 'tambah' : 'update' ?>';
            $.ajax({
                url: 'app/keagenan/operation.php?op=' + op,
                type: 'POST',
                processData: false,
                contentType: false,
                dataType: "json",
                data: new FormData(data),
                success: function(result) {
                    if (result.status) {
                        Swal.fire({title: "Success !", text: result.message, type: "success"}).then(function() {
                            window.location = '<?= Helpers::baseUrl("keagenan.php") ?>';
                        });
                    } else {
                        Swal.fire("Error !", result.message, "error");
                    }
                }
            });

        });
    });
</script>
