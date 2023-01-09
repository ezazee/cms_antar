<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
        <title> Detail Laporan | </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">

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
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Detail Laporan</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Form Edit Table Data Kabupaten / Kota -->
                         <div class="row justify-content-center">
                            <div class="col-lg-7 col-md-10 col-sm-11">
        
                                <div class="text-center">
                                    <p> <strong> Kode Tugas </strong></p>
                                    <h1 class="text-danger mb-3">040123</h1>
                                    <p>Kode Transaksi</p>
                                    <h4> SHAFKsjfhsdkjfh </h4>
                                </div>
                                <div class="horizontal-steps mt-4 mb-4 pb-3" id="tooltip-container">
                                    <div class="horizontal-steps-content">
                                        <div class="step-item">
                                            <span data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="20/08/2022 07:24 PM">Mulai</span>
                                        </div>
                                        <div class="step-item current">
                                            <span data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="20/08/2022 09:24 PM">Bantuan Tersalurkan</span>
                                        </div>
                                    </div>
        
                                    <div class="process-line" style="width: 100%;"></div>
                                </div>
                                 <div class="text-center pb-5">
                                    <p> <strong> Status Orderan </strong></p>
                                    <h1 class="text-danger mb-3">Sukses</h1>
                                    <p class="text-muted">24/01/2023</p>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->   

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- Product image -->
                                                <a href="javascript: void(0);" class="text-center d-block mb-4">
                                                    <img src="{{ URL::asset('assets/images/users/relawan.png') }}" class="img-fluid" style="max-width: 280px;" alt="Product-img" />
                                                </a>
                                                <div class="d-lg-flex d-none justify-content-center">
                                                    <h4>Foto Depan Stiker</h4>
                                                </div>
                                            </div> <!-- end col -->

                                             <div class="col-lg-12 mt-3">
                                                <div class="page-title-box">
                                                    <h4 class="page-title">Detail Bantuan</h4>
                                                 </div>
                                                   <p class="mb-2"><span class="fw-bold me-2">Judul Bantuan :</span> Bansos Korban Cianjur 100jt </p>

                                                  <p class="mb-2"><span class="fw-bold me-2">Kode Bantuan :</span> 23948235 </p>
                                                  
                                                  <p class="mb-2"><span class="fw-bold me-2">Catatan :</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo alias, voluptatem natus voluptas ipsam similique illum nam in harum repudiandae, eligendi repellat a dolore corporis nulla possimus corrupti aliquam explicabo! </p>
                                            </div>

                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->
                <!-- content -->

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