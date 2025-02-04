
<div class="page-content">
    <!------- breadcrumb --------->
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                
                <h3><a href="<?php echo site_url('backend/rekap_tim_produksi');?>"><i class="bi bi-chevron-left"></i></a> <?php echo $title; ?></h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header float-start float-lg-end'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('backend/dashboard');?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!------- breadcrumb --------->
    
    


    <!-- Post Datatables -->
    <section id="input-validation">
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="card">
                   
            <div class="card-body">
                

                <!-- FILTER -->
                    <p class="text-subtitle text-muted">Form Edit Produksi Barang</p>
                        <form id="form-filter">
                            <div class="row">

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <select class="form-select nama_produksi" name="nama_produksi" id="nama_produksi" style="width:100%" required>
                                        
                                        <?php foreach ($produksi->result() as $row) : ?>
                                            <option value="<?php echo $row->id_stock;?>"><?php echo $row->nama_stock;?> | <?php echo $row->stock;?> <?php echo $row->nama_satuan;?></option>
                                        <?php endforeach;?>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    
                                    <input type="number" name="jumlah_produksi" class="form-control jumlah_produksi" id="jumlah_produksi" value="<?php echo $jumlah; ?>" required>
                                </div>
                            </div>
                            
                            <div class="col-12 col-md-12">
                                <div class="form-floating">
                                    <textarea class="form-control catatan_produksi" placeholder="Catatan Produksi *Opsional" name="catatan_produksi" id="catatan_produksi"><?php echo $catatan; ?></textarea>
                                    <label for="floatingTextarea">Catatan Produksi *Opsional</label>
                                </div>
                            </div>
                            
                            
                            </div>
                        
                    <hr>
<!-- FILTER -->
                
                <div class="btn-group mb-3  float-end" role="group" aria-label="Basic example">
                <a class="btn icon btn-sm btn-success" id="btn-validate-import" onclick="add_person()"><i class="bi bi-plus"></i></a></i></a>&nbsp;&nbsp;

                </div>
                <br/><br/>
                <h5>List Material</h5>
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordered mb-0">
                    <thead>
                                <tr>
                                    <th>No</th>
                                    <th class="col-6">Nama Material</th>
                                    <th>Jumlah</th>
                                    
                                    <th class="col-2">Biaya Dikeluarkan</th>
                                    <th class="col-3">Aksi</th>
                                </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                        <tr>

                            <th colspan="3" style="text-align:right">Total:</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
                </div>
                </div>
                        <input type="hidden"  name="id_nota" class="id_nota" value="<?php echo $id; ?>"/>
                        <input type="hidden"  name="totalbiaya" class="totalbiaya"/> 
                        <div class="col-12 col-md-4">
                            <div class="btn-group mb-3">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" id="prosesproduksi" class="btn btn-success"><i class="bi bi-save"></i> Edit Nota</button>
                                
                            </div>
                        </div>
                    </form>
                    <form id="form-pembatalan">
                            <input type="hidden"  name="pembatalan" class="pembatalan"/>
                            <div class="btn-group float-end">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" id="prosespembatalannota" class="btn btn-danger"><i class="bi bi-trash"></i> Hapus Nota</button>
                                
                            </div>
                    </form>
                </div>
            </div>

                            
                        
        </div>
    </section>
    <!-- Post Datatables END -->

    
</div>

        <!------- FOOTER --------->
            <?php $this->load->view("backend/_partials/footer.php") ?>
        <!------- FOOTER --------->
        </div>
    </div>


<!------- TOASTIFY JS --------->
    <?php $this->load->view("backend/_partials/toastify.php") ?>
    
<!------- TOASTIFY JS --------->


<script type="application/javascript">

