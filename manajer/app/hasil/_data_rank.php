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
            <th>Nama Keagenan</th>
            <th>Hasil</th>
            <th>Kriteria</th>
    </thead>
    <tbody>
        <?php if (count($data_hasil) > 0): ?>
            <?php foreach ($data_hasil as $key => $data): ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $data['nama_perusahaan'] ?></td>
                    <td class="text-center"><?= isset($data['rank']) ? $data['rank'] : '-'?></td>
                    <td class="text-center"><?php
                    $h = $data['rank'];

                    if ($h < "0.70") {
                      echo "Tidak Layak Diperpanjang";
                    } else {
                      echo "Layak Diperpanjang";
                    }
                    ?>

                    </td>
                    </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr class="text-center">
                <td colspan="3">Data Tidak Ditemukan</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
