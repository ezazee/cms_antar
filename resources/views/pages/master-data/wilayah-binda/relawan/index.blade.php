<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Kabinda Jatim || Bantuan dari KABINDA & Posda</title>
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
                                    <div class="page-title-right">
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>

                         <div class="row">
                            <div class="col-xl-4 col-lg-5">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <img src="{{ URL::asset('assets/images/users/relawan.png') }}" class="rounded-circle avatar-lg img-thumbnail"
                                        alt="profile-image">

                                        <h4 class="mb-0 mt-2">Emile Mutaqin</h4>
                                        <p class="text-muted font-14">Ketua Relawan</p>

                                        <div class="text-start mt-3">
                                            <!-- <h4 class="font-13 text-uppercase">About Me :</h4>
                                            <p class="text-muted font-13 mb-3">
                                                Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type.
                                            </p> -->
                                            <p class="text-muted mb-2 font-13"><strong>Nama Lengkap :</strong> <span class="ms-2">Emile Mutaqin</span></p>

                                            <p class="text-muted mb-2 font-13"><strong>Nomor HandPhone :</strong><span class="ms-2">081420395843</span></p>

                                            <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2 ">user@email.com</span></p>

                                            <p class="text-muted mb-1 font-13"><strong>Jabatan :</strong> <span class="ms-2">Ketua Relawan</span></p>
                                        </div>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->

                            </div> <!-- end col-->

                            <div class="col-xl-8 col-lg-7">
                                <div class="card">
                                   <div class="card-body">
                                            <div class="row">
                                        <ul class="nav-khusus nav-bordered mb-3">
                                            <ul class="nav-khusus nav-bordered mb-3">
                                            <li class="nav-item ml-5">
                                                <select class="form-select" id="status-select">
                                                    <option selected>Semua Daerah</option>
                                                    <option value="1">Sulawesi</option>
                                                    <option value="3">Kalimantan</option>
                                                </select>
                                            </li>
                                        </ul> <!-- end nav-->
                                        
                                        </ul> <!-- end nav-->
                                        </div>

                                        <div class="tab-content" style="overflow: scroll;">
                                            <div class="tab-pane show active" id="basic-datatable-preview">
                                                <table id="basic-datatable" class="table table-striped dt-responsive nowrap ">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th>
                                                            <th>Lokasi Jabatan</th>
                                                            <th>No HP</th>
                                                            <th>Email Akun</th>
                                                            <th>Password Akun</th>
                                                            <th>Tanggal Dibuat Akun</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td> 1 </td>
                                                        <td class="table-user">
                                                            <img src="{{ URL::asset('assets/images/profileza.jpeg') }}" alt="table-user" class="me-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body fw-semibold">Reza</a>
                                                        </td>
                                                        <td> Sulawesi Tenggara </td>
                                                        <td> 081313711180 </td>
                                                        <td> rezaconto@email.com </td>
                                                        <td> ********** </td>
                                                        <td> 24-42-2022 </td>
                                                        <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="#"></i>Lihat</a>
                                                                    <button type="submit" class="btn btn-danger waves-effect btn-label waves-light btn-sm show_confirm">Suspend</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>                                  
                                            </div> <!-- end preview-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->


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