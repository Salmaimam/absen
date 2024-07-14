<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>login</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="<?=base_url();?>vertical/assets/images/logo.png">

    <link href="<?=base_url();?>vertical/assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url();?>vertical/assets/css/bootstrap-material-design.min.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url();?>vertical/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url();?>vertical/assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<!-- Begin page -->
<div class="wrapper-page">
    <div class="display-table">
        <div class="display-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <!-- Login Form -->
                                <div class="text-center pt-3">
                                    <a href="index.html">
                                        <img src="<?=base_url();?>vertical/assets/images/logo.png" alt="logo" height="200" />
                                    </a>
                                </div>
                                <div class="px-3 pb-3">
                                    <?php echo $this->session->flashdata('pesan')?>
                                    <form class="form-horizontal m-t-20 mb-0" action="<?=base_url();?>login/logincheck" method="post">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input name="username" type="text" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input name="pass" type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group text-right row m-t-20">
                                            <div class="col-12">
                                                <button class="btn btn-primary btn-raised btn-block waves-effect waves-light" type="submit">Log In</button>
                                            </div>
                                        </div>
                                        <div class="form-group text-right row m-t-20">
                                         <div class="col-12">
                                         <a href="<?=base_url();?>/log" class="btn btn-primary btn-raised btn-block waves-effect waves-light">Walikelas</a>
                                         </div>
                                        </div>

                                        <div class="form-group m-t-10 mb-0 row">
                                            <div class="col-sm-7 m-t-20">
                                               
                                            </div>
                                            <div class="col-sm-7 m-t-20">
                                                <a href="<?=base_url();?>/regisister" class="text-muted"><i class="mdi mdi-account-circle"></i> Buat Akun Siswa ?</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery  -->
<script src="<?=base_url();?>vertical/assets/js/jquery.min.js"></script>
<script src="<?=base_url();?>vertical/assets/js/popper.min.js"></script>
<script src="<?=base_url();?>vertical/assets/js/bootstrap-material-design.js"></script>
<script src="<?=base_url();?>vertical/assets/js/modernizr.min.js"></script>
<script src="<?=base_url();?>vertical/assets/js/detect.js"></script>
<script src="<?=base_url();?>vertical/assets/js/fastclick.js"></script>
<script src="<?=base_url();?>vertical/assets/js/jquery.slimscroll.js"></script>
<script src="<?=base_url();?>vertical/assets/js/jquery.blockUI.js"></script>
<script src="<?=base_url();?>vertical/assets/js/waves.js"></script>
<script src="<?=base_url();?>vertical/assets/js/jquery.nicescroll.js"></script>
<script src="<?=base_url();?>vertical/assets/js/jquery.scrollTo.min.js"></script>

<!-- App js -->
<script src="<?=base_url();?>vertical/assets/js/app.js"></script>
</body>
</html>
