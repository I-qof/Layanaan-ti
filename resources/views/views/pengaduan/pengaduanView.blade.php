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

                                            <input type="text" class="form-control  text-center"
                                                placeholder="Silahkan masukkan nomor tiket anda">
                                            <div class="input-group-append">

                                                <a class="btn btn-primary fw-500 me-2" id="cari"><i class="fa fa-search"></i>
                                                    </a>
                                            </div>
                                        </div>


                                    </div>
                                    <a class="btn btn-outline-green fw-500 me-2 mt-4" id="tambah">Tambah Aduan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="svg-border-rounded text-light">

                    </div>
                </header>
                <section class="bg-white py-10">
                    <div class="container px-5">
                        <div class="row gx-5 text-center">
                            <div class="col-lg-4 mb-5 mb-lg-0">
                                <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4">
                                    <i data-feather="layers"></i>
                                </div>
                                <h3>Built for developers</h3>
                                <p class="mb-0">Our customizable, block-based build system makes creating your next
                                    project fast and easy!</p>
                            </div>
                            <div class="col-lg-4 mb-5 mb-lg-0">
                                <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4">
                                    <i data-feather="smartphone"></i>
                                </div>
                                <h3>Modern responsive design</h3>
                                <p class="mb-0">Featuring carefully crafted, mobile-first components, your end product
                                    will function beautifully on any device!</p>
                            </div>
                            <div class="col-lg-4">
                                <div class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4">
                                    <i data-feather="code"></i>
                                </div>
                                <h3>Complete documentation</h3>
                                <p class="mb-0">All of the layouts, page sections, components, and utilities are fully
                                    covered in this products docs.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="bg-light py-10">
                    <div class="container px-5">
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center">
                                    <div class="text-xs text-uppercase-expanded text-primary mb-2">Application Features
                                    </div>
                                    <h2 class="mb-5">We have a simple solution to a complex problem</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-5">
                            <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up">
                                <a class="card text-center text-decoration-none h-100 lift" href="#!">
                                    <div class="card-body py-5">
                                        <div class="icon-stack icon-stack-lg bg-green-soft text-green mb-4"><i
                                                data-feather="layers"></i></div>
                                        <h5>Components</h5>
                                        <p class="card-text small">Our product is full of customized and extendable
                                            components.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up" data-aos-delay="100">
                                <a class="card text-center text-decoration-none h-100 lift" href="#!">
                                    <div class="card-body py-5">
                                        <div class="icon-stack icon-stack-lg bg-red-soft text-red mb-4"><i
                                                data-feather="tool"></i></div>
                                        <h5>Utilities</h5>
                                        <p class="card-text small">Powerful utility classes makes it easy to customize
                                            your product.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up" data-aos-delay="150">
                                <a class="card text-center text-decoration-none h-100 lift" href="#!">
                                    <div class="card-body py-5">
                                        <div class="icon-stack icon-stack-lg bg-yellow-soft text-yellow mb-4"><i
                                                data-feather="layout"></i></div>
                                        <h5>Layouts</h5>
                                        <p class="card-text small">Our flex based layouts offer a beautifully reponsive
                                            approach.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0" data-aos="fade-up">
                                <a class="card text-center text-decoration-none h-100 lift" href="#!">
                                    <div class="card-body py-5">
                                        <div class="icon-stack icon-stack-lg bg-purple-soft text-purple mb-4"><i
                                                data-feather="book"></i></div>
                                        <h5>Documentation</h5>
                                        <p class="card-text small">Our code is fully documented with instructions and
                                            usage examples.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                                <a class="card text-center text-decoration-none h-100 lift" href="#!">
                                    <div class="card-body py-5">
                                        <div class="icon-stack icon-stack-lg bg-blue-soft text-blue mb-4"><i
                                                data-feather="code"></i></div>
                                        <h5>Code Snippets</h5>
                                        <p class="card-text small">Use code snippets to easily drop new components into
                                            your project.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                                <a class="card text-center text-decoration-none h-100 lift" href="#!">
                                    <div class="card-body py-5">
                                        <div class="icon-stack icon-stack-lg bg-orange-soft text-orange mb-4"><i
                                                data-feather="package"></i></div>
                                        <h5>Plugins</h5>
                                        <p class="card-text small">We've implemented powerful third party plugins for
                                            added functionality.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="bg-white py-10">
                    <div class="container px-5">
                        <div class="row gx-5 align-items-center justify-content-center">
                            <div class="col-lg-6">
                                <div class="badge bg-primary-soft text-primary badge-marketing rounded-pill mb-3">Get
                                    Started!</div>
                                <div class="mb-5">
                                    <h2>Here's What You Get</h2>
                                    <p class="lead">When you purchase this UI Kit, you get access to a robust suite
                                        of powerful tools and components to help you build your next landing page
                                        quickly and easily.</p>
                                </div>
                                <div class="row gx-5">
                                    <div class="col-md-6 mb-4">
                                        <h6>Landing Pages</h6>
                                        <p class="mb-2 small">We've crafted landing page examples for many popular
                                            business and product types.</p>
                                        <a class="small text-arrow-icon" href="#!">
                                            Learn More
                                            <i data-feather="arrow-right"></i>
                                        </a>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <h6>Page Examples</h6>
                                        <p class="mb-2 small mb-0">Use our pre-built page examples to quickly create
                                            inner pages to your website.</p>
                                        <a class="small text-arrow-icon" href="#!">
                                            Learn More
                                            <i data-feather="arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="row gx-5">
                                    <div class="col-md-6 mb-4">
                                        <h6>Layouts</h6>
                                        <p class="mb-2 small mb-0">Our flex box based layout options make your site
                                            beautifully responsive and adaptable to any device.</p>
                                        <a class="small text-arrow-icon" href="#!">
                                            Learn More
                                            <i data-feather="arrow-right"></i>
                                        </a>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <h6>Modular Sections</h6>
                                        <p class="small mb-0">All of the sections on each page are modular, so you can
                                            drop them into an existing page, or start with a new one!</p>
                                        <a class="small text-arrow-icon" href="#!">
                                            Learn More
                                            <i data-feather="arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9 col-lg-6" data-aos="slide-left">
                                <div class="mb-4">
                                    <div class="content-skewed content-skewed-left"><img
                                            class="img-fluid content-skewed-item shadow-lg rounded-3"
                                            src="assets/img/demo/app-desktop-demo-screenshot.jpg" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="bg-light pt-10">
                    <div class="container px-5">
                        <div class="text-center mb-5">
                            <h2>Simple Pricing</h2>
                            <p class="lead">Easy pricing means no suprises.</p>
                        </div>
                        <div class="row gx-5 z-1">
                            <div class="col-lg-4 mb-5 mb-lg-n10" data-aos="fade-up" data-aos-delay="100">
                                <div class="card pricing h-100">
                                    <div class="card-body p-5">
                                        <div class="text-center">
                                            <div
                                                class="badge bg-light text-dark rounded-pill badge-marketing badge-sm">
                                                Free</div>
                                            <div class="pricing-price">
                                                <sup>$</sup>
                                                0
                                                <span class="pricing-price-period">/mo</span>
                                            </div>
                                        </div>
                                        <ul class="fa-ul pricing-list">
                                            <li class="pricing-list-item">
                                                <span class="fa-li"><i
                                                        class="far fa-check-circle text-teal"></i></span>
                                                <span class="text-dark">1 user</span>
                                            </li>
                                            <li class="pricing-list-item">
                                                <span class="fa-li"><i
                                                        class="far fa-check-circle text-teal"></i></span>
                                                <span class="text-dark">Community support</span>
                                            </li>
                                            <li class="pricing-list-item">
                                                <span class="fa-li"><i
                                                        class="far fa-circle text-gray-200"></i></span>
                                                Style customizer
                                            </li>
                                            <li class="pricing-list-item">
                                                <span class="fa-li"><i
                                                        class="far fa-circle text-gray-200"></i></span>
                                                Custom components
                                            </li>
                                            <li class="pricing-list-item">
                                                <span class="fa-li"><i
                                                        class="far fa-circle text-gray-200"></i></span>
                                                Expanded utilities
                                            </li>
                                            <li class="pricing-list-item">
                                                <span class="fa-li"><i
                                                        class="far fa-circle text-gray-200"></i></span>
                                                Third-party integration
                                            </li>
                                            <li class="pricing-list-item">
                                                <span class="fa-li"><i
                                                        class="far fa-circle text-gray-200"></i></span>
                                                Layout options
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-5 mb-lg-n10" data-aos="fade-up">
                                <div class="card pricing h-100">
                                    <div class="card-body p-5">
                                        <div class="text-center">
                                            <div
                                                class="badge bg-primary-soft rounded-pill badge-marketing badge-sm text-primary">
                                                Standard</div>
                                            <div class="pricing-price">
                                                <sup>$</sup>
                                                19
                                                <span class="pricing-price-period">/mo</span>
                                            </div>
                                        </div>
                                        <ul class="fa-ul pricing-list">
                                            <li class="pricing-list-item">
                                                <span class="fa-li"><i
                                                        class="far fa-check-circle text-teal"></i></span>
                                                <span class="text-dark">Up to 15 users</span>
                                            </li>
                                            <li class="pricing-list-item">
                                                <span class="fa-li"><i
                                                        class="far fa-check-circle text-teal"></i></span>
                                                <span class="text-dark">Email and live chat support</span>
                                            </li>
                                            <li class="pricing-list-item">
                                                <span class="fa-li"><i
                                                        class="far fa-check-circle text-teal"></i></span>
                                                <span class="text-dark">Style customizer</span>
                                            </li>
                                            <li class="pricing-list-item">
                                                <span class="fa-li"><i
                                                        class="far fa-check-circle text-teal"></i></span>
                                                <span class="text-dark">Custom components</span>
                                            </li>
                                            <li class="pricing-list-item">
                                                <span class="fa-li"><i
                                                        class="far fa-check-circle text-teal"></i></span>
                                                <span class="text-dark">Expanded utilities</span>
                                            </li>
                                            <li class="pricing-list-item">
                                                <span class="fa-li"><i
                                                        class="far fa-check-circle text-teal"></i></span>
                                                <span class="text-dark">Third-party integration</span>
                                            </li>
                                            <li class="pricing-list-item">
                                                <span class="fa-li"><i
                                                        class="far fa-check-circle text-teal"></i></span>
                                                <span class="text-dark">Layout options</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-lg-n10" data-aos="fade-up" data-aos-delay="100">
                                <div class="card pricing h-100">
                                    <div class="card-body p-5">
                                        <div class="text-center">
                                            <div
                                                class="badge bg-light text-dark rounded-pill badge-marketing badge-sm">
                                                Enterprise</div>
                                            <p class="card-text py-10">We offer discounts for larger organizations.
                                                Contact us to inquire about enterprise level plans!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="svg-border-rounded text-dark">
                        <!-- Rounded SVG Border-->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none"
                            fill="currentColor">
                            <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
                        </svg>
                    </div>
                </section>
                <section class="bg-dark pb-10 pt-15">
                    <div class="container px-5">
                        <div class="row gx-5 mb-10 mt-5">
                            <div class="col-lg-6 mb-5">
                                <div class="d-flex h-100">
                                    <div class="icon-stack flex-shrink-0 bg-teal text-white"><i
                                            class="fas fa-question"></i></div>
                                    <div class="ms-4">
                                        <h5 class="text-white">What is SB UI Kit Pro?</h5>
                                        <p class="text-white-50">SB UI Kit Pro is a fully coded, responsive, Bootstrap
                                            based UI toolkit for developers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <div class="d-flex h-100">
                                    <div class="icon-stack flex-shrink-0 bg-teal text-white"><i
                                            class="fas fa-question"></i></div>
                                    <div class="ms-4">
                                        <h5 class="text-white">What can I build with SB UI Kit Pro?</h5>
                                        <p class="text-white-50">Build anything you want to using this UI kit! It is
                                            flexible, multipurpose, and full of tools for you to use during development.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-5 mb-lg-0">
                                <div class="d-flex h-100">
                                    <div class="icon-stack flex-shrink-0 bg-teal text-white"><i
                                            class="fas fa-question"></i></div>
                                    <div class="ms-4">
                                        <h5 class="text-white">Do I get free updates?</h5>
                                        <p class="text-white-50">All of Start Bootstrap's premium products will come
                                            with updates for feature additions, bugfixes, and other small updates.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="icon-stack flex-shrink-0 bg-teal text-white"><i
                                            class="fas fa-question"></i></div>
                                    <div class="ms-4">
                                        <h5 class="text-white">What frameworks does it integrate with?</h5>
                                        <p class="text-white-50">Our HTML based pro products are build with framework
                                            integration in mind. The compiled code is HTML and CSS, which is able to
                                            integrate with any framework.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-5 justify-content-center text-center">
                            <div class="col-lg-8">
                                <div class="badge bg-transparent-light rounded-pill badge-marketing mb-4">Get Started
                                </div>
                                <h2 class="text-white">Get SB UI Kit Pro and save time.</h2>
                                <p class="lead text-white-50 mb-5">Start Bootstrap's premium UI Kit beautifully and
                                    intuitively extends the Bootstrap framework making it easy to build your next
                                    project!</p>
                                <a class="btn btn-teal fw-500" href="#!">Buy Now!</a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="bg-img-cover overlay overlay-primary overlay-80 pt-15"
                    style="background-image: url('https://source.unsplash.com/e3OUQGT9bWU/1400x900')">
                    <!-- Spacer for the image section-->
                    <div style="height: 35vh"></div>
                    <div class="svg-border-rounded text-white">
                        <!-- Rounded SVG Border-->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none"
                            fill="currentColor">
                            <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
                        </svg>
                    </div>
                </section>
                <section class="bg-white pb-10">
                    <div class="container px-5">
                        <div class="row gx-5 mb-5">
                            <div class="col-lg-6 mt-n10 mb-5 mb-lg-0 z-1">
                                <a class="card text-decoration-none h-100 lift" href="#!">
                                    <div class="card-body py-5">
                                        <div class="d-flex align-items-center">
                                            <div class="icon-stack icon-stack-xl bg-primary text-white flex-shrink-0">
                                                <i data-feather="edit-3"></i>
                                            </div>
                                            <div class="ms-4">
                                                <h5 class="text-primary">Work smarter, not harder</h5>
                                                <p class="card-text text-gray-600">Learn more about how our product can
                                                    save you time and effort in the long run!</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 mt-0 mt-lg-n10 z-1">
                                <a class="card text-decoration-none h-100 lift" href="#!">
                                    <div class="card-body py-5">
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="icon-stack icon-stack-xl bg-secondary text-white flex-shrink-0">
                                                <i data-feather="code"></i>
                                            </div>
                                            <div class="ms-4">
                                                <h5 class="text-secondary">Built for developers</h5>
                                                <p class="card-text text-gray-600">Our components, utilities, and
                                                    layouts are built with developers in mind.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6">
                                <h4>Get the latest news</h4>
                                <p class="lead text-gray-500 mb-0">Stay in the loop with the latest updates and
                                    features added to our application!</p>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group mb-2">
                                    <input class="form-control form-control-solid" type="text"
                                        placeholder="youremail@example.com" aria-label="Recipient's username"
                                        aria-describedby="button-addon2" />
                                    <button class="btn btn-primary" id="button-addon2" type="button">Sign
                                        up</button>
                                </div>
                                <div class="small text-gray-500">You can unsubscribe at any time.</div>
                            </div>
                        </div>
                    </div>
                    <div class="svg-border-waves text-dark">
                        <!-- Wave SVG Border-->
                        <svg class="wave" style="pointer-events: none" fill="currentColor"
                            preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 75">
                            <defs>
                                <style>
                                    .a {
                                        fill: none;
                                    }

                                    .b {
                                        clip-path: url(#a);
                                    }

                                    .d {
                                        opacity: 0.5;
                                        isolation: isolate;
                                    }
                                </style>
                            </defs>
                            <clippath id="a">
                                <rect class="a" width="1920" height="75"></rect>
                            </clippath>
                            <g class="b">
                                <path class="c"
                                    d="M1963,327H-105V65A2647.49,2647.49,0,0,1,431,19c217.7,3.5,239.6,30.8,470,36,297.3,6.7,367.5-36.2,642-28a2511.41,2511.41,0,0,1,420,48">
                                </path>
                            </g>
                            <g class="b">
                                <path class="d"
                                    d="M-127,404H1963V44c-140.1-28-343.3-46.7-566,22-75.5,23.3-118.5,45.9-162,64-48.6,20.2-404.7,128-784,0C355.2,97.7,341.6,78.3,235,50,86.6,10.6-41.8,6.9-127,10">
                                </path>
                            </g>
                            <g class="b">
                                <path class="d"
                                    d="M1979,462-155,446V106C251.8,20.2,576.6,15.9,805,30c167.4,10.3,322.3,32.9,680,56,207,13.4,378,20.3,494,24">
                                </path>
                            </g>
                            <g class="b">
                                <path class="d"
                                    d="M1998,484H-243V100c445.8,26.8,794.2-4.1,1035-39,141-20.4,231.1-40.1,378-45,349.6-11.6,636.7,73.8,828,150">
                                </path>
                            </g>
                        </svg>
                    </div>
                </section>
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
