<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>SISTEM PERPUSTAKAAN  - Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
	<meta content="Coderthemes" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link href="<?=base_url()?>assets/logo.png" rel="icon" type="images/x-icon">

	<!-- App css -->
	<link href="<?=base_url()?>assets/css/bootstrap-creative.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
	<link href="<?=base_url()?>assets/css/app-creative.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

	<link href="<?=base_url()?>assets/css/bootstrap-creative-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet"  />
	<link href="<?=base_url()?>assets/css/app-creative-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet"   />

	<!-- icons -->
	<link href="<?=base_url()?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg authentication-bg-pattern">

	<div class="account-pages mt-5 mb-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 col-lg-6 col-xl-5">
					<div class="card bg-pattern">

						<div class="card-body p-4">

							<div class="text-center w-75 m-auto">
								<div class="auth-logo">
									<a href="index.html" class="logo logo-dark text-center">
										<span class="logo-lg">
											<!-- <img src="img/logo_cp.jpg" width="130" height="120"> -->
											<!-- <img src="<?=base_url()?>assets/logo.png" alt="" width="130" height="120"> -->
										</span>
									</a>

									<a href="index.html" class="logo logo-light text-center">
										<span class="logo-lg">
											<img src="<?=base_url()?>assets/logo.png" alt="" height="22">
											<!-- <img src="<?=base_url()?>assets/images/logo-light.png" alt="" height="22"> -->
										</span>
									</a>
								</div>
								<h2 class="text-center">SISTEM PERPUSTAKAAN</h2>
								<!-- <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p> -->

							</div>
							
							<?=($this->session->flashdata('message') !='') ? $this->session->flashdata('message') : '' ?>
							<form action="<?=base_url('Login/aksi_login')?>" method="POST">

								<div class="form-group mb-3">
									<label for="KodePustakawan">Kode Pustakawan</label>
									<input class="form-control" type="text" name="KodePustakawan" id="KodePustakawan" required="required" placeholder="Kode Pustakawan" autofocus>
								</div>

								<div class="form-group mb-3">
									<label for="Password">Password</label>
									<div class="input-group input-group-merge">
										<input type="password" id="Password" class="form-control" placeholder="Password" name="Password" required="required">
										<div class="input-group-append" data-password="false">
											<div class="input-group-text">
												<span class="password-eye"></span>
											</div>
										</div>
									</div>
								</div>

								

								<div class="form-group mb-3">
                                        <!-- <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div> -->
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                    	<button class="btn btn-primary btn-block" type="submit" name="login">Masuk</button>
                                    </div>

                                </form>
                                

                               
                            </div> 
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <script src="<?=base_url()?>assets/js/vendor.min.js"></script>
        <script src="<?=base_url()?>assets/js/app.min.js"></script>
        
    </body>
    </html>