<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>KKSP - Kearsipan Digital</title>

        <link 
            rel="icon" 
            href="{{ asset('assets/img/favicon/logo_kksp.png') }}" 
            type="image/x-icon" 
        />

        <!-- Fonts and icons -->
        <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
        <script>
        WebFont.load({
            google: { families: ["Public Sans:300,400,500,600,700"] },
            custom: {
            families: [
                "Font Awesome 5 Solid",
                "Font Awesome 5 Regular",
                "Font Awesome 5 Brands",
                "simple-line-icons",
            ],
            urls: ["/assets/css/fonts.min.css"],
            },
            active: function () {
            sessionStorage.fonts = true;
            },
        });
        </script>

        <!-- CSS Files -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.min.css') }}" />

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body>
        <div class="wrapper">
            @include('includes.sidebar')

            {{-- <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main> --}}

            <div class="main-panel">
                @include('includes.header')
                <div class="container">
                    <!-- Inner Content -->
                    <div class="page-inner">
                        @yield('content')
                    </div>
                    <!-- End -->
                </div>
                @include('includes.footer')
            </div>
        </div>
        <!--   Core JS Files   -->
        <script src="{{ asset('assets/js/core/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>

        <!-- jQuery Scrollbar -->
        <script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

        <!-- Chart JS -->
        <script src="{{ asset('assets/js/plugin/chart.js/chart.min.js') }}"></script>

        <!-- jQuery Sparkline -->
        <script src="{{ asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

        <!-- Chart Circle -->
        <script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>

        <!-- Datatables -->
        <script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>

        <!-- Bootstrap Notify -->
        <script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

        <!-- jQuery Vector Maps -->
        <script src="{{ asset('assets/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugin/jsvectormap/world.js') }}"></script>

        <!-- Sweet Alert -->
        <script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

        <!-- Kaiadmin JS -->
        <script src="{{ asset('assets/js/kaiadmin.min.js') }}"></script>

        <!-- Chart JS -->
        <script>
        var pieChart = document.getElementById("pieChart").getContext("2d"),
            doughnutChart = document
            .getElementById("doughnutChart")
            .getContext("2d");

        var myPieChart = new Chart(pieChart, {
            type: "pie",
            data: {
            datasets: [
                {
                data: [50, 35, 15],
                backgroundColor: ["#1d7af3", "#f3545d", "#fdaf4b"],
                borderWidth: 0,
                },
            ],
            labels: ["New Visitors", "Subscribers", "Active Users"],
            },
            options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: "bottom",
                labels: {
                fontColor: "rgb(154, 154, 154)",
                fontSize: 11,
                usePointStyle: true,
                padding: 20,
                },
            },
            pieceLabel: {
                render: "percentage",
                fontColor: "white",
                fontSize: 14,
            },
            tooltips: false,
            layout: {
                padding: {
                left: 20,
                right: 20,
                top: 20,
                bottom: 20,
                },
            },
            },
        });

        var myDoughnutChart = new Chart(doughnutChart, {
            type: "doughnut",
            data: {
            datasets: [
                {
                data: [10, 20, 30],
                backgroundColor: ["#f3545d", "#fdaf4b", "#1d7af3"],
                },
            ],

            labels: ["Red", "Yellow", "Blue"],
            },
            options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: "bottom",
            },
            layout: {
                padding: {
                left: 20,
                right: 20,
                top: 20,
                bottom: 20,
                },
            },
            },
        });
        </script>
    </body>
</html>
