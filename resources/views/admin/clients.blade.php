<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.namea', 'Laravel') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

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
            <h2 class="container mt-5">Gestion des clients</h2>
            <div class="row justify-content-start">
                <div class="col-auto">
                    <a href="{{ route('client-add') }}" class="btn btn-primary shadow">
                        <i class="bi bi-plus"></i> Ajouter
                    </a>
                </div>
            </div>

            <!-- Tableau pour afficher les commandes en attente -->
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>E-mail</th>
                        <th>Mot de passe</th>
                        <th>Actions</th> <!-- Ajout de la colonne Actions -->
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemple de commande en attente -->
                    <tr>
                        <td>1234</td>
                        <td>Ramzy</td>
                        <td>Mr 17</td>
                        <td>sawadogoromeo03@gmail.com</td>
                        <td>111111111</td>
                        <td>
                            <a href="{{ route('client-edit') }}" class="btn btn-warning shadow">
                                <i class="bi bi-pencil"></i> Modifier
                            </a>
                            <a href="#" class="btn btn-danger shadow">
                                <i class="bi bi-trash"></i> Supprimer
                            </a>
                        </td>
                    </tr>
                    <!-- Autres commandes en attente peuvent être ajoutées ici -->
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

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>