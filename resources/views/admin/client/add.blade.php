<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Users / Profile - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="../https://fonts.gstatic.com" rel="preconnect">
    <link
        href="../https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <style>
        /* Style pour les labels */
        label {
          font-weight: bold;
          color: #333; /* Changer la couleur selon vos préférences */
        }
      </style>


</head>

<body>

    <!-- ======= Header ======= -->
    @include('admin.partials.header2')
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Clients</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="..//index.html">Home</a></li>
                    <li class="breadcrumb-item active">Clients</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="container mt-5">
                <div class="container mt-5">
                    <h2>Ajouter un Client</h2>
                    <form class=" p-4 shadow" style="width: 50%;">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nom</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                            <div class="invalid-feedback">Veuillez entrer votre nom svp!</div>
                        </div>

                        <div class="mb-3">
                            <label for="lastname" class="form-label">Prénom</label>
                            <input type="text" name="name" class="form-control" id="yourName" required>
                            <div class="invalid-feedback">Veuillez entrer votre prénom svp!</div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" name="email" class="form-control" id="yourEmail"
                                required>
                            <div class="invalid-feedback">Veuillez entrer votre mail valide svp!</div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <div class="input-group has-validation">
                                <input type="text" name="password" class="form-control" id="password"
                                    required>
                                <div class="invalid-feedback">Veuillez entrer votre mot de passe svp!
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Cnnfirmer mot de
                                passe</label>
                            <input type="password" name="password_confirmation" class="form-control"
                                id="password_confirmation" required>
                            <div class="invalid-feedback">Veuillez COnfirmer votre mot de passe svp!
                            </div>
                        </div><br>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary shadow">
                                <i class="bi bi-plus"></i> Ajouter</button>
                        </div>
                    </form>

                  </div>
        </section>

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
    <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/chart.js/chart.umd.js"></script>
    <script src="../assets/vendor/echarts/echarts.min.js"></script>
    <script src="../assets/vendor/quill/quill.min.js"></script>
    <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>


</body>

</html>