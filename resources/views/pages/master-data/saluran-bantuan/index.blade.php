<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
         <title>Saluran Bantuan | Antar Bantuan Logistik</title>
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
                                    <h4 class="page-title">Saluran Bantuan</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Table Data Kabupaten / Kota -->
                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" style="overflow: scroll;">
                                            <div class="tab-pane show active" id="basic-datatable-preview">
                                                <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Bantuan</th>
                                                            <th>Kode Tugas</th>
                                                            <th> Kode Transaksi </th>
                                                            <th>Jenis Bantuan</th>
                                                            <th>Status</th>
                                                            <th>Tanggal </th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr>
                                                            <td> 1 </td>
                                                            <td> Bantuan Donasi Banjir </td>
                                                            <td> 040123 </td>
                                                            <td> SHAFKsjfhsdkjfh </td>
                                                            <td>Donasi</td>
                                                            <td><h5><span class="badge badge-success-lighten">Terverifikasi</span></h5></td>
                                                            <td>24/01/2023</td>
                                                           <td>
                                                                <form action="">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('detail-bantuan') }}"><i class=" mdi mdi-tooltip-edit label-icon"></i> Detail</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                           <tr>
                                                            <td> 2 </td>
                                                            <td> Bantuan Bencana Tsunami Di Medan </td>
                                                            <td> 040123 </td>
                                                            <td> SHAFKsjfhsdkjfh </td>
                                                            <td> Bencana </td>
                                                            <td><h5><span class="badge badge-danger-lighten">Tidak Terverifikasi</span></h5></td>
                                                            <td>24/01/2023</td>
                                                           <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('detail-bantuan') }}"><i class=" mdi mdi-tooltip-edit label-icon"></i> Detail</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                          <tr>
                                                            <td> 3 </td>
                                                            <td> Bantuan Sumbangan Panti Jompo Di Medan </td>
                                                            <td> 040123 </td>
                                                            <td> SHAFKsjfhsdkjfh </td>
                                                            <td>Sumbangan</td>
                                                            <td><h5><span class="badge badge-success-lighten">Terverifikasi</span></h5></td>
                                                            <td>24/01/2023</td>
                                                           <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('detail-bantuan') }}"><i class=" mdi mdi-tooltip-edit label-icon"></i> Detail</a>
                                                                </form>
                                                            </td>
                                                        </tr>


                                                        <tr>
                                                            <td> 4 </td>
                                                            <td> Bantuan Sosial Kepada Anak Yatim </td>
                                                            <td> 040123 </td>
                                                            <td> SHAFKsjfhsdkjfh </td>
                                                            <td>Sosial</td>
                                                            <td><h5><span class="badge badge-danger-lighten">Tidak Terverifikasi</span></h5></td>
                                                            <td>24/01/2023</td>
                                                           <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('detail-bantuan') }}"><i class=" mdi mdi-tooltip-edit label-icon"></i> Detail</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                       
                                                    </tbody>
                                                </table>                                           
                                            </div> <!-- end preview-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>

                </div>

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