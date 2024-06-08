
    <!------- breadcrumb --------->
        <?php $this->load->view("backend/_partials/breadcrumb.php") ?>
    <!------- breadcrumb --------->
        <section class="section">
        <div class="card">
            <div class="card-header">
                <a class="my-5 font-weight-bold text-secondary"><b>Cari Periode Waktu</b></a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col my-0">
                        <div class="box-body box-bg ">
                            <div class="make-container-center">
                                <?php
                $attributes = array('id'=>'balance_accounts','method'=>'post','class'=>'');
            ?>
            <?php echo form_open_multipart('backend/statements/balancesheet',$attributes); ?>
            <div class="row no-print">
                <div class="col-md-3">
                    <div class="form-group">
                        <?php echo form_label('Pilih Tahun'); ?>
                        <select class="form-control input-lg" name="year">
                            <option  value="2019"> 2019</option>
                            <option  value="2020"> 2020</option>
                            <option  value="2021"> 2021</option>
                            <option  value="2022"> 2022</option>
                            <option  value="2023"> 2023</option>
                            <option  value="2024"> 2024</option>
                            <option  value="2025"> 2025</option>
                            <option  value="2026"> 2026</option>
                        </select>
                    </div>
                </div>                    
                <div class="col-md-3">
                    <div class="form-group" style="margin-top:8px;">
                        <?php
                            $data = array('class'=>'d-none d-sm-inline-block btn btn-danger shadow-sm mt-3','type' => 'submit','name'=>'btn_submit_customer','value'=>'true', 'content' => '<i  aria-hidden="true"></i> 
                                Buat Statement');
                            echo form_button($data);
                         ?>  
                         <button onclick="printDiv('print-section')" class="d-none d-sm-inline-block btn btn-warning shadow-sm mt-3"><i class="fas fa-print fa-sm"></i> Cetak</button>
                    </div>
                </div>      
            <?php form_close(); ?>
                                    </div>            
                                </div>
                            </div>
        <div class="card">
            <div class="card-header">
                
            </div>
            <div class="card-body">
                <div class="box" id="print-section">
                <div class="row">
            <div class="col-md-3"></div>
                <div class="col-md-6">
                   <h5 style="text-align:center"><b>Laporan Posisi Keuangan</b></h5>
                    <h5 style="text-align:center"><b></b></h5>
                   <h5 style="text-align:center">Periode Berakhir Tanggal : <?php echo $to; ?> 
                   <h5 style="text-align:center"><b><br></b></h5>
                   </h5>
                </div>
            <div class="col-md-3"></div>  
        </div>
        <div class="row">
            <div class="row">
            <div class="col-md-12">
                 <table class="table table-hover">
                     <thead>
                       <tr >
                           <th colspan="2" class="balancesheet-header">AKTIVA LANCAR / CURRENT ASSET</th>
                       </tr>
                     </thead>
                     <tbody>
                       <?php echo $balance_records['current_assets']; ?>
                     </tbody>
                 </table>
                 <table class="table table-hover">
                     <thead>
                       <tr>
                           <th colspan="2" class="balancesheet-header">AKTIVA TETAP / FIXED ASSET</th>
                       </tr>
                     </thead>
                     <tbody>
                        <?php echo $balance_records['noncurrent_assets']; ?>
                     </tbody>
                 </table>                 
                 <table class="table table-hover">
                     <tbody>
                      <?php echo $balance_records['total_assets']; ?>
                     </tbody>
                 </table>
            </div>
            <div class="col-md-12">
                 <table class="table table-hover">
                     <thead>
                       <tr>
                           <th colspan="2" class="balancesheet-header">KEWAJIBAN / LIABILITY</th>
                       </tr>
                     </thead>
                     <tbody>
                         <?php echo $balance_records['current_libility']; ?>
                     </tbody>
                 </table>
                 <table class="table table-hover">
                     <thead>
                       <tr>
                          <th colspan="2" class="balancesheet-header">KEWAJIBAN / LIABILITY OTHER</th>
                       </tr>
                     </thead>
                     <tbody>
                        <?php echo $balance_records['noncurrent_libility']; ?>
                        <?php echo $balance_records['total_currentnoncurrent_libility']; ?>
                     </tbody>
                 </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                 <table class="table table-hover">
                     <thead>
                       <tr>
                           <th colspan="2" class="balancesheet-header">MODAL / EQUITY</th>
                       </tr>
                     </thead>
                     <tbody>
                       <?php echo $balance_records['equity']; ?>
                     </tbody>
                 </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                 <table class="table table-hover">
                     <tbody>                           
                      <?php echo $balance_records['total_libility_equity']; ?>
                     </tbody>
                 </table>
            </div>
        </div>
            </div>
        </div>
        </div>
          </div>
        </div>
          </div>
          </div>
        </div>
      </div>
            </div>
        </div>            
    </div>
</div>
    </section>

        <!------- FOOTER --------->
            <?php $this->load->view("backend/_partials/footer.php") ?>
        <!------- FOOTER --------->
        </div>
    </div>
</body>
</html>
