<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> | <?php echo $site_title; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="<?php echo base_url('assets/images/logo/'.$site_icon)?>" type="image/x-icon">
    <link href="<?php echo base_url('assets/css/main/app.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/pages/auth.css')?>" rel="stylesheet">

        <meta name="description" content="<?php echo $site_deskripsi; ?>"/>
        <meta property="og:locale" content="id_ID" />
        <meta property="og:type" content="registration" />
        <meta property="og:title" content="<?php echo $title; ?>" />
        <meta property="og:description" content="<?php echo $site_deskripsi; ?>" />
        <meta property="og:site_name" content="<?php echo $site_title; ?>" />
        <meta name="twitter:description" content="<?php echo $site_deskripsi; ?>" />
        <meta name="twitter:title" content="<?php echo $title; ?>" />
        <meta name="twitter:site" content="<?php echo $site_title; ?>" />

</head>

<body>
    <div id="auth">
        
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            
            <h1 class="auth-title">Masuk</h1>
            <p class="auth-subtitle mb-5 display-4">Halaman Login Sebagai Karyawan <?php echo $site_title; ?></p>

            <p>Masukkan email dan password Karyawan</p>
            <?php 
                echo form_open('login_user/auth');
            ?>
                <?php echo $this->session->flashdata('msg');?>

                <div class="form-group position-relative has-icon-left mb-4">
                    <?php echo $form_username; ?>
                    
                    <div class="form-control-icon">
                        <i class="bi bi-google"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <?php echo $form_password; ?>
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>

              
                <div class="form-check form-check-lg d-flex align-items-end">
                    <input class="form-check-input me-2" type="checkbox" onclick="myFunction2()" id="flexCheckDefault">
                    <label class="form-check-label text-gray-600" for="flexCheckDefault">
                        Show Password
                    </label>
                </div>
<script>
                        function myFunction2() {
  var x = document.getElementById("inputPassword1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
} 
</script>
				<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3">Log in</button>
            <?php
                echo form_close();
            ?>
            <div class="text-center mt-5 text-lg fs-10">
                <p>Untuk login sebagai Admin, klik di bawah ini</p>
            </div>
           <div class="text-center text-lg fs-4">
                <p><a class='font-bold  ' href="<?php echo site_url('admin');?>">Login Sebagai Admin</a>.</p>
            </div>
            
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">
            
        </div>
    </div>
</div>

    </div>

</body>
    <script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/app.js'?>"></script>
</html>
