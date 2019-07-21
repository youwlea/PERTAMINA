<?php
$db = new Db;
$data_kriteria = $db->selectQuery('tbl_kriteria', ['id', 'nama_kriteria', 'sub_kriteria'])->all();

if ($_GET['act'] === 'edit') {
    $data = $db->selectQuery('tbl_penilaian p', ['p.*', 'd.nama_keagenan'])
                ->join('tbl_keagenan d')
                ->on('p.id_keagenan = d.id')
                ->where(['p.id' => $_GET['id']])
                ->one();
}

$id_keagenan_exist = isset($data->id_keagenan) ? $data->id_keagenan : '';

$data_keagenan = Helpers::_curl(Helpers::baseUrl('app/penilaian/operation.php?op=getDatakeagenan'), [
    'id_keagenan_exist' => $id_keagenan_exist,
], true);

$nilai = isset($data->nilai) && !empty($data->nilai) ? json_decode($data->nilai, true) : '';
?>

<?php if (!$data_keagenan['items']): ?>
    <div class="alert alert-danger" role="alert">
        Data keagenan Kosong atau Sudah Digunakan Semuanya. Isi <a href="keagenan.php">keagenan</a> Terlebih Dahulu.
    </div>
<?php elseif (!$data_kriteria): ?>
    <div class="alert alert-danger" role="alert">
        Data Kriteria Kosong. Isi <a href="kriteria.php">Kriteria</a> Terlebih Dahulu.
    </div>
<?php else: ?>
    <form id="form_penilaian" class="mt-5">
        <?php if ($_GET['act'] === 'edit'): ?>
            <input type="hidden" name="id" id="id" value="<?= $data->id ?>" class="form-control">
        <?php endif; ?>
        <div class="container col-sm-8">
            <div class="form-group row">
                <label for="id_keagenan" class="col-sm-3 col-form-label">Nama Keagenan</label>
                <div class="col-sm-9">
                    <select name="id_keagenan" id="id_keagenan" class="form-control select-nama-keagenan">
                        <?php if ($_GET['act'] === 'edit'): ?>
                            <option value="<?= $data->id_keagenan ?>" selected><?= $data->nama_perusahaan ?></option>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
            <fieldset class="fieldset">
                <legend>Nilai</legend>
                <?php foreach ($data_kriteria as $kriteria): ?>
                    <div class="form-group row">
                        <label for="nilai[<?= $kriteria->id ?>]" class="col-sm-3 col-form-label">
                            <?= $kriteria->nama_kriteria ?>
                        </label>
                        <div class="col-sm-9">
                        <?php if (!empty($kriteria->sub_kriteria)): ?>
                            <select name="nilai[<?= $kriteria->id ?>]" class="form-control">
                                <option value="">--Pilih Sub Kriteria--</option>
                                <?php foreach (json_decode($kriteria->sub_kriteria, true) as $nilai_sub => $nama_sub): ?>
                                    <option value="<?= $nilai_sub ?>" <?= isset($nilai[$kriteria->id]) ? $nilai[$kriteria->id] == $nilai_sub ? 'selected="selected"' : '' : ''?>><?= $nama_sub ?></option>
                                <?php endforeach; ?>
                            </select>
                        <?php else: ?>
                            <input type="text" name="nilai[<?= $kriteria->id ?>]" id="nilai[<?= $kriteria->id ?>]" value="<?= isset($nilai[$kriteria->id]) ? $nilai[$kriteria->id] : '' ?>" class="form-control" style="width: 200px;">
                        <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </fieldset>
            <div class="form-group row">
                <div class="col-sm-3 offset-sm-9">
                    <button id="btn_submit_penilaian" class="btn btn-success float-right" style="text-transform: capitalize;"><?= $_GET['act'] === 'tambah' ? 'Tambah' : 'Update' ?></button>
                </div>
            </div>
        </div>
    </form>
<?php endif; ?>

<script>
    $(function() {
        var id_keagenan_exist = '<?= $id_keagenan_exist ?>';

        $("#btn_submit_penilaian").on("click", function(e) {
            e.preventDefault();
            let data = $("#form_penilaian")[0];
            let op = '<?= $_GET['act'] === 'tambah' ? 'tambah' : 'update' ?>';
            $.ajax({
                url: "app/penilaian/operation.php?op=" + op,
                type: "POST",
                processData: false,
                contentType: false,
                dataType: "json",
                data: new FormData(data),
                success: function(result) {
                    if (result.status) {
                        Swal.fire({title: "Success !", text: result.message, type: "success"}).then(function() {
                            window.location = '<?= Helpers::baseUrl("penilaian.php") ?>';
                        });
                    } else {
                        Swal.fire("Error !", result.message, "error");
                    }
                }
            });
        });

        $(".select-nama-keagenan").select2({
            placeholder: "--Pilih keagenan--",
            ajax: {
                url: '<?= Helpers::baseUrl() ?>' + "app/penilaian/operation.php?op=getDatakeagenan",
                type: "POST",
                dataType: "json",
                data: function(params) {
                    return {
                        search: params.term,
                        id_keagenan_exist: id_keagenan_exist
                    };
                },
                processResults: function(data) {
                    return {
                        results: $.map(data.items, function (item) {
                            return {
                                id: item.id,
                                text: item.nama_perusahaan
                            }
                        })
                    };
                }
            }
        });
    });
</script>
