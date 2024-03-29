<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.namea', 'Laravel') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    @include('admin.partials.header1')
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="container mt-5">
            <h2 class="container mt-5">Gestion des Commandes</h2>

            <!-- Tableau pour afficher les commandes en attente -->
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Produits</th>
                        <th>Montant</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $ide=1;
                    @endphp
                    @foreach ($commandes as $commande)
                    
                    <tr>
                        <th>{{ $ide }}</th>
                        <th>{{ $commande->payment_created_at }}</th>
                        <td>{{ $commande->user_name }}</td>
                        <td>{{ $commande->user_lastname }}</td>
                        <td>{{ $commande->products }}</td>
                        <td>{{ $commande->amount }} FCFA</td>
                        <td><span class="badge bg-success">Approuver</span></td>
                    </tr>
                    @php
                        $ide+=1;
                    @endphp
                    @endforeach

                </tbody>
            </table>
        </div>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; 2023 2R-Shop | Tous droits réservés - <strong><span>Designed by Ramzy and Nana</span></strong>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
                
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
        
</body>

</html>

            {{-- <!-- Tableau pour afficher les commandes en attente -->
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Produits</th>
                        <th>Montant</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $ide=1;
                    @endphp
                    @foreach ($commandes as $commande)
                    
                    <tr>
                        <th>{{ $ide }}</th>
                        <th>{{ $commande->payment_created_at }}</th>
                        <td>{{ $commande->user_name }}</td>
                        <td>{{ $commande->user_lastname }}</td>
                        <td>{{ $commande->products }}</td>
                        <td>{{ $commande->amount }} FCFA</td>
                        <td><span class="badge bg-success">Approuver</span></td>
                    </tr>
                    @php
                        $ide+=1;
                    @endphp
                    @endforeach

                </tbody>
            </table> --}}
