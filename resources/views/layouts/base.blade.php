<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Metas -->
    @if (env('IS_DEMO'))
        <x-demo-metas></x-demo-metas>
    @endif
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="shortcut icon"  href="//enopolybrands.com/cdn/shop/files/logo_7874e451-68ed-4ed5-ad7c-be1c82de9218.png?crop=center&amp;height=32&amp;v=1701147004&amp;width=32" type="image/png">
    <title>
    Enopoly Marketplace
    </title>


    <!-- Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1" rel="stylesheet" />

   




    <style>
    /* Blurred backdrop effect for SweetAlert overlay */
    .swal2-overlay {
        backdrop-filter: blur(5px); /* Adjust the blur level as needed */
        background: rgba(0, 0, 0, 0.5); /* Optional: semi-transparent background */
    }

    /* Optional: Custom styles for the modal itself */
    .custom-swal {
        background: rgba(255, 255, 255, 0.9); /* Semi-transparent white */
        border: none; /* Remove border */
        box-shadow: none; /* Remove shadow */
    }
</style>
@stack('styles')
    

    @livewireStyles

</head>

<body class="g-sidenav-show bg-gray-100">

    {{ $slot }}

    <!--   Core JS Files   -->
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/soft-ui-dashboard.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
  



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>




@stack('scripts')




    @livewireScripts
</body>

</html>
