<?php
header('Content-Type: application/json');
error_reporting(0);

require_once('../../config/Db.php');
require_once('../../components/Helpers.php');

$result = [
    'status' => false,
    'message' => 'Terjadi Kesalahan Sistem',
    'data' => [],
];

$post_data = $_POST;
$metode = $post_data['metode'];

if (!$metode) {
    $result['message'] = "Metode Tidak Boleh Kosong";
    echo json_encode($result);exit();
}

$result['data'] = getHasil($metode);

if ($result['data']) {
    $result['status'] = true;
    $result['message'] = "SPK Perpanjangan Keagenan Elpiji Menggunakan Metode " . strtoupper($metode);
}

function getHasil($metode)
{
    $db = new Db;

    $kriteria = $db->selectQuery('tbl_kriteria')->indexIdAll();

    if (!$kriteria) {
        $result['message'] = "Data Kriteria Kosong";
        echo json_encode($result);exit();
    }

    if (Helpers::cekBobotKosong($kriteria)) {
        $result['message'] = "Bobot Kriteria Masih ada yang Kosong atau 0";
        echo json_encode($result);exit();
    }

    $penilaian = $db->selectQuery('tbl_penilaian p', ['p.*', 'd.nama_perusahaan'])
                    ->join('tbl_keagenan d')
                    ->on('p.id_keagenan = d.id')
                    ->all();

    if (!$penilaian) {
        $result['message'] = "Data Penilaian Kosong";
        echo json_encode($result);exit();
    }

    if (Helpers::cekPenilaianKosong($penilaian, count($kriteria))) {
        $result['message'] = "Nilai di Data Penilaian Masih ada yang Kosong atau 0";
        echo json_encode($result);exit();
    }

    $detail_kriteria = getDetailKriteria($penilaian, $kriteria);
    $hasil = [];

    if ($metode === 'saw') {
        foreach ($penilaian as $key => $pen) {
            $data_nilai = [];

            $data_nilai['id'] = $pen->id;
            $data_nilai['nama_perusahaan'] = $pen->nama_perusahaan;
            $data_nilai['nilai'] = json_decode($pen->nilai, true);
            $data_nilai['normalisasi'] = getNormalisasi($data_nilai['nilai'], $detail_kriteria);
            $data_nilai['rank'] = getRank($data_nilai['normalisasi'], $detail_kriteria);

            $hasil[] = $data_nilai;
        }
    } else if ($metode === 'wp') {
        foreach ($penilaian as $key => $pen) {
            $data_nilai = [];

            $data_nilai['id'] = $pen->id;
            $data_nilai['nama_perusahaan'] = $pen->nama_perusahaan;
            $data_nilai['nilai'] = json_decode($pen->nilai, true);
            $data_nilai['vektor_s'] = getVektorS($data_nilai['nilai'], $detail_kriteria);

            $hasil[] = $data_nilai;
        }

        $vektor_v = getVektorV($hasil);

        foreach ($hasil as $key => $has) {
            $hasil[$key]['vektor_v'] = $vektor_v[$has['id']];
        }
    }

    $keagenan_terbaik = getkeagenanTerbaik($hasil, $metode);

    return [
        'hasil' => json_encode($hasil),
        'kriteria' => $kriteria,
        'keagenan_terbaik' => $keagenan_terbaik,
        'detail_kriteria' => $detail_kriteria,
    ];
}

function getDetailKriteria($penilaian, $kriteria)
{
    $detail_kriteria = $list_kriteria = [];
    foreach ($kriteria as $id_kri => $kri) {
        foreach ($penilaian as $pen) {
            $nilai = json_decode($pen->nilai, true);
            $list_kriteria[$id_kri][] = $nilai[$id_kri];
        }
        $detail_kriteria[$id_kri]['nilai'] = $kri->tipe === 'COST' ? min($list_kriteria[$id_kri]) : max($list_kriteria[$id_kri]);
        $detail_kriteria[$id_kri]['tipe'] = $kri->tipe === 'COST' ? 'cost' : 'benefit';
        $detail_kriteria[$id_kri]['bobot'] = $kri->bobot;
        unset($list_kriteria[$id_kri]);
    }

    return $detail_kriteria;
}

function getNilai($penilaian)
{
    $nilai = [];

    foreach ($penilaian as $pen) {
        $nilai[$pen->id] = json_decode($pen->nilai, true);
    }

    return $nilai;
}

function getNormalisasi($nilai, $detail_kriteria)
{
    $normalisasi = [];

    foreach ($nilai as $id_kri => $nil) {
        $normalisasi[$id_kri] = ($detail_kriteria[$id_kri]['tipe'] === 'cost') ? $detail_kriteria[$id_kri]['nilai'] / $nil : $nil / $detail_kriteria[$id_kri]['nilai'];
    }

    return $normalisasi;
}

function getRank($normalisasi, $detail_kriteria)
{
    $rank = [];

    foreach ($normalisasi as $id_kri => $norm) {
        $rank[$id_kri] = $norm * $detail_kriteria[$id_kri]['bobot'];
    }

    $rank = array_sum($rank);

    return $rank;
}

function getVektorS($nilai, $detail_kriteria)
{
    $vektor_s = [];

    foreach ($nilai as $id_kri => $nil) {
        $vektor_s[$id_kri] = ($detail_kriteria[$id_kri]['tipe'] === 'cost') ? pow($nil, -($detail_kriteria[$id_kri]['bobot'])) : pow($nil, $detail_kriteria[$id_kri]['bobot']);
    }

    $vektor_s = array_product($vektor_s);

    return $vektor_s;
}

function getVektorV($hasil)
{
    $vektor_v = [];
    $sum = 0;

    foreach ($hasil as $has) {
        $sum += $has['vektor_s'];
    }

    foreach ($hasil as $has) {
        $vektor_v[$has['id']] = $has['vektor_s'] / $sum;
    }

    return $vektor_v;
}

function getKeagenanTerbaik($hasil, $metode)
{
    $data = [];

    if ($metode === 'saw') {
        foreach ($hasil as $row) {
            $data[$row['nama_perusahaan']] = $row['rank'];
        }
    } else if ($metode === 'wp') {
        foreach ($hasil as $row) {
            $data[$row['nama_perusahaan']] = $row['vektor_v'];
        }
    }

    $bests = array_keys($data, max($data));

    return $bests;
}

echo json_encode($result);exit();
