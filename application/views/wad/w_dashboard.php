<?php
{
    // Memuat header
    $this->load->view('include/w_header.php');
?>
    <div class="page-content-wrapper dashborad-v">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group float-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">admin</a></li>
                                <li class="breadcrumb-item active">Home</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
            </div>

            <!-- Welcome Box -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card m-b-30">
                        <div class="card-body text-center">
                            <img src="<?=base_url();?>vertical/assets/images/logo.png" alt="School Logo" style="max-width: 150px; margin-bottom: 20px;">
                            <h1 class="card-title">SELAMAT DATANG DI APLIKASI ADMINISTRASI ATTENDACE SYSTEM TERBARU</h1>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div> <!-- page-content-wrapper dashborad-v -->
<?php
    // Memuat footer
    $this->load->view('include/footer.php');
}
?>
