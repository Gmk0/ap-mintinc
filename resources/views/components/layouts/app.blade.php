<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <link rel="shortcut icon" href="/assets/images/logo/favicon.png">

        <!-- Bootstrap -->

        <!-- Fontawesome -->
        <link rel="stylesheet" href="/assets/css/fontawesome-all.min.css">
        <!-- Magnific popup css -->
        <link rel="stylesheet" href="/assets/css/magnific-popup.css.css">
        <!-- Slick -->
        <link rel="stylesheet" href="/assets/css/slick.css">
        <!-- line awesome -->
        <link rel="stylesheet" href="/assets/css/line-awesome.min.css">
        <!-- Image Uploader -->
        <link rel="stylesheet" href="/assets/css/image-uploader.min.css">
        <!-- jQuery Ui Css -->
        <link rel="stylesheet" href="/assets/css/jquery-ui.css">
        <!-- Main css -->
        <link rel="stylesheet" href="/assets/css/main.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        @vite(['resources/css/app.css','resources/js/app.js'])


        @livewireStyles

    </head>
    <body>

        <!--==================== Preloader Start ====================-->
        <div class="preloader">
            <div class="loader"></div>
        </div>
        <!--==================== Preloader End ====================-->

        <!--==================== Overlay Start ====================-->
        <div class="overlay"></div>
        <!--==================== Overlay End ====================-->

        <!--==================== Sidebar Overlay End ====================-->
        <div class="side-overlay"></div>
        <!--==================== Sidebar Overlay End ====================-->

        <!-- ==================== Scroll to Top End Here ==================== -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- ==================== Scroll to Top End Here ==================== -->

        <!-- ==================== Mobile Menu Start Here ==================== -->
        <x-header-mobile />

        <!-- ==================== Mobile Menu End Here ==================== -->

        <!-- ==================== Right Offcanvas Start Here ==================== -->
            <x-right-offcanvas />
            <!-- ==================== Right Offcanvas End Here ==================== -->




            <main class="body-bg">
                <!-- ==================== Header Top Four Start Here ==================== -->
                <x-header-info />
                <!-- ==================== Header Top Four End Here ==================== -->

                <!-- ==================== Header Start Here ==================== -->
                <x-header-full />
                <!-- ==================== Header End Here ==================== -->
            {{ $slot }}


                <!-- ==================== Blog End Here ==================== -->

                <!-- =================== Footer Three Start ====================== -->
                <x-footer />
                <!-- =================== Footer Three End ====================== -->
            </main>



        <!-- Jquery js -->
        <script src="/assets/js/jquery-3.7.1.min.js"></script>

        <!-- Bootstrap Bundle Js -->
        <script src="/assets/js/boostrap.bundle.min.js"></script>
        <!-- Magnific Popup -->
        <script src="/assets/js/magnific-popup.min.js"></script>
        <!-- Slick js -->
        <script src="/assets/js/slick.min.js"></script>
        <!-- Counter Up Js -->
        <script src="/assets/js/counterup.min.js"></script>
        <!-- Marquee text slider -->
        <script src="/assets/js/jquery.marquee.min.js"></script>
        <!-- Image Uploader -->
        <script src="/assets/js/image-uploader.min.js"></script>
        <!-- jQuery Ui Css -->
        <script src="/assets/js/jquery-ui.min.js"></script>

        <!-- main js -->
        <script src="/assets/js/main.js"></script>




     @livewireScriptConfig

     <script>
            document.addEventListener('livewire:init', () => {
                    Livewire.on('event', (event) => {

                        Swal.fire({
                        icon: event[0].icon,
                        title:event[0].title ,
                        position:'top-end',
                        toast:true,

                        });
                    //
                    });
                    });

        </script>


    </body>
</html>
