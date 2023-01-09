<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Penerima Bantuan</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        @include('master.master-css')
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

            
            <!-- ========== Topbar Start ========== -->
            @include('master.topbar')
            <!-- ========== Topbar End ========== -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('master.sidebar')
            <!-- ========== Left Sidebar End ========== -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Detail Penerima Bantuan</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <!-- Product image -->
                                                <a href="javascript: void(0);" class="text-center d-block mb-4">
                                                    <img src="{{ URL::asset('assets/images/users/relawan.png') }}" class="img-fluid" style="max-width: 280px;" alt="Product-img" />
                                                </a>
                                                <div class="d-lg-flex d-none justify-content-center">
                                                    <h4>Bukti Foto Penerima</h4>
                                                </div>
                                            </div> <!-- end col -->

                                            <div class="col-lg-6">
                                                <!-- Product image -->
                                                <a href="javascript: void(0);" class="text-center d-block mb-4">
                                                    <img src="{{ URL::asset('assets/images/users/relawan.png') }}" class="img-fluid" style="max-width: 280px;" alt="Product-img" />
                                                </a>
                                                <div class="d-lg-flex d-none justify-content-center">
                                                    <h4>Bukti TTD Penerima</h4>
                                                </div>
                                            </div> <!-- end col -->


                                            <div class="col-lg-5 mt-3">
                                                <div class="page-title-box">
                                                    <h4 class="page-title">Alamat Penerima Bantuan</h4>
                                                 </div>
                                                  <p class="mb-2"><span class="fw-bold me-2">Alamat Seusi KTP :</span> Jl. Raya Samarang No.95, Sukagalih, Kec. Tarogong Kidul, Kabupaten Garut, Jawa Barat 44151 </p>

                                                    <p class="mb-2"><span class="fw-bold me-2">Patokan Alamat :</span> Mesjid Putih </p>
                                            </div>

                                             <div class="col-lg-5 mt-3">
                                                <div class="page-title-box">
                                                    <h4 class="page-title">Detail Penerima Bantuan</h4>
                                                 </div>
                                                   <p class="mb-2"><span class="fw-bold me-2">Nama Penerima :</span> Reza Dhawrwangsa </p>

                                                  <p class="mb-2"><span class="fw-bold me-2">Alamat Seusi KTP :</span> Jl. Raya Samarang No.95, Sukagalih, Kec. Tarogong Kidul, Kabupaten Garut, Jawa Barat 44151 </p>
                                                  
                                                  <p class="mb-2"><span class="fw-bold me-2">Pekerjaan :</span> Wiraswasta </p>
                                                  
                                                  <p class="mb-2"><span class="fw-bold me-2">NO KTP :</span> 23874629385629387 </p>
                                                  
                                                  <p class="mb-2"><span class="fw-bold me-2">NO HP :</span> 83712u3409 </p>
                                            </div>

                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                @include('master.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->



             @include('master.script')
             

    </body>


<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 04:00:53 GMT -->
</html>