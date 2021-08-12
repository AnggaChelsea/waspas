<!-- [ Header ] end -->

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ breadcrumb ] start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="page-header-title">
                                            <h5>Home</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ breadcrumb ] end -->
                        <!-- [ Main Content ] start -->
                        <h1>Selamat Datang</h1>
                        <h4>
                            <?php
                            if ($_SESSION['level'] == 1) {
                                echo "Administrator";
                            } else if ($_SESSION['level'] == 2) {
                                echo "Users";
                            }
                            ?>
                        </h4>
                        <div class="row">

                                <div class="col-md-12 col-xl-4">
                                    <div class="card card-social">
                                        <div class="card-block border-bottom">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col text-left">
                                                    <h3><?php echo $this->Mdatakriteria->get_data_count() ?></h3>
                                                    <h5 class="text-c-blue mb-0">Data Kriteria</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6 col-xl-4">
                                    <div class="card card-social">
                                        <div class="card-block border-bottom">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col text-left">
                                                    <h3><?php echo $this->Mpenduduk->get_data_count() ?></h3>
                                                    <h5 class="text-c-info mb-0">Data Penduduk</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="col-md-6 col-xl-4">
                                    <div class="card card-social">
                                        <div class="card-block border-bottom">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col text-left">
                                                    <h3>10,500</h3>
                                                    <h5 class="text-c-red mb-0">Data Penduduk Penerima</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                    </div>

                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>