<?php
require_once('../../config/db.php');
require_once('../../components/Helpers.php');

$db = new Db;
$count_all_data = count($db->selectQuery('tbl_keagenan')->all());
$pagination = Helpers::generatePagination('keagenan', $count_all_data);
$datas = $db->selectQuery('tbl_keagenan')->limit($pagination['start'], $pagination['items_per_page'])->all();
?>
<table class="table table-hover table-striped table-bordered" id="table_keagenan">
    <thead>
        <tr>
            <th>No</th>
            <th>No KTP</th>
            <th>Nama Perusahaan / Agen</th>
            <th>Nama Direktur / Pemilik</th>
            <th>Alamat</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php if ($count_all_data > 0): ?>
            <?php foreach ($datas as $key => $data): ?>
                <tr id="<?= $data->id ?>">
                    <td><?= $pagination['start'] + $key + 1 ?></td>
                    <td><?= $data->no_ktp ?></td>
                    <td><?= $data->nama_perusahaan ?></td>
                    <td><?= $data->nama_pemilik ?></td>
                    <td><?= $data->alamat ?></td>
                    <td>
                        <a href="keagenan.php?act=edit&id=<?= $data->id ?>" class="btn btn-warning btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm" id="btn_keagenan_delete" data-id="<?= $data->id ?>">Delete</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr class="text-center">
                <td colspan="8">Data Tidak Ditemukan</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?= $pagination['html'] ?>
