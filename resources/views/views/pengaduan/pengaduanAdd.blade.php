<!doctype html>
<html lang="en">

<head>
    <title>Layanaan-Ti | PT. Pusri Palembang</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Layannan Pengaduan">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Layanaan">

    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="{{ URL::asset('assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ URL::asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/js/select.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendors/jquery-toast-plugin/jquery.toast.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('assets/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">


    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">


</head>

<body class="sidebar-mini">

    <!-- Page Loader -->
    {{-- <div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{ URL::asset('assets/images/pusri.png') }}" width="200"></div>
        <p>Please wait...</p>
    </div>
</div> --}}
    <!-- Overlay For Sidebars -->

    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <div>
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-bs-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                </div>
                <div>
                    <a class="navbar-brand brand-logo" href="index.html">
                        <img src="../../images/logo.svg" alt="logo" />
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="index.html">
                        <img src="../../images/logo-mini.svg" alt="logo" />
                    </a>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-top">
                <ul class="navbar-nav">
                    <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                        <h1 class="welcome-text">Halo, <span class="text-black fw-bold"></span>
                        </h1>
                        <h3 class="welcome-sub-text">Selamat datang kembali, mari lihat aduan kamu! </h3>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                  
                
                   
                    <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                        <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img class="img-xs rounded-circle" src="../../images/faces/face8.jpg"
                                alt="Profile image"> </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <div class="dropdown-header text-center">
                                <img class="img-md rounded-circle" src="../../images/faces/face8.jpg"
                                    alt="Profile image">
                                <p class="mb-1 mt-3 font-weight-semibold"></p>
                                <p class="fw-light text-muted mb-0"></p>
                            </div>
                            <a class="dropdown-item"><i
                                    class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My
                                Profile <span class="badge badge-pill badge-danger">1</span></a>

                            <a class="dropdown-item" href="{{ url('/') }}"><i
                                    class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i>Menu
                                Utama</a>
                            <a class="dropdown-item " href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i
                                    class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign
                                Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-bs-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>



        <div class="container-fluid page-body-wrapper">
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item {{ Request::is(['/home']) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ URL::to('/home') }}">
                            <i class="mdi mdi-grid-large menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item nav-category">Layanaan</li>
                    <li class="nav-item ">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="menu-icon mdi mdi-floor-plan"></i>
                            <span class="menu-title">Pengaduan</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="
                            {{ url('/aduan/view/') }}
                            ">Request</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="
                            {{ URL::to('/aduan/report') }}
                            ">Laporan</a>
                                </li>

                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-advanced" aria-expanded="false"
                            aria-controls="ui-advanced">
                            <i class="menu-icon mdi mdi-arrow-down-drop-circle-outline"></i>
                            <span class="menu-title">Permintaan</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-advanced">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ URL::to('/permintaan/view') }}">Request</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ URL::to('/permintaan/report') }}">Laporan</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item nav-category">Master Data</li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false"
                            aria-controls="tables">
                            <i class="menu-icon mdi mdi-table"></i>
                            <span class="menu-title">User Management</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="tables">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{ url('user-role/view') }}">User
                                        Role</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="{{ url('role/view') }}">Role</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ url('permission/view') }}">Permission</a></li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" data-bs-toggle="collapse" href="#maps" aria-expanded="false"
                            aria-controls="maps">
                            <i class="menu-icon mdi mdi-google-maps"></i>
                            <span class="menu-title">Lainnya</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="maps">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item {{ Request::is(['status/*']) ? 'active' : '' }}"> <a
                                        class="nav-link" href="{{ url('/status/view') }}">status</a></li>
                                <li class="nav-item {{ Request::is(['jenis-barang/*']) ? 'active' : '' }}"> <a
                                        class="nav-link" href="{{ URL::to('/jenis-barang/view') }}">Jenis Barang</a>
                                </li>
                                <li class="nav-item {{ Request::is(['inventaris/*']) ? 'active' : '' }}"> <a
                                        class="nav-link" href="{{ URL::to('/inventaris/view') }}">Inventaris</a>
                                </li>
                                <li class="nav-item {{ Request::is(['sperpat/*']) ? 'active' : '' }}"> <a
                                        class="nav-link" href="{{ URL::to('/sperpat/view') }}">sperpat</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </nav>


            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Inventaris</h4>
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table id="tabel-main" class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>No Aduan</th>
                                                    <th>Nama User</th>
                                                    <th>Tgl. Masuk</th>
                                                    <th>Tgl. Keluar</th>
                                                    <th>No. Hp</th>
                                                    <th>Status</th>
                                                    <th>Nama Pengambil</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">PT.PUPUK SRIWIJAYA PALEMBANG </span>
                      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023, Layanaan-TI. All rights reserved.</span>
                    </div>
                  </footer>
            </div>
        </div>
    </div>

    </div>

    <!-- Javascript -->
    <script>
        var APP_URL = "{{ env('APP_URL') }}";
      </script>
        <!-- plugins:js -->
        <script src="{{ URL::asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
        <script src="{{ URL::asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{ URL::asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
        <script src="{{ URL::asset('assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ URL::asset('assets/js/off-canvas.js')}}"></script>
        <script src="{{ URL::asset('assets/js/hoverable-collapse.js')}}"></script>
        <script src="{{ URL::asset('assets/js/template.js')}}"></script>
        <script src="{{ URL::asset('assets/js/settings.js')}}"></script>
        <script src="{{ URL::asset('assets/js/todolist.js')}}"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="{{ URL::asset('assets/js/jquery.cookie.j')}}s" type="text/javascript"></script>
        <script src="{{ URL::asset('assets/js/dashboard.js')}}"></script>
        <script src="{{ URL::asset('assets/js/Chart.roundedBarCharts.js')}}"></script>
      
        <script src="{{ URL::asset('assets/vendors/sweetalert/sweetalert.min.js')}}"></script>
        <script src="{{ URL::asset('assets/vendors/jquery-toast-plugin/jquery.toast.min.js')}}"></script>
        <script src="{{ URL::asset('assets/vendors/select2/select2.min.js') }}"></script>
        <script src="{{ URL::asset('js/app.js') }}"></script>

        <script src="{{ URL::asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    {{-- <script src="{{ URL::asset('assets/js/data-table.js') }}"></script> --}}
    <script src="{{ URL::asset('js/aduan.js') }}" type="text/javascript"></script>
        <!-- End custom js for this page-->
      
      
    
      
</body>

</html>
