<h2 class="text-center">Hasil Implementasi SAW</h2>

<div class="row mb-5 ">
    <div class="col-sm-4">
        <select name="metode" id="metode" class="form-control">
            <option value="saw">SAW</option>
        </select>
    </div>
    <div class="col-sm-4">
        <button class="btn btn-success" id="btn_hasil">Proses</button>
    </div>
</div>

<div id="container_hasil" style="display: none;">
    <div class="alert alert-primary" role="alert">
        <div id="info_hasil"></div>
    </div>

    <ul class="nav nav-tabs">

        <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#tab2" id="link2"></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#tab3" id="link3"></a></li>
    </ul>

    <div class="tab-content">
        <div id="tab_penilaian" class="tab-pane fade">
            <div id="data_penilaian"></div>
        </div>
        <div id="tab2" class="tab-pane fade">
            <div id="data2"></div>
        </div>
        <div id="tab3" class="tab-pane fade">
            <div id="data3"></div>
        </div>
    </div>
</div>

<script>
    $(function() {
        $("body").on("click", "#btn_hasil", function() {
            $("#container_hasil").toggle();
            $.ajax({
                url: "app/hasil/operation.php",
                type: "POST",
                dataType: "json",
                data: {metode: $("#metode").val()},
                success: function(result) {
                    if (result.status) {
                        $("#data_penilaian").load("app/hasil/_data_penilaian.php", {
                            hasil: result.data.hasil,
                            kriteria: result.data.kriteria
                        });

                        if ($("#metode").val() == "saw") {
                            $("#link2").text("Normalisasi");
                            $("#data2").load("app/hasil/_data_normalisasi.php", {
                                hasil: result.data.hasil,
                                kriteria: result.data.kriteria
                            });
                            $("#link3").text("Kelayakan Agen");
                            $("#data3").load("app/hasil/_data_rank.php", {
                                hasil: result.data.hasil,
                                kriteria: result.data.kriteria
                            });
                        } else if ($("#metode").val() == "wp") {
                            $("#link2").text("Vektor S");
                            $("#data2").load("app/hasil/_data_vektor_s.php", {
                                hasil: result.data.hasil,
                                kriteria: result.data.kriteria
                            });
                            $("#link3").text("Vektor V");
                            $("#data3").load("app/hasil/_data_vektor_v.php", {
                                hasil: result.data.hasil,
                                kriteria: result.data.kriteria
                            });
                        }

                        $("#info_hasil").html("Berdasarkan Aturan Kriteria Kelayakan yang ditentukan adalah <b> >= 0.70 (LAYAK DIPERPANJANG) </b>, maka hasil yang diperoleh adalah :");

                        // let detail_info = `<b>Keterangan</b> : <br /><table class="table table-bordered"><thead><tr><th></th><th>Nama Kriteria</th><th>Tipe Kriteria</th><th>Min / Max</th><th>Bobot</th></tr></thead><tbody>`;

                        // Object.keys(result.data.kriteria).forEach(function(key) {
                        //     detail_info += `
                        //         <tr>
                        //             <td>C` + key + `</td>
                        //             <td>` + result.data.kriteria[key].nama_kriteria + `</td>
                        //             <td>` + result.data.detail_kriteria[key].tipe + `</td>
                        //             <td>`
                        //                 + (result.data.detail_kriteria[key].tipe == "cost" ? "Min" : "Max")
                        //                 + ` = ` + result.data.detail_kriteria[key].nilai +
                        //             `</td>
                        //             <td>` + result.data.detail_kriteria[key].bobot + `</td>
                        //         </tr>
                        //     `;
                        // });

                        // detail_info += "</tbody></table>";
                        // $("#info_detail").html(detail_info);
                        $("#container_hasil").show();
                    } else {
                        Swal.fire("Error !", result.message, "error");
                    }
                }
            });
        });
    });
</script>
