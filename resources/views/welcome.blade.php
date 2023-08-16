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
                        {{-- <a class="navbar-brand text-primary" href="index.html">Layanaan IT</a> --}}
                        <img src="{{ URL::asset('assets/images/pusri_col.png') }}" style="width: 200px;height: 50px;"
                            alt="">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation"><i data-feather="menu"></i></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto me-lg-5">
                                <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/view/aduan') }}">Aduan</a></li>
                                {{-- <li class="nav-item"><a class="nav-link" href="{{ url('/view/permintaan') }}">Permintaan</a></li> --}}


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
                                    <h1 class="page-header-ui-title">Layanan Aduan IT</h1>
                                    <p class="page-header-ui-text">Dapatkan bantuan dan dukungan teknis untuk masalah IT
                                        Anda dengan layanan aduan IT kami. Tim ahli kami siap membantu Anda dalam
                                        mengatasi permasalahan komputer, perangkat lunak, jaringan, dan lainnya. Kami
                                        menyediakan solusi yang mudah digunakan dan efektif untuk memastikan kelancaran
                                        operasional sistem Anda.</p>
                                    <a class="btn btn-primary fw-500 me-2" href="{{ route('viewAduan') }}">Mulai</a>
                                    {{-- <a class="btn btn-link fw-500" href="#!">Pelajari Lebih Lanjut</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                </header>

                <section class="bg-white py-3">
                    <div class="container px-5">
                        <div class="row gx-5 text-center">
                            <div class="col-lg-4 mb-5 mb-lg-0">
                                <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4">
                                    <i data-feather="layers"></i></div>
                                <h3>Dirancang untuk pengembang</h3>
                                <p class="mb-0">Sistem pembangunan berbasis blok yang dapat disesuaikan kami membuat
                                    pembuatan proyek berikutnya Anda cepat dan mudah!</p>
                            </div>
                            <div class="col-lg-4 mb-5 mb-lg-0">
                                <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4">
                                    <i data-feather="smartphone"></i></div>
                                <h3>Desain responsif modern</h3>
                                <p class="mb-0">Menampilkan komponen yang dibuat dengan cermat berbasis perangkat
                                    mobile-first, produk akhir Anda akan berfungsi dengan indah pada semua perangkat!
                                </p>
                            </div>
                            <div class="col-lg-4">
                                <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4">
                                    <i data-feather="code"></i></div>
                                <h3>Dokumentasi lengkap</h3>
                                <p class="mb-0">Semua tata letak, bagian halaman, komponen, dan utilitas sepenuhnya
                                    tercakup dalam dokumen produk ini.</p>
                            </div>
                        </div>
                    </div>
                </section>




             
            </main>
        </div>
        <div class="mt-10" id="layoutDefault_footer">
            <footer class="footer pt-5 pb-5 mt-auto bg-dark footer-dark">
                <div class="container ">
                    <div class="row gx-5">
                        <div class="col-lg-4">
                            <img src="{{ asset('/assets/images/pusri_col.png') }}" style="width: 300px;height: 75px;"
                                alt="">
                            <div class="footer-brand">PT. Pupuk Sriwidjaja Palembang</div>
                            <div class="mb-3">Jalan Mayor Zen, Kalidoni, Kota Palembang, Sumatera Selatan 30118,
                                Indonesia</div>

                        </div>
                        <div class="col-lg-4 ">
                            <div class="row gx-5">
                                <div class="col-lg-12 col-md-6 mb-5 mb-lg-0">
                                    <div class="footer-brand">Mitra Bisnis Dan Layanaan TI</div>
                                    <br>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><a href="#!">Visi : Menjadi mitra terpercaya dan terdepan dalam menyediakan solusi teknologi informasi yang inovatif dan berorientasi pada nilai, membantu perusahaan mencapai keunggulan kompetitif dan pertumbuhan berkelanjutan. </a></li>
                                        <li class="mb-2"><a href="#!">Misi : Menyediakan solusi TI yang terintegrasi dan disesuaikan dengan kebutuhan spesifik perusahaan untuk meningkatkan efisiensi operasional</a></li>
                                        <li class="mb-2"><a href="#!">Alamat : Jalan Mayor Zen, Kalidoni, Kota Palembang, Sumatera Selatan 30118, Indonesia</a></li>
                                        {{-- <li class="mb-2"><a href="#!">Documentation</a></li>
                                        <li><a href="#!">Changelog</a></li> --}}
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row gx-5">
                                <div class="col-lg-12 col-md-6 mb-5 mb-lg-0">
                                    <div class="footer-brand">Layanaan TI</div>
                                    <br>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><a href="#!">Visi : Menghadirkan solusi teknologi terdepan untuk mendorong efisiensi, keamanan, dan pengalaman pengguna yang unggul, sambil tetap berfokus pada inovasi berkelanjutan dan kemitraan yang erat dengan pelanggan.</a></li>
                                        <li class="mb-2"><a href="#!">Misi : Solusi teknologi handal, inovatif, dan pelayanan prima untuk efisiensi dan keunggulan kompetitif.</a></li>
                                        <li class="mb-2"><a href="#!">Alamat : Jalan Mayor Zen, Kalidoni, Kota Palembang, Sumatera Selatan 30118, Indonesia & Jalan Melur No.8</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <hr class="my-5" />
                    <div class="row gx-5 align-items-center ">
                        <div class="col-md-6 small">Copyright © 2023, Layanaan-TI. All rights reserved.</div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!">Thanks to Layanaan TI </a>
                            {{-- &middot;
                            <a href="#!">Terms &amp; Conditions</a> --}}
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    {{-- modal --}}
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ URL::asset('assetsProfil/js/scripts.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ URL::asset('js/welcome.js') }}" type="text/javascript"></script>

    <script>
        AOS.init({
            disable: 'mobile',
            duration: 600,
            once: true,
        });
    </script>
</body>

</html>
