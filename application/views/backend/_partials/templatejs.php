
<script language="JavaScript" type="application/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script language="JavaScript" type="application/javascript" src="<?php echo base_url().'assets/js/app.js'?>"></script>
<script language="JavaScript" type="application/javascript" src="<?php echo base_url().'assets/extensions/toastify-js/src/toastify.js'?>"></script>
<script language="JavaScript" type="application/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>

<script src="<?php echo base_url().'assets/DataTables/datatables.min.js'?>"></script>
<script language="JavaScript" type="application/javascript" src="<?php echo base_url().'assets/js/select2.min.js'?>"></script>

<script language="JavaScript" type="application/javascript" src="<?php echo base_url().'assets/extensions/sweetalert2/sweetalert2.min.js'?>"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script language="JavaScript" type="application/javascript" src="<?php echo base_url().'assets/js/pages/toastifycrud.js'?>"></script>
<!-- <script language="JavaScript" type="text/javascript" src="<?php //echo base_url().'assets/js/jquery-2.1.4.min.js'?>"></script> -->


<script src="<?= base_url('assets/'); ?>vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.bundle.min.js"></script>
    
    <script src="<?= base_url('assets/'); ?>js/main.js"></script>
    <script src="<?= base_url('assets/'); ?>vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.bundle.min.js"></script>
    
<script src="<?= base_url('assets/'); ?>vendors/simple-datatables/simple-datatables.js"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>

    <script src="assets/js/main.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>
    <script src="<?= base_url(); ?>assets/dist/js/backend/journal_voucher.js"></script>

    <script src="<?= base_url(); ?>assets/dist/js/custom.js"></script>

    <script>
        $('.custom-file-input').on('change', function(){
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });


        $('.form-check-input').on('click', function()
        {
            const menuId = $(this).data('menu');
            const roleId = $(this).data('role');

            $.ajax({
                url:"<?= base_url('admin/changeaccess'); ?>",
                type :'post',
                data : {
                    menuId: menuId,
                    roleId: roleId
                },
                success: function(){
                    document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
                }
            });
        });
    </script>
        <script type="text/javascript">
    function show_modal_page(url)
    {



          // SHOWING AJAX PRELOADER IMAGE
        jQuery('#page_model_view_data .modal-body').html('<div style="text-align:center;margin-top:200px;"><img src="<?php echo base_url(); ?>assets/img/loader-1.gif" style="height:25px;" /></div>');
        
        // LOADING THE AJAX MODAL
        jQuery('#page_model_view_data').modal('show', {backdrop: 'true'});
        
        // SHOW AJAX RESPONSE ON REQUEST SUCCESS
        $.ajax({
            url: url,
            success: function(response)
            {
               //alert(response);
                jQuery('#page_model_view_data .modal-body').html(response);
            }
        });
    }   

    function add_new_row(url)
    {   
        // SHOW AJAX RESPONSE ON REQUEST SUCCESS
        $.ajax({
            url: url,
            success: function(response)
            {
               //alert(response);
                jQuery('#transaction_table_body').append(response);
            }
        });
    }
    </script>
        
     <!-- (Ajax Modal)-->
    <div class="modal fade" id="page_model_view_data">
        <div class="modal-dialog modal-lg" >
            <div class="modal-content">
                <div  class="modal-body" style="height:500px; overflow:auto;">
        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/'); ?>vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.bundle.min.js"></script>
    
<script src="<?= base_url('assets/'); ?>vendors/apexcharts/apexcharts.js"></script>
<script src="<?= base_url('assets/'); ?>js/pages/dashboard.js"></script>

    <script src="<?= base_url('assets/'); ?>js/main.js"></script>
    <script src="<?= base_url('assets/'); ?>vendors/dayjs/dayjs.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendors/apexcharts/apexcharts.js"></script>
<script src="<?= base_url('assets/'); ?>js/pages/ui-apexchart.js"></script>

<script src="<?php echo base_url(); ?>assets/dist/js/custom.js"></script>
<script type="text/javascript">
    //USED TO VISIBLE EXPENSE TYPE 
    function visible_expense(value)
    {
        if(value == 'Expense')
        {
            $('#expense-type-id').css('display','block');
        }
        else
        {
            $('#expense-type-id').css('display','none');
        }
        
    }
</script>
<script type="text/javascript">
    $("#nature_id").on("change", function() 
    {
        var value = $('#nature_id').val();
        if(value == 'Expense')
        {
            $('#expense-type-id').css('display','block');
        }
        else
        {
            $('#expense-type-id').css('display','none');
        }
    });
</script>
<script type="text/javascript" language="Javascript">
   harga_perolehan = document.formD.harga_perolehan.value;
   document.formD.akumulasi_penyusutan.value = harga_perolehan;
   jumlah_unit = document.formD.jumlah_unit.value;
   document.formD.akumulasi_penyusutan.value = jumlah_unit;
   umur_manfaat = document.formD.umur_manfaat.value;
   document.formD.akumulasi_penyusutan.value = umur_manfaat;

   function OnChange(value){
     harga_perolehan = document.formD.harga_perolehan.value;
     jumlah_unit = document.formD.jumlah_unit.value;
     umur_manfaat = document.formD.umur_manfaat.value;

     akumulasi_penyusutan = harga_perolehan * jumlah_unit / umur_manfaat;
     document.formD.akumulasi_penyusutan.value = akumulasi_penyusutan;
   }
 </script>