<div class="page-heading" id="page-heading">
    <h3><?php echo $title; ?></h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                <div class="col-12">
                                    <h5>Stok Produk Ready Sale</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi text-primary" width="32" height="32" fill="blue" style="width:10px">
                                            <use xlink:href="assets/images/bootstrap-icons.svg#circle-fill" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div id="chart-data-produksi" style="width:100%; height:400px;"></div> <!-- Adjusted height for larger size -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
        <div class="col-6 col-lg-3 col-md-6" id="lists">

<!------- FOOTER --------->
<?php $this->load->view("backend/_partials/footer.php") ?>
<!------- FOOTER --------->

<script language="JavaScript" type="application/javascript" src="<?php echo base_url().'assets/extensions/apexcharts/apexcharts.min.js'?>"></script>

<script language="JavaScript" type="application/javascript">
    $(document).ready(function(){
        $('#page-heading').on('click','.download-panduan',function(){
            var site_url = '<?php echo site_url();?>';
            window.location.href = site_url+"backend/dashboard/download";
        });

        $('#lists').on('click','.btn-produksi',function(){
            var site_url = '<?php echo site_url();?>';
            window.location.href = site_url+"backend/rekap_tim_produksi";
        });
        $('#lists').on('click','.btn-transaksi',function(){
            var site_url = '<?php echo site_url();?>';
            window.location.href = site_url+"backend/rekap_nota_transaksi_konsumen";
        });

        var optionsStokProduksi = {
            annotations: {
                position: 'back'
            },
            dataLabels: {
                enabled:false
            },
            chart: {
                type: 'bar',
                height: 400  // Adjusted height for larger size
            },
            fill: {
                opacity:1
            },
            series: [{
                name: 'Stok Produk Ready Sale',
                data: <?php echo $valuestokproduksi;?>,
            }],
            colors: ['#FF0000', '#00FF00', '#0000FF', '#FFA500', '#FF00FF', '#00FFFF', '#A52A2A', '#800080', '#808080'], // Changed colors to avoid yellow
            xaxis: {
                categories: <?php echo $namestokproduksi;?>,
                labels: {
                    style: {
                        colors: ['#FF0000', '#00FF00', '#0000FF', '#FFA500', '#FF00FF', '#00FFFF', '#A52A2A', '#800080', '#808080'], // Changed colors to avoid yellow
                        fontSize: '12px',
                        cssClass: 'apexcharts-xaxis-label', // Adding class for custom CSS
                        fontFamily: 'Arial, sans-serif',
                        fontWeight: 'bold',
                    }
                }
            },
            legend: {
                show: false  // Hide the legend
            },
            plotOptions: {
                bar: {
                    distributed: true  // Ensure bars have different colors
                }
            }
        }
        var chartStokProduksi = new ApexCharts(document.querySelector("#chart-data-produksi"), optionsStokProduksi);
        chartStokProduksi.render();
    });
</script>

<style>
    .apexcharts-xaxis-label {
        -webkit-text-stroke: 1px black; /* Adding black border to text for webkit browsers */
        text-stroke: 1px black; /* Adding black border to text */
    }
</style>
    
</body>
</html>
