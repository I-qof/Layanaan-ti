<!doctype html>
<html lang="en">

<head>
  @include('includes.head')
</head>
<body class="theme-cyan">

<!-- Page Loader -->
{{-- <div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{ URL::asset('assets/images/pusri.png') }}" width="200"></div>
        <p>Please wait...</p>
    </div>
</div> --}}
<!-- Overlay For Sidebars -->

<div id="wrapper">

    @include('includes.header')

    @include('includes.sidebar')

    <div id="main-content">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>

</div>

<!-- Javascript -->
@include('includes.script')
</body>
</html>