var save_method; 
var table;
var csfrData = {};
csfrData['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?php echo
$this->security->get_csrf_hash(); ?>';
$.ajaxSetup({
data: csfrData
});
$(document).ready(function() {
    $("#check-all").click(function(){
        if($(this).is(":checked"))
            $(".sub_chk").prop("checked", true);
        else
            $(".sub_chk").prop("checked", false);
    });

    //datatables
    

    var id="<?php echo $id; ?>";
    var jenis="<?php echo $jenis; ?>";
    $("#nama_produksi").select2({
        cache: false,
        theme: "bootstrap-5",
    }).val(jenis).trigger("change");
    table = $('#mytable').DataTable({

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "searching": false,
        "lengthChange": false,
        "paging": false,
        
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('backend/rekap_tim_produksi/get_ajax_list_edit')?>",
            "type": "POST",
            "data":{id:id},
            
        },

        //Set column definition initialisation properties.
        "columnDefs": [
            {
                "targets": [ 0,1,2,3,4 ], //first column
                "orderable": false, //set not orderable
            },
           
        ],

        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
            

            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?

                    i.replace(/[\Rp, ,.]/g, '')*1 :

                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            total = api
                .column( 3 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Total over this page
            pageTotal = api
                .column( 3, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
            var test = (pageTotal).toLocaleString(undefined, 
                    { minimumFractionDigits: 0 }
                );
            // Update footer
            $('.totalbiaya').val(pageTotal);
            $( api.column( 3 ).footer() ).html(
                
                'Rp. '+test +''

            );

       
        },

    });

   
   
    $("#nama_produksi").select2({
        cache: false,
        theme: "bootstrap-5",
    });
          
   
    $("#jumlah").change(function(){
        $(this).parent().parent().removeClass('help-block text-danger');
        $(this).next().empty();
    });


    
});



function add_person()
{
    save_method = 'add';
    $('#form')[0].reset(); 
    $('.form-group').removeClass('has-error'); 
    $('.help-block').empty(); 
    $('#modal_form').modal('show'); 
    $('.modal-title').text('Gunakan Material'); 
    $("#bahan_baku").select2({
        dropdownParent: $("#modal_form"),
        cache: false,
        theme: "bootstrap-5",
    });
    
}
 

function reload_table()
{
    table.ajax.reload(null,false); 
}

function proc()
{
    
    
    


    $('#btnSave').text('saving...'); 
    $('#btnSave').attr('disabled',true); 
    var url;

    if(save_method == 'add') {
        url = "<?php echo site_url('backend/rekap_tim_produksi/add')?>";
    } else {
        url = "<?php echo site_url('backend/rekap_tim_produksi/edit')?>";
    }

    
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) 
            {
                toastify_success();
                //$('#modal_form').modal('hide');
                reload_table();
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++) 
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); 
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); 
                    $("#bahan_baku").select2({
                        dropdownParent: $("#modal_form"),
                        cache: false,
                        theme: "bootstrap-5",
                    });
                    
                }
            }
            $('#btnSave').text('Save'); 
            $('#btnSave').attr('disabled',false); 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('Save'); 
            $('#btnSave').attr('disabled',false); 

        }
    });

}


    $(document).on("click", "#del", function(e) {
        e.preventDefault();

        var id = $(this).attr("value");

        Swal.fire({
            title: "Apakah kamu yakin ingin menghapus Data ini?",
            text: "Data ini akan di hapus secara Permanen!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Hapus!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "post",
                    url : "<?php echo site_url('backend/rekap_tim_produksi/delete')?>",
                    data: {
                        id: id,
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.res == "success") {
                            Swal.fire(
                                "Deleted!",
                                "Data berhasil dihapus.",
                                "success"
                            );
                            
                            
                            reload_table();
                        } else if(response.res == "errorstock") {
                            Swal.fire({
                                icon: "error",
                                title: "Pembatan gagal, Produk sudah dijual",
                            });
                        } else {

                        }
                    },
                });
            }
        });
    });

    $(document).on("click", "#minus", function(e) {
        e.preventDefault();

        var id = $(this).attr("value");

       
                $.ajax({
                    type: "post",
                    url : "<?php echo site_url('backend/rekap_tim_produksi/minus')?>",
                    data: {
                        id: id,
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.res == "success") {
                                reload_table();
                            } else if(response.res == "error") {
                                alert_stok_berlebihan();
                            } else if(response.res == "errorstock") {
                                alert_gagal_pembatalan_produksi_sudah_dijual();
                            } else {

                            }
                    },
                });
          
    });

    $(document).on("click", "#plus", function(e) {
        e.preventDefault();

        var id = $(this).attr("value");

      
                $.ajax({
                    type: "post",
                    url : "<?php echo site_url('backend/rekap_tim_produksi/plus')?>",
                    data: {
                        id: id,
                    },
                    dataType: "json",
                    success: function(response) {
                
                            if (response.res == "success") {
                                reload_table();
                            } else if(response.res == "error") {
                                alert_stok_habis();
                            } else if(response.res == "errorstock") {
                                alert_gagal_pembatalan_produksi_sudah_dijual();
                            } else {

                            }
                    },
                });
           
    });


    $(document).on("click", "#prosesproduksi", function(e) {
        e.preventDefault();
        var id_nota = $('.id_nota').val();
        var nama_produksi = $('.nama_produksi').val();
        var jumlah_produksi = $('.jumlah_produksi').val();
        var catatan_produksi = $('.catatan_produksi').val();
        var totalbiaya = $('.totalbiaya').val();

            if (id_nota == "" || nama_produksi == "" || jumlah_produksi == "" || totalbiaya == 0) {
                alert_rencana_produksi();
            } else {


                $.ajax({
                    type: "post",
                    url : "<?php echo site_url('backend/rekap_tim_produksi/prosesproduksi')?>",
                    data: {
                        nama_produksi: nama_produksi,jumlah_produksi: jumlah_produksi,totalbiaya: totalbiaya, id_nota:id_nota,catatan_produksi:catatan_produksi
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.res == "success") {
                            var site_url = '<?php echo site_url();?>';
                            
                            window.location = site_url+"backend/rekap_tim_produksi/";

                        }
                    },
                });
            }
          
    });

    $(document).on("click", "#prosespembatalannota", function(e) {
        e.preventDefault();
        var id_nota = $('.id_nota').val();
        
        
        if(total == 0) {

           
                $.ajax({
                    type: "post",
                    url : "<?php echo site_url('backend/rekap_tim_produksi/prosespembatalannota')?>",
                    data: {
                        id_nota: id_nota
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.res == "success") {
                            
                            var site_url = '<?php echo site_url();?>';
                            
                            window.location = site_url+"backend/rekap_tim_produksi/";
                        }
                    },
                });
        } else {
            alert_gagal_pembatalan();
        }


          
    });
</script>

</body>
</html>
