<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Detail Relawan || Bantuan dari KABINDA & Posda</title>
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
                                    <h4 class="page-title">Wilayah</h4>
                                     <ul class="nav nav-bordered mb-3">
                                            <li class="nav-item ml-5">
                                                <select class="form-select" id="status-select">
                                                    <option selected>Sumatera Utara</option>
                                                    <option value="1">Sumatera Barat</option>
                                                    <option value="2">Sumatera Selatan</option>
                                                    <option value="3">Madiun</option>
                                                    <option value="4">Garut</option>
                                                    <option value="5">Madiun</option>
                                                    <option value="6">Yogyakarta</option>
                                                    <option value="7">Padang</option>
                                                    <option value="8">Malang</option>
                                                    <option value="9">Surabaya</option>
                                                    <option value="10">Makasar</option>
                                                </select>
                                            </li>
                                        </ul> <!-- end nav-->
                                </div>
                            </div>
                        </div>

                    <div class="card">
                                    <div class="card-body profile-user-box">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="avatar-lg">
                                                            <img src="{{ URL::asset('assets/images/users/relawan.png') }}" alt="" class="rounded-circle img-thumbnail">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div>
                                                            <h4 class="mt-1 mb-1 text-black">Relawan 1</h4>
                                                            <p class="font-13 text-black-50"> Kode Tugas : <strong>040123</strong> </p>

                                                             <p class="text-muted mb-2 font-13"><strong>Nama Lengkap :</strong> <span class="ms-2">Emil Mutaqin</span></p>

                                            <p class="text-muted mb-2 font-13"><strong>Nomor HandPhone :</strong><span class="ms-2">081420395843</span></p>

                                            <p class="text-muted mb-1 font-13"><strong>Nomor KTA :</strong> <span class="ms-2">-</span></p>

                                                            <!-- <ul class="mb-0 list-inline text-black">
                                                                <li class="list-inline-item me-3">
                                                                    <h5 class="mb-1 text-black">$ 25,184</h5>
                                                                    <p class="mb-0 font-13 text-black-50">Total Revenue</p>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <h5 class="mb-1 text-black">5482</h5>
                                                                    <p class="mb-0 font-13 text-black-50">Number of Orders</p>
                                                                </li>
                                                            </ul> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col-->
                                        </div> <!-- end row -->

                                    </div> <!-- end card-body/ profile-user-box-->
                                </div><!--end profile/ card -->

                                   <h4 class="page-title">Riwayat Tugas</h4>
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
                                                            <td><h5><span class="badge badge-success-lighten">Sukses</span></h5></td>
                                                            <td>24/01/2023</td>
                                                           <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="#"><i class=" mdi mdi-tooltip-edit label-icon"></i>Lihat Laporan</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                           <tr>
                                                            <td> 2 </td>
                                                            <td> Bantuan Subsidi Bahan Pangan Di Medan </td>
                                                            <td> 040123 </td>
                                                            <td> SHAFKsjfhsdkjfh </td>
                                                            <td>Donasi</td>
                                                            <td><h5><span class="badge badge-warning-lighten">On Progress</span></h5></td>
                                                            <td>24/01/2023</td>
                                                           <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="#"><i class=" mdi mdi-tooltip-edit label-icon"></i>Lihat Laporan</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                          <tr>
                                                            <td> 3 </td>
                                                            <td> Bantuan Makanan Di Medan </td>
                                                            <td> 040123 </td>
                                                            <td> SHAFKsjfhsdkjfh </td>
                                                            <td>Donasi</td>
                                                            <td><h5><span class="badge badge-success-lighten">Sukses</span></h5></td>
                                                            <td>24/01/2023</td>
                                                           <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="#"><i class=" mdi mdi-tooltip-edit label-icon"></i>Lihat Laporan</a>
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

                    </div>
                    <!-- container -->

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