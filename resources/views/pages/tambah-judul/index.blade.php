<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
         <title>Tambah Judul Bantuan | Antar Bantuan Logistik</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="CMS Antar Untuk Bantuan Logistik" name="description" />
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
                                    <div class="page-title-right">
                                    </div>
                                    <h4 class="page-title">Tambah Jenis Bantuan</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Table Data Kabupaten / Kota -->
                     <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                     <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="bordered-justified-tabs-preview">
                                                <div class="tab-content">
                                                    <div class="tab-pane active">
                                                            <div class="tab-content">
                                                                <div class="tab-pane show active" id="custom-styles-preview">
                                                                    <div class="col-lg-6">
                                                                        <form class="needs-validation" novalidate>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Nama Jenis Bantuan</label>
                                                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Isi Nama Jenis Bantuan" required>
                                                                                <div class="invalid-feedback">
                                                                                    Nama Jenis Bantuan Harus Diisi.
                                                                                </div>
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <ul class="nav nav-bordered mb-3">
                                                                                        <li class="nav-item ml-5">
                                                                                            <select required class="form-select" id="status-select">
                                                                                                <option>Bantuan Donasi</option>
                                                                                                <option>Bantuan Bencana</option>
                                                                                                <option>Bantaun Sumbangan</option>
                                                                                                <option>Bantuan Sosial</option>
                                                                                            </select>
                                                                                        </li>
                                                                                    </ul> <!-- end nav-->
                                                                                <div class="invalid-feedback">
                                                                                    Nama Jenis Bantuan Harus Diisi.
                                                                                </div>
                                                                            </div>
                                                                            <button class="btn btn-primary" type="submit">Submit form</button>
                                                                        </form>
                                                                    </div>
                                                                </div> <!-- end preview-->
                                                            </div> <!-- end tab-content-->
                                                    </div>
                                                                </div> <!-- end preview-->
                                                            </div> <!-- end tab-content-->
                                                    </div>
                                                </div>                                          
                                            </div> <!-- end preview-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
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