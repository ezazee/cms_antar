<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
        <title>CMS Antar || Bantuan dari KABINDA & Posda</title>
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
                            <div class="col-12">
                                <div class="card widget-inline">
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0">
                                                    <div class="card-body text-center">
                                                        <i class="ri-bar-chart-2-line text-muted font-24"></i>
                                                        <h3><span>1502</span></h3>
                                                        <p class="text-muted font-15 mb-0">Bantuan Tersalurkan</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                                    <div class="card-body text-center">
                                                        <i class="ri-user-fill text-muted font-24"></i>
                                                        <h3><span>15552</span></h3>
                                                        <p class="text-muted font-15 mb-0">User Posda</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                                    <div class="card-body text-center">
                                                        <i class="ri-user-fill text-muted font-24"></i>
                                                        <h3><span>15552</span></h3>
                                                        <p class="text-muted font-15 mb-0">User Kabinda</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                             <div class="col-sm-6 col-lg-3">
                                                <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                                    <div class="card-body text-center">
                                                        <i class="ri-user-fill text-muted font-24"></i>
                                                        <h3><span>15552</span></h3>
                                                        <p class="text-muted font-15 mb-0">Relawan</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                        </div> <!-- end row -->
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                    </div>
                                    <h4 class="page-title">Kegiatan</h4>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-md-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <button type="button" class="btn btn-sm btn-light">View</button>
                                        </div>
                                        <h6 class="text-muted text-uppercase mt-0" title="Revenue">Bantuan Donasi</h6>
                                        <h4 class="mb-4 mt-2">Rp. 259.000.000</h4>
                                        <div id="spark1" class="apex-charts mb-3" data-colors="#f4516c"></div>


                                        <div class="row text-center">
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Awal Bulan</h6>
                                                <p class="font-18 mb-0 text-success">+15%</p>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Akhir Bulan</h6>
                                                <p class="font-18 mb-0 text-danger">-6.87%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <button type="button" class="btn btn-sm btn-light">View</button>
                                        </div>
                                        <h6 class="text-muted text-uppercase mt-0" title="Revenue">Bantuan Bencana</h6>
                                        <h4 class="mb-4 mt-2">Rp. 249.250.000</h4>
                                        <div id="spark2" class="apex-charts mb-3" data-colors="#f4516c"></div>

                                        <div class="row text-center">
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Awal Bulan</h6>
                                                <p class="font-18 mb-0 text-success">+15%</p>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Akhir Bulan</h6>
                                                <p class="font-18 mb-0 text-danger">-6.87%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <button type="button" class="btn btn-sm btn-light">View</button>
                                        </div>
                                        <h6 class="text-muted text-uppercase mt-0" title="Revenue">Bantuan Sumbangan</h6>
                                        <h4 class="mb-4 mt-2">3224</h4>
                                        <div id="spark3" class="apex-charts mb-3" data-colors="#f4516c"></div>

                                       <div class="row text-center">
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Awal Bulan</h6>
                                                <p class="font-18 mb-0 text-success">+15%</p>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Akhir Bulan</h6>
                                                <p class="font-18 mb-0 text-danger">-6.87%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                            <div class="col-xxl-3 col-md-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <button type="button" class="btn btn-sm btn-light">View</button>
                                        </div>
                                        <h6 class="text-muted text-uppercase mt-0" title="Revenue">Bantuan Sosial</h6>
                                        <h4 class="mb-4 mt-2">5829</h4>
                                        <div id="spark4" class="apex-charts mb-3" data-colors="#f4516c"></div>

                                        <div class="row text-center">
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Awal Bulan</h6>
                                                <p class="font-18 mb-0 text-success">+15%</p>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Akhir Bulan</h6>
                                                <p class="font-18 mb-0 text-danger">-6.87%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="nav float-end d-none d-lg-flex">
                                             <div>
                                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                                ALL
                                            </button>
                                            <button type="button" class="btn btn-soft-primary btn-sm">
                                                1M
                                            </button>
                                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                                6M
                                            </button>
                                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                                1Y
                                            </button>
                                        </div>
                                        </ul>
                                        <h4 class="header-title mb-3">Chart Saluran Bantuan</h4>

                                        <div dir="ltr">
                                            <div id="spline-area" class="apex-charts mt-5" data-colors="#E62129, #000"></div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>

                            <!-- Top Mtra Kabupaten -->
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                            <div class="card-body">
                                <h4 class="card-title p-2 border-bottom bg-light">Wilayah Binda</h4>
                                <div class="table-responsive" style="overflow-y: scroll; height: 370px;">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kabupaten/Kota</th>
                                        <th>Total Saluran Bantuan / Bulan</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Aceh</td>
                                        <td>150</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Sumatera Utara</td>
                                        <td>250</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Riau</td>
                                        <td>590</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Jambi</td>
                                        <td>1000</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Sumatera Selatan</td>
                                        <td>1543</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Bengkulu</td>
                                        <td>423</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Lampung</td>
                                        <td>414</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Kepulauan Bangka Belitung</td>
                                        <td>3434</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Kepulauan Riau</td>
                                        <td>4144</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>11</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>12</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>13</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>14</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>15</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>16</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>17</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>18</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>19</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>20</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>21</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>22</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>23</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>24</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>25</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>

                                    
                                    <tr>
                                        <td>26</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>

                                    
                                    <tr>
                                        <td>27</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>

                                    
                                    <tr>
                                        <td>28</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>

                                    
                                    <tr>
                                        <td>29</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>

                                    
                                    <tr>
                                        <td>30</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>31</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>

                                    
                                    <tr>
                                        <td>32</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>

                                    
                                    <tr>
                                        <td>33</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>

                                    
                                    <tr>
                                        <td>34</td>
                                        <td>DKI Jakarta</td>
                                        <td>4124</td>
                                    </tr>

                                    </tbody>
                                </table>
                                </div>
                            </div>
                            </div>
                        </div>
</div>
</div>
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="d-flex card-header justify-content-between align-items-center">
                                        <h4 class="header-title">Mitra Kabupaten NuKu di Indonesia</h4>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Refresh Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div id="map" class="mt-3 mb-3" style="height: 300px">
                                                </div>
                                            </div>
                                            <div class="col-lg-4" dir="ltr" style="overflow-y: scroll; height: 370px;">
                                                <h4 class="header-title">Kabinda / Posda Yang Tersebar Di Indonesia</h4>
                                                 <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Daerah</th>
                                        <th>Jumlah Kabinda / Posda</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Sulawesi</td>
                                        <td>3</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>2</td>
                                        <td>Kalimantan</td>
                                        <td>2</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>3</td>
                                        <td>Jakarta</td>
                                        <td>5</td>
                                    </tr>

                                    </tbody>
                                </table>
                                            </div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        </div>
                        <!-- end row -->

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