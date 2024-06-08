$(document).ready(function() {
    // Inisialisasi select2 untuk nama_material
    $("#nama_material").select2({
        cache: false,
        theme: "bootstrap-5",
    });

    // Event handler untuk tombol tambah material
    $(document).on("click", "#tambah_material_preeorder", function(e) {
        e.preventDefault();
        var nama_material = $('#nama_material').val();
        var jumlah_material = $('#jumlah_material').val();

        if (nama_material == "" || jumlah_material == "") {
            alert("Material dan jumlah tidak boleh kosong!");
        } else {
            $.ajax({
                type: "post",
                url: "<?php echo site_url('backend/tambah_stock_bahan/add_material')?>",
                data: {
                    nama_material: nama_material,
                    jumlah_material: jumlah_material
                },
                dataType: "json",
                success: function(response) {
                    if (response.status == "success") {
                        alert("Material berhasil ditambahkan!");
                        $('#form-tambahmaterialpreeorder')[0].reset();
                        $("#nama_material").select2("destroy");
                        $("#nama_material").select2({
                            cache: false,
                            theme: "bootstrap-5",
                        });
                        reload_table();
                    } else {
                        alert("Gagal menambahkan material!");
                    }
                }
            });
        }
    });
});
