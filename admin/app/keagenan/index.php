<h2 class="text-center">Data Keagenan</h2>
<p>
    <a href="keagenan.php?act=tambah" class="btn btn-primary">Tambah Keagenan</a>
</p>
<div id="data_keagenan">
</div>
<script>
    $(function() {
        $("#data_keagenan").load("app/keagenan/_data_keagenan.php");
        $("body").on("click", "#btn_keagenan_delete", function() {
            let that = $(this);
            alertConfirmation().then(function(res) {
                if (res.value) {
                    $.ajax({
                        url: "app/keagenan/operation.php?op=delete",
                        type: "POST",
                        dataType: "json",
                        data: {id: that.data("id")},
                        success: function(result) {
                            if (result.status) {
                                Swal.fire("Deleted !", result.message, "success").then(function() {
                                    $("#data_keagenan").load("app/keagenan/_data_keagenan.php");
                                });
                            } else {
                                Swal.fire("Error !", result.message, "error");
                            }
                        }
                    });
                }
            });
        });
    });
</script>
