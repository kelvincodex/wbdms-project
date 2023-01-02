<!doctype html>
<html lang="en">
<x-head></x-head>
<body class="bg-theme bg-theme9">
@include('sweetalert::alert')

<!--wrapper-->
<div class="wrapper">
    <!--sidebar wrapper -->
    <x-bar.side-bar></x-bar.side-bar>
    <!--end sidebar wrapper -->
    <!--start header -->
    <x-header></x-header>
    <!--end header -->
    <!--start page wrapper -->
    <div class="page-wrapper">
        @yield("content")
    </div>
    <!--end page wrapper -->
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <footer class="page-footer">
        <p class="mb-0">Copyright © 2021. All right reserved.</p>
    </footer>
</div>
<!--end wrapper-->

{{--script--}}
<x-script></x-script>

</body>


<!-- Mirrored from codervent.com/dashtreme/demo/vertical/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 02:35:02 GMT -->
</html>
