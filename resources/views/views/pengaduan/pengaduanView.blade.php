<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Layanaan TI - PT.Pupuk Sriwijaya Palembang</title>
    <link href="{{ URL::asset('assetsProfil/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous">
    </script>
</head>

<body>
    <div id="layoutDefault">
        <div id="layoutDefault_content">
            <main>
                <!-- Navbar-->
                <nav class="navbar navbar-marketing navbar-expand-lg bg-white navbar-light">
                    <div class="container px-5">
                        <a class="navbar-brand text-primary" href="index.html">Layanaan IT</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation"><i data-feather="menu"></i></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto me-lg-5">
                                <li class="nav-item"><a class="nav-link " href="{{ url('/') }}">Home</a></li>
                                <li class="nav-item"><a class="nav-link active"
                                        href="{{ url('/view/aduan') }}">Aduan</a></li>
                                <li class="nav-item"><a class="nav-link "
                                        href="{{ url('/view/permintaan') }}">Permintaan</a></li>

                            </ul>
                            <a class="btn fw-500 ms-lg-4 btn-primary" href="{{ url('/login') }}">
                                Login
                                <i class="ms-2" data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </nav>
                <!-- Page Header-->
                <header class="page-header-ui page-header-ui-light bg-white">
                    <div class="page-header-ui-content">
                        <div class="container px-5">
                            <div class="row gx-5 justify-content-center">
                                <div class="col-xl-8 col-lg-10 text-center mb-4" data-aos="fade">
                                    <h1 class="page-header-ui-title">Selamat Datang Dilayanaan Pengaduan</h1>
                                    <p class="page-header-ui-text">Silahkan Lakukan tracking pengaduan anda</p>
                                    <div class="row justify-content-center">
                                        <div class="input-group w-75 ">

                                            <input type="text" class="form-control mr-3 text-center"
                                                placeholder="Silahkan masukkan nomor tiket anda">
                                          

                                                <a class="btn btn-primary fw-500 me-2" id="cari"><i
                                                        class="fa fa-search"></i>
                                                </a>
                                           
                                        </div>


                                    </div>
                                    <a class="btn btn-outline-green fw-500 me-2 mt-4" id="tambah" href="{{ URL::to('/aduan/add') }}">Tambah Aduan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="svg-border-rounded text-light">

                    </div>
                </header>
             
            </main>
        </div>
        <div id="layoutDefault_footer">
            <footer class="footer pt-10 pb-5 mt-auto bg-dark footer-dark">
                <div class="container px-5">
                    <div class="row gx-5">
                        <div class="col-lg-3">
                            <div class="footer-brand">SB UI Kit Pro</div>
                            <div class="mb-3">Design made easy</div>
                            <div class="icon-list-social mb-5">
                                <a class="icon-list-social-link" href="#!"><i class="fab fa-instagram"></i></a>
                                <a class="icon-list-social-link" href="#!"><i class="fab fa-facebook"></i></a>
                                <a class="icon-list-social-link" href="#!"><i class="fab fa-github"></i></a>
                                <a class="icon-list-social-link" href="#!"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row gx-5">
                                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                    <div class="text-uppercase-expanded text-xs mb-4">Product</div>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><a href="#!">Landing</a></li>
                                        <li class="mb-2"><a href="#!">Pages</a></li>
                                        <li class="mb-2"><a href="#!">Sections</a></li>
                                        <li class="mb-2"><a href="#!">Documentation</a></li>
                                        <li><a href="#!">Changelog</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                    <div class="text-uppercase-expanded text-xs mb-4">Technical</div>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><a href="#!">Documentation</a></li>
                                        <li class="mb-2"><a href="#!">Changelog</a></li>
                                        <li class="mb-2"><a href="#!">Theme Customizer</a></li>
                                        <li><a href="#!">UI Kit</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                                    <div class="text-uppercase-expanded text-xs mb-4">Includes</div>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><a href="#!">Utilities</a></li>
                                        <li class="mb-2"><a href="#!">Components</a></li>
                                        <li class="mb-2"><a href="#!">Layouts</a></li>
                                        <li class="mb-2"><a href="#!">Code Samples</a></li>
                                        <li class="mb-2"><a href="#!">Products</a></li>
                                        <li class="mb-2"><a href="#!">Affiliates</a></li>
                                        <li><a href="#!">Updates</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="text-uppercase-expanded text-xs mb-4">Legal</div>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><a href="#!">Privacy Policy</a></li>
                                        <li class="mb-2"><a href="#!">Terms and Conditions</a></li>
                                        <li><a href="#!">License</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-5" />
                    <div class="row gx-5 align-items-center">
                        <div class="col-md-6 small">Copyright &copy; Your Website 2021</div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!">Privacy Policy</a>
                            &middot;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    {{-- modal --}}
    <div class="modal fade" id="modalHasil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">DESKRIPSI ADUAN</h5>
                    <button type="button"  class="btn cancel" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card " data-aos="fade-right">
                        <div class="row g-0">
                            <div class="col-md-4"><img class="img-fluid" src="https://source.unsplash.com/6LBBOwkPzyQ/800x550" alt="..." /></div>
                            <div class="col-md-8">
                                <div class="card-body d-flex   h-100 flex-column">
                                    <h3 class="card-title fw-bold text-uppercase mb-2">Cocooil</h3>
                                    <div class="row">
                                        <div class="col-6"><p>test</p></div>
                                        <div class="col-6"><ul class="fa-ul pricing-list">
                                            <li class="pricing-list-item">
                                                <span class="fa-li"><svg class="svg-inline--fa fa-check-circle fa-w-16 text-teal" aria-hidden="true" focusable="false" data-prefix="far" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg><!-- <i class="far fa-check-circle text-teal"></i> Font Awesome fontawesome.com --></span>
                                                <span class="text-dark">Up to 15 users</span>
                                            </li>
                                            <li class="pricing-list-item">
                                                <span class="fa-li"><svg class="svg-inline--fa fa-check-circle fa-w-16 text-teal" aria-hidden="true" focusable="false" data-prefix="far" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg><!-- <i class="far fa-check-circle text-teal"></i> Font Awesome fontawesome.com --></span>
                                                <span class="text-dark">Email and live chat support</span>
                                            </li>
                                            <li class="pricing-list-item">
                                                <span class="fa-li"><svg class="svg-inline--fa fa-check-circle fa-w-16 text-teal" aria-hidden="true" focusable="false" data-prefix="far" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg><!-- <i class="far fa-check-circle text-teal"></i> Font Awesome fontawesome.com --></span>
                                                <span class="text-dark">Style customizer</span>
                                            </li>
                                            <li class="pricing-list-item">
                                                <span class="fa-li"><svg class="svg-inline--fa fa-check-circle fa-w-16 text-teal" aria-hidden="true" focusable="false" data-prefix="far" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg><!-- <i class="far fa-check-circle text-teal"></i> Font Awesome fontawesome.com --></span>
                                                <span class="text-dark">Custom components</span>
                                            </li>
                                            <li class="pricing-list-item">
                                                <span class="fa-li"><svg class="svg-inline--fa fa-check-circle fa-w-16 text-teal" aria-hidden="true" focusable="false" data-prefix="far" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg><!-- <i class="far fa-check-circle text-teal"></i> Font Awesome fontawesome.com --></span>
                                                <span class="text-dark">Expanded utilities</span>
                                            </li>
                                            <li class="pricing-list-item">
                                                <span class="fa-li"><svg class="svg-inline--fa fa-check-circle fa-w-16 text-teal" aria-hidden="true" focusable="false" data-prefix="far" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg><!-- <i class="far fa-check-circle text-teal"></i> Font Awesome fontawesome.com --></span>
                                                <span class="text-dark">Third-party integration</span>
                                            </li>
                                            <li class="pricing-list-item">
                                                <span class="fa-li"><svg class="svg-inline--fa fa-check-circle fa-w-16 text-teal" aria-hidden="true" focusable="false" data-prefix="far" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg><!-- <i class="far fa-check-circle text-teal"></i> Font Awesome fontawesome.com --></span>
                                                <span class="text-dark">Layout options</span>
                                            </li>
                                        </ul></div>
                                    </div>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger close" data-dismiss="modal">Oke</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalHasilFailed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hasil Tidak Ditemukan!</h5>
                    <button type="button" class="btn cancel" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container px-5">
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center mt-4">
                                    <img class="img-fluid p-4" src="{{ URL::asset('/assetsProfil/assets/img/illustrations/404-error.svg') }}" alt="..." />
                                    <p class="lead">Data aduan ini tidak ditemukan didalam system.</p>
                                    {{-- <a class="text-arrow-icon" href="index.html">
                                        <i class="ms-0 me-1" data-feather="arrow-left"></i>
                                        Return Home
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-danger close" data-dismiss="modal">Oke</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ URL::asset('assetsProfil/js/scripts.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ URL::asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ URL::asset('js/pengaduanView.js') }}" type="text/javascript"></script>

    <script>
        AOS.init({
            disable: 'mobile',
            duration: 600,
            once: true,
        });
    </script>
</body>

</html>
