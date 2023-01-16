<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
         <title>Tambah Akun | Antar Bantuan Logistik</title>
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
                                    <h4 class="page-title">Tambah Akun</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Table Data Kabupaten / Kota -->
                     <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                     <div class="card-body">
                                        <h4 class="header-title">Create Akun</h4>
                                        <p class="text-muted font-14 mb-3">
                                            Tambah Akun Untuk Ketiga Jenis Akun yang berbeda
                                        </p>

                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="bordered-justified-tabs-preview">
                                                <ul class="nav nav-tabs nav-justified nav-bordered mb-3">
                                                    <li class="nav-item">
                                                        <a href="#kabinda" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                            <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                                            <span class="d-none d-md-block">Kabinda</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#posda" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                            <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                                            <span class="d-none d-md-block">Posda</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#relawan" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                            <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                            <span class="d-none d-md-block">Relawan</span>
                                                        </a>
                                                    </li>
                                                </ul>
        
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="kabinda">
                                                        <h4 class="header-title mb-2">Akun Kabinda</h4>
                                                        <p class="mb-4">Akun Kabinda Yang Ditujukan Untuk Aplikasi Antar Khusus Kabinda</p>
                                                            <div class="tab-content">
                                                                <div class="tab-pane show active" id="custom-styles-preview">
                                                                    <div class="col-lg-6">
                                                                        <form class="needs-validation" novalidate>
                                                                             <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Nama Kabinda</label>
                                                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Isi Nama" required>
                                                                                <div class="invalid-feedback">
                                                                                    Isikan Nama Terlebih Dahulu.
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Username</label>
                                                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Isi Username" required>
                                                                                <div class="invalid-feedback">
                                                                                    Isikan Username Terlebih Dahulu.
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom02">Password</label>
                                                                                    <div class="input-group input-group-merge">
                                                                                        <input type="password" id="password" class="form-control" placeholder="Masukan Password" required>
                                                                                        <div class="invalid-feedback">
                                                                                    Isikan Password Terlebih Dahulu.
                                                                                </div>
                                                                                        <div class="input-group-text" data-password="false">
                                                                                            <span class="password-eye"></span>
                                                                                        </div>
                                                                                    </div>
                                                                            </div>
                                                                           <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Isikan Nama Provinsi Kabinda</label>
                                                                                <ul class="nav nav-bordered mb-3">
                                                                                <li class="nav-item">
                                                                                    <select class="form-select" id="status-select">
                                                                                        <option selected>Medan</option>
                                                                                        <option value="1">Lamongan</option>
                                                                                        <option value="2">Bitung</option>
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
                                                                                <div class="invalid-feedback">
                                                                                    Isikan Nama Daerah Provinsi Kabinda Terlebih Dahulu.
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustomUsername">Nomor HP</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-text" id="inputGroupPrepend">+62</span>
                                                                                    <input type="number" class="form-control" id="validationCustomUsername" placeholder="Isikan Nomo HP"
                                                                                        aria-describedby="inputGroupPrepend" required>
                                                                                    <div class="invalid-feedback">
                                                                                        Isikan Nomor HP.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom04">Nomor NIP/NRP</label>
                                                                                <input type="number" class="form-control" id="validationCustom04" placeholder="Masukan Nomor NIP/NRP" required>
                                                                                <div class="invalid-feedback">
                                                                                    Masukan Nomor NIP/NRP.
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom05">Masukan Alamat Kantor</label>
                                                                                <input type="text" class="form-control" id="validationCustom05" placeholder="Alamat Kantor" required>
                                                                                <div class="invalid-feedback">
                                                                                    Masukan Alamat Kantor Terlebih Dahulu.
                                                                                </div>
                                                                            </div>
                                                                             <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom05">Link Maps Alamat</label>
                                                                                <input type="text" class="form-control" id="validationCustom05" placeholder="Link Alamat Kantor" required>
                                                                                <div class="invalid-feedback">
                                                                                    Masukan Link Google Maps Alamat Kantor
                                                                                </div>
                                                                            </div>
                                                                            <button class="btn btn-primary" type="submit">Submit form</button>
                                                                        </form>
                                                                    </div>
                                                                </div> <!-- end preview-->
                                                            </div> <!-- end tab-content-->
                                                    </div>
                                                    

                                                    <div class="tab-pane show " id="posda">
                                                        <h4 class="header-title mb-2">Akun Posda</h4>
                                                        <p class="mb-4">Akun Posda Yang bisa digunakan pada Aplikasi Antar khusus Posda</p>
                                                            <div class="tab-content">
                                                                <div class="tab-pane show active" id="custom-styles-preview">
                                                                    <div class="col-lg-6">
                                                                        <form class="needs-validation" novalidate>

                                                                        <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Nama Posda</label>
                                                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Isi Nama" required>
                                                                                <div class="invalid-feedback">
                                                                                    Isikan Nama Terlebih Dahulu.
                                                                                </div>
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Username</label>
                                                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Isi Username" required>
                                                                                <div class="invalid-feedback">
                                                                                    Isikan Username Terlebih Dahulu.
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom02">Password</label>
                                                                                    <div class="input-group input-group-merge">
                                                                                        <input type="password" id="password" class="form-control" placeholder="Masukan Password" required>
                                                                                        <div class="invalid-feedback">
                                                                                    Isikan Password Terlebih Dahulu.
                                                                                </div>
                                                                                        <div class="input-group-text" data-password="false">
                                                                                            <span class="password-eye"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustomUsername">Nomor HP</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-text" id="inputGroupPrepend">+62</span>
                                                                                    <input type="number" class="form-control" id="validationCustomUsername" placeholder="Username"
                                                                                        aria-describedby="inputGroupPrepend" required>
                                                                                    <div class="invalid-feedback">
                                                                                        Isikan Nomor HP.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom04">Nomor NIP/NRP (opsional)</label>
                                                                                <input type="number" class="form-control" id="validationCustom04" placeholder="Masukan Nomor NIP/NRP">
                                                                                <div class="invalid-feedback">
                                                                                    Masukan Nomor NIP/NRP.
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom05">Masukan Alamat Kantor</label>
                                                                                <input type="text" class="form-control" id="validationCustom05" placeholder="Alamat Kantor" required>
                                                                                <div class="invalid-feedback">
                                                                                    Masukan Alamat Kantor Terlebih Dahulu.
                                                                                </div>
                                                                            </div>
                                                                             <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom05">Link Maps Alamat</label>
                                                                                <input type="text" class="form-control" id="validationCustom05" placeholder="Link Alamat Kantor" required>
                                                                                <div class="invalid-feedback">
                                                                                    Masukan Link Google Maps Alamat Kantor
                                                                                </div>
                                                                            </div>
                                                                            <button class="btn btn-primary" type="submit">Submit form</button>
                                                                        </form>
                                                                    </div>
                                                                </div> <!-- end preview-->
                                                            </div> <!-- end tab-content-->
                                                    </div>


                                                    <div class="tab-pane" id="relawan">
                                                         <h4 class="header-title mb-2">Akun Relawan</h4>
                                                        <p class="mb-4">Akun Relawan Yang bisa digunakan pada Aplikasi Antar khusus Posda</p>
                                                            <div class="tab-content">
                                                                <div class="tab-pane show active" id="custom-styles-preview">
                                                                    <div class="col-lg-6">
                                                                        <form class="needs-validation" novalidate>

                                                                        <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Nama Relawan</label>
                                                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Isi Nama" required>
                                                                                <div class="invalid-feedback">
                                                                                    Isikan Nama Terlebih Dahulu.
                                                                                </div>
                                                                            </div>

                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Username</label>
                                                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Isi Username" required>
                                                                                <div class="invalid-feedback">
                                                                                    Isikan Username Terlebih Dahulu.
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom02">Password</label>
                                                                                    <div class="input-group input-group-merge">
                                                                                        <input type="password" id="password" class="form-control" placeholder="Masukan Password" required>
                                                                                        <div class="invalid-feedback">
                                                                                    Isikan Password Terlebih Dahulu.
                                                                                </div>
                                                                                        <div class="input-group-text" data-password="false">
                                                                                            <span class="password-eye"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustomUsername">Nomor HP</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-text" id="inputGroupPrepend">+62</span>
                                                                                    <input type="number" class="form-control" id="validationCustomUsername" placeholder="Username"
                                                                                        aria-describedby="inputGroupPrepend" required>
                                                                                    <div class="invalid-feedback">
                                                                                        Isikan Nomor HP.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                             <div class="mb-3">
                                                                                <label for="example-select" class="form-label">Direkrut Dari Posda</label>
                                                                                <select required class="form-select" id="example-select">
                                                                                    <option selected>Pilih Posda</option>
                                                                                    <option value="1">Emile Mutaqin</option>
                                                                                    <option value="2">Andre</option>
                                                                                    <option value="3">Fauzi 3</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="validationCustom01">Nama Asal Daerah</label>
                                                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Isi Nama Daerah" required>
                                                                                <div class="invalid-feedback">
                                                                                    Isikan Nama Terlebih Dahulu.
                                                                                </div>
                                                                            </div>
                                                                            <button class="btn btn-primary" type="submit">Submit form</button>
                                                                        </form>
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