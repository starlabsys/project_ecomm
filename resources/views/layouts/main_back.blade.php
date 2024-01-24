<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/equation/html/vertical-light-menu/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jan 2024 05:45:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>EQUATION Admin - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="https://designreset.com/equation/html/src/assets/img/favicon.ico"/>
    <link href="{{ asset('') }}back_assets/layouts/vertical-light-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('') }}back_assets/layouts/vertical-light-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="{{ asset('') }}back_assets/layouts/vertical-light-menu/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('') }}back_assets/src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('') }}back_assets/layouts/vertical-light-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('') }}back_assets/layouts/vertical-light-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('') }}back_assets/src/plugins/src/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('') }}back_assets/src/assets/css/light/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('') }}back_assets/src/assets/css/light/widgets/modules-widgets-vlm.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('') }}back_assets/src/assets/css/dark/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('') }}back_assets/src/assets/css/dark/widgets/modules-widgets-vlm.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link href="{{ asset('') }}back_assets/src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('') }}back_assets/src/assets/css/light/components/carousel.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('') }}back_assets/src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('') }}back_assets/src/assets/css/light/components/tabs.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
    
    <link href="{{ asset('') }}back_assets/src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('') }}back_assets/src/assets/css/dark/components/carousel.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('') }}back_assets/src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('') }}back_assets/src/assets/css/dark/components/tabs.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('') }}back_assets/src/plugins/src/filepond/filepond.min.css">
    <link rel="stylesheet" href="{{ asset('') }}back_assets/src/plugins/src/filepond/FilePondPluginImagePreview.min.css">    
    <link href="{{ asset('') }}back_assets/src/plugins/css/light/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('') }}back_assets/src/plugins/css/dark/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    @yield('styles')

</head>
<body class="layout-boxed">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    @include('_partials.navbar_back')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('_partials.sidebar_back')
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            @yield('content')
            <!--  BEGIN FOOTER  -->
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank" https://designreset.com/equation/">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>
            <!--  END FOOTER  -->
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('') }}back_assets/src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}back_assets/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('') }}back_assets/src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="{{ asset('') }}back_assets/src/plugins/src/waves/waves.min.js"></script>
    <script src="{{ asset('') }}back_assets/layouts/vertical-light-menu/app.js"></script>
    
    <script src="{{ asset('') }}back_assets/src/plugins/src/highlight/highlight.pack.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('') }}back_assets/src/plugins/src/apex/apexcharts.min.js"></script>
    <script src="{{ asset('') }}back_assets/src/assets/js/dashboard/dash_1.js"></script>
    <script src="{{ asset('') }}back_assets/src/assets/js/scrollspyNav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('') }}back_assets/src/plugins/src/filepond/filepond.min.js"></script>
    <script src="{{ asset('') }}back_assets/src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
    <script src="{{ asset('') }}back_assets/src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
    <script src="{{ asset('') }}back_assets/src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
    <script src="{{ asset('') }}back_assets/src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
    <script src="{{ asset('') }}back_assets/src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
    <script src="{{ asset('') }}back_assets/src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
    <script src="{{ asset('') }}back_assets/src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>
    {{-- CKEDIOT --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    <script>
        $(document).ready( function () {
            $('.Datatable').DataTable();
            
        } );
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        $(document).ready(function() {
          // $('#example').DataTable();
  
          @if (session('success'))
          Swal.fire(
            'Great !',
            '{{ \App\Helpers\Format::messages(session("success")) }}',
            'success'
          )
          // swal("Great !", "{{ session('success') }}", "success");
          @endif ()
          
          @if (session('errors'))
          Swal.fire(
            'Oh No !',
            '{{ \App\Helpers\Format::messages(session("errors")) }}',
            'error'
          )
          // swal("Oh No !", "{{ session('errors') }}", "errors");
          @endif ()
  
        });
      </script>

</body>

<!-- Mirrored from designreset.com/equation/html/vertical-light-menu/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jan 2024 05:46:36 GMT -->
</html>